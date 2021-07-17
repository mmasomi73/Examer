@props([
'class'=>false,
])

<td class="px-6 py-4 whitespace-nowrap {{$class ? $class : ""}}">
    {{$slot}}
</td>
