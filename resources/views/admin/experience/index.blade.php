@extends('layouts.admin')
@section('content')
<div class="container">
@include('admin.message')
    <a type="button" href="{{route('experience.add')}}" class="btn btn-primary">Add Data</a>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Company</th>
                <th scope="col">Location</th>
                <th scope="col">year</th>
                <th scope="col">For use</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @if($data->count()>0)
            @foreach($data as $key => $value)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$value->title}}</td>
                <td>{{$value->description}}</td>
                <td>{{$value->company_name}}</td>
                <td>{{$value->location}}</td>
                <td>{{$value->year}}</td>
                <td>{{$value->for_use}}</td>
                <td> <a type="button" href="/admin/experience/edit/{{$value->id}}" class="btn btn-primary update">edit</a>
                    <a type="button" href="/admin/experience/delete/{{$value->id}}" class="btn btn-danger delete">delete</a></td>
            </tr>
            @endforeach
            @else
            <tr>
                <td>
                    <h1>No data found</h1>
                </td>
            </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
@section('footer')
<script src="{{asset('js/page.js')}}"></script>
@endsection
