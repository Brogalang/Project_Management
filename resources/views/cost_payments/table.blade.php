<div class="table-responsive-sm">
    <table class="table table-striped" id="costPayments-table">
        <thead>
            <tr>
                <th>Payment Id</th>
        <th>Invoice Id</th>
        <th>Payment Date</th>
        <th>Payment Value</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($costPayments as $costPayment)
            <tr>
                <td>{{ $costPayment->payment_id }}</td>
            <td>{{ $costPayment->invoice_id }}</td>
            <td>{{ $costPayment->payment_date }}</td>
            <td>{{ $costPayment->payment_value }}</td>
                <td>
                    {!! Form::open(['route' => ['costPayments.destroy', $costPayment->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('costPayments.show', [$costPayment->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('costPayments.edit', [$costPayment->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>