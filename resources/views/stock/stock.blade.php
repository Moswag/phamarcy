@extends('layouts.master')
@section('content')
    <div class="content container-fluid">
        <div class="row">
            <div class="col-xs-4">
                <h4 class="page-title">Stock</h4>
            </div>
            <div class="col-xs-8 text-right m-b-30">
                <a href="{{route('add_stock')}}" class="btn btn-primary pull-right rounded"><i class="fa fa-plus"></i> Add Stock</a>
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
<h3>Red means stock is running out</h3>
                        <tr>
                            <th style="width:30%;">Drug Code</th>
                            <th>Quantity</th>
                            <th class="text-right">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($stock as $stoc)
                            @if($stoc->quantity<50)
                            <tr style="background-color: red">

                                <td>{{$stoc->drug_code}}</td>
                                <td>{{$stoc->quantity}}</td>


                                <td class="text-right">
                                view
                                </td>
                            </tr>
                            @else
                                <tr>

                                    <td>{{$stoc->drug_code}}</td>
                                    <td>{{$stoc->quantity}}</td>


                                    <td class="text-right">
                                        view
                                    </td>
                                </tr>
                                @endif
                        @endforeach



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



@stop
