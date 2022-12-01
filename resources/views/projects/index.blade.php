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
                <a class="card-link" data-toggle="collapse" href="#menuone" aria-expanded="false" aria-controls="menuone">
                    <span class="collapsed"><i class="fa fa-plus"></i></span> 
                    <span class="expanded"><i class="fa fa-minus"></i></span> 
                    Search
                </a>
            </div>
            <div id="menuone" class="collapse">
            <div class="card-body">
            <form action="{{ route('search') }}" method="GET" class="form-horizontal">
                <table >
                    <tr>
                        <td>Kode Project</td>
                        <td>:</td>
                        <td><input type="text" id="prjfind" name="prjfind" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Sales AM</td>
                        <td>:</td>
                        <td><input type="text" id="amfind" name="amfind" class="form-control"</td>
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

