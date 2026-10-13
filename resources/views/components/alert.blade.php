@props(['tipe' => 'info'])

<div {{ $attributes->merge(['class' => "alert alert-$tipe"]) }}>
    {{ $slot }}
</div>
