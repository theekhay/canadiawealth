@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row" style="margin-top:20px">
        @include('flash::message')
    </div>


        <?php $count = 0 ?>

        <div class="row">
        @foreach($products as $product)

                <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMjQxIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDI0MSAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MjAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTZlY2E3MDA1MmQgdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMnB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNmVjYTcwMDUyZCI+PHJlY3Qgd2lkdGg9IjI0MSIgaGVpZ2h0PSIyMDAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI4OS4zNTE1NjI1IiB5PSIxMDUuNDA0Njg3NSI+MjQxeDIwMDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" alt="...">
                            <div class="caption">
                                <h3>{!! $product->name !!} <small>${!! $product->price !!}</small></h3>
                                <p> {!! $product->description !!} </p>

                                @hasrole('user')
                                <p><a href="{!! route('cart.product.add', [$product->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-plus"></i></a></p>
                                @endhasrole
                            </div>
                        </div>
                    </div>
        @endforeach
        </div>
    </div>

    {{ $products->links("pagination::bootstrap-4") }}

</div>
@endsection
