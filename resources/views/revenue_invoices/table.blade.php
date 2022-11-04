<div class="table-responsive-sm">
    <table class="table table-striped" id="revenueInvoices-table">
        <thead>
            <tr>
                <th>Nomor Invoice</th>
        <th>Tanggal Invoice</th>
        <th>Nilai Invoice</th>
        <th>Project Id</th>
        <th>Keterangan</th>
        <th>Termin</th>
        <th>Periode</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($revenueInvoices as $revenueInvoice)
            <tr>
                <td>{{ $revenueInvoice->nomor_invoice }}</td>
            <td>{{ $revenueInvoice->tanggal_invoice }}</td>
            <td>{{ $revenueInvoice->nilai_invoice }}</td>
            <td>{{ $revenueInvoice->project_id }}</td>
            <td>{{ $revenueInvoice->keterangan }}</td>
            <td>{{ $revenueInvoice->termin }}</td>
            <td>{{ $revenueInvoice->periode }}</td>
                <td>
                    {!! Form::open(['route' => ['revenueInvoices.destroy', $revenueInvoice->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('revenueInvoices.show', [$revenueInvoice->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('revenueInvoices.edit', [$revenueInvoice->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>