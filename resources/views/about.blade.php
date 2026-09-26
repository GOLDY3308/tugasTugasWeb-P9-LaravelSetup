<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Tugas Rutin 9 Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-slate-100 min-h-screen flex flex-col">
    <nav class="bg-slate-800 border-b border-slate-700 px-6 py-4">
        <div class="max-w-4xl mx-auto flex justify-between items-center">
            <span class="font-bold text-xl text-red-500">Laravel P9</span>
            <div class="space-x-6">
                <a href="{{ route('home') }}" class="text-slate-300 hover:text-white">Home</a>
                <a href="{{ route('about') }}" class="text-white font-semibold">About</a>
                <a href="{{ route('contact') }}" class="text-slate-300 hover:text-white">Contact</a>
                <a href="{{ route('hello', ['nama' => 'Farhan']) }}" class="bg-red-600 hover:bg-red-500 px-3 py-1.5 rounded text-sm font-medium">Coba /hello/Farhan</a>
            </div>
        </div>
    </nav>

    <main class="max-w-4xl mx-auto px-6 py-12 flex-1 w-full">
        <div class="bg-slate-800 border border-slate-700 rounded-xl p-8 shadow-lg">
            <h1 class="text-2xl font-bold mb-2">Tentang Aplikasi & Penulis</h1>
            <p class="text-slate-400 mb-6">Aplikasi ini dibuat untuk memenuhi Tugas Rutin Pertemuan 9 mata kuliah Pemrograman Web di Universitas Negeri Medan.</p>

            <h2 class="text-lg font-semibold mb-3">Keahlian & Teknologi (Data Array):</h2>
            <div class="flex flex-wrap gap-2">
                @foreach ($skills as $skill)
                    <span class="bg-slate-900 border border-slate-700 px-4 py-2 rounded-lg text-sm text-red-400 font-medium">{{ $skill }}</span>
                @endforeach
            </div>
        </div>
    </main>
</body>
</html>