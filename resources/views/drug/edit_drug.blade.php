@extends('layouts.master')
@section('content')
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h4 class="page-title">Update Drug</h4>
                <form class="m-b-30" method="post" action="{{route('update_drug')}}">
                    {{csrf_field()}}
                    <input name="id" value="{{$drug->id}}" hidden>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Drug Code</label>
                                <input class="form-control" type="text" value="{{$drug->drug_code}}" disabled>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Name</label>
                                <input class="form-control" type="text" name="name" value="{{$drug->name}}" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Directions Of Use <span class="text-danger">*</span></label>
                                <textarea class="form-control" name="direction_of_use" placeholder="{{$drug->direction_of_use}}" required></textarea>
                            </div>
                        </div>

                    </div>

                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary">Update Drug</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
