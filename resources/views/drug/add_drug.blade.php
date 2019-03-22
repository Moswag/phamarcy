@extends('layouts.master')
@section('content')
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h4 class="page-title">Add Drug</h4>
                <form class="m-b-30" method="post" action="{{route('save_drug')}}">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Drug Code <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" name="drug_code" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Name</label>
                                <input class="form-control" type="text" name="name" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Directions Of Use <span class="text-danger">*</span></label>
                                <textarea class="form-control" name="direction_of_use" required></textarea>
                            </div>
                        </div>

                    </div>

                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary">Save Drug</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
