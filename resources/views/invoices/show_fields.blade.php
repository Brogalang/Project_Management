<div class="row">
    <div class="col-md-5">
        <!-- Project Id Field -->
        <div class="form-group">
            <strong>{!! Form::label('project_id', 'Project ID:') !!}</strong>
            <p>{{ ($invoices->proid) ? $invoices->proid : '-' }}</p>
        </div>
    </div>
    <div class="col-md-4">
        <!-- Nama Pelanggan Field -->
        <div class="form-group">
            <strong>{!! Form::label('nama_pelanggan', 'Nama Pelanggan:') !!}</strong>
            <p>{{ ($invoices->nama_pelanggan) ? $invoices->nama_pelanggan : '-' }}</p>
        </div>
    </div>
    <div class="col-md-3">
        <!-- Nomor PO Field -->
        <div class="form-group">
            <strong>{!! Form::label('nomor_po', 'Nomor PO:') !!}</strong>
            <p>{{ ($invoices->po_number) ? $invoices->po_number . ' / ' . $invoices->tanggal_po : '-' }}</p>
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-3">
        <!-- Invoice No Field -->
        <div class="form-group">
            <strong>{!! Form::label('invoice_no', 'Nomor Invoice:') !!}</strong>
            <p>{{ ($invoices->invoice_no) ? $invoices->invoice_no : '-' }}</p>
        </div>

        <!-- Nilai Invoice (Rp) Field -->
        <div class="form-group">
            <strong>{!! Form::label('nilai_invoice_rupiah', 'Nilai Invoice (Rp):') !!}</strong>
            <p>{{ ($invoices->nilai_invoice_rupiah) ? number_format($invoices->nilai_invoice_rupiah, 0) : '0' }}</p>
        </div>

        <!-- Bulan Field -->
        <div class="form-group">
            <strong>{!! Form::label('bulan', 'Bulan:') !!}</strong>
            <p>{{ ($invoices->bulan) ? $invoices->bulan : '-' }}</p>
        </div>

        <!-- Status Field -->
        <div class="form-group">
            <strong>{!! Form::label('status', 'Status:') !!}</strong>
            <p>{{ ($invoices->status) ? $invoices->status : '-' }}</p>
        </div>
    </div>

    <div class="col-md-3">
        <!-- Invoice Date Field -->
        <div class="form-group">
            <strong>{!! Form::label('invoice_date', 'Tanggal Invoice:') !!}</strong>
            <p>{{ ($invoices->invoice_date) ? $invoices->invoice_date : '-' }}</p>
        </div>

        <!-- Nilai Invoice (USD) Field -->
        <div class="form-group">
            <strong>{!! Form::label('nilai_invoice_usd', 'Nilai Invoice (USD):') !!}</strong>
            <p>{{ ($invoices->nilai_invoice_usd) ? number_format($invoices->nilai_invoice_usd, 0) : '0' }}</p>
        </div>

        <!-- Data Valid Field -->
        <div class="form-group">
            <strong>{!! Form::label('data_valid', 'Data Valid:') !!}</strong>
            <p>{{ ($invoices->data_valid) ? $invoices->data_valid : '-' }}</p>
        </div>

         <!-- Tipe Field -->
        <div class="form-group">
            <strong>{!! Form::label('tipe', 'Tipe:') !!}</strong>
            <p>{{ ($invoices->tipe) ? $invoices->tipe : '-' }}</p>
        </div>
    </div>

    <div class="col-md-3">
        <!-- Jatuh Tempo Field -->
        <div class="form-group">
            <strong>{!! Form::label('jatuh_tempo', 'Jatuh Tempo:') !!}</strong>
            <p>{{ ($invoices->jatuh_tempo) ? $invoices->jatuh_tempo : '-' }}</p>
        </div>

        <!-- Ppn (Rp) Field -->
        <div class="form-group">
            <strong>{!! Form::label('ppn_rupiah', 'PPN (Rp):') !!}</strong>
            <p>{{ ($invoices->ppn_rupiah) ? number_format($invoices->ppn_rupiah, 0) : '0' }}</p>
        </div>

        <!-- Pic Field -->
        <div class="form-group">
            <strong>{!! Form::label('pic', 'Pic:') !!}</strong>
            <p>{{ ($invoices->pic) ? $invoices->pic : '-' }}</p>
        </div>

        <!-- Bulan Bayar Field -->
        <div class="form-group">
            <strong>{!! Form::label('bulan_bayar', 'Bulan Bayar:') !!}</strong>
            <p>{{ ($invoices->bulan_bayar) ? $invoices->bulan_bayar : '-' }}</p>
        </div>
    </div>

    <div class="col-md-3">
        <!-- Uraian Invoice Field -->
        <div class="form-group">
            <strong>{!! Form::label('uraian_invoice', 'Uraian Invoice:') !!}</strong>
            <p>{{ ($invoices->uraian_invoice) ? $invoices->uraian_invoice : '-' }}</p>
        </div>

        <!-- Ppn (USD) Field -->
        <div class="form-group">
            <strong>{!! Form::label('ppn_usd', 'PPN (USD):') !!}</strong>
            <p>{{ ($invoices->ppn_usd) ? number_format($invoices->ppn_usd, 0) : '0' }}</p>
        </div>

        <!-- Tanggal Bayar Field -->
        <div class="form-group">
            <strong>{!! Form::label('tanggal_bayar', 'Tanggal Bayar:') !!}</strong>
            <p>{{ ($invoices->tanggal_bayar) ? $invoices->tanggal_bayar : '-' }}</p>
        </div>

        <!-- Keterangan Field -->
        <div class="form-group">
            <strong>{!! Form::label('keterangan', 'Keterangan:') !!}</strong>
            <p>{{ ($invoices->keterangan) ? $invoices->keterangan : '-' }}</p>
        </div>
    </div>
</div>

