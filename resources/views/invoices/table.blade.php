<div class="table-responsive-sm">
    <table class="table table-striped" id="invoices-table">
        <thead>
            <tr>
                <th>Project Id</th>
        <th>Invoice No</th>
        <th>Invoice Date</th>
        <th>Nama Pelanggan</th>
        <th>Jatuh Tempo</th>
        {{-- <th>Uraian Invoice</th> --}}
        <th>Nilai Invoice Rupiah</th>
        {{-- <th>Nilai Invoice Usd</th> --}}
        <th>Ppn Rupiah</th>
        {{-- <th>Ppn Usd</th> --}}
        {{-- <th>Bulan</th> --}}
        {{-- <th>Data Valid</th> --}}
        {{-- <th>Pic</th> --}}
        <th>Tanggal Bayar</th>
        <th>Status</th>
        {{-- <th>Keterangan</th> --}}
        {{-- <th>Tipe</th> --}}
        {{-- <th>Bulan Bayar</th> --}}
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($invoices as $invoices)
            <tr>
                <td>
                    {{ $invoices->proid }} - {{ $invoices->project }}
                </td>
            <td>{{ $invoices->invoice_no }}</td>
            <td>{{ $invoices->invoice_date }}</td>
            <td>{{ $invoices->nama_pelanggan }}</td>
            <td>{{ $invoices->jatuh_tempo }}</td>
            {{-- <td>{{ $invoices->uraian_invoice }}</td> --}}
            <td>{{ $invoices->nilai_invoice_rupiah }}</td>
            {{-- <td>{{ $invoices->nilai_invoice_usd }}</td> --}}
            <td>{{ $invoices->ppn_rupiah }}</td>
            {{-- <td>{{ $invoices->ppn_usd }}</td> --}}
            {{-- <td>{{ $invoices->bulan }}</td> --}}
            {{-- <td>{{ $invoices->data_valid }}</td> --}}
            {{-- <td>{{ $invoices->pic }}</td> --}}
            <td>{{ $invoices->tanggal_bayar }}</td>
            <td>{{ $invoices->status }}</td>
            {{-- <td>{{ $invoices->keterangan }}</td> --}}
            {{-- <td>{{ $invoices->tipe }}</td> --}}
            {{-- <td>{{ $invoices->bulan_bayar }}</td> --}}
                <td>
                    {!! Form::open(['route' => ['invoices.destroy', $invoices->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('invoices.show', [$invoices->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('invoices.edit', [$invoices->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
