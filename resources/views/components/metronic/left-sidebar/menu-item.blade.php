<!-- /resources/views/components/menu-item.blade.php -->

@props(['hrefRouteName', 'activeRouteName', 'title'])

@php
    use Illuminate\Support\Str;
    $isActive = Str::startsWith(request()->route()->getName(), $activeRouteName);
@endphp

<div class="menu-item {{ $isActive ? 'menu-item-active' : '' }}">
    <a class="menu-link" href="{{ route($hrefRouteName) }}">
        <span class="menu-bullet">
            <span class="bullet bullet-dot"></span>
        </span>
        <span class="menu-title">{{ ucfirst($title) }}</span>
        @if ($isActive)
            <span class="menu-arrow"></span>
        @endif
    </a>
</div>
