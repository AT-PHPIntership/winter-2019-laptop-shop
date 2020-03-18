@extends('admin.master')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>{{'Edit Product:'}} {{$product->name}}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}">{{'Back'}}</a>
            </div>
        </div>
    </div>
  
    <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{'Name:'}}</strong>
                    <input type="text" name="name" value="{{old('name') ? old('name') : $product->name}}" class="form-control" placeholder="Name">
                </div>
            </div>
            @if ($errors->any() && !empty($errors->messages()['name']) )
                <div class="col-xs-12 col-sm-12 col-md-12" >
                    <div class="alert alert-danger">
                        <ul>         
                            <li>{{ $errors->messages()['name'][0] }}</li>
                        </ul>
                    </div>
                </div>
            @endif

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{'Description:'}}</strong>
                    <textarea class="form-control" style="height:250px" name="description"  placeholder="Description">{{old('description') ? old('description') : $product->description}}</textarea>
                </div>
            </div>
            @if ($errors->any() && !empty($errors->messages()['description']) )
                <div class="col-xs-12 col-sm-12 col-md-12" >
                    <div class="alert alert-danger">
                        <ul>         
                            <li>{{ $errors->messages()['description'][0] }}</li>
                        </ul>
                    </div>
                </div>
            @endif

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{'Quantity:'}}</strong>
                    <input type="text" name="quantity" value="{{old('quantity') ? old('quantity') : $product->quantity}}" class="form-control" placeholder="Quantity">
                </div>
            </div>
            @if ($errors->any() && !empty($errors->messages()['quantity']) )
                <div class="col-xs-12 col-sm-12 col-md-12" >
                    <div class="alert alert-danger">
                        <ul>         
                            <li>{{ $errors->messages()['quantity'][0] }}</li>
                        </ul>
                    </div>
                </div>
            @endif

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{'Price:'}}</strong>
                    <input type="text" name="price" value="{{old('price') ? old('price') : $product->price}}" class="form-control" placeholder="Price">
                </div>
            </div>
            @if ($errors->any() && !empty($errors->messages()['price']) )
                <div class="col-xs-12 col-sm-12 col-md-12" >
                    <div class="alert alert-danger">
                        <ul>         
                            <li>{{ $errors->messages()['price'][0] }}</li>
                        </ul>
                    </div>
                </div>
            @endif

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{'Category:'}}</strong>
                    <select name="category_id" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        @foreach ($category as $item)
                            <option value = "{{$item->id}}" {{ old('category_id', $product->category_id) == $item->id ? 'selected' : '' }}>{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">{{'Submit'}}</button>
            </div>
        </div>
   
    </form>
@endsection