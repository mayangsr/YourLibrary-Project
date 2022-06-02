<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yogya Escape</title>
    <link rel="icon" type="image/x-icon" href="./asset/Escape white.png">
    @yield('bootstrap')
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo asset('css/style-main.css')?>" type="text/css"> 

    @yield('styling')
</head>
<body>
    <header>
        <img class="navbar-brand" href="#" src="./asset/icon.png">
        <nav class="navbar">
            <a href="home">Home</a>
            <a href="yourbooks">YourBooks</a>
            <a href="books">Books</a>
        </nav>
    </header>
    @yield('Container')
</body>