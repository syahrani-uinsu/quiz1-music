@extends('layouts.app')


@section('content')

<div class="container"> 
<ul class="nav left-content-center nav-pills">
  <li class="nav-item">
    <a class="nav-link " href="{{ url('/artist') }}">Artist</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="{{ url('/album') }}">Album</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('/track') }}">Track</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('/played') }}">Played</a>
  </li>
</ul>

<h3 class="lead-strong">Album
<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-music-note-beamed" viewBox="0 0 16 16">
  <path d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z"/>
  <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z"/>
  <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z"/>
</svg>
<a href="{{ url('/album/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
</h3> 
<table class="table table-bordered"> 
<thead class="thead-dark">
    <tr> 
    <th>Album</th>
    <th>Nama Artist</th>
    <th>EDIT</th> 
    <th>DELETE</th> 
    </tr> 
@foreach($rows as $row) 
    <tr> 
    <td>{{ $row->album_name }}</td>
    <td>{{ $row->artist_name }}</td> 
    <td><a href="{{ url('album/' . $row->album_id . '/edit') }}" class="btn btn-primary btn-sm ">Edit</a</td> 
    <td>
        <form action="{{ url('/album/' . $row->album_id) }}" method="POST">
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