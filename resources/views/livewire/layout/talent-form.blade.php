<div class="">

    <form wire:submit="saveTalent" class="">           
        <div class="md:flex md:space-x-8">
            <!-- Left Section -->
            <div class="space-y-2 md:w-2/3">
                <!-- Name -->
                <div class="items-center sm:flex">
                    <x-input-label for="name" :value="__('Name')" class="flex-none sm:w-32" />
                    <x-text-input type="text" wire:model.blur="form.name" id="name" name="name" class="block w-full"
                        required />
                    <x-input-error :messages="$errors->get('form.name')" class="mt-2" />
                </div>
    
                <!-- Age -->
                <div class="items-center sm:flex">
                    <x-input-label for="age" :value="__('Age')" class="flex-none sm:w-32" />
                    <x-text-input type="number" wire:model.blur="form.age" id="age" name="age" class="block w-32"
                        required />
                    <x-input-error :messages="$errors->get('form.age')" class="mt-2" />
                </div>
    
                <!-- Gender -->
                <div class="items-center sm:flex">
                    <x-input-label for="gender" :value="__('Gender')" class="flex-none sm:w-32" />
                    <select wire:model.blur="form.gender" name="gender" id="gender"
                        class="block w-32 border-gray-300 rounded-md shadow-sm dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 focus:border-prim-5 dark:focus:border-prim-4 focus:ring-prim-5 dark:focus:ring-prim-4">
                        <option value="" disabled selected>Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    <x-input-error :messages="$errors->get('form.gender')" class="mt-2" />
                </div>
    
                <!-- Weight & Height -->
                <div class="items-center sm:flex">
                    <x-input-label for="wh" :value="__('Weight/Height')" class="flex-none sm:w-32" />
                    <div class="flex items-center">
                        <x-text-input type="number" wire:model.blur="form.weight" id="weight" name="weight"
                            class="block w-full lg:w-32" required />
                        <p class="flex mx-2 dark:text-gray-200">Kg</p>
                        <x-input-error :messages="$errors->get('form.weight')" class="mt-2" />
    
                        <x-text-input type="number" wire:model.blur="form.height" id="height" name="height"
                            class="block w-full lg:w-32" required />
                        <p class="flex mx-2 dark:text-gray-200">cm</p>
                        <x-input-error :messages="$errors->get('form.height')" class="mt-2" />
                    </div>
                </div>
    
                <!-- Address -->
                <div class="items-center sm:flex">
                    <x-input-label for="address" :value="__('Address')" class="flex-none sm:w-32" />
                    <x-text-input type="text" wire:model.blur="form.address" id="address" name="address"
                        class="block w-full" required />
                    <x-input-error :messages="$errors->get('form.address')" class="mt-2" />
                </div>
    
                <div x-data="{ position: @entangle('form.position') }">
                    <!-- Position -->
                    <div class="items-center sm:flex">
                        <x-input-label for="position" :value="__('Postition')" class="flex-none sm:w-32" />
                        <select wire:model.blur="form.position" x-model="position" name="position" id="position"
                            class="block w-32 border-gray-300 rounded-md shadow-sm dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 focus:border-prim-5 dark:focus:border-prim-4 focus:ring-prim-5 dark:focus:ring-prim-4">
                            <option value="" disabled selected>POS</option>
                            <option value="CF">CF</option>
                            <option value="RWF">RWF</option>
                            <option value="LWF">LWF</option>
                            <option value="AM">AM</option>
                            <option value="CM">CM</option>
                            <option value="DM">DM</option>
                            <option value="RM">RM</option>
                            <option value="LM">LM</option>
                            <option value="RB">RB</option>
                            <option value="LB">LB</option>
                            <option value="CB">CB</option>
                            <option value="GK">GK</option>
                        </select>
                        <x-input-error :messages="$errors->get('form.position')" class="mt-2" />
                    </div>
    
                    <!-- Conditional Input -->
                    <div x-show="position === 'GK'" id="gkAttributes">
                        <div class="items-center mt-2 sm:flex">
                            <!-- Goalkeeper Attributes -->
                            <x-input-label for="Attributes" :value="__('GK Attributes')" class="flex-none sm:w-32" />
                            <div class="grid items-center grid-cols-3 gap-2 lg:grid-cols-6">
                                <x-text-input type="number" wire:model.blur="form.diving" id="diving" name="diving"
                                    placeholder="DIV" class="block w-full" />
                                <x-input-error :messages="$errors->get('form.diving')" class="mt-2" />
                                <x-text-input type="number" wire:model.blur="form.handling" id="handling" name="handling"
                                    placeholder="HAN" class="block w-full" />
                                <x-input-error :messages="$errors->get('form.handling')" class="mt-2" />
                                <x-text-input type="number" wire:model.blur="form.kicking" id="kicking" name="kicking"
                                    placeholder="KIC" class="block w-full" />
                                <x-input-error :messages="$errors->get('form.kicking')" class="mt-2" />
                                <x-text-input type="number" wire:model.blur="form.reflexes" id="reflexes" name="reflexes"
                                    placeholder="REF" class="block w-full" />
                                <x-input-error :messages="$errors->get('form.reflexes')" class="mt-2" />
                                <x-text-input type="number" wire:model.blur="form.speed" id="speed" name="speed"
                                    placeholder="SPD" class="block w-full" />
                                <x-input-error :messages="$errors->get('form.speed')" class="mt-2" />
                                <x-text-input type="number" wire:model.blur="form.positioning" id="positioning"
                                    name="positioning" placeholder="POS" class="block w-full" />
                                <x-input-error :messages="$errors->get('form.positioning')" class="mt-2" />
                            </div>
                        </div>
                    </div>
    
                    <div x-show="position !== 'GK' && position !== ''" id="nonGkAttributes">
                        <div class="items-center mt-2 sm:flex">
                            <!-- Outfield Attributes -->
                            <x-input-label for="Attributes" :value="__('Attributes')" class="flex-none sm:w-32" />
    
                            <div class="grid items-center grid-cols-3 gap-2 lg:grid-cols-6">
                                <x-text-input type="number" wire:model.blur="form.pace" id="pace" name="pace"
                                    placeholder="PAC" class="block w-full" />
                                <x-input-error :messages="$errors->get('form.pace')" class="mt-2" />
                                <x-text-input type="number" wire:model.blur="form.shoot" id="shoot" name="shoot"
                                    placeholder="SHO" class="block w-full" />
                                <x-input-error :messages="$errors->get('form.shoot')" class="mt-2" />
                                <x-text-input type="number" wire:model.blur="form.pass" id="pass" name="pass"
                                    placeholder="PAS" class="block w-full" />
                                <x-input-error :messages="$errors->get('form.pass')" class="mt-2" />
                                <x-text-input type="number" wire:model.blur="form.dribble" id="dribble" name="dribble"
                                    placeholder="DRI" class="block w-full" />
                                <x-input-error :messages="$errors->get('form.dribble')" class="mt-2" />
                                <x-text-input type="number" wire:model.blur="form.defence" id="defence" name="defence"
                                    placeholder="DEF" class="block w-full" />
                                <x-input-error :messages="$errors->get('form.defence')" class="mt-2" />
                                <x-text-input type="number" wire:model.blur="form.physical" id="physical" name="physical"
                                    placeholder="PHY" class="block w-full" />
                                <x-input-error :messages="$errors->get('form.physical')" class="mt-2" />
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Preferred Foot -->
                <div class="items-center sm:flex">
                    <x-input-label for="foot" :value="__('Preferred Foot')" class="flex-none sm:w-32" />
                    <select wire:model.blur="form.foot" name="foot" id="foot"
                        class="block w-32 border-gray-300 rounded-md shadow-sm dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 focus:border-prim-5 dark:focus:border-prim-4 focus:ring-prim-5 dark:focus:ring-prim-4">
                        <option value="" disabled selected>Foot</option>
                        <option value="Both">Both</option>
                        <option value="Left">Left</option>
                        <option value="Right">Right</option>
                    </select>
                    <x-input-error :messages="$errors->get('form.foot')" class="mt-2" />
                </div>
    
                <!-- Status -->
                <div class="items-center sm:flex">
                    <x-input-label for="status" :value="__('Status')" class="flex-none sm:w-32" />
                    <select wire:model.blur="form.status" name="status" id="status"
                        class="block w-32 border-gray-300 rounded-md shadow-sm dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 focus:border-prim-5 dark:focus:border-prim-4 focus:ring-prim-5 dark:focus:ring-prim-4">
                        <option value="" disabled selected>Status</option>
                        <option value="Free Agent">Free agent</option>
                        <option value="On Contract">On contract</option>
                    </select>
                    <x-input-error :messages="$errors->get('form.status')" class="mt-2" />
                </div>
    
                <!-- Video -->
                <div class="items-center sm:flex">
                    <x-input-label for="video" :value="__('Video URL')" class="flex-none sm:w-32" />
                    <x-text-input type="text" wire:model.blur="form.video" id="video" name="video"
                        class="block w-full" placeholder="https://example.com" />
                    <x-input-error :messages="$errors->get('form.video')" class="mt-2" />
                </div>
            </div>
    
            <!-- Right Section -->
            <div class="mt-2 md:mt-0 md:w-1/3">
                <!-- Photo -->
                <div class="items-center sm:flex md:block">
                    <x-input-label for="photo" :value="__('Profile Photo')" class="flex-none sm:w-32" />
                    <x-text-input type="file" wire:model.blur="form.photo" id="photo" name="photo"
                        class="block w-full dark:text-gray-400" />
                    <x-input-error :messages="$errors->get('form.photo')" class="mt-2" />
                </div>
    
                @if ($form->photo)
                    <img src="{{ $form->photo->temporaryUrl() }}" class="w-full h-auto">
                @else
                    <div class="mt-1 text-sm text-center text-gray-500">
                        <p>Up to 1 MB | PNG, JPG, JPEG</p>
                    </div>
                @endif
            </div>
        </div>
    
        <div class="flex items-center justify-center mt-4">
            <x-primary-button class="ms-3 w">
                {{ __('Save') }}
            </x-primary-button>
        </div>
    
        {{-- <script>
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
        </script> --}}
    
        {{-- <script>
            const positionSelect = document.getElementById('position');
            const gkAttributes = document.querySelector('.gk-attributes');
            const outfieldAttributes = document.querySelector('.outfield-attributes');
    
            function toggleAttributeVisibility() {
                const selectedPosition = positionSelect.value;
                // const outfield = [
                //     'CF', 'RWF', 'LWF',
                //     'AM', 'CM', 'DM', 'RM', 'LM',
                //     'RB', 'LB', 'CB'
                // ]
    
                outfieldAttributes.style.display = 'none';
                gkAttributes.style.display = 'none';
    
                if (selectedPosition === 'GK') {
                    gkAttributes.style.display = 'block';
                }
                elseif(selectedPosition !== 'GK') {
                    outfieldAttributes.style.display = 'block';
                }
            }
    
            positionSelect.addEventListener('change', toggleAttributeVisibility);
            toggleAttributeVisibility();
        </script> --}}
    </form>
    

</div>
