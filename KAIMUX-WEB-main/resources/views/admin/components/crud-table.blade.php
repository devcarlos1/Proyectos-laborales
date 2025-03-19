@php ($hash = substr(str_shuffle(str_repeat($x='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(6/strlen($x)) )),1,6))
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        {{$name}}
        @if (!isset($canAdd) || $canAdd)
            <button type="button" data-toggle="modal" data-target="#{{$hash.'-add'}}" class='btn btn-success'>Pridėti</button>
        @endif
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="{{$hash}}" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        @foreach ($columns as $value)
                            @if (is_array($value))
                                <th>{{$value['name']}}</th>
                            @else
                                <th>{{$value}}</th>
                            @endif
                        @endforeach
                        @if ((!isset($canChange) || $canChange) || (!isset($canDelete) || $canDelete))
                            <th>Veiksmai</th>
                        @endif
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        @foreach ($columns as $value)
                            @if (is_array($value))
                                <th>{{$value['name']}}</th>
                            @else
                                <th>{{$value}}</th>
                            @endif
                        @endforeach
                        @if ((!isset($canChange) || $canChange) || (!isset($canDelete) || $canDelete))
                            <th>Veiksmai</th>
                        @endif
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($data as $line)
                    <tr>
                        @foreach ($columns as $column => $value)
                            @if (is_array($value) && isset($value['field']))
                                @php($column = $value['field'])
                            @endif
                            
                            @if ($column === 'image')
                                <td><img src="{{$line->$column}}" height="40ov"/></td>
                            @elseif ($column === 'description')
                                <td>{{strlen($line->$column) > 100 ? substr($line->$column, 0, 99) : $line->$column}}</td>
                            @elseif (is_array($value) && $value['type'] === 'enum')
                                <td>{{$value['model']::from($line->$column)->name}}</td>
                            @elseif (is_array($value) && $value['type'] === 'model')
                                <?php
                                    if ($value['column']) {
                                        $columnToDisplay = $value['column'];
                                        $model = $value['model']::findOrFail($line->$column);

                                        if (strpos($columnToDisplay, '.') !== false) {
                                            $columnToDisplay = explode('.', $columnToDisplay);
                                            while (count($columnToDisplay) > 1) {
                                                $tmp = $columnToDisplay[0];
                                                $model = $model->$tmp();
                                                array_shift($columnToDisplay);
                                            }
                                            $tmp = $columnToDisplay[0];
                                            echo '<td>'.$model->$tmp.'</td>';
                                            
                                        } else {
                                            echo '<td>'.$model->$columnToDisplay.'</td>';
                                        }
                                    } else {
                                        echo '<td>'.$value['model']::findOrFail($line->$column)->title.'</td>';
                                    }
                                ?>
                            @elseif (is_array($value) && $value['type'] === 'boolean')
                                <td>{{$line->$column ? 'Taip' : 'Ne'}}</td>
                            @else
                                <td>{{$line->$column}}</td>
                            @endif
                        @endforeach
                        @if ((!isset($canChange) || $canChange) || (!isset($canDelete) || $canDelete))
                            <td>
                                @if (!isset($canChange) || $canChange)
                                    <button type="button" data-toggle="modal" data-target="#{{$hash.'-change-'.$line->id}}" class='btn btn-warning'>Change</button>
                                @endif
                                @if (!isset($canDelete) || $canDelete)
                                    <a href="{{route('admin-crud-delete', ['model' => $model, 'id' => $line->id])}}" class="btn btn-danger">Delete</a>
                                @endif
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <script>
                $(document).ready(function() {
                    $('#{{$hash}}').DataTable({
                        order: [[{{ $order ?? 0 }}, '{{ $orderType ?? 'asc' }}']],
                    });
                });
            </script>
        </div>
    </div>
</div>

@if (!isset($canChange) || $canChange)
    @foreach ($data as $line)
        <div class="modal" id="{{$hash.'-change-'.$line->id}}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{route('admin-crud-change')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$line->id}}">
                        <input type="hidden" name="model" value="{{$model}}">
                        <div class="modal-header">
                            <h4 class="modal-title">Informacijos keitimas</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            @foreach ($fields as $name => $field)
                                @include('admin.components.field', [
                                    'name' => $name,
                                    'field' => $field,
                                    'value' => $line->$name
                                ])
                            @endforeach
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="Išsaugoti"/>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Uždaryti</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endif


@if (!isset($canAdd) || $canAdd)
    <div class="modal" id="{{$hash.'-add'}}">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{route('admin-crud-add')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="model" value="{{$model}}">
                    <div class="modal-header">
                        <h4 class="modal-title">Pridėti naują</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        @foreach ($fields as $name => $field)
                            @include('admin.components.field', [
                                'name' => $name,
                                'field' => $field,
                                'value' => ''
                            ])
                        @endforeach
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" value="Išsaugoti"/>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Uždaryti</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endif