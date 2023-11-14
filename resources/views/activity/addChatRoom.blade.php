<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style/addChatRoom.css">
    <title>add Chat Room</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row p-4 text-center"><h2 class ="mainLine">Let's create new group for ChatRoom</h2></div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 formBody">
                <form action="addchatroom" method="post">
                    @csrf
                    <label calss="myLables" for="group name">Group Name</label>
                    <br>
                    <input type="text" name="groupName" value="{{old('groupName')}}" class="inputBox" id="">
                    <br>
                    <span style="color : #86A789">@error('groupName'){{$message}}@enderror</span>
                    <br>
                    <label calss="myLables" for="groupDiscription">Group Discription</label>
                    <br>
                    <textarea name="groupDiscription"  id="" class="inputBox" value="{{old('groupDiscription')}}" rows="5"></textarea>
                    <br>
                    <span style="color : #86A789">@error('groupDiscription'){{$message}}@enderror</span>
                    <br>
                    <label for="collegeName">College Name</label>
                    <br>
                    <select name="collegeName" class="inputBox" id="">
                        <option value="ITM">ITM</option>
                        <option value="BIT">BIT</option>
                        <option value="KIPM">KIPM</option>
                    </select>
                    <br>
                    <span style="color : #86A789">@error('collegeName'){{$message}}@enderror</span>
                    <br>
                    <label calss="myLables" for="collegeCity">College City</label>
                    <br>
                    <select name="collegeCity" class="inputBox" id="">
                        <option value="Maharajganj">Maharajganj</option>
                        <option value="Gorkhpur">Gorkhpur</option>
                        <option value="Lucknow">Lucknow</option>
                    </select>
                    <br>
                    <span style="color : #86A789">@error('collegeCity'){{$message}}@enderror</span>
                    <br>
                    <label calss="myLables" for="year">Year</label>
                    <br>
                    <select name="year" class="inputBox" id="">
                        <option value="1st">First Year</option>
                        <option value="2nd">Second Year</option>
                        <option value="3rd">Third Year</option>
                        <option value="4th">Fouth Year</option>
                        <option value="5th">Fifth Year</option>
                    </select>
                    <br>
                    <span style="color : #86A789">@error('year'){{$message}}@enderror</span>
                    <br>
                    <input type="checkbox"> : Every things is ok
                    <br>
                    <br>
                    <input type="submit" name="collegeName" class="inputBox bg-success text-white" id="" placeholder="Add New Group">
                    <br>
                    <br>                    
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>