<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kursus</title>
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-primary-white flex flex-col min-h-screen">

    @include('components.navbar')

    <main class="container mx-auto px-6 lg:px-16 py-16">

        <div class="text-center">
            <h1 class="text-4xl lg:text-5xl font-bold text-black">
                Kursus <span class="text-pink-500">Kami</span>
            </h1>

            <p class="mt-6 text-gray-700 max-w-2xl mx-auto">
                Kami menawarkan kurikulum komprehensif yang dikembangkan oleh tim internasional,
                guru-guru yang berpengalaman, dan fokus pada pembelajaran individual dan berbasis proyek.
            </p>
        </div>

        <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-8 text-center">

            <a href="/kursus/Little-Koders" class="group">
                <img src="{{ asset('images/poster-LK.avif') }}" alt="Kursus Web"
                    class="rounded-xl shadow-md group-hover:scale-105 transition duration-300">
                <p class="mt-4 font-semibold text-lg group-hover:text-pink-500">
                    Little Koders (4-8 Tahun)
                </p>
            </a>

            <a href="/kursus/Junior-Koders" class="group">
                <img src="{{ asset('images/poster-JK.avif') }}"
                    alt="Kursus UIUX"
                    class="rounded-xl shadow-md group-hover:scale-105 transition duration-300">
                <p class="mt-4 font-semibold text-lg group-hover:text-pink-500">
                    Junior Koders (8-16 Tahun)
                </p>
            </a>

            <a href="/kursus/RoboNext" class="group">
                <img src="{{ asset('images/poster-RoboNext.avif') }}"
                    alt="Kursus Robotik"
                    class="rounded-xl shadow-md group-hover:scale-105 transition duration-300">
                <p class="mt-4 font-semibold text-lg group-hover:text-pink-500">
                    RoboNext (4-16 Tahun)
                </p>
            </a>
        </div>
    </main>

    {{-- Footer --}}
    @include('components.footer')

</body>

</html>
