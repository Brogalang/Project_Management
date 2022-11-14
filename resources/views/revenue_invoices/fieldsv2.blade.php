<div class="row">
    <!---->
    <div class="col-md-6">
        <!-- Nomor Invoice Field -->
        <div class="form-group col-sm-7">
            <strong>{!! Form::label('no_invoice', 'Nomor Invoice:') !!}</strong>
            {!! Form::text('no_invoice', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group col-sm-7">
            <div class="row">
                <!-- Tanggal Invoice Field -->
                <div class="form-group col-sm-6">
                    <strong>{!! Form::label('gl_invoice', 'Tanggal Invoice:') !!}</strong>
                    {!! Form::date('gl_invoice', null, ['class' => 'form-control']) !!}
                </div>

                <!-- Tanggal Bayar Field -->
                <div class="form-group col-sm-6">
                    <strong>{!! Form::label('tgl_bayar', 'Tanggal Bayar:') !!}</strong>
                    {!! Form::date('tgl_bayar', null, ['class' => 'form-control']) !!}
                </div>  
            </div>

            <!--Nilai-->
            <div class="row">
                <div class="form-group col-sm-6">
                    <strong>{!! Form::label('nilai_rp', 'Nilai (Rp):') !!}</strong>
                    {!! Form::number('nilai_rp', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group col-sm-6">
                    <strong>{!! Form::label('nilai_usd', 'Nilai (USD):') !!}</strong>
                    {!! Form::number('nilai_usd', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <!--PPN-->
            <div class="row">
                <div class="form-group col-sm-6">
                    <strong>{!! Form::label('ppn_rp', 'PPN (Rp):') !!}</strong>
                    {!! Form::number('ppn_rp', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group col-sm-6">
                    <strong>{!! Form::label('ppn_usd', 'PPN (USD):') !!}</strong>
                    {!! Form::number('ppn_usd', null, ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>

        <!-- Customer Field -->
        <div class="form-group col-sm-7">
            <strong>{!! Form::label('id_customer', 'Customer:') !!}</strong>
            {!! Form::text('id_customer', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Project Id Field -->
        <div class="form-group col-sm-7">
            <strong>{!! Form::label('id_project', 'Project:') !!}</strong>
            <!-- {!! Form::text('id_project', null, ['class' => 'form-control']) !!} -->
            <select name="id_project" id="id_project" class="form-control" data-control="select2">
                <option value=''>Pilih Data</option>
                @foreach ($prjopt as $prj)
                    @if($prj->project_id == $revenueInvoice->id_project)
                        <option value='{{$prj->project_id}}' selected>{{$prj->project_id}}</option>
                    @else{
                        <option value='{{$prj->project_id}}'>{{$prj->project_id}}</option>
                    }
                    @endif
                @endforeach
            </select>
        </div>

        <!-- Aging AR Field -->
        <div class="form-group col-sm-7">
            <strong>{!! Form::label('ar_age', 'Aging AR:') !!}</strong>
            {!! Form::text('ar_age', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Tipe Field -->
        <div class="form-group col-sm-7">
            <strong>{!! Form::label('tipe', 'Tipe:') !!}</strong>
            {!! Form::text('tipe', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Keterangan Field -->
        <div class="form-group col-sm-12 col-lg-12">
            <strong>{!! Form::label('keterangan', 'Keterangan:') !!}</strong>
            {!! Form::textarea('keterangan', null, ['class' => 'form-control']) !!}
        </div>

    </div>

    <!---->
    <div class="col-md-6">
         <!-- PIC Id Field -->
         <div class="form-group col-sm-7">
            <strong>{!! Form::label('pic', 'PIC Project:') !!}</strong>
            <select name="pic" id="pic" class="form-control" data-control="select2">
                <option value=''>Pilih Data</option>
                @foreach ($useropt as $userpt)
                    @if($userpt->NIK == $revenueInvoice->pic)
                        <option value='{{$userpt->NIK}}' selected>{{$userpt->NIK}} - {{$userpt->Nama}}</option>
                    @else{
                        <option value='{{$userpt->NIK}}'>{{$userpt->NIK}} - {{$userpt->Nama}}</option>
                    }
                    @endif
                @endforeach
            </select>
        </div>

        <!-- Departemen Id Field -->
        <div class="form-group col-sm-7">
            <strong>{!! Form::label('kd_dep', 'Kode Departemen:') !!}</strong>
            <select name="kd_dep" id="kd_dep" class="form-control" data-control="select2">
                <option value=''>Pilih Data</option>
                @foreach ($depopt as $deppt)
                    @if($deppt->id == $revenueInvoice->kd_dep)
                        <option value='{{$deppt->id}}' selected>{{$deppt->id}} - {{$deppt->nama_div_ext}}</option>
                    @else{
                        <option value='{{$deppt->id}}'>{{$deppt->id}} - {{$deppt->nama_div_ext}}</option>
                    }
                    @endif
                @endforeach
            </select>
        </div>

        <!-- Divisi Id Field -->
        <div class="form-group col-sm-7">
            <strong>{!! Form::label('kd_div', 'Kode Divisi:') !!}</strong>
            <!-- {!! Form::text('kd_div', null, ['class' => 'form-control']) !!} -->
            <select name="kd_div" id="kd_div" class="form-control" data-control="select2">
                <option value=''>Pilih Data</option>
                @foreach ($divopt as $divpt)
                    @if($divpt->id == $revenueInvoice->kd_div)
                        <option value='{{$divpt->id}}' selected>{{$divpt->id}} - {{$divpt->subdivisi}}</option>
                    @else{
                        <option value='{{$divpt->id}}'>{{$divpt->id}} - {{$divpt->subdivisi}}</option>
                    }
                    @endif
                @endforeach
            </select>
        </div>

        <!-- Tanggal Jatuh Tempo -->
        <div class="form-group col-sm-7">
            <strong>{!! Form::label('tgl_jatuh_tempo', 'Tanggal Jatuh Tempo:') !!}</strong>
            {!! Form::date('tgl_jatuh_tempo', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Validasi Id Field -->
        <div class="form-group col-sm-7">
            <strong>{!! Form::label('data_valid', 'Validasi Data:') !!}</strong>
            {!! Form::select('data_valid', ['false' => 'False', 'true' => 'True'], null, ['class' => 'form-control', 'required' => 'required']) !!}
        </div>

        <!-- Status Field -->
        <div class="form-group col-sm-7">
            <strong>{!! Form::label('status', 'Status:') !!}</strong>
            {!! Form::select('status', ['Sedang Berjalan' => 'Sedang Berjalan', 'Selesai' => 'Selesai', 'Batal' => 'Batal'] , null, ['class' => 'form-control', 'required' => 'required']) !!}
        </div>

        <div class="form-group col-sm-7">
            <div class="row">
                <!-- Bulan Id Field -->
                <div class="form-group col-sm-6">
                    <strong>{!! Form::label('bln', 'Bulan:') !!}</strong>
                    {!! Form::select('bln', ['1' => '1','2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10', '11' => '11', '12' => '12'] , null, ['class' => 'form-control', 'required' => 'required']) !!}
                </div>
                
                <!-- Bulan Bayar Field -->
                <div class="form-group col-sm-6">
                    <strong>{!! Form::label('bln_byr', 'Bulan Bayar:') !!}</strong>
                    {!! Form::select('bln_byr', ['1' => '1','2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10', '11' => '11', '12' => '12'] , null, ['class' => 'form-control', 'required' => 'required']) !!}
                </div>
            </div>
        </div>

        <!-- Termin Field -->
        <div class="form-group col-sm-7">
            <strong>{!! Form::label('termin', 'Termin:') !!}</strong>
            {!! Form::number('termin', null, ['class' => 'form-control']) !!}
        </div>

         <!-- Uraian Invoice Field -->
         <div class="form-group col-sm-12 col-lg-12">
            <strong>{!! Form::label('uraian_invoice', 'Uraian Invoice:') !!}</strong>
            {!! Form::textarea('uraian_invoice', null, ['class' => 'form-control']) !!}
        </div>  

    </div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('revenueInvoices.index') }}" class="btn btn-secondary">Cancel</a>
</div>