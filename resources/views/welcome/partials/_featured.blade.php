<section id="featured">
    <header class="mt-10">
        <div class="flex justify-center">
            <h2 class="relative mb-5 inline-block text-center text-5xl font-thin text-primaryBlack underline-1">
                <span class="text-primaryGreen">Featured</span> Products</h2>
        </div>
        <p class="max-w-2xl text-center m-auto text-sm text-gray-700">Lorem ipsum dolor sit amet, consectetur
                                                                      adipisicing elit. Odit similique tenetur ullam.
                                                                      Animi dolorem inventore nemo.</p>

        <article>
            <div class="grid grid-cols-3 gap-5 px-8 mt-8">
                @foreach($featured as $feature)
                    <x-cards.product_card :product="$feature"/>
                @endforeach
            </div>
        </article>
    </header>
</section>
