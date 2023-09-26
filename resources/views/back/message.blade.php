@if (session('success'))
    <div class="alert alert-success alert-dismissible auto-hide-notification mt-15 text-center">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-warning">
        {{ session('error') }}
    </div>
@endif

@if (count($errors) > 0)
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <i class="icon-info"></i> There was a problem with your submission.
    </div>
@endif
