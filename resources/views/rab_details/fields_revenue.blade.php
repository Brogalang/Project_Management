<div class="row">
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
            <button type="button" class="btn btn-sm btn-success"><i class="fa fa-save"></i></button>
            <button type="button" class="btn btn-sm btn-secondary mr-2"><i class="fa fa-th-list"></i></button>
        {{-- <div class="btn-group" role="group" aria-label="Basic example"> --}}
            {{-- <button type="button" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></button> --}}
            {{-- <button type="button" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button> --}}
        {{-- </div> --}}
    </div>
</div>
<hr>

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
                <tr data-toggle="collapse" data-target="#rowColl_B_1" class="accordion-toggle">
                    <th class="text-right" scope="row">1</th>
                    <td>Pendapatan I</td>
                    <td class="text-right">216.000.000</td>
                    <td class="text-right">-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-sm btn-success"><i class="fa fa-plus"></i></button>
                            <button type="button" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></button>
                            <button type="button" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button>
                        </div>
                    </td>

                </tr>
                <tr style="font-size: smaller;" class="table-info">
                    <td colspan="7" class="hiddenRow">
                        <div class="collapse" id="rowColl_B_1">
                            {{-- @include('rab_sub_details.fields_sub_details') --}}
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Submit Field -->
{{-- <div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('rabDetails.index') }}" class="btn btn-secondary">Cancel</a>
</div> --}}
