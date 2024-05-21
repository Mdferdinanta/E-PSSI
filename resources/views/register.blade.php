<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container">
        <div class="row">
            <x-sidebar></x-sidebar>
            <main>
                <form action="" method="post">
                    <div><span>Registration Form</span></div>
                    <div>
                        <label for="">Photo</label>
                        <input type="file" accept=".jpg, .jpeg, .png">
                    </div>
                    <div>
                        <label for="">Name</label>
                        <input type="text" placeholder="Full Name">
                    </div>
                    <div>
                        <label for="">Age</label>
                        <input type="number" placeholder="Age">
                    </div>
                    <div>
                        <label for="">Gender</label>
                        <select name="Gender" id="">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div>
                        <label for="">W/H</label>
                        <input type="text" placeholder="Weight"><label>Kg</label>
                        <input type="text" placeholder="Height"><label>cm</label>
                    </div>
                    <div>
                        <label for="">Role</label>
                        <select name="Role" id="">
                            <option value="">CF</option>
                            <option value="">RWF</option>
                            <option value="">LWF</option>
                            <option value="">AM</option>
                            <option value="">CM</option>
                            <option value="">RM</option>
                            <option value="">LM</option>
                            <option value="">DM</option>
                            <option value="">RWB</option>
                            <option value="">LWB</option>
                            <option value="">CB</option>
                            <option value="">GK</option>
                        </select>
                    </div>
                    <div>
                        <label for="">Rating</label>
                        <input type="text" placeholder="Rating">
                    </div>

                    <!-- 
                        FIELDSET for interactive filling
                        hide / show sesuai dengan
                        role yang di pilih di atas
                        
                        if goalkeeper >> then show goalkeepr stats
                            else show outfield stats
                    -->
                    <div>
                        <fieldset> <!-- Outfield Player Key Stats -->
                            <legend>Key Stats:</legend>
                            <label for="">Pace</label>
                            <input type="number">
                            <label for="">Shoot</label>
                            <input type="number">
                            <label for="">Pass</label>
                            <input type="number">
                            <label for="">Dribble</label>
                            <input type="number">
                            <label for="">Defence</label>
                            <input type="number">
                            <label for="">Physics</label>
                            <input type="number">
                        </fieldset>
                    </div>
                    <div>
                        <fieldset> <!-- Goalkeeper Key Stats -->
                            <legend>Key Stats:</legend>
                            <label for="">Diving</label>
                            <input type="number">
                            <label for="">Handling</label>
                            <input type="number">
                            <label for="">Kicking</label>
                            <input type="number">
                            <label for="">Reflexes</label>
                            <input type="number">
                            <label for="">Speed</label>
                            <input type="number">
                            <label for="">Positioning</label>
                            <input type="number">
                        </fieldset>
                    </div>

                    <div>
                        <label for="">Status</label>
                        <input type="text" placeholder="Status">
                    </div>
                    <div>
                        <label for="">Video Link</label>
                        <input type="text" placeholder="Video Link">
                    </div>
                    <a href="/"><button type="submit" name="submit">Register</button></a>
                </form>
            </main>
        </div>
    </div>



</x-layout>