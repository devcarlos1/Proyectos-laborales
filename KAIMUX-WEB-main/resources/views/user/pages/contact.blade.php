@extends('user.layouts.default')

@section('title')
	<title>KAIMUX | Kontaktai</title>
@endsection

@section('hero')
small
@endsection

@section('content')
	<div class="main">
		<div class="row px-10 py-5">
			<div class="col-12 col-sm-8">
                <iframe src="https://e.widgetbot.io/channels/{{\App\Models\Constant::where('type', App\Enumerators\ConstantType::DISCORD_ID)->first()->value}}/{{\App\Models\Constant::where('type', App\Enumerators\ConstantType::DISCORD_SUPPORT_CHANNEL)->first()->value}}" height="600" width="95%"></iframe>
			</div>
			<div class="col-12 col-sm-4">
                <div class="row">
                    <div class="col-12 pb-3">
                        <h3>Kontaktai</h3>
                        Susisiekite Jums rūpimais klausimais
                        <table class="table">
                            <tr>
                                <td>
                                    <i class="fa fa-envelope"></i>
                                </td>
                                <td>
                                    <a href="mailto:{{\App\Models\Constant::where('type', App\Enumerators\ConstantType::CONTACT_EMAIL)->first()->value}}">{{\App\Models\Constant::where('type', App\Enumerators\ConstantType::CONTACT_EMAIL)->first()->value}}</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <i class="fa fa-phone"></i>
                                </td>
                                <td>
                                    <a href="tel:{{\App\Models\Constant::where('type', App\Enumerators\ConstantType::CONTACT_PHONE)->first()->value}}">{{\App\Models\Constant::where('type', App\Enumerators\ConstantType::CONTACT_PHONE)->first()->value}}</a>
                                </td>
                        </table>
                    </div>
                    @isset($success)
                        <div class="col-12">
                            <div class="alert alert-success">
                                Laiškas sėkmingai išsiųstas
                            </div>
                        </div>
                        <br>
                    @endisset
                    <form action="{{route('contact-send')}}" method="post" onSubmit="return onSubmit()">
                        @csrf
                        <div class="col-12 align-center">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Slapyvardis">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="El. Paštas">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="4" placeholder="Žinutė"></textarea>
                            </div>
                            <center><div id="recaptcha"></div></center>
                            <input type="submit" class="btn btn-success" value="Siųsti">

                            <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
                            <script type="text/javascript">
                                var doRecaptcha = false;
                                function onSubmit() {
                                  return doRecaptcha;
                                }
                                function submitedRecaptcha(token) {
                                  doRecaptcha = true;
                                }
                                function preventRecaptcha(token) {
                                  doRecaptcha = false;
                                }
                                var onloadCallback = function() {
                                  grecaptcha.render('recaptcha', {
                                    'sitekey' : '6Lfmr2skAAAAAAN11nLusuGSfVGbsd67ONfIBXqd',
                                    'callback' : submitedRecaptcha,
                                    'expired-callback' : preventRecaptcha,
                                    'error-callback' : preventRecaptcha,
                                    'theme' : 'white'
                                  });
                                };
                            </script>
                        </div>
                    </form>
                </div>
			</div>
		</div>
	</div>
@endsection
