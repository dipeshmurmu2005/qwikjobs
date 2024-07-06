<div class="jobseeker-signup-section px-12 py-10 flex justify-between gap-10 items-center">
    <div class="w-[60%]">
        <div class="header">
            <h1 class="font-bold text-2xl mb-10">Create account & Post Job for free</h1>
        </div>
        <form wire:submit="register" class="mt-5 grid grid-cols-2 gap-5">

            {{-- Organization Name --}}
            <x-form.input label="Organization Name" property="name">
                <input type="text" class="input input-bordered" placeholder="Type Here.." wire:model="name">
            </x-form.input>

            {{-- Organization Email --}}
            <x-form.input label="Organization Email" property="email">
                <input type="email" class="input input-bordered" placeholder="org@gmail.com" wire:model="email">
            </x-form.input>

            {{-- Organization Type --}}
            <x-form.select label="Choose Organization Type" property="type">
                <option value="" selected>Choose Here</option>
                <option value="IT">IT</option>
                <option value="BANKING">BANKING</option>
            </x-form.select>

            {{-- Organization Number --}}
            <x-form.input label="Number" property="number">
                <input type="number" class="input input-bordered" placeholder="0000000000" wire:model="number">
            </x-form.input>


            {{-- Organization Location --}}
            <div class="col-span-2">
                <x-form.select label="Choose District" property="district">
                    <option value="">Choose Here</option>
                    <option value="Jhapa">Jhapa</option>
                </x-form.select>
            </div>



            {{-- Password --}}
            <x-form.input label="Password" property="password_confirmation">
                <input type="password" class="input input-bordered grow"
                    placeholder="&bull; &bull; &bull; &bull; &bull; &bull; &bull; &bull; &bull; &bull; &bull;"
                    wire:model="password_confirmation">
            </x-form.input>

            {{-- Password Confirmation --}}
            <x-form.input label="Confirm Password" property="password">
                <input type="password" class="input input-bordered grow"
                    placeholder="&bull; &bull; &bull; &bull; &bull; &bull; &bull; &bull; &bull; &bull; &bull;"
                    wire:model="password">
            </x-form.input>

            <div class="col-span-2">
                <span class="text-sm">By clicking Register, you agree to the <a href="#"
                        class="text-purple-color">Terms and Conditions</a> & <a href="#"
                        class="text-purple-color">Privacy Policy</a> of Qwikjobs</span>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </div>
    <div class="w-[40%] h-screen relative overflow-hidden rounded-md">
        <div class="image h-full w-full rounded-md">
            <img src="https://www.wework.com/ideas/wp-content/uploads/sites/4/2017/06/Web_150DPI-20190927_10th_Floor_Conference_Room_2_v1-1120x630.jpg"
                alt="" class="h-full w-full object-cover">
        </div>
        <div class="overlay bg-[#0000005a] absolute h-full w-full left-0 top-0 p-5">
            <h1 class="font-bold text-white text-4xl leading-snug mt-10">Let us help you Finding your employees.</h1>
            <div class="bg-white rounded-md p-5 mt-10">
                <h1 class="font-semibold mb-2 text-grey-text-color">Companies found us helpful.</h1>
                <ul class="companies grid grid-cols-3 gap-x-5 gap-y-2">
                    <li class="">
                        <img src="https://imelondon.co.uk/assets/dist/images/ime-pay.png" alt=""
                            class="h-full w-full object-contain grayscale">
                    </li>
                    <li class="">
                        <img src="https://web.khalti.com/static/img/logo1.png" alt=""
                            class="h-full w-full object-contain grayscale">
                    </li>
                    <li class="">
                        <img src="https://image.pitchbook.com/u63WbK5hrEA9NUBDUiYkF8ambBg1668435605602_200x200"
                            alt="" class="h-full w-full object-contain grayscale">
                    </li>
                    <li class="">
                        <img src="https://www.nmc.coop.np/wp-content/uploads/2023/10/banking-aa-986x1024.png"
                            alt="" class="h-full w-full object-contain grayscale">
                    </li>
                    <li class="">
                        <img src="https://blog.nicasiabank.com/wp-content/uploads/2023/09/NIC-Asia-horizontal-logo-Red.png"
                            alt="" class="h-full w-full object-contain grayscale">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
