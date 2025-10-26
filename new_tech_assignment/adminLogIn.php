<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin LogIn | New Tech</title>
    <link rel="icon" href="resources/icon.png" />

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap.css" />

</head>

<body>

    <video autoplay loop muted plays-inline class="background-video">
        <source src="resources/pexels-pressmaster-3129576-3840x2160-30fps.mp4" type="video/mp4" />
    </video>

    <div class="container-fluid vh-100 d-flex justify-content-center">

        <div class="row align-content-center">

            <!-- header -->
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <p class="text-center text02 animation">Admin LogIn</p>
                    </div>
                    <div class="col-12 animation logo01"></div>
                </div>
            </div>
            <!-- header -->

            <!-- admin login -->
            <div class="col-12 offset-lg-3 col-lg-6" id="signIn">
                <div class="row g-2">

                    <div class="col-12">
                        <label class="form-lable text03 animation">Email</label>
                        <input type="email" class="form-control animation" placeholder="ex: kehan@gmail.com" />
                    </div>

                    <div class="col-12">
                        <label class="form-lable text03 animation">Password</label>
                        <input type="password" class="form-control animation" placeholder="ex: ********" />
                    </div>

                    <div class="col-6">
                        <div class="form-check">
                            <input class="form-check-input animation" type="checkbox" value="" id="rememberme">
                            <label class="form-check-label text03 animation" for="rememberme">
                                Remember Me
                            </label>
                        </div>
                    </div>

                    <div class="col-6 animation text-end">
                        <a href="#" class="link-primary text03">Forgotten Password</a>
                    </div>

                    <div class="col-12 col-lg-6 d-grid mt-2">
                        <button class="btn btn-primary text03 animation" data-bs-toggle="modal" data-bs-target="#myModal" onclick="verificationCode();">Send Verification Code</button>
                    </div>

                    <div class="col-12 col-lg-6 d-grid mt-2">
                        <button class="btn btn-danger text03 animation" onclick="userSignIn();">User Sign In</button>
                    </div>

                </div>
            </div>
            <!-- admin login -->

            <!-- modal -->
            <div class="modal" id="myModal">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">

                        <!-- modal header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Verification Code</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <!-- modal body -->
                        <div class="modal-body">
                            <input type="text" class="form-control" />
                        </div>

                        <!-- modal footer -->
                        <div class="modal-footer">
                            <button class="btn btn-primary" onclick="verify();">Verify</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>
            <!-- modal -->

            <!-- footer -->
            <div class="col-12 d-lg-block fixed-bottom">
                <p class="text-center text03 animation">&copy; 2023 newtech.lk || All Rights Reserved</p>
            </div>
            <!-- footer -->

        </div>

    </div>

    <script src="bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>