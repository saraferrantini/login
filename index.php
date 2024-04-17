<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {display: flex;
        justify-content: center;}
        form {display: flex;
        flex-direction: column;
    width: 300px;}
    form > input {margin-bottom: 20px;}
    </style>
</head>
<body>
    <form action="register.php" method="POST" >
        <h2>Registrati</h2>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required >

        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>

        <input type="submit" value="invia">
        <p>Hai già un account? <a href="login.html">Accedi</a></p>
    </form>
</body>
</html>

<!-- struttura html del form della REGISTRAZIONE -->