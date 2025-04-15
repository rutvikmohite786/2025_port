@extends('layouts.admin')
@section('content')
<div class="container">
<form method="post" action="{{route('portfolio.store')}}" enctype="multipart/form-data" id="portfolioform">
  @csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input name="title" type="text" class="form-control" id="title" value="{{$data->title}}" placeholder="Enter title">
  </div>
  <div class="form-group">
    <label for="tech">Example select</label>
    <select class="form-control" id="tech" name="tech">
      <option value="">Please select tech</option>
      @foreach($portTech as $key => $value)
      <option value="{{$value->id}}" {{$value->id==$data->techport->id ? 'selected' : ''}}>{{$value->name}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <img src="{{asset('images/portfolio'.'/'.$data->image)}}" alt="Image" class="adminportimage">
  </div>
   <div class="form-group">
    <label for="image">Example file input</label>
    <input type="file" class="form-control-file" id="image" name="image">
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
  <a type="button" href="javascript:void(0);" onclick="window.history.back();" class="btn btn-success">Back</a>
</form>
</div>
@endsection
@section('footer')
<script src="{{asset('js/page.js')}}"></script>
<script src="{{asset('js/portfolio.js')}}"></script>
@endsection