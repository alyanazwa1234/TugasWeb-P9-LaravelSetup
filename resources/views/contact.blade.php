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
        <p>Email: {{ $email }}</p>
        <p class="mb-4">WhatsApp: {{ $whatsapp }}</p>
        <a href="/" class="text-blue-600 underline">← Kembali</a>
    </div>
</body>
</html>