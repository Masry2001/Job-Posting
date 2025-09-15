@props(['width' => 90, 'employer'])
<!-- <img src="{{ asset('storage/' . $employer->logo) }}" alt="image" class="rounded-xl" width="{{ $width }}">-->


@if(Str::startsWith($employer->logo, 'logos/'))
    {{-- Local uploaded logo --}}
    <img src="{{ asset('storage/' . $employer->logo) }}" alt="logo" class="rounded-xl" width="{{ $width }}">
@else
    {{-- Random placeholder if logo is external (from factory) --}}
    <img src="http://picsum.photos/seed/{{ rand(0, 1000) }}/{{ $width }}" alt="placeholder" class="rounded-xl">
@endif