<!-- Nomor Po Field -->
<div class="form-group">
    {!! Form::label('nomor_po', 'Nomor Po:') !!}
    <p>{{ $purchaseOrder->nomor_po }}</p>
</div>

<!-- Tanggal Po Field -->
<div class="form-group">
    {!! Form::label('tanggal_po', 'Tanggal Po:') !!}
    <p>{{ $purchaseOrder->tanggal_po }}</p>
</div>

<!-- Rab Id Field -->
<div class="form-group">
    {!! Form::label('rab_id', 'Rab Id:') !!}
    <p>{{ $purchaseOrder->rab_id }}</p>
</div>

<!-- Project Id Field -->
<div class="form-group">
    {!! Form::label('project_id', 'Project Id:') !!}
    <p>{{ $purchaseOrder->project_id }}</p>
</div>

<!-- Kategori Field -->
<div class="form-group">
    {!! Form::label('kategori', 'Kategori:') !!}
    <p>{{ $purchaseOrder->kategori }}</p>
</div>

<!-- Nama Barang Jasa Field -->
<div class="form-group">
    {!! Form::label('nama_barang_jasa', 'Nama Barang Jasa:') !!}
    <p>{{ $purchaseOrder->nama_barang_jasa }}</p>
</div>

<!-- Nilai Barang Jasa Field -->
<div class="form-group">
    {!! Form::label('nilai_barang_jasa', 'Nilai Barang Jasa:') !!}
    <p>{{ $purchaseOrder->nilai_barang_jasa }}</p>
</div>

<!-- No Item Rab Field -->
<div class="form-group">
    {!! Form::label('no_item_rab', 'No Item Rab:') !!}
    <p>{{ $purchaseOrder->no_item_rab }}</p>
</div>

<!-- Np Sub Item Rab Field -->
<div class="form-group">
    {!! Form::label('np_sub_item_rab', 'Np Sub Item Rab:') !!}
    <p>{{ $purchaseOrder->np_sub_item_rab }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $purchaseOrder->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $purchaseOrder->updated_at }}</p>
</div>

