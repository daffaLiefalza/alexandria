<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Bootstrap css cdn -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

            <!-- Favicon -->
      <link rel="icon" type="image/x-icon" href="assets/images/logo.png">

    <link rel="stylesheet" href="assets/css/loginn.css">    
    
</head>
<body> 
    
    <!-- Login Form -->
    <div class="row">
        <div class="col-lg-6">
            <img src="assets/images/logo.png" alt="" style="display: block; margin: 0 auto;">
            <div class="wrapper">
                <h2>Login</h2>
                <p>Silahkan login dengan menggunakan akun yang sudah dibuat</p>
                <form action="#">
                    <p>Email</p>
                    <input type="text" class="form-control">
                    <p>Password</p>
                    <input type="password" class="form-control">
                    <div class="callback">
                        <p>Ingat Saya</p>
                        <p>Lupa Password?</p>
                    </div>
                    <a href="data_kelas.php" class="btn-login">Login</a>
                    <!-- <button type="submit" class="btn-login">Login</button> -->
                </form>
            </div>

        </div>
        
        <div class="col-lg-6 right-img">
            <img src="assets/images/login.svg" style="object-fit: cover; aspect-ratio: 16/9; width: 90%; height: 100%; text-align: center;" alt="">
        </div>
    </div>
                    <!-- Trigger ke dashboard guru -->
                    <a href="guru/data_nilai_guru.php" class="button-login">Login sebagai guru </a>


</body>
</html>

<!--   object-fit: cover;
  aspect-ratio: 16/9;
} -->