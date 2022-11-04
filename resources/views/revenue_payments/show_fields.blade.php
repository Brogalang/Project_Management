<!-- Payment Id Field -->
<div class="form-group">
    {!! Form::label('payment_id', 'Payment Id:') !!}
    <p>{{ $revenuePayment->payment_id }}</p>
</div>

<!-- Payment Date Field -->
<div class="form-group">
    {!! Form::label('payment_date', 'Payment Date:') !!}
    <p>{{ $revenuePayment->payment_date }}</p>
</div>

<!-- Payment Value Field -->
<div class="form-group">
    {!! Form::label('payment_value', 'Payment Value:') !!}
    <p>{{ $revenuePayment->payment_value }}</p>
</div>

<!-- Invoice Id Field -->
<div class="form-group">
    {!! Form::label('invoice_id', 'Invoice Id:') !!}
    <p>{{ $revenuePayment->invoice_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $revenuePayment->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $revenuePayment->updated_at }}</p>
</div>

