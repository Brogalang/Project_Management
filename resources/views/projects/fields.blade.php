<div class="row bg-danger p-2">
    <div class="col-md-4">
        <!-- Divisi Field -->
        <div class="form-group col-sm-6">
            <strong>{!! Form::label('divisi', 'Divisi') !!}</strong>
            <h5>{!! Form::label('divisi', Auth::user()->divisi->nama_div_ext) !!}</h5>
            {!! Form::text('divisi', Auth::user()->divisi->nama_div_ext, ['class' => 'form-control', 'hidden' => 'hidden']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <!-- Departement Field -->
        <div class="form-group col-sm-6">
            <strong>{!! Form::label('departement', 'Departemen') !!}</strong>
            <h5>{!! Form::label('departement', Auth::user()->sub_divisi->subdivisi) !!}</h5>
            {!! Form::text('departement', Auth::user()->sub_divisi->subdivisi, ['class' => 'form-control' , 'hidden' => 'hidden']) !!}
            {!! Form::text('codedepartement', Auth::user()->sub_divisi->dept_code, ['class' => 'form-control' , 'hidden' => 'hidden']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <!-- Jabatan Field -->
        <div class="form-group col-sm-6">
            <strong>{!! Form::label('jabatan', 'Jabatan') !!}</strong>
            <h5>{!! Form::label('jabatan', Auth::user()->jabatanUser->jabatan) !!}</h5>
            {!! Form::text('jabatan', Auth::user()->jabatanUser->jabatan, ['class' => 'form-control', 'hidden' => 'hidden']) !!}
        </div>
    </div>
    <div class="col-md-4">
        <!-- Sales Am Field -->
        <div class="form-group col-sm-6">
            <strong>{!! Form::label('sales_am', 'Sales AM') !!}</strong>
            <h5>{!! Form::label('sales_am', Auth::user()->NIK . '-' . Auth::user()->Nama) !!}</h5>
            {!! Form::text('sales_am', Auth::user()->NIK . '-' . Auth::user()->Nama, ['class' => 'form-control', 'hidden' => 'hidden']) !!}
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-6">
        <!-- Client Field -->
        <div class="form-group col-sm-6">
            <strong>{!! Form::label('client', 'Client') !!}<span class="text-danger" aria-hidden="true">&starf;</span></strong>
            {!! Form::text('client', null, ['class' => 'form-control', 'required' => 'required']) !!}
        </div>

        <!-- Project Field -->
        <div class="form-group col-sm-6">
            <strong>{!! Form::label('project', 'Nama Proyek') !!}<span class="text-danger" aria-hidden="true">&starf;</span></strong>
            {!! Form::text('project', null, ['class' => 'form-control', 'required' => 'required']) !!}
        </div>

        <!-- Client Fullname Field -->
        <div class="form-group col-sm-12 col-lg-12"">
            <strong>{!! Form::label('client_fullname', 'Nama Lengkap Client') !!}</strong>
            {!! Form::textarea('client_fullname', null, ['class' => 'form-control', 'cols' => 3, 'rows' => 3]) !!}
        </div>

        <!-- Project Fullname Field -->
        <div class="form-group col-sm-12 col-lg-12">
            <strong>{!! Form::label('project_fullname', 'Nama Lengkap Proyek') !!}</strong>
            {!! Form::textarea('project_fullname', null, ['class' => 'form-control', 'cols' => 3, 'rows' => 3]) !!}
        </div>

        <!-- Jenis Project Field -->
        <div class="form-group col-sm-6">
            <strong>{!! Form::label('jenis_project', 'Jenis Proyek') !!}<span class="text-danger" aria-hidden="true">&starf;</span></strong>
            {!! Form::select('jenis_project', ['Software' => 'Software', 'Hardware' => 'Hardware', 'Software & Hardware' => 'Software & Hardware', 'Manage Services' => 'Manage Services'], null, ['class' => 'form-control', 'required' => 'required']) !!}
        </div>
    </div>

    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <!-- Kontrak No Field -->
                <div class="form-group col-sm-12">
                    <strong>{!! Form::label('kontrak_no', 'Nomor Kontrak') !!}</strong>
                    {!! Form::text('kontrak_no', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group col-sm-12">
                    <strong>{!! Form::label('local_project_id', 'Id Project Local') !!}</strong>
                    {!! Form::text('local_project_id', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="col-md-6">
                <!-- Kontrak Tanggal Mulai Field -->
                <div class="form-group col-sm-12">
                    <strong>{!! Form::label('kontrak_tgl_mulai', 'Tanggal Mulai Kontrak') !!}<span class="text-danger" aria-hidden="true">&starf;</span></strong>
                    {!! Form::date('kontrak_tgl_mulai', null, ['class' => 'form-control', 'required' => 'required']) !!}
                </div>
            </div>

            <div class="col-md-6">
                <!-- Kontrak Tanggal Selesai Field -->
                <div class="form-group col-sm-12">
                    <strong>{!! Form::label('kontrak_tgl_selesai', 'Tanggal Selesai Kontrak') !!}</strong>
                    {!! Form::date('kontrak_tgl_selesai', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="col-md-12">
                <!-- BAMK Field -->
                <div class="form-group col-sm-6">
                    <strong>{!! Form::label('bamk_tgl', 'Tanggal BAMK') !!}</strong>
                    {!! Form::date('bamk_tgl', null, ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class="col-md-6">
                <!-- Nilai Kontrak Bt Field -->
                <div class="form-group col-sm-12">
                    <strong>{!! Form::label('nilai_kontrak_BT', 'Nilai Kontrak Sebelum Pajak') !!}</strong>
                    {!! Form::text('nilai_kontrak_BT', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-6">
                <!-- Nilai Kontrak At Field -->
                <div class="form-group col-sm-12">
                    <strong>{!! Form::label('nilai_kontrak_AT', 'Nilai Kontrak Setelah Pajak') !!}</strong>
                    {!! Form::text('nilai_kontrak_AT', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-6">
                <!-- Rab No Field -->
                <div class="form-group col-sm-12">
                    <strong>{!! Form::label('rab_no', 'Rab No') !!}</strong>
                    {!! Form::text('rab_no', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-6">
                <!-- Rab Tanggal Approved Field -->
                <div class="form-group col-sm-12">
                    <strong>{!! Form::label('rab_tgl_approved', 'Tanggal RAB Disetujui') !!}</strong>
                    {!! Form::date('rab_tgl_approved', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="col-md-6">
                <!-- Status Field -->
                <div class="form-group col-sm-12">
                    <strong>{!! Form::label('status', 'Status') !!}<span class="text-danger" aria-hidden="true">&starf;</span></strong>
                    {!! Form::select('status', ['Sedang Berjalan' => 'Sedang Berjalan', 'Selesai' => 'Selesai', 'Batal' => 'Batal'] , null, ['class' => 'form-control', 'required' => 'required']) !!}
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Catatan Field -->
<div class="form-group col-sm-12 col-lg-12">
    <strong>{!! Form::label('catatan', 'Catatan') !!}</strong>
    {!! Form::textarea('catatan', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('projects.index') }}" class="btn btn-secondary">Cancel</a>
</div>
