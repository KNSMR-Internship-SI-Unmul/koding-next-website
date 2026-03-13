<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Koding Next Samarinda</title>
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-primary-white flex flex-col min-h-screen">

    @include('components.navbar')

    <main class="container mx-auto px-4 py-6 min-h-screen flex items-center">
        <div class="container mx-auto px-6 lg:px-16">
            <div class="flex flex-col-reverse lg:flex-row items-center justify-between gap-10">
                <div class="lg:w-2/3 text-center lg:text-left">
                    <h1 class="text-4xl lg:text-6xl font-bold text-black leading-tight">
                        Koding Next <br>
                        <span class="text-5xl text-pink-500">Samarinda</span>
                    </h1>

                    <p class="mt-6 text-gray-700 max-w-lg mx-auto lg:mx-0">
                        Bantu anak Anda menjadi Future Coders yang siap menghadapi dunia teknologi dengan program belajar coding, game development, dan robotika di Koding Next Samarinda.
                    </p>

                    <a href="https://wa.me/6281115525959" target="_blank"
                        class="mt-8 inline-block bg-pink-500 hover:bg-pink-600 text-white font-semibold px-6 py-3 rounded-lg shadow-md transition duration-300">
                        <span>Mulai Belajar</span>
                    </a>
                </div>

                <div class="lg:w-1/2 flex justify-center">
                    <img src="{{ asset('images/hero-image.png') }}"
                        alt="Maskot Nixie"
                        class="w-full max-w-md lg:max-w-xl">
                </div>
            </div>
        </div>
    </main>

    <section class="bg-linear-to-b from-pink-200 via-pink-100 to-blue-200 py-32">

        <div class="container mx-auto px-6 lg:px-16">
            <div class="flex flex-col lg:flex-row items-center justify-center gap-12">
                <div class="flex justify-center">
                    <img src="{{ asset('images/logo-knsmr.png') }}"
                        class="w-64 h-64 rounded-full object-cover shadow-lg"
                        alt="Koding Next Samarinda">
                </div>

                <div class="max-w-xl text-center lg:text-left">
                    <p class="text-gray-700 leading-relaxed">
                        Misi kami memberdayakan generasi inovator teknologi berikutnya melalui kurikulum coding kami yang luar biasa yang menginspirasi kreativitas dan keterampilan pemecahan masalah. Berdiri sejak 2016, rekam jejak kami sudah terbukti.
                    </p>
                    <a href="/tentangkami"
                        class="inline-block mt-6 bg-pink-500 hover:bg-pink-600 text-white font-semibold px-6 py-3 rounded-lg shadow-md transition duration-300">
                        Lihat Selengkapnya
                    </a>
                </div>
            </div>
        </div>
    </section>

    <main class="container mx-auto px-6 lg:px-16 py-16">

        <div class="text-center">
            <h1 class="text-4xl font-bold text-black">
                Kursus <span class="text-pink-500">Kami</span>
            </h1>

            <p class="mt-6 text-gray-700 max-w-xl mx-auto">
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


    <section class="py-20">

        <div class="container mx-auto px-6 lg:px-16">

            <h2 class="text-3xl font-bold mb-10">
                Jangan lewatkan <span class="text-pink-500">penawaran spesial</span> dari kami!
            </h2>

            <div class="relative">

                <button onclick="scrollPromo(-1)"
                    class="absolute -left-5 top-1/2 -translate-y-1/2 bg-pink-500 text-white w-10 h-10 rounded-full shadow-md">
                    ❮
                </button>

                <div id="promoSlider"
                    class="flex gap-6 overflow-x-auto scroll-smooth no-scrollbar">

                    <img src="{{ asset('images/promo1.png') }}" class="w-72 rounded-xl shadow-md shrink-0" alt="promo1">
                    <img src="{{ asset('images/promo2.png') }}" class="w-72 rounded-xl shadow-md shrink-0" alt="promo2">
                    <img src="{{ asset('images/promo3.png') }}" class="w-72 rounded-xl shadow-md shrink-0" alt="promo3">
                    <img src="{{ asset('images/promo4.png') }}" class="w-72 rounded-xl shadow-md shrink-0" alt="promo4">
                    <img src="{{ asset('images/promo1.png') }}" class="w-72 rounded-xl shadow-md shrink-0" alt="promo1">

                </div>

                <button onclick="scrollPromo(1)"
                    class="absolute -right-5 top-1/2 -translate-y-1/2 bg-pink-500 text-white w-10 h-10 rounded-full shadow-md">
                    ❯
                </button>

            </div>

        </div>
    </section>

    <section class="py-20">

        <div class="container mx-auto px-6 lg:px-16">

            <div class="flex justify-between items-center mb-10">

                <h2 class="text-4xl font-bold">
                    Kegiatan <span class="text-pink-500">Kami</span>
                </h2>

                <div class="flex gap-3">

                    <button onclick="scrollEvent(-1)"
                        class="bg-pink-500 text-white w-10 h-10 rounded-full shadow-md">
                        ❮
                    </button>

                    <button onclick="scrollEvent(1)"
                        class="bg-pink-500 text-white w-10 h-10 rounded-full shadow-md">
                        ❯
                    </button>

                </div>

            </div>

            <div id="eventSlider" class="flex gap-8 overflow-x-auto scroll-smooth no-scrollbar">

                <div class="relative w-125 shrink-0 group cursor-pointer">

                    <img src="{{ asset('images/event1.jpeg') }}"
                        class="w-full h-70 object-cover rounded-xl shadow-md transition duration-500" alt="Event 1">

                    <div class="absolute inset-0 bg-blue-400/60 backdrop-blur-sm rounded-xl
opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">

                        <h3 class="text-white text-xl font-semibold text-center px-4">
                            Fun Day <br> Chinese New Year
                        </h3>

                    </div>

                </div>

                <div class="relative w-125 shrink-0 group cursor-pointer">

                    <img src="{{ asset('images/event1.jpeg') }}"
                        class="w-full h-70 object-cover rounded-xl shadow-md transition duration-500" alt="Event 2">

                    <div class="absolute inset-0 bg-blue-400/60 backdrop-blur-sm rounded-xl
opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">

                        <h3 class="text-white text-xl font-semibold">
                            Fun Day <br> Chinese New Year
                        </h3>

                    </div>

                </div>


                <div class="relative w-125 shrink-0 group cursor-pointer">

                    <img src="{{ asset('images/event1.jpeg') }}"
                        class="w-full h-70 object-cover rounded-xl shadow-md transition duration-500" alt="Event">

                    <div class="absolute inset-0 bg-blue-400/60 backdrop-blur-sm rounded-xl
opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">

                        <h3 class="text-white text-xl font-semibold">
                            Fun Day <br> Chinese New Year
                        </h3>

                    </div>

                </div>

            </div>

            <div class="text-center mt-10">

                <a href="/kegiatan"
                    class="border border-pink-500 text-pink-500 px-6 py-2 rounded-lg hover:bg-pink-500 hover:text-white transition">
                    Lihat Selengkapnya
                </a>

            </div>

        </div>

    </section>

    <section class="py-32 bg-linear-to-b from-pink-200 to-blue-200 text-center">

        <div class="container mx-auto px-6">

            <h2 class="text-4xl font-bold mb-4">
                Start Your Journey as a
                <span class="text-pink-500">Future Coder!</span>
            </h2>

            <p class="text-gray-700 max-w-xl mx-auto mb-8">
                Bergabunglah dengan Koding Next Samarinda dan bantu anak Anda
                mengembangkan kreativitas, logika, dan kemampuan teknologi sejak dini.
            </p>

            <a href="https://wa.me/6281115525959"
                class="bg-pink-500 hover:bg-pink-600 text-white px-6 py-3 rounded-lg shadow-md">
                Daftar Sekarang
            </a>

        </div>

    </section>

    {{-- Footer --}}
    @include('components.footer')

    <script>
        function scrollPromo(direction) {
            const container = document.getElementById("promoSlider");
            container.scrollBy({
                left: direction * 300,
                behavior: "smooth"
            });
        }

        function scrollEvent(direction) {
            const container = document.getElementById("eventSlider");
            container.scrollBy({
                left: direction * 300,
                behavior: "smooth"
            });
        }
    </script>

</body>

</html>
