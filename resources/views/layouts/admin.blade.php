<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard</title>
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">

    @vite(['resources/css/app.css'])

    <!-- Flatpickr CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

</head>

<body class="bg-gray-100 flex">

    @include('admin.sidebar')

    <div id="content" class="flex-1 p-10 ml-64 transition-all duration-300">

        @yield('content')

    </div>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            flatpickr("#calendar", {
                inline: true,
                dateFormat: "Y-m-d"
            });

        });

        function toggleSidebar(){

            const sidebar = document.getElementById("sidebar");
            const content = document.getElementById("content");

            sidebar.classList.toggle("collapsed");
            content.classList.toggle("expanded");

        }

    </script>

</body>

</html>
