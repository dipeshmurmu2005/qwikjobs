<div class="navbar flex justify-between items-center px-12 py-4 text-grey-text-color bg-light-primary-color">
    <div class="flex gap-5 items-center justify-between w-full">
        <div class="flex gap-5 items-center">
            <a href="{{ route('home') }}" wire:navigate>
                <div class="logo h-[70px] w-[200px]"><img
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d2/Upwork-logo.svg/1200px-Upwork-logo.svg.png"
                        alt="" class="h-full w-full object-cover"></div>
            </a>

            <div class="links text-black flex gap-5">
                <a href="{{ route('joblist') }}" class="font-normal" wire:navigate>Jobs</a>
            </div>
        </div>

        <div class="flex gap-2">
            <label class="input bg-white input-bordered flex items-center gap-2">
                <input type="text" class="grow" placeholder="Search" />
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                    class="h-4 w-4 opacity-70">
                    <path fill-rule="evenodd"
                        d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                        clip-rule="evenodd" />
                </svg>
            </label>
            <div>
                <button class="btn btn-outline btn-secondary">Log in</button>
                <button class="btn btn-primary">Register</button>
            </div>
        </div>
    </div>
</div>
