@extends('user.layouts.default')

@section('title')
	<title>KAIMUX | Muzika</title>
@endsection

@section('hero')
small
@endsection

@isset($playlist)
    @section('custom-js')
        <script src="/assets/user/js/kaimuxdj.js"></script>
    @endsection
@endif

@section('content')
	<div class="main">
		<div class="row px-10 py-5">
            @isset($status)
                <div class="col-12 col-sm-8">
                    <noscript>
                        <div class="alert alert-danger">
                            Prašome įjungti JavaScript
                        </div>
                    </noscript>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    <center><font color="green"><div id='like' style="display: inline">0</div></font></center>
                                </th>
                                <th style="width: 75%">
                                    <center><font color='black'><div id='user' style="display: inline">Server</div></font></center>
                                </th>
                                <th>
                                    <center><font color="red"><div id='dislike' style="display: inline">0</div></font></center>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="3">
                                <center><div id="player" style="width:100%;"></div></center>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="column">
                        <div class='peoplesscrollbar' style='height: 410px; overflow-y: auto;'>
                            <div id='peoples'></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12">
                    <div id="playVideo"></div>
                    <div id='playlist'></div>
                </div>
            @else
                <div class="col-12 col-sm-4">
                </div>
                <div class="col-12 col-sm-4">
                    <div class="alert alert-danger">
                        Prašome prisijungti prie puslapio per serverį<br>
                        Serveryje įveskite komandą <strong>/dj</strong><br>
                        Spauskite ant nurodytos nuorodos
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                </div>
            @endif
		</div>
	</div>
    @isset($playlist)
        <div id="runDjPage" class="modal fade" role="dialog" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog">
        
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">KAIMUX Muzika</h4>
                </div>
                <div class="modal-body">
                    <h3>Pagrindinės komandos</h3>
                    <table class="table">
                        <tr><td>/dj play [Youtube nuoroda]</td><td>Paleidžia muziką</td></tr>
                        <tr><td>/dj skip</td><td>Praleidžia jūsų dabar grojamą muziką</td></tr>
                        <tr><td>/dj like</td><td>Patinka grojama muzika</td></tr>
                        <tr><td>/dj dislike</td><td>Nepatinka grojama muzika</td></tr>
                    </table>
                    <strong>Komandos leidžiamos per serverį!</strong>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-success" onClick="runDjPage()" data-dismiss="modal">Įeiti į puslapį</button>
                </div>
            </div>
        
            </div>
        </div>
        <script type="text/javascript">
            let date = new Date({{time() * 1000}});
            setInterval(function(){
                date = new Date({{time() * 1000}});
            }, 1000);
            let playlist = [];
            @foreach ($playlist as $music)
                playlist.push('{{$music->music}}');
            @endforeach
            const user = '{{$user}}';
        </script>
    @endif
@endsection
