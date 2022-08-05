<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-primary border border-transparent rounded-md font-semibold text-xs m-1 text-white uppercase tracking-widest hover:bg-secondary active:bg-secondary focus:outline-none focus:border-secondary focus:ring disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
