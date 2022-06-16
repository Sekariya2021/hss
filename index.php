<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Home Security System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" href="./css/favicon.png">
    <link rel="stylesheet" href="./css/login.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Vul uw gegevens in om in te loggen.</p>
        <form action = "/auth.php" method = "POST">
            <div class="form-group">
                <label>Gebruikersnaam</label>
                <input type = "text" id ="user" name  = "user" class="form-control"/>  
            </div>    
            <div class="form-group">
                <label>Wachtwoord</label>
                <input type = "password" id ="pass" name  = "pass" class="form-control"/>  
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" id="btn" value="Login">
            </div>
        </form>
    </div>
</body>
</html>
