
@extends('layouts.conquer2')

<li>
     <a href="#">Welcome</a>
  </li>
   <li >
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="#" onclick="showInfo()">
        <i class="icon-bulb"></a></i>
     </li> 		
<div id='showinfo'></div>
@section('contentMed')
<!-- <div class="container"> -->
  <h2>List Medicine</h2>
  <p>The .table-hover class enables a hover state on table rows:</p>            
  <table class="C">
    <thead>
      <tr>
        <th>Name</th>
        <th>Form</th>
        <th>Formula</th>
        <th>Description</th>
        <th>Faskes TK1</th>
        <th>Faskes TK2</th>
        <th>Faskes TK3</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Category Id</th>
        <th>kai </th>
      </tr>
    </thead>
    <tbody>
    @foreach($listdata as $li)  
    <tr>
        
        <td>{{ $li->generic_name }}</td>
        <td>{{ $li->form }}</td>
        <td>{{ $li->restriction_formula }}</td>
        <td>{{ $li->Description }}</td>
        <td>{{ $li->faskes_tk1 }}</td>
        <td>{{ $li->faskes_tk2 }}</td>
        <td>{{ $li->faskes_tk3 }}</td>
        <td>{{ $li->created_at }}</td>
        <td>{{ $li->updated_at }}</td>
        <td>{{ $li->category_id }}</td>
        <td>
        <a class="btn btn-default" data-toggle="modal" href="#detail_{{$li->id}}" 
  data-toggle="modal">{{ $li->generic_name }}</a>  
 
        <div class="modal fade" id="detail_{{$li->id}}" tabindex="-1" role="basic" aria-hidden="true">
  <div class="modal-dialog">
     <div class="modal-content">
        <div class="modal-header">
           <h4 class="modal-title">{{$li->generic_name}}</h4>
        </div>
        <div class="modal-body">
        <div class="modal-body">
        <img src="{{ asset('img/imgMed/'.$li->image.'.png')}}" height='200px' />
        </div>
        </div>
        <div class="modal-body">
                 <p>{{$li->Description}}</p>
        </div>
	<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
     </div>
  </div>
</div>
        </td>
       
      </tr>
      @endforeach
    </tbody>
  </table>
<!-- </div> -->


@endsection





<!-- @foreach($listdata as $li)
<table>
  <div class="col-sm-3 col-md-6 col-lg-4">
    <img src=" {{ asset ('img/imgMed/'.$li->image.'.png') }}" >
      <div class="row">
        <p style="text-align:center;">{{ $li->generic_name }}</p></br>
        <p style="text-align:center;">{{ $li->form }}</p></br>
      </div>
  </div> -->
  <!-- <div class="row">
  
    <div class="col-sm-3 col-md-6">
    <img src=" {{ asset ('img/imgMed/'.$li->image.'.png') }}" >
    </div>
    <div class="col-lg-6">
    name = {{ $li->generic_name }}
    </div>
    <div class="col-lg-6">
    restriction formula= {{ $li->restriction_formula }}
    </div>
  </div> -->

<!-- </table>
@endforeach -->


