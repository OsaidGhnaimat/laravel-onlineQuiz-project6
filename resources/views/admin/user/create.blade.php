@extends('admin/includes/master')
@section('content')


<div class="product-status mg-b-15">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="product-status-wrap">
                    <h4>You can add Users here</h4>
                    <div class="add-product">
                        <a href="/admin/user">Show users</a>
                    </div>

                    <form method="post" style="padding: 50px 0 !important;" action="{{route('user.store')}}" class="dropzone dropzone-custom needsclick add-professors">
                        @csrf
                        <div class="row">
                            <div class="col-lg-10 col-md-6 col-sm-6 col-xs-12 m-auto">
                                <div class="form-group">
                                    <label for="name" class="form-label">Name </label>
                                    <input name="name" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="form-label">Email </label>
                                    <input name="email" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="password" class="form-label">Password </label>
                                    <input name="password" type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="role_id" class="form-label">Role ID </label>
                                    <input name="role_id" type="text" class="form-control">
                                </div>

                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary waves-effect waves-light">Add</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection