@extends('layouts.conquer2')

@section('title')
    Daftar Supplier
@endsection

@section('isisupp')

<h1>Daftar Supplier</h1>      
    @if(session('status'))
    <div class="alert alert-success">{{session('status')}}</div>
    @endif
  <a href="{{url('suppliers/create')}}" class='btn btn-xs btn-info'>Add New Suppliers</a>
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    @foreach($listdata as $li)  
    <tr>
        
        <td>{{ $li->id }}</td>
        <td>{{ $li->name }}</td>
        <td>{{ $li->address }}</td>
        <td><a href="{{ url('suppliers/'.$li->id.'/edit')}}" class='btn btn-xs btn-info'>edit</a>
        <br>
        @can('delete-permission', $li)
        <form method='POST' action="{{ url('suppliers/'.$li->id)}}">
            @csrf
            @method('DELETE')
            <input type="submit" value="delete" class='btn btn-danger btn-xs'
            onclick="if(!confirm('are you sure to delete this record ? ')) return false;"/>
          </form>
        @endcan
        </td>
       
      </tr>
      @endforeach
    </tbody>
  </table>
  
  @endsection