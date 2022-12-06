@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">RAB</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             RABS
                             @if($id_show!='')
                                <table>
                                    <form action="{{ route('rABS.create') }}" method="GET" class="form-horizontal">
                                        <input type="hidden" name="id_show" id="id_show" value="{{$id_show}}">
                                        <button class="pull-right"><i class="fa fa-plus-square fa-lg"></i></button>
                                    </form>
                                </table>
                            @else
                                <a class="pull-right" href="{{ route('rABS.create') }}"><i class="fa fa-plus-square fa-lg"></i></a>
                            @endif
                         </div>
                         <div class="card-body">
                             @include('r_a_b_s.table')
                              <div class="pull-right mr-3">

                              </div>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection

