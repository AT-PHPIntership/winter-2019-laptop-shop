@extends('admin.master')

@section('content')

  <div class="row">
    <div class="col-md-12">
      <div class="overview-wrap">
        <h2 class="title-1">{{'Product'}}</h2>
          <div class="pull-right">
              <a class="au-btn au-btn-icon au-btn--blue zmdi zmdi-plus" href="{{ route('products.create') }}">{{'Create new product'}}</a>
          </div>
      </div>
    </div>
  </div>
  @if(session('success'))
        <div class="alert alert-success">
            <p>{{ session('success') }}</p>
        </div>
  @endif
  
  <table class="table table-bordered">
        <tr>
            <th>{{'No'}}</th>
            <th>{{'ID'}}</th>
            <th>{{'Name'}}</th>
            <th>{{'Image'}}</th>
            <th>{{'Quantity'}}</th>
            <th>{{'Price'}}</th>
            <th>{{'Category'}}</th>
            <th width="250px">{{'Action'}}</th>
        </tr>
   
        @foreach ($product as $item)

        <tr>
            <td>{{ (($product->currentPage() - 1 ) * $product->perPage() ) + $loop->iteration }}</td>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            <td>
              @foreach($image as $item3)
                @if($item3->imageable_id == $item->id && $item3->imageable_type == 'App\Product')
                  <img src="{{asset('images/admin/products/'.$item3->name)}}" alt="{{$item3->name}}">
                @endif
              @endforeach
            </td>
            <td>{{ $item->quantity }}</td>
            <td>{{ $item->price }}</td>
            @foreach($category as $item2)
              @if($item->category_id == $item2->id)
                <td>{{ $item2->name }}</td>
              @endif
            @endforeach
            <td>
              <a class="btn btn-info" href="{{ route('products.show',$item->id) }}">{{'Show'}}</a>
              <a class="btn btn-primary" href="{{ route('products.edit',$item->id) }}">{{'Edit'}}</a>
              <form style="display:inline" action="{{ route('products.destroy',$item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete?');">{{'Delete'}}</button>
              </form>
            </td>
        </tr>
        @endforeach
        
    </table>
  {{$product->links()}}
@endsection