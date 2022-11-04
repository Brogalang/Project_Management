<div class="row">
    <div class="col-md-5">
        <!-- Project Id Field -->
        <div class="form-group col-sm-12">
            <strong>{!! Form::label('project_id', 'Project:') !!}</strong>
            <select name="project_id" id="project_id" class="form-control form-select">
                <option value=""></option>
                @foreach ($projects as $project)
                    @if ($invoices)
                        <option value="{{$project->id}}" {{ ($project->id == $invoices->project_id) ? 'selected' : '' }}>{{ $project->project_id . ' - ' . $project->project }}</option>
                    @else
                        <option value="{{$project->id}}">{{ $project->project_id . ' - ' . $project->project }}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-4">
        <!-- Nama Pelanggan Field -->
        <div class="form-group col-sm-12">
            <strong>{!! Form::label('nama_pelanggan', 'Nama Pelanggan:') !!}</strong>
            {!! Form::text('nama_pelanggan', null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <!-- Nomor PO Field -->
        <div class="form-group col-sm-12">
            <strong>{!! Form::label('nomor_po', 'Nomor PO:') !!}</strong>
            <select name="nomor_po" id="nomor_po" class="form-control form-select">
                <option value=""></option>
                @foreach ($nomor_po as $po)
                    @if ($invoices)
                        <option value="{{$po->id}}" {{ ($po->id == $invoices->nomor_po) ? 'selected' : '' }}>{{ $po->nomor_po . ' | ' . $po->tanggal_po }}</option>
                    @else
                        <option value="{{$po->id}}">{{ $po->nomor_po . ' | ' . $po->tanggal_po }}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <!-- Invoice No Field -->
        <div class="form-group col-sm-12">
            <strong>{!! Form::label('invoice_no', 'Nomor Invoice:') !!}</strong>
            {!! Form::text('invoice_no', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Nilai Invoice Rupiah Field -->
        <div class="form-group col-sm-12">
            <strong>{!! Form::label('nilai_invoice_rupiah', 'Nilai Invoice (Rp):') !!}</strong>
            {!! Form::text('nilai_invoice_rupiah', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Bulan Field -->
        <div class="form-group col-sm-12">
            <strong>{!! Form::label('bulan', 'Bulan:') !!}</strong>
            {!! Form::text('bulan', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Status Field -->
        <div class="form-group col-sm-12">
            <strong>{!! Form::label('status', 'Status:') !!}</strong>
            {!! Form::select('status', [''=>'', 'Dibayar' => 'Dibayar', 'Ditunda' => 'Ditunda', 'Batal' => 'Batal'] , null, ['class' => 'form-control', 'required' => 'required']) !!}
        </div>
    </div>

    <div class="col-md-3">
        <!-- Invoice Date Field -->
        <div class="form-group col-sm-12">
            <strong>{!! Form::label('invoice_date', 'Tanggal Invoice:') !!}</strong>
            {!! Form::text('invoice_date', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Nilai Invoice Usd Field -->
        <div class="form-group col-sm-12">
            <strong>{!! Form::label('nilai_invoice_usd', 'Nilai Invoice (USD):') !!}</strong>
            {!! Form::text('nilai_invoice_usd', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Data Valid Field -->
        <div class="form-group col-sm-12">
            <strong>{!! Form::label('data_valid', 'Data Valid:') !!}</strong>
            {!! Form::select('data_valid', [''=>'', 'VALID' => 'VALID', 'NOT-VALID' => 'NOT-VALID'] , null, ['class' => 'form-control']) !!}
        </div>

        <!-- Tipe Field -->
        <div class="form-group col-sm-12">
            <strong>{!! Form::label('tipe', 'Tipe:') !!}</strong>
            {!! Form::select('tipe', [''=>'', 'MS' => 'MS', 'PB' => 'PB'] , null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="col-md-3">
        <!-- Jatuh Tempo Field -->
        <div class="form-group col-sm-12">
            <strong>{!! Form::label('jatuh_tempo', 'Jatuh Tempo:') !!}</strong>
            {!! Form::text('jatuh_tempo', null, ['class' => 'form-control']) !!}
        </div>

        <!-- PPN (Rp) Field -->
        <div class="form-group col-sm-12">
            <strong>{!! Form::label('ppn_rupiah', 'PPN (Rp):') !!}</strong>
            {!! Form::text('ppn_rupiah', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Pic Field -->
        <div class="form-group col-sm-12">
            <strong>{!! Form::label('pic', 'Pic:') !!}</strong>
            {!! Form::text('pic', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Bulan Bayar Field -->
        <div class="form-group col-sm-12">
            <strong>{!! Form::label('bulan_bayar', 'Bulan Bayar:') !!}</strong>
            {!! Form::text('bulan_bayar', null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="col-md-3">
        <!-- Uraian Invoice Field -->
        <div class="form-group col-sm-12">
            <strong>{!! Form::label('uraian_invoice', 'Uraian Invoice:') !!}</strong>
            {!! Form::text('uraian_invoice', null, ['class' => 'form-control']) !!}
        </div>

        <!-- PPN (USD) Field -->
        <div class="form-group col-sm-12">
            <strong>{!! Form::label('ppn_usd', 'PPN (USD):') !!}</strong>
            {!! Form::text('ppn_usd', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Tanggal Bayar Field -->
        <div class="form-group col-sm-12">
            <strong>{!! Form::label('tanggal_bayar', 'Tanggal Bayar:') !!}</strong>
            {!! Form::text('tanggal_bayar', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Keterangan Field -->
        <div class="form-group col-sm-12 col-lg-12">
            <strong>{!! Form::label('keterangan', 'Keterangan:') !!}</strong>
            {!! Form::textarea('keterangan', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>

@push('scripts')
<script type="text/javascript">
    $('#invoice_date').datetimepicker({
        format: 'YYYY-MM-DD',
        useCurrent: true,
        icons: {
            up: "icon-arrow-up-circle icons font-2xl",
            down: "icon-arrow-down-circle icons font-2xl"
        },
        sideBySide: true
    })
</script>
@endpush

@push('scripts')
<script type="text/javascript">
    $('#jatuh_tempo').datetimepicker({
        format: 'YYYY-MM-DD',
        useCurrent: true,
        icons: {
            up: "icon-arrow-up-circle icons font-2xl",
            down: "icon-arrow-down-circle icons font-2xl"
        },
        sideBySide: true
    })
</script>
@endpush

@push('scripts')
<script type="text/javascript">
    $('#tanggal_bayar').datetimepicker({
        format: 'YYYY-MM-DD',
        useCurrent: true,
        icons: {
            up: "icon-arrow-up-circle icons font-2xl",
            down: "icon-arrow-down-circle icons font-2xl"
        },
        sideBySide: true
    })

    $('#bulan').datetimepicker({
        format: 'MM',
        useCurrent: true,
        icons: {
            up: "icon-arrow-up-circle icons font-2xl",
            down: "icon-arrow-down-circle icons font-2xl"
        },
        sideBySide: true
    })

    $('#bulan_bayar').datetimepicker({
        format: 'YYYY-MM-DD',
        useCurrent: true,
        icons: {
            up: "icon-arrow-up-circle icons font-2xl",
            down: "icon-arrow-down-circle icons font-2xl"
        },
        sideBySide: true
    })
</script>
@endpush

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('invoices.index') }}" class="btn btn-secondary">Cancel</a>
</div>
