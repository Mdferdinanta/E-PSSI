<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-PSSI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app2.css') }}">
</head>

<body class="registration-page">
    <div class="navbar">
        <a href="/home" class="navbar-logo">
            <img src="{{ asset('img/logo.png') }}" alt="Logo">
        </a>
        <div class="navbar-title">E-PSSI</div>
    
        <div class="profile" onclick="toggleMenu(event)">
            <img src="{{ asset('img/fotoprofil.png') }}" alt="Profile">
            <span class="profile-name">Vini Sr</span>
            <div class="profile-menu" id="profileMenu">
                <a href="/profile">Profile</a>
                <a href="/login">Log out</a>
            </div>
        </div>
    </div>

    <div class="frame">
        <div class="menu-container">
            <ul class="menu-list">
                <li><a href="/home" onclick="activateMenuItem(this)"><img src="{{ asset('img/home.png') }}" alt="home">Home</a></li>
                <li><a href="/registration" onclick="activateMenuItem(this)"><img src="{{ asset('img/register.png') }}" alt="register">Register</a></li>
                <li><a href="/talent" onclick="activateMenuItem(this)"><img src="{{ asset('img/talent.png') }}" alt="talents">Talents</a></li>
                <li><a href="/onwatch" onclick="activateMenuItem(this)"><img src="{{ asset('img/onwatch.png') }}" alt="onwatch">On Watch</a></li>
                <li><a href="/chat" onclick="activateMenuItem(this)"><img src="{{ asset('img/chat.png') }}" alt="chat">Chat</a></li>
            </ul>
        </div>
        
        <form action="" method="post">
            <h2>Registration Form</h2>
            <div class="registration-form">
                <div>
                    <label for="name">Name</label>
                    <input type="text" placeholder="Name" id="name" name="name" required style="margin-left: 64px; width: 1000px;">
                </div>
                <div>
                    <label for="photo">Photo</label>
                    <input type="file" id="photo" name="photo" required style="margin-left: 66px; width: 370px;">
                </div>
                <div>
                    <label for="age">Age</label>
                    <input type="number" placeholder="Age" id="age" name="age" required style="margin-left: 83px; width: 130px;">
                </div>
                <div>
                    <label for="gender">Gender</label >
                    <select id="gender" name="gender" required style="margin-left: 51px; width: 160px;">
                        <option value="" disabled selected>Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <div>
                    <label for="weight">W/H</label>
                    <input type="number" placeholder="Weight" id="weight" name="weight" required style="margin-left: 80px; margin-right: 7px; width: 130px;"> Kg
                    <input type="number" placeholder="Height" id="height" name="height" required style="margin-left: 30px; margin-right: 7px; width: 130px;"> cm
                </div>
                <div>
                    <label for="name">Address</label>
                    <input type="text" placeholder="Location" id="address" name="address" required style="margin-left: 44px; width: 1000px;">
                </div>
                <div>
                    <label for="position">Position</label>
                    <select id="position" name="position" required style="margin-left: 46.5px; width: 160px;">
                        <option value="" disabled selected>Position</option>
                        <option value="cf">CF</option>
                        <option value="rwf">RWF</option>
                        <option value="lwf">LWF</option>
                        <option value="am">AM</option>
                        <option value="cm">CM</option>
                        <option value="rm">RM</option>
                        <option value="lm">LM</option>
                        <option value="dm">DM</option>
                        <option value="rwb">RWB</option>
                        <option value="lwb">LWB</option>
                        <option value="cb">CB</option>
                        <option value="gk">GK</option>
                    </select>
                </div>
                <div>
                    <label for="rating">Rating</label>
                    <input type="number" placeholder="Rating" id="rating" name="rating" required style="margin-left: 61px; width: 130px;">
                </div>
    
                {{-- Hanya GK --}}
                <div id="gkAttributes" style="display: none;">
                    <label for="attributes">Attributes</label>
                    <input type="number" placeholder="Diving" id="diving" name="diving" required style="margin-left: 24px; margin-right: 10px; width: 120px;">
                    <input type="number" placeholder="Kicking" id="kicking" name="kicking" required style="margin-right: 10px; width: 120px;">
                    <input type="number" placeholder="Handling" id="handling" name="handling" required style="margin-right: 10px; width: 120px;">
                    <input type="number" placeholder="Reflexes" id="reflexes" name="reflexes" required style="margin-right: 10px; width: 120px;">
                    <input type="number" placeholder="Speed" id="speed" name="speed" required style="margin-right: 10px; width: 120px;">
                    <input type="number" placeholder="Positioning" id="positioning" name="positioning" required style="margin-right: 10px; width: 120px;">
                </div>

                {{-- Selain GK --}}
                <div id="nonGkAttributes" style="display: none;">
                    <label for="attributes">Attributes</label>
                    <input type="number" placeholder="Pace" id="pace" name="pace" required style="margin-left: 24px; margin-right: 10px; width: 120px;">
                    <input type="number" placeholder="Shooting" id="shooting" name="shooting" required style="margin-right: 10px; width: 120px;">
                    <input type="number" placeholder="Passing" id="passing" name="passing" required style="margin-right: 10px; width: 120px;">
                    <input type="number" placeholder="Dribling" id="dribling" name="dribling" required style="margin-right: 10px; width: 120px;">
                    <input type="number" placeholder="Defending" id="defending" name="defending" required style="margin-right: 10px; width: 120px;">
                    <input type="number" placeholder="Physical" id="physical" name="physical" required style="margin-right: 10px; width: 120px;">
                </div>
                
                <div>    
                    <label for="status">Status</label >
                    <select id="status" name="status" required style="margin-left: 62px; width: 180px;">
                        <option value="" disabled selected>Status</option>
                        <option value="male">Not Signed</option>
                        <option value="female">Signed</option>
                        <option value="female">In Negotiation</option>
                    </select>
                </div>
                <div>
                    <label for="video">Video link</label>
                    <input type="text" placeholder="Video Link" id="video" name="video" required required style="margin-left: 31px; width: 970px;">
                </div>
            </div>
            <button type="submit" name="save">
                <img src="{{ asset('img/save.png') }}" alt="home">Save</button>
        </form>
    </div>

    <div id="confirmationPopup" class="popup">
        <div class="popup-content">
            <p>Anda yakin untuk menyimpan data talent?</p>
            <button id="confirmYes" class="popup-button yes-button">Ya</button>
            <button id="confirmNo" class="popup-button no-button">Tidak</button>
        </div>
    </div>    
    
    <script>
        function toggleMenu(event) {
            event.stopPropagation();
            var menu = document.getElementById("profileMenu");
            if (menu.style.display === "block") {
                menu.style.display = "none";
            } else {
                menu.style.display = "block";
            }
        }
    
        document.addEventListener("click", function(event) {
            var profileMenu = document.getElementById("profileMenu");
            var profile = document.querySelector(".profile");
            if (!profile.contains(event.target)) {
                profileMenu.style.display = "none";
            }
        });
    
        document.querySelector(".profile-menu").addEventListener("click", function(event) {
            event.stopPropagation();
        });

        function activateMenuItem(item, event) {
            event.preventDefault();
            document.querySelectorAll('.menu-list li a').forEach(link => {
                link.classList.remove('active');
            });
            item.classList.add('active');
            window.location.href = item.getAttribute('href');
        }

        // Add the initial active class to the correct menu item based on the current URL
        document.addEventListener("DOMContentLoaded", function() {
            const currentPath = window.location.pathname;
            document.querySelectorAll('.menu-list li a').forEach(link => {
                if (link.getAttribute('href') === currentPath) {
                    link.classList.add('active');
                }
            });
        });

        document.getElementById('position').addEventListener('change', function() {
            var gkAttributes = document.getElementById('gkAttributes');
            var nonGkAttributes = document.getElementById('nonGkAttributes');
            if (this.value === 'gk') {
                gkAttributes.style.display = 'block';
                nonGkAttributes.style.display = 'none';
            } else {
                gkAttributes.style.display = 'none';
                nonGkAttributes.style.display = 'block';
            }
        });

        document.addEventListener("DOMContentLoaded", function() {
            const saveButton = document.querySelector('button[name="save"]');
            const confirmationPopup = document.getElementById("confirmationPopup");
            const confirmYes = document.getElementById("confirmYes");
            const confirmNo = document.getElementById("confirmNo");

            saveButton.addEventListener("click", function(event) {
                event.preventDefault(); // Prevent the form from submitting
                confirmationPopup.style.display = "block";
            });

            confirmYes.addEventListener("click", function() {
                confirmationPopup.style.display = "none";
                document.querySelector('form').reset(); // Clear the form
            });

            confirmNo.addEventListener("click", function() {
                confirmationPopup.style.display = "none";
            });

            // Close the popup when clicking outside the popup content
            window.onclick = function(event) {
                if (event.target === confirmationPopup) {
                    confirmationPopup.style.display = "none";
                }
            }
        });
    </script>
    
    </body>
    </html>



