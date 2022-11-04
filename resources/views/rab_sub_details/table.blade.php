<div class="table-responsive-sm">
    <table class="table table-striped" id="rabSubDetails-table">
        <thead>
            <tr>
                <th>Rab Dtl Rec Id</th>
        <th>Nama Barang Jasa</th>
        <th>Hrg Satuan</th>
        <th>Quantity</th>
        <th>Frekuensi</th>
        <th>Deskripsi</th>
        <th>Catatan</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($rabSubDetails as $rabSubDetails)
            <tr>
                <td>{{ $rabSubDetails->rab_dtl_rec_id }}</td>
            <td>{{ $rabSubDetails->nama_barang_jasa }}</td>
            <td>{{ $rabSubDetails->hrg_satuan }}</td>
            <td>{{ $rabSubDetails->quantity }}</td>
            <td>{{ $rabSubDetails->frekuensi }}</td>
            <td>{{ $rabSubDetails->deskripsi }}</td>
            <td>{{ $rabSubDetails->catatan }}</td>
                <td>
                    {!! Form::open(['route' => ['rabSubDetails.destroy', $rabSubDetails->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('rabSubDetails.show', [$rabSubDetails->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('rabSubDetails.edit', [$rabSubDetails->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>