<x-app-layout>
    @include('welcome.partials._header')
    <x-cards.feature_card :product="$product" class="mt-20"/>
    @include('welcome.partials._footer')
</x-app-layout>
