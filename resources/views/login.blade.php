<?php

// Kelas untuk menampilkan halaman login
class LoginPage {
    private $error;

    // Konstruktor untuk menetapkan pesan error jika ada
    public function __construct($error = null) {
        $this->error = $error;
    }

    // Metode untuk menampilkan halaman login
    public function display() {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-PSSI</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>

<body class="login-page">
    <nav class="navbar">
        <a href="#" class="navbar-logo">
            <img src="{{ asset('img/logo.png') }}" alt="Logo">
        </a>
        <div class="navbar-title">E-PSSI</div>
    </nav>
    <div class="content">
        <div class="left-section">
            <div class="slogan1">Hello Talent Scouter!!</div>
            <div class="slogan2">You Can Find The Best Young Talent Here</div>
            <div class="slogan3">E-PSSI is designed to identify young talents from various training centers throughout Indonesia. With E-PSSI, uncovering and nurturing the next generation of sports stars will never be like this again. Welcome, and let's discover the future of Indonesian sports together!</div>
        </div>
        <div class="right-section">
            <?php if(isset($this->error)): ?>
            <p id="tdk"><?php echo $this->error; ?></p>
            <?php endif; ?>
            <form action="" method="post">
                <h2>Log in</h2>
                <input type="text" placeholder="Email" name="email" id="email" required>
                <input type="password" placeholder="Password" name="password" id="password" required>
                <button href="/homepage" type="submit" name="login">Log In</button>
                <div id="account" class="form-text text-center mb-5 text-dark">Not
                    have an account?
                    <a href="/signup" class="text-dark fw-bold"> Sign Up</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
<?php
    }
}

// Contoh penggunaan:
$error = null;
if(isset($_POST['login'])) {
    // Lakukan autentikasi
    $authenticated = false; // Contoh autentikasi sederhana
    if(!$authenticated) {
        $error = "Email atau Password salah";
    }
}

// Membuat instance kelas LoginPage
$loginPage = new LoginPage($error);

// Menampilkan halaman login
$loginPage->display();

?>


// <!DOCTYPE html>
// <html lang="en">
// <x-header></x-header>
// <body>
//     <div>

//         <!-- Boleh ditambahkan Logo ePSSI di sini -->

//         <main>
//             <form action="" method="post">
//                 <div><span>Log In</span></div>
//                 <div>
//                     <label for="">Email</label>
//                     <input type="text" name="" id="">
//                 </div>
//                 <div>
//                     <label for="">Password</label>
//                     <input type="text" name="" id="">
//                 </div>
//                 <a href="/signup"><button type="submit" name="submit">Log In</button></a>
//                 <p>
//                     Don't have an account?
//                     <a href="/signup">Sign up here</a>
//                 </p>
//             </form>
//         </main>
//     </div>
// </body>
// </html>
