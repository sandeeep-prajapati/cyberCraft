<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style/reportSection.css">
    <title>Report Section</title>
</head>
<body>
    <div class="contain-fluid">
        <div class="row p-4 text-center"><h2 class ="mainLine">After report our team will respond you within 24 hours</h2></div>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 formBody">
                <form action="reportSection" method="post">
                    @csrf
                    <label calss="myLables" for="issue">Which type of problem this item have ?</label>
                    <br>
                    <select name="issue" class="inputBox" id="">
                        <option value="notes">It is Note Book</option>
                        <option value="book">It is Book</option>
                    </select>
                    <br>
                    <span style="color : #86A789">@error('issue'){{$message}}@enderror</span>
                    <br>
                    <label calss="myLables" for="issueDiscription">Issue Discription</label>
                    <br>
                    <textarea type="text" name="issueDiscription" class="inputBox" rows="5" id=""></textarea>
                    <br>
                    <span style="color : #86A789">@error('issueDiscription'){{$message}}@enderror</span>
                    <br>
                    <input type="submit" class="inputBox bg-success text-white" id="">
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