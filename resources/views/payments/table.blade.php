<div class="table-responsive">
    <table class="table" id="payments-table">
        <thead>
            <tr>

                <th>Customer</th>
                <th>Vendor</th>
                <th>Total </th>
                <th>Amount paid</th>
                <th>Payment method</th>
                <th>Discount</th>

                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($payments as $payment)
            <tr>
                <td>{!! $payment->customer_id !!}</td>
                <td>{!! $payment->vendor_id !!}</td>
                <td>{!! $payment->expected_payment !!}</td>
                <td>{!! $payment->amount_paid !!}</td>
                <td>{!! $payment->payment_method !!}</td>
                <td>{!! $payment->discount !!}</td>

                <td>
                    {!! Form::open(['route' => ['payments.destroy', $payment->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('payments.show', [$payment->id]) !!}" title="view cart" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        {{-- <a href="{!! route('payments.edit', [$payment->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a> --}}
                        {{-- {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!} --}}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $payments->links("pagination::bootstrap-4") }}

</div>
