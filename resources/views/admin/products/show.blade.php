@extends('admin.master')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>{{'Showing product:'}} {{$product->name}}</h2>
            </div>
        </div>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('products.index') }}">{{'Back'}}</a>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{'ID:'}}</strong>
                {{$product->id}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{'Name:'}}</strong>
                {{$product->name}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{'Image:'}}</strong>
                @foreach($image as $item)
                    <img src="{{ asset('images/admin/products/'.$item->name) }}" alt="{{$item->name}}">
                @endforeach
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{'Description:'}}</strong>
                {{$product->description}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{'Quantity:'}}</strong>
                {{$product->quantity}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{'Price:'}}</strong>
                {{$product->price}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{'Category ID:'}}</strong>
                {{$product->category_id}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{'Category Name:'}}</strong>
               {{ $category->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{'Created At:'}}</strong>
                {{$product->created_at}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{'Updated At:'}}</strong>
                {{$product->updated_at}}
            </div>
        </div>
    </div>
@endsection