<!-- Nomor Po Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nomor_po', 'Nomor Po:') !!}
    {!! Form::text('nomor_po', null, ['class' => 'form-control']) !!}
</div>

<!-- Tanggal Po Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tanggal_po', 'Tanggal Po:') !!}
    {!! Form::date('tanggal_po', null, ['class' => 'form-control']) !!}
</div>

<!-- Rab Id Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('rab_id', 'Rab Id:') !!}
    {!! Form::text('rab_id', null, ['class' => 'form-control']) !!}
</div> --}}

<!-- Project Id Field -->
<div class="form-group col-sm-6">
    <strong>{!! Form::label('project_id', 'Project:') !!}</strong>
    <select name="project_id" id="project_id" class="form-control form-select">
        <option value=""></option>
        @foreach ($projects as $project)
            @if ($po)
                <option value="{{$project->id}}" {{ ($project->id == $po->project_id) ? 'selected' : '' }}>{{ $project->project_id . ' - ' . $project->project }}</option>
            @else
                <option value="{{$project->id}}">{{ $project->project_id . ' - ' . $project->project }}</option>
            @endif
        @endforeach
    </select>
</div>

<!-- Kategori Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kategori', 'Kategori:') !!}
    {!! Form::text('kategori', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Barang Jasa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_barang_jasa', 'Nama Barang Jasa:') !!}
    {!! Form::text('nama_barang_jasa', null, ['class' => 'form-control']) !!}
</div>

<!-- Nilai Barang Jasa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nilai_barang_jasa', 'Nilai Barang Jasa:') !!}
    {!! Form::text('nilai_barang_jasa', null, ['class' => 'form-control']) !!}
</div>

<!-- No Item Rab Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_item_rab', 'No Item Rab:') !!}
    {!! Form::text('no_item_rab', null, ['class' => 'form-control']) !!}
</div>

<!-- Np Sub Item Rab Field -->
<div class="form-group col-sm-6">
    {!! Form::label('np_sub_item_rab', 'Np Sub Item Rab:') !!}
    {!! Form::text('np_sub_item_rab', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('purchaseOrders.index') }}" class="btn btn-secondary">Cancel</a>
</div>
