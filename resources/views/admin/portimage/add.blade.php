@extends('layouts.admin')
@section('content')
<div class="container">
<form method="post" action="{{route('portfolio.image.store')}}" enctype="multipart/form-data" id="portfolioimg">
  @csrf
  <div class="form-group">
    <label for="port">select portfolio</label>
    <select class="form-control" id="port" name="port_id">
      <option value="">Please select portfolio</option>
      @foreach($data as $key => $value)
      <option value="{{$value->id}}">{{$value->title}}</option>
      @endforeach
    </select>
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
<script src="{{asset('js/portfolioimg.js')}}"></script>
@endsection