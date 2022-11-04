<!-- Nama Barang Jasa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_barang_jasa', 'Nama Barang Jasa:') !!}
    {!! Form::text('nama_barang_jasa', null, ['class' => 'form-control']) !!}
</div>

<!-- Hrg Satuan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('hrg_satuan', 'Hrg Satuan:') !!}
    {!! Form::text('hrg_satuan', null, ['class' => 'form-control']) !!}
</div>

<!-- Quantity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantity', 'Quantity:') !!}
    {!! Form::text('quantity', null, ['class' => 'form-control']) !!}
</div>

<!-- Frekuensi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('frekuensi', 'Frekuensi:') !!}
    {!! Form::text('frekuensi', null, ['class' => 'form-control']) !!}
</div>

<!-- Deskripsi Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('deskripsi', 'Deskripsi:') !!}
    {!! Form::textarea('deskripsi', null, ['class' => 'form-control']) !!}
</div>

<!-- Catatan Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('catatan', 'Catatan:') !!}
    {!! Form::textarea('catatan', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('rabSubDetails.index') }}" class="btn btn-secondary">Cancel</a>
</div>
