@props(['vendor'])
<div class="rounded-lg border hover:shadow-lg duration-300 overflow-hidden">
    <a href="{{ route('vendor', $vendor->id) }}">
        <img class="h-[260px] w-full object-cover"
            src="{{ asset(Storage::url($vendor->shop->logo)) }}" alt="{{ $vendor->shop->name }}">
        <div class="px-4 py-2">
            <h1>{{ Str::limit($vendor->shop->name, 60, '...') }} ({{ count($vendor->products) }})
            </h1>
            <small>{{ $vendor->shop->address }}</small>
        </div>
    </a>
</div>

