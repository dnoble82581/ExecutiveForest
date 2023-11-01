<section id="welcome-gallery" class="mt-36">
    <header class="mb-16">
        <div class="flex justify-center">
            <h1 class="relative mb-5 inline-block text-center text-5xl font-thin text-primaryBlack underline-1">
                A Few Of <span class="text-primaryGreen">Our Favorites</span></h1>
        </div>

        <p class="px-36 md:px-16 text-center text-lg">Welcome to our woodworking blog! Here, I’ll we share our passion for
                                                      creating
                                                      beautiful and functional pieces of
                                                      furniture and decor through the art of woodworking.</p>
    </header>

    <div class="mx-32 grid grid-cols-4 gap-3 lg:mx-10 md:mx-5 sm:mx-0">
        <picture class="cursor-pointer">
            <source srcset="{{ Vite::asset('resources/assets/images/welcome/gallery/white-cherry-500.webp') }}">
            <img
                src="{{ Vite::asset('resources/assets/images/welcome/gallery/white-cherry-500.webp') }}"
                alt="">
        </picture>

        <picture class="cursor-pointer">
            <source srcset="{{ Vite::asset('resources/assets/images/welcome/gallery/majestic-ftn-500.webp') }}">
            <img
                src="{{ Vite::asset('resources/assets/images/welcome/gallery/majestic-ftn-500.jpg') }}"
                alt="">
        </picture>

        <picture class="cursor-pointer">
            <source srcset="{{ Vite::asset('resources/assets/images/welcome/gallery/storm-plaque-500.webp') }}">
            <img
                src="{{ Vite::asset('resources/assets/images/welcome/gallery/storm-plaque-500.jpg') }}"
                alt="">
        </picture>
        <picture class="cursor-pointer">
            <source srcset="{{ Vite::asset('resources/assets/images/welcome/gallery/us-plaque-500.webp') }}">
            <img
                src="{{ Vite::asset('resources/assets/images/welcome/gallery/us-plaque-500.jpg') }}"
                alt="">
        </picture>
        <picture class="col-span-2 cursor-pointer">
            <source srcset="{{ Vite::asset('resources/assets/images/welcome/gallery/daughter-plaque-800.webp') }}">
            <img
                src="{{ Vite::asset('resources/assets/images/welcome/gallery/daughter-plaque-800.jpg') }}"
                alt="">
        </picture>
        <picture class="col-span-2 cursor-pointer">
            <source srcset="{{ Vite::asset('resources/assets/images/welcome/gallery/american-patriot-800.webp') }}">
            <img
                src="{{ Vite::asset('resources/assets/images/welcome/gallery/american-patriot-800.jpg') }}"
                alt="">
        </picture>
        <picture class="col-span-4 cursor-pointer">
            <source srcset="{{ Vite::asset('resources/assets/images/welcome/gallery/cherry-fractal-1800.webp') }}">
            <img
                src="{{ Vite::asset('resources/assets/images/welcome/gallery/cherry-fractal-1800.jpg') }}"
                alt="">
        </picture>
    </div>
</section>

