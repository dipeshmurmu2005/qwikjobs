<label class="form-control w-full">
    <div class="label">
        <span class="label-text font-semibold">{{ $label }}</span>
    </div>
    <select class="select select-bordered" wire:model="{{ $property }}">
        {{ $slot }}
    </select>
    <div class="label">
        <span class="label-text-alt text-error">
            @error("$property")
                {{ $message }}
            @enderror
        </span>
    </div>
</label>
