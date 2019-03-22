@extends('layouts.master')
@section('content')
    <div class="content container-fluid">
        <div class="row">
            <div class="col-xs-4">
                <h4 class="page-title">Prices</h4>
            </div>
            <div class="col-xs-8 text-right m-b-30">
                <a href="{{route('add_price')}}" class="btn btn-primary pull-right rounded"><i class="fa fa-plus"></i> Add Stock Price</a>
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
                            <th style="width:30%;">Drug Code</th>
                            <th>Quantity</th>
                            <th>View Drug</th>
                            <th class="text-right">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($prices as $price)
                            <tr>

                                <td>{{$price->drug_code}}</td>
                                <td>{{$price->price}}</td>
                                <td>View Drug</td>

                                <td class="text-right">
                                    <div class="dropdown">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="{{route('edit_price',['id'=>$price->id])}}" ><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



@stop
