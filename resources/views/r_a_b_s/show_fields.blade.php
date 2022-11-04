<div class="row">
    <input type="hidden" id="rab_rec_id" value="{{ $rAB->id }}">
    <div class="col-md-12">
        <!-- Project Name Field -->
        <div class="form-group">
            {!! Form::label('project_name', 'Project Name:', ['class' => 'font-weight-bold']) !!}
            <p>{{ $rAB->project_name }}</p>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-3">
        <!-- Rab No Field -->
        <div class="form-group">
            {!! Form::label('rab_no', 'Rab No:', ['class' => 'font-weight-bold']) !!}
            <p>{{ $rAB->rab_no }}</p>
        </div>

        <!-- Rab Tgl Awal Field -->
        <div class="form-group">
            {!! Form::label('rab_tgl_awal', 'Rab Tgl Awal:', ['class' => 'font-weight-bold']) !!}
            <p>{{ $rAB->rab_tgl_awal }}</p>
        </div>
    </div>

    <div class="col-md-3">
        <!-- Rab Tgl Ttd Field -->
        <div class="form-group">
            {!! Form::label('rab_tgl_ttd', 'Rab Tgl Ttd:', ['class' => 'font-weight-bold']) !!}
            <p>{{ $rAB->rab_tgl_ttd }}</p>
        </div>

        <!-- Rab Tgl Akhir Field -->
        <div class="form-group">
            {!! Form::label('rab_tgl_akhir', 'Rab Tgl Akhir:', ['class' => 'font-weight-bold']) !!}
            <p>{{ $rAB->rab_tgl_akhir }}</p>
        </div>
    </div>
    <div class="col-md-6">
        <!-- Catatan Field -->
        <div class="form-group">
            {!! Form::label('catatan', 'Catatan:', ['class' => 'font-weight-bold']) !!}
            <p>{{ $rAB->catatan }}</p>
        </div>
    </div>
</div>

{{-- <!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:', ['class' => 'font-weight-bold']) !!}
    <p>{{ $rAB->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:', ['class' => 'font-weight-bold']) !!}
    <p>{{ $rAB->updated_at }}</p>
</div> --}}

