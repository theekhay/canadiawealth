

<!-- Submit Field -->

<div class="col-md-4">

    <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
        <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Product Name">
    </div>

    <div class="form-group has-feedback{{ $errors->has('code') ? ' has-error' : '' }}">
        <input type="text" maxlength="6" class="form-control" name="code" value="{{ old('code') }}" placeholder="Product Code">
    </div>

    <div class="form-group has-feedback{{ $errors->has('amount') ? ' has-error' : '' }}">
        <input type="number" class="form-control" name="amount" value="{{ old('amount') }}" placeholder="Product Price">
    </div>

    <div class="form-group has-feedback{{ $errors->has('category') ? ' has-error' : '' }}">
        <select type="text" class="form-control" name="category" value="{{ old('category') }}" placeholder="Category">
            <option value="">Select a category</option>
            <option value="fashion">Fashion</option>
            <option value="food">Food</option>
            <option value="animals">Animals</option>
        </select>
    </div>

    <div class="form-group has-feedback{{ $errors->has('description') ? ' has-error' : '' }}">
        <input type="text" class="form-control" name="description" value="{{ old('description') }}" placeholder="Description">
    </div>

</div>

<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('products.index') !!}" class="btn btn-default">Cancel</a>
</div>
