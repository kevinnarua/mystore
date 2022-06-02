@extends('layouts.conquer2')

@section('frmctg')
<form method="POST" action="{{route('kategori_obat.store')}}">
@csrf
<div class="form-group">
    <label for="fname" name="fname" id="fname">Category Name:</label>
    <input type="text" class="form-control" id="gname" name="gname">
  </div>
  <div class="form-group">
    <label for="fdesc" name="fdesc" id="fname">Description:</label>
    <input type="text" class="form-control" id="gdesc" name="gdesc">
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
  <button type="submit" class="btn btn-default">Cancel</button>
</form>
@endsection 