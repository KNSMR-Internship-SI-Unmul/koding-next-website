@extends('layouts.admin')

@section('content')

<h1 class="text-4xl font-bold mb-8">
    Halo, <span class="text-pink-500">Admin!</span>
</h1>


<div class="grid grid-cols-4 gap-6 mb-10">

    <div class="bg-pink-500 text-white p-6 rounded-2xl shadow-lg">
        <p>Total Employee</p>
        <h2 class="text-3xl font-bold">{{ $totalProgram }}</h2>
    </div>

    <div class="bg-blue-500 text-white p-6 rounded-2xl shadow-lg">
        <p>Promotion</p>
        <h2 class="text-3xl font-bold">{{ $totalPromotion }}</h2>
    </div>

    <div class="bg-blue-500 text-white p-6 rounded-2xl shadow-lg">
        <p>Event</p>
        <h2 class="text-3xl font-bold">{{ $totalEvent }}</h2>
    </div>

    <div class="bg-pink-500 text-white p-6 rounded-2xl shadow-lg">
        <p>Student Project</p>
        <h2 class="text-3xl font-bold">{{ $totalProject }}</h2>
    </div>

</div>



<div class="grid grid-cols-3 gap-8">

    <div class="col-span-2 space-y-6">

        <div class="bg-pink-100 p-6 rounded-xl shadow flex gap-6">
            <img src="/images/poster-LK.avif" class="w-32 rounded-lg" alt="Program Little Koders">
            <div>
                <h2 class="text-xl font-bold text-pink-500">Little Koders</h2>
                <p class="text-gray-600 text-sm mt-2">Program coding untuk anak usia dini.</p>
            </div>
        </div>

        <div class="bg-blue-100 p-6 rounded-xl shadow flex gap-6">
            <img src="/images/poster-JK.avif" class="w-32 rounded-lg" alt="Program Junior Koders">
            <div>
                <h2 class="text-xl font-bold text-blue-600">Junior Koders</h2>
                <p class="text-gray-600 text-sm mt-2">Program coding untuk anak sekolah dasar.</p>
            </div>
        </div>

        <div class="bg-blue-200 p-6 rounded-xl shadow flex gap-6">

            <img src="/images/poster-RoboNext.avif" class="w-32 rounded-lg" alt="Program RoboNext">

            <div>
                <h2 class="text-xl font-bold text-blue-700">
                    RoboNext
                </h2>

                <p class="text-gray-600 text-sm mt-2">
                    Program robotik dan AI.
                </p>
            </div>

        </div>

    </div>



    <div class="bg-white rounded-xl shadow p-6 w-80">

        <h2 class="font-semibold text-gray-700 mb-4">
            Calendar
        </h2>

        <div id="calendar"></div>

    </div>


    <div class="bg-white p-6 rounded-xl shadow">

        <div class="flex justify-between mb-4">
            <h2 class="font-bold">Online Users</h2>
        </div>


    </div>

</div>

</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {

        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {

            initialView: 'dayGridMonth'

        });

        calendar.render();

    });
</script>

@endsection
