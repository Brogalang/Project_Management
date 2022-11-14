<div class="row">
    <!---->
    <div class="col-md-6">
        <!-- Nomor Invoice Field -->
        <div class="form-group col-sm-7">
            <strong>{!! Form::label('no_invoice', 'Nomor Invoice:') !!}</strong>
            <p>{{ $revenueInvoice->no_invoice }}</p>
        </div>
        <div class="form-group col-sm-7">
            <div class="row">
                <!-- Tanggal Invoice Field -->
                <div class="form-group col-sm-6">
                    <strong>{!! Form::label('gl_invoice', 'Tanggal Invoice:') !!}</strong>
                    <p>{{ $revenueInvoice->gl_invoice }}</p>
                </div>

                <!-- Tanggal Bayar Field -->
                <div class="form-group col-sm-6">
                    <strong>{!! Form::label('tgl_bayar', 'Tanggal Bayar:') !!}</strong>
                    <p>{{ $revenueInvoice->tgl_bayar }}</p>
                </div>  
            </div>

            <!--Nilai-->
            <div class="row">
                <div class="form-group col-sm-6">
                    <strong>{!! Form::label('nilai_rp', 'Nilai (Rp):') !!}</strong>
                    <p>{{ number_format($revenueInvoice->nilai_rp) }}</p>
                </div>

                <div class="form-group col-sm-6">
                    <strong>{!! Form::label('nilai_usd', 'Nilai (USD):') !!}</strong>
                    <p>{{ number_format($revenueInvoice->nilai_usd) }}</p>
                </div>
            </div>
            <!--PPN-->
            <div class="row">
                <div class="form-group col-sm-6">
                    <strong>{!! Form::label('ppn_rp', 'PPN (Rp):') !!}</strong>
                    <p>{{ number_format($revenueInvoice->ppn_rp) }}</p>
                </div>

                <div class="form-group col-sm-6">
                    <strong>{!! Form::label('ppn_usd', 'PPN (USD):') !!}</strong>
                    <p>{{ number_format($revenueInvoice->ppn_usd) }}</p>
                </div>
            </div>
        </div>

        <!-- Customer Field -->
        <div class="form-group col-sm-7">
            <strong>{!! Form::label('id_customer', 'Customer:') !!}</strong>
            <p>{{ $revenueInvoice->id_customer }}</p>
        </div>

        <!-- Project Id Field -->
        <div class="form-group col-sm-7">
            <strong>{!! Form::label('id_project', 'Project:') !!}</strong>
            <p>
                <b>{{ $revenueInvoice->id_project }}</b> - <br>
                @foreach($projectdb as $proj)
                    @if($proj->project_id==$revenueInvoice->id_project)
                        {{$proj->project}}
                    @endif
                @endforeach
            </p>
        </div>

        <!-- Aging AR Field -->
        <div class="form-group col-sm-7">
            <strong>{!! Form::label('ar_age', 'Aging AR:') !!}</strong>
            <p>{{ $revenueInvoice->ar_age }}</p>
        </div>

        <!-- Tipe Field -->
        <div class="form-group col-sm-7">
            <strong>{!! Form::label('tipe', 'Tipe:') !!}</strong>
            <p>{{ $revenueInvoice->tipe }}</p>
        </div>

        <!-- Keterangan Field -->
        <div class="form-group col-sm-12 col-lg-12">
            <strong>{!! Form::label('keterangan', 'Keterangan:') !!}</strong>
            <p>{{ $revenueInvoice->keterangan }}</p>
        </div>

    </div>

    <!---->
    <div class="col-md-6">
         <!-- PIC Id Field -->
         <div class="form-group col-sm-7">
            <strong>{!! Form::label('pic', 'PIC Project:') !!}</strong>
            <p>
                {{ $revenueInvoice->pic }} -
                @foreach($picdb as $picd)
                    @if($picd->NIK==$revenueInvoice->pic)
                        {{$picd->Nama}}
                    @endif
                @endforeach
            </p>
        </div>

        <!-- Departemen Id Field -->
        <div class="form-group col-sm-7">
            <strong>{!! Form::label('kd_dep', 'Kode Departemen:') !!}</strong>
            <p>
                {{ $revenueInvoice->kd_dep }} -
                @foreach($depdb as $depd)
                    @if($depd->kd_dep==$revenueInvoice->kd_dep)
                        {{$depd->nama_div_ext}}
                    @endif
                @endforeach
            </p>
        </div>

        <!-- Divisi Id Field -->
        <div class="form-group col-sm-7">
            <strong>{!! Form::label('kd_div', 'Kode Divisi:') !!}</strong>
            <p>
                {{ $revenueInvoice->kd_div }} -
                @foreach($divdb as $divd)
                    @if($divd->kd_div==$revenueInvoice->kd_div)
                        {{$divd->subdivisi}}
                    @endif
                @endforeach
            </p>
        </div>

        <!-- Tanggal Jatuh Tempo -->
        <div class="form-group col-sm-7">
            <strong>{!! Form::label('tgl_jatuh_tempo', 'Tanggal Jatuh Tempo:') !!}</strong>
            <p>{{ $revenueInvoice->tgl_jatuh_tempo }}</p>
        </div>

        <!-- Validasi Id Field -->
        <div class="form-group col-sm-7">
            <strong>{!! Form::label('data_valid', 'Validasi Data:') !!}</strong>
            <p>{{ $revenueInvoice->data_valid }}</p>
        </div>

        <!-- Status Field -->
        <div class="form-group col-sm-7">
            <strong>{!! Form::label('status', 'Status:') !!}</strong>
            <p>{{ $revenueInvoice->status }}</p>
        </div>

        <div class="form-group col-sm-7">
            <div class="row">
                <!-- Bulan Id Field -->
                <div class="form-group col-sm-6">
                    <strong>{!! Form::label('bln', 'Bulan:') !!}</strong>
                    <p>{{ $revenueInvoice->bln }}</p>
                </div>
                
                <!-- Bulan Bayar Field -->
                <div class="form-group col-sm-6">
                    <strong>{!! Form::label('bln_byr', 'Bulan Bayar:') !!}</strong>
                    <p>{{ $revenueInvoice->bln_byr }}</p>
                </div>
            </div>
        </div>

        <!-- Termin Field -->
        <div class="form-group col-sm-7">
            <strong>{!! Form::label('termin', 'Termin:') !!}</strong>
            <p>{{ $revenueInvoice->termin }}</p>
        </div>

         <!-- Uraian Invoice Field -->
         <div class="form-group col-sm-12 col-lg-12">
            <strong>{!! Form::label('uraian_invoice', 'Uraian Invoice:') !!}</strong>
            <p>{{ $revenueInvoice->uraian_invoice }}</p>
        </div>  

    </div>
</div>