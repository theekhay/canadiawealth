@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Profile Page
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">

                @include('flash::message')

                {!! Form::model($user, ['route' => ['user.update', $user->id ], 'method' => 'patch']) !!}

                        <!-- Id Field -->

                    <div class="form-group col-sm-6">
                        {!! Form::label('firstname', 'First Name:') !!}
                        {!! Form::text('firstname', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group col-sm-6">
                        {!! Form::label('lastname', 'Last Name:') !!}
                        {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group col-sm-6">
                        {!! Form::label('email', 'Email:') !!}
                        {!! Form::email('email', null, ['class' => 'form-control']) !!}
                    </div>

                    {{-- <div class="form-group col-sm-6">
                        {!! Form::label('category', 'Category:') !!}
                        {!! Form::select('category', $productCategories, $product->category ?? "", ['class' => 'form-control']) !!}
                    </div> --}}

        <div class="form-group col-sm-6">
            {!! Form::label('address', 'Address:') !!}
            {!! Form::text('address', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group col-sm-6">
            {!! Form::label('telephone', 'Telephone:') !!}
            {!! Form::text('telephone', null, ['class' => 'form-control']) !!}
        </div>

    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('products.index') !!}" class="btn btn-default">Cancel</a>
    </div>



                   {!! Form::close() !!}
           </div>
       </div>
   </div>
@endsection
