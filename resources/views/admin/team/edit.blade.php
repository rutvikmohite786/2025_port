@extends('layouts.admin')
@section('content')
<div class="container">
<form method="post" action="{{route('team.update')}}" enctype="multipart/form-data" id="teamform">
  @csrf
  <input type="hidden" value="{{$data->id}}" name="id">
  <div class="form-group">
    <label for="name">Name</label>
    <input name="name" type="text" value="{{$data->name}}" class="form-control" id="name" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="designation">Designation</label>
    <input name="designation" value="{{$data->designation}}" type="text" class="form-control" id="designation" placeholder="Enter designation">
  </div>
  <div class="form-group">
    <label for="title">Description</label>
    <textarea name="desc" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$data->description}}</textarea>
  </div>
  <div class="form-group">
    <img src="{{asset('images/team'.'/'.$data->image)}}" alt="Image" class="adminportimage">
  </div>
  <div class="form-group">
    <label for="image_edit">Example file input</label>
    <input type="file" class="form-control-file" id="image_edit" name="image_edit">
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
  <a type="button" href="javascript:void(0);" onclick="window.history.back();" class="btn btn-success">Back</a>
</form>
</div>
@endsection
@section('footer')
<script src="{{asset('js/page.js')}}"></script>
<script src="{{asset('js/team.js')}}"></script>

@endsection
