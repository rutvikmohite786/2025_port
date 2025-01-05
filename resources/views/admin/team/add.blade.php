@extends('layouts.admin')
@section('content')
<div class="container">
<form method="post" action="{{route('team.store')}}" enctype="multipart/form-data" id="teamform">
  @csrf
  <div class="form-group">
    <label for="name">Name</label>
    <input name="name" type="text" class="form-control" id="name" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="designation">Designation</label>
    <input name="designation" type="text" class="form-control" id="designation" placeholder="Enter designation">
  </div>
  <div class="form-group">
    <label for="title">Description</label>
    <textarea name="desc" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="image">Example file input</label>
    <input type="file" class="form-control-file" id="image" name="image">
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
</div>
@endsection
@section('footer')
<script src="{{asset('js/page.js')}}"></script>
<script src="{{asset('js/team.js')}}"></script>

@endsection
