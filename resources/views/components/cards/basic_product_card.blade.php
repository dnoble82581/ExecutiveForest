<div {{ $attributes->merge(['class' => 'mt-10 flex justify-center gap-5 lg:flex-col lg:items-center']) }}>
    <div class="max-w-sm bg-white border border-gray-200 transition-colors ease-in-out hover:bg-slate-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="rounded-t-lg" src="{{ Vite::asset('resources/assets/images/shop/products/Tycoon-Slvr-Ftn-Red-Inlay20181202_0001.jpg') }}" alt="" />
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
            </a>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>

            <x-buttons.primary_link>Buy Now</x-buttons.primary_link>
            <x-buttons.secondary_link>Add to Cart</x-buttons.secondary_link>
        </div>
    </div>
</div>
