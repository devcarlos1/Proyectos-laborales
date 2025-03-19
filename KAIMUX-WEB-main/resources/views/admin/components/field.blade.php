@switch($field['type'])
    @case('text')
        <div class="col-12">
            <label for="{{$name}}">{{$field['label']}} {{!isset($field['required']) || !$field['required'] ? '' : '*'}}</label>
            <input 
                type="text" 
                name="{{$name}}" 
                placeholder="{{$field['placeholder']}}" 
                class="form-control" 
                value="{{!isset($field['hideValue']) || !$field['hideValue'] ? $value : ''}}"
                {{!isset($field['disabled']) || !$field['disabled'] ? '' : 'disabled'}}
                {{!isset($field['required']) || !$field['required'] ? '' : 'required'}}
            /><br>
        </div>
        @break
    @case('select')
        <div class="col-12">
            <label for="{{$name}}">{{$field['label']}} {{!isset($field['required']) || !$field['required'] ? '' : '*'}}</label>
            <select 
                name="{{$name}}" 
                class="form-control" 
                {{!isset($field['required']) || !$field['required'] ? '' : 'required'}}
            >
                @if ($value && $value !== '')
                    <option value="{{$value}}">{{$field['options'][$value]}}</option>
                @endif
                @if (isset($field['allowEmpty']) && $field['allowEmpty']))
                    <option value=""></option>
                @endisset
                @foreach ($field['options'] as $key => $option) 
                    @if ($value !== $key)
                        <option value="{{$key}}">{{$option}}</option>
                    @endif
                @endforeach
            </select><br>
        </div>
        @break
    @case('enum')
        <div class="col-12">
            <label for="{{$name}}">{{$field['label']}} {{!isset($field['required']) || !$field['required'] ? '' : '*'}}</label>
            <select 
                name="{{$name}}" 
                class="form-control" 
                {{!isset($field['required']) || !$field['required'] ? '' : 'required'}}
            >
                @if ($value !== '')
                    <option value="{{$value}}">{{$field['model']::from($value)->name}}</option>
                @endif
                @foreach ($field['options'] as $option) 
                    @if ($value !== $option->value)
                        <option value="{{$option->value}}">{{$option->name}}</option>
                    @endif
                @endforeach
            </select><br>
        </div>
        @break
    @case('textarea')
        <div class="col-12">
            <label for="{{$name}}">{{$field['label']}} {{!isset($field['required']) || !$field['required'] ? '' : '*'}}</label>
            <textarea 
                name="{{$name}}" 
                placeholder="{{$field['placeholder']}}" 
                class="form-control" 
                {{!isset($field['disabled']) || !$field['disabled'] ? '' : 'disabled'}}
                {{!isset($field['required']) || !$field['required'] ? '' : 'required'}}
            >{{!isset($field['hideValue']) || !$field['hideValue'] ? $value : ''}}</textarea><br>
        </div>
        @break
    @case('image')
        <div class="col-12">
            <label for="{{$name}}">{{$field['label']}} {{!isset($field['required']) || !$field['required'] ? '' : '*'}}</label>
            <input type="file" name="{{$name}}"><br>
        </div>
        @break
    @case('number')
        <div class="col-12">
            <label for="{{$name}}">{{$field['label']}} {{!isset($field['required']) || !$field['required'] ? '' : '*'}}</label>
            <input 
                type="number" 
                name="{{$name}}" 
                placeholder="{{$field['placeholder']}}" 
                class="form-control" 
                {{!isset($field['disabled']) || !$field['disabled'] ? '' : 'disabled'}}
                value="{{!isset($field['hideValue']) || !$field['hideValue'] ? $value : ''}}"
                {{!isset($field['required']) || !$field['required'] ? '' : 'required'}}
            /><br>
        </div>
        @break
    @case('checkbox')
        <div class="col-12">
            <input 
                type="checkbox" 
                name="{{$name}}" 
                value="1"
                {{!isset($field['disabled']) || !$field['disabled'] ? '' : 'disabled'}}
                {{$value ? 'checked' : ''}}/> {{$field['label']}} {{!isset($field['required']) || !$field['required'] ? '' : '*'}}
        </div>
        @break
    @case('date')
        <div class="col-12">
            <label for="{{$name}}">{{$field['label']}} {{!isset($field['required']) || !$field['required'] ? '' : '*'}}</label>
            <input 
                type="datetime-local" 
                name="{{$name}}"
                class="form-control" 
                min="{{date('Y-m-d H:i:s')}}"
                step="any"
                {{!isset($field['disabled']) || !$field['disabled'] ? '' : 'disabled'}}
                value="{{!isset($field['hideValue']) || !$field['hideValue'] ? $value : ''}}"
                {{!isset($field['required']) || !$field['required'] ? '' : 'required'}}
            />
        </div>
        @break
    @default
        <div class="alert alert-danger">
            Lauko tipas {{$field['type']}} neegzistuoja!
        </div>
@endswitch
<input type="hidden" name="fields[]" value="{{$name}}">