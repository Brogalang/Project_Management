@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Projects</li>
    </ol>

    
    <style type="text/css">
        [aria-expanded="false"] > .expanded, [aria-expanded="true"] > .collapsed {
            display: none;
        }
    </style>
    <div class="container-fluid">
        <div id="accordion">
        <div class="card">
            <div class="card-header">
                <button class="btn btn-ghost-primary" data-toggle="collapse" href="#menuone" aria-expanded="false" aria-controls="menuone">
                    <span class="collapsed"><i class="fa fa-plus"></i></span> 
                    <span class="expanded"><i class="fa fa-minus"></i></span> 
                    Search
                </button>
            </div>
            <div id="menuone" class="collapse">
            <div class="card-body">
            <form action="{{ route('search') }}" method="GET" class="form-horizontal">
                <table >
                    <tr>
                        <td><strong>Nama Project</strong></td>
                        <td>:</td>
                        <td><input type="text" id="prjfind" name="prjfind" class="form-control" value="{{$keyword}}"></td>

                        <td><strong>Client</strong></td>
                        <td>:</td>
                        <td><input type="text" id="clientfind" name="clientfind" class="form-control" value="{{$client}}"></td>

                        <td><strong>Divisi</strong></td>
                        <td>:</td>
                        <td>
                            <select name="divfind" id="divfind" class="form-control select2" style="width: 200px;" {{$disabled}}>
                                <option value=''>Pilih Data</option>
                                @foreach ($divopt as $optdiv)
                                    @if($optdiv->nama_div_ext==$divisi)
                                        <option value='{{$optdiv->nama_div_ext}}'selected>{{$optdiv->nama_div_ext}}</option>
                                    @else
                                        <option value='{{$optdiv->nama_div_ext}}'>{{$optdiv->nama_div_ext}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Sales AM</strong></td>
                        <td>:</td>
                        <td>
                            {{--<input type="text" id="amfind" name="amfind" class="form-control" value="{{$salesam}}">--}}
                            <select name="amfind" id="amfind" class="form-control select2" style="width: 200px;">
                                <option value=''>Pilih Data</option>
                                @foreach ($amopt as $optam)
                                    @if($optam->Nama==$salesam)
                                        <option value='{{$optam->Nama}}' selected>{{$optam->Nama}}</option>
                                    @else
                                        <option value='{{$optam->Nama}}'>{{$optam->Nama}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </td>
                        
                        <td><strong>Departement</strong></td>
                        <td>:</td>
                        <td>
                            {{--<input type="text" id="depfind" name="depfind" class="form-control" value="{{$departement}}">--}}
                            <select name="depfind" id="depfind" class="form-control select2" style="width: 200px;">
                                <option value=''>Pilih Data</option>
                                @foreach ($depopt as $optdep)
                                    @if($optdep->subdivisi==$departement)
                                        <option value='{{$optdep->subdivisi}}'selected>{{$optdep->subdivisi}}</option>
                                    @else
                                        <option value='{{$optdep->subdivisi}}'>{{$optdep->subdivisi}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan=2></td>
                        <td>
                            <button class='btn btn-info'>Cari</button>
                            <a class='btn btn-secondary' href="{{ route('projects.index') }}">Cancel</a>
                        </td>
                    </tr>
                </table>
            </form>
            </div>
            </div>
        </div>
    </div>
    </div>

    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             List Projects
                             <a class="pull-right" href="{{ route('projects.create') }}"><i class="fa fa-plus-square fa-lg"></i></a>
                         </div>
                         <div class="card-body">
                             @include('projects.table')
                              <div class="pull-right mr-3">

                              </div>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>
@endsection

