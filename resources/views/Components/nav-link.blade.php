@props(['active' => false, 'type' => 'a'])

@if ($type === 'a')
<a {{ $attributes->merge(['class' => $active ? 'nav-item active' : 'nav-item']) }}>
    {{ $slot }}
</a>
@else
<button {{ $attributes->merge(['class' => $active ? 'nav-item active' : 'nav-item']) }}>
    {{ $slot }}
</button>
@endif
