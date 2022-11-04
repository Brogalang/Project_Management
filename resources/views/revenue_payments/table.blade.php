<div class="table-responsive-sm">
    <table class="table table-striped" id="revenuePayments-table">
        <thead>
            <tr>
                <th>Payment Id</th>
        <th>Payment Date</th>
        <th>Payment Value</th>
        <th>Invoice Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($revenuePayments as $revenuePayment)
            <tr>
                <td>{{ $revenuePayment->payment_id }}</td>
            <td>{{ $revenuePayment->payment_date }}</td>
            <td>{{ $revenuePayment->payment_value }}</td>
            <td>{{ $revenuePayment->invoice_id }}</td>
                <td>
                    {!! Form::open(['route' => ['revenuePayments.destroy', $revenuePayment->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('revenuePayments.show', [$revenuePayment->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('revenuePayments.edit', [$revenuePayment->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>