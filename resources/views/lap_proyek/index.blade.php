@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Laporan Mingguan</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
             @include('flash::message')
             <div class="row">
                 <div class="col-lg-12">
                     <div class="card">
                         <div class="card-header">
                             <i class="fa fa-align-justify"></i>
                             List Laporan Mingguan
                             <a class="btn btn-info btn-sm pull-right" data-toggle="modal" data-target="#modal-add"><i class="fa fa-plus"></i></a>
                         </div>
                         <div class="card-body">
                            <div>
                                <table class="table table-striped" id="lapproyek-table">
                                    <thead>
                                    <tr>
                                        <th style="text-align:center;">No</th>
                                        <th style="text-align:center;">Project</th>
                                        <th style="text-align:center;">Tanggal</th>
                                        <th style="text-align:center;">Progress</th>
                                        <th style="text-align:center;">Catatan</th>
                                        <th style="text-align:center;">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody id="display_data" name="display_data">
                                    </tbody>
                                </table>
                            </div>
                         </div>
                     </div>
                  </div>
             </div>
         </div>
    </div>

    <!-- modal add data-->
    <div class="modal fade" id="modal-add" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form name="frm_add" id="frm_add" class="form-horizontal" action="javascript:void(0)" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Add Data Divisi</h4>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                <label class="col-sm-3 col-form-label">Project</label>
                <div class="col-sm-9">
                    <select name="prjprogres" id="prjprogres" class="form-control" data-control="select2">
                        <option value=''>Pilih Data</option>
                        @foreach ($projects as $prj)
                            <option value='{{$prj->project_id}}'>{{$prj->project_id}} - {{$prj->project}}</option>
                        @endforeach
                    </select>
                </div>
                </div>

                <div class="form-group row">
                <label class="col-sm-3 col-form-label">Tanggal</label>
                <div class="col-sm-3">
                    <input type="date" name="tglprogres" class="form-control">
                </div>
                </div>

                <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nama Progress</label>
                <div class="col-sm-9">
                    <input type="text" name="nmprogres" class="form-control" placeholder="Nama Progress">
                </div>
                </div>

                <div class="form-group row">
                <label class="col-sm-3 col-form-label">Status Progress</label>
                <div class="col-sm-9">
                    <input type="text" name="statprogres" class="form-control" placeholder="Status Progress">
                </div>
                </div>

                <div class="form-group row">
                <label class="col-sm-3 col-form-label">Catatan</label>
                <div class="col-sm-9">
                    <input type="text" name="catatan" class="form-control" placeholder="Catatan">
                </div>
                </div>

            </div>
            <div class="modal-footer">
            <input type="hidden" name="metode" id="metode" value="insertdata">
            <input type="hidden" name="id_progres" id="id_progres">
            <button type="button" class="btn btn-outline-info" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary" id="saveBtn">Simpan</button>
            </div>
            </div>
            </form>
        </div>
    </div>
@endsection

@push('javascript')
<script>
    $(document).ready(function(){   
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        loaddata();
    });

    function loaddata(){
        // alert("Halo");
        $.ajax({
            type: "GET",
            url : "/loaddata",
            datatype : "json",
            success:function(response){
                console.log(response.listdata);
                $('#display_data').html("");
                var x = 0;
                $.each(response.listdata,function(key,item){
                    x++;
                    $('#display_data').append(
                    '<tr>\
                        <td align=center>'+x+'</td>\
                        <td align=left><b><u>'+item.project_id+'</u></b><br>'+item.project+'</td>\
                        <td align=center nowrap>'+item.tanggal_progress+'</td>\
                        <td align=left>'+item.nama_progress+' ['+item.status_progress+']</td>\
                        <td align=left>'+item.catatan_progress+'</td>\
                        <td align=center nowrap>\
                            <button type="submit" value="'+item.id_progress+'" class="btn btn-ghost-success"><i class="fa fa-eye" id="showBtn"></i></button>\
                            <button type="button" value="'+item.id_progress+'" class="btn btn-ghost-info"><i class="fa fa-edit" onClick="myFunction('+item.id_progress+','+item.project_id+','+item.nama_progress+')"></i></button>\
                            <button type="submit" value="'+item.id_progress+'" class="btn btn-ghost-danger"><i class="fa fa-trash" id="deleteBtn"></i></button>\
                        </td>\
                    </tr>'
                    );
                });
            }
        });
    }

    $('#saveBtn').click(function(e) {
        var formdata = $("#modal-add form").serializeArray();
        var data = {};
        $(formdata).each(function(index, obj) {
            data[obj.name] = obj.value;
        });
            // console.log(data);
        // if (validation(data)) {
            $.ajax({
                data: $('#modal-add form').serialize(),
                url: "{{ route('laporan_mingguan.store') }}",
                type: "POST",
                dataType: 'html',
                success: function(data) {
                    $('#modal-add').modal('hide');
                    loaddata();
                    // $('.table').DataTable().draw();
                },
                error: function(data) {
                    console.log('Error:', data);
                    // $('#saveBtn').html('Simpan');
                }
            });
        // }
    });

    function myFunction(id_progres) {
        $('#modal-add').modal('show');
        document.getElementById("metode").value="editdata";
        document.getElementById("id_progres").value=id_progres;

        $.ajax({
            data: id_progres,
            url: "/edit_lap",
            type: "GET",
            dataType: 'json',
            success: function(data) {
                // $('#modal-add').modal('hide');
                // loaddata();
                // $('.table').DataTable().draw();
            },
            error: function(data) {
                console.log('Error:', data);
                // $('#saveBtn').html('Simpan');
            }
        });
    }

    
</script>
@endpush