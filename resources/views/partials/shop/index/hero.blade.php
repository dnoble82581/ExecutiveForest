<section id="hero" class="shadow-xl">
    <div class="relative">
        <img
            src="{{ Vite::asset('resources/assets/images/shop/hero/hero-image.jpg') }}"
            alt="">
        <div class="absolute text-primaryWhite bottom-7 left-5">
            <h1 class="text-6xl text-primaryGreen mb-2">Shop <span class="text-accentWhite">Executive </span>Forest
            </h1>
            <p class="max-w-2xl">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad debitis eaque enim
                                 qui,
                                 quibusdam quo quos.</p>
            <a href="{{ route('products') }}" class="bg-primaryGreen inline-block px-8 py-1 mt-4 text-lg rounded-lg font-semibold tracking-wide">Shop All</a>
        </div>
    </div>

    <div class="absolute top-0 px-10 w-full flex justify-between items-center py-2 bg-opacity-75 bg-primaryBlack">
        <div>
            <a href="{{ config('app.url') }}">
                <x-icons.logo
                    width="120"
                    height="70" />
            </a>
        </div>
        <div class="text-primaryWhite text-xl">
            <button>Plaques</button>
            <button class="ml-4">Lichtenberg</button>
            <button class="ml-4">Pens</button>
            <button class="ml-4">Shop All</button>
        </div>
        <nav class="">
            <ul class="flex gap-5 text-primaryWhite">
                <li>
                    <a
                        href="/login"
                        class="header__icon header__icon--account link focus-inset small-hide">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true"
                            focusable="false"
                            class="w-6"
                            fill="none"
                            viewBox="0 0 18 19">
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M6 4.5a3 3 0 116 0 3 3 0 01-6 0zm3-4a4 4 0 100 8 4 4 0 000-8zm5.58 12.15c1.12.82 1.83 2.24 1.91 4.85H1.51c.08-2.6.79-4.03 1.9-4.85C4.66 11.75 6.5 11.5 9 11.5s4.35.26 5.58 1.15zM9 10.5c-2.5 0-4.65.24-6.17 1.35C1.27 12.98.5 14.93.5 18v.5h17V18c0-3.07-.77-5.02-2.33-6.15-1.52-1.1-3.67-1.35-6.17-1.35z"
                                fill="currentColor"></path>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg
                            class="w-6 h-6 text-primaryWhite"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 20 20">
                            <path
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg
                            class="w-6 h-6 text-primaryWhite"
                            aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 18 20">
                            <path
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1"
                                d="M6 15a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0h8m-8 0-1-4m9 4a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm-9-4h10l2-7H3m2 7L3 4m0 0-.792-3H1" />
                        </svg>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</section>
