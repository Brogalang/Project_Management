@extends('layouts.app')

@section('content')
    <input type="hidden" value="{{ env('APP_URL') }}" id="APP_URL">
    <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('rABS.index') }}">RAB</a>
            </li>
            <li class="breadcrumb-item active">Tinjauan</li>
    </ol>
    <div class="container-fluid">
        <div class="animated fadeIn">
                @include('coreui-templates::common.errors')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>
                                    <a href="{{ route('rABS.index') }}" class="btn btn-light"><i class="fa fa-arrow-left"></i></a>
                                    <strong>Tinjauan</strong>
                                </h4>
                            </div>
                            <div class="card-body">
                                @include('r_a_b_s.show_fields')
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Detail RAB</strong>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect01">Jenis Biaya / Pendapatan</label>
                                            </div>
                                            <select class="custom-select" id="inputGroupSelect01">
                                                <option selected></option>
                                                <option value="Software">Software</option>
                                                <option value="Hardware">Hardware</option>
                                                <option value="Pengembangan Sistem">Pengembangan Sistem</option>
                                                <option value="Perawatan">Perawatan</option>
                                                <option value="Pelatihan (Pelanggan)">Pelatihan (Pelanggan)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="rab_detail_biaya-tab" data-toggle="tab" href="#rab_detail_biaya" role="tab" aria-controls="rab_detail_biaya" aria-selected="true">Biaya</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Pendapatan</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="rab_detail_biaya" role="tabpanel" aria-labelledby="rab_detail_biaya-tab">
                                        <div class="row">
                                            <input type="hidden" id="rab_db_id">
                                            <div class="col-md-3">
                                                <!-- Nama Barang Jasa Field -->
                                                <div class="input-group input-group-sm mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm">Nama Barang Jasa</span>
                                                    </div>
                                                    <input type="text" id="nama_barang_jasa" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <!-- Hrg Satuan Field -->
                                                <div class="input-group input-group-sm mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm">Harga Satuan</span>
                                                    </div>
                                                    <input type="text" id="hrg_satuan" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <!-- Quantity Field -->
                                                <div class="input-group input-group-sm mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm">Qty.</span>
                                                    </div>
                                                    <input type="text" id="quantity" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <!-- Frekuensi Field -->
                                                <div class="input-group input-group-sm mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm">Freq</span>
                                                    </div>
                                                    <input type="text" id="frekuensi" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="input-group input-group-sm mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Deskripsi</span>
                                                    </div>
                                                    <textarea id="deskripsi" class="form-control" aria-label="With textarea" rows="1"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                                <div class="input-group input-group-sm mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">Catatan</span>
                                                    </div>
                                                    <textarea id="catatan" class="form-control" aria-label="With textarea" rows="1"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-md-1">
                                                    <button type="button" id="save_biaya" class="btn btn-sm btn-success"><i class="fa fa-save"></i></button>
                                                    {{-- <button type="button" id="" class="btn btn-sm btn-secondary mr-2"><i class="fa fa-th-list"></i></button> --}}
                                            </div>
                                        </div>
                                        <hr>
                                        <div id="rab_detail_biaya_list">
                                            @include('rab_details.fields')
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        @include('rab_details.fields_revenue')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        getRABDetils()
        empty_field()

        $('#save_biaya').click(function (e) {
            e.preventDefault();

            var rab_rec_id = $('#rab_rec_id').val()
            var rab_db_id = $('#rab_db_id').val()
            var nama_barang_jasa = $('#nama_barang_jasa').val()
            var hrg_satuan = $('#hrg_satuan').val()
            var quantity = $('#quantity').val()
            var frekuensi = $('#frekuensi').val()
            var deskripsi = $('#deskripsi').val()
            var catatan = $('#catatan').val()
            var url = $('#APP_URL').val() + '/rabDetails'

            $.ajax({
                url: url,
                method: "POST",
                dataType: "html",
                data:{
                    "rab_rec_id": rab_rec_id,
                    "nama_barang_jasa": nama_barang_jasa,
                    "hrg_satuan": hrg_satuan,
                    "quantity": quantity,
                    "frekuensi": frekuensi,
                    "deskripsi": deskripsi,
                    "catatan": catatan,
                    "rab_db_id": rab_db_id,
                },
                success: function(result){
                    getRABDetils()
                    empty_field()
                }
            })
        })

        function getRABDetils() {
            var rab_rec_id = $('#rab_rec_id').val()
            console.log(rab_rec_id);

            $( function() {
                var url = $('#APP_URL').val() + '/api/rabDetailsBiaya'
                $.ajax({
                    url: url,
                    method: "POST",
                    data:{
                        "rab_rec_id": rab_rec_id
                    },
                    success: function(result){

                    $('#rab_detail_biaya_list').empty().html(result)
                }});

            } );
        }

        function getRABSubDetils(id) {
            $( function() {
                var url = $('#APP_URL').val() + '/api/rabSubDetails/' + id
                $.ajax({
                    url: url,
                    method: "GET",
                    success: function(result){

                    $('#rab_sub_detail_biaya_' + id).empty().html(result)
                }});

            } );
        }

        function delete_biaya(rab_db_id) {

            var url = $('#APP_URL').val() + '/rabDetails/' + rab_db_id

            if (confirm('Data akan dihapus, Anda yakin?')) {
                $.ajax({
                    url: url,
                    type: "POST",
                    data: {
                        _method: "DELETE"
                    },
                    success: function(result){
                        console.log(result);
                        getRABDetils()
                        empty_field()
                    }
                })
            } else {

            }
        }

        function show_biaya(rab_db_id) {

            var url = $('#APP_URL').val() + '/rabDetails/' + rab_db_id

            $.ajax({
                url: url,
                type: "GET",
                success: function(result){
                    console.log(result.catatan);

                    $('#rab_rec_id').val(result.rab_rec_id)
                    $('#rab_db_id').val(result.id)
                    $('#nama_barang_jasa').val(result.nama_barang_jasa)
                    $('#hrg_satuan').val(result.hrg_satuan)
                    $('#quantity').val(result.quantity)
                    $('#frekuensi').val(result.frekuensi)
                    $('#deskripsi').val(result.deskripsi)
                    $('#catatan').val(result.catatan)
                }
            })
        }

        function save_sub_biaya(rab_dtl_rec_id) {
            var rab_sub_dtl_rec_id = $('#rab_sub_dtl_rec_id_' + rab_sub_dtl_rec_id).val()
            var sub_nama_barang_jasa = $('#sub_nama_barang_jasa_' + rab_dtl_rec_id).val()
            var sub_hrg_satuan = $('#sub_hrg_satuan_' + rab_dtl_rec_id).val()
            var sub_quantity = $('#sub_quantity_' + rab_dtl_rec_id).val()
            var sub_frekuensi = $('#sub_frekuensi_' + rab_dtl_rec_id).val()
            var sub_deskripsi = $('#sub_deskripsi_' + rab_dtl_rec_id).val()
            var sub_catatan = $('#sub_catatan_' + rab_dtl_rec_id).val()

            // console.log({rab_dtl_rec_id, rab_sub_dtl_rec_id, sub_nama_barang_jasa, sub_hrg_satuan, sub_quantity, sub_frekuensi, sub_deskripsi, sub_catatan});

            var url = $('#APP_URL').val() + '/rabSubDetails'

            $.ajax({
                url: url,
                method: "POST",
                dataType: "html",
                data:{
                    "rab_dtl_rec_id": rab_dtl_rec_id,
                    "rab_sub_dtl_rec_id": rab_sub_dtl_rec_id,
                    "sub_nama_barang_jasa": sub_nama_barang_jasa,
                    "sub_hrg_satuan": sub_hrg_satuan,
                    "sub_quantity": sub_quantity,
                    "sub_frekuensi": sub_frekuensi,
                    "sub_deskripsi": sub_deskripsi,
                    "sub_catatan": sub_catatan,
                },
                success: function(result){
                    getRABSubDetils(rab_dtl_rec_id)
                    empty_sub_field(rab_dtl_rec_id)
                }
            })

        }

        function empty_field() {
            $('#nama_barang_jasa').val('')
            $('#hrg_satuan').val('')
            $('#quantity').val('')
            $('#frekuensi').val('')
            $('#deskripsi').val('')
            $('#catatan').val('')
            $('#rab_db_id').val('')
        }

        function empty_sub_field(id) {
            $('#rab_sub_dtl_rec_id_' + id).val('')
            $('#sub_nama_barang_jasa_' + id).val('')
            $('#sub_hrg_satuan_' + id).val('')
            $('#sub_quantity_' + id).val('')
            $('#sub_frekuensi_' + id).val('')
            $('#sub_deskripsi_' + id).val('')
            $('#sub_catatan_' + id).val('')
        }
    </script>
@endpush
