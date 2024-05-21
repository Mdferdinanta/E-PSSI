<?php

class RegistrationForm {
    private $backgroundClass;
    private $roleOptions;
    
    public function __construct($backgroundClass, $roleOptions) {
        $this->backgroundClass = $backgroundClass;
        $this->roleOptions = $roleOptions;
    }
    
    public function displayForm() {
        ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <title>E-PSSI</title>
            <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        </head>

        <body class="signup-page">
            <div class="<?php echo $this->backgroundClass; ?>"></div>
            <form action="" method="post">
                <h2>Sign Up</h2>
                <select name="role" id="role" required>
                    <option value="" disabled selected>Register As</option>
                    <?php foreach ($this->roleOptions as $role): ?>
                        <option value="<?php echo $role['value']; ?>"><?php echo $role['label']; ?></option>
                    <?php endforeach; ?>
                </select>
                <input type="text" placeholder="Full Name" name="full_name" id="fullname" required>
                <input type="text" placeholder="Email" name="email" id="email" required>
                <input type="text" placeholder="Phone Number" name="phone_number" pattern="[0-9]+" title="Hanya angka yang diperbolehkan" id="phonenumber" required>
                <input type="password" placeholder="Password" name="password" id="password" required>
                <input type="password" placeholder="Confirm Password" name="password2" id="password" required>
                <button href="/login" type="submit" name="register">Sign Up</button>
            </form>
        </body>

        </html>
        <?php
    }
}

// Contoh penggunaan:
$backgroundClass = "background"; // Anda bisa menentukan class background sesuai kebutuhan
$roleOptions = [
    ['value' => 'coach', 'label' => 'Coach'],
    ['value' => 'scouter', 'label' => 'Scouter']
];

$registrationForm = new RegistrationForm($backgroundClass, $roleOptions);
$registrationForm->displayForm();
?>




// <!DOCTYPE html>
// <html lang="en">
// <x-header></x-header>
// <body>
//     <div>

//         <!-- Boleh ditambahkan Logo ePSSI di sini -->

//         <main>
//             <form action="" method="post">
//                 <div><span>Sign Up</span></div>
//                 <div>
//                     <label for="">Role</label>
//                     <select name="" id="">
//                         <option value="coach">Coach</option>
//                         <option value="scout">Scout</option>
//                     </select>
//                 </div>
//                 <div>
//                     <label for="">Name</label>
//                     <input type="text" name="" id="">
//                 </div>
//                 <div>
//                     <label for="">Email</label>
//                     <input type="text" name="" id="">
//                 </div>
//                 <div>
//                     <label for="">Password</label>
//                     <input type="text" name="" id="">
//                 </div>
//                 <div>
//                     <label for="">Confirm Password</label>
//                     <input type="text" name="" id="">
//                 </div>
//                 <div>
//                     <label for="">Phone Number</label>
//                     <input type="text" name="" id="">
//                 </div>
//                 <a href="/login"><button type="submit" name="submit">Sign Up</button></a>
//                 <p>
//                     Already have an account?
//                     <a href="/login">Login here</a>
//                 </p>
//             </form>
//         </main>
//     </div>
// </body>
// </html>
