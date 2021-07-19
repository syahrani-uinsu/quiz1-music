@extends('layouts.app') 

@section('content') 

<div class="container"> 

<h3>Tambah Data Album</h3> 
<form action="{{ url('/album') }}" method="POST">
 
@csrf 
<table>
    
    <div class="form-group">
    <lable for="">Nama Album</lable> 
    <input type="text" name="album_name" class="form-control">
    </div>

    <div class="form-group">
    <lable for="">Nama Artist</lable> 
    <input type="text" name="artist_name" class="form-control">
    </div>

    <div class="form-group">
    <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>
   
</table> 
</form> 
</div> 
@endsection