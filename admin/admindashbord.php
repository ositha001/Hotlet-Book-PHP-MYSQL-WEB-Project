<?php include('../dbcon.php');?>
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
<body class="bg-dark text-white"> 
    <nav class="fixed-top navbar navbar-light bg-light justify-content-between mx-3 p-2">
        <a href="../index.php" class="navbar-brand">Travel LK</a>
        <a href="./adminlogout.php" class="btn btn-warning btn-sm">Admin Logout</a>
    </nav>

    <main class="my-5 container">
        <h2 class="text-center my-2">WELCOME DASHBOARD</h2>
        <hr>
        <a href="addNewUser.php" type="button" class="btn btn-primary">ADD NEW USER</a>
        <hr>
        <table class="table table-striped table-dark col-12">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">@EMAIL</th>
      <th scope="col">GENDER</th>
      <th scope="col">CITY</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    
    $sql = "SELECT * FROM user";
    $res = mysqli_query($con,$sql);

    if(mysqli_num_rows($res) > 0){
        while($row = mysqli_fetch_assoc($res)){
            ?>
              <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['gender'];?></td>
                <td><?php echo $row['city'];?></td>
                <td>
                    <a href="./useredit.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-sm">EDIT</a>
                    <a href="./userdelete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">DELETE</a>
                </td>
                </tr>
            <?php
        }
    }
    ?>

  </tbody>
</table>
    </main>

    <!-- Footer section -->
     
     <footer class="fixed-bottom text-muted">
        <hr>
        <p class="text-center">2025 &copy; Ositha Dayan Abeyrathna</p>
         <hr>
     </footer>
    
</body>
</html>