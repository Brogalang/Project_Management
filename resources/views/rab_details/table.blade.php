<div class="table-responsive-sm">
    <table class="table table-striped" id="rabDetails-table">
        <thead>
            <tr>
                <th>Rab Rec Id</th>
        <th>Rab No</th>
        <th>Rab Item No</th>
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
        @foreach($rabDetails as $rabDetail)
            <tr>
                <td>{{ $rabDetail->rab_rec_id }}</td>
            <td>{{ $rabDetail->rab_no }}</td>
            <td>{{ $rabDetail->rab_item_no }}</td>
            <td>{{ $rabDetail->nama_barang_jasa }}</td>
            <td>{{ $rabDetail->hrg_satuan }}</td>
            <td>{{ $rabDetail->quantity }}</td>
            <td>{{ $rabDetail->frekuensi }}</td>
            <td>{{ $rabDetail->deskripsi }}</td>
            <td>{{ $rabDetail->catatan }}</td>
                <td>
                    {!! Form::open(['route' => ['rabDetails.destroy', $rabDetail->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('rabDetails.show', [$rabDetail->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('rabDetails.edit', [$rabDetail->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>