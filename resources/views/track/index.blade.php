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
    <a class="nav-link active" href="{{ url('/track') }}">Track</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ url('/played') }}">Played</a>
  </li>
</ul>

<h3 class="lead-strong">Track Music
<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-vinyl-fill" viewBox="0 0 16 16">
  <path d="M8 6a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm0 3a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4 8a4 4 0 1 0 8 0 4 4 0 0 0-8 0z"/>
</svg>
<a href="{{ url('/track/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
</h3> 
<table class="table table-bordered"> 
<thead class="thead-dark">
    <tr> 
    <th>Track</th>
    <th>Artist</th>
    <th>Album</th>
    <th>EDIT</th> 
    <th>DELETE</th> 
    </tr> 
</thead>
@foreach($rows as $row) 

    <tr> 
    <td>{{ $row->track_name }}</td>
    <td>{{ $row->artist_name }}</td> 
    <td>{{ $row->album_name }}</td>
    <td><a href="{{ url('track/' . $row->track_id . '/edit') }}" class="btn btn-primary btn-sm ">Edit</a</td> 
    <td>
        <form action="{{ url('/track/' . $row->track_id) }}" method="POST">
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