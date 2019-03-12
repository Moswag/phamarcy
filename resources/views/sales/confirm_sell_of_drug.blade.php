@extends('layouts.master')
@section('content')
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h4 class="page-title">Confirm Sale</h4>
                <form class="m-b-30" method="post" action="{{route('confirm_sell_drug')}}">
                    {{csrf_field()}}
                    <input name="drug_code" value="{{$drug->drug_code}}"  hidden>
                    <input   name="quantity" value="{{$quantity}}"  hidden>
                    <input  name="at_price" value="{{$price->price}}"  hidden>
                    <input  name="total_amount" value="{{$price->price * $quantity}}"  hidden>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Drug Code <span class="text-danger">*</span></label>
                                <input class="form-control"   value="{{$drug->drug_code}}"  disabled>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Quantity <span class="text-danger">*</span></label>
                                <input class="form-control"  value="{{$quantity}}"  disabled>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Price <span class="text-danger">*</span></label>
                                <input class="form-control"   value="{{$price->price}}"  disabled>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Total Amount</label>
                                <input class="form-control"  value="{{$price->price * $quantity}}"  disabled>
                            </div>
                        </div>



                    </div>

                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary">Confirm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
