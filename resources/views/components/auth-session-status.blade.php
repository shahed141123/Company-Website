{{-- @props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-600']) }}>
        {{ $status }}
    </div>
@endif --}}


@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'fw-semibold text-success']) }}>
        {{ $status }}
    </div>
@endif
