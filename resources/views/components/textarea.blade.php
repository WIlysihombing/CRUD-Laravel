<div class="form-group">
    <label class="mt-2" for="{{$field}}">{{$label}}</label>
    <textarea class="form-control mt-2" id="{{$field}}" name="{{$field}}" rows="3">@isset($value){{old($field) ? old($field) : $value}} @else{{old($field)}}@endisset</textarea>
    @error($field)
        <div class="alert alert-danger">{{$message}}</div>
    @enderror
</div>