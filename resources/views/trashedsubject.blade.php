<!DOCTYPE html>
<html lang="en">
<head>
  <title>Trashed Subject List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Trashed Subject List</h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Class Subject</th>
        <th>Minimum Age</th>
        <th>Maximum Age</th>
        <th>Start Time</th>
        <th>End Time</th>
        <th>Price</th>
        <th>Capacity</th>
        <th>Teacher</th>
        <th>Restore</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($subject as $s)
      <tr>
        <td>{{ $s->class_subject }}</td>
        <td>{{ $s->min_age }}</td> 
        <td>{{ $s->max_age }}</td>     
        <td>{{ $s->start_time }}</td>     
        <td>{{ $s->end_time }}</td>  
        <td>{{ $s->price }}</td>  
        <td>{{ $s->capacity }}</td>   
        <td>{{ $s->teacher->name }}</td>     
        <td><a href="restoresubject/{{ $s->id }}">Restore</a></td>
        <td><a href="fdsubject/{{ $s->id }}" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
      </tr>
      @endforeach
    </tbody>    
  </table>
</div>

</body>
</html>
 