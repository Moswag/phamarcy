@extends('layouts.master')
@section('content')
    <div class="content container-fluid">
        <div class="row">
            <div class="modal-dialog">
                <div class="modal-content modal-md">
                    <div class="modal-header">
                        <h4 class="modal-title">Delete Drug</h4>
                    </div>
                    <form >
                        <div class="modal-body card-box">
                            <p>Are you sure want to delete this?</p>
                            <div class="m-t-20"> <a href="{{route('drugs')}}" class="btn btn-default" data-dismiss="modal">Close</a>
                                <a href="{{route('delete_drug',['id'=>$id])}}" class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
