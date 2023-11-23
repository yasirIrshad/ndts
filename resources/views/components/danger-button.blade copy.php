<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-theme-danger-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-theme-danger-500 active:bg-theme-danger-700 focus:outline-none focus:ring-2 focus:ring-theme-danger-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
