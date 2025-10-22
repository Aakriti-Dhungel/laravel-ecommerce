@props(['product'])
<div class="border text-xs rounded-lg overflow-hidden hover:shadow-md duration-300">
    <a href="" class="grid grid-cols-2 gap-2 items-center">
        <img src="{{asset(Storage::url($product->image))}}" alt="{{$product->name}}" class="w-full h-[100px] object-cover">
        <div>
            <h1 class="text-sm font-medium">{{ Str::limit($product->name, 30, '...') }} </h1>
            <div>
                @if ($product->discount || $product->discount > 0)
                <s class="text-red-600">Rs.{{ $product->price }}</s>
                Rs.{{ $product->price - ($product->price * $product->discount) / 100 }}
                @else
                Rs.{{ $product->price }}
                @endif
            </div>

            <strong>{{ $product->vendor->shop->name }}</strong>
        </div>
    </a>
</div>