@extends('layouts.app')
@section('content')

<div class="container"> 

<ul class="nav left-content-center nav-pills">
  <li class="nav-item">
    <a class="nav-link " href="{{ url('/artist') }}">Artist</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('/album') }}">Album</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('/track') }}">Track</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{ url('/played') }}">Played</a>
  </li>
</ul>

<h3 class="lead-strong">Played
<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-file-earmark-music-fill" viewBox="0 0 16 16">
  <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM11 6.64v1.75l-2 .5v3.61c0 .495-.301.883-.662 1.123C7.974 13.866 7.499 14 7 14c-.5 0-.974-.134-1.338-.377-.36-.24-.662-.628-.662-1.123s.301-.883.662-1.123C6.026 11.134 6.501 11 7 11c.356 0 .7.068 1 .196V6.89a1 1 0 0 1 .757-.97l1-.25A1 1 0 0 1 11 6.64z"/>
</svg>
<a href="{{ url('/played/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
</h3> 
<table class="table table-bordered"> 
<thead class="thead-dark">
    <tr> 
    <th>Played</th>
    <th>Track</th>
    <th>Artist</th>
    <th>Album</th>
    <th>EDIT</th> 
    <th>DELETE</th> 
    </tr> 
@foreach($rows as $row) 
    <tr> 
    <td>{{ $row->played_id }}</td>
    <td>{{ $row->track_name }}</td>
    <td>{{ $row->artist_name }}</td> 
    <td>{{ $row->album_name }}</td>
    <td><a href="{{ url('played/' . $row->played_id . '/edit') }}" class="btn btn-primary btn-sm ">Edit</a</td> 
    <td>
        <form action="{{ url('/played/' . $row->played_id) }}" method="POST">
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