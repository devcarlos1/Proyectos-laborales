<!DOCTYPE html>
<html lang="lt">
<head>

    @hasSection('title')
        @yield('title')
    @else
        <title>KAIMUX - Lietuviškas Minecraft serveris</title>
    @endif
    @hasSection('description')
        @yield('description')
    @else
        <meta name="description" content="KAIMUX - Geriausias Minecraft serveris Lietuvoje! Užsukite ir prisijunkite prie gausėjančio žaidėjų skaičiaus! Pasirinkite jums norimą žaidimo stilių ir linksmai praleiskite laiką!">
    @endif

	<link rel="shortcut icon" type="image/png" href="/favicon.png"/>
	<meta name="keywords" content="KAIMUX, minecraft, serveris, minecraft serveriai, mc serveriai, mc, geriausi serveriai, geriausias serveris">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/assets/user/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/user/css/stylesheet.css">
	<link rel="stylesheet" href="/assets/user/css/padding.css">
	<script src="https://use.fontawesome.com/30155533f0.js"></script>
	<script type="text/javascript">
		function mobile() {
			var bars = document.getElementById("mnav");
			if(bars.className === "mnav") {
				bars.className += " responsive";
			} else {
				bars.className = "mnav";
			}
		}
	</script>
    <script src="https://cdn.jsdelivr.net/npm/@widgetbot/crate@3" async defer>
        new Crate({
          server: '{{\App\Models\Constant::where('type', App\Enumerators\ConstantType::DISCORD_ID)->first()->value}}',
          channel: '{{\App\Models\Constant::where('type', App\Enumerators\ConstantType::DISCORD_MAIN_CHANNEL)->first()->value}}',
		  location: ['bottom', 'left']
        })
    </script>
	<script type="text/javascript" charset="utf-8">
		var wtpQualitySign_projectId  = {{env('PAYSERA_PROJECT_ID')}};
		var wtpQualitySign_language   = "lt";
	</script>
	<script src="https://bank.paysera.com/new/js/project/wtpQualitySigns.js" type="text/javascript" charset="utf-8"></script>
	

	@hasSection('custom-css')
		@yield('custom-css')
	@endif
</head>
<body>
    @include('user.components.header')
    @yield('content')
	@include('user.components.footer')


	<script src="/assets/user/js/jquery.js"></script>
	<script src="/assets/user/js/bootstrap.min.js"></script>
	<script src="/assets/user/js/main.js" type="text/javascript"></script>
	@hasSection('custom-js')
		@yield('custom-js')
	@endif
</body>
</html>
