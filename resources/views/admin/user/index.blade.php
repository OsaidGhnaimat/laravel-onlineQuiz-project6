@extends('admin.includes.master')

@section('content')

<!-- dd($employee); -->
<div class="product-status mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>User list</h4>
                    <div class="add-product">
                        <a href="/admin/user/create">Add user</a>
                    </div>
                    <table class="table table-striped m-auto">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Role ID</th>

                            </tr>
                        </thead>
                        @foreach ($users as $user)
                        <tr>
                            <td> {{$user-> id}}</td>
                            <td> {{$user-> name}}</td>
                            <td> {{$user-> email}}</td>
                            <td> {{$user-> password}}</td>
                            <td> {{$user-> role_id}}</td>
                            <td>
                                <form action="{{route('user.destroy',$user->id)}}" method="post">
                                    <a href="{{route('user.edit',$user->id)}}" data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection