<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="columns ..."> <!-- 3 kolom card -->
        <!-- First column -->
        <div class="row">
            <!-- Talents -->
            <a href="/talents">
                <div>
                    <h3>Talents</h3>
                    <div class="">
                        <img src="" alt="Talent image">
                        <div>
                            <p>Name:</p>
                            <p>Age:</p>
                            <p>Role:</p>
                            <p>Status:</p>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Register -->
            <a href="/register">
                <div>
                    <h3>Registration</h3>
                    <div class="">
                        <button type="submit" class="bi bi-plus">Register Here</button>
                    </div>
                </div>
            </a>
            
        </div>

        <!-- Second column -->
        <a href="/onwatch">
            <div>
                <h3>On Watch</h3>
                <img src="" alt="Talent image">
                    <div>
                        <p>Name:</p>
                        <p>Age:</p>
                        <p>Role:</p>
                        <p>Rating:</p>
                        <p>Status:</p>
                    </div>
            </div>
        </a>

        <!-- Third column -->
        <a href="/messages">
            <div>
                <h3>Messages</h3>
                <div>
                    
                </div>
            </div>
        </a>


    </div>
</x-layout>