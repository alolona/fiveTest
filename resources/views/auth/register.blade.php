<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
    </head>
    <body>
        <h1>Register</h1>
        <form action="" method="POST">
            @csrf
            <label for="name">Имя:</label>
            <input type="text" name="name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>
            
            <label for="password">Пароль:</label>
            <input type="password" name="password" required>

            <label for="password_confirmation">Повторный пароль:</label>
            <input type="password" name="password_confirmation" required>
           
            <button type="submit">Register</button>
        </form>
    </body>

    