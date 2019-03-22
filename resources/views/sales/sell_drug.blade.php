@extends('layouts.master')
@section('content')
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h4 class="page-title">Sell Drug</h4>
                @if(Session::has('message'))
                    <div class="alert-success">{{Session::get('message')}}</div>
                @elseif(Session::has('error'))
                    <div class="alert-danger">{{Session::get('error')}}</div>
                @endif
                <form class="m-b-30" method="post" action="{{route('sell_drug')}}">
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
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
