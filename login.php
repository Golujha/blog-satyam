<?php include "config.php";?>
<?php include "header.php";
session_start();
?>
<?php include "footer.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-5 mx-auto mt-5">
                <div class="card bg-info">
                    <div class="card header mx-auto mt-1">Blog! Login your account.</div>
                    <div class="card-body">
                        <form action="" method="POST" >
                            <div class="mb-3">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <input type="submit" name="login_btn" class="btn btn-danger" value="login">
                            </div>

                            <?php
                            if(isset($_SESSION['error'])){
                                $error = $_SESSION['error'];
                                echo "<p class='bg-danger p-2 text-white'>".$error."</p>";
                                unset($_SESSION['error']);
                            }

                            ?>
                        </form>

                        <?php
                        if(isset($_POST['login_btn'])){
                            $email =mysqli_real_escape_string($config,$_POST['email']);
                            $password =mysqli_real_escape_string($config,sha1( $_POST['password']));
                            $sql = "SELECT * FROM user WHERE email='{$email}' AND password='{$password}'";
                            $query = mysqli_query($config,$sql);
                            $data = mysqli_num_rows($query);
                            if($data){
                                $result = mysqli_fetch_assoc($query);
                                $user_data = array($result['user_id'],$result['username'],$result['role']);
                                $_SESSION['user_data']=$user_data;
                                header("location:admin.php");

                            }
                            else{
                                $_SESSION['error']="Invalid email/password";
                                header("location:login.php");
                            }
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>


