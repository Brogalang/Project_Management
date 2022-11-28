<!-- modal add Laporan Mingguan-->
<div class="modal fade" id="modal-add" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form name="frm_add" id="frm_add" class="form-horizontal" action="javascript:void(0)" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Data Laporan Mingguan</h4>
        </div>
        <div class="modal-body">
            <div class="form-group row">
            <label class="col-sm-3 col-form-label">Project <span class="text-danger" aria-hidden="true">&starf;</span></label>
            <div class="col-sm-9">
                <select name="prjprogres" id="prjprogres" class="form-control" style="width: 100%;" readonly>
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
            <button type="button" class="btn btn-outline-danger" onclick="clearlap()">Cancel</button>
            <button type="submit" class="btn btn-primary" id="saveBtn">Simpan</button>
        </div>
        <div>
            <table class="table table-striped"">
                <thead>
                    <th style="text-align:center;">No</th>
                    <th style="text-align:center;">Project</th>
                    <th style="text-align:center;">Tanggal</th>
                    <th style="text-align:center;">Progress</th>
                    <th style="text-align:center;">Minggu Ke</th>
                    <th style="text-align:center;">Catatan</th>
                    <th style="text-align:center;">Action</th>
                </thead>
                <tbody id="display_lap" name="display_lap">
                </tbody>
            </table>
        </div>

        </div>
        </form>
    </div>
</div>

<!-- modal Add Pending-->
<div class="modal fade" id="modal-pend" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form name="frm_pend" id="frm_pend" class="form-horizontal" action="javascript:void(0)" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Add Pending Project</h4>
        </div>
        <div class="modal-body">
            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Project <span class="text-danger" aria-hidden="true">&starf;</span></label>
            <div class="col-sm-9">
                <select name="prjpending" id="prjpending" class="form-control" style="width: 100%;" readonly>
                    <option value=''>Pilih Data</option>
                    @foreach ($projects as $prj)
                        <option value='{{$prj->project_id}}'>{{$prj->project_id}} [{{$prj->client}}] - {{$prj->project}}</option>
                    @endforeach
                </select>
            </div>
            </div>

            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Status <span class="text-danger" aria-hidden="true">&starf;</span></label>
            <div class="col-sm-9">
                <select name="statpending" id="statpending" class="form-control" style="width: 40%;">
                    <option value=''>Pilih Data</option>
                    <option value='Pending'>Pending</option>
                    <option value='Done'>Done</option>
                </select>
            </div>
            </div>

            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-9">
                <textarea type="text" name="despending" id="despending" class="form-control"></textarea>
            </div>
            </div>
        </div>
        
        <div class="modal-footer">
            <input type="hidden" name="metode" id="metodepending" value="insertpending">
            <input type="hidden" name="id_pending" id="id_pending">
            <button type="button" class="btn btn-outline-info" data-dismiss="modal">Tutup</button>
            <button type="button" class="btn btn-outline-danger" onclick="clearpending()">Cancel</button>
            <button type="submit" class="btn btn-primary" id="savePending">Simpan</button>
        </div>

        <!--Tabel Loaddata Pending-->
        <div>
            <table class="table table-striped" id="lapproyek-table">
                <thead>
                    <th style="text-align:center;">No</th>
                    <th style="text-align:center;">Project</th>
                    <th style="text-align:center;">Status</th>
                    <th style="text-align:center;">Deskripsi</th>
                    <th style="text-align:center;">Action</th>
                </thead>
                <tbody id="display_pending" name="display_pending">
                </tbody>
            </table>
        </div>
        </div>
        </form>
    </div>
</div>

