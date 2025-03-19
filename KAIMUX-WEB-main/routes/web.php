<?php

use App\Http\Controllers\Admin\AdminsController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\IndexController as Index;
use App\Http\Controllers\Admin\IndexController as AdminIndex;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\CrudController;
use App\Http\Controllers\Admin\ConstantsController;
use App\Http\Controllers\Admin\Deals\CurrentDealsController;
use App\Http\Controllers\Admin\Deals\DealsController;
use App\Http\Controllers\Admin\DiscountsController;
use App\Http\Controllers\Admin\DJ\DJControllers;
use App\Http\Controllers\Admin\MessagesController;
use App\Http\Controllers\Admin\RulesController as AdminRules;
use App\Http\Controllers\Admin\Services\BalanceFillingController;
use App\Http\Controllers\Admin\Services\BalancePlayerController;
use App\Http\Controllers\Admin\Services\CategoriesController;
use App\Http\Controllers\Admin\Services\PaymentsController;
use App\Http\Controllers\Admin\Services\PurchasedServicesController;
use App\Http\Controllers\Admin\Services\ServersController;
use App\Http\Controllers\Admin\Services\ServicesController;
use App\Http\Controllers\Admin\Support\QuestionsAdditionalController;
use App\Http\Controllers\Admin\Support\QuestionsController;
use App\Http\Controllers\Admin\Support\QuestionsFilledController;
use App\Http\Controllers\APIController;
use App\Http\Controllers\HotDeals\ApiHotDealController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\PaySera\BankController;
use App\Http\Controllers\PaySera\PaypalController;
use App\Http\Controllers\PaySera\SmsController;
use App\Http\Controllers\PaySera\PayseraResponseController;
use App\Http\Controllers\User\BalanceTopupController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\User\DealsController as UserDealsController;
use App\Http\Controllers\User\DJController;
use App\Http\Controllers\User\RulesController as Rules;
use App\Http\Controllers\User\StoreController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [Index::class, 'create'])->name('main');
Route::get('/test', [Index::class, 'test']);
Route::get('/discord', [Index::class, 'toDiscord'])->name('discord');
Route::get('/rules', [Rules::class, 'create'])->name('rules');
Route::get('/contact', [ContactController::class, 'create'])->name('contact');
Route::post('/contact/send', [ContactController::class, 'sendMessage'])->name('contact-send');
Route::get('/dj', [DJController::class, 'create'])->name('dj');
Route::get('/dj/{username}/{hash}', [DJController::class, 'createCorrect']);

Route::get('/store/login', [StoreController::class, 'create'])->name('store-login');
Route::post('/store/user-login', [StoreController::class, 'login'])->name('store-user-login');
Route::get('/store', [StoreController::class, 'main'])->name('store-main');
Route::get('/cart', [CartController::class, 'create'])->name('cart');
Route::post('/cart/buy', [CartController::class, 'buy'])->name('cart-buy');

Route::get('/store/balance', [BalanceTopupController::class, 'create'])->name('balance-topup');
Route::post('/store/topup', [BalanceTopupController::class, 'buy'])->name('balance-buy');

Route::get('/deals/{deal}', [UserDealsController::class, 'create'])->name('deals');
Route::post('/deals/{deal}/buy', [UserDealsController::class, 'buy'])->name('deals-buy');

Route::get('/success', [PayseraResponseController::class, 'success'])->name('paysera-success');
Route::get('/cancel', [PayseraResponseController::class, 'cancel'])->name('paysera-cancel');

Route::get('/IP', function () {
    return View('IP.index');
});
Route::get('/ip', function () {
    return View('IP.index');
});
//Admin
Route::get('/admin', [AdminIndex::class, 'create'])->name("admin");
Route::post('/admin', [AdminIndex::class, 'login'])->name("login");

Route::get('/admin/users', [UsersController::class, 'create'])->name("admin-users");
Route::get('/admin/admins', [AdminsController::class, 'create'])->name("admin-admins");
Route::get('/admin/messages', [MessagesController::class, 'create'])->name("admin-messages");
Route::get('/admin/main', [MainController::class, 'create'])->name("admin-main");
Route::get('/admin/rules', [AdminRules::class, 'create'])->name("admin-rules");
Route::get('/admin/constants', [ConstantsController::class, 'create'])->name("admin-constants");
Route::get('/admin/discounts', [DiscountsController::class, 'create'])->name("admin-discounts");
Route::get('/admin/DJ/playlist', [DJControllers::class, 'defaultPlaylist'])->name("admin-dj-playlist");
Route::get('/admin/DJ/queue', [DJControllers::class, 'queue'])->name("admin-dj-queue");
Route::post('/admin/main/changeFirstText', [MainController::class, 'changeFirstText'])->name("admin-main-changeFirstText");

