@if ($isLink ?? false)
    <a href="{{ $href ?? 'JavaScript:void(0)' }}" class="btn btn-{{ $class ?? 'primary' }} font-weight-bold mr-2">
        {{ $slot }}
    </a>
@else
    <button type="{{ $type ?? 'button' }}" class="btn btn-{{ $class ?? 'primary' }}" onclick="this.disabled = true; this.form.submit();">
        {{ $slot }}
    </button>
@endif



{{-- <x-combined-button class="success" isLink=true href="/success">
    {{ __('Success') }}
</x-combined-button>  --}}
