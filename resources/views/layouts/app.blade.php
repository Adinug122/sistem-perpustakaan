<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite('resources/css/app.css')
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            0: '#41C4E3'
                            50: '#eff6ff',
                            100: '#dbeafe',
                            200: '#bfdbfe',
                            300: '#93c5fd',
                            400: '#60a5fa',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                            800: '#1e40af',
                            900: '#1e3a8a',
                        }
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        @isset($header)
            <div class="flex overflow-hidden">
                <div class="flex-1 flex flex-col lg:ml-64 overflow-hidden">
                    <header class="bg-white shadow-md z-40">
                            {{ $header }}
                    </header>
                </div>
            </div>

        @endisset

        <main>
            {{ $slot }}
        </main>
    </div>

</body>
  <script>
        const menuToggle = document.getElementById('menuToggle');
        const sidebar = document.getElementById('sidebar');

        menuToggle.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
        });
               
          document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', (e) => {
        const targetId = link.getAttribute('href');
        
        // hanya cegah scroll kalau href diawali dengan #
        if (targetId.startsWith('#')) {
            e.preventDefault();
            const targetSection = document.querySelector(targetId);
            if (targetSection) {
                targetSection.scrollIntoView({ behavior: 'smooth' });
            }
        }

        // Update active state
        document.querySelectorAll('.nav-link').forEach(l => {
            l.classList.remove('active', 'bg-blue-800/50', 'text-white', 'shadow-lg');
            l.classList.add('text-blue-100');
        });
        link.classList.add('active', 'bg-blue-800/50', 'text-white', 'shadow-lg');
        link.classList.remove('text-blue-100');

        // Close sidebar on mobile
        if (window.innerWidth < 1024) {
            sidebar.classList.add('-translate-x-full');
        }
    });
});

    </script>
</html>