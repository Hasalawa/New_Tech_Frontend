<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>New Tech</title>
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
            <!-- admin login button-->
            <div class="offset-8 offst-lg-10 col-4 col-lg-2 d-grid my-4">
                <button class="btn btn-outline-light text03 animation" style="border-radius: 20px;" onclick="adminLogIn();"><img src="resources/admin.png" style="width: 10%;" /> Admin</button>
            </div>
            <!-- admin login button-->

            <div class="col-12">
                <div class="row">
                    <div class="col-12 logo animation"></div>
                    <div class="col-12">
                        <p class="text-center text01 animation">Welcome To New Tech!</p>
                    </div>
                </div>
            </div>
            <!-- header -->

            <!-- Sign In -->
            <div class="col-12 offset-lg-3 col-lg-6" id="signIn">
                <div class="row g-2">

                    <div class="col-12">
                        <p class="text02 animation">Sign In</p>
                    </div>

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
                        <a href="#" class="nav-link link-primary text03">Forgotten Password</a>
                    </div>

                    <div class="col-12 col-lg-6 d-grid mt-2">
                        <button class="btn btn-primary text03 animation" onclick="signIn();">Sign In</button>
                    </div>

                    <div class="col-12 col-lg-6 d-grid mt-2">
                        <button class="btn btn-danger text03 animation" onclick="change();">Do you have an account? Sign Up</button>
                    </div>

                </div>
            </div>
            <!-- Sign In -->
            <!-- Sign Up -->

            <div class="col-12 d-none offset-lg-3 col-lg-6" id="signUp">
                <div class="row g-2">

                    <div class="col-12">
                        <p class="text02 animation">Create New Account</p>
                    </div>

                    <div class="col-6">
                        <label class="form-lable text03 animation">First Name  <span class="text-danger">*</span></label>
                        <input class="form-control animation" type="text" placeholder="ex: Kehan" />
                    </div>

                    <div class="col-6">
                        <label class="form-lable text03 animation">Last Name <span class="text-danger">*</span></label>
                        <input class="form-control animation" type="text" placeholder="ex: Hasalawa" />
                    </div>

                    <div class="col-12 col-lg-6">
                        <label class="form-lable text03 animation">Email <span class="text-danger">*</span></label>
                        <input class="form-control animation" type="email" placeholder="ex: kehan@gmail.com" />
                    </div>

                    <div class="col-6">
                        <label class="form-lable text03 animation">Mobile <span class="text-danger">*</span></label>
                        <input class="form-control animation" type="text" placeholder="ex: 0704586974" />
                    </div>

                    <div class="col-6">
                        <label class="form-lable text03 animation">Password <span class="text-danger">*</span></label>
                        <input class="form-control animation" type="password" placeholder="ex: ********" />
                    </div>

                    <div class="col-6">
                        <label class="form-lable text03 animation">Confirm Password <span class="text-danger">*</span></label>
                        <input class="form-control animation" type="password" placeholder="ex: ********" />
                    </div>

                    <div class="col-6 col-lg-4">
                        <label class="form-lable text03 animation">Birthday <span class="text-danger">*</span></label>
                        <input class="form-control animation" type="date" />
                    </div>

                    <div class="col-6 col-lg-4">
                        <label class="form-lable text03 animation">Gender <span class="text-danger">*</span></label>
                        <select class="form-select animation">
                            <option>Select Your Gender</option>
                            <option>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                        </select>
                    </div>

                    <div class="col-6 col-lg-4">
                        <label class="form-lable text03 animation">Country <span class="text-danger">*</span></label>
                        <select class="form-select animation">
                            <option>Select Your Country</option>
                            <option>Australia</option>
                            <option>Afghanistan</option>
                            <option>Bangladesh</option>
                            <option>Belgium</option>
                            <option>Canada</option>
                            <option>Cameroon</option>
                            <option>Dominica</option>
                            <option>Egypt</option>
                            <option>France</option>
                            <option>Germany</option>
                            <option>Hungary</option>
                            <option>India</option>
                            <option>Italy</option>
                            <option>Japan</option>
                            <option>Sri Lanka</option>
                            <option>Sweden</option>
                            <option>Yemen</option>
                            <option>Zimbabwe</option>
                        </select>
                    </div>

                    <div class="col-12 col-lg-6 d-grid mt-2">
                        <button class="btn btn-primary animation" onclick="signUp();">Sign Up</button>
                    </div>

                    <div class="col-12 col-lg-6 d-grid mt-2">
                        <button class="btn btn-secondary animation" onclick="change();">Already have an Account? Sign In</button>
                    </div>

                </div>
            </div>

            <!-- Sign Up -->

            <!-- footer -->
            <div class="col-12 d-none d-lg-block fixed-bottom">
                <p class="text-center text03 animation">&copy; 2023 newtech.lk || All Rights Reserved</p>
            </div>
            <!-- footer -->

        </div>
    </div>

    <script src="script.js"></script>

</body>

</html>