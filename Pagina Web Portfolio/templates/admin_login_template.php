<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/admin_login.css">
    <title>Admin Login</title>
</head>
<body>
    <div class="main">
        <fieldset>
            <legend>Admin Panel</legend>
            <form action="" method="POST">
                <label for="username">Username</label>
                    <input class="username" id="username" name="username" type="text">
                <label for="password">Password</label>
                    <input class="password" id="password" name="password" type="password">
                <input type="submit" value="LOG IN">
            </form>
            <ul class="errors">
                <?php 
                    if(isset($errors[0])){
                        print_r($errors[0]);
                    }
                ?>
            </ul>
        </fieldset>
    </div>
</body>
</html>