@props(['name'])

@error($name)
<div class="alert mt-3 alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> {{ $message }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@enderror