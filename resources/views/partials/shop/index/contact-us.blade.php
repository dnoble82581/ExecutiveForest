<section class="mt-24">
    <div class="max-w-3xl mx-auto bg-primaryBlack p-8 rounded-xl">
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-primaryWhite md:text-5xl lg:text-6xl dark:text-white">Have an idea? <span class="text-accentGreen">We want to hear about it</span></h1>
        <p class="mb-6 text-base font-normal text-accentWhite sm:px-16 xl:px-48 dark:text-gray-400">At executive forest we are always looking for projects. If you have some thing speacial in mind we want to hear about it. Fill out the form below and lets get started!</p>
        <form action="/" method="post">
            <div class="mt-2">
                <label class="uppercase mb-2 block text-sm font-medium leading-6 text-primaryWhite" for="firstname">first name</label>
                <input type="text" name="firstname" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400" id="firstname" placeholder="" value="{{ old('firstname') }}">
            </div>
            <div class="mt-2">
                <label class="uppercase mb-2 block text-sm font-medium leading-6 text-primaryWhite" for="lastname">lastname</label>
                <input type="text" name="lastname" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400" id="lastname" placeholder="" value="{{ old('lastname') }}">
            </div>
            <div class="mt-2">
                <label class="uppercase mb-2 block text-sm font-medium leading-6 text-primaryWhite" for="email">email</label>
                <input type="text" name="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400" id="email" placeholder="" value="{{ old('email') }}">
            </div>
            <div class="mt-2">
                <label for="message" class="uppercase block mb-2 text-sm font-medium text-primaryWhite">Your message</label>
                <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
            </div>
        </form>
        <x-buttons.primary_link class="mt-6">Lets Hear It!</x-buttons.primary_link>
    </div>
</section>
