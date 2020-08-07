<div class="table-responsive">
    <table class="table" id="productCategories-table">
        <thead>
            <tr>

                    <th>Name</th>
                    <th>Code</th>
                    <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($productCategories as $productCategory)
            <tr>
                    <td>{!! $productCategory->name !!}</td>
                    <td>{!! $productCategory->code !!}</td>

                <td>
                    {!! Form::open(['route' => ['productCategories.destroy', $productCategory->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('productCategories.show', [$productCategory->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('productCategories.edit', [$productCategory->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $productCategories->links("pagination::bootstrap-4") }}
</div>
