<x-frontend-layout>
    
    <!-- Deals -->
    <section>
        <div class="container py-10">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-2xl primary">Deals</h1>
                    <small>Best quality deals and products</small>
                </div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 md:gap-10 py-5">
                @foreach ($products as $product)

                <x-product-card :product="$product" />

                @endforeach
            </div>
        </div>
    </section>
    <!-- Deals -->

</x-frontend-layout>