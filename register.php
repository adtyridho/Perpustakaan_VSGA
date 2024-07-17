<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Novel Online | Register</title>
    <link rel="icon" href="dist/img/library.png">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    
    <style>
        body {
            background-image: url('dist/img/bg_library.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
        .register-box {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
        }
        .login-link {
            display: inline-block;
            margin-top: 10px;
        }
    </style>
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <h3><font color="green"><b>Novel Online</b></font></h3>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">Register a new membership</p>

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                include 'plugins/koneksi.php';

                $email = $_POST['email'];
                $username = $_POST['username'];
                $no_telp = $_POST['phone'];
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $gender = $_POST['gender'];

                $sql = "INSERT INTO pengguna (email, username, no_telp, password, gender, level) VALUES ('$email', '$username', '$no_telp', '$password', '$gender', 1)";

                if ($conn->query($sql) === TRUE) {
                    echo "<div class='alert alert-success'>Registration successful.</div>";
                } else {
                    echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $conn->error . "</div>";
                }

                $conn->close();
            }
            ?>

            <form action="register.php" method="post">
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="username" placeholder="Username" required>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="phone" placeholder="Phone Number" required>
                    <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group">
                    <label>Gender:</label><br>
                    <label class="radio-inline">
                        <input type="radio" name="gender" value="L"> Male
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="gender" value="P"> Female
                    </label>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <a href="login.php" class="login-link">Login</a>
                    </div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat" name="btnRegister">
                            <b>Register</b>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
