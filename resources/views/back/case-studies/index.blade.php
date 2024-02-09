@extends('layouts.back')
@if (session()->has('addPostSuccess'))
    @section('alerts')
        <div class="alert alert-success alert-dismissible fade show light-green" role="alert">
            {!! session('addPostSuccess') !!}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endsection
@endif
@section('breadcrumb')
    <div class="col-sm-6">
        <a class="btn btn-dark" href="{{ route('case-studies.create') }}">
            Create new CaseStudies
        </a>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Case Studies</li>
        </ol>
    </div><!-- /.col -->

@endsection
@section('content')
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Case Studies</h3>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                #
                            </th>
                            <th style="width: 60%">
                                Title
                            </th>
                            <th style="width: 39%">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($case_studies as $case_study)
                            <tr>
                                <td>
                                    #
                                </td>
                                <td>
                                    <a>
                                        {{ $case_study->title }}
                                    </a>
                                    <br />
                                    <small>
                                        Created {{ $case_study->created_at }}
                                    </small>
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm" href="{{ route('case-studies.edit', $case_study->id) }}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <form id="delete-post{{ $case_study->id }}" class="deletion-form"
                                        action="{{ route('case-studies.destroy', $case_study->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm show-alert"
                                            data-id="{{ $case_study->id }}">
                                            <i class="fas fa-trash">
                                            </i>
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection
@section('javascript')
    <script nonce="{{ $nonce }}">
        // show alert before deleting post
        $('.show-alert').on('click', function(e) {
            e.preventDefault();
            let id = $(this).data('id');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $(`#delete-post${id}`).submit();
                }
            })
        })
    </script>
@endsection
