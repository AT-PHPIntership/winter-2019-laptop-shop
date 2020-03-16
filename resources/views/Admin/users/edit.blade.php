@extends('Admin.master')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit User: {{$user->full_name}}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Warning!</strong> Please check input field code<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('users.update',$user->id) }}" method="POST">
        @csrf
        @method('PUT')

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fullname:</strong>
                <input type="text" name="full_name" value="{{$user->full_name}}" class="form-control" placeholder="Fullname">
            </div>
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" value="{{$user->email}}" class="form-control" placeholder="Email(example@gmail.com)">
            </div>
            <div class="form-group">
                <strong>Address:</strong>
                <input type="text" name="address" value="{{$user->address}}" class="form-control" placeholder="Address">
            </div>
            <div class="form-group">
                <strong>Phonenumber:</strong>
                <input type="text" name="phone_number" value="{{$user->phone_number}}" class="form-control" placeholder="Phonenumber">
            </div>
            <div class="form-group">
                <strong>Username:</strong>
                <input type="text" disabled name="username" value="{{$user->username}}" class="form-control" placeholder="Username">
            </div>
            <div class="form-group">
                <strong>Password:</strong>
                <input type="password" name="password" value="" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <div class="form-group">
                    <strong>Role:</strong>
                    <select name="role_id" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option value = "{{'1'}}" {{$user->role_id == 1 ? "selected" : ""}}>Admin</option>
                        <option value = "{{'0'}}" {{$user->role_id == 0 ? "selected" : ""}}>User</option>
                    </select>
                </div>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
    </form>
@endsection