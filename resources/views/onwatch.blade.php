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

<body class="onwatch-page">
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
            
                <div class="filter-menu" id="filterMenu"><a>Sort by</a>
                    <div class="filter-option">
                        <input type="checkbox" id="ratingFilter" name="rating">
                        <label for="ratingFilter">Rating</label>
                    </div>
                    <div class="filter-option">
                        <input type="checkbox" id="ageFilter" name="age">
                        <label for="ageFilter">Age</label>
                    </div>
                    <div class="filter-option">
                        <input type="checkbox" id="positionFilter" name="position">
                        <label for="positionFilter">Position</label>
                    </div>
                    {{-- <div class="filter-option">
                        <input type="checkbox" id="locationFilter" name="location">
                        <label for="locationFilter">Location</label>
                    </div>
                    <div class="filter-option">
                        <input type="checkbox" id="statusFilter" name="status">
                        <label for="statusFilter">Status</label>
                    </div> --}}
                    <button class="apply-button" onclick="applyFilters()">Apply</button>
                </div>
            </ul>
        </div>
        
        <div class="talent-container">
            <h2>Player On Watch</h2>
            <div class="player-card">
                <div class="player-stats">
                    <p>GK</p>
                    <img class="player-image" src="{{ asset('img/kiper.jpg') }}" alt="Foto">
                </div>
                <div class="player-info">
                    <h2>SOMMER</h2>
                    <p class="rating">78</p>
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

            <div class="player-card">
                <div class="player-stats">
                    <p>GK</p>
                    <img class="player-image" src="{{ asset('img/kiper.jpg') }}" alt="Foto">
                </div>
                <div class="player-info">
                    <h2>SOMMER</h2>
                    <p class="rating">78</p>
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

            <div class="player-card">
                <div class="player-stats">
                    <p>GK</p>
                    <img class="player-image" src="{{ asset('img/kiper.jpg') }}" alt="Foto">
                </div>
                <div class="player-info">
                    <h2>SOMMER</h2>
                    <p class="rating">78</p>
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

            <div class="player-card">
                <div class="player-stats">
                    <p>GK</p>
                    <img class="player-image" src="{{ asset('img/kiper.jpg') }}" alt="Foto">
                </div>
                <div class="player-info">
                    <h2>SOMMER</h2>
                    <p class="rating">78</p>
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

            <div class="player-card">
                <div class="player-stats">
                    <p>CB</p>
                    <img class="player-image" src="{{ asset('img/bek.jpg') }}" alt="Foto">
                </div>
                <div class="player-info">
                    <h2>MARQUINHOS</h2>
                    <p class="rating">82</p>
                    <div class="detailed-stats">
                        <div class="stat"><p>PAC</p><p>80</p></div>
                        <div class="stat"><p>SHO</p><p>70</p></div>
                        <div class="stat"><p>PAS</p><p>60</p></div>
                        <div class="stat"><p>DRI</p><p>85</p></div>
                        <div class="stat"><p>DEF</p><p>85</p></div>
                        <div class="stat"><p>PHY</p><p>60</p></div>
                    </div>
                    <div class="icons">
                        <img class="flag" src="{{ asset('img/flag.png') }}" alt="Foto">
                        <img class="liga" src="{{ asset('img/liga.png') }}" alt="Foto">
                        <img class="club" src="{{ asset('img/club.png') }}" alt="Foto">
                    </div>
                </div>
            </div>

            <div class="player-card">
                <div class="player-stats">
                    <p>GK</p>
                    <img class="player-image" src="{{ asset('img/kiper.jpg') }}" alt="Foto">
                </div>
                <div class="player-info">
                    <h2>SOMMER</h2>
                    <p class="rating">78</p>
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

            <div class="player-card">
                <div class="player-stats">
                    <p>CB</p>
                    <img class="player-image" src="{{ asset('img/bek.jpg') }}" alt="Foto">
                </div>
                <div class="player-info">
                    <h2>MARQUINHOS</h2>
                    <p class="rating">82</p>
                    <div class="detailed-stats">
                        <div class="stat"><p>PAC</p><p>80</p></div>
                        <div class="stat"><p>SHO</p><p>70</p></div>
                        <div class="stat"><p>PAS</p><p>60</p></div>
                        <div class="stat"><p>DRI</p><p>85</p></div>
                        <div class="stat"><p>DEF</p><p>85</p></div>
                        <div class="stat"><p>PHY</p><p>60</p></div>
                    </div>
                    <div class="icons">
                        <img class="flag" src="{{ asset('img/flag.png') }}" alt="Foto">
                        <img class="liga" src="{{ asset('img/liga.png') }}" alt="Foto">
                        <img class="club" src="{{ asset('img/club.png') }}" alt="Foto">
                    </div>
                </div>
            </div>
        </div>

        <div class="talent-onwatch">
            <img src="{{ asset('img/sommer.png') }}" alt="Foto">
            <p>Full Name: Yann Sommer</p>
            <p>Position: GK</p>      
            <p>Overall Rating: 78</p>
            <p>Diving: 80</p>
            <p>Handling: 70</p>
            <p>Kicking: 60</p>
            <p>Reflexes: 85</p>
            <p>Speed: 85</p>
            <p>Positioning: 60</p>
            <p>Preferred Foot: Right</p>
            <p>Age: 18</p>
            <p>Gender: Male</p>
            <p>Height: 180 cm</p>
            <p>Weight: 80 kg</p>
            <p>Address: Nganjuk</p>
            <p>Highlight Video: click here</p>

            <div class="button-container">
                <button id="edit" class="btn-edit" type="submit" name="edit">
                    <img src="{{ asset('img/edit.png') }}" alt="edit">Edit
                </button>
    
                <button id="delete" class="btn-delete" name="delete">
                    Delete <img src="{{ asset('img/delete.png') }}" alt="edit">
                </button>
            </div>
        </div>
    </div>

    <div id="confirmationPopup" class="popup-delete">
        <div class="popup-content-delete">
            <p>Anda yakin untuk menghapus data talent?</p>
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

        document.addEventListener("DOMContentLoaded", function() {
            const currentPath = window.location.pathname;
            document.querySelectorAll('.menu-list li a').forEach(link => {
                if (link.getAttribute('href') === currentPath) {
                    link.classList.add('active');
                }
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            const playerCards = document.querySelectorAll('.player-card'); // Ambil semua elemen player-card
            const playerCardCount = playerCards.length; // Hitung jumlah player-card
            const containerHeightMultiplier = Math.ceil(playerCardCount / 3); // Hitung jumlah kelipatan 5 dari jumlah player-card
            const containerHeight = containerHeightMultiplier * 400; //Tentukan tinggi container berdasarkan jumlah kelipatan 5

            document.querySelector('.talent-container').style.height = `calc(${containerHeightMultiplier} * 400px)`; // Atur tinggi talent-container sesuai dengan hasil perhitungan
        });

        document.addEventListener("DOMContentLoaded", function() {
            const deleteButton = document.querySelector('button[name="delete"]');
            const confirmationPopup = document.getElementById("confirmationPopup");
            const confirmYes = document.getElementById("confirmYes");
            const confirmNo = document.getElementById("confirmNo");

            deleteButton.addEventListener("click", function(event) {
                event.preventDefault(); 
                confirmationPopup.style.display = "block";
            });

            confirmYes.addEventListener("click", function() {
                confirmationPopup.style.display = "none";
                alert("Item deleted successfully.");
                document.querySelector('form').reload();
            });

            confirmNo.addEventListener("click", function() {
                confirmationPopup.style.display = "none";
            });

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
//                 <h1>On Watch</h1>
//             </main>
//         </div>
//     </div>
// </x-layout>
