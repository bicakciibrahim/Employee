<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Çalışan Yönetim Sistemi')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js" defer></script>
</head>

<body class="bg-gray-100 font-sans antialiased">

<!-- Navbar -->
<nav class="bg-gradient-to-r from-gray-800 via-gray-700 to-gray-900 text-white p-6 shadow-lg">
    <div class="container mx-auto flex items-center justify-between">
        <a href="/" class="text-3xl font-bold tracking-wide">Çalışan Yönetimi</a>

        <div class="flex items-center space-x-6">
            @auth
                <a href="/dashboard" class="hover:text-red-400 transition duration-300">Profil</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="hover:text-red-400 transition duration-300">Çıkış</button>
                </form>
            @else
                <a href="/login" class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg transition duration-300">Giriş</a>
                <a href="/register" class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg transition duration-300">Kayıt Ol</a>
            @endauth
        </div>
    </div>
</nav>

<!-- Main Content -->
<main>
    @yield('content')
</main>

<!-- Footer -->
<footer class="bg-gray-900 text-white py-6 mt-12">
    <div class="container mx-auto text-center">
        <p class="text-lg">&copy; 2024 Çalışan Yönetim Sistemi. Tüm hakları saklıdır.</p>
    </div>
</footer>

</body>

</html>
