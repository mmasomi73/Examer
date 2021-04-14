@props([
'error'=>false,
])

<div
    x-data="{}"
    x-init="new Pikaday({ field: $refs.datepicker,format: 'YYYY/MM/DD', });"
    @change="$dispatch('input', $event.target.value)"
    class="mt-1 relative rounded-md shadow-sm" xmlns:wire="http://www.w3.org/1999/xhtml">

    <input {{$attributes}}
           x-ref="datepicker"
           class="rounded-md px-4 py-2 border @if($error) border-red-600 @endif mt-1 focus:ring-blue-500 outline-none
           focus:border-blue-500 block w-full shadow-sm sm:text-sm rounded-md w-full"
    />
</div>

