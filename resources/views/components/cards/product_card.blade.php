<div class="max-w-lg bg-white border border-gray-200 rounded-lg shadow p-3 hover:bg-gray-200 transition-colors ease-in-out">
    <a href="{{ route('product', $product) }}">
            <img class="rounded-lg" src="{{ $product->images->first()->image ?? '' }}" alt="" />
    </a>
    <div class="p-5">
        <a href="{{ route('product', $product) }}">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $product->name }}</h5>
        </a>

        <hr class="border-accentBlue mb-2">

        <p class="text-sm text-gray-500">Status: {{ $product->status == '1' ? 'Available' : 'Sold Out' }}</p>
        <p class="text-lg font-bold mt-2 text-accentOrange">${{ $product->price }}</p>
        <p class="text-sm mt-2 font-bold">Material and Finish:</p>
        <p class="text-sm">{{ $product->material_finish }}</p>

        <div class="flex justify-between items-center mt-4">
            <x-links.primary_link href="#" class="">
                Buy Now
            </x-links.primary_link>

            <x-links.alternative_link href="#">
                Add To Cart
            </x-links.alternative_link>
        </div>

    </div>
</div>
