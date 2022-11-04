<table class="table table-sm table-bordered">
    <tbody>
        @foreach ($rabSubDetails as $no => $rabSubDetail)
            <tr>
                @php
                    $alphabet = range('A', 'Z');
                @endphp
                <th style="width: 5%" class="text-right" scope="row">{{ $alphabet[++$no - 1] }}</th>
                <td style="width: 20%">{{$rabSubDetail->nama_barang_jasa}}</td>
                <td style="width: 20%" class="text-right">{{$rabSubDetail->hrg_satuan}}</td>
                <td style="width: 15%" class="text-right">{{$rabSubDetail->quantity}}</td>
                <td style="width: 15%">{{$rabSubDetail->frekuensi}}</td>
                <td style="width: 15%">{{$rabSubDetail->deskripsi}}</td>
                <td style="width: 15%">{{$rabSubDetail->catatan}}</td>
                <td style="width: 10%">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-sm btn-light" disabled><i class="fa fa-pencil text-success"></i></button>
                        <button type="button" class="btn btn-sm btn-light" disabled><i class="fa fa-times text-danger"></i></button>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
