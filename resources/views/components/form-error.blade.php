@props(['name'])
@error($name)
    <p class="text-xs text-red-500 bold">{{ $message }}</p>
@enderror
