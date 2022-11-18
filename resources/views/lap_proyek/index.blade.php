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
                             <button class="btn btn-info btn-sm pull-right" id="addBtn"><i class="fa fa-plus"></i></button>
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
                                        <th style="text-align:center;" nowrap>Minggu Ke</th>
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
            <h4 class="modal-title">Add Data Laporan Mingguan</h4>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                <label class="col-sm-3 col-form-label">Project</label>
                <div class="col-sm-9">
                    <select name="prjprogres" id="prjprogres" class="form-control select2" style="width: 100%;">
                        <option value=''>Pilih Data</option>
                        @foreach ($projects as $prj)
                            <option value='{{$prj->project_id}}'>{{$prj->project_id}} [{{$prj->client}}] - {{$prj->project}}</option>
                        @endforeach
                    </select>
                </div>
                </div>

                <div class="form-group row">
                <label class="col-sm-3 col-form-label">Tanggal</label>
                <div class="col-sm-3">
                    <input type="date" name="tglprogres" id="tglprogres" class="form-control">
                </div>
                </div>

                <div class="form-group row">
                <label class="col-sm-3 col-form-label">Progress</label>
                <div class="col-sm-3">
                    <div class="input-group-append">
                        <input type="text" name="statprogres" id="statprogres" class="form-control" maxlength="3" placeholder="">
                        <span class="input-group-text">
                            %
                        </span>
                    </div>
                </div>
                </div>

                <div class="form-group row">
                <label class="col-sm-3 col-form-label">Minggu Ke</label>
                <div class="col-sm-3">
                    <input type="text" maxlength="3" name="nmprogres" id="nmprogres" class="form-control" placeholder="Minggu Ke">
                </div>
                </div>

                <div class="form-group row">
                <label class="col-sm-3 col-form-label">Catatan</label>
                <div class="col-sm-9">
                    <textarea name="catatan" id="catatan" class="form-control" placeholder="Catatan"></textarea>
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

    <!-- modal show data-->
    <div class="modal fade" id="modal-show" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Data Laporan Mingguan</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                <!---->
                <div class="col-md-6">
                    <!-- Nomor Invoice Field -->
                    <div class="form-group col-sm-15">
                        <strong><label>Project</label></strong>
                        <p id="prjshow"></p>
                    </div>
                    <div class="form-group col-sm-15">
                        <strong><label>Client</label></strong>
                        <p id="clientshow"></p>
                    </div>
                    <div class="form-group col-sm-15">
                        <strong><label>Sales AM</label></strong>
                        <p id="salesamshow"></p>
                    </div>
                    <div class="form-group col-sm-15">
                        <strong><label>Jenis Project</label></strong>
                        <p id="jnsprojshow"></p>
                    </div>

                </div>

                <!---->
                <div class="col-md-6">
                    <!-- PIC Id Field -->
                    <div class="form-group col-sm-7">
                        <strong><label>Tanggal Progress</label></strong>
                        <p id="tglshow"></p>
                    </div>
                    <div class="form-group col-sm-7">
                        <strong><label>Progress</label></strong>
                        <p id="listshow"></p>
                    </div>
                    <div class="form-group col-sm-7">
                        <strong><label>Minggu Ke</label></strong>
                        <p id="mingguke"></p>
                    </div>
                    <div class="form-group col-sm-7">
                        <strong><label>Catatan</label></strong>
                        <p id="catatanshow"></p>
                    </div>
                </div>
            </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-outline-info" data-dismiss="modal">Tutup</button>
            </div>
            </div>
        </div>
    </div>

@endsection

@push('javascript')
<script>
    console.clear();
    const currency = [2000,1000,500, 200, 100, 50, 20, 10, 5, 2, 1];

    const valueRef = document.querySelector("#statprogres");
    const valueRef2 = document.querySelector("#nmprogres");

    function getCurrency(value) {
        console.clear();
        var map = new Map();
        let i = 0;
        //loop unitll value 0
        while (value) {
            //if divide in non-zero add in map
            if (Math.floor(value / currency[i])  != 0) {
            map.set(currency[i],Math.floor( value / currency[i]));
            //update value using mod
            value = value % currency[i];
            }
            i++;
        }
        
        debugger;
        for (var [key, value] of map) {
            console.log(key + ' = ' + value);
        }
    }

    function getChange() {
        // 48 - 57 (0-9)
        var str1 = valueRef.value;
        var str2 = valueRef2.value;
        if (str1!='' || str1!='0') {
            if (str1[str1.length - 1].charCodeAt() < 48 || str1[str1.length - 1].charCodeAt() > 57) {
                valueRef.value = str1.substring(0, str1.length - 1);
                return;
            }
        }else if (str2!='' || str2!='0'){
            if (str2[str2.length - 1].charCodeAt() < 48 || str2[str2.length - 1].charCodeAt() > 57) {
                valueRef2.value = str2.substring(0, str2.length - 1);
                return;
            }
        }

        // t.replace(/,/g,'')
        let str = valueRef.value.replace(/,/g, "");
        let strC2 = valueRef2.value.replace(/,/g, "");

        let value = +str;
        let value2 = +strC2;
        getCurrency(value)
        getCurrency(value2)
        valueRef.value = value.toLocaleString();
        valueRef2.value = value2.toLocaleString();
    }

    valueRef.addEventListener("keyup", getChange);
    valueRef2.addEventListener("keyup", getChange);
    console.log(valueRef2);
