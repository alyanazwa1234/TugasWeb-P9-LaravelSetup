<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-xl shadow-lg max-w-md w-full">
        <h1 class="text-3xl font-bold text-red-600 mb-4">Halo, {{ $name }}! 👋</h1>
        <p class="mb-2 font-semibold">Mata kuliah yang kupelajari:</p>
        <ul class="list-disc ml-6 mb-6">
            @foreach ($courses as $c)
                <li>{{ $c }}</li>
            @endforeach
        </ul>
        <div class="flex gap-4 text-blue-600 underline">
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
        </div>
    </div>
</body>
</html>