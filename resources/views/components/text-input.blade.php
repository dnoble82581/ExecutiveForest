@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 focus:border-primaryGreen focus:ring-primaryGreen rounded-md shadow-sm']) !!}>