// <x-layout>
//     <x-slot:title>{{ $title }}</x-slot:title>
//     <div class="container">
//         <div class="row">
//             <x-sidebar></x-sidebar>
//             <main>
//                 <form action="" method="post">
//                     <div><span>Registration Form</span></div>
//                     <div>
//                         <label for="">Photo</label>
//                         <input type="file" accept=".jpg, .jpeg, .png">
//                     </div>
//                     <div>
//                         <label for="">Name</label>
//                         <input type="text" placeholder="Full Name">
//                     </div>
//                     <div>
//                         <label for="">Age</label>
//                         <input type="number" placeholder="Age">
//                     </div>
//                     <div>
//                         <label for="">Gender</label>
//                         <select name="Gender" id="">
//                             <option value="Male">Male</option>
//                             <option value="Female">Female</option>
//                         </select>
//                     </div>
//                     <div>
//                         <label for="">W/H</label>
//                         <input type="text" placeholder="Weight"><label>Kg</label>
//                         <input type="text" placeholder="Height"><label>cm</label>
//                     </div>
//                     <div>
//                         <label for="">Role</label>
//                         <select name="Role" id="">
//                             <option value="">CF</option>
//                             <option value="">RWF</option>
//                             <option value="">LWF</option>
//                             <option value="">AM</option>
//                             <option value="">CM</option>
//                             <option value="">RM</option>
//                             <option value="">LM</option>
//                             <option value="">DM</option>
//                             <option value="">RWB</option>
//                             <option value="">LWB</option>
//                             <option value="">CB</option>
//                             <option value="">GK</option>
//                         </select>
//                     </div>
//                     <div>
//                         <label for="">Rating</label>
//                         <input type="text" placeholder="Rating">
//                     </div>

