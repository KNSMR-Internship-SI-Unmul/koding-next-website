<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-primary-white flex flex-col min-h-screen">

    {{-- Navbar --}}
    @include('components.navbar')

    {{-- Content --}}
    <section class="py-16 bg-primary-white flex-1">
        <div class="text-center max-w-3xl mx-auto">
            <h1 class="text-4xl font-bold">
                Tentang <span class="text-pink-500">Kami</span>
            </h1>

            <p class="mt-6 text-gray-600 leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
        </div>

        <div class="max-w-6xl mx-auto mt-16 grid md:grid-cols-2 gap-10 items-center">

            <div>
                <img src="/images/tentang.jpg" alt="Tentang Kami"
                    class="w-full h-87.5 object-cover rounded-lg shadow-md">
            </div>

            <div>
                <h2 class="text-2xl font-semibold mb-4">Koding Next Samarinda</h2>

                <p class="text-gray-600 mb-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus
                    pariatur minus facilis adipisci molestias.
                </p>

                <p class="text-gray-600 mb-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia
                    laboriosam dolorum fugiat sed deleniti quae.
                </p>

                <p class="text-gray-600">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet
                    assumenda consectetur magni.
                </p>
            </div>

        </div>


        <div class="text-center mt-24">
            <h2 class="text-3xl font-bold">
                Tim <span class="text-pink-500">Kami</span>
            </h2>
        </div>


        <div class="max-w-6xl mx-auto mt-12 grid gap-10 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3">

            <div class="text-center">
                <img src="/images/team1.jpg" alt="Nama Karyawan"
                    class="w-full h-62.5 object-cover rounded-lg shadow-md">

                <h3 class="mt-4 font-semibold text-lg">
                    Nama Karyawan
                </h3>

                <p class="text-gray-500 text-sm">
                    Teacher
                </p>
            </div>

            <div class="text-center">
                <img src="/images/team2.jpg" alt="Nama Karyawan"
                    class="w-full h-62.5 object-cover rounded-lg shadow-md">

                <h3 class="mt-4 font-semibold text-lg">
                    Nama Karyawan
                </h3>

                <p class="text-gray-500 text-sm">
                    Student Advisor
                </p>
            </div>

            <div class="text-center">
                <img src="/images/team3.jpg" alt="Nama Karyawan"
                    class="w-full h-62.5 object-cover rounded-lg shadow-md">

                <h3 class="mt-4 font-semibold text-lg">
                    Nama Karyawan
                </h3>

                <p class="text-gray-500 text-sm">
                    Manager
                </p>
            </div>

            <div class="text-center">
                <img src="/images/team4.jpg" alt="Nama Karyawan"
                    class="w-full h-62.5 object-cover rounded-lg shadow-md">

                <h3 class="mt-4 font-semibold text-lg">
                    Nama Karyawan
                </h3>

                <p class="text-gray-500 text-sm">
                    Teacher
                </p>
            </div>

            <div class="text-center">
                <img src="/images/team5.jpg" alt="Nama Karyawan"
                    class="w-full h-62.5 object-cover rounded-lg shadow-md">

                <h3 class="mt-4 font-semibold text-lg">
                    Nama Karyawan
                </h3>

                <p class="text-gray-500 text-sm">
                    Teacher
                </p>
            </div>

            <div class="text-center">
                <img src="/images/team6.jpg " alt="Nama Karyawan"
                    class="w-full h-62.5 object-cover rounded-lg shadow-md">

                <h3 class="mt-4 font-semibold text-lg">
                    Nama Karyawan
                </h3>

                <p class="text-gray-500 text-sm">
                    Teacher
                </p>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    @include('components.footer')

</body>
</html>
