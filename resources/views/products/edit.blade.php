@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Edit Product "{!! $product->name !!}"
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {{-- {!! Form::model($productCategories, ['route' => ['products.update', $productCategories->id], 'method' => 'patch']) !!} --}}
                   {!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'patch']) !!}

                        @include('products.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
