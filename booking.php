
<?php 
    session_start();
    if(!isset($_SESSION['user'])){
        header('location:login.php');
    }
?>
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
        <a href="./logout.php" class="btn btn-warning btn-sm">Logout</a>
    </nav>

    <main class="my-5">
        <h2 class="text-center my-2">Book A Hotel</h2>
        <form class="w-50 mx-auto mt-5" action="process.php" method="post">
            <div class="row">
                <div class="col-6 form-group">
                    <label for="">Your Email : </label>
                    <input readonly type="email" name="uemail" value="<?php echo $_SESSION['user']; ?>" class="form-control border-info">
                </div>

                <div class="from-group col-6">
                    <label for="">Hotel Name :</label>
                    <select name="hotel" class="form-control border-info" id="">
                        <option disabled selected>Select An Hotel</option>
                        <option value="Mahaweli Reach">Mahaweli Reach</option>
                        <option value="Earls Regent">Earls Regent</option>
                        <option value="Ganga Addara">Ganga Addara</option>
                    </select>
                </div>
            </div><br><br>

            <div class="row">
                <div class="form-group col-6">
                    <label for="">When You Are Comming ?</label>
                    <input type="date" name="sdate" class="form-control border-info">
                </div>
                <div class="form-group col-6">
                    <label for="">When You Plane To Leave ?</label>
                    <input type="date" name="edate" class="form-control border-info">
                </div>
            </div>
            
            <button type="submit" class="btn btn-warning mt-5" name="booking">Book Hotel</button>
            
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