<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>
<h1>Add courses</h1>
<form method="post" action="{{route('submitCourse')}}">
    <div class="form-group" >
        <label for="name" > Course name : </label>
        <input type="text" name="name" class="form-control" id="name" >
    </div>
    <div class="form-group" >
        <label for="description" > Course description : </label>
        <input type="text" name="description" class="form-control" id="description" >
    </div>
    <div class="form-group">
        <label for="slug" > Course slug : </label>
        <input type="text" name="slug" class="form-control" id="slug" >
    </div>
    <div class="text-center">
        <button type="submit"  class="btn btn-primary">Submit</button>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
    </div>
</form>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
