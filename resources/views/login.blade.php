<!DOCTYPE html>
<html lang="en">

<head>
    <title>Test</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .margin-top {
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 margin-top">
                <h3><center>Login Form</center></h3><br>
                <form action="/login" method='post'>
                    @csrf
                    <div class="form-group">
                        <label for="username">User Name:</label>
                        <input type="username" name='username' class="form-control" id="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name='password' class="form-control" id="password">
                    </div>
                    <button type="submit" class="btn btn-success pull-right">Login</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>