<header>
    <div class="nav">
        <ul class="nav-items" id="nav-items">
            <a><li onclick="mobile()" class="icon fa fa-bars fa-2x"></li></a>
            <a href="{{route('main')}}"><li class="h">
                <div class="overlay"></div>
                Pagrindinis
            </li></a>
            <a href="{{route('store-login')}}"><li class="h">
                <div class="overlay"></div>
                Paslaugos
            </li></a>
            <a href="{{route('rules')}}"><li class="h">
                <div class="overlay"></div>
                Taisyklės
            </li></a>
            <a href="{{route('main')}}">
                <div class="log">
                    <img alt="MyServer Logo" class="logo" src="/assets/user/img/logo.png">
                </div>
            </a>
            <a href="{{route('dj')}}"><li class="h">
                <div class="overlay"></div>
                Muzika
            </li></a>
            <a href="{{route('contact')}}"><li class="h">
                <div class="overlay"></div>
                Kontaktai
            </li></a>
            <a href="{{route('discord')}}"><li class="h">
                <div class="overlay"></div>
                Discord
            </li></a>
        </ul>
        <div class="mnav" id="mnav">
            <a href="{{route('main')}}"><li class="i">
                Pagrindinis
            </li></a>
            <a href="{{route('store-login')}}"><li class="i">
                Paslaugos
            </li></a>
            <a href="{{route('rules')}}"><li class="i">
                Taisyklės
            </li></a>
            <a href="{{route('dj')}}"><li class="i">
                Muzika
            </li></a>
            <a href="{{route('contact')}}"><li class="i">
                Kontaktai
            </li></a>
            <a href="{{route('discord')}}"><li class="i">
                Discord
            </li></a>
        </div>
    </div>

    @hasSection('hero')
        <div class="herosmall" id="main">
            <p class="info">
                <span class="sip" data-ip="mc.kaimux.lt" data-port="25565">0</span> | <span><i class="fa fa-copy" aria-hidden="true"></i></span> <span class="ip">MC.KAIMUX.LT</span>
            </p>
        </div>
    @else
        <div class="hero" id="main">
            <h1>KAIMUX.LT</h1>
            <!-- Replace play.myserver.net with your IP address -->
            <!-- Do it for both examples below -->
            <!-- Please set both your IP and port -->
            <p class="info">
                <span class="sip" data-ip="mc.kaimux.lt" data-port="25565">0</span> | <span><i class="fa fa-copy" aria-hidden="true"></i></span> <span class="ip">MC.KAIMUX.LT</span>
            </p>
        </div>
    @endif
</header>
