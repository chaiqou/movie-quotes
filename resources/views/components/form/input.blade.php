@props(['name', 'type' => 'text'])


<x-form.container>

    <x-form.label name='{{ $name }}' />

    <input class="border rounded-xl border-gray-600 p-2 w-full" type='text' name='{{ $name }}'
        id='{{ $name }}' {{ $attributes(['value' => old($name)]) }}>

    <x-form.error name='{{ $name }}' />

</x-form.container>
