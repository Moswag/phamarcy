@extends('layouts.master')
@section('content')
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h4 class="page-title">Add Stock</h4>
                <form class="m-b-30" method="post" action="{{route('save_stock')}}">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Drug Code <span class="text-danger">*</span></label>
                                <select class="form-control" name="drug_code" required>
                                    @foreach($drugs as $drug)
                                    <option value="{{$drug->drug_code}}">{{$drug->name}} | {{$drug->drug_code}}</option>
                                        @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Quantity</label>
                                <input class="form-control" type="number" name="quantity" required>
                            </div>
                        </div>


                    </div>

                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary">Save Stock</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
