<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Subject</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Update Subject</h2>
  <form action="{{route('updatesubject', $subject->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
      <label for="name">Subject:</label>
      <input type="text" class="form-control" id="subject" placeholder="Enter subject" name="class_subject" value="{{ old('class_subject', $subject->class_subject) }}">
      @error('class_subject')
        <div class="alert alert-warning">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="name">Minimum Age:</label>
      <input type="number" class="form-control" id="min_age" placeholder="Enter minimum age" name="min_age" value="{{ old('min_age', $subject->min_age) }}">
      @error('min_age')
        <div class="alert alert-warning">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="name">Maximum Age:</label>
      <input type="number" class="form-control" id="max_age" placeholder="Enter maximum age" name="max_age" value="{{ old('max_age', $subject->max_age) }}">
      @error('max_age')
        <div class="alert alert-warning">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="name">Start Time:</label>
      <input type="time" class="form-control" id="start_time" placeholder="Enter start time" name="start_time" value="{{ old('start_time', $subject->start_time) }}">
      @error('start_time')
        <div class="alert alert-warning">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="name">End Time:</label>
      <input type="time" class="form-control" id="end_time" placeholder="Enter end time" name="end_time" value="{{ old('end_time', $subject->end_time) }}">
      @error('end_time')
        <div class="alert alert-warning">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="name">Price:</label>
      <input type="number" class="form-control" id="price" placeholder="Enter price" name="price" value="{{ old('price', $subject->price) }}">
      @error('price')
        <div class="alert alert-warning">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="name">Capacity:</label>
      <input type="number" class="form-control" id="capacity" placeholder="Enter capacity" name="capacity" value="{{ old('capacity', $subject->capacity) }}">
      @error('capacity')
        <div class="alert alert-warning">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
    <label for="category">Teacher:</label>
      <select name="teacher_id" id="">
        @foreach($teacher as $t)
          <option value="{{ $t->id }}" @selected($t->id == $subject->id)>{{$t->name}}</option>
        @endforeach
      </select>
      @error('teacher_id')
        <div class="alert alert-warning">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" id="image" name="image" value="{{ old('image', $subject->image) }}">
      <img src=" {{ asset('assets/images/'.$subject->image) }} " alt="client" style="width:250px;">
      @error('image')
       <div class="alert alert-warning">{{ $message }}</div>          
      @enderror
    </div>
    <button type="submit" class="btn btn-default">Update</button>
  </form>
</div>
</body>
</html> 