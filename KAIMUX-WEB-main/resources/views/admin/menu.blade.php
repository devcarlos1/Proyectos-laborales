@php
    $currentRoute = Route::currentRouteName();

    $pages = [
        [
            'category' => 'Core'
        ],
        [
            'name' => 'Pagrindinis',
            'route' => 'admin'
        ],
        [
            'category' => 'Informacija'
        ],
        [
            'name' => 'Puslapiai',
            'pages' => [
                [
                    'name' => 'Pagrindinis',
                    'route' => 'admin-main'
                ],
                [
                    'name' => 'Taisyklės',
                    'route' => 'admin-rules'
                ],
                [
                    'name' => 'Administracija',
                    'route' => 'admin-admins'
                ],
                [
                    'name' => 'Konstantos',
                    'route' => 'admin-constants'
                ]
            ]
        ],
        [
            'name' => 'Paslaugos',
            'pages' => [
                [
                    'name' => 'Serveriai',
                    'route' => 'admin-servers'
                ],
                [
                    'name' => 'Kategorijos',
                    'route' => 'admin-categories'
                ],
                [
                    'name' => 'Paslaugos',
                    'route' => 'admin-services'
                ],
                [
                    'name' => 'Balanso pildymas',
                    'route' => 'admin-balance-filling'
                ],
                [
                    'name' => 'Žaidėjų balansai',
                    'route' => 'admin-balance-player'
                ],
                [
                    'name' => 'Užsakymo būdai',
                    'route' => 'admin-payment-methods'
                ],
                [
                    'name' => 'Nuolaidų kodai',
                    'route' => 'admin-discounts'
                ],
                [
                    'name' => 'Užsakymai',
                    'route' => 'admin-payments'
                ],
                [
                    'name' => 'Paslaugų užsakymai',
                    'route' => 'admin-purchased-services'
                ],
            ]
        ],
        [
            'name' => 'Pasiūlymai',
            'pages' => [
                [
                    'name' => 'Pasiūlymai',
                    'route' => 'admin-deals'
                ],
                [
                    'name' => 'Egzistuojantys pasiūlymai',
                    'route' => 'admin-current-deals'
                ],
            ]
        ],
        [
            'name' => 'DJ',
            'pages' => [
                [
                    'name' => 'Grojeraštis',
                    'route' => 'admin-dj-playlist'
                ],
                [
                    'name' => 'Queue sąrašas',
                    'route' => 'admin-dj-queue'
                ]
            ]
        ],
        [
            'name' => 'Support Klausimai',
            'pages' => [
                [
                    'name' => 'Klausimai',
                    'route' => 'admin-support-questions'
                ],
                [
                    'name' => 'Papildomi klausimai',
                    'route' => 'admin-support-additional-questions'
                ],
                [
                    'name' => 'Atrinkti',
                    'route' => 'admin-support-filled'
                ],
            ]
        ],
        [
            'category' => 'Visa kita'
        ],
        [
            'name' => 'Administratoriai',
            'route' => 'admin-users'
        ],
        [
            'name' => 'Žinutės',
            'route' => 'admin-messages'
        ],
    ];

    function toShow($pages, $currentRoute) {
        foreach ($pages as $page) {
            if ($page['route'] == $currentRoute) {
                return true;
            }
        }
        return false;
    }
@endphp
<div class="sb-sidenav-menu">
    <div class="nav">
        @foreach ($pages as $page)
            @isset($page['pages'])
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse{{ str_replace(' ', '', $page['name']) }}" aria-expanded="false" aria-controls="collapse{{ $page['name'] }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    {{ $page['name'] }}
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse {{ toShow($page['pages'], $currentRoute) ? 'show' : '' }}" id="collapse{{ str_replace(' ', '', $page['name']) }}" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        @foreach ($page['pages'] as $subPage)
                            <a class="nav-link {{ $subPage['route'] === $currentRoute ? 'active' : '' }}" href="{{route($subPage['route'])}}">{{$subPage['name']}}</a>
                        @endforeach
                    </nav>
                </div>
            @elseif (isset($page['route']))
                <a class="nav-link {{ $page['route'] === $currentRoute ? 'active' : '' }}" href="{{ route($page['route']) }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    {{ $page['name'] }}
                </a>
            @elseif (isset($page['category']))
                <div class="sb-sidenav-menu-heading">{{$page['category']}}</div>
            @endisset
        @endforeach
    </div>
</div>
