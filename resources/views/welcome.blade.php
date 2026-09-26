<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Tugas Rutin 9 Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-slate-100 min-h-screen flex flex-col">
    <nav class="bg-slate-800 border-b border-slate-700 px-6 py-4">
        <div class="max-w-4xl mx-auto flex justify-between items-center">
            <span class="font-bold text-xl text-red-500">Laravel P9</span>
            <div class="space-x-6">
                <a href="{{ route('home') }}" class="text-white font-semibold">Home</a>
                <a href="{{ route('about') }}" class="text-slate-300 hover:text-white">About</a>
                <a href="{{ route('contact') }}" class="text-slate-300 hover:text-white">Contact</a>
                <a href="{{ route('hello', ['nama' => 'Farhan']) }}" class="bg-red-600 hover:bg-red-500 px-3 py-1.5 rounded text-sm font-medium">Test rute</a>
            </div>
        </div>
    </nav>

    <main class="max-w-4xl mx-auto px-6 py-12 flex-1">
        <div class="bg-slate-800 border border-slate-700 rounded-xl p-8 shadow-lg">
            <span class="bg-red-500/20 text-red-400 text-xs font-semibold px-3 py-1 rounded-full uppercase">Tugas Rutin 9 — Setup Laravel</span>
            <h1 class="text-3xl font-bold mt-4">Halo, {{ $name }}! 👋</h1>
            <p class="text-slate-400 mt-1">{{ $prodi }} | NIM: {{ $nim }}</p>

            <h2 class="text-lg font-semibold mt-8 mb-3 text-slate-200">Materi yang Dipelajari (Data Dinamis Array):</h2>
            <ul class="space-y-2">
                @foreach ($courses as $course)
                    <li class="bg-slate-900/70 border border-slate-700 px-4 py-2.5 rounded-lg flex items-center gap-3">
                        <span class="text-red-500">✔</span> {{ $course }}
                    </li>
                @endforeach
            </ul>
        </div>
    </main>
</body>
</html>