<div class="row">
    <div class="col-md-6">
        <!-- Client Id Field -->
        <div class="form-group">
            <strong>{!! Form::label('client_id', 'Client Id:') !!}</strong>
            <p>{{ $clients->client_id }}</p>
        </div>

        <!-- Bidang Usaha Field -->
        <div class="form-group">
            <strong>{!! Form::label('bidang_usaha', 'Bidang Usaha:') !!}</strong>
            <p>{{ $clients->bidang_usaha }}</p>
        </div>

        <!-- Npwp Field -->
        <div class="form-group">
            <strong>{!! Form::label('npwp', 'Npwp:') !!}</strong>
            <p>{{ $clients->npwp }}</p>
        </div>

        <!-- Nama Perusahaan Field -->
        <div class="form-group">
            <strong>{!! Form::label('nama_perusahaan', 'Nama Perusahaan:') !!}</strong>
            <p>{{ $clients->nama_perusahaan }}</p>
        </div>
    </div>
    <div class="col-md-6">
        <!-- Status Pelanggan Field -->
        <div class="form-group">
            <strong>{!! Form::label('status_pelanggan', 'Status Pelanggan:') !!}</strong>
            <p>{{ $clients->status_pelanggan }}</p>
        </div>

        <!-- Product Layanan Field -->
        <div class="form-group">
            <strong>{!! Form::label('product_layanan', 'Product Layanan:') !!}</strong>
            <p>{{ $clients->product_layanan }}</p>
        </div>

        <!-- Hasil Produksi Field -->
        <div class="form-group">
            <strong>{!! Form::label('hasil_produksi', 'Hasil Produksi:') !!}</strong>
            <p>{{ $clients->hasil_produksi }}</p>
        </div>

        <!-- Potensi Penjualan Field -->
        <div class="form-group">
            <strong>{!! Form::label('potensi_penjualan', 'Potensi Penjualan:') !!}</strong>
            <p>{{ $clients->potensi_penjualan }}</p>
        </div>

        <!-- Valid Field -->
        <div class="form-group">
            <strong>{!! Form::label('valid', 'Valid:') !!}</strong>
            <p>{{ $clients->valid }}</p>
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
                <div class="form-group">
                    <strong>{!! Form::label('alamat_1', 'Alamat 1:') !!}</strong>
                    <p>{{ $clients->alamat_1 }}</p>
                </div>

                <!-- Kelurahan Field -->
                <div class="form-group">
                    <strong>{!! Form::label('kelurahan', 'Kelurahan:') !!}</strong>
                    <p>{{ $clients->kelurahan }}</p>
                </div>

                <!-- Kecamatan Field -->
                <div class="form-group">
                    <strong>{!! Form::label('kecamatan', 'Kecamatan:') !!}</strong>
                    <p>{{ $clients->kecamatan }}</p>
                </div>

                <!-- Kota Field -->
                <div class="form-group">
                    <strong>{!! Form::label('kota', 'Kota:') !!}</strong>
                    <p>{{ $clients->kota }}</p>
                </div>

                <!-- Provinsi Field -->
                <div class="form-group">
                    <strong>{!! Form::label('provinsi', 'Provinsi:') !!}</strong>
                    <p>{{ $clients->provinsi }}</p>
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
                <div class="form-group">
                    <strong>{!! Form::label('alamat_2', 'Alamat 2:') !!}</strong>
                    <p>{{ $clients->alamat_2 }}</p>
                </div>

                <!-- Kelurahan Field -->
                <div class="form-group">
                    <strong>{!! Form::label('kelurahan', 'Kelurahan:') !!}</strong>
                    <p>{{ $clients->kelurahan }}</p>
                </div>

                <!-- Kecamatan Field -->
                <div class="form-group">
                    <strong>{!! Form::label('kecamatan', 'Kecamatan:') !!}</strong>
                    <p>{{ $clients->kecamatan }}</p>
                </div>

                <!-- Kota Field -->
                <div class="form-group">
                    <strong>{!! Form::label('kota', 'Kota:') !!}</strong>
                    <p>{{ $clients->kota }}</p>
                </div>

                <!-- Provinsi Field -->
                <div class="form-group">
                    <strong>{!! Form::label('provinsi', 'Provinsi:') !!}</strong>
                    <p>{{ $clients->provinsi }}</p>
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
                <div class="form-group">
                    <strong>{!! Form::label('no_kontak_billing', 'No Kontak Billing:') !!}</strong>
                    <p>{{ $clients->no_kontak_billing }}</p>
                </div>

                <!-- Email Billing Field -->
                <div class="form-group">
                    <strong>{!! Form::label('email_billing', 'Email Billing:') !!}</strong>
                    <p>{{ $clients->email_billing }}</p>
                </div>

                <!-- Website Billing Field -->
                <div class="form-group">
                    <strong>{!! Form::label('website_billing', 'Website Billing:') !!}</strong>
                    <p>{{ $clients->website_billing }}</p>
                </div>

                <!-- Pic Billing Field -->
                <div class="form-group">
                    <strong>{!! Form::label('pic_billing', 'Pic Billing:') !!}</strong>
                    <p>{{ $clients->pic_billing }}</p>
                </div>

                <!-- Jabatan Billing Field -->
                <div class="form-group">
                    <strong>{!! Form::label('jabatan_billing', 'Jabatan Billing:') !!}</strong>
                    <p>{{ $clients->jabatan_billing }}</p>
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
                <div class="form-group">
                    <strong>{!! Form::label('no_telepon', 'No Telepon:') !!}</strong>
                    <p>{{ $clients->no_telepon }}</p>
                </div>

                <!-- Mobile Field -->
                <div class="form-group">
                    <strong>{!! Form::label('mobile', 'Mobile:') !!}</strong>
                    <p>{{ $clients->mobile }}</p>
                </div>

                <!-- Email Field -->
                <div class="form-group">
                    <strong>{!! Form::label('email', 'Email:') !!}</strong>
                    <p>{{ $clients->email }}</p>
                </div>

                <!-- Nama Pic Field -->
                <div class="form-group">
                    <strong>{!! Form::label('nama_pic', 'Nama Pic:') !!}</strong>
                    <p>{{ $clients->nama_pic }}</p>
                </div>

                <!-- Jabatan Field -->
                <div class="form-group">
                    <strong>{!! Form::label('jabatan', 'Jabatan:') !!}</strong>
                    <p>{{ $clients->jabatan }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
