@extends('layouts.app') 

@section('content') 

<div class="container"> 

<h3>Tambah Data Played</h3> 
<form action="{{ url('/played') }}" method="POST">
 
@csrf 
<table>
     
    <div class="form-group">
    <lable for="">Track</lable> 
    <input type="text" name="track_name" class="form-control">
    </div>

    <div class="form-group">
    <lable for="">Artist</lable> 
    <input type="text" name="artist_name" class="form-control">
    </div>

    <div class="form-group">
    <lable for="">Album</lable> 
    <input type="text" name="album_name" class="form-control">
    </div>

    <div class="form-group">
    <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>
   
</table> 
</form> 
</div> 
@endsection