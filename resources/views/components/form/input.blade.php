<label class="form-control w-full">
    <div class="label">
        <span class="label-text font-semibold">{{ $label }}</span>
    </div>
    {{ $slot }}
    <div class="label">
        @error("$property")
            <span class="label-text-alt text-error">{{ $message }}</span>
        @enderror
    </div>
</label>
