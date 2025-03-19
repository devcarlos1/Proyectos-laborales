<?php

namespace App\Http\Controllers;

use App\API\Rcon\Rcon;
use App\Enumerators\DJStatus;
use App\Models\Category;
use App\Models\DiscountCode;
use App\Models\DJCurrentlyListening;
use App\Models\DJPlaylist;
use App\Models\DJQueue;
use App\Models\Payment;
use App\Models\Rule;
use App\Models\Server;
use App\Models\Service;
use App\Models\UnequeJoinPerDay;
use App\Services\ServicesService;
use App\Services\User\CartService;
use Carbon\Carbon;
use Illuminate\Http\Request;

class APIController extends Controller
{
    private $server = [
        'survival' => [
            'ip' => '192.168.88.250',
            'port' => '25577',
            'pass' => 'lrK7r7awzdUq9aMd1',
        ],
        'skyblock' => [
            'ip' => '192.168.88.250',
            'port' => '25576',
            'pass' => 'lrK7r7awzdUq9aMd1',
        ],
        'creative' => [
            'ip' => '192.168.88.250',
            'port' => '25580',
            'pass' => 'lrK7r7awzdUq9aMd1',
        ],
        'boxpvp' => [
            'ip' => '192.168.88.250',
            'port' => '25581',
            'pass' => 'lrK7r7awzdUq9aMd1',
        ],
        'prison' => [
            'ip' => '192.168.88.250',
            'port' => '25579',
            'pass' => 'lrK7r7awzdUq9aMd1',
        ]
    ];

    private $cartService;

    private $servicesService;

    public function __construct(
        CartService $cartService,
        ServicesService $servicesService
    )
    {
        $this->cartService = $cartService;
        $this->servicesService = $servicesService;
    }

    public function discountCodeCheckCart(Request $request): array
    {
        $discountCode = strtoupper($request->code);
        $username = $request->username;

        $discount = DiscountCode::where('code', $discountCode)->first();
        if ($discount === null) {
            return ['status' => 3];
        }
        $validFromTime = strtotime($discount->valid_from);
        $validToTime = strtotime($discount->valid_to);
        if ($validFromTime > strtotime(date('Y-m-d H:i:s')) || $validToTime < strtotime(date('Y-m-d H:i:s'))) {
            return ['status' => 3];
        }
        if ($discount->valid_for !== null && $discount->valid_for != $username) {
            return ['status' => 3];
        }

        $limit = $discount->limit;
        $uses = $discount->uses;

        $cart = $this->cartService->getCart();
        $price = $this->cartService->getPrice($cart, $discount);

        return [
            'status' => 1, 
            'amount' => $discount->amount, 
            'valid_for_service' => Service::find($discount->valid_for_service) ? Service::find($discount->valid_for_service)->title : null, 
            'limit' => $limit !== null ? $limit - $uses : null,
            'price' => $price
        ];
    }

    public function getRules(Request $request)
    {
        $server = $request->serverID;
        $return = [];
        foreach (Rule::all() as $rule) {
            if ($rule->servers === '*' || strpos($rule->servers, $server) !== false) {
                $return[] = $rule->rule;
            }
        }
        die(implode('!!!!&c', $return));
    }

    public function DJGetListeners(Request $request): array
    {
        $username = $request->username;
        $currentlyListening = DJCurrentlyListening::where('username', $username)->first();
        if ($currentlyListening === null) {
            $currentlyListening = new DJCurrentlyListening();
        }
        $currentlyListening->username = $username;
        $currentlyListening->lastPing = date('Y-m-d H:i:s');
        $currentlyListening->save();

        
        $listeners = DJCurrentlyListening::where('lastPing', '>=', date('Y-m-d H:i:s', strtotime('-1 minute')))->get();
        $return = [];
        foreach ($listeners as $listener) {
            $return[] = $listener->username;
        }

        $queue = DJQueue::where('status', DJStatus::WAITING)->get();
        $i = 1;
        $inqueue = -1;
        foreach ($queue as $inline) {
            if ($inline->username == $username) {
                $inqueue = $i;
                break;
            }
            $i++;
        }
        return ['listeners' => $return, 'inQueue' => $inqueue];
    }

