@props([
'id',
'initValue'=>'',
'error'=>false,
'placeholder'=>false,
])

<div {{$attributes}}
     wire:ignore
     x-data
     class="mt-1 relative rounded-md shadow-sm"
     @trix-blur="$dispatch('input', $event.target.value);console.log($event.target.value)"
     >
    <input id="{{$id}}" value="{{$initValue}}" type="hidden">
    <trix-editor input="{{$id}}" @if($placeholder) placeholder="{{$placeholder}}" @endif
        class="shadow-sm rounded-md px-4 py-2 @if($error) border-red-600 @endif outline-none focus:ring-indigo-500 border focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"></trix-editor>
</div>
