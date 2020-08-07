<div class="table-responsive">
    <table class="table" id="orders-table">
        <thead>
            <tr>
                <th>Order Ref</th>
                <th>Delivery Method</th>
                <th>Payment Method</th>
                <th>Total </th>
                <th>Checkout Date</th>
            </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{!! $order->order_reference !!}</td>

                <td>{!! $order->delivery_method !!}</td>

                <td>{!! $order->payment_method !!}</td>

                <td>{!! number_format($order->total_price, 2) !!}</td>

                <td>{!! $order->checkout_date !!}</td>

                <td>
                    {!! Form::open(['route' => ['orders.destroy', $order->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        {{-- <a href="{!! route('orders.show', [$order->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('orders.edit', [$order->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!} --}}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
