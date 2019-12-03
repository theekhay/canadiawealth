
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $product->name !!}</p>
</div>

<div class="form-group">
    {!! Form::label('code', 'Code:') !!}
    <p>{!! $product->code ?? "None" !!}</p>
</div>

<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    <p>{!! $product->price !!}</p>
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $product->description !!}</p>
</div>

<div class="form-group">
    {!! Form::label('measurement_unit', 'Measurement Unit:') !!}
    <p>{!! $product->measurement_unit ?? "unavailable" !!}</p>
</div>

<div class="form-group">
    {!! Form::label('weight', 'Weight:') !!}
    <p>{!! $product->weight ?? "unavailable" !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $product->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $product->updated_at !!}</p>
</div>

