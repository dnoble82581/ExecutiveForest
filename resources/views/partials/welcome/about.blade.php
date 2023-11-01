<section id="welcome-about" class="mt-36 flex lg:block">
    <div class="flex-1">
        <div class="px-10 lg:pt-16">
            <h1 class="text-5xl text-primaryBlack font-bold xl:text-4xl">For over 10 years Executive Forest has been creating unique, custom home
                                                       decor. Specializing in Epoxy Wood Art, custom
                                                       Laser Engraving and Handmade Pens,<span class="font-thin">
                    we produce the highest quality products…
                    Always unique, always one of a kind.</span></h1>
        </div>
        <div class="mt-10 ml-32 w-1/2">
            <p class="border-l-2 border-lightGreen py-3 pl-10 text-lg text-primaryBlack">Crafting unique, personalized wooden writing instruments with
                                                                        custom laser engraving & stunning Lichtenberg imaging.</p>
        </div>
        <button
            class="mt-10 ml-32 rounded px-20 py-3 text-xl font-medium shadow-xl bg-primaryGreen text-primaryWhite">
            See More
        </button>
    </div>
    <div class="flex-1">
        <div class="relative h-full mt-10 w-full xl:w-2/3">
            <picture>
                <source
                    srcset="{{ Vite::asset('resources/assets/images/welcome/composition/composition-1.webp') }}"
                    width="400px"
                    height="286px"
                    type="image/webp"
                    class="absolute top-10 right-16">
                <img
                    src="{{ Vite::asset('resources/assets/images/welcome/composition/composition-1.jpg') }}"
                    width="400px"
                    height="286px"
                    alt=""
                    class="shadow-xl absolute top-10 right-16 hover:z-50 hover:-translate-y-2 transition-all ease-in-out duration-300">
            </picture>

            <picture>
                <source
                    srcset="{{ Vite::asset('resources/assets/images/welcome/composition/composition-2.webp') }}"
                    width="400px"
                    height="286px"
                    type="image/webp"
                    class="shadow-xl absolute top-20 left-10">
                <img
                    src="{{ Vite::asset('resources/assets/images/welcome/composition/composition-2.jpg') }}"
                    width="400px"
                    height="286px"
                    alt=""
                    class="shadow-xl absolute top-20 left-10 hover:z-50 hover:-translate-y-2 transition-all ease-in-out duration-300">
            </picture>

            <picture>
                <source
                    srcset="{{ Vite::asset('resources/assets/images/welcome/composition/composition-3.webp') }}"
                    width="400px"
                    height="286px"
                    type="image/webp"
                    class="shadow-xl absolute top-44 left-40">
                <img
                    src="{{ Vite::asset('resources/assets/images/welcome/composition/composition-3.jpg') }}"
                    width="400px"
                    height="286px"
                    alt=""
                    class="shadow-xl absolute top-44 left-40 hover:z-50 hover:-translate-y-2 transition-all ease-in-out duration-300">
            </picture>
        </div>
    </div>
</section>
