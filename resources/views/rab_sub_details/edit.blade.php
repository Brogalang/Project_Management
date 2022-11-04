@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('rabSubDetails.index') !!}">Rab Sub Details</a>
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
                              <strong>Edit Rab Sub Details</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($rabSubDetails, ['route' => ['rabSubDetails.update', $rabSubDetails->id], 'method' => 'patch']) !!}

                              @include('rab_sub_details.fields')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection