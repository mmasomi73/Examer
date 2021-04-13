@props([
    'label',
    'for',
    'helpText' => false,
])

<label for="{{$for}}" class="block text-black">{{$label}}</label>
    {{$slot}}
@error($for)<span class="p-2 mt-3 text-red-600 text-sm">{{$message}}</span> @enderror
@if($helpText)
<p class="mt-2 text-sm text-gray-500">
    {{$helpText}}
</p>
@endif
