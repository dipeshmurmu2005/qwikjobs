<div class="px-12 py-10">
    <div class="grid gap-5 grid-cols-3">
        <div class="sticky top-0 h-fit">
            <x-joblisting.filters />
        </div>
        <div class="col-span-2">
            <div class="sticky top-0 bg-white py-5 flex justify-between items-center">
                <span class="text-sm"><span class="font-semibold mr-1">1-10</span>of<span
                        class="font-semibold mr-1 ml-1">10</span>Jobs</span>
                <form action="">
                    <select name="" id=""
                        class="text-sm border border-[#ededed] px-3 py-2 rounded-sm cursor-pointer outline-none">
                        <option value="">Sort by</option>
                        <option value="">Recommended</option>
                        <option value="">Date</option>
                    </select>
                </form>
            </div>

            <div class="jobs grid gap-2">
                <x-job />
                <x-job />
                <x-job />
                <x-job />
                <x-job />
                <x-job />
            </div>
        </div>
    </div>
</div>
</div>
