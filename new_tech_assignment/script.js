var loader = document.getElementById("loader");

window.addEventListener("load", function () {
    loader.style.display = "none";
})

function change() {
    var signIn = document.getElementById("signIn");
    var signUp = document.getElementById("signUp");

    signIn.classList.toggle("d-none");
    signUp.classList.toggle("d-none");
}

function adminLogIn() {
    window.location = "adminLogIn.php";
}

function verificationCode() {
    alert("Verification code has Sent!");
}

function verify() {
    alert("Verify has successfull!...")
    window.location = "adminPanel.php";
}

function userSignIn() {
    window.location = "index.php";
}

function logOut() {
    window.location = "index.php";
}

function manageProduct() {
    window.location = "manageProducts.php";
}

function dashBoard() {
    window.location = "adminPanel.php";
}

function manageUsers() {
    window.location = "manageUsers.php";
}

function signIn() {
    window.location = "home.php";
}

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

function signUp() {
    alert("Registration Successful!...");
    window.location = "home.php";
}

function singleProductView(){
    window.location = "single_product_view.php";
}