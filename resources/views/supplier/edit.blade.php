@extends('layouts.conquer2')
@section('frmsupp')
<form method="POST" action="{{url('suppliers/'.$data->id)}}">
@csrf
@method("PUT")
<div class="form-group">
    <label for="fname" name="fname" id="fname">Name:</label>
    <input type="text" class="form-control" id="gname" name="gname" value="{{$data->name}}">
  </div>
  <div class="form-group">
    <label for="faddress" name="faddress" id="fname">Address:</label>
    <input type="text" class="form-control" id="gaddress" name="gaddress" value="{{$data->address}}">
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
  <button type="submit" class="btn btn-default">Cancel</button>
</form>
@endsection