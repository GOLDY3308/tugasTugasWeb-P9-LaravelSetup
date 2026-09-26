<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello {{ $nama }} - Bonus Route Parameter</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-slate-100 min-h-screen flex items-center justify-center p-6">
    <div class="bg-slate-800 border border-slate-700 rounded-xl p-8 max-w-lg w-full text-center shadow-lg">
        <span class="bg-emerald-500/20 text-emerald-400 text-xs font-semibold px-3 py-1 rounded-full">★ Fitur Bonus Route Parameter</span>
        <h1 class="text-3xl font-bold mt-4">Halo, <span class="text-red-400">{{ $nama }}</span>! 🎉</h1>
        <p class="text-slate-400 mt-2 text-sm"> <code class="bg-slate-900 px-2 py-1 rounded text-red-300">Welcome</code></p>
        <a href="{{ route('home') }}" class="inline-block mt-6 bg-slate-700 hover:bg-slate-600 px-5 py-2 rounded-lg text-sm font-medium">← Kembali ke Home</a>
    </div>
</body>
</html>