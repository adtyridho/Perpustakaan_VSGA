<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NovelOnline | Login</title>
    <link rel="icon" href="dist/img/library.png">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- External CSS file -->
    <link rel="stylesheet" href="CSS/style2.css">
    <!-- Custom CSS for background -->
    <style>
        body {
            background: url('dist/img/bg_library.jpg') no-repeat center center fixed;
            background-size: cover;
        }
        .login-box {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
        }
        .register-link {
            display: inline-block;
            margin-top: 10px;
        }
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <h3>
                <font color="green">
                    <b>Sistem Informasi Perpustakaan</b>
                </font>
            </h3>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <center>
                <img src="dist/img/library.png" width="160px" />
            </center>
            <br>
            <p class="login-box-msg">Login System</p>

            <?php
            session_start();
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                include 'plugins/koneksi.php';

                $username = $_POST['username'];
                $password = $_POST['password'];

                // Prepare and bind
                $stmt = $conn->prepare("SELECT id_pengguna, password FROM pengguna WHERE username = ?");
                $stmt->bind_param("s", $username);
                $stmt->execute();
                $stmt->store_result();

                if ($stmt->num_rows > 0) {
                    $stmt->bind_result($id_pengguna, $hashed_password);
                    $stmt->fetch();

                    if (password_verify($password, $hashed_password)) {
                        // Password is correct
                        $_SESSION['id_pengguna'] = $id_pengguna;
                        $_SESSION['username'] = $username;
                        header("Location: index.php");
                        exit();
                    } else {
                        echo "<div class='alert alert-danger'>Invalid password.</div>";
                    }
                } else {
                    echo "<div class='alert alert-danger'>No user found with that username.</div>";
                }

                $stmt->close();
                $conn->close();
            }
            ?>

            <form action="login.php" method="post">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <a href="register.php" class="register-link">Register</a>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-success btn-block btn-flat" name="btnLogin" title="Masuk Sistem">
                            <b>Masuk</b>
                        </button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <!-- /.social-auth-links -->

        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery 2.2.3 -->
    <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- sweet alert -->
</body>

</html>
