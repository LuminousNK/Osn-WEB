<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="style-login.css">
</head>
<body>
        <form method="post" action="login.html" class="forms">
            <label for="input_login">Логин</label>
            <input type="text" id="input_login" placeholder="Login" required>
            
            <label for="input_email">Электронная почта</label>
            <input type="email" id="input_email" placeholder="Email" required>
            
            <label for="input_pass">Пароль</label>
            <input type="password" id="input_pass" placeholder="Password" required>

            <button type="submit">Зарегистрироваться</button>
        </form>

    
</body>
</html>