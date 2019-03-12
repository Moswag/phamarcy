@extends('layouts.master')
@section('content')
    <div class="content container-fluid">
        <div class="row">
            <div class="col-xs-4">
                <h4 class="page-title">Permissions</h4>
            </div>

        </div>
        @if(Session::has('message'))
            <div class="alert-success">{{Session::get('message')}}</div>
        @elseif(Session::has('error'))
            <div class="alert-danger">{{Session::get('error')}}</div>
        @endif
        <div class="row filter-row">
            <div class="col-sm-3 col-xs-6">
                <div class="form-group form-focus">
                    <label class="control-label">Employee ID</label>
                    <input type="text" class="form-control floating" />
                </div>
            </div>
            <div class="col-sm-3 col-xs-6">

            </div>
            <div class="col-sm-3 col-xs-6">

            </div>
            <div class="col-sm-3 col-xs-6">
                <a href="#" class="btn btn-success btn-block"> Search </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table datatable">
                        <thead>

                            <tr>
                                <th style="width:20%;">Name</th>
                                <th>Employee ID</th>
                                <th>Admin</th>
                                <th>Teller</th>
                                <th>Accounting</th>
                                <th></th>

                            </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                        <tr>
                            <form method="post" action="{{route('assignroles')}}">
                            <td>
                                <a href="#" class="avatar">J</a>
                                <h2><a href="#">{{$user->name}} <span>{{$user->surname}}</span></a></h2>
                            </td>
                            <td>{{$user->employee_id}} <input type="hidden" name="employee_id" value="{{$user->employee_id}}"></td>
                            <td class="text-center">
                                <input type="checkbox" {{$user->hasRole('admin')? 'checked' : '' }} name="role_admin">
                            </td>
                            <td class="text-center">
                                <input type="checkbox" {{$user->hasRole('teller')? 'checked' : '' }} name="role_teller">
                            </td>
                            <td class="text-center">
                                <input type="checkbox" {{$user->hasRole('accounts')? 'checked' : '' }} name="role_accounts">
                            </td>
                                {{csrf_field()}}
                                <td><button type="submit" class="btn btn-primary">AssignRoles</button> </td>
                            </form>
                        </tr>
                        @endforeach



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




    <div id="delete_employee" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content modal-md">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Employee</h4>
                </div>
                <form>
                    <div class="modal-body card-box">
                        <p>Are you sure want to delete this?</p>
                        <div class="m-t-20"> <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
