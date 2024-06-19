<div class="p-10 space-y-6 bg-gray-700 m-20 rounded-3xl">

    <div class="flex flex-col items-center my-4">
        <h1 class="mb-4 text-7xl font-medium font-display">WELCOME TO</h1>
        <x-application-logo class="items-center h-20" />
    </div>
    <div class="tracking-widest flex flex-col text-xl items-center">
        <p>Platform for Discovering Future Football Icons</p>
    </div>
    <div class="flex flex-col items-end">
        <p>Are you a scouter?</p>
        <a href="{{ route('talents') }}" class="hover:text-prim-5 text-prim-3">Search young talents here
            <i class="ri-arrow-right-double-line"></i></a>
    </div>
    <div class="justify-start">
        <p>If you want to register young talent</p>
        <a href="{{ route('talents') }}" 
            class="hover:text-prim-5 text-prim-3">
            REGISTER HERE
        </a>
    </div>

</div>
