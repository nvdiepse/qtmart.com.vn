@if ($errors->has($name))
    <span class="invalid feedback text-danger mb-2" role="alert">
        <strong>{{ $errors->first($name) }}.</strong>
    </span>
@endif