    public function DJgetCurrent(Request $request): array
    {
        $username = $request->username;
        $listener = DJCurrentlyListening::where('lastPing', '>=', date('Y-m-d H:i:s', strtotime('-1 minute')))->first();

        $current = DJQueue::where('status', DJStatus::PLAYING)->first();
        if ($current != null) {
            if ($current->end < now() && $username === $listener->username) {
                $current->status = DJStatus::PLAYED;
                $current->save();
                $this->sendToServersAboutMusicEnd($current);
                $current = null;
            }
            if (!$current) {
                return ['current' => null, 'user' => 'Server', 'at' => null, 'likes' => 0, 'dislikes' => 0];
            }
            $currentTime = time();
            $started = strtotime($current->start);
            $at = $currentTime - $started;

            $likes = 0;
            $dislikes = 0;
            if ($current->likes)
                $likes = sizeof(explode(',', $current->likes));
            if ($current->dislikes)
                $dislikes = sizeof(explode(',', $current->dislikes));

            return ['current' => $current->music, 'user' => $current->username, 'at' => $at, 'likes' => $likes, 'dislikes' => $dislikes];
        } else if ($username === $listener->username) {
            $current = DJQueue::where('status', DJStatus::WAITING)->first();
            if ($current) {
                $current->status = DJStatus::PLAYING;
                $current->start = now();
                $current->end = now()->addSeconds($this->getDuration($current->music));
                $current->save();
                
                $currentTime = time();
                $started = strtotime($current->start);
                $at = $currentTime - $started;

                $this->sendToServersAboutNewMusic($current->username, $current->music);
                return ['current' => $current->music, 'user' => $current->username, 'at' => $at, 'likes' => 0, 'dislikes' => 0];
            }
        }
        return ['current' => null, 'user' => 'Server', 'at' => null, 'likes' => 0, 'dislikes' => 0];
    }

    private function sendToServersAboutNewMusic(string $username, string $music)
    {
        $title = DJPlaylist::where('music', $music)->first()->title;
        foreach ($this->server as $server) {
            try {
                $rcon = new Rcon($server['ip'], $server['port'], $server['pass'], 100);
                if ($rcon->connect()) {
                    $rcon->send_command("bc &a ❖ &8| &7Žaidėjas &a$username &7paleido savo muziką! &a/dj");
                    $rcon->send_command("bc &a ❖ &8| &7$title");
                    $rcon->disconnect();
                }
            } catch (\Exception $e) {
                continue;
            }
        }
    }

    private function sendToServersAboutMusicEnd(DJQueue $current)
    {
        $username = $current->username;
        $likes = 0;
        $dislikes = 0;
        $sum = 0;
        $currentlyListeningAmount = DJCurrentlyListening::where('lastPing', '>=', date('Y-m-d H:i:s', strtotime('-1 minute')))->count();
        if ($current->likes)
            $likes = sizeof(explode(',', $current->likes));
        if ($current->dislikes)
            $dislikes = sizeof(explode(',', $current->dislikes));
        
        $timePlayed = strtotime($current->end) - strtotime($current->start);
        if ($timePlayed > 60)
            $sum = (($currentlyListeningAmount * 5) + ($likes * 5) - ($dislikes * 15));

        foreach ($this->server as $key => $server) {
            $rcon = new Rcon($server['ip'], $server['port'], $server['pass'], 100);
            try {
                if ($rcon->connect()) {
                    if ($key === "creative" || $key === "boxpvp") {
                        $rcon->send_command("bc &a ❖ &8| &7Žaidėjo &a$username&7 muzika baigėsi!");
                        $rcon->send_command("bc &a ❖ &8| &7Patiko: &a$likes&7; Nepatiko: &c$dislikes&7; Klausytojų: &b$currentlyListeningAmount");
                    } else {
                        if ($sum != 0) {
                            $rcon->send_command("bc &a ❖ &8| &7Žaidėjas &a$username &7gavo &a$$sum&7€ už paleistą muziką!");
                            $rcon->send_command("bc &a ❖ &8| &7Patiko: &a$likes&7; Nepatiko: &c$dislikes&7; Klausytojų: &b$currentlyListeningAmount");
                            $rcon->send_command("runonline $username money give $username $sum");
                        } else {
                            $rcon->send_command("bc &a ❖ &8| &7Žaidėjas &a$username &7muzika baigėsi! (Buvo per trumpa)");
                        }
                    }
                    $rcon->disconnect();
                }
            } catch (\Exception $e) {
                continue;
            }
        }
    }

    public function DJskip(Request $request): array
    {
        $username = $request->username;
        $isAdmin = $request->isAdmin;
        $current = null;
        
        if ($isAdmin)
            $current = DJQueue::where('status', DJStatus::PLAYING)->first();
        else
            $current = DJQueue::where(['status' => DJStatus::PLAYING, 'username' => $username])->first();

        if ($current) {
            $current->status = DJStatus::PLAYED;
            $current->save();
            return ['status' => true];
        } else {
            return ['status' => false];
        }
    }

    private function get_string_between($string, $start, $end): string
    {
        $string = " ".$string;
        $ini = strpos($string,$start);
        if ($ini == 0) return "";
        $ini += strlen($start);
        $len = strpos($string,$end,$ini) - $ini;
        return substr($string,$ini,$len); 
    }

