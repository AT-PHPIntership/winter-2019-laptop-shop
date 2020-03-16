@extends('Admin.master')

@section('content')

  <div class="row">
    <div class="col-md-12">
      <div class="overview-wrap">
        <h2 class="title-1">Category</h2>
          <div class="pull-right">
              <a class="au-btn au-btn-icon au-btn--blue zmdi zmdi-plus" href="{{ route('categories.create') }}"> Create new category</a>
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
            <th width="250px">Action</th>
        </tr>
   
        @foreach ($category as $item)

        <tr>
            <td>{{ (($category->currentPage() - 1 ) * $category->perPage() ) + $loop->iteration }}</td>
            <td><a href="{{ route('categories.show',$item->id) }}">{{ $item->id }}</a></td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->description }}</td>
            <td>
                <form action="{{ route('categories.destroy',$item->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('categories.show',$item->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('categories.edit',$item->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete?');">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        
    </table>
  {{$category->links()}}
@endsection