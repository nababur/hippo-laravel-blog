@if (session()->has('success'))
    <div class="alert mt-3 alert-success alert-dismissible fade show" role="alert">
        <strong>Great news ! </strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif