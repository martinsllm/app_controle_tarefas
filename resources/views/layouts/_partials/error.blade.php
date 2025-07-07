@if ($errors->has($field_name))
    <div class="text-danger">
        {{$errors->first($field_name) }}
    </div>
@endif