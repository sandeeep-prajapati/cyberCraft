<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style/userDashboard.css">
    <title>User Dashboard</title>
</head>
<body>
    <div class="container-fluid">
        <!-- nav icons for group -->

        <div class="row">
            @foreach($data2 as $all)
            <div class="col-md-2 col-sm-2 navImage">
                <div class="imageDiv">
                    <img src="image/backgroundImage.jpg" alt="imageOfGroup" srcset="">
                    <p class="text-center">{{$all->groupName}}</p>
                </div>
            </div>
            @endforeach
            <!-- <div class="col-md-2 col-sm-2 navImage">
                <div class="">
                    <img src="image/backgroundImage.jpg" alt="imageOfGroup" srcset="">
                    <p class="text-center">@group name</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-2 navImage">
                <div class="">
                    <img src="image/backgroundImage.jpg" alt="imageOfGroup" srcset="">
                    <p class="text-center">@group name</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-2 navImage">
                <div class="">
                    <img src="image/backgroundImage.jpg" alt="imageOfGroup" srcset="">
                    <p class="text-center">@group name</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-2 navImage">
                <div class="">
                    <img src="image/backgroundImage.jpg" alt="imageOfGroup" srcset="">
                    <p class="text-center">@group name</p>
                </div>
            </div>
            <div class="col-md-2 col-sm-2 navImage">
                <div class="">
                    <img src="image/backgroundImage.jpg" alt="imageOfGroup" srcset="">
                    <p class="text-center">@group name</p>
                </div>
            </div> -->
        </div>
        <div class="row messaging-section">
            <div class="row">


                <!-- message wala section -->
                <div class="message">
                    <form action="messageDb" method ="post">
                        @csrf
                        <input name = "message" value="{{old('message')}}" class="col-md-9 messageInputBox" placeholder="Message" type="text">
                        <input type="submit" class="col-md-2 messageBtn text-white">
                        <br>
                        <span style="color : #86A789">@error('message'){{$message}}@enderror</span>
                    </form>
                </div>
            </div>
            <div class="row pt-4">
                <h1 class="text-center pt-3 pb-3">These are all books/notes are for sale...</h1>
                @foreach($data1 as $all)
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
                <!-- <div class="col-md-3 col-sm-4">
                    <div class="card">
                        <img src="image/backgroundImage.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Book/Notes title</h5>
                          <h6>@seller id</h6>
                          <p class="card-text">Some quick example text to build on the Book/Notes title and make up the bulk of the card's content.</p>
     
                          <a href="#" class="btn btn-primary">Edit</a>
                          <a href="#" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="card">
                        <img src="image/backgroundImage.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Book/Notes title</h5>
                          <h6>@seller id</h6>
                          <p class="card-text">Some quick example text to build on the Book/Notes title and make up the bulk of the card's content.</p>
     
                          <a href="#" class="btn btn-primary">Edit</a>
                          <a href="#" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    <div class="card">
                        <img src="image/backgroundImage.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Book/Notes title</h5>
                          <h6>@seller id</h6>
                          <p class="card-text">Some quick example text to build on the Book/Notes title and make up the bulk of the card's content.</p>
     
                          <a href="#" class="btn btn-primary">Edit</a>
                          <a href="#" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="row pt-4">
                <h3 class="text-center pb-4">these are all your chat room created by you</h3>
                <div class="row">
                @foreach($data3 as $all)
                <div class="col-md-2 col-sm-2 navImage">
                    <div class="imageDiv">
                        <img src="image/backgroundImage.jpg" alt="imageOfGroup" srcset="">
                        <p class="text-center">{{$all->groupName}}</p>
                    </div>
                </div>
                @endforeach
                    <!-- <div class="col-md-2 col-sm-2 navImage">
                        <div class="imageDiv">
                            <img src="image/backgroundImage.jpg" alt="imageOfGroup" srcset="">
                            <p class="text-center">@group name</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 navImage">
                        <div class="">
                            <img src="image/backgroundImage.jpg" alt="imageOfGroup" srcset="">
                            <p class="text-center">@group name</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 navImage">
                        <div class="">
                            <img src="image/backgroundImage.jpg" alt="imageOfGroup" srcset="">
                            <p class="text-center">@group name</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 navImage">
                        <div class="">
                            <img src="image/backgroundImage.jpg" alt="imageOfGroup" srcset="">
                            <p class="text-center">@group name</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 navImage">
                        <div class="">
                            <img src="image/backgroundImage.jpg" alt="imageOfGroup" srcset="">
                            <p class="text-center">@group name</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2 navImage">
                        <div class="">
                            <img src="image/backgroundImage.jpg" alt="imageOfGroup" srcset="">
                            <p class="text-center">@group name</p>
                        </div>
                    </div>             
                </div> -->
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>