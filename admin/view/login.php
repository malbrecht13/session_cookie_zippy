<?php
    include('header.php'); 

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
        <button class="btn btn-primary add_vehicle__button" type="submit">Register</button>
    </form>