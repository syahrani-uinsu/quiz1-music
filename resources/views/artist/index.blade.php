@extends('layouts.app')


@section('content')

<div class="container"> 

<ul class="nav left-content-center nav-pills">
  <li class="nav-item">
    <a class="nav-link active" href="{{ url('/artist') }}">Artist</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('/album') }}">Album</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('/track') }}">Track</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('/played') }}">Played</a>
  </li>
</ul>

<h3 class="lead-strong">Artist
<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-music-note" viewBox="0 0 16 16">
  <path d="M9 13c0 1.105-1.12 2-2.5 2S4 14.105 4 13s1.12-2 2.5-2 2.5.895 2.5 2z"/>
  <path fill-rule="evenodd" d="M9 3v10H8V3h1z"/>
  <path d="M8 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 13 2.22V4L8 5V2.82z"/>
</svg>
<a href="{{ url('/artist/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
</h3> 
<table class="table table-bordered"> 
<thead class="thead-dark">
    <tr> 
    <th>No</th>
    <th>Nama Artist</th>
    <th>EDIT</th> 
    <th>DELETE</th> 
    </tr> 
@foreach($rows as $row) 
    <tr> 
    <td>{{ $row->artist_id }}</td>
    <td>{{ $row->artist_name }}</td> 
    <td><a href="{{ url('artist/' . $row->artist_id . '/edit') }}" class="btn btn-primary btn-sm ">Edit</a</td> 
    <td>
        <form action="{{ url('/artist/' . $row->artist_id) }}" method="POST">
        <input name="_method" type="hidden" value="DELETE">

        @csrf 
        <button class="btn btn-danger btn-sm">Delete</button> 
        </form>
    </td> 

    </tr> 
@endforeach 
</table> 
</div>

@endsection