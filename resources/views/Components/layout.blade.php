<!DOCTYPE html>
<html lang="en">
    <head>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <nav class="hidden md:block">
        <div class="ml-10 flex items-baseline space-x-4">
            <x-nav-link href="/" :active="request()->is('/')">home </x-nav-link>
            <x-nav-link href="/about" :active="request()->is('about')">about </x-nav-link>
            <x-nav-link href="/contact" :active="request()->is('contact')" type="button">contact </x-nav-link>
        </div>
    </nav>
    {{ $slot }}
</body>
</html>