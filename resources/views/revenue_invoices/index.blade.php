@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Revenue Invoices</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             revenue_invoices
                             @if($id_show!='')
                                <table>
                                    <form action="{{ route('revenueInvoices.create') }}" method="GET" class="form-horizontal">
                                        <input type="hidden" name="id_show" id="id_show" value="{{$id_show}}">
                                        <button class="pull-right"><i class="fa fa-plus-square fa-lg"></i></button>
                                    </form>
                                </table>
                            @else
                                <a class="pull-right" href="{{ route('revenueInvoices.create') }}"><i class="fa fa-plus-square fa-lg"></i></a>
                            @endif
                         </div>
                         <div class="card-body">
                             @include('revenue_invoices.table')
                              <div class="pull-right mr-3">
                                     
                              </div>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection

