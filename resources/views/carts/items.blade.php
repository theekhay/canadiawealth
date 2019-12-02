<div class="table-responsive">
        <table class="table" id="orders-table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price </th>
                    <th>Quantity </th>
                    <th>Gross </th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($items as $item)
                <tr>
                    <td>{!! $item->name !!}</td>

                    <td>{!! number_format($item->price, 2) !!}</td>

                    <td>{!! $item->qty !!}</td>

                    <td>{!! number_format($item->price * $item->qty), 2 !!}</td>
                    <td>
                        {!! Form::open(['route' => ['orders.destroy', $item->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{!! route('cart.product.remove', [$item->rowId]) !!}"  title="remove from cart"class='btn btn-default btn-xs'><i class="glyphicon glyphicon-remove"></i></a>
                            <a href="{!! route('cart.product.increaseQty', [$item->rowId]) !!}" title="increase qunatity" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-arrow-up"></i></a>
                            <a href="{!! route('cart.product.decreaseQty', [$item->rowId]) !!}" title="decrease qunatity" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-arrow-down"></i></a>
                            {{-- {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!} --}}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            <tr>
                <td>Total: {!! Cart::total() !!}
                <a class="btn btn-sm btn-primary"  href="{!! route('payments.checkout') !!}">checkout.</a></<a>
            </tr>
            </tbody>
        </table>
    </div>
