<a {{ $attributes->merge(['class' => 'uppercase px-4 py-2 text-sm font-medium text-gray-900 bg-white rounded-lg border border-accentGreen hover:bg-gray-100 focus:z-10 transition focus:ring-2 focus:ring-offset-2 focus:ring-primaryGreen ease-in-out duration-150']) }}>
    {{ $slot }}
</a>
