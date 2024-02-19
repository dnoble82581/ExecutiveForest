
<div {{ $attributes->merge(['class' => 'max-w-7xl mx-auto p-5 shadow-lg bg-secondaryWhite rounded-lg']) }}>
    <div class="flex gap-4">

        <livewire:image-viewer :product="$product"/>

        <div class="flex-1">
            <h1 class="font-extrabold text-3xl">{{ $product->name }}</h1>
            <div class="mt-4">
                <h3 class="font-bold uppercase">Description:</h3>
                <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A cumque deleniti expedita nihil nisi nulla optio perspiciatis porro quis veritatis. Asperiores aspernatur et illo labore, magni molestias quo temporibus. Aspernatur.</p>
            </div>
            <div class="mt-4">
                <h3 class="font-bold uppercase">Material</h3>
                <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A cumque deleniti expedita nihil nisi nulla optio perspiciatis porro quis veritatis. Asperiores aspernatur et illo labore, magni molestias quo temporibus. Aspernatur.</p>
            </div>
            <div class="mt-2">
                <h3 class="font-bold">Price:</h3>
                <p class="text-xl mt-2">$75.00</p>
            </div>
            <div class="mt-4">
                <x-links.primary_link class="mr-3" href="#">But Now</x-links.primary_link>
                <x-links.alternative_link href="#">Add To Cart</x-links.alternative_link>
            </div>
        </div>
    </div>
</div>
