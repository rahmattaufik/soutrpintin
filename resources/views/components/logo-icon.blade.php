@props([
    'color' => '#0BBEFF',
    'bg' => 'transparent',
    'class' => 'w-8 h-8'
])

{{-- Sederhana huruf S terinspirasi logo Soutprint.In, tajam dan jelas di ukuran kecil --}}
<svg class="{{ $class }}" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="Soutprint.In Logo">
    @if($bg !== 'transparent')
    <rect width="40" height="40" rx="8" fill="{{ $bg }}" />
    @endif
    <!-- Circuit S stroke without cluttered tiny details -->
    <path d="M29 11H15C12.2386 11 10 13.2386 10 16C10 18.7614 12.2386 21 15 21H25C27.7614 21 30 23.2386 30 26C30 28.7614 27.7614 31 25 31H11" 
          stroke="{{ $color }}" 
          stroke-width="3.5" 
          stroke-linecap="round" 
          stroke-linejoin="round" />
    <!-- S Circuit Terminal Nodes -->
    <circle cx="29" cy="11" r="2.2" fill="{{ $color }}" />
    <circle cx="11" cy="31" r="2.2" fill="{{ $color }}" />
    <path d="M18 26H11" stroke="{{ $color }}" stroke-width="2.5" stroke-linecap="round" />
    <circle cx="18" cy="26" r="1.8" fill="{{ $color }}" />
</svg>
