@extends('layouts.admin')
@section('content')
<div class="container">
@include('admin.message')
<a type="button" href="{{route('portfolio.detail.add')}}" class="btn btn-primary">Add Data</a>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">details</th>
      <th scope="col">link 1</th>
      <th scope="col">link 2</th>
      <th scope="col">duration</th>
      <th scope="col">Action</th>
    </tr>
  </thead> 
  <tbody>
    @if($data->count()>0)
    @foreach($data as $key => $value)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$value->details}}</td>
      <td>{{$value->link_1}}</td>
      <td>{{$value->link_2}}</td>
      <td>{{$value->duration}}</td>
      <td> <a type="button" href="/admin/portdetail/edit/{{$value->id}}" class="btn btn-primary update">edit</a>
      <a type="button" href="/admin/portdetail/delete/{{$value->id}}" class="btn btn-danger delete">delete</a></td>
    </tr>
    @endforeach
    @else
     <tr>
      <td><h1>No data found</h1></td>
    </tr>
    @endif
  </tbody>
</table>
</div>
@endsection
@section('footer')
<script src="{{asset('js/page.js')}}"></script>
@endsection
