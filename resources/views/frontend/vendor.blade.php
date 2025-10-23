<x-frontend-layout>
    <section class="relative">

        <img class="w-full h-[85vh] object-cover" src="{{ asset(Storage::url($vendor->shop->logo)) }}" alt="{{ $vendor->shop->name }}">
        <div class="grid grid-cols-12 items-center absolute bottom-0">
            <img class="" src="{{ asset(Storage::url($vendor->shop->logo)) }}" alt="{{ $vendor->shop->name }}">
            <div class="col-span-11  bg-black opacity-70 text-white h-full flex items-center justify-between">
                <div>
                    <h1 class="text-xl font-medium">{{ $vendor->shop->name }}</h1>
                <address>{{ $vendor->shop->address }}</address>
                </div>
                <div>
                    map
                </div>
            </div>

        </div>
    </section>


</x-frontend-layout>