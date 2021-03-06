
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">    
   
    <link rel="stylesheet" href="View/css/style.css">

    <title>Zippy's Used Autos'</title>
</head>
<body class="container-fluid text-center">
    <header>
    <?php if($action != 'register' && !isset($_SESSION['userid']) && $action != 'logout') { ?>
        <a class="register_link" href=".?action=register">Register</a>
    <?php } else if($action != 'register' && isset($_SESSION['userid']) && $action != 'logout') { ?>
        <p class="register_link">Welcome, <?= $_SESSION['userid']; ?>! (<a href=".?action=logout">Sign Out</a>)</p>
    <?php } else { ?>
        <div class="register_link">&nbsp;</div>
    <?php } ?>
    </header>
    <main>
    <h1 class="text-center">🚘 Zippy's Used Autos 🚘</h1>
    