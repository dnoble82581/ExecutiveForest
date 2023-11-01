<section
    id="welcome-register"
    class="mt-36">
    <div class="flex py-10 bg-primaryBlack">
        <div class="">
            <img
                src="{{ Vite::asset('resources/assets/images/welcome/register/red_paint.png') }}"
                alt="">
        </div>
        <div class="my-auto flex-1">
            <header class="">
                <div class="flex justify-center">
                    <h1 class="inline-block text-center text-5xl font-thin text-primaryWhite">
                        Never <span class="text-primaryGreen">Miss Out</span></h1>
                </div>

                <p class="mt-2 mb-5 text-center text-lg text-primaryWhite">Stay up to date with the latest blog posts,
                                                                           new projects and specials.</p>
            </header>

            <div class="text-center mt-10">
                <form action="/newsletter" method="Post">
                    @csrf
                    <label for="email" class="block mb-2 text-sm font-medium text-primaryWhite dark:text-white"></label>
                    <div class="relative flex ml-28 gap-2">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
                                <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
                            </svg>
                        </div>
                        <input type="text" id="email" name="email" class="rounded-xl bg-gray-50 border max-w-xl border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-2/3 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@executiveforest.us">
                        @error('email')
                            <span class="text-sm text-red-400"> {{ $message }}</span>
                        @enderror
                        <button class="bg-primaryGreen font-semibold text-primaryWhite px-8 rounded-xl" type="submit">Sign Up!</button>
                    </div>
                </form>
            </div>

        </div>
        <div class="">
            <img
                src="{{ Vite::asset('resources/assets/images/welcome/register/purple_paint.png') }}"
                alt="">
        </div>
    </div>

</section>
