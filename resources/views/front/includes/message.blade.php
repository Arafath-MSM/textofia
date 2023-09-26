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
    <div class=" alert alert-warning alert-dismissible fade show d-flex flex-column justify-content-start w-100" role="alert">
        <i class="icon-info "></i>
        <span class="d-flex flex-column justify-content-start w-100">
            There was a problem with your submission.
            </span>
        <ul class="d-flex flex-column justify-content-start w-100">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>

            @endforeach
        </ul>
    </div>
@endif
