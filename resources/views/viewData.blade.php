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
  <h2>xlsx Data</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>{{$data[0][0]}}</th>
        <th>{{$data[0][1]}}</th>
        <th>{{$data[0][2]}}</th>
      </tr>
    </thead>
    <tbody>
        @php
            for ($i = 1; $i < count($data); $i++) {@endphp
                <tr>
                    <th>{{$data[$i][0]}}</th>
                    <th>{{$data[$i][1]}}</th>
                    <th>{{$data[$i][2]}}</th>
                </tr>
            @php }
        @endphp
    </tbody>
  </table>
</div>
<a href="{{ url()->previous() }}">Go Back</a>
</body>
</html>
