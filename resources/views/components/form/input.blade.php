<label class="form-control w-full">
    <div class="label">
        <span class="label-text font-semibold">{{ $label }}</span>
    </div>
    {{ $slot }}
    <div class="label">
        <span class="label-text-alt text-error h-2">
            @error("$property")
                {{ $message }}
            @enderror
        </span>
    </div>
</label>
