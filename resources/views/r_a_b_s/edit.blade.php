@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
          <li class="breadcrumb-item">
             <a href="{!! route('rABS.index') !!}">RAB</a>
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
                              <strong>Edit RAB</strong>
                          </div>
                          <div class="card-body">
                              {!! Form::model($rAB, ['route' => ['rABS.update', $rAB->id], 'method' => 'patch']) !!}

                              @include('r_a_b_s.fieldsv2')

                              {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
         </div>
    </div>
@endsection

@push('scripts')

@endpush
