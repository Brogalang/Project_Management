<div class="row">
    <div class="col-md-6">
        <!-- Client Id Field -->
        <div class="form-group col-sm-12">
            <strong>{!! Form::label('client_id', 'CLIENT ID:') !!}</strong>
            {!! Form::text('client_id', null, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
        </div>

        <!-- Bidang Usaha Field -->
        <div class="form-group col-sm-12">
            <strong>{!! Form::label('bidang_usaha', 'BIDANG USAHA:') !!}</strong>
            {!! Form::select('bidang_usaha', [
                ''=>'',
                'PRIVATE' => 'PRIVATE',
                'PENDIDIKAN' => 'PENDIDIKAN',
                'IMPORTIR' => 'IMPORTIR',
                'EKSPORTIR' => 'EKSPORTIR',
                'EKSPOR IMPOR' => 'EKSPOR IMPOR',
                'PPJK' => 'PPJK',
                'PJT' => 'PJT',
                'PPJK & PJT' => 'PPJK & PJT',
                'AGEN PENGANGKUT' => 'AGEN PENGANGKUT',
            ] , null, ['class' => 'form-control']) !!}
        </div>

        <!-- Npwp Field -->
        <div class="form-group col-sm-12">
            <strong>{!! Form::label('npwp', 'NPWP:') !!}</strong>
            {!! Form::text('npwp', null, ['class' => 'form-control', 'maxlength' => '15']) !!}
        </div>

        <!-- Nama Perusahaan Field -->
        <div class="form-group col-sm-12">
            <strong>{!! Form::label('nama_perusahaan', 'NAMA PERUSAHAAN:') !!}</strong>
            {!! Form::text('nama_perusahaan', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-6">
        <!-- Status Pelanggan Field -->
        <div class="form-group col-sm-12">
            <strong>{!! Form::label('status_pelanggan', 'STATUS PELANGGAN:') !!}</strong>
            {!! Form::select('status_pelanggan', [''=>'', 'Aktif' => 'Aktif', 'On-Progress' => 'On-Progress', 'Blocked' => 'Blocked'] , null, ['class' => 'form-control']) !!}
        </div>

        <!-- Product Layanan Field -->
        <div class="form-group col-sm-12">
            <strong>{!! Form::label('product_layanan', 'PRODUCT LAYANAN:') !!}</strong>
            <select name="product_layanan" id="product_layanan" class="form-control form-select">
                <option value=""></option>
                @foreach ($projects as $project)
                    @if ($clients)
                        <option value="{{$project->project_id . ' - ' . $project->project}}" {{ ($project->project_id . ' - ' . $project->project == $clients->product_layanan) ? 'selected' : '' }}>{{ $project->project_id . ' - ' . $project->project }}</option>
                    @else
                        <option value="{{$project->project_id . ' - ' . $project->project}}">{{ $project->project_id . ' - ' . $project->project }}</option>
                    @endif
                @endforeach
            </select>
        </div>

        <!-- Hasil Produksi Field -->
        <div class="form-group col-sm-12">
            <strong>{!! Form::label('hasil_produksi', 'HASIL PRODUKSI:') !!}</strong>
            {!! Form::text('hasil_produksi', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Potensi Penjualan Field -->
        <div class="form-group col-sm-12">
            <strong>{!! Form::label('potensi_penjualan', 'POTENSI PENJUALAN:') !!}</strong>
            {!! Form::text('potensi_penjualan', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Valid Field -->
        <div class="form-group col-sm-12">
            <strong>{!! Form::label('valid', 'VALID:') !!}</strong>
            {!! Form::select('valid', [''=>'', 'Valid' => 'Valid', 'Invalid' => 'Invalid'] , null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <strong>Alamat - 1</strong>
            </div>
            <div class="card-body">
                <!-- Alamat 1 Field -->
                <div class="form-group col-sm-12 col-lg-12">
                    <strong>{!! Form::label('alamat_1', 'ALAMAT 1:') !!}</strong>
                    {!! Form::textarea('alamat_1', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Kelurahan Field -->
                <div class="form-group col-sm-12">
                    <strong>{!! Form::label('kelurahan', 'KELURAHAN:') !!}</strong>
                    {!! Form::text('kelurahan', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Kecamatan Field -->
                <div class="form-group col-sm-12">
                    <strong>{!! Form::label('kecamatan', 'KECAMATAN:') !!}</strong>
                    {!! Form::text('kecamatan', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Kota Field -->
                <div class="form-group col-sm-12">
                    <strong>{!! Form::label('kota', 'KOTA:') !!}</strong>
                    {!! Form::text('kota', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Provinsi Field -->
                <div class="form-group col-sm-12">
                    <strong>{!! Form::label('provinsi', 'PROVINSI:') !!}</strong>
                    {!! Form::text('provinsi', null, ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <strong>Alamat - 2</strong>
            </div>
            <div class="card-body">
                <!-- Alamat 2 Field -->
                <div class="form-group col-sm-12 col-lg-12">
                    <strong>{!! Form::label('alamat_2', 'ALAMAT 2:') !!}</strong>
                    {!! Form::textarea('alamat_2', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Kelurahan Field -->
                <div class="form-group col-sm-12">
                    <strong>{!! Form::label('kelurahan', 'KELURAHAN:') !!}</strong>
                    {!! Form::text('kelurahan', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Kecamatan Field -->
                <div class="form-group col-sm-12">
                    <strong>{!! Form::label('kecamatan', 'KECAMATAN:') !!}</strong>
                    {!! Form::text('kecamatan', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Kota Field -->
                <div class="form-group col-sm-12">
                    <strong>{!! Form::label('kota', 'KOTA:') !!}</strong>
                    {!! Form::text('kota', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Provinsi Field -->
                <div class="form-group col-sm-12">
                    <strong>{!! Form::label('provinsi', 'PROVINSI:') !!}</strong>
                    {!! Form::text('provinsi', null, ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>
    </div>
</div>

<hr>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <strong>Kontak Billing</strong>
            </div>
            <div class="card-body">
                <!-- No Kontak Billing Field -->
                <div class="form-group col-sm-12">
                    <strong>{!! Form::label('no_kontak_billing', 'NO KONTAK BILLING:') !!}</strong>
                    {!! Form::text('no_kontak_billing', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Email Billing Field -->
                <div class="form-group col-sm-12">
                    <strong>{!! Form::label('email_billing', 'EMAIL BILLING:') !!}</strong>
                    {!! Form::text('email_billing', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Website Billing Field -->
                <div class="form-group col-sm-12">
                    <strong>{!! Form::label('website_billing', 'WEBSITE BILLING:') !!}</strong>
                    {!! Form::text('website_billing', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Pic Billing Field -->
                <div class="form-group col-sm-12">
                    <strong>{!! Form::label('pic_billing', 'PIC BILLING:') !!}</strong>
                    {!! Form::text('pic_billing', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Jabatan Billing Field -->
                <div class="form-group col-sm-12">
                    <strong>{!! Form::label('jabatan_billing', 'JABATAN BILLING:') !!}</strong>
                    {!! Form::text('jabatan_billing', null, ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <strong>Kontak User</strong>
            </div>
            <div class="card-body">
                <!-- No Telepon Field -->
                <div class="form-group col-sm-12">
                    <strong>{!! Form::label('no_telepon', 'NO TELEPON:') !!}</strong>
                    {!! Form::text('no_telepon', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Mobile Field -->
                <div class="form-group col-sm-12">
                    <strong>{!! Form::label('mobile', 'MOBILE:') !!}</strong>
                    {!! Form::text('mobile', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Email Field -->
                <div class="form-group col-sm-12">
                    <strong>{!! Form::label('email', 'EMAIL:') !!}</strong>
                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Nama Pic Field -->
                <div class="form-group col-sm-12">
                    <strong>{!! Form::label('nama_pic', 'NAMA PIC:') !!}</strong>
                    {!! Form::text('nama_pic', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Jabatan Field -->
                <div class="form-group col-sm-12">
                    <strong>{!! Form::label('jabatan', 'JABATAN:') !!}</strong>
                    {!! Form::text('jabatan', null, ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('clients.index') }}" class="btn btn-secondary">Cancel</a>
</div>
