<button
    {{ $attributes->merge(["class" => "px-3 py-2 text-sm font-semibold text-white bg-indigo-600 rounded-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", "type" => "submit"]) }}
>{{ $slot }}</button>
