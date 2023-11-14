<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style/cyberCraftDashboard.css">
    <title>Cyber Craft Dashboard</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <h3 class="mainLine navText">Chat-Room</h3>
        </div>
        <div class="row mainNavImage">
            @foreach($data1 as $all)
            <div class="col-sm-2 col-md-2">
                <img class="navImage" src="image/backgroundImage.jpg" alt="" srcset="">
                <p class="text-center">{{$all->groupName}}</p>
            </div>
            @endforeach
            
        </div>
        <div class="row p-4">
            <div class="navButton ">
                <button class="mybutton bg-success text-white" onclick="">Create Your Chat-Room</button>
            </div>
        </div>
        
        <!-- senior bio section -->
        <hr class="m-3">

        <div class="row">
            <h2 class="mainLine navText">Your senior Details </h2>
            @foreach($data4 as $all)
            <div class="row p-3">
                <div class="col-sm-2 col-md-2">
                    <img class="navImage" src="image/backgroundImage.jpg" alt="" srcset="">
                </div>
                <div class="col-sm-8 col-md-8">
                    <div>
                        <h3>{{$all->userName}}</h3>
                        <p>{{$all->collegeName}}</p>
                        <p>{{$all->collegeCity}}</p>
                        <p>{{$all->gender}}</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2">
                    <button class="bg-success mybutton text-white">join Chat-Room</button>
                </div>
            </div>
            @endforeach
            
        </div>

        <!-- Junior bio section -->
        <hr class="m-3">

        <div class="row">
            <h2 class="mainLine navText">Your Junior Details </h2>
            @foreach ($data2 as $data)
            <div class="row p-3">
                <div class="col-md-2 col-sm-2">
                    <button class="bg-success mybutton text-white">join Chat-Room</button>
                </div>
                <div class="col-sm-8 col-md-8">
                    <div>
                        <h3>{{$data->userName}}</h3>
                        <p>{{$data->collegeName}}</p>
                        <p>{{$data->collegeCity}}</p>
                        <p>{{$data->gender}}</p>
                    </div>
                </div>
                <div class="col-sm-2 col-md-2">
                    <img class="navImage" src="image/backgroundImage.jpg" alt="" srcset="">
                </div>
            </div>
            @endforeach
            <!-- <div class="row p-3">
                <div class="col-md-2 col-sm-2">
                    <button class="bg-success mybutton text-white">join Chat-Room</button>
                </div>
                <div class="col-sm-8 col-md-8">
                    <div class="p-4">
                        <h3>@user name</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, veritatis! </p>
                    </div>
                </div>
                <div class="col-sm-2 col-md-2">
                    <img class="navImage" src="image/backgroundImage.jpg" alt="" srcset="">
                </div>
            </div> -->
        </div>

        <hr class="m-3">
        <!-- book details -->
        <div class="row pt-3">
            <h3 class="mainLine navText">Books/Notes are open to share</h3>
        </div>
        <div class="row">
            @foreach($data3 as $all)
                <div class="col-md-3 col-sm-4">
                    <div class="card">
                        <img src="image/backgroundImage.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{$all->bookTitle}}</h5>
                          <h6>@{{$all->itemType}}</h6>
                          <p class="card-text">{{$all->bookDiscription}}</p>
                          <a href="#" class="btn btn-primary">Edit</a>
                          <a href="#" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            @endforeach
            
        </div>

        <!-- search section -->
        <hr class="m-3">
        <div class="row p-4">
            <div class="col-md-6 d-flex align-items-center justify-content-center col-sm-6">
                <button class="footerButton p-2 btn bg-success text-white">
                    Search User 
                </button>
            </div>
            <div class="col-md-6  d-flex align-items-center justify-content-center col-sm-6">
                <button class="footerButton p-2 btn bg-success text-white">
                    Search Group
                </button>
            </div>
        </div>

    </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>