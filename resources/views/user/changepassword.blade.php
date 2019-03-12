@extends('layouts.master')
@section('content')
<div class="content container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            @if(Session::has('message'))
                <div class="alert-success">{{Session::get('message')}}</div>
            @elseif(Session::has('error'))
                <div class="alert-danger">{{Session::get('error')}}</div>
            @endif
            <h4 class="page-title">Change Password</h4>
            <form>
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="form-group">
                            <label>Old password</label>
                            <input type="password" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-group">
                            <label>New password</label>
                            <input type="password" class="form-control" />
                        </div>
                    </div>
                    <div class="col-xs-12  col-sm-6">
                        <div class="form-group">
                            <label>Confirm password</label>
                            <input type="password" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center m-t-20">
                        <button type="button" class="btn btn-primary">Update Password</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
