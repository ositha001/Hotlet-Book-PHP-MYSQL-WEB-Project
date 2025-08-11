<?php 
    session_start();
    if(!isset($_SESSION['admin'])){
        header('location:adminlogin.php');
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
<body class="bg-dark">

    <style>
        #gap_div{
            margin-bottom: 10px;
            /* margin-right: 10px; */
        }
    </style>

    <nav class="navbar navbar-light bg-light justify-content-between mx-3 p-2">
        <a href="../index.php" class="navbar-brand">Travel LK</a>
        <a href="./admindashbord.php" class="btn btn-warning btn-sm">BACK TO DASHBOARD</a>
    </nav>

    <main class="my-5 text-white container">
        <h2 class="text-center my-2">ADMIN - USER UPDATE</h2>
        <?php 
            $id = $_GET['id'];
            require '../dbcon.php';
            $sql = "SELECT * FROM user WHERE id = '$id'";
            $res = mysqli_query($con,$sql);
            if(mysqli_num_rows($res) > 0){
                //values found
                $row = mysqli_fetch_assoc($res);
                //Key : value
                ?>
                  <hr>
        <form class="w-50 mx-auto mt-5" action="../process.php" method="post">
            <input type="text" name="id" value="<?php echo $row['id']; ?>" hidden>    
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Name..." value="<?php echo $row['name']; ?>">
            </div><br>
            <div class="form-group">
                <label for="">Email Address</label>
                <input type="email" name="uemail" class="form-control" placeholder="Enter Email..." value="<?php echo $row['email']; ?>">
            </div><br>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="upass" class="form-control" placeholder="Enter Password.." value="<?php echo $row['pw'] ?>">
            </div><br>
             <div class="form-group">
                <label for="" class="mb-2">User Gender</label><br> 
                <?php 
                if($row['gender'] == 'male'){
                    ?>
                    <input type="radio" name="ugender" checked value="male"> Male
                    <div id="gap_div"></div>
                    <?php
                }else if($row['gender'] == 'female'){
                    ?>
                    <input type="radio" name="ugender" checked value="female"> Female
                    <div id="gap_div"></div>
                    <?php
                }
                ?>
                <label for="" class="mb-2">Update Gender</label><br>
                 <input type="radio" name="ugender"  value="male"> Male
                 <br><br>
                 <input type="radio" name="ugender"  value="female"> Female
            </div><br>
            <div class="form-group">
                <label for="">City</label>
                <input type="text" name="city" class="form-control" placeholder="Enter City.." value="<?php echo $row['city']; ?>">
            </div><br>

            <button type="submit" class="btn btn-success col-12" name="adminUserUpdate">UPDATE USER</button>
        
        </form>
                <?php
            }
            $sql 
        ?>
      
    </main>

    <!-- Footer section -->
     
     <footer class="fixed text-muted">
        <hr>
        <p class="text-center">2025 &copy; Ositha Dayan Abeyrathna</p>
         <hr>
     </footer>
    
</body>
</html>