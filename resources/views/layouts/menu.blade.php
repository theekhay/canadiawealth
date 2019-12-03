
<li class="{{ Request::is('products*') ? 'active' : '' }}">
    <a href="{!! route('home.index') !!}"><i class="fa fa-edit"></i><span>Home</span></a>
</li>



@hasrole('admin')

<li class="{{ Request::is('products*') ? 'active' : '' }}">
        <a href="{!! route('products.index') !!}"><i class="fa fa-edit"></i><span> @lang('menu.product') </span></a>
</li>

{{-- <li class="{{ Request::is('productCategories*') ? 'active' : '' }}">
    <a href="{!! route('productCategories.index') !!}"><i class="fa fa-edit"></i><span> @lang('menu.product_categories') </span></a>
</li> --}}

<li class="{{ Request::is('orders*') ? 'active' : '' }}">
    <a href="{!! route('orders.index') !!}"><i class="fa fa-edit"></i><span> @lang('menu.orders')</span></a>
</li>

<li class="{{ Request::is('payments*') ? 'active' : '' }}">
    <a href="{!! route('payments.index') !!}"><i class="fa fa-edit"></i><span> @lang('menu.payments')</span></a>
</li>
@endhasrole

{{-- <li class="{{ Request::is('carts*') ? 'active' : '' }}">
    <a href="{!! route('carts.index') !!}"><i class="fa fa-edit"></i><span>Carts</span></a>
</li> --}}

