<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Manage Users | New Tech</title>
    <link rel="icon" href="resources/icon.png" />

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap.css" />

</head>

<body>

    <!--  loader -->
    <div id="loader" class="loader"></div>
    <div class="d-none">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/B-vXOmvQyYo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/B-vXOmvQyYo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/B-vXOmvQyYo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/B-vXOmvQyYo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/B-vXOmvQyYo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/B-vXOmvQyYo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/B-vXOmvQyYo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/B-vXOmvQyYo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/B-vXOmvQyYo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/B-vXOmvQyYo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <!--  loader -->

    <div class="container-fluid bg-light">
        <div class="row">
            <div class="col-12 col-lg-2">
                <div class="row">
                    <div class="bg-dark col-12">
                        <div class="row g-1 text-center">

                            <!-- menu bar -->
                            <div class="text-center col-12 col-lg-12 pt-2 text-center mt-5">
                                <img src="resources/admin.png" class="animation" style="width: 50%;" />
                            </div>
                            <div>
                                <h6 class="animation text02">Admin</h6>
                                <hr class="border animation" />
                            </div>
                            <div class="col-lg-12">
                                <button class="col-12 btn btn-light animation" onclick="dashBoard();"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
                                        <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
                                        <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
                                    </svg> Dashboard</button>
                                <br /><br />
                                <button class="col-12 btn btn-light animation" onclick="manageProduct();"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z" />
                                    </svg> Manage Products</button>
                                <br /><br />
                                <button class="col-12 btn btn-primary animation"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-gear" viewBox="0 0 16 16">
                                        <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Zm9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z" />
                                    </svg> Manage Users</button>
                            </div>
                            <div>
                                <hr class="border animation" />
                            </div>
                            <div class="row">
                                <h6 class="text03 animation"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                                        <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z" />
                                        <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z" />
                                        <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                                    </svg> Selling History</h6>
                            </div>
                            <hr class="border animation" />
                            <div class="col-lg-12">
                                <p class="animation text03"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-day" viewBox="0 0 16 16">
                                        <path d="M4.684 11.523v-2.3h2.261v-.61H4.684V6.801h2.464v-.61H4v5.332h.684zm3.296 0h.676V8.98c0-.554.227-1.007.953-1.007.125 0 .258.004.329.015v-.613a1.806 1.806 0 0 0-.254-.02c-.582 0-.891.32-1.012.567h-.02v-.504H7.98v4.105zm2.805-5.093c0 .238.192.425.43.425a.428.428 0 1 0 0-.855.426.426 0 0 0-.43.43zm.094 5.093h.672V7.418h-.672v4.105z" />
                                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                    </svg> From Date</p>
                                <input type="date" class="form-control animation" />
                            </div>
                            <div class="col-lg-12">
                                <p class="text03 animation"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-day" viewBox="0 0 16 16">
                                        <path d="M4.684 11.523v-2.3h2.261v-.61H4.684V6.801h2.464v-.61H4v5.332h.684zm3.296 0h.676V8.98c0-.554.227-1.007.953-1.007.125 0 .258.004.329.015v-.613a1.806 1.806 0 0 0-.254-.02c-.582 0-.891.32-1.012.567h-.02v-.504H7.98v4.105zm2.805-5.093c0 .238.192.425.43.425a.428.428 0 1 0 0-.855.426.426 0 0 0-.43.43zm.094 5.093h.672V7.418h-.672v4.105z" />
                                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                                    </svg> To Date</p>
                                <input type="date" class="form-control animation" />
                            </div>
                            <div class="col-lg-12">
                                <button class="animation btn btn-outline-primary mt-2 rounded-4 col-12"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg> Search</button>
                                <hr class="border animation" />
                                <hr class="border animation" />
                                <button class="btn btn-danger col-12 animation" onclick="logOut();"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                    </svg> Log Out</button>
                                <br /><br /><br />
                            </div>
                            <!-- menu bar -->

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-10 my-lg-4">

                <!-- header -->
                <div class="row">
                    &nbsp;
                    <h1 class="animation" style="font-weight: bold;">Manage Users</h1>
                    <div>
                        <hr class="animation">
                    </div>
                    <!-- header -->

                    <!-- search bar -->
                    <div class="col-12">
                        <div class="row">
                            <div class="offset-lg-2 col-12 col-lg-8 animation">
                                <div class="input-group input-group-default mb-3 p-1">
                                    <input type="text" class="form-control shadow" placeholder="Search" aria-label="Username" aria-describedby="inputGroup-sizing-default">
                                    <button class="input-group-text shadow btn btn-dark" id="inputGroup-sizing-default"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                        </svg> Search</button>
                                </div>
                            </div>
                            <!-- search bar -->

                            <!-- table -->
                            <table class="text-center shadow table-responsive table-bordered animation">
                                <tr>
                                    <th>ID</th>
                                    <th>Profile Image</th>
                                    <th>Email</th>
                                    <th>Username</th>
                                    <th>Rejistered Date</th>
                                    <th>Status</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td><img src="resources/user.svg" class="userimg rounded-pill" style="height:45px;"></td>
                                    <td>kehan@gmail.com</td>
                                    <td>Kehan</td>
                                    <td>2023-02-10</td>
                                    <td><button class="btn btn-danger">Block</button></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><img src="resources/user.svg" class="userimg rounded-pill" style="height:45px;"></td>
                                    <td>tharindu@gmail.com</td>
                                    <td>Tharindu</td>
                                    <td>2023-02-11</td>
                                    <td><button class="btn btn-success">Unblock</button></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><img src="resources/user.svg" class="userimg rounded-pill" style="height:45px;"></td>
                                    <td>kalpa@gmail.com</td>
                                    <td>Kalpa</td>
                                    <td>2023-02-13</td>
                                    <td><button class="btn btn-danger">Block</button></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><img src="resources/user.svg" class="userimg rounded-pill" style="height:45px;"></td>
                                    <td>tharaka@gmail.com</td>
                                    <td>Tharaka</td>
                                    <td>2023-02-13</td>
                                    <td><button class="btn btn-danger">Block</button></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td><img src="resources/user.svg" class="userimg rounded-pill" style="height:45px;"></td>
                                    <td>lahiru@gmail.com</td>
                                    <td>Lahiru</td>
                                    <td>2023-02-15</td>
                                    <td><button class="btn btn-success">Unblock</button></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td><img src="resources/user.svg" class="userimg rounded-pill" style="height:45px;"></td>
                                    <td>lahiru@gmail.com</td>
                                    <td>Lahiru</td>
                                    <td>2023-02-15</td>
                                    <td><button class="btn btn-danger">Block</button></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td><img src="resources/user.svg" class="userimg rounded-pill" style="height:45px;"></td>
                                    <td>lahiru@gmail.com</td>
                                    <td>Lahiru</td>
                                    <td>2023-02-15</td>
                                    <td><button class="btn btn-danger">Block</button></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td><img src="resources/user.svg" class="userimg rounded-pill" style="height:45px;"></td>
                                    <td>lahiru@gmail.com</td>
                                    <td>Lahiru</td>
                                    <td>2023-02-15</td>
                                    <td><button class="btn btn-danger">Block</button></td>
                                </tr>
                            </table>
                            <!-- table -->

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                &nbsp;
            </div>

            <!-- footer -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 bg-dark">
                        <div class="row text-light">
                            <div class="col-5 col-lg-3 mt-3">
                                <h5>Customer Care</h5>
                                <div class="col-7 col-lg-3">
                                    <a href="#" class="nav-link">Help Center</a>
                                </div>
                                <div class="col-7 col-lg-3">
                                    <a href="#" class="nav-link">How to Buy</a>
                                </div>
                                <div class="col-7 col-lg-3">
                                    <a href="#" class="nav-link">Contact Us</a>
                                </div>
                            </div>
                            <div class="col-8 col-lg-3 mt-3">
                                <h5>New Tech</h5>
                                <div class="col-8 col-lg-6">
                                    <a href="#" class="nav-link">About New Tech</a>
                                </div>
                                <div class="col-8 col-lg-6">
                                    <a href="#" class="nav-link">Tearms and Condition</a>
                                </div>
                                <div class="col-5 col-lg-4">
                                    <a href="#" class="nav-link">Privacy Policy</a>
                                </div>
                            </div>
                            <div class="col-8 col-lg-3 mt-3">
                                <h5>Payment Methods</h5>
                                <span>Visa</span>
                                <br />
                                <span>Master</span>
                                <br />
                                <span>Cash on delivery</span>
                            </div>
                            <div class="col-8 col-lg-3 mt-3">
                                <img src="resources/icon.png" style="width: 10%;" />
                                <div class="col-8 col-lg-6">
                                    <p class="text-info">Shopping and enjoy</p>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <p class="text-center text03 animation">&copy; 2023 newtech.lk || All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer -->

        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>