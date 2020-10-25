
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WELCOME</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="BOST/fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="BOST/css/style.css">
</head>
<body>
    <div class="main">
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form" action="proses_register.php">
                             <div class="form-group">
                            <input type="text" name="nama" placeholder="Your Name"/>
                            </div>
                             <div class="form-group">
                                <input type="text" name="no_telepon" placeholder="Number heandphone"/>
                            </div>
                            <div class="form-group">
                                <input type="text" name="alamat" placeholder="Addres"/>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password"  placeholder="Password"/>
                            </div>
                           
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="BOST/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- JS -->
    <script src="BOST/vendor/jquery/jquery.min.js"></script>
    <script src="BOST/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>