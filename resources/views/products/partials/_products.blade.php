<div class="mt-10">
    <h1 class="text-primaryBlack text-3xl text-center">Shop <span class="text-primaryGreen">Our Latest</span> Inventory</h1>
    <p class="max-w-xl m-auto text-center">Have something unique in mind? We can help. <a class="text-primaryGreen" href="#">Contact us</a> about your custom projects!</p>
</div>
{{--<div class="flex gap-4 p-8">--}}
{{--    <aside class="w-1/4">--}}
{{--        <div class="bg-gray-100 p-4 rounded-lg shadow">--}}
{{--            <h3>Categories</h3>--}}
{{--            <hr class="mt-1 border-accentBlue">--}}
{{--            <ul class="mt-2">--}}
{{--                <li><a class="text-accentBlue" href="#">Pens (4)</a></li>--}}
{{--                <li><a class="text-accentBlue" href="#">Plaques (24)</a></li>--}}
{{--                <li><a class="text-accentBlue" href="#">Lichtenberg (8)</a></li>--}}
{{--            </ul>--}}

{{--            <h3 class="mt-4">Filter By Material</h3>--}}
{{--            <hr class="mt-1 border-accentBlue">--}}
{{--            <ul class="mt-2">--}}
{{--                <li><a class="text-accentBlue" href="#">Walnut (4)</a></li>--}}
{{--                <li><a class="text-accentBlue" href="#">Cherry (24)</a></li>--}}
{{--                <li><a class="text-accentBlue" href="#">Pine (8)</a></li>--}}
{{--                <li><a class="text-accentBlue" href="#">Oak (8)</a></li>--}}
{{--                <li><a class="text-accentBlue" href="#">Zebra Wood (8)</a></li>--}}
{{--                <li><a class="text-accentBlue" href="#">Bacote (8)</a></li>--}}
{{--                <li><a class="text-accentBlue" href="#">Iron Wood (8)</a></li>--}}
{{--                <li><a class="text-accentBlue" href="#">Babinga (8)</a></li>--}}
{{--            </ul>--}}

{{--            <h3 class="mt-4">Filter By Color</h3>--}}
{{--            <hr class="mt-1 border-accentBlue">--}}
{{--            <ul class="mt-2">--}}
{{--                <li><a class="text-accentBlue" href="#">Blue (4)</a></li>--}}
{{--                <li><a class="text-accentBlue" href="#">Red (24)</a></li>--}}
{{--                <li><a class="text-accentBlue" href="#">Black (8)</a></li>--}}
{{--                <li><a class="text-accentBlue" href="#">White (8)</a></li>--}}
{{--                <li><a class="text-accentBlue" href="#">Purple (8)</a></li>--}}
{{--                <li><a class="text-accentBlue" href="#">Gray (8)</a></li>--}}
{{--                <li><a class="text-accentBlue" href="#">Silver (8)</a></li>--}}
{{--                <li><a class="text-accentBlue" href="#">Pink (8)</a></li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </aside>--}}
        @if(count($products))
            <div class="grid grid-cols-3 gap-3 h-fit mt-5 px-8">
            @foreach($products as $product)
                <x-cards.product_card :product="$product"/>
            @endforeach
            </div>
        @else
            <div class="mt-10">
                <p class="text-center text-4xl text-gray-400">Nothing yet. Check back soon!</p>
            </div>
        @endif

