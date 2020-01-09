<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

</head>

<body>
<h1 class="title m-b-md">Courses list :</h1>

@foreach($Courses as $course)
    <div class="breadcrumb">
        <div class="text-center"> Name : "{{$course->name}}" </div>
        <div class="text-center" > <br/> Description : {{$course->description}}</div>
        <i class="text-center" > <br/><br/> Slug : {{$course->Slug}}</i>
    </div>

    <div class="text-center">
        <a href="{{route('deleteCourse',['id'=>$course->id])}}" class="text-right">Delete<-></a>
        <a href="{{route('updateCourse',['id'=>$course->id])}}" class="text-left">Update</a>
    </div>
@endforeach
</body>
</html>