//                     <!-- 
//                         FIELDSET for interactive filling
//                         hide / show sesuai dengan
//                         role yang di pilih di atas
                        
//                         if goalkeeper >> then show goalkeepr stats
//                             else show outfield stats
//                     -->
//                     <div>
//                         <fieldset> <!-- Outfield Player Key Stats -->
//                             <legend>Key Stats:</legend>
//                             <label for="">Pace</label>
//                             <input type="number">
//                             <label for="">Shoot</label>
//                             <input type="number">
//                             <label for="">Pass</label>
//                             <input type="number">
//                             <label for="">Dribble</label>
//                             <input type="number">
//                             <label for="">Defence</label>
//                             <input type="number">
//                             <label for="">Physics</label>
//                             <input type="number">
//                         </fieldset>
//                     </div>
//                     <div>
//                         <fieldset> <!-- Goalkeeper Key Stats -->
//                             <legend>Key Stats:</legend>
//                             <label for="">Diving</label>
//                             <input type="number">
//                             <label for="">Handling</label>
//                             <input type="number">
//                             <label for="">Kicking</label>
//                             <input type="number">
//                             <label for="">Reflexes</label>
//                             <input type="number">
//                             <label for="">Speed</label>
//                             <input type="number">
//                             <label for="">Positioning</label>
//                             <input type="number">
//                         </fieldset>
//                     </div>

//                     <div>
//                         <label for="">Status</label>
//                         <input type="text" placeholder="Status">
//                     </div>
//                     <div>
//                         <label for="">Video Link</label>
//                         <input type="text" placeholder="Video Link">
//                     </div>
//                     <a href="/"><button type="submit" name="submit">Register</button></a>
//                 </form>
//             </main>
//         </div>
//     </div>



// </x-layout>
