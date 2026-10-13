@props(['tipe' => 'info'])

<div {{ $attributes->merge(['class' => 'alert alert-' . $tipe]) }} style="padding: 10px; margin-bottom: 15px; border: 1px solid black; background-color: #f8d7da; color: #721c24;">
    {{ $slot }}
</div>