@extends('admin.master')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>{{'Create New User'}}</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}">{{'Back'}}</a>
        </div>
    </div>
</div>
   
<form action="{{ route('users.store') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{'Fullname:'}}</strong>
                <input type="text" name="full_name" value="{{ old('full_name') }}" class="form-control" placeholder="Fullname">
            </div>
        </div>
        @if ($errors->any() && !empty($errors->messages()['full_name']) )
            <div class="col-xs-12 col-sm-12 col-md-12" >
                <div class="alert alert-danger" >
                    <ul>         
                        <li>{{ $errors->messages()['full_name'][0] }}</li>
                    </ul>
                </div>
            </div>
        @endif

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{'Email:'}}</strong>
                <input type="text" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email(example@gmail.com)">
            </div>
        </div>
        @if ($errors->any() && !empty($errors->messages()['email']) )
            <div class="col-xs-12 col-sm-12 col-md-12" >
                <div class="alert alert-danger" >
                    <ul>         
                        <li>{{ $errors->messages()['email'][0] }}</li>
                    </ul>
                </div>
            </div>
        @endif

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{'Address:'}}</strong>
                <input type="text" name="address" value="{{ old('address') }}" class="form-control" placeholder="Address">
            </div>
        </div>
        @if ($errors->any() && !empty($errors->messages()['address']) )
            <div class="col-xs-12 col-sm-12 col-md-12" >
                <div class="alert alert-danger" >
                    <ul>         
                        <li>{{ $errors->messages()['address'][0] }}</li>
                    </ul>
                </div>
            </div>
        @endif

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{'Phonenumber:'}}</strong>
                <input type="text" name="phone_number" value="{{ old('phone_number') }}" class="form-control" placeholder="Phonenumber">
            </div>
        </div>
        @if ($errors->any() && !empty($errors->messages()['phone_number']) )
            <div class="col-xs-12 col-sm-12 col-md-12" >
                <div class="alert alert-danger" >
                    <ul>         
                        <li>{{ $errors->messages()['phone_number'][0] }}</li>
                    </ul>
                </div>
            </div>
        @endif

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{'Username:'}}</strong>
                <input type="text" name="username" value="{{ old('username') }}" class="form-control" placeholder="Username">
            </div>
        </div>
        @if ($errors->any() && !empty($errors->messages()['username']) )
            <div class="col-xs-12 col-sm-12 col-md-12" >
                <div class="alert alert-danger" >
                    <ul>         
                        <li>{{ $errors->messages()['username'][0] }}</li>
                    </ul>
                </div>
            </div>
        @endif

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{'Password:'}}</strong>
                <input type="password" name="password" value="" class="form-control" placeholder="Password">
            </div>
        </div>
        @if ($errors->any() && !empty($errors->messages()['password']) && $errors->messages()['password'][0] != 'Mật khẩu xác nhận không đúng!')
            <div class="col-xs-12 col-sm-12 col-md-12" >
                <div class="alert alert-danger">
                    <ul>         
                        <li>{{ $errors->messages()['password'][0] }}</li>
                    </ul>
                </div>
            </div>
        @endif

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{'Password Confirm:'}}</strong>
                <input type="password" name="password_confirmation" value="" class="form-control" placeholder="Password">
            </div>
        </div>
        @if ($errors->any() && !empty($errors->messages()['password']) && $errors->messages()['password'][0] == 'Mật khẩu xác nhận không đúng!')
            <div class="col-xs-12 col-sm-12 col-md-12" >
                <div class="alert alert-danger">
                    <ul>         
                        <li>{{ $errors->messages()['password'][0] }}</li>
                    </ul>
                </div>
            </div>
        @endif

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>{{'Role:'}}</strong>
                <select name="role_id" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                    <option value = "{{'1'}}" {{ old('role_id') == 1 ? 'selected' : '' }}>{{'Admin'}}</option>
                    <option value = "{{'0'}}" {{ old('role_id') == 0 ? 'selected' : '' }}>{{'User'}}</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">{{'Submit'}}</button>
        </div>
    </div>
   
</form>
@endsection