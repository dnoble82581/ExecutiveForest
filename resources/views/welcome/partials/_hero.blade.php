<section id="hero_video">
    <div class="relative">
        <video
            class="brightness-50"
            width="1920"
            height="1080"
            muted
            autoplay
            loop>
            <source
                src="{{ Vite::asset('resources/assets/videos/header_video.mp4') }}"
                type="video/mp4">
            <source
                src="{{ Vite::asset('resources/assets/videos/header_video.webm') }}"
                type="video/webm">
        </video>
        <div class="absolute bottom-10 left-10 max-w-xl">
            <h1 class="text-primaryWhite text-5xl">Shop <span class="text-primaryGreen">Executive</span> Forest</h1>
            <p class="text-primaryWhite text-lg mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad
                                                      debitis eaque enim</p>
            <x-links.big_link href="{{ route('products') }}" class="inline-block mt-4">Shop All</x-links.big_link>
        </div>
    </div>
</section>
