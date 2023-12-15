<!DOCTYPE html>
<html lang="en">
<head>
  <title>Import & Export xlsx</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <form action="{{route('viewData')}}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="form-group">
        <label for="file"><h4>xlsx file</h4></label>
        <input type="file" class="form-control" id="file" placeholder="Enter xlsx file" name="file">
        </div>
        <div>
            <button type="submit" class="btn btn-default">Import</button>
            <a href="export" class="link-success">Export</a>
        </div>
        

    </form>
</div>

</body>
</html>
