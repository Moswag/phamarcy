@extends('layouts.master')
@section('content')
    <div class="content container-fluid">
        <div class="row">
            <div class="col-xs-4">
                <h4 class="page-title">Sales</h4>
            </div>
            <div class="col-xs-8 text-right m-b-30">
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
                    <label class="control-label">Drug Code</label>
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
                            <th >Drug Code</th>
                            <th>Quantity</th>
                            <th>At Price</th>
                            <th>Total Amount</th>
                            <th style="width:20%;">Teller Name</th>
                            <th class="text-right">Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sales as $sale)
                            <tr>
                                <td>{{$sale->drug_code}}</td>
                                <td>{{$sale->quantity}}</td>
                                <td>{{$sale->at_price}}</td>
                                <td>{{$sale->total_amount}}</td>
                                <td>{{$sale->teller_name}}</td>
                                <td class="text-right">{{$sale->created_at}}</td>
                            </tr>
                        @endforeach



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



@stop
