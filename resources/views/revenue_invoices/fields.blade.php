<!-- Nomor Invoice Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nomor_invoice', 'Nomor Invoice:') !!}
    {!! Form::text('nomor_invoice', null, ['class' => 'form-control']) !!}
</div>

<!-- Tanggal Invoice Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tanggal_invoice', 'Tanggal Invoice:') !!}
    {!! Form::text('tanggal_invoice', null, ['class' => 'form-control']) !!}
</div>

<!-- Nilai Invoice Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nilai_invoice', 'Nilai Invoice:') !!}
    {!! Form::text('nilai_invoice', null, ['class' => 'form-control']) !!}
</div>

<!-- Project Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('project_id', 'Project Id:') !!}
    {!! Form::text('project_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Keterangan Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    {!! Form::textarea('keterangan', null, ['class' => 'form-control']) !!}
</div>

<!-- Termin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('termin', 'Termin:') !!}
    {!! Form::text('termin', null, ['class' => 'form-control']) !!}
</div>

<!-- Periode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('periode', 'Periode:') !!}
    {!! Form::text('periode', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('revenueInvoices.index') }}" class="btn btn-secondary">Cancel</a>
</div>
