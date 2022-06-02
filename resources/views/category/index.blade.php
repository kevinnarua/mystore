@extends('layouts.conquer2')

@section('title')
    Daftar Kategori Obat
@endsection

@section('content')
<h2>List Medicine</h2>
  <p>The .table-hover class enables a hover state on table rows:</p>            
  <table class="C">
    <thead>
      <tr>
        <th>Id</th>
        <th>Category Name</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
    @foreach($datas as $li)  
    <tr>
        
        <td>{{ $li->id }}</td>
        <td>{{ $li->categories_name }}</td>
        <td>{{ $li->description }}</td>
       
      </tr>
      @endforeach
    </tbody>
  </table>
  <div class="page-content">
    @if(session('status'))
    <div class="alert alert-success">{{session('status')}}</div>
    @endif
</div> 
  @endsection