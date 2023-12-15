<!DOCTYPE html>
<html lang="en">
<head>
  <title>xlsx Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Data</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $row)
          <tr>
            <td>{{$row['name']}}</td>
            <td>{{$row['email']}}</td>
            <td>{{$row['phone']}}</td>
        </tr>
            
        @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
