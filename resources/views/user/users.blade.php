@extends('layouts.master')
@section('content')
        <div class="content container-fluid">
            <div class="row">
                <div class="col-xs-4">
                    <h4 class="page-title">Users</h4>
                </div>
                <div class="col-xs-8 text-right m-b-30">
                    <a href="{{route('add_user')}}" class="btn btn-primary pull-right rounded"><i class="fa fa-plus"></i> Add User</a>
                    <div class="view-icons">
                        <a href="#" class="list-view btn btn-link active"><i class="fa fa-bars"></i></a>
                    </div>
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
                                <th>Email</th>
                                <th>Phonenumber</th>
                                <th>National ID</th>
                                <th>View</th>
                                <th class="text-right">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>
                                    <a href="#" class="avatar">J</a>
                                    <h2><a href="#">{{$user->name}} <span>{{$user->surname}}</span></a></h2>
                                </td>
                                <td>{{$user->employee_id}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phonenumber}}</td>
                                <td>{{$user->national_id}}</td>
                                <td>{{$user->name}}</td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
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
