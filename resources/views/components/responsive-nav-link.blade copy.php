@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full pl-3 pr-4 py-2 border-l-4 border-theme-primary-400 dark:border-theme-primary-600 text-left text-base font-medium text-theme-primary-700 dark:text-theme-primary-300 bg-theme-primary-50 dark:bg-theme-primary-900/50 focus:outline-none focus:text-theme-primary-800 dark:focus:text-theme-primary-200 focus:bg-theme-primary-100 dark:focus:bg-theme-primary-900 focus:border-theme-primary-700 dark:focus:border-theme-primary-300 transition duration-150 ease-in-out'
            : 'block w-full pl-3 pr-4 py-2 border-l-4 border-transparent text-left text-base font-medium text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-700 hover:border-gray-300 dark:hover:border-gray-600 focus:outline-none focus:text-gray-800 dark:focus:text-gray-200 focus:bg-gray-50 dark:focus:bg-gray-700 focus:border-gray-300 dark:focus:border-gray-600 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
