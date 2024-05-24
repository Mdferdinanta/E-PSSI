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

<body class="home-page">
    <div class="navbar">
        <a href="/home" class="navbar-logo">
            <img src="{{ asset('img/logo.png') }}" alt="Logo">
        </a>
        <div class="navbar-title">E-PSSI</div>
        
        <div class="search-box">
            <input type="text" placeholder="Search...">
                <button class="search-button" onclick="location.href='/talent'"><i class="fas fa-search"></i></button>
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
