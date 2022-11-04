@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('revenuePayments.index') !!}">Revenue Payment</a>
          </li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>
    <div class="container-fluid">
         <div class="animated fadeIn">
             @include('coreui-templates::common.errors')
             <div class="row">
                 <div class="col-lg-12">
                      <div class="card">
                          <div class="card-header">
                              <i class="fa fa-edit fa-lg"></i>
                              <strong>Edit Revenue Payment</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($revenuePayment, ['route' => ['revenuePayments.update', $revenuePayment->id], 'method' => 'patch']) !!}

                              @include('revenue_payments.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection