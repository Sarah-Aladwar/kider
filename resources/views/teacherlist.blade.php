<!DOCTYPE html>
<html lang="en">
<head>
  <title>Teacher List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Teacher List</h2>         
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Teacher name</th>
        <th>Position</th>
        <th>Facebook</th>
        <th>Twitter</th>
        <th>Instagram</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($teacher as $teacher)
      <tr>
        <td>{{ $teacher->name }}
        <td>{{ $teacher->position }}</td>
        <td>{{ $teacher->fb }}</td>
        <td>{{ $teacher->x }}</td>
        <td>{{ $teacher->insta }}</td>
        <td><a href="editteacher/{{ $teacher->id }}">Edit</a></td>
        <td><a href="deleteteacher/{{ $teacher->id }}" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>