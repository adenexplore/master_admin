@extends('layouts.master')
@section('content')
@if(Auth::user()->role !='Admin')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- 404 Error Text -->
    <div class="text-center" style="margin-top:200px;">
        <div class="error mx-auto" data-text="404">404</div>
        <p class="lead text-gray-800 mb-5">Page Not Found</p>
        <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
        <a href="{{asset('dashboard')}}">&larr; Back to Dashboard</a>
    </div>

</div>
<!-- /.container-fluid -->
@endif                
@if(Auth::user()->role !='User')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Data Province</h2>
                </div>
                {{-- <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('Management/Province.create') }}">Tambah Province</a>
                </div> --}}
            </div>
        </div>

        <br>

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Province</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Province</th>
                                <th width="112px">Action</th>
                            </tr>
                        </thead>
                        {{-- <tbody>
                            @foreach ($provinces as $province)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $province->province }}</td>
                                    <td>
                                        <form action="{{ route('Management/Province.destroy',$province->id) }}" method="POST">
                                            @csrf
                                            <a class="btn btn-primary" href="{{ route('Management/Province.edit',$province->id) }}">
                                                <i class="fa-solid fa-pen"></i>
                                            </a
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                            @endif
                                        </form>
                                    </td>
                                </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
    {{-- {!! $users->links() !!} --}}
@endif
@endsection

@section('title')
Province
@stop