<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lokasi</title>
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-primary-white flex flex-col min-h-screen">

    @include('components.navbar')

    <section class="py-16">

        <div class="container mx-auto px-6 lg:px-20">

            <div class="grid md:grid-cols-2 gap-10 items-center">

                <div>

                    <h2 class="text-4xl font-bold mb-4">
                        Lokasi <span class="text-pink-500">Kami</span>
                    </h2>

                    <p class="text-black leading-relaxed mb-4">
                        Jl. Imam Bonjol No.02, Pelabuhan, Kec. Samarinda Kota,
                        Kota Samarinda, Kalimantan Timur
                    </p>

                    <p class="text-gray-600 leading-relaxed mb-16">
                        Jam Operasional: <br>
                        Senin – Minggu | 10:00 – 18:00 WITA
                    </p>

                    <a href="https://www.google.com/maps?q=-0.5022,117.1537"
                        target="_blank"
                        class="bg-pink-500 text-white px-6 py-3 rounded-lg shadow hover:bg-pink-600 transition">
                        Lihat di Map
                    </a>

                </div>

                <div>

                    <img src="/images/lokasi-kn.jpeg"
                        class="rounded-2xl shadow-lg w-full hover:scale-105 transition duration-300"
                        alt="Koding Next Samarinda">

                </div>

            </div>

        </div>

    </section>

    <section class="py-12 bg-white">

        <div class="container mx-auto px-6 lg:px-20">

            <div id="map" class="w-full h-125 rounded-2xl shadow-lg"></div>

        </div>

    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var map = L.map('map').setView([-0.5022, 117.1537], 16);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; OpenStreetMap contributors'
            }).addTo(map);

            var marker = L.marker([-0.5022, 117.1537]).addTo(map);

            marker.bindPopup(
                "<b>Koding Next Samarinda</b><br>Jl. Imam Bonjol No.02"
            ).openPopup();

        });
    </script>

    {{-- Footer --}}
    @include('components.footer')

</body>

</html>
