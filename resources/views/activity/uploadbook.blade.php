<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style/cyberCraftLogin.css">
    <title>Upload Book/Notes</title>
</head>
<body>
    <div class="contain-fluid">
        <div class="row p-4 text-center"><h2 class ="mainLine">Upload your book/notes in Cyber Craft</h2></div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 formBody">
                <form action="uploadbookDb" method="post">
                    @csrf
                    <label calss="myLables" for="bookTitle">Book Title</label>
                    <br>
                    <input type="text" name="bookTitle" value="{{old('bookTitle')}}" class="inputBox" id="">
                    <br>
                    <span style="color : #86A789">@error('bookTitle'){{$message}}@enderror</span>
                    <br>
                    <label calss="myLables" for="bookDiscription">Book Discription</label>
                    <br>
                    <textarea type="text" name="bookDiscription" value = "{{old('bookDiscription')}}" class="inputBox" rows="5" id=""></textarea>
                    <br>
                    <span style="color : #86A789">@error('bookDiscription'){{$message}}@enderror</span>
                    <br>
                    <label calss="myLables" for="itemType">Type of Material</label>
                    <br>
                    <select name="itemType" class="inputBox" id="">
                        <option value="notes">It is Note Book</option>
                        <option value="book">It is Book</option>
                    </select>
                    <br>
                    <br>
                    <input type="submit" name="collegeName" class="inputBox bg-success text-white" id="">
                    <br>
                    <br>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>