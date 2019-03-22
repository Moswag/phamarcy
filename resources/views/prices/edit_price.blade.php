@extends('layouts.master')
@section('content')
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h4 class="page-title">Update Price</h4>
                <form class="m-b-30" method="post" action="{{route('update_price')}}">
                    {{csrf_field()}}
                    <input  type="text" value="{{$price->id}}" name="id" hidden>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Drug Code <span class="text-danger">*</span></label>
                                <input class="form-control" type="text" value="{{$price->drug_code}}" name="drug_code" disabled>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Price</label>
                                <input class="form-control" type="number" name="price" value="{{$price->price}}" required>
                            </div>
                        </div>


                    </div>

                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary">Update Price</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
