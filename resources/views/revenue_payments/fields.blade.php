<!-- Payment Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payment_id', 'Payment Id:') !!}
    {!! Form::text('payment_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Payment Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payment_date', 'Payment Date:') !!}
    {!! Form::text('payment_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Payment Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payment_value', 'Payment Value:') !!}
    {!! Form::text('payment_value', null, ['class' => 'form-control']) !!}
</div>

<!-- Invoice Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('invoice_id', 'Invoice Id:') !!}
    {!! Form::text('invoice_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('revenuePayments.index') }}" class="btn btn-secondary">Cancel</a>
</div>