Route::get('/admin/services/services', [ServicesController::class, 'create'])->name("admin-services");
Route::get('/admin/services/balance-filling', [BalanceFillingController::class, 'create'])->name("admin-balance-filling");
Route::get('/admin/services/balance-player', [BalancePlayerController::class, 'create'])->name("admin-balance-player");
Route::get('/admin/services/servers', [ServersController::class, 'create'])->name("admin-servers");
Route::get('/admin/services/categories', [CategoriesController::class, 'create'])->name("admin-categories");
Route::get('/admin/services/payments', [PaymentsController::class, 'create'])->name("admin-payments");
Route::post('/admin/services/payments', [PaymentsController::class, 'filter'])->name("admin-payments-filter");
Route::get('/admin/services/purchased-services', [PurchasedServicesController::class, 'create'])->name("admin-purchased-services");
Route::post('/admin/services/purchased-services', [PurchasedServicesController::class, 'filter'])->name("admin-purchased-services-filter");
Route::get('/admin/services/payment-methods', [PaymentsController::class, 'createPaymentMethods'])->name("admin-payment-methods");

Route::get('/admin/support/questions', [QuestionsController::class, 'create'])->name("admin-support-questions");
Route::get('/admin/support/filled', [QuestionsFilledController::class, 'create'])->name("admin-support-filled");
Route::get('/admin/support/additional-questions', [QuestionsAdditionalController::class, 'create'])->name("admin-support-additional-questions");

Route::post('/admin/crud-change', [CrudController::class, 'change'])->name("admin-crud-change");
Route::post('/admin/crud-add', [CrudController::class, 'add'])->name("admin-crud-add");
Route::get('/admin/crud-delete/{id}/{model}', [CrudController::class, 'delete'])->name("admin-crud-delete");

Route::get('/admin/deals/deals', [DealsController::class, 'create'])->name("admin-deals");
Route::get('/admin/deals/current', [CurrentDealsController::class, 'create'])->name("admin-current-deals");

//Paysera
Route::post('/paysera/bank', [BankController::class, 'get']);
Route::post('/paysera/sms', [SmsController::class, 'get']);
Route::post('/paypal/success', [PaypalController::class, 'get']);

//API
Route::get('/api/checkDiscountCodeSingle/{code}/{username}/{service}', [APIController::class, 'discountCodeCheckSingle']);
Route::get('/api/checkDiscountCodeCart/{code}/{username}', [APIController::class, 'discountCodeCheckCart']);
Route::get('/api/addToCart/{service}', [APIController::class, 'addToCart']);
Route::get('/api/minusFromCart/{service}', [APIController::class, 'minusFromCart']);
Route::get('/api/plusToCart/{service}', [APIController::class, 'plusToCart']);
Route::get('/api/recalculateCartPrice', [APIController::class, 'recalculateCartPrice']);
Route::post('/api/rules', [APIController::class, 'getRules']);
Route::get('/api/isPlayerPurchasedService', [APIController::class, 'isPlayerPurchasedService']);

Route::post('/api/dj/play', [APIController::class, 'DJplay']);
Route::post('/api/dj/skip', [APIController::class, 'DJskip']);
Route::post('/api/dj/getCurrent', [APIController::class, 'DJgetCurrent']);
Route::post('/api/dj/getListeners', [APIController::class, 'DJgetListeners']);
Route::post('/api/dj/playlist', [APIController::class, 'DJplaylist']);
Route::post('/api/dj/playlist/delete', [APIController::class, 'DJplaylistDelete']);
Route::post('/api/dj/like', [APIController::class, 'DJlike']);
Route::post('/api/dj/dislike', [APIController::class, 'DJdislike']);
Route::post('/api/dj/take', [APIController::class, 'DJtake']);

Route::post('/api/hotDeal', [ApiHotDealController::class, 'getHotDeal']);

Route::post('/api/services', [APIController::class, 'getServices']);

Route::get('/api/addUnequeJoin', [APIController::class, 'addUnequeJoin']);

Route::get('create-transaction', [PayPalController::class, 'createTransaction'])->name('createTransaction');
Route::get('process-transaction', [PayPalController::class, 'processTransaction'])->name('processTransaction');
Route::get('success-transaction', [PayPalController::class, 'successTransaction'])->name('successTransaction');
Route::get('cancel-transaction', [PayPalController::class, 'cancelTransaction'])->name('cancelTransaction');