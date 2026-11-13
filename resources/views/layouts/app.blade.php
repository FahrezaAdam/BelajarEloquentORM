<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Belajar Eloquent</title>
    <style>
        body { max-width: 900px; margin: 40px auto; padding: 0 20px; font: 16px/1.5 Arial, sans-serif; color: #202938; }
        h1 { margin-bottom: 8px; } a { color: #155eef; } table { width: 100%; border-collapse: collapse; margin: 20px 0; }
        th, td { padding: 10px; border-bottom: 1px solid #d9dee8; text-align: left; }
        input { padding: 8px; margin: 4px 0 12px; width: min(100%, 360px); display: block; }
        button, .button { padding: 7px 11px; cursor: pointer; } .actions { display: flex; gap: 10px; align-items: center; }
        .success { padding: 10px; background: #e9f8ef; } .error { color: #b42318; }
    </style>
</head>
<body>
    <header><a href="{{ route('mahasiswa.index') }}">Praktikum Eloquent ORM</a></header>
    @if (session('success')) <p class="success">{{ session('success') }}</p> @endif
    <main>@yield('content')</main>
</body>
</html>
