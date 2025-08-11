
<?php 
    require './dbcon.php';
    session_start();

    //User Register
    if(isset($_POST['register'])){
        $uname = $_POST['name'];
        $uemail = $_POST['uemail'];
        $upass = $_POST['upass'];
        $ugender = $_POST['ugender'];
        $ucity = $_POST['city'];

        //Insert Query
        $sql = "INSERT INTO user(name,email,pw,gender,city) VALUES ('$uname','$uemail','$upass','$ugender','$ucity')";

        //Execute query
        $res = mysqli_query($con,$sql);

        if($res){
            echo "Success";
            header('location:login.php');
        }else{
            header('location:register.php');
        }
    }

    if(isset($_POST['login'])){

        $uemail =$_POST['uemail'];
        $upass = $_POST['upass'];

        $sql = "SELECT * FROM user WHERE email = '$uemail' AND pw = '$upass'";
        $res = mysqli_query($con,$sql);

        if(mysqli_num_rows($res) > 0){
            $_SESSION['user'] = $uemail; 
            header('location:booking.php');
        }else{
            header('location:login.php');
        }
    }

    //booking

    if(isset($_POST['booking'])){
        $uemail = $_POST['uemail'];
        $hotelname = $_POST['hotel'];
        $startdate = $_POST['sdate'];
        $enddate = $_POST['edate'];

        $sql = "INSERT INTO booking(uemail,hotel,startdate,enddate) VALUES ('$uemail','$hotelname','$startdate','$enddate')";

        $res = mysqli_query($con,$sql);

        if($res){
            echo "Booking Added";
            header('location:bookingSuccessPage.php');
        }else{
            echo "Error";
        }
    }

    //Admin Login
    if(isset($_POST['adminlogin'])){
        $username = $_POST['username'];
        $pw = $_POST['adminpw'];

        $sql = "SELECT * FROM admin WHERE username = '$username' AND pw = '$pw'";

        $res = mysqli_query($con,$sql);

        if(mysqli_num_rows($res) > 0){
            $_SESSION['admin'] = $username;
            header('location:admin/admindashbord.php');
        }else{
            header('location:admin/adminlogin.php');
        }
    }

    //Add user through admin
        if(isset($_POST['aUserRegister'])){
        $uname = $_POST['name'];
        $uemail = $_POST['uemail'];
        $upass = $_POST['upass'];
        $ugender = $_POST['ugender'];
        $ucity = $_POST['city'];

        //Insert Query
        $sql = "INSERT INTO user(name,email,pw,gender,city) VALUES ('$uname','$uemail','$upass','$ugender','$ucity')";

        //Execute query
        $res = mysqli_query($con,$sql);

        if($res){
            header('location:./admin/admindashbord.php');
        }else{
            header('location:./admin/addNewUser.php');
        }
    }

       //User Update
    if(isset($_POST['adminUserUpdate'])){
        $id = $_POST['id'];
        $uname = $_POST['name'];
        $uemail = $_POST['uemail'];
        $upass = $_POST['upass'];
        $ugender = $_POST['ugender'];
        $ucity = $_POST['city'];

        //Insert Query
        $sql = "UPDATE user SET name='$uname',email='$uemail',pw='$upass',gender='$ugender',city='$ucity' WHERE id='$id'";

        //Execute query
        $res = mysqli_query($con,$sql);

        if($res){
            header('location:admin/admindashbord.php');
        }else{
            echo "<script>alert('Update UnsuccessFull !');</script>";
        }
    }
?>