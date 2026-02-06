<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel - Business Consultant</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-800">
<div class="flex min-h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-slate-900 text-slate-100 flex flex-col">
        <div class="px-6 py-5 text-lg font-bold border-b border-slate-700">
            Business Consultant
            <div class="text-xs text-slate-400">Admin Panel</div>
        </div>

        <nav class="flex-1 px-4 py-6 space-y-1 text-sm">
            @php
                $link = 'block px-4 py-2 rounded transition';
            @endphp

            <a href="{{ route('admin.dashboard') }}"
               class="{{ $link }} {{ request()->routeIs('admin.dashboard') ? 'bg-slate-700 font-semibold' : 'hover:bg-slate-800' }}">
                Dashboard
            </a>

            <a href="#"
               class="{{ $link }} hover:bg-slate-800">
                Blog / Insights
            </a>

            <a href="#"
               class="{{ $link }} hover:bg-slate-800">
                Services
            </a>

            <a href="#"
               class="{{ $link }} hover:bg-slate-800">
                Industries Served
            </a>

            <a href="#"
               class="{{ $link }} hover:bg-slate-800">
                Testimonials
            </a>

            <a href="{{ route('admin.consultations') }}"
               class="{{ $link }} {{ request()->routeIs('admin.consultations') ? 'bg-slate-700 font-semibold' : 'hover:bg-slate-800' }}">
                Booked Consultations
            </a>
        </nav>

        <div class="px-4 py-4 border-t border-slate-700">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="w-full px-4 py-2 text-left rounded hover:bg-red-600 transition">
                    Logout
                </button>
            </form>
        </div>
    </aside>

    <!-- Main -->
    <main class="flex-1">
      

        <section class="p-6">
            @yield('content')
        </section>
    </main>

</div>
</body>
</html>
