<div class="table-responsive-sm">
    <table class="table table-striped" id="purchaseOrders-table">
        <thead>
            <tr>
                <th>Nomor Po</th>
        <th>Tanggal Po</th>
        <th>Rab Id</th>
        <th>Project Id</th>
        <th>Kategori</th>
        <th>Nama Barang Jasa</th>
        <th>Nilai Barang Jasa</th>
        <th>No Item Rab</th>
        <th>Np Sub Item Rab</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($purchaseOrders as $purchaseOrder)
            <tr>
                <td>{{ $purchaseOrder->nomor_po }}</td>
            <td>{{ $purchaseOrder->tanggal_po }}</td>
            <td>{{ $purchaseOrder->rab_id }}</td>
            <td>{{ $purchaseOrder->project_id }}</td>
            <td>{{ $purchaseOrder->kategori }}</td>
            <td>{{ $purchaseOrder->nama_barang_jasa }}</td>
            <td>{{ $purchaseOrder->nilai_barang_jasa }}</td>
            <td>{{ $purchaseOrder->no_item_rab }}</td>
            <td>{{ $purchaseOrder->np_sub_item_rab }}</td>
                <td>
                    {!! Form::open(['route' => ['purchaseOrders.destroy', $purchaseOrder->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('purchaseOrders.show', [$purchaseOrder->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('purchaseOrders.edit', [$purchaseOrder->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>