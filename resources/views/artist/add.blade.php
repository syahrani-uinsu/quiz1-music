@extends('layouts.app') 

@section('content') 

<div class="container"> 

<h3>Tambah Data Artist</h3> 
<form action="{{ url('/artist') }}" method="POST">
 
@csrf 
<table>
    
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