</script>
<script>
    $(document).ready(function(){   
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        loaddata();

        // $("#prjprogres").select2({
        //         theme: 'bootstrap4'
        // });
    });

    function loaddata(){
        // alert('halo');
        $.ajax({
            type: "GET",
            url : "{{ route('loaddata') }}",
            datatype : "json",
            success:function(response){
                // console.log(response.listdata);
                $('#display_data').html("");
                var x = 0;
                $.each(response.listdata,function(key,item){
                    x++;
                    $('#display_data').append(
                    '<tr>\
                        <td align=center>'+x+'</td>\
                        <td align=left><b><u>'+item.project_id+'</u></b><br>'+item.project+'</td>\
                        <td align=center nowrap>'+item.tanggal_progress+'</td>\
                        <td align=left>'+item.status_progress+'%</td>\
                        <td align=left>'+item.nama_progress+'</td>\
                        <td align=left>'+item.catatan_progress+'</td>\
                        <td align=center nowrap>\
                            <button type="submit" value="'+item.id_progress+'" class="btn btn-ghost-success"><i class="fa fa-eye" onClick="show('+item.id_progress+')"></i></button>\
                            <button type="button" value="'+item.id_progress+'" class="btn btn-ghost-info"><i class="fa fa-edit" onClick="edit('+item.id_progress+')"></i></button>\
                            <button type="submit" value="'+item.id_progress+'" class="btn btn-ghost-danger"><i class="fa fa-trash" onClick="deletedata('+item.id_progress+')"></i></button>\
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
            $.ajax({
                data: $('#modal-add form').serialize(),
                url: "{{ route('laporan_mingguan.store') }}",
                type: "POST",
                dataType: 'html',
                success: function(data) {
                    $('#modal-add').modal('hide');
                    loaddata();
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            });
    });

    function edit(id_progres) {
        $('#modal-add').modal('show');
        document.getElementById("metode").value="editdata";
        document.getElementById("id_progres").value=id_progres;

        $.ajax({
            data: 'id_progres='+id_progres,
            url: "{{ route('edit_lap') }}",
            type: "GET",
            datatype : "json",
            success: function(response) {
                $.each(response.listdata,function(key,item){
                    document.getElementById("select2-prjprogres-container").title=item.project_id;
                    document.getElementById("select2-prjprogres-container").innerHTML=item.project_id+' ['+item.client+'] - '+item.project;
                    document.getElementById("prjprogres").value=item.project_id;
                    document.getElementById("tglprogres").value=item.tanggal_progress;
                    document.getElementById("nmprogres").value=item.nama_progress;
                    document.getElementById("statprogres").value=item.status_progress;
                    document.getElementById("catatan").value=item.catatan_progress;
                });
            },
            error: function(response) {
                console.log('Error:', response);
            }
        });
    }
    function show(id_progres) {
        $('#modal-show').modal('show');
        // document.getElementById("metode").value="editdata";
        // document.getElementById("id_progres").value=id_progres;

        $.ajax({
            data: 'id_progres='+id_progres,
            url: "{{ route('edit_lap') }}",
            type: "GET",
            datatype : "json",
            success: function(response) {
                console.log(response.listdata);
                $.each(response.listdata,function(key,item){
                    document.getElementById("prjshow").innerHTML='<u><b>'+item.project_id+'</b></u> <br>'+item.project;
                    document.getElementById("clientshow").innerHTML=item.client;
                    document.getElementById("salesamshow").innerHTML=item.sales_am;
                    document.getElementById("tglshow").innerHTML=item.tanggal_progress;
                    document.getElementById("listshow").innerHTML=item.status_progress+'%';
                    document.getElementById("mingguke").innerHTML=item.nama_progress;
                    document.getElementById("catatanshow").innerHTML=item.catatan_progress;
                    document.getElementById("jnsprojshow").innerHTML=item.jenis_project;
                });
            },
            error: function(response) {
                console.log('Error:', response);
            }
        });
    }

    function deletedata(id_progres) {
        if (confirm("Are you sure?")) {
            $.ajax({
                data: 'id_progres='+id_progres,
                url: "{{ route('delete_lap') }}",
                type: "GET",
                datatype : "json",
                success: function(response) {
                    console.log(response);
                    loaddata();
                },
                error: function(response) {
                    console.log('Error:', response);
                }
            });
    }
    }

    $('#addBtn').click(function(e) {
        document.getElementById("metode").value="insertdata";
        document.getElementById("id_progres").value="";
        document.getElementById("prjprogres").value="";
        document.getElementById("tglprogres").value="";
        document.getElementById("nmprogres").value="";
        document.getElementById("statprogres").value="";
        document.getElementById("catatan").value="";
        $('#modal-add').modal('show');
    });

    
</script>
@endpush