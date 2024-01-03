<!DOCTYPE html>
<html lang="en">
<head>
  <title>Trashed Techer list</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Trashed Techer list</h2>
  <p>The .table-hover class enables a hover state on table rows:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>title</th>
        <th>content</th>
        <th>position</th>
        <th>Facebook</th>
        <th>X</th>
        <th>Insta</th>
        <th>Restore</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($teachers as  $teacher)
    <tr>
        <td>{{$teacher->name}}</td>
        <td>{{$teacher->position}}</td>
        <td>{{$teacher->fb}}</td>
        <td>{{$teacher->x}}</td>
        <td>{{$teacher->x}}</td>
        <td>{{$teacher->insta}}</td>
        <td><a href="restoreteacher/{{ $teacher->id }}">Restore</a></td>
       <td><a href="fdteacher/{{$teacher->id}}">Delete</a></td>
      
      </tr>
      @endforeach
     
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
