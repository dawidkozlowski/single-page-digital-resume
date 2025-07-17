<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Digital Resume</title>
{{--    @vite('resources/css/app.css')--}}
</head>
<body>
    <header>
        <h1>My Digital Resume</h1>
    </header>

    <main>
        @php /** @var \App\DTO\Resume $resume */ @endphp
        {{-- Assuming $resume is passed to the view --}}
        Hello {{ $resume->basics->name }}, welcome to your digital resume!
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} My Digital Resume. All rights reserved.</p>
    </footer>
</body>
</html>
