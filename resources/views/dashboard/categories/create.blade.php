@extends('layouts.dashboard')
@section('title','Create Category')
@section('breadcrumb')
  @parent
  <li class="breadcrumb-item ">Categories</li>
  <li class="breadcrumb-item active">Create</li>
@endsection

@section('content')
  <form action="{{route('dashboard.categories.store')}}" method="post">
    
    <div class="form-group mb-3">
      <label for="name">Category Name</label>
      <input type="text" name="name" id="name" class="form-control">
    </div>

    <div class="form-group mb-3">
      <label for="parent_id">Category Parent</label>
      <select name="parent_id" id="parent_id" class="form-control">
        <option value="">No Parent</option>
      </select>
    </div>

    
    <div class="form-group mb-3">
      <label for="description">Description</label>
      <textarea name="description" id="description" class="form-control"></textarea>
    </div>


    <div class="form-group mb-3">
      <label for="image">Thumbnail</label>
      <input type="file" name="image" id="image" class="form-control">
    </div>


    <div class="form-group mb-3">
      <button type="submit" class="btn btn-primary">Save</button>
      <a href="{{route('dashboard.categories.index')}}" class="btn btn-light ml-2">Cansel</a>
    </div>


  </form>
@endsection






    