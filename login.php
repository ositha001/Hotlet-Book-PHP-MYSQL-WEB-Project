<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <title>Travel LK</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light justify-content-between mx-3">
        <a href="./index.php" class="navbar-brand">Travel LK</a>
        <a href="./index.php" class="btn btn-warning btn-sm">Back To Home</a>
    </nav>

    <main class="my-5">
        <h2 class="text-center my-2">Welcome To User Login</h2>
        <form class="w-50 mx-auto mt-5" action="process.php" method="post">
            <div class="form-group">
                <label for="">Email Address</label>
                <input type="email" name="uemail" class="form-control" placeholder="Enter Email...">
            </div><br>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="upass" class="form-control" placeholder="Enter Password..">
            </div><br>

            <button type="submit" class="btn btn-primary col-5 " name="login">Login</button>
            <a href="./register.php" class="btn btn-info col-6  btn-sm">Don't Have An Account? Register</a>
        </form>
    </main>

    <!-- Footer section -->
     
     <footer class="fixed-bottom text-muted">
        <hr>
        <p class="text-center">2025 &copy; Ositha Dayan Abeyrathna</p>
         <hr>
     </footer>
    
</body>
</html>