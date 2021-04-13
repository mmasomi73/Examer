@props([
'error'=>false,
])

<div class="mt-1 relative rounded-md shadow-sm" xmlns:wire="http://www.w3.org/1999/xhtml">

    <textarea {{$attributes}}
              class="shadow-sm rounded-md px-4 py-2 @if($error) border-red-600 @endif outline-none focus:ring-indigo-500 border focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"
    ></textarea>

</div>
