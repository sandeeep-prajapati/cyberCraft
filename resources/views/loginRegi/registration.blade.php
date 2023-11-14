<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style/cyberCraftReg.css">
    <title>Cyber Craft Registration</title>
</head>
<body>
    <div class="contain-fluid">
        <div class="row p-4 text-center"><h2 class ="mainLine">Welcome to Cyber Craft</h2></div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 formBody">
                <form action="userRgistration" method="post">
                    @csrf
                    <label calss="myLables" for="name">User Name</label>
                    <br>
                    <input type="text" name="userName" class="inputBox" value="{{old('userName')}}" id="">
                    <br>
                    <span style="color : #86A789">@error('userName'){{$message}}@enderror</span>
                    <br>
                    <label calss="myLables" for="gender">Gender</label>
                    <br>
                    <input type="radio" name="gender" class="" value="male" id=""> : Male
                    <input type="radio" name="gender" class="" value="female" id=""> : Female
                    <br>
                    <span style="color : #86A789">@error('gender'){{$message}}@enderror</span>
                    <br>
                    <label calss="myLables" for="age">Age</label>
                    <br>
                    <input type="text" name="age" class="inputBox" value="{{old('age')}}" id="">
                    <br>
                    <span style="color : #86A789">@error('age'){{$message}}@enderror</span>
                    <br>
                    <label calss="myLables" for="address">Address</label>
                    <br>
                    <input type="text" name="address" class="inputBox" value="{{old('address')}}" id="">
                    <br>
                    <span style="color : #86A789">@error('address'){{$message}}@enderror</span>
                    <br>
                    <label calss="myLables" for="college">College Name</label>
                    <br>
                    <select name="collegeName" class="inputBox" id="">
                        <option value="ITM">ITM</option>
                        <option value="BIT">BIT</option>
                        <option value="KIPM">KIPM</option>
                    </select>
                    <br>
                    <br>
                    <label calss="myLables" for="collegeCity">College City</label>
                    <br>
                    <select name="collegeCity" class="inputBox" id="">
                        <option value="Maharajganj">Maharajganj</option>
                        <option value="Gorkhpur">Gorkhpur</option>
                        <option value="Lucknow">Lucknow</option>
                    </select>
                    <br>
                    <br>
                    <label calss="myLables" for="year">Year</label>
                    <br>
                    <select name="year" class="inputBox" id="">
                        <option value="1">First Year</option>
                        <option value="2">Second Year</option>
                        <option value="3">Third Year</option>
                        <option value="4">Fouth Year</option>
                        <option value="5">Fifth Year</option>
                    </select>
                    <br>
                    <br>
                    <label calss="myLables" for="mobileNumber">Mobile Number</label>
                    <br>
                    <input type="text" name="mobileNumber" value="{{old('mobileNumber')}}" class="inputBox" id="">
                    <br>
                    <span style="color : #86A789">@error('mobileNumber'){{$message}}@enderror</span>
                    <br>
                    <label calss="myLables" for="email">Email Address</label>
                    <br>
                    <input type="email" name="email"  value="{{old('email')}}" class="inputBox" id="">
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
                    <a class="myATag" href="cyberCraftLogin.html">Already an account... click here</a>
                    
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>