@extends('layouts.master')
@section('content')
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h4 class="page-title">Add User</h4>
                <form class="m-b-30" method="post" action="{{route('save_user')}}">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">First Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="name" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Last Name</label>
                                <input class="form-control" type="text" name="surname" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Employee ID <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="employee_id" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">National ID <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="national_id" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Email <span class="text-danger">*</span></label>
                                <input class="form-control" type="email"name="email" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Phonenumber </label>
                                <input class="form-control" type="number" name="phonenumber" required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Password</label>
                                <input class="form-control" type="password" name="password" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Confirm Password</label>
                                <input class="form-control" type="password" name="password_confirmation" required>
                            </div>
                        </div>



                    </div>
                    <div class="table-responsive m-t-15">
                        <table class="table table-striped custom-table">
                            <thead>
                            <tr>
                                <th>Module Permission</th>
                                <th class="text-center">Admin</th>
                                <th class="text-center">Accounts</th>
                                <th class="text-center">Sales</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Access</td>
                                <td class="text-center">
                                    <input checked="" type="checkbox">
                                </td>
                                <td class="text-center">
                                    <input type="checkbox">
                                </td>
                                <td class="text-center">
                                    <input type="checkbox">
                                </td>

                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary">Create User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
