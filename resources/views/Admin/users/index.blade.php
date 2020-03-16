@extends('Admin.master')

@section('content')

  <div class="row">
    <div class="col-md-12">
      <div class="overview-wrap">
        <h2 class="title-1">User</h2>
          <div class="pull-right">
              <a class="au-btn au-btn-icon au-btn--blue zmdi zmdi-plus" href="{{ route('users.create') }}"> Create new user</a>
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
            <th>Fullname</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phonenumber</th>
            <th>Username</th>
            <th>Role ID</th>
            <th width="250px">Action</th>
        </tr>
   
        @foreach ($user as $item)

        <tr>
            <td>{{ (($user->currentPage() - 1 ) * $user->perPage() ) + $loop->iteration }}</td>
            <td>{{ $item->id }}</td>
            <td>{{ $item->full_name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->address }}</td>
            <td>{{ $item->phone_number }}</td>
            <td>{{ $item->username }}</td>
            <td>{{ $item->role_id }}</td>
            <td>
                <form action="{{ route('users.destroy',$item->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('users.show',$item->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('users.edit',$item->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete?');">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        
    </table>
  {{$user->links()}}
@endsection