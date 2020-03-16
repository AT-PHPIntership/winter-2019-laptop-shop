@extends('Admin.master')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show all Products of {{ $category->name }}</h2>
            </div>
        </div>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('categories.index') }}"> Back</a>
    </div>
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Category ID</th>
        </tr>

        @foreach ($product as $item)
        @if (!empty($item))
        <tr>
            <td>{{ (($product->currentPage() - 1 ) * $product->perPage() ) + $loop->iteration }}</td>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->description }}</td>
            <td>{{ $item->quantity }}</td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->category_id }}</td>
        </tr>
        @elseif(empty($item))
        <h3>No data</h3>
        @endif
        @endforeach
    </table>
    {{ $product->links() }}
@endsection