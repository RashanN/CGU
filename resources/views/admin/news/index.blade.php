@extends('layouts.admin')

@section('content')

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <a class="btn btn-success" href="{{ route("admin.news.create") }}"> Create New Post</a>
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
            <th>S.No</th>
            <th>Image</th>
            <th>Title</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td><img src="{{ asset('assets/images/news/'.$post->image) }}" height="200" width="300" alt="" /></td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->description }}</td>
            <td>
                <form action="{{ route('admin.news.destroy',$post->id) }}" method="POST">
    
                    <a class="btn btn-primary" href="{{ route('admin.news.edit',$post->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  

@endsection