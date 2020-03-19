@extends('admin.master')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>{{'Edit User:'}} {{$user->full_name}}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}">{{'Back'}}</a>
            </div>
        </div>
    </div>
  
    <form action="{{ route('users.update',$user->id) }}" method="POST">
        @csrf
        @method('PUT')

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{'Fullname:'}}</strong>
                <input type="text" name="full_name" value="{{old('full_name') ? old('full_name') : $user->full_name}}" class="form-control" placeholder="Fullname">
            </div>
            @if ($errors->any() && !empty($errors->messages()['full_name']) )
                <div class="alert alert-danger" >
                    <ul>         
                        <li>{{ $errors->messages()['full_name'][0] }}</li>
                    </ul>
                </div> 
            @endif

            <div class="form-group">
                <strong>{{'Email:'}}</strong>
                <input type="text" name="email" value="{{old('email') ? old('email') : $user->email}}" class="form-control" placeholder="Email(example@gmail.com)">
            </div>
            @if ($errors->any() && !empty($errors->messages()['email']) )
                <div class="alert alert-danger" >
                    <ul>         
                        <li>{{ $errors->messages()['email'][0] }}</li>
                    </ul>
                </div>
            @endif

            <div class="form-group">
                <strong>{{'Address:'}}</strong>
                <input type="text" name="address" value="{{old('address') ? old('address') : $user->address}}" class="form-control" placeholder="Address">
            </div>
            @if ($errors->any() && !empty($errors->messages()['address']) )
                <div class="alert alert-danger" >
                    <ul>         
                        <li>{{ $errors->messages()['address'][0] }}</li>
                    </ul>
                </div>
            @endif

            <div class="form-group">
                <strong>{{'Phonenumber:'}}</strong>
                <input type="text" name="phone_number" value="{{old('phone_number') ? old('phone_number') : $user->phone_number}}" class="form-control" placeholder="Phonenumber">
            </div>
            @if ($errors->any() && !empty($errors->messages()['phone_number']) )
                <div class="alert alert-danger" >
                    <ul>         
                        <li>{{ $errors->messages()['phone_number'][0] }}</li>
                    </ul>
                </div>
            @endif

            <div class="form-group">
                <strong>{{'Username:'}}</strong>
                <input type="text" disabled name="username" value="{{$user->username}}" class="form-control" placeholder="Username">
            </div>

            <div class="form-group">
                <strong>{{'Password:'}}</strong>
                <input type="password" name="password" value="" class="form-control" placeholder="Password">
            </div>
            @if ($errors->any() && !empty($errors->messages()['password']) && $errors->messages()['password'][0] != 'Mật khẩu xác nhận không đúng!')
                <div class="alert alert-danger">
                    <ul>         
                        <li>{{ $errors->messages()['password'][0] }}</li>
                    </ul>
                </div>
            @endif

            <div class="form-group">
                <strong>{{'Password Confirm:'}}</strong>
                <input type="password" name="password_confirmation" value="" class="form-control" placeholder="Password Confirm">
            </div>
            @if ($errors->any() && !empty($errors->messages()['password']) && $errors->messages()['password'][0] == 'Mật khẩu xác nhận không đúng!')
                <div class="alert alert-danger">
                    <ul>         
                        <li>{{ $errors->messages()['password'][0] }}</li>
                    </ul>
                </div>
            @endif

            <div class="form-group">
                <div class="form-group">
                    <strong>{{'Role:'}}</strong>
                    <select name="role_id" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option value = "{{'1'}}" {{ old('role_id', $user->role_id) == 1 ? 'selected' : '' }}>{{'Admin'}}</option>
                        <option value = "{{'0'}}" {{ old('role_id', $user->role_id) == 0 ? 'selected' : '' }}>{{'User'}}</option>
                    </select>
                </div>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">{{'Submit'}}</button>
        </div>
    </div>
   
    </form>
@endsection