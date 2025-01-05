@extends('layouts.admin')
@section('content')
<div class="container">
<form method="post" action="{{route('portfolio.detail.update')}}"  id="detailform">
<input type="hidden" value="{{$data->id}}" name="id">

  @csrf
  <div class="form-group">
    <label for="linl1">Link 1</label>
    <input name="link1" value="{{$data->link_1}}" type="text" class="form-control" id="link1" placeholder="Enter link">
  </div>
   <div class="form-group">
    <label for="link2">Link 2</label>
    <input name="link2" value="{{$data->link_2}}" type="text" class="form-control" id="link2" placeholder="Enter link">
  </div>
   <div class="form-group">
    <label for="duration">Duration</label>
    <input name="duration" value="{{$data->duration}}" type="text" class="form-control" id="duration" placeholder="Enter duration">
  </div>
  <div class="form-group">
    <label for="port">Example select</label>
    <select class="form-control" id="port" name="port">
      <option value="">Please select portfolio</option>
       @foreach($port_id as $key => $value)
      <option value="{{$value->id}}" {{$value->id==$data->detail->id ? 'selected' : ''}}>{{$value->title}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="title">Description</label>
    <textarea name="desc" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$data->details}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
</div>
@endsection
@section('footer')
<script src="{{asset('js/page.js')}}"></script>
<script src="{{asset('js/detail.js')}}"></script>
@endsection