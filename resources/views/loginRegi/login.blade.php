<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style/cyberCraftLogin.css">
    <title>Cyber Craft Registration</title>
</head>
<body>
    <div class="contain-fluid">
        <div class="row p-4 text-center"><h2 class ="mainLine">Welcome again to Cyber Craft</h2></div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 formBody">
                <form action="userLogin" method="POST">
                    @csrf
                    <label calss="myLables" for="name">User Name</label>
                    <br>
                    <input type="text" name="userName" value="{{old('userName')}}" class="inputBox" id="">
                    <br>
                    <span style="color : #86A789">@error('userName'){{$message}}@enderror</span>
                    <br>
                    <label calss="myLables" for="email">Email Address</label>
                    <br>
                    <input type="email" name="email" value="{{old('email')}}" class="inputBox" id="">
                    <br>
                    <span style="color : #86A789">@error('email'){{$message}}@enderror</span>
                    <br>
                    <label calss="myLables" for="password">Password</label>
                    <br>
                    <input type="password" name="password" value="{{old('password')}}" class="inputBox" id="">
                    <br>
                    <span style="color : #86A789">@error('password'){{$message}}@enderror</span>
                    <br>
                    <input type="checkbox"> : Every things is ok
                    <br>
                    <br>
                    <input type="submit" class="inputBox bg-success text-white" id="">
                    <br>
                    <br>
                    <a class="myATag" href="cyberCraftRegistration.html">I am new here... click here</a>
                    
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>