<div class="row bg-primary p-2">
    <div class="col-md-3">
        <!-- Project ID Field -->
        <div class="form-group col-sm-12">
            <strong>{!! Form::label('project_id', 'Project ID:') !!}</strong>
            <h5>{!! $project->project_id !!}</h5>
        </div>
    </div>
    <div class="col-md-3">
        <!-- Divisi Field -->
        <div class="form-group col-sm-12">
            <strong>{!! Form::label('divisi', 'Divisi:') !!}</strong>
            <h5>{!! $project->divisi !!}</h5>
        </div>
    </div>
    <div class="col-md-3">
        <!-- Departement Field -->
        <div class="form-group col-sm-12">
            <strong>{!! Form::label('departement', 'Departemen:') !!}</strong>
            <h5>{!! $project->departement !!}</h5>
        </div>
    </div>
    <div class="col-md-3">
        <!-- Sales Am Field -->
        <div class="form-group col-sm-12">
            <strong>{!! Form::label('sales_am', 'Sales AM:') !!}</strong>
            <h5>{!! $project->sales_am !!}</h5>
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-6">
        <!-- Client Field -->
        <div class="form-group col-sm-12">
            <strong>{!! Form::label('local_project_id', 'Id Project Local:') !!}</strong><br>
            <td>{!! $project->local_project_id !!}</td>
        </div>
         <!-- Client Field -->
        <div class="form-group col-sm-12">
            <strong>{!! Form::label('client', 'Client:') !!}</strong><br>
            <td>{!! $project->client !!}</td>
        </div>
         <!-- Client Fullname Field -->
        <div class="form-group col-sm-12 col-lg-12">
            <strong>{!! Form::label('client_fullname', 'Nama Lengkap Client:') !!}</strong><br>
            <td>{!! $project->client_fullname !!}</td>
        </div>

        <!-- Project Field -->
        <div class="form-group col-sm-12">
            <strong>{!! Form::label('project', 'Nama Proyek:') !!}</strong><br>
            <td>{!! $project->project !!}</td>
        </div>

        <!-- Project Fullname Field -->
        <div class="form-group col-sm-12 col-lg-12">
            <strong>{!! Form::label('project_fullname', 'Nama Lengkap Proyek:') !!}</strong><br>
            <td>{!! $project->project_fullname !!}</td>
        </div>

        <!-- Jenis Project Field -->
        <div class="form-group col-sm-12">
            <strong>{!! Form::label('jenis_project', 'Jenis Proyek:') !!}</strong><br>
            <td>{!! $project->jenis_project !!}</td>
        </div>
    </div>

    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <!-- Kontrak No Field -->
                <div class="form-group col-sm-12">
                    <strong>{!! Form::label('kontrak_no', 'Nomor Kontrak:') !!}</strong><br>
                    <td>{!! $project->kontrak_no !!}</td>
                </div>
            </div>

            <div class="col-md-6">
                <!-- Kontrak Tanggal Mulai Field -->
                <div class="form-group col-sm-12">
                    <strong>{!! Form::label('kontrak_tgl_mulai', 'Tanggal Mulai Kontrak:') !!}</strong><br>
                    <td>{!! $project->kontrak_tgl_mulai !!}</td>
                </div>
            </div>

            <div class="col-md-6">
                <!-- Kontrak Tanggal Selesai Field -->
                <div class="form-group col-sm-12">
                    <strong>{!! Form::label('kontrak_tgl_selesai', 'Tanggal Selesai Kontrak:') !!}</strong><br>
                    <td>{!! $project->kontrak_tgl_selesai !!}</td>
                </div>
            </div>

            <div class="col-md-12">
                <!-- BAMK Field -->
                <div class="form-group col-sm-12">
                    <strong>{!! Form::label('bamk_tgl', 'Tanggal BAMK:') !!}</strong><br>
                    <td>{!! $project->bamk_tgl !!}</td>
                </div>
            </div>

            <div class="col-md-6">
                <!-- Nilai Kontrak Bt Field -->
                <div class="form-group col-sm-12">
                    <strong>{!! Form::label('nilai_kontrak_BT', 'Nilai Kontrak Sebelum Pajak:') !!}</strong><br>
                    <td>{!! number_format($project->nilai_kontrak_BT) !!}</td>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Nilai Kontrak At Field -->
                <div class="form-group col-sm-12">
                    <strong>{!! Form::label('nilai_kontrak_AT', 'Nilai Kontrak Setelah Pajak:') !!}</strong><br>
                    <td>{!! number_format($project->nilai_kontrak_AT) !!}</td>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Rab No Field -->
                <div class="form-group col-sm-12">
                    <strong>{!! Form::label('rab_no', 'Rab No:') !!}</strong><br>
                    <td>{!! $project->rab_no !!}</td>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Rab Tanggal Approved Field -->
                <div class="form-group col-sm-12">
                    <strong>{!! Form::label('rab_tgl_approved', 'Tanggal RAB Disetujui:') !!}</strong><br>
                    <td>{!! $project->rab_tgl_approved !!}</td>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Status Field -->
                <div class="form-group col-sm-12">
                    <strong>{!! Form::label('status', 'Status:') !!}</strong><br>
                    <td>{!! $project->status !!}</td>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Catatan Field -->
<div class="form-group col-sm-12 col-lg-12">
    <strong>{!! Form::label('catatan', 'Catatan:') !!}</strong>
    <h5>{!! $project->catatan !!}</h5>
</div>