    private function getDuration(string $music): int
    {
        $apikey = 'AIzaSyC_BY4QmnfthycGTqvVcNPN7VOf8txDgDo';
        $dur = file_get_contents('https://www.googleapis.com/youtube/v3/videos?part=contentDetails&id='.$music.'&key='.$apikey);
        $VidDuration1 = json_decode($dur, true);
        foreach ($VidDuration1['items'] as $vidTime) 
        {
            $VidDuration = $vidTime['contentDetails']['duration'];
        }
        if (!isset($VidDuration)) {
            return 0;
        }
        $VidDuration = str_replace("PT","",$VidDuration);
        $valandu = 0;
        $minuciu = 0;
        $sekundziu = 0;
        if (strpos($VidDuration,"H") !== false) {
            $VidDuration = "[ $VidDuration";
            $valandu = (int) $this->get_string_between($VidDuration, "[ ", "H");
            $VidDuration = str_replace("[ ".$valandu."H","",$VidDuration);
            $valandu = $valandu * 60 * 60;
        }
        if (strpos($VidDuration,"M") !== false) {
            $VidDuration = "[ $VidDuration";
            $minuciu =  (int) $this->get_string_between($VidDuration, "[ ", "M");
            $VidDuration =str_replace("[ ".$minuciu."M","",$VidDuration);
            $minuciu = $minuciu * 60;
        }
        if (strpos($VidDuration,"S") !== false) {
            $VidDuration = "[ $VidDuration";
            $sekundziu = (int) $this->get_string_between($VidDuration, "[ ", "S");
            $VidDuration = str_replace("[ ".$sekundziu."S","",$VidDuration);
        }
        $sekundes = $valandu + $minuciu + $sekundziu + 1;
        
        if ($sekundes > 300) $sekundes = 300;
        return $sekundes;
    }

    private function getBetween($content, $start, $end): string|null
    {
        $r = explode($start, $content);
        if (isset($r[1])){
            $r = explode($end, $r[1]);
            return $r[0];
        }
        return null;
    }

    private function clean1($video): string|null
    {
        $video = "$video&";
        return $this->getBetween($video, "v=", "&");
    }

    private function clean2($video): string|null
    {
        $video = "$video&";
        return $this->getBetween($video, "youtu.be/", "&");
    }

    public function DJplay(Request $request): array
    {
        $username = $request->username;
        $music = $request->music;

        if (!$request->has('fromPage')) {
            if (strpos($music,'youtube') !== false) {
                $music = $this->clean1($music);
            } else if (strpos($music,'youtu.be') !== false) {
                $music = $this->clean2($music);
            } else
                return ['status' => 4];
        }

        if (!DJPlaylist::where('music', $music)->exists()) {
            $playlist = new DJPlaylist();
            $playlist->username = $username;
            $playlist->music = $music;
            $playlist->title = $this->getMusicTitle($music);
            $playlist->save();
        }
        if (DJQueue::where('music', $music)->exists()) {
            return ['status' => 2];
        }
        if (DJQueue::where(['status' => DJStatus::WAITING, 'username' => $username])->exists()) {
            return ['status' => 3];
        }
        $queue = new DJQueue();
        $queue->username = $username;
        $queue->music = $music;
        $queue->status = DJStatus::WAITING;
        $queue->save();
        return ['status' => 1];
    }

    private function getMusicTitle($music): string 
    {
        $title = "NOT FOUND";
        $apikey = "AIzaSyC_BY4QmnfthycGTqvVcNPN7VOf8txDgDo";
        $dur = file_get_contents("https://www.googleapis.com/youtube/v3/videos?part=snippet&id=$music&key=$apikey");
        $information = json_decode($dur, true);
        foreach ($information['items'] as $vidTime) 
        {
            $title = $vidTime['snippet']['title'];
        }
        return $title;
    }

    public function DJplaylistDelete(Request $request): array
    {
        $username = $request->username;
        $music = $request->music;
        $playlist = DJPlaylist::where(['username' => $username, 'music' => $music])->first();
        if ($playlist) 
            $playlist->delete();
        return ['status' => true];
    }

    public function DJplaylist(Request $request): array
    {
        $username = $request->username;
        $playlist = DJPlaylist::where('username', $username)->get();
        $return = [];
        foreach ($playlist as $music) {
            $return[] = [
                'music' => $music->music, 
                'title' => $music->title, 
                'played' => DJQueue::where('music', $music->music)->exists()
            ];
        }
        return ['playlist' => $return];
    }

