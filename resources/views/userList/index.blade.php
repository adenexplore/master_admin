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
                    <h2>Data User</h2>
                </div>
                @if(Auth::user()->role !='Operator')
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('userList.create') }}">Tambah User</a>
                </div>
                @endif
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
                <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th width="112px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>
                                        <form action="{{ route('userList.destroy',$user->id) }}" method="POST">
                                            @csrf
                                            <a class="btn btn-primary" href="{{ route('userList.edit',$user->id) }}">
                                                <i class="fa-solid fa-pen"></i>
                                            </a>                                           
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button>                                    
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
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
users
@stop