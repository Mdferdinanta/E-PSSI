<!DOCTYPE html>
<html lang="en">
    <x-header></x-header>
    <body>
        <div>
            <!-- Navbar -->
            <x-navbar></x-navbar>

            <h3>{{ $title }}</h3>

            <!-- Contents -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>