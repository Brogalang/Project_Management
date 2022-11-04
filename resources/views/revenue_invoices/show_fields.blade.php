<!-- Nomor Invoice Field -->
<div class="form-group">
    {!! Form::label('nomor_invoice', 'Nomor Invoice:') !!}
    <p>{{ $revenueInvoice->nomor_invoice }}</p>
</div>

<!-- Tanggal Invoice Field -->
<div class="form-group">
    {!! Form::label('tanggal_invoice', 'Tanggal Invoice:') !!}
    <p>{{ $revenueInvoice->tanggal_invoice }}</p>
</div>

<!-- Nilai Invoice Field -->
<div class="form-group">
    {!! Form::label('nilai_invoice', 'Nilai Invoice:') !!}
    <p>{{ $revenueInvoice->nilai_invoice }}</p>
</div>

<!-- Project Id Field -->
<div class="form-group">
    {!! Form::label('project_id', 'Project Id:') !!}
    <p>{{ $revenueInvoice->project_id }}</p>
</div>

<!-- Keterangan Field -->
<div class="form-group">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    <p>{{ $revenueInvoice->keterangan }}</p>
</div>

<!-- Termin Field -->
<div class="form-group">
    {!! Form::label('termin', 'Termin:') !!}
    <p>{{ $revenueInvoice->termin }}</p>
</div>

<!-- Periode Field -->
<div class="form-group">
    {!! Form::label('periode', 'Periode:') !!}
    <p>{{ $revenueInvoice->periode }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $revenueInvoice->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $revenueInvoice->updated_at }}</p>
</div>

