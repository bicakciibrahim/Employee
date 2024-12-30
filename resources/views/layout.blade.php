<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Çalışan Yönetim Sistemi')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js" defer></script>
</head>

<body class="bg-gray-200 font-sans antialiased text-gray-900">

<!-- Navbar -->
<nav class="bg-red-800 shadow-lg">
    <div class="container mx-auto flex items-center justify-between p-6">
        <a href="/" class="text-3xl font-bold text-white tracking-wide">Çalışan Yönetimi</a>

        <div class="flex items-center space-x-6">
            @auth
                <a href="/dashboard" class="text-white hover:text-gray-200 transition duration-300">Profil</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="text-white hover:text-gray-200 transition duration-300">Çıkış</button>
                </form>
            @else
                <a href="/login" class="px-4 py-2 bg-gray-600 hover:bg-gray-500 text-white rounded-lg transition duration-300">Giriş</a>
                <a href="/register" class="px-4 py-2 bg-gray-600 hover:bg-gray-500 text-white rounded-lg transition duration-300">Kayıt Ol</a>
            @endauth
        </div>
    </div>
</nav>



<!-- Main Content -->
<main>
    @yield('content')
</main>

<!-- Footer -->
<footer class="bg-red-800 py-6 mt-12">
    <div class="container mx-auto text-center">
        <p class="text-lg text-gray-300">İBRAHİM BIÇAKCI  &copy; 2024  </p>
    </div>
</footer>


</body>

</html>
