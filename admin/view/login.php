<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">    
 <style>
    select, input[type="number"], input[type="text"] {
    border-radius: 5px;
    padding: 3px;
    margin-bottom: 10px;
}
    .edit_vehicle__form {
    border: 3px solid black;
    border-radius: 5px;
    display: flex;
    flex-direction: column;
    margin: 0 auto;
    padding: 30px;
    max-width: 300px;
}
 </style>
</head>
<body class="container-fluid text-center">
    <main>
        <h1 class="text-center">🚘 Zippy's Used Autos 🚘</h1>
        <h2 class="text-center">Admin</h2>

<?php 
    
    if(isset($login_message)) { ?>
        <h3><?= $login_message ?></h3>
    <?php } else { ?>
        <h3>Please fill in your credentials to login</h3>
    <?php } ?>

    <form action="." method="POST" class="edit_vehicle__form">
        <input type="hidden" name="action" value="login">
        <div class="add_vehicle__input">
            <label for="username_login">Username:</label>
            <input id="username_login" type="text" name="username" required>
        </div>
        <div class="add_vehicle__input">
            <label for="password_login">Password:</label>
            <input id="password_login" type="password" name="password" required>
        </div>
        <button class="btn btn-primary add_vehicle__button" type="submit">Login</button>
    </form>