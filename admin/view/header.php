<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">    
   
    <link rel="stylesheet" href="../View/css/style.css">

    <title>Zippy's Used Autos'</title>

    <style>
        /* admin */

td {
    font-size: 0.4rem;
}
@media only screen and (min-width: 375px) {
    td {
        font-size: 0.7rem;
    }   
}
.edit_vehicles_nav__header {
    padding-top: 20px;
}
.edit_vehicles_nav__link {
    font-size: 1.2rem;
}
.add_vehicle__header {
    margin: 30px auto;
    text-align: center;
}
.add_vehicle__form {
    border: 3px solid black;
    border-radius: 5px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    width: 80vw;
    margin: 10px auto;
    min-height: 50vh;
    padding: 30px;
    max-width: 1000px;
}
.add_vehicle__input {
   display: flex;
   flex-direction: column;
}
.add_vehicle__button {
    margin-top: 10px;
}
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
.edit_vehicle_table__td {
    padding: 5px 0;
}
.edit_make__input {
    margin: 0 auto;
    max-width: 300px;
}
.register_error_message {
    color: red;
    margin: 0 auto;
    padding-left: 0;
}
    </style>

</head>
<body class="container-fluid text-center">
    <header>
        <p class="register_link"><a href=".?action=logout">Sign Out</a></p>
    </header>
    <main>
        <h1 class="text-center">🚘 Zippy's Used Autos 🚘</h1>
        <h2 class="text-center">Admin</h2>
<?php include('../util/valid_admin.php'); ?>