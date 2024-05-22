<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-PSSI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: poppins;
            margin: 0;
            padding: 0;
            background: #211951;
        }

        .navbar {
            background-color: #279EFF;
            overflow: hidden;
            padding: 10px;
            margin: 20px 35px 0 35px;
            border-radius: 7px;
            text-align: center;
        }

        .navbar-logo img {
            float: left;
            width: 30px;
            height: 38px;
            align-items: center; 
            margin-top: 2px;
            margin-left: 4px;
        }

        .navbar-title {
            font-size: 22px;
            font-weight: bold;
            color: #000000;
            font-family: poppins;
            letter-spacing: 0.6px;
            float: left;
            margin-left: 11.5px;
            margin-top: 4.5px;
        }

        .search-box {
            display: inline-block;
            align-items: center;
            background-color: #ffffff;
            border-radius: 20px;
            padding: 5px 10px;
        }

        .search-box input[type="text"] {
            border: none;
            background: none;
            outline: none;
            padding: 5px;
            font-size: 16px;
            color: #000000;
        }

        .search-box input[type="text"]::placeholder {
            color: rgb(0, 0, 0);
        }

        .search-button {
            border: none;
            background: none;
            cursor: pointer;
            color: #000000;
            font-size: 16px;
            padding: 5px;
        }

        .search-button i {
            color: #000000;
        }

        .search-button:hover {
            color: #000000;
        }

        .profile {
            float: right;
            text-decoration: none;
            display: flex;
            align-items: center;
            background-color: #ffffff;
            padding: 4px 10px 4px 10px;
            border-radius: 20px;
            margin-top: 1.6px;
            margin-right: 4px;
            cursor: pointer;
        }

        .profile img {
            float: right;
            width: 25px;
            height: 25px;
            margin-right: 4px;
            margin-top: 2.3px;
            object-position: center;
            object-fit: cover; 
        }

        .profile-name {
            font-size: 17px;
            color: #000000;
            margin-top: 2.3px;
            margin-right: 4px;
        }

        .profile-menu {
            position: absolute;
            top: 50px;
            right: 65px;
            background-color: #ffffff;
            border-radius: 7px;
            padding: 6px;
            display: none;
            z-index: 1;
        }

        .profile-menu a {
            display: block;
            color: #000000;
            text-decoration: none;
            padding: 6px;
            text-align: left;
        }

        .profile-menu a:hover {
            color: #ffffff;
            background-color: #000000;
        }

        .show-menu {
            display: block !important;
        }
        
        .frame {
            position: relative;
            height: 640px;
            display: flex;
        }

        .menu-container {
            margin: 20px 0 0 35px;
            padding: 0px;
            background-color: #279EFF;
            border-radius: 7px;
            width: 265px;
            height: 320px;
            float: left;
        }

        .menu-list {
            list-style-type: none;
            padding: 15px 10px 10px 0px;
            margin: 0;
        }

        .menu-list li {
            display: flex;
            justify-content: center;
            margin-bottom: 8px;
        }

        .menu-list li a {
            text-decoration: none;
            color: #ffffff;
            font-weight: bold;
            font-size: 18px;
            display: flex;
            padding: 10px;
            border-radius: 7px;
            width: 100%;
            justify-content: center;
        }

        .menu-list img {
            margin-right: 7px;
            width: 25px;
            height: 25px;
        }

        .menu-list li:nth-child(1) a {
            width: 145px;
            background-color: #2576CB;
            margin: 12px 12px 0px 22px;
        }

        .menu-list li:nth-child(2) a {
            width: 145px;
            background-color: #2576CB;
            margin: 0px 12px 0px 22px;
        }

        .menu-list li:nth-child(3) a {
            width: 145px;
            background-color: #2576CB;
            margin: 0px 12px 0px 22px;
        }

        .menu-list li:nth-child(4) a {
            width: 145px;
            background-color: #2576CB;
            margin: 0px 12px 0px 22px;
        }

        .menu-list li:nth-child(5) a {
            width: 145px;
            background-color: #2576CB;
            margin: 0px 12px 12px 22px;
        }

        .menu-list li a.active {
            background-color: #000000; 
            color: #fff;
        }

        .menu-list li a:hover {
            color: #ffffff;
            background-color: #000000;
        }

        .talent-container {
            height: 607px;
            background-color: #279EFF;
            position: relative;
            border-radius: 7px;
            padding: 26px 0px 15px 0px;
            margin-top: 20px;
            margin-left: 20px;
            width: 500px;
            overflow: hidden;
            cursor: pointer;
        }

        .talent-container h2 {
            font-size: 28px;
            font-weight: 900;
            line-height: 0px;
            letter-spacing: 0.6px;
            margin-bottom: 32px;
            margin-left: 5px;
            margin-top: 16px;
            width: 100%;
            display: block;
            clear: both;
            color: #000000;
            text-align: center;
        }

        .talent-card {
            background-color: #F7F7F8;
            height: 175px;
            width: 100%;
            padding: 10px;
            cursor: pointer;
            margin-bottom: 0px;
            margin-right: 22px;
            display: flex;
            align-items: center;
        }

        .talent-card:last-child {
            border-bottom: none;
        }

        .talent-card img {
            width: 115px;
            height: 150px;
            margin-left: 5px;
            margin-right: 20px;
            margin-top: 24.5px;
        }

        .talent-info {
            display: flex;
            flex-direction: column;
        }

        .talent-info p {
            margin: 7px 0;
            font-size: 20px;
            font-weight: bold;
            color: #000000;
            letter-spacing: 0.6px;
        }

        .age-role {
            display: flex;
            justify-content: space-between;
            width: 85%;
        }

        .age-role p {
            font-size: 20px;
            font-weight: bold;
            color: #000000;
            letter-spacing: 0.6px;
        }

        .talent-card:nth-child(1) {
            background-color: #CEE6F9;
        }

        .talent-card:nth-child(2) {
            background-color: #F7F7F8;
        }

        .talent-card:nth-child(3) {
            background-color: #CEE6F9;
        }

        .talent-card:nth-child(4) {
            background-color: #F7F7F8;
        }
        
        .talent-onwatch {
            height: 607px;
            background-color: #279EFF;
            position: relative;
            border-radius: 7px;
            padding: 26px 15px 15px 15px;
            margin-top: 20px;
            margin-left: 20px;
            width: 530px;
            overflow: hidden;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .talent-onwatch h2 {
            font-size: 28px;
            font-weight: 900;
            line-height: 0px;
            letter-spacing: 0.6px;
            margin-bottom: 35px;
            margin-left: 5px;
            margin-top: 16px;
            width: 100%;
            display: block;
            clear: both;
            color: #000000;
            text-align: center;
        }

        .player-card {
            background-color: #F7F7F8;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            width: 310px;
        }
        
        .player-header {
            display: flex;
            text-align: top;
            margin-bottom: 10px;
            font-size: 22px;
            font-weight: bold;
        }

        .player-stats {
            text-align: left;
        }

        .player-card img {
            width: 190px;
            height: 240px;
            margin-left: 9px;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .player-info h2 {
            margin: 17px 0 18px;
            font-size: 22px;
            font-weight: bold;
            color: #000000;
        }

        .player-info .age {
            font-size: 17px;
            font-weight: bold;
            color: #000000;
            border-bottom: 1.5px solid #B9B9BA;
            padding-bottom: 12px;
        }

        .detailed-stats {
            display: flex;
            justify-content: space-between;
            margin: 10px 0;
        }

        .stat {
            text-align: center;
        }

        .stat p {
            margin: 3px 0px 8px 0px;
            font-size: 15px;
            font-weight: bold;
            color: #000000;
        }

        .icons {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 15px;
            margin-bottom: 9px;
        }

        .icons img {
            width: 30px;
            height: 30px;
            margin: 0 10.5px;
            border-radius: 0px;
            /* object-position: center;
            object-fit: cover;   */
        }

        .icons .flag {
            width: 40px;
            height: 30px;
        }

        .icons .liga {
            width: 25px;
            height: 37px;
        }

        .icons .club {
            width: 30px;
            height: 30px;
        }

        .messages-container {
            height: 607px;
            background-color: #279EFF;
            position: relative;
            border-radius: 7px;
            padding: 26px 0px 15px 0px;
            margin-top: 20px;
            margin-left: 20px;
            margin-right: 35px;
            width: 530px;
            overflow: hidden;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .messages-container h2 {
            font-size: 28px;
            font-weight: 900;
            line-height: 0px;
            letter-spacing: 0.6px;
            margin-bottom: 35px;
            margin-left: 5px;
            margin-top: 16px;
            width: 100%;
            display: block;
            clear: both;
            color: #000000;
            text-align: center;
        }

        .message {
            display: flex;
            align-items: center;
            padding: 10px;
            border-bottom: 2.5px solid #279EFF;
            position: relative;
            background-color: #2576CB;
            width: 100%;
        }

        .avatar img {
            width: 40px;
            height: 40px;
            background-color: #F0F3FF;
            border-radius: 50%;
            margin-top: 6px;
            margin-left: 20px;
            margin-right: 13px;
        }

        .content {
            flex: 1;
        }

        .name {
            font-weight: bold;
            margin-top: 1px;
            margin-bottom: 2.8px;
        }

        .text {
            color: #000000;
        }

        .time {
            font-size: 15px;
            color: #000000;
            margin-left: 10px;
            font-weight: bold;
            text-align: top;
            margin-right: 13px;
            margin-top: -22px;
        }

        .badge {
            background-color: #ff0000;
            color: white;
            border-radius: 50%;
            width: 17px;
            height: 17px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 12px;
            position: absolute;
            right: 22px;
            top: 55%;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <a href="/home" class="navbar-logo">
            <img src="{{ asset('img/logo.png') }}" alt="Logo">
        </a>
        <div class="navbar-title">E-PSSI</div>
        
        <div class="search-box">
            <input type="text" placeholder="Search...">
                <button href="/talent" class="search-button"><i class="fas fa-search"></i></button>
        </div>
    
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

        <div class="talent-container" onclick="location.href='/talent'">
            <h2>Talents</h2>
            <div class="talent-card">
                <img src="{{ asset('img/pemain1.png') }}" alt="Foto">
                <div class="talent-info">
                    <p>Ecuador Cavaminga</p>
                    <p>78</p>
                    <div class="age-role">
                        <p>Age: 18</p>
                        <p>GK</p>
                    </div>
                </div>
            </div>

            <div class="talent-card">
                <img src="{{ asset('img/pemain2.png') }}" alt="Foto">
                <div class="talent-info">
                    <p>Erling Holland</p>
                    <p>85</p>
                    <div class="age-role">
                        <p>Age: 19</p>
                        <p>CB</p>
                    </div>
                </div>
            </div>

            <div class="talent-card">
                <img src="{{ asset('img/pemain3.png') }}" alt="Foto">
                <div class="talent-info">
                    <p>Kylian Mpabbe</p>
                    <p>85</p>
                    <div class="age-role">
                        <p>Age: 18</p>
                        <p>CMF</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="talent-onwatch" onclick="location.href='/onwatch'">
            <h2>Player on Watch</h2>
            <div class="player-card">
                <div class="player-stats">
                    <div class="player-header">
                        <div class="player-rating">
                            <p>78</p>
                            <p>GK</p>
                        </div>
                        <img class="player-image" src="{{ asset('img/pemain1.png') }}" alt="Foto">
                    </div>
                </div>
                <div class="player-info">
                    <h2>CAVAMINGA</h2>
                    <p class="age">AGE 18</p>
                    <div class="detailed-stats">
                        <div class="stat"><p>DIV</p><p>80</p></div>
                        <div class="stat"><p>HAN</p><p>70</p></div>
                        <div class="stat"><p>KIC</p><p>60</p></div>
                        <div class="stat"><p>REF</p><p>85</p></div>
                        <div class="stat"><p>SPD</p><p>85</p></div>
                        <div class="stat"><p>POS</p><p>60</p></div>
                    </div>
                    <div class="icons">
                        <img class="flag" src="{{ asset('img/flag.png') }}" alt="Foto">
                        <img class="liga" src="{{ asset('img/liga.png') }}" alt="Foto">
                        <img class="club" src="{{ asset('img/club.png') }}" alt="Foto">
                    </div>
                </div>
            </div>
        </div>
    
        <div class="messages-container" onclick="location.href='/chat'">
            <h2>Messages</h2>
            <div class="message">
                <div class="avatar">
                    <img src="{{ asset('img/fotochat.png') }}" alt="Foto">
                </div>
                <div class="content">
                    <div class="name">Isaac Guardiola</div>
                    <div class="text">Vamos!</div>
                </div>
                <div class="time">30s</div>
                <div class="badge">1</div>
            </div>
            <div class="message">
                <div class="avatar">
                    <img src="{{ asset('img/fotochat.png') }}" alt="Foto">
                </div>
                <div class="content">
                    <div class="name">IShowSpeed</div>
                    <div class="text">YO CHAT IS THIS REAL?? 😱😱😱</div>
                </div>
                <div class="time">5min</div>
                <div class="badge">10</div>
            </div>
            <div class="message">
                <div class="avatar">
                    <img src="{{ asset('img/fotochat.png') }}" alt="Foto">
                </div>
                <div class="content">
                    <div class="name">Justin</div>
                    <div class="text">You Still Win The Game 👏</div>
                </div>
                <div class="time">12h</div>
            </div>
            <div class="message">
                <div class="avatar">
                    <img src="{{ asset('img/fotochat.png') }}" alt="Foto">
                </div>
                <div class="content">
                    <div class="name">Sean The Young</div>
                    <div class="text">Deal done ✅</div>
                </div>
                <div class="time">Yesterday</div>
            </div>
            <div class="message">
                <div class="avatar">
                    <img src="{{ asset('img/fotochat.png') }}" alt="Foto">
                </div>
                <div class="content">
                    <div class="name">Muslimino Rolando</div>
                    <div class="text">Thank you Mr Vini Sr!</div>
                </div>
                <div class="time">3d</div>
            </div>
            <div class="message">
                <div class="avatar">
                    <img src="{{ asset('img/fotochat.png') }}" alt="Foto">
                </div>
                <div class="content">
                    <div class="name">Muslimino Rolando</div>
                    <div class="text">Thank you Mr Vini Sr!</div>
                </div>
                <div class="time">3d</div>
            </div>
            <div class="message">
                <div class="avatar">
                    <img src="{{ asset('img/fotochat.png') }}" alt="Foto">
                </div>
                <div class="content">
                    <div class="name">Muslimino Rolando</div>
                    <div class="text">Thank you Mr Vini Sr!</div>
                </div>
                <div class="time">3d</div>
            </div>
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

        document.addEventListener("DOMContentLoaded", function() {
            const currentPath = window.location.pathname;
            document.querySelectorAll('.menu-list li a').forEach(link => {
                if (link.getAttribute('href') === currentPath) {
                    link.classList.add('active');
                }
            });
        });
    </script>
    
    
    </body>
    </html>

// <x-layout>
//     <x-slot:title>{{ $title }}</x-slot:title>
//     <div class="columns ..."> <!-- 3 kolom card -->
//         <!-- First column -->
//         <div class="row">
//             <!-- Talents -->
//             <a href="/talents">
//                 <div>
//                     <h3>Talents</h3>
//                     <div class="">
//                         <img src="" alt="Talent image">
//                         <div>
//                             <p>Name:</p>
//                             <p>Age:</p>
//                             <p>Role:</p>
//                             <p>Status:</p>
//                         </div>
//                     </div>
//                 </div>
//             </a>

//             <!-- Register -->
//             <a href="/register">
//                 <div>
//                     <h3>Registration</h3>
//                     <div class="">
//                         <button type="submit" class="bi bi-plus">Register Here</button>
//                     </div>
//                 </div>
//             </a>
            
//         </div>

//         <!-- Second column -->
//         <a href="/onwatch">
//             <div>
//                 <h3>On Watch</h3>
//                 <img src="" alt="Talent image">
//                     <div>
//                         <p>Name:</p>
//                         <p>Age:</p>
//                         <p>Role:</p>
//                         <p>Rating:</p>
//                         <p>Status:</p>
//                     </div>
//             </div>
//         </a>

//         <!-- Third column -->
//         <a href="/messages">
//             <div>
//                 <h3>Messages</h3>
//                 <div>
                    
//                 </div>
//             </div>
//         </a>


//     </div>
// </x-layout>
