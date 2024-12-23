<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
        <h1>Login</h1>
        <form action="" method="POST">
            @csrf
            <label for="email">Почта:</label>
            <input type="email" name="email" required>
            <label for="password">Пароль:</label>
            <input type="password" name="password" required>
            <button type="submit">Login</button>
        </form>
</body>
</html>