<!-- modal Add Task List-->
<div class="modal fade" id="modal-task" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form name="frm_task" id="frm_task" class="form-horizontal" action="javascript:void(0)" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Add Task List</h4>
        </div>
        <div class="modal-body">
            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Project <span class="text-danger" aria-hidden="true">&starf;</span></label>
            <div class="col-sm-9">
                <select name="prjtask" id="prjtask" class="form-control" style="width: 100%;" readonly>
                    <option value=''>Pilih Data</option>
                    @foreach ($projects as $prj)
                        <option value='{{$prj->project_id}}'>{{$prj->project_id}} [{{$prj->client}}] - {{$prj->project}}</option>
                    @endforeach
                </select>
            </div>
            </div>

            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Urutan Task</label>
            <div class="col-sm-3">
                <input type="number" maxlength="3" name="urutantask" id="urutantask" class="form-control" placeholder="Urutan Task">
            </div>
            </div>

            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama Task List</label>
            <div class="col-sm-9">
                <input type="text" name="namatask" id="namatask" class="form-control" placeholder="Task List">
            </div>
            </div>

            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-3">
                <input type="date" name="tgldari" id="tgldari" class="form-control">
            </div> s/d
            <div class="col-sm-3">
                <input type="date" name="tglsmp" id="tglsmp" class="form-control">
            </div>
            </div>

            <div class="form-group row">
            <label class="col-sm-2 col-form-label">Progress</label>
            <div class="col-sm-3">
                <div class="input-group-append">
                    <input type="number" name="progresstask" id="progresstask" class="form-control" maxlength="3" placeholder="">
                    <span class="input-group-text">
                        %
                    </span>
                </div>
            </div>
            </div>

        </div>
        
        <div class="modal-footer">
            <input type="hidden" name="metode" id="metodetask" value="inserttask">
            <input type="hidden" name="id_task" id="id_task">
            <button type="button" class="btn btn-outline-info" data-dismiss="modal">Tutup</button>
            <button type="button" class="btn btn-outline-danger" onclick="cleartask()">Cancel</button>
            <button type="submit" class="btn btn-primary" id="saveTask">Simpan</button>
        </div>

        <!--Tabel Loaddata Task List-->
        <div>
            <table class="table table-striped" id="tasklist-table">
                <thead>
                    <th style="text-align:center;">No</th>
                    <th style="text-align:center;">Project</th>
                    <th style="text-align:center;">Urutan Task</th>
                    <th style="text-align:center;">Nama Task List</th>
                    <th style="text-align:center;">Tanggal</th>
                    <th style="text-align:center;">Progress</th>
                    <th style="text-align:center;">Action</th>
                </thead>
                <tbody id="display_task" name="display_task">
                </tbody>
            </table>
        </div>
        </div>
        </form>
    </div>
</div>

<!-- modal Add Delivery-->
<div class="modal fade" id="modal-delivery" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <form name="frm_delivery" id="frm_delivery" class="form-horizontal" action="javascript:void(0)" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Add Delivery</h4>
        </div>
        <div class="modal-body">
            <div class="row">
            <!---->
            <div class="col-md-6">
                <!-- Nomor Invoice Field -->
                <div class="form-group col-sm-15">
                    <label class="col-form-label">Project</label>
                    <!-- <div class="col-sm-9"> -->
                        <select name="prjdelivery" id="prjdelivery" class="form-control" style="width: 100%;" readonly>
                            <option value=''>Pilih Data</option>
                            @foreach ($projects as $prj)
                                <option value='{{$prj->project_id}}'>{{$prj->project_id}} [{{$prj->client}}] - {{$prj->project}}</option>
                            @endforeach
                        </select>
                    <!-- </div> -->
                </div>
                <div class="form-group col-sm-15">
                    <label class="col-form-label">Nama Pelanggan</label>
                    <input type="text" name="namapelanggan" id="namapelanggan" class="form-control" placeholder="Nama Pelanggan">
                </div>
                <div class="form-group col-sm-15">
                    <label>Sales AM</label>
                    <p id="salesamshow"></p>
                </div>
                <div class="form-group col-sm-15">
                    <label>Jenis Project</label>
                    <p id="jnsprojshow"></p>
                </div>

            </div>

            <!---->
            <div class="col-md-6">
                <!-- PIC Id Field -->
                <div class="form-group col-sm-15">
                <label class="col-form-label">Nomor PO</label>
                    <!-- <div class="col-sm-9"> -->
                        <select name="nomorpo" id="nomorpo" class="form-control" style="width: 100%;">
                            <option value=''>Pilih Data</option>
                        </select>
                    <!-- </div> -->
                </div>
                <div class="form-group col-sm-7">
                    <label>Progress</label>
                    <p id="listshow"></p>
                </div>
                <div class="form-group col-sm-7">
                    <label>Minggu Ke</label>
                    <p id="mingguke"></p>
                </div>
                <div class="form-group col-sm-7">
                    <label>Catatan</label>
                    <p id="catatanshow"></p>
                </div>
            </div>


        </div>
        
        <div class="modal-footer">
            <input type="hidden" name="metode" id="metodetask" value="inserttask">
            <input type="hidden" name="id_task" id="id_task">
            <button type="button" class="btn btn-outline-info" data-dismiss="modal">Tutup</button>
            <button type="button" class="btn btn-outline-danger" onclick="cleartask()">Cancel</button>
            <button type="submit" class="btn btn-primary" id="saveTask">Simpan</button>
        </div>

        <!--Tabel Loaddata Task List-->
        <div>
            <table class="table table-striped" id="tasklist-table">
                <thead>
                    <th style="text-align:center;">No</th>
                    <th style="text-align:center;">Project</th>
                    <th style="text-align:center;">Urutan Task</th>
                    <th style="text-align:center;">Nama Task List</th>
                    <th style="text-align:center;">Tanggal</th>
                    <th style="text-align:center;">Progress</th>
                    <th style="text-align:center;">Action</th>
                </thead>
                <tbody id="display_task" name="display_task">
                </tbody>
            </table>
        </div>
        </div>
        </form>
    </div>