    public function DJlike(Request $request): array
    {
        $username = $request->username;
        $current = DJQueue::where('status', DJStatus::PLAYING)->first();
        $currentlyListening = DJCurrentlyListening::where('username', $username)->first();
        if (!$currentlyListening) {
            return ['status' => 5];
        }
        if ($current) {
            if ($current->username == $username) {
                return ['status' => 4];
            }
            $currentLikes = [];
            if ($current->likes) {
                $currentLikes = explode(',', $current->likes);
            }
            if (!in_array($username, $currentLikes)) {
                $currentLikes[] = $username;
                $current->likes = implode(',', $currentLikes);
                $current->save();
                return ['status' => 1];
            }
            return ['status' => 2];
        }
        return ['status' => 3];
    }

    public function DJdislike(Request $request): array
    {
        $username = $request->username;
        $current = DJQueue::where('status', DJStatus::PLAYING)->first();
        $currentlyListening = DJCurrentlyListening::where('username', $username)->first();
        if (!$currentlyListening) {
            return ['status' => 5];
        }
        if ($current) {
            if ($current->username == $username) {
                return ['status' => 4];
            }
            $currentDislikes = [];
            if ($current->dislikes) {
                $currentDislikes = explode(',', $current->dislikes);
            }
            if (!in_array($username, $currentDislikes)) {
                $currentDislikes[] = $username;
                $current->dislikes = implode(',', $currentDislikes);
                $current->save();
                return ['status' => 1];
            }
            return ['status' => 2];
        }
        return ['status' => 3];
    }

    public function DJtake(Request $request): array
    {
        $username = $request->username;
        $current = DJQueue::where('status', DJStatus::PLAYING)->first();
        if ($current) {
            $music = $current->music;
            if (!DJPlaylist::where('music', $music)->exists()) {
                $playlist = new DJPlaylist();
                $playlist->username = $username;
                $playlist->music = $music;
                $playlist->title = $this->getMusicTitle($music);
                $playlist->save();
                return ['status' => 1]; // added to playlist
            }
            return ['status' => 2]; // already in playlist 
        }
        return ['status' => 3]; // no song playing
    }

    public function addToCart(Request $request)
    {
        $serviceId = $request->service;
        
        $service = Service::where('id', $serviceId)->first();
        if ($service !== null) {
            $this->cartService->addToCart($service);
        }
    }

    public function minusFromCart(Request $request)
    {
        $serviceId = $request->service;
        
        $service = Service::where('id', $serviceId)->first();
        if ($service !== null) {
            return ['count' => $this->cartService->removeFromCart($service)];
        }
    }

    public function plusToCart(Request $request)
    {
        $serviceId = $request->service;
        
        $service = Service::where('id', $serviceId)->first();
        if ($service !== null) {
            return ['count' => $this->cartService->addToCart($service)];
        }
    }

    public function recalculateCartPrice(Request $request)
    {
        $cart = $this->cartService->getCart();
        $totalPrice = 0;

        foreach ($cart as $item) {
            $count = $item['count'];
            $service = $item['service'];
            $totalPrice += $service->price * $count;
        }
        
        return ['totalPrice' => number_format($totalPrice/100, 2, '.', '')];
    }

    public function isPlayerPurchasedService(Request $request): array
    {
        $serviceId = $request->serviceId;
        $name = $request->name;
        $date = $request->date;
        $from = $request->from;
        $code = $request->seecredCode;

        if ($code !== "KaimuxRandomSeectretCode") {
            return ['status' => 0,
                'serviceKey' => $serviceId,
                    'name' => $name,
                    'date' => $date,
                    'from' => $from,
                    'code' => $code];
        }

        $service = Service::where('id', $serviceId)->first();
        if ($service === null) {
            return ['status' => 1];
        }

        $date = str_replace('-', '/', $date);
        $corbanDate = Carbon::createFromFormat('Y/m/d', $date);

        $result = Payment::where('service', 'LIKE', '%'.$serviceId.'%')
                ->where('username', $name)
                ->where('from', $from)
                ->whereYear('created_at', $corbanDate->year)
                ->whereMonth('created_at', $corbanDate->month)
                ->whereDay('created_at', $corbanDate->day)->first();

        if (!$result) {
            return ['status' => 2];
        }
        
        return ['status' => 3];
    }

    public function getServices(Request $request): array
    {
        $return = [];

        $server = Server::findOrFail($request->serverID);
        $categories = $server->getCategories();
        
        foreach ($categories as $category) {
            $services = $category->getServices();
            $return[$category->title] = [
                'line' => $category->line,
                'icon' => $category->icon,
                'services' => [],
            ];
            foreach ($services as $service) {
                $return[$category->title]['services'][$service->title] = [
                    'description' => $service->description,
                    'price' => $service->price,
                    'icon' => $service->icon,
                    'line' => $service->line,
                ];
            }
        }

        return $return;
    }

    public function addUnequeJoin(Request $request)
    {
        UnequeJoinPerDay::addToToday(1);
    }
}
