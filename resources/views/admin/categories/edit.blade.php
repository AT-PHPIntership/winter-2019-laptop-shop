@extends('admin.master')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>{{'Edit Category:'}} {{$category->name}}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('categories.index') }}">{{'Back'}}</a>
            </div>
        </div>
    </div>
   
    <form action="{{ route('categories.update',$category->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>{{'Name:'}}</strong>
                    
                    <input type="text" name="name" value="{{old('name') ? old('name') : $category->name}}" class="form-control" placeholder="Name">
                </div>
                @if ($errors->any() && !empty($errors->messages()['name']))
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="alert alert-danger">
                            <ul>         
                                <li>{{ $errors->messages()['name'][0] }}</li>
                            </ul>
                        </div>
                    </div>
                @endif
                <div class="form-group">
                    <strong>{{'Description:'}}</strong>
                    <textarea class="form-control" style="height:250px" name="description"  placeholder="Description">{{ old('description') ? old('description') : $category->description }}</textarea>
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
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">{{'Submit'}}</button>
            </div>
        </div>
   
    </form>
@endsection