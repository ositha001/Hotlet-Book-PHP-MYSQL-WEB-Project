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
    <nav class="navbar navbar-light bg-dark justify-content-between mx-3">
        <a href="./index.php" class="navbar-brand text-white">Travel LK</a>
       
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
            <div class="container">
                <h1 class="jumbotron-heading">Welcome To Central Province</h1>
                <hr>
                <p class=" lead">The hotel is comprised of two main buildings, as well as a network of Bungalows with great views of the sea. In total, the hotel is comprised of 250 guest rooms of various types. The architectural & decorative style of the hotel is simple yet elegant: it aims to maintain a traditional Cretan style whilst highlighting the natural colours of Greece.
                </p>
                <hr>
            </div>
        </section>

        <div class="album py-5 bg-dark" id="album">
            <div class="container">
               <div class="row"> 

                    <div class="col-md-4">
                         <div class="card mb-4 box-shadow">
                            <img spellcheck="card-img-top" style="height:200px;" src="./img/hotel3.jpg" alt="Hotelimg">
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde dolore recusandae fugiat. Recusandae fugiat enim ducimus odit vitae et vero dicta quos? Qui quo nulla deleniti repudiandae magni doloribus. Voluptates iure laboriosam, aliquid accusantium, soluta quia laudantium a numquam maiores recusandae dolores maxime rem.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="./view.php" class=" btn btn-outline-primary btn-sm">View</a>
                                        <a href="./booking.php" class=" btn btn-outline-success btn-sm">Book Now</a>
                                    </div>
                                    <small class="text-danger">Rs. 15000 Per Day</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                         <div class="card mb-4 box-shadow">
                            <img spellcheck="card-img-top" style="height:200px;" src="./img/hotel1.jpg" alt="Hotelimg">
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde dolore recusandae fugiat. Recusandae fugiat enim ducimus odit vitae et vero dicta quos? Qui quo nulla deleniti repudiandae magni doloribus. Voluptates iure laboriosam, aliquid accusantium, soluta quia laudantium a numquam maiores recusandae dolores maxime rem.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                       <a href="./view.php" class=" btn btn-outline-primary btn-sm">View</a>
                                        <a href="./booking.php" class=" btn btn-outline-success btn-sm">Book Now</a>
                                    </div>
                                    <small class="text-danger">Rs. 25000 Per Day</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                         <div class="card mb-4 box-shadow">
                            <img spellcheck="card-img-top" style="height:200px;" src="./img/hotel2.jpg" alt="Hotelimg">
                            <div class="card-body">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde dolore recusandae fugiat. Recusandae fugiat enim ducimus odit vitae et vero dicta quos? Qui quo nulla deleniti repudiandae magni doloribus. Voluptates iure laboriosam, aliquid accusantium, soluta quia laudantium a numquam maiores recusandae dolores maxime rem.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                       <a href="./view.php" class=" btn btn-outline-primary btn-sm">View</a>
                                        <a href="./booking.php" class=" btn btn-outline-success btn-sm">Book Now</a>
                                    </div>
                                    <small class="text-danger">Rs. 45000 Per Day</small>
                                </div>
                            </div>
                        </div>
                    </div>

               </div>
            </div>
        </div>
    </main>

    <!-- Footer section -->
     <hr>
     <footer>
        <p class="text-center">2025 &copy; Ositha Dayan Abeyrathna</p>
     </footer>
     <hr>
</body>
</html>