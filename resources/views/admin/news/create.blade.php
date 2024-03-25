@extends('layouts.admin')

@section('content')

  
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mb-2">
            <h2>Add New News</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('admin.news.index') }}"> Back</a>
        </div>
    </div>
</div>
   
 
<form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>News Title:</strong>
                <input type="text" name="title" class="form-control" placeholder="News Title">
               @error('title')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>News Description:</strong>
                <textarea class="form-control" style="height:150px" name="description" placeholder="News Description"></textarea>
                @error('description')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
        </div>        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>News Image:</strong>
                 <input type="file" name="image" class="form-control" placeholder="News Title">
                @error('image')
                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
               @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary ml-3">Submit</button>
    </div>
   
</form>
@endsection