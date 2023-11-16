<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .laginbutton {
            color: #FFF;
            background-color: #55741C;
            border-radius: 2px !important;
            border-color: transparent !important;
        }
        .laginbutton:hover {
            background-color: #FFC107;
            color: #000;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
    <form action="" id="login-frm">
        <div class="form-group">
        <label for="" class="control-label">Email</label>
        <input type="email" name="username" required="" class="form-control">
        </div>
        <div class="form-group">
        <label for="" class="control-label">Password</label>
        <input type="password" name="password" required="" class="form-control">
        <small><a href="" id="new_account">Create New Account</a></small><br>
        <small><a href="" id="login_admin">Log In as Admin</a></small>
        </div>
        <button class="button btn btn-info btn-sm rounded-0 laginbutton">Login</button>
    </form>
    </div>
</body>
</html>