<x-app-layout>
    @include('welcome.partials._header')
    <x-cards.feature_card class="mt-20" :product="$product"/>
    @include('welcome.partials._footer')
</x-app-layout>
