<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Artikel CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;700&display=swap" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@400;700&display=swap" rel="stylesheet">



    <style>
    body {
        background: linear-gradient(135deg, #fdfbfb 0%, #ebedee 100%);
        /* font-family: 'Fredoka', sans-serif; */
        font-family: 'Comic Neue', cursive;
        position: relative;
        overflow-x: hidden;
    }

    .animated-bg {
        position: fixed;
        top: 0;
        left: 0;
        z-index: -1;
        width: 100%;
        height: 100%;
        pointer-events: none;
        background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='20' cy='20' r='5' fill='%23c4b5fd'%3E%3Canimate attributeName='cy' values='20;80;20' dur='4s' repeatCount='indefinite' /%3E%3C/circle%3E%3Ccircle cx='60' cy='60' r='5' fill='%23fb7185'%3E%3Canimate attributeName='cy' values='60;30;60' dur='3s' repeatCount='indefinite' /%3E%3C/circle%3E%3Ccircle cx='80' cy='40' r='5' fill='%23facc15'%3E%3Canimate attributeName='cy' values='40;70;40' dur='5s' repeatCount='indefinite' /%3E%3C/circle%3E%3C/svg%3E");
        animation: moveBg 20s linear infinite;
    }

    @keyframes moveBg {
        0% {
            transform: translateY(0) translateX(0);
        }
        50% {
            transform: translateY(-10px) translateX(-10px);
        }
        100% {
            transform: translateY(0) translateX(0);
        }
    }
</style>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('articles.index') }}">Manajemen Artikel by Aulia Rahma Kartika Sitepu [2114370133]</a>
        </div>
    </nav>
    <div class="animated-bg"></div>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