</div>


@push('javascript')
<script>
    $(document).ready(function(){   
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });

    function clearlap(){
        document.getElementById("id_progres").value="";
        document.getElementById("metode").value="insertdata";
        document.getElementById("tglprogres").value="";
        document.getElementById("statprogres").value="";
        document.getElementById("nmprogres").value="";
        document.getElementById("catatan").value="";
    }

   function lapmingguan(project_id){
        $('#modal-add').modal({backdrop: 'static', keyboard: false});
        $('#modal-add').modal('show');
        document.getElementById("prjprogres").value=project_id;
        clearlap();
        loaddatalap(project_id);
    }

    function editlap(id_progress,project_id,tanggal_progress,status_progress,nama_progress,catatan_progress) {
        document.getElementById("metode").value="editdata";
        document.getElementById("id_progres").value=id_progress;
        document.getElementById("prjprogres").value=project_id;
        document.getElementById("tglprogres").value=tanggal_progress;
        document.getElementById("statprogres").value=status_progress;
        document.getElementById("nmprogres").value=nama_progress;
        document.getElementById("catatan").value=catatan_progress;
    }

    $('#saveBtn').click(function(e) {
        var formdata = $("#modal-add form").serializeArray();
        var data = {};
        $(formdata).each(function(index, obj) {
            data[obj.name] = obj.value;
        });
        var idload=data['prjprogres'];
            $.ajax({
                data: $('#modal-add form').serialize(),
                url: "{{ route('laporan_mingguan.store') }}",
                type: "POST",
                dataType: 'html',
                success: function(data) {
                    // $('#modal-add').modal('hide');
                    clearlap();
                    loaddatalap(idload);
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            });
    });
    function deletedata(id_progres,project_id) {
        if (confirm("Are you sure?")) {
            $.ajax({
                data: 'id_progres='+id_progres,
                url: "{{ route('delete_lap') }}",
                type: "GET",
                datatype : "json",
                success: function(response) {
                    console.log(response);
                    loaddatalap(project_id);
                },
                error: function(response) {
                    console.log('Error:', response);
                }
            });
        }
    }

    function loaddatalap(project_id){
        // alert('halo');
        $.ajax({
            data: 'project_id='+project_id,
            type: "GET",
            url : "{{ route('loaddata') }}",
            datatype : "json",
            success:function(response){
                console.log(response.listdata);
                $('#display_lap').html("");
                var x = 0;
                $.each(response.listdata,function(key,item){
                    x++;
                    // $.each(response.countdata,function(key,count){
                        $('#display_lap').append(
                        '<tr>\
                            <td align=center>'+x+'</td>\
                            <td align=left><b><u>'+item.project_id+'</u></b><br>'+item.project+'</td>\
                            <td align=center nowrap>'+item.tanggal_progress+'</td>\
                            <td align=left>'+item.status_progress+'%</td>\
                            <td align=left>'+item.nama_progress+'</td>\
                            <td align=left>'+item.catatan_progress+'</td>\
                            <td align=center nowrap>\
                                <button type="button" class="btn btn-ghost-info" onClick="editlap(\''+item.id_progress+'\',\'' + item.project_id + '\',\'' + item.tanggal_progress + '\',\'' + item.status_progress + '\',\'' + item.nama_progress + '\',\'' + item.catatan_progress + '\')"><i class="fa fa-edit"></i></button>\
                                <button type="submit" value="'+item.id_progress+'" class="btn btn-ghost-danger" onClick="deletedata(\''+item.id_progress+'\',\'' + item.project_id + '\')"><i class="fa fa-trash"></i></button>\
                            </td>\
                        </tr>'
                        );
                    // });
                });
            }
        });
    }

    function tasklist(project_id){
        $('#modal-task').modal({backdrop: 'static', keyboard: false});
        $('#modal-task').modal('show');
        document.getElementById("prjtask").value=project_id;
        cleartask();
        loadtask(project_id);
    }

    $('#saveTask').click(function(e) {
        var formdata = $("#modal-task form").serializeArray();
        var data = {};
        $(formdata).each(function(index, obj) {
            data[obj.name] = obj.value;
        });
        var idload=data['prjtask'];
        // console.log(idload);
            $.ajax({
                data: $('#modal-task form').serialize(),
                url: "{{ route('laporan_mingguan.store') }}",
                type: "POST",
                dataType: 'html',
                success: function(data) {
                    // $('#modal-pend').modal('hide');
                    cleartask();
                    loadtask(idload);
                    loaddata();
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            });
    });
    
    function cleartask(){
        document.getElementById("metodetask").value="inserttask";
        document.getElementById("id_task").value="";
        document.getElementById("urutantask").value="";
        document.getElementById("namatask").value="";
        document.getElementById("tgldari").value="";
        document.getElementById("tglsmp").value="";
        document.getElementById("progresstask").value="";
    }

    function edittask(id_task,urutan_task,nama_task,tgldari_task,tglsmp_task,progress) {
        document.getElementById("metodetask").value="edittask";
        document.getElementById("id_task").value=id_task;
        document.getElementById("urutantask").value=urutan_task;
        document.getElementById("namatask").value=nama_task;
        document.getElementById("tgldari").value=tgldari_task;
        document.getElementById("tglsmp").value=tglsmp_task;
        document.getElementById("progresstask").value=progress;
    }

    function deletetask(id_task,project_id) {
        if (confirm("Are you sure?")) {
            $.ajax({
                data: 'id_task='+id_task,
                url: "{{ route('delete_task') }}",
                type: "GET",
                datatype : "json",
                success: function(response) {
                    console.log(response);
                    loadtask(project_id);
                },
                error: function(response) {
                    console.log('Error:', response);
                }
            });
        }
    }

    function loadtask(project_id){
        // alert('halo');
        $.ajax({
            data: 'project_id='+project_id,
            type: "GET",
            url : "{{ route('loadtask') }}",
            datatype : "json",
            success:function(response){
                console.log(response.listtask);
                $('#display_task').html("");
                var x = 0;
                $.each(response.listtask,function(key,item){
                    x++;
                    $('#display_task').append(
                    '<tr>\
                        <td align=center>'+x+'</td>\
                        <td align=left>'+item.project_id+'</td>\
                        <td align=center>'+item.urutan_task+'</td>\
                        <td align=left>'+item.nama_task+'</td>\
                        <td align=left>'+item.tgldari_task+' s/d <br>'+item.tglsmp_task+'</td>\
                        <td align=left>'+item.progress+' %</td>\
                        <td align=center nowrap>\
                            <button type="button" class="btn btn-ghost-info" onClick="edittask(\''+item.id_task+'\',\'' + item.urutan_task + '\',\'' + item.nama_task + '\',\'' + item.tgldari_task + '\',\'' + item.tglsmp_task + '\',\'' + item.progress + '\')"><i class="fa fa-edit"></i></button>\
                            <button type="submit" class="btn btn-ghost-danger" onClick="deletetask('+item.id_task+',\'' + item.project_id + '\')"><i class="fa fa-trash"></i></button>\
                        </td>\
                    </tr>'
                    );
                });
            }
        });
    }

    // function delivery(project_id){
    //     $('#modal-delivery').modal({backdrop: 'static', keyboard: false});
    //     $('#modal-delivery').modal('show');
    //     document.getElementById("prjdelivery").value=project_id;
    //     // cleartask();
    //     // loadtask(project_id);
    // }

    function pendingJ(project_id){
        $('#modal-pend').modal({backdrop: 'static', keyboard: false});
        $('#modal-pend').modal('show');
        document.getElementById("prjpending").value=project_id;
        clearpending();
        loadpending(project_id);
    }
    function clearpending(){
        document.getElementById("metodepending").value="insertpending";
        document.getElementById("id_pending").value="";
        document.getElementById("statpending").value="";
        document.getElementById("despending").value="";
    }

    $('#savePending').click(function(e) {
        var formdata = $("#modal-pend form").serializeArray();
        var data = {};
        $(formdata).each(function(index, obj) {
            data[obj.name] = obj.value;
        });
        var idload=data['prjpending'];
        // console.log(idload);
            $.ajax({
                data: $('#modal-pend form').serialize(),
                url: "{{ route('laporan_mingguan.store') }}",
                type: "POST",
                dataType: 'html',
                success: function(data) {
                    // $('#modal-pend').modal('hide');
                    clearpending();
                    loadpending(idload);
                    loaddata();
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            });
    });

    function editpending(id_pending,status_pending,deskripsi_pending) {
        document.getElementById("metodepending").value="editpending";
        document.getElementById("id_pending").value=id_pending;
        document.getElementById("statpending").value=status_pending;
        document.getElementById("despending").value=deskripsi_pending;
    }

    function deletepending(id_pending,project_id) {
        if (confirm("Are you sure?")) {
            $.ajax({
                data: 'id_pending='+id_pending,
                url: "{{ route('deletepending') }}",
                type: "GET",
                datatype : "json",
                success: function(response) {
                    console.log(response);
                    loadpending(project_id);
                    loaddata();
                },
                error: function(response) {
                    console.log('Error:', response);
                }
            });
        }
    }

    function loadpending(project_id){
        // alert('halo');
        $.ajax({
            data: 'project_id='+project_id,
            type: "GET",
            url : "{{ route('loadpending') }}",
            datatype : "json",
            success:function(response){
                console.log(response.listpending);
                $('#display_pending').html("");
                var x = 0;
                $.each(response.listpending,function(key,item){
                    x++;
                    $('#display_pending').append(
                    '<tr>\
                        <td align=center>'+x+'</td>\
                        <td align=left>'+item.project_id+'</td>\
                        <td align=center>'+item.status_pending+'</td>\
                        <td align=left>'+item.deskripsi_pending+'</td>\
                        <td align=center nowrap>\
                            <button type="button" value="'+item.id_pending+'" class="btn btn-ghost-info" onClick="editpending(\''+item.id_pending+'\',\'' + item.status_pending + '\',\'' + item.deskripsi_pending + '\')"><i class="fa fa-edit"></i></button>\
                            <button type="submit" value="'+item.id_pending+'" class="btn btn-ghost-danger" onClick="deletepending('+item.id_pending+',\'' + item.project_id + '\')"><i class="fa fa-trash"></i></button>\
                        </td>\
                    </tr>'
                    );
                });
            }
        });
    }
</script>
@endpush