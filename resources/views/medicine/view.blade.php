<!DOCTYPE html>
<html lang="en">
<head>
  <title>Show Medicine</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<style>
  div{
    border:1px solid black;
  }
</style>
<body>

<div class="container">
  <h2>Show Medicine</h2>
  <p>The .table-hover class enables a hover state on table rows:</p> 
  @if($message)           
  <table class="C">
    <thead>
      <tr>
        <th>Name</th>
        <th>Form</th>
        <th>Formula</th>
        <th>Description</th>
        <!-- <th>Faskes TK1</th>
        <th>Faskes TK2</th>
        <th>Faskes TK3</th> -->
        <!-- <th>Created At</th>
        <th>Updated At</th> -->
        <th>Category Id</th>
      </tr>
    </thead>
    <tbody>
     
    <tr>
        
        <td>{{ $message->generic_name }}</td>
        <td>{{ $message->form }}</td>
        <td>{{ $message->restriction_formula }}</td>
        <td>{{ $message->Description }}</td>
          <!-- <td>{{ $message->faskes_tk1 }}</td>
          <td>{{ $message->faskes_tk2 }}</td>
          <td>{{ $message->faskes_tk3 }}</td> -->
        <!-- <td>{{ $message->created_at }}</td>
        <td>{{ $message->updated_at }}</td> -->
        <td>{{ $message->refrate->categories_name }}</td>
       
      </tr>
    </tbody>
  </table>
  @else
  <H1>Data Tidak Ada</H1>
  @endif
</div>
</body>
</html>
