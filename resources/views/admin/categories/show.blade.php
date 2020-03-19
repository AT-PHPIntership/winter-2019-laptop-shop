@extends('admin.master')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>{{'Show all Products of category:'}} {{ $category->name }}</h2>
            </div>
        </div>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('categories.index') }}">{{'Back'}}</a>
    </div>
   
    <table class="table table-bordered">
        <tr>
            <th>{{'No'}}</th>
            <th>{{'ID'}}</th>
            <th>{{'Name'}}</th>
            <th>{{'Image'}}</th>
            <th>{{'Quantity'}}</th>
            <th>{{'Price'}}</th>
        </tr>

        @foreach ($product as $item)
        @if (!empty($item))
        <tr>
            <td>{{ (($product->currentPage() - 1 ) * $product->perPage() ) + $loop->iteration }}</td>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>
            @foreach($imageable as $image)
                <td><img src="{{ asset('images/admin/products/'.$image->name) }}" alt="{{$image->name}}"></td>
            @endforeach
            <td>{{ $item->quantity }}</td>
            <td>{{ $item->price }}</td>
        </tr>
        @else
            <td>{{'No data'}}</td>
        @endif
        @endforeach
        
    </table>
    {{ $product->links() }}
@endsection