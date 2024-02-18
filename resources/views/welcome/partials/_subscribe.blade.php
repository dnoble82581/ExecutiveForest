<section id="contact" class="mt-20 shadow-xl">
    <div class="flex justify-between items-center bg-primaryBlack py-4 px-2">
        <div>
            <img
                src="{{ Vite::asset('resources/assets/register/purple_paint.png') }}"
                alt="">
        </div>
        <form class="relative" action="#">
            <x-icons.email_icon>Sign up for our <span class="text-primaryGreen">Newsletter</span> and never <span class="text-primaryGreen">miss out!</x-icons.email_icon>
            <a class="absolute -bottom-8 left-1/2 -translate-x-1/2 text-white bg-primaryGreen px-6 py-2 rounded-lg w-full text-center font-semibold" href="#">Sign up</a>
        </form>
        <div>
            <img
                src="{{ Vite::asset('resources/assets/register/red_paint.png') }}"
                alt="">
        </div>
    </div>
</section>
