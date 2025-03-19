<div id="{{$hash}}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong>{{$service->title}}</strong> {{number_format($service->price/100, 2, '.', '')}}€</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>{!! nl2br($service->description) !!}</p>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-12 col-sm-3 align-center"></div>
                    <div class="col-12 col-sm-6 align-center">
                        <table class="table w-100">
                            <tbody>
                            <tr>
                                <th scope="row">Kaina</th>
                                <td>{{number_format($service->price/100, 2, '.', '')}}€</td>
                            </tr>
                            <tr>
                                <th scope="row">SMS Tekstas</th>
                                <td>{{$service->key . ' ' . $username}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Numeris</th>
                                <td>{{\App\Models\Constant::where('type', App\Enumerators\ConstantType::PAYSERA_NUMBER)->first()->value}}</td>
                            </tr>
                            </tbody>
                        </table>
                        <a href="sms:{{\App\Models\Constant::where('type', App\Enumerators\ConstantType::PAYSERA_NUMBER)->first()->value}}?&body={{$service->key . '%20' . $username}}">Spausk čia per telefoną!</a>
                    </div>
                    <div class="col-12 col-sm-3 align-center"></div>
                </div>
            </div>
        </div>
    </div>
</div>
