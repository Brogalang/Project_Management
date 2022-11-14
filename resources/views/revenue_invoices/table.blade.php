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
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($revenueInvoices as $revenueInvoice)
            <tr>
                <td>{{ $revenueInvoice->no_invoice }}</td>
                <td>{{ $revenueInvoice->gl_invoice }}</td>
                <td>{{ number_format($revenueInvoice->nilai_rp) }}</td>
                <td>
                    <b>{{ $revenueInvoice->id_project }}</b> -<br>
                    @foreach($projectdb as $proj)
                        @if($proj->project_id==$revenueInvoice->id_project)
                            {{$proj->project}}
                        @endif
                    @endforeach

                </td>
                <td>{{ $revenueInvoice->keterangan }}</td>
                <td>{{ $revenueInvoice->termin }}</td>
                <td>{{ $revenueInvoice->status }}</td>
                <td>
                    {!! Form::open(['route' => ['revenueInvoices.destroy', $revenueInvoice->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('revenueInvoices.show', [$revenueInvoice->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('revenueInvoices.edit', [$revenueInvoice->id]) }}" onClick="myFunction('{{$revenueInvoice->bln}}')" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

