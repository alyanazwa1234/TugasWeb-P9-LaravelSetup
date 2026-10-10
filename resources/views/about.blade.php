<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">
    <div class="bg-white p-8 rounded-xl shadow max-w-md mx-auto">
        <h1 class="text-2xl font-bold mb-4">{{ $title }}</h1>
        <p class="mb-2">Keahlian yang sedang kupelajari:</p>
        <ul class="list-disc ml-6 mb-4">
            @foreach ($skills as $s)
                <li>{{ $s }}</li>
            @endforeach
        </ul>
        <a href="/" class="text-blue-600 underline">← Kembali</a>
    </div>
</body>
</html>