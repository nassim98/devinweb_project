<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>
<h1>Update courses</h1>
<form method="post" action="{{route('updateCourseSubmit')}}">
    <div class="form-group" >
        <label for="name" > Name : </label>
        <input type="text" name="name" class="form-control" id="name" value="{{$courses->name}}">
    </div>
    <div class="form-group">
        <label for="description" > Description : </label>
        <input type="text" name="description" class="form-control" id="description" value="{{$courses->description}}">
    </div>
    <div class="form-group">
        <label for="slug" > Slug : </label>
        <input type="text" name="slug" class="form-control" id="slug" value="{{$courses->Slug}}">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-default">Update</button>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="id" value="{{$courses->id}}">
    </div>
</form>

</body>
</html>
