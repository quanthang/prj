<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Chung Cư Hà Nội</title>
</head>
<body>
<form class="">
    <h1>Chung cư Hà Nội</h1>
    @csrf
    <div class="row">
        <div class="col-6 form-group">
            <input class="form-control" type="text" placeholder="name">
        </div>
        <div class="col-6 form-group">
            <input class="form-control" type="text" placeholder="address">
        </div>
    </div>
    <div class="row">
        <div class="col-4 form-group">
            <input class="form-control" type="text" placeholder="price">
        </div>
        <div class="col-4 form-group">
            <input class="form-control" type="text" placeholder="general_information">
        </div>
        <div class="col-4 form-group">
            <input class="form-control" type="text" placeholder="details">
        </div>
    </div>
    <div class="row">
        <div class="col-12 form-group">
            <input class="form-control" type="text" placeholder="thumbnail">
        </div>
        <div class="col-12 form-group">
            <input class="form-control" type="text" placeholder="status">
        </div>
    </div>
    <div>
        <input type="submit" name="submit">
    </div>

</form>

</body>
</html>
