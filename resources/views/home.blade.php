@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row" style="margin-top:20px">
        @include('flash::message')
    </div>
    <div class="row">

        @foreach($products as $product)

            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="..." alt="...">
                    <div class="caption">
                       <h3>{!! $product->name !!}</h3>
                       <p>...</p>
                       <p>
                            <a href="{!! route('cart.product.add', [$product->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>

                           {{-- <a href="#" class="btn btn-primary" role="button">Button</a> --}}
                           {{-- <a href="" class='btn btn-default btn-xs'><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a> --}}
                            {{-- <a href="#" class="btn btn-default" role="button">Button</a> --}}
                        </p>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
</div>
@endsection
