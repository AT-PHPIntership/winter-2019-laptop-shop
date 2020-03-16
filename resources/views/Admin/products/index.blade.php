@extends('Admin.master')

@section('content')

  <div class="row">
    <div class="col-md-12">
      <div class="overview-wrap">
        <h2 class="title-1">Product</h2>
          <div class="pull-right">
              <a class="au-btn au-btn-icon au-btn--blue zmdi zmdi-plus" href="{{ route('products.create') }}"> Create new product</a>
          </div>
      </div>
    </div>
  </div>
  @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
  @endif
  
  <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Category ID</th>
            <th width="250px">Action</th>
        </tr>
   
        @foreach ($product as $item)

        <tr>
            <td>{{ (($product->currentPage() - 1 ) * $product->perPage() ) + $loop->iteration }}</td>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->description }}</td>
            <td>{{ $item->quantity }}</td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->category_id }}</td>
            <td>
                <form action="{{ route('products.destroy',$item->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('products.show',$item->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('products.edit',$item->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete?');">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        
    </table>
  {{$product->links()}}
@endsection