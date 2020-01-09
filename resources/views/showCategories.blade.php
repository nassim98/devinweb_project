<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

</head>

<body>
    <h1 class="title m-b-md">Categories list :</h1>

    @foreach($Categories as $category)
        <div class="breadcrumb">
            <div class="text-center"> Name : "{{$category->name}}" </div>
            <i class="text-center" > <br/> Slug : {{$category->Slug}}</i>
        </div>

        <div class="text-center">
            <a href="{{route('deleteCat',['id'=>$category->id])}}" class="text-right">Delete<-></a>
            <a href="{{route('updateCat',['id'=>$category->id])}}" class="text-left">Update</a>
            <a href="storage/upload/{{$category->file_name}}" download="{{$category->file_name}}"> {{$category->file_name}} </a>
        </div>
    @endforeach
</body>
</html>
