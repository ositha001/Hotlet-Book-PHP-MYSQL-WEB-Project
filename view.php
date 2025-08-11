<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <title>Travel LK</title>
</head>
<body class="bg-dark text-white">
    <style>
        #album{
            text-decoration: none;
        }
    </style>
    <nav class="navbar navbar-light bg-light justify-content-center mx-3">
        <a href="./index.php" class="navbar-brand">Travel LK</a>
       
       <?php 
            session_start();
            if(isset($_SESSION['user'])){
                ?>
                <a href="./logout.php" class="btn btn-danger btn-sm">Logout</a>
                <?php
            }else{
                ?>
                <a href="./login.php" class="btn btn-success btn-sm">Login</a>
                <?php
            }
        ?>
        
    </nav>

    <main class="my-5">
        <section class="jumbotron text-center">
            <div class="container text-white">
                <h3>Mahaweli Reach</h3>
                <img class="mt-4"  style="height:200px;" src="./img/hotel2.jpg" alt="Hotelimg">
                <img class="mt-4"  style="height:200px;" src="./img/5.jpg" alt="Hotelimg">
                <img class="mt-4"  style="height:200px;" src="./img/6.jpg" alt="Hotelimg">
                <hr>
                <p class=" lead ">The hotel is comprised of two main buildings, as well as a network of Bungalows with great views of the sea. In total, the hotel is comprised of 250 guest rooms of various types. The architectural & decorative style of the hotel is simple yet elegant: it aims to maintain a traditional Cretan style whilst highlighting the natural colours of Greece.
                </p>
                <hr>
            </div>
        </section>

        <section class="jumbotron text-center">
            <div class="container">
                <h3>Earls Regent</h3>
                <img class="mt-4" style="height:200px;" src="./img/hotel3.jpg" alt="Hotelimg">
                <img class="mt-4" style="height:200px;" src="./img/1.jpg" alt="Hotelimg">
                <img class="mt-4" style="height:200px;" src="./img/2.jpg" alt="Hotelimg">
                <hr>
                <p class=" lead">The hotel is comprised of two main buildings, as well as a network of Bungalows with great views of the sea. In total, the hotel is comprised of 250 guest rooms of various types. The architectural & decorative style of the hotel is simple yet elegant: it aims to maintain a traditional Cretan style whilst highlighting the natural colours of Greece.
                </p>
                <hr>
            </div>
        </section>

        <section class="jumbotron text-center">
            <div class="container">
                <h3>Ganga Addara</h3>
                <img class="mt-4" style="height:200px;" src="./img/hotel1.jpg" alt="Hotelimg">
                <img class="mt-4" style="height:200px;" src="./img/3.jpg" alt="Hotelimg">
                <img class="mt-4" style="height:200px;" src="./img/4.jpg" alt="Hotelimg">
                <hr>
                <p class=" lead">The hotel is comprised of two main buildings, as well as a network of Bungalows with great views of the sea. In total, the hotel is comprised of 250 guest rooms of various types. The architectural & decorative style of the hotel is simple yet elegant: it aims to maintain a traditional Cretan style whilst highlighting the natural colours of Greece.
                </p>
                <hr>
            </div>
        </section>

    </main>

    <!-- Footer section -->
     <hr>
     <footer class="">
        <p class="text-center">2025 &copy; Ositha Dayan Abeyrathna</p>
     </footer>
     <hr>
</body>
</html>