@extends('layouts.admin')
@section('content')
<div class="container">
<form method="post" action="{{route('blog.update')}}" id="blogform" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="id" value="{{ $data->id }}">
  <div class="form-group">
    <label for="title">Title</label>
    <input name="title" type="text" class="form-control" id="title" placeholder="Enter title" value="{{ $data->title }}" required>
  </div>
  <div class="form-group">
    <label for="desc">Description</label>
    <textarea name="desc" class="form-control" id="desc" rows="3" placeholder="Enter description" required>{{ $data->description }}</textarea>
  </div>
  <div class="form-group">
    <label for="image">Current Image</label>
    @if($data->image)
        <img src="{{ asset('images/blog/' . $data->image) }}" alt="Current image" style="max-width: 200px; height: auto;">
    @endif
  </div>
  <div class="form-group">
    <label for="image">New Image (Leave empty to keep current)</label>
    <input name="image" type="file" class="form-control" id="image" accept="image/*">
  </div>
  <div class="form-group">
    <label for="url">External URL (Optional)</label>
    <input name="url" type="url" class="form-control" id="url" placeholder="Enter external URL if applicable" value="{{ $data->url }}">
  </div>
  <div class="form-group">
    <label for="tag">Tag</label>
    <input name="tag" type="text" class="form-control" id="tag" placeholder="Enter tag" value="{{ $data->tag }}">
  </div>
  <div class="form-group">
    <label for="date">Date</label>
    <input name="date" type="date" class="form-control" id="date" value="{{ $data->date }}">
  </div>
  <button type="submit" class="btn btn-primary">Update Blog</button>
</form>
</div>
@endsection
@section('footer')
<script src="{{asset('js/page.js')}}"></script>
<script src="{{asset('js/blog.js')}}"></script>
@endsection


