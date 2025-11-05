@extends('layouts.admin')
@section('content')
<div class="container">
<form method="post" action="{{route('blog.store')}}" id="blogform" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input name="title" type="text" class="form-control" id="title" placeholder="Enter title" required>
  </div>
  <div class="form-group">
    <label for="desc">Description</label>
    <textarea name="desc" class="form-control" id="desc" rows="3" placeholder="Enter description" required></textarea>
  </div>
  <div class="form-group">
    <label for="image">Image</label>
    <input name="image" type="file" class="form-control" id="image" accept="image/*">
  </div>
  <div class="form-group">
    <label for="url">External URL (Optional)</label>
    <input name="url" type="url" class="form-control" id="url" placeholder="Enter external URL if applicable">
  </div>
  <div class="form-group">
    <label for="tag">Tag</label>
    <input name="tag" type="text" class="form-control" id="tag" placeholder="Enter tag">
  </div>
  <div class="form-group">
    <label for="date">Date</label>
    <input name="date" type="date" class="form-control" id="date">
  </div>
  <button type="submit" class="btn btn-primary">Add Blog</button>
</form>
</div>
@endsection
@section('footer')
<script src="{{asset('js/page.js')}}"></script>
<script src="{{asset('js/blog.js')}}"></script>
@endsection
