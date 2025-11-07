<x-frontend-layout>
    <!-- Shop -->
    <section>
        <div class="container py-10">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-2xl primary">Featured Shop/Store</h1>
                    <small>The nearest shop/store to your location.</small>
                </div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-10 py-5">
                @foreach ($vendors as $vendor)

                <x-vendor-card :vendor="$vendor" />
                @endforeach
            </div>
        </div>
    </section>
    <!-- Shop -->

</x-frontend-layout>