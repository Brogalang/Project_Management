<!-- Rab No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rab_no', 'Rab No:') !!}
    {!! Form::text('rab_no', null, ['class' => 'form-control']) !!}
</div>

<!-- Rab Tgl Ttd Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rab_tgl_ttd', 'Rab Tgl Ttd:') !!}
    {!! Form::text('rab_tgl_ttd', null, ['class' => 'form-control']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#rab_tgl_ttd').datetimepicker({
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

<!-- Project Rec Id Field -->
{{--<div class="form-group col-sm-6">
    {!! Form::label('project_rec_id', 'Project:') !!}
    {!! Form::text('project_rec_id', null, ['class' => 'form-control']) !!}
</div> --}}

<div class="form-group col-sm-6">
    {!! Form::label('project_rec_id', 'Project:') !!}
    <select name="project_rec_id" id="project_rec_id" class="form-control form-select">
        <option value=""></option>
        @foreach ($projects as $project)
            @if($project->id == $rAB->project_rec_id)
                <option value="{{$project->id}}" selected>{{ $project->project_id . ' - ' . $project->project }}</option>
            @else{
                <option value="{{$project->id}}">{{ $project->project_id . ' - ' . $project->project }}</option>
            }
            @endif
        @endforeach
    </select>
</div>

<!-- Rab Tgl Awal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rab_tgl_awal', 'Rab Tgl Awal:') !!}
    {!! Form::text('rab_tgl_awal', null, ['class' => 'form-control','id'=>'rab_tgl_awal']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#rab_tgl_awal').datetimepicker({
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


<!-- Rab Tgl Akhir Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rab_tgl_akhir', 'Rab Tgl Akhir:') !!}
    {!! Form::text('rab_tgl_akhir', null, ['class' => 'form-control','id'=>'rab_tgl_akhir']) !!}
</div>

@push('scripts')
   <script type="text/javascript">
           $('#rab_tgl_akhir').datetimepicker({
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


<!-- Catatan Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('catatan', 'Catatan:') !!}
    {!! Form::textarea('catatan', null, ['class' => 'form-control']) !!}
</div>

<!-- Project Name Field -->
<div class="form-group col-sm-6 d-none">
    {!! Form::label('project_name', 'Project Name:') !!}
    {!! Form::text('project_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('rABS.index') }}" class="btn btn-secondary">Cancel</a>
</div>
