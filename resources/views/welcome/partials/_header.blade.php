<header>
    <div class="bg-primaryBlack flex items-center justify-between px-8">
        <div>
            <a href="/">
                Logo
            </a>
        </div>
        <div>
            <nav>
                <ul class="flex text-primaryWhite font-semibold">
                    <li class="mr-5">
                        <a class="hover:text-gray-400 transition-colors ease-in-out" href="#">Plaques</a>
                    </li>
                    <li class="mr-5">
                        <a class="hover:text-gray-400 transition-colors ease-in-out" href="#">Pens</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-400 transition-colors ease-in-out" href="#">Lichtenberg</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div>
            <a
                class="font-semibold text-gray-300 mr-4 hover:text-gray-400 transition-colors ease-in-out"
                href="{{ route('login') }}">Login</a>
            <a
                class="font-semibold text-gray-300 hover:text-gray-400 transition-colors ease-in-out"
                href="{{ route('register') }}">Register</a>
        </div>
    </div>
</header>
