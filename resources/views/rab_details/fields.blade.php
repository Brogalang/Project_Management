<div class="row">
    <div class="table-responsive">
        <table class="table table-sm table-hover">
            <thead class="table-dark">
                <tr>
                <th style="width: 5%" scope="col">#</th>
                <th style="width: 20%" scope="col">Keterangan</th>
                <th class="text-right" style="width: 20%" scope="col">Harga Satuan</th>
                <th class="text-right" style="width: 15%" scope="col">Qty.</th>
                <th style="width: 10%" scope="col">Freq.</th>
                <th style="width: 15%" scope="col">Catatan</th>
                <th style="width: 10%" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rab_detil_biaya as $no => $rab_d_b)
                    <tr data-toggle="collapse" data-target="#rowColl{{ $rab_d_b->id }}" class="accordion-toggle" onclick="getRABSubDetils({{ $rab_d_b->id }})">
                        <th class="text-right" scope="row">{{ ++$no }}</th>
                        <td>{{ $rab_d_b->nama_barang_jasa }}</td>
                        <td class="text-right"> <strong>Rp </strong> {{ number_format($rab_d_b->hrg_satuan, 0) }}</td>
                        <td class="text-right">{{ number_format($rab_d_b->quantity, 0) }}</td>
                        <td class="text-right">{{ number_format($rab_d_b->frekuensi, 0) }}</td>
                        <td>{{ $rab_d_b->deskripsi }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                {{-- <button type="button" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></button> --}}
                                <button type="button" onclick="show_biaya({{ $rab_d_b->id }})" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></button>
                                <button type="button" id="delete_biaya" onclick="delete_biaya({{ $rab_d_b->id }})" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button>
                            </div>
                        </td>
                    </tr>

                    <tr style="font-size: smaller;" class="table-info">
                        <td colspan="7" class="hiddenRow">
                            <div class="collapse" id="rowColl{{ $rab_d_b->id }}">
                                {{-- @include('rab_details.fields_sub_details') --}}
                                <div class="row pt-2">
                                    <input type="hidden" id="rab_sub_dtl_rec_id_{{ $rab_d_b->id }}">
                                    <div class="col-md-3">
                                        <!-- Nama Barang Jasa Field -->
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Nama Barang Jasa</span>
                                            </div>
                                            <input type="text" id="sub_nama_barang_jasa_{{ $rab_d_b->id }}" name="sub_nama_barang_jasa_{{ $rab_d_b->id }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <!-- Hrg Satuan Field -->
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Harga Satuan</span>
                                            </div>
                                            <input type="text" id="sub_hrg_satuan_{{ $rab_d_b->id }}" name="sub_hrg_satuan_{{ $rab_d_b->id }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <!-- Quantity Field -->
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Qty.</span>
                                            </div>
                                            <input type="text" id="sub_quantity_{{ $rab_d_b->id }}" name="sub_quantity_{{ $rab_d_b->id }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <!-- Frekuensi Field -->
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroup-sizing-sm">Freq</span>
                                            </div>
                                            <input type="text" id="sub_frekuensi_{{ $rab_d_b->id }}" name="sub_frekuensi_{{ $rab_d_b->id }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Deskripsi</span>
                                            </div>
                                            <textarea id="sub_deskripsi_{{ $rab_d_b->id }}" name="sub_deskripsi_{{ $rab_d_b->id }}" class="form-control" aria-label="With textarea" rows="1"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Catatan</span>
                                            </div>
                                            <textarea id="sub_catatan_{{ $rab_d_b->id }}" name="sub_catatan_{{ $rab_d_b->id }}" class="form-control" aria-label="With textarea" rows="1"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-1">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <button type="button" onclick="save_sub_biaya({{ $rab_d_b->id }})" class="btn btn-sm btn-success"><i class="fa fa-save"></i></button>
                                        </div>
                                    </div>
                                </div>

                                <div id="rab_sub_detail_biaya_{{ $rab_d_b->id }}"></div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
