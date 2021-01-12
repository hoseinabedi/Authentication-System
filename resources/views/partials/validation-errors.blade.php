@if ($errors->any())
    @foreach ($errors->all() as $error)
    <small class="form-text text-danger">
        {{ $error }}
    </small>
    @endforeach
@endif