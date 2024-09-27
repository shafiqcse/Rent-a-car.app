{{--@extends('welcome')--}}
{{--@include('cars.index')--}}
{{--@extends('cars.index')--}}
{{--@extends('welcome')--}}
{{--@include('welcome')--}}
{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <div class="py-12">--}}
{{--            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                    <div class="p-6 text-gray-900">--}}
{{--                    </div>--}}
{{--                    <div class="flex justify-center mb-4">--}}
{{--                        <nav class="flex justify-center">--}}
{{--                            <ul class="flex">--}}
{{--                                <li class="mr-6">--}}
{{--                                    <a href="{{ route('cars.index') }}" class="bg-blue-500 text-white py-2 px-4 rounded mr-2 hover:text-gray-900">--}}
{{--                                        {{ __('Cars') }}--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="mr-6">--}}
{{--                                    <a href="{{ route('rentals.create') }}" class="bg-blue-500 text-white py-2 px-4 rounded mr-2 hover:text-gray-900">--}}

{{--                                        {{ __('Make Reservation') }}--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="mr-6">--}}
{{--                                    <a href="#" class="bg-blue-500 text-white py-2 px-4 rounded mr-2 hover:text-gray-900">--}}

{{--                                        {{ __('Reservation') }}--}}
{{--                                    </a>--}}
{{--                                </li>--}}

{{--                                <!-- Add more menu items here -->--}}
{{--                            </ul>--}}
{{--                        </nav>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </x-slot>--}}

{{--    --}}{{-- info dashboard start --}}
{{--    <html>--}}
{{--    <head>--}}
{{--        <script src="https://cdn.tailwindcss.com">--}}
{{--        </script>--}}
{{--        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>--}}
{{--    </head>--}}
{{--    <body class="bg-gray-100">--}}
{{--    <div class="container mx-auto p-4">--}}
{{--        <!-- Stats Section -->--}}
{{--        <div class="grid grid-cols-4 gap-4 mb-8">--}}
{{--            <div class="bg-white p-6 rounded-lg shadow-md flex items-center">--}}
{{--                <div class="text-4xl text-orange-500 mr-4">--}}
{{--                    <i class="fas fa-users">--}}
{{--                    </i>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <div class="text-lg font-semibold text-gray-700">--}}
{{--                        Total Users--}}
{{--                    </div>--}}
{{--                    <div class="text-2xl font-bold text-gray-900">--}}
{{--                        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">{{ $clients + $admins  }} (admins: {{ $admins }}) </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="bg-white p-6 rounded-lg shadow-md flex items-center">--}}
{{--                <div class="text-4xl text-orange-500 mr-4">--}}
{{--                    <i class="fas fa-car">--}}
{{--                    </i>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <div class="text-lg font-semibold text-gray-700">--}}
{{--                        Available Cars--}}
{{--                    </div>--}}
{{--                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">--}}
{{--                        {{ $cars->where('Availability', 'Available')->count() }}--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="bg-white p-6 rounded-lg shadow-md flex items-center">--}}
{{--                <div class="text-4xl text-orange-500 mr-4">--}}
{{--                    <i class="fas fa-calendar-check">--}}
{{--                    </i>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <p class="text-lg font-medium text-pr-400 ">--}}
{{--                        Active Reservations--}}
{{--                    </p>--}}
{{--                    <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">--}}
{{--                        {{ $reservations->where('status', 'Active')->count() }}--}}
{{--                    </p>--}}
{{--                </div>--}}


{{--            </div>--}}
{{--            <div class="bg-white p-6 rounded-lg shadow-md flex items-center">--}}
{{--                <div class="text-4xl text-orange-500 mr-4">--}}
{{--                    <i class="fas fa-file-alt">--}}
{{--                    </i>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <div class="text-lg font-semibold text-gray-700">--}}
{{--                        Active Insurances--}}
{{--                    </div>--}}
{{--                    <div class="text-2xl font-bold text-gray-900">--}}
{{--                        0--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}



{{--        <!-- Reservations Section -->--}}
{{--        <div class="bg-white p-6 rounded-lg shadow-md">--}}
{{--            <div class="border-b border-gray-200 pb-4 mb-4">--}}
{{--                <h2 class="text-xl font-semibold text-gray-700">--}}
{{--                    RESERVATIONS--}}
{{--                </h2>--}}
{{--            </div>--}}
{{--            <table class="min-w-full bg-white">--}}
{{--                <thead>--}}
{{--                <tr>--}}
{{--                    <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">--}}
{{--                        CLIENT--}}
{{--                    </th>--}}
{{--                    <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">--}}
{{--                        CAR--}}
{{--                    </th>--}}
{{--                    <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">--}}
{{--                        STARTED AT--}}
{{--                    </th>--}}
{{--                    <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">--}}
{{--                        END AT--}}
{{--                    </th>--}}
{{--                    <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">--}}
{{--                        DURATION--}}
{{--                    </th>--}}
{{--                    <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">--}}
{{--                        RAIMINING DAYS--}}
{{--                    </th>--}}
{{--                    <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">--}}
{{--                        PRICE--}}
{{--                    </th>--}}
{{--                    <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">--}}
{{--                        PAYMENT STATUS--}}
{{--                    </th>--}}
{{--                    <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">--}}
{{--                        STATUS--}}
{{--                    </th>--}}
{{--                    <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">--}}
{{--                        ACTIONS--}}
{{--                    </th>--}}
{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                <tr>--}}
{{--                    <td class="py-4 px-4 border-b border-gray-200 flex items-center">--}}
{{--                        <img alt="User profile picture" class="w-10 h-10 rounded-full mr-4" height="40"--}}
{{--                             src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-LmQ09WWGIGwOeeA4ArnRw0x5/user-uJPET5fjNenSso8wCETWVNOp/img-Arc1DPBpNmIatU8zXyr7QgQa.png?st=2024-09-17T12%3A20%3A41Z&amp;se=2024-09-17T14%3A20%3A41Z&amp;sp=r&amp;sv=2024-08-04&amp;sr=b&amp;rscd=inline&amp;rsct=image/png&amp;skoid=d505667d-d6c1-4a0a-bac7-5c84a87759f8&amp;sktid=a48cca56-e6da-484e-a814-9c849652bcb3&amp;skt=2024-09-16T23%3A24%3A36Z&amp;ske=2024-09-17T23%3A24%3A36Z&amp;sks=b&amp;skv=2024-08-04&amp;sig=WlKt/rvaIEyK0kP01s5XanuUY18t0XjboEVvKKeCuT0%3D"--}}
{{--                             width="40"/>--}}
{{--                        <div>--}}
{{--                            <div class="text-sm font-semibold text-gray-700">--}}
{{--                                Test User--}}
{{--                            </div>--}}
{{--                            <div class="text-sm text-gray-500">--}}
{{--                                test_user@email.com--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </td>--}}
{{--                    <td class="py-4 px-4 border-b border-gray-200 text-sm text-gray-700">--}}
{{--                        Toyota Camry--}}
{{--                    </td>--}}
{{--                    <td class="py-4 px-4 border-b border-gray-200 text-sm text-gray-700">--}}
{{--                        24-09-16--}}
{{--                    </td>--}}
{{--                    <td class="py-4 px-4 border-b border-gray-200 text-sm text-gray-700">--}}
{{--                        24-09-18--}}
{{--                    </td>--}}
{{--                    <td class="py-4 px-4 border-b border-gray-200 text-sm text-gray-700">--}}
{{--                        2 days--}}
{{--                    </td>--}}
{{--                    <td class="py-4 px-4 border-b border-gray-200 text-sm text-gray-700">--}}
{{--                        0 days--}}
{{--                    </td>--}}
{{--                    <td class="py-4 px-4 border-b border-gray-200 text-sm text-gray-700">--}}
{{--                        100 $--}}
{{--                    </td>--}}
{{--                    <td class="py-4 px-4 border-b border-gray-200 text-sm">--}}
{{--        <span class="bg-yellow-500 text-white py-1 px-3 rounded-full text-xs">--}}
{{--         Pending--}}
{{--        </span>--}}
{{--                    </td>--}}
{{--                    <td class="py-4 px-4 border-b border-gray-200 text-sm">--}}
{{--        <span class="bg-green-500 text-white py-1 px-3 rounded-full text-xs">--}}
{{--         Active--}}
{{--        </span>--}}
{{--                    </td>--}}
{{--                    <td class="py-4 px-4 border-b border-gray-200 text-sm">--}}
{{--                        <button class="bg-orange-500 text-white py-1 px-3 rounded-full text-xs mr-2">--}}
{{--                            Edit Status--}}
{{--                        </button>--}}
{{--                        <button class="bg-purple-500 text-white py-1 px-3 rounded-full text-xs">--}}
{{--                            Edit payment--}}
{{--                        </button>--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--                </tbody>--}}
{{--            </table>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    </body>--}}
{{--    </html>--}}



{{--    --}}{{-- info dashboard end --}}
{{--</x-app-layout>--}}

<x-app-layout>
    <x-slot name="header">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                    </div>
                    <div class="flex justify-center mb-4">
                        <nav class="flex justify-center">
                            <ul class="flex">
                                <li class="mr-6">
                                    <a href="{{ route('cars.index') }}" class="bg-orange-500 text-gray-800 hover:text-white font-medium rounded-md px-5 py-3">
                                        {{ __('ALL CARS') }}
                                    </a>
                                </li>
                                <li class="mr-6">
                                    <a href="{{ route('rentals.create') }}" class="bg-orange-500 text-gray-800 hover:text-white font-medium rounded-md px-5 py-3">

                                        {{ __('MAKE RESERVATION') }}
                                    </a>
                                </li>
                                <li class="mr-6">
                                    <a href="{{ route('rentals.index') }}" class="bg-orange-500 text-gray-800 hover:text-white font-medium rounded-md px-5 py-3">

                                        {{ __('RESERVATION') }}
                                    </a>
                                </li>

                                <!-- Add more menu items here -->
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </x-slot>

    {{-- info dashboard start --}}
    <html>
    <head>
        <script src="https://cdn.tailwindcss.com">
        </script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    </head>
    <body class="bg-gray-100">


    <div class="container mx-auto p-4">


        <!-- Statistics Section -->
        <div class="grid grid-cols-3 gap-10 mb-8">
            <div class="bg-white  p-6 rounded-lg shadow-md flex items-center">
                <div class="text-4xl text-orange-600 mr-4">
                    <i class="fas fa-users">
                    </i>
                </div>
                <div>
                    <div class="text-lg font-semibold text-gray-700">
                        Total Clients
                    </div>
                    <div class="text-2xl font-bold text-gray-700">
                        {{ $totalCustomers }}
                    </div>
                </div>
            </div>


            <div class="bg-white p-6 rounded-lg shadow-md flex items-center">
                <div class="text-4xl text-orange-500 mr-4">
                    <i class="fas fa-car">
                    </i>
                </div>
                <div>
                    <div class="text-lg font-semibold text-gray-700">
                        Available Cars
                    </div>
                    <div class="text-2xl font-bold text-gray-900">
                        {{ $availableCars }}
                    </div>

                </div>
            </div>


            <div class="bg-white p-6 rounded-lg shadow-md flex items-center">
                <div class="text-4xl text-orange-500 mr-4">
                    <i class="fas fa-calendar-check">
                    </i>
                </div>
                <div>
                    <p class="text-lg font-medium text-pr-400 ">
                        Active Reservations
                    </p>
                    <div class="text-2xl font-bold text-gray-900">
                        {{ $activeReservations }}
                    </div>
                </div>
            </div>


{{--            <div class="bg-white p-6 rounded-lg shadow-md flex items-center">--}}
{{--                <div class="text-4xl text-orange-500 mr-4">--}}
{{--                    <i class="fas fa-file-alt">--}}
{{--                    </i>--}}
{{--                </div>--}}
{{--                <div>--}}
{{--                    <div class="text-lg font-semibold text-gray-700">--}}
{{--                        Total Revenue--}}
{{--                    </div>--}}
{{--                    <div class="text-2xl font-bold text-gray-900">--}}
{{--                        ${{ number_format($totalRent, 2) }}--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}


{{--        <!-- Reservations Section -->--}}
{{--        <div class="bg-white p-6 rounded-lg shadow-md">--}}
{{--            <div class="border-b border-gray-200 pb-4 mb-4">--}}
{{--                <h2 class="text-xl font-semibold text-gray-700">--}}
{{--                    RESERVATIONS--}}
{{--                </h2>--}}
{{--            </div>--}}
{{--            <table class="min-w-full bg-white">--}}
{{--                <thead>--}}
{{--                <tr>--}}
{{--                    <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">--}}
{{--                        CLIENT--}}
{{--                    </th>--}}
{{--                    <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">--}}
{{--                        CAR--}}
{{--                    </th>--}}
{{--                    <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">--}}
{{--                        STARTED AT--}}
{{--                    </th>--}}
{{--                    <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">--}}
{{--                        END AT--}}
{{--                    </th>--}}
{{--                    <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">--}}
{{--                        DURATION--}}
{{--                    </th>--}}
{{--                    <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">--}}
{{--                        RAIMINING DAYS--}}
{{--                    </th>--}}
{{--                    <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">--}}
{{--                        PRICE--}}
{{--                    </th>--}}
{{--                    <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">--}}
{{--                        PAYMENT STATUS--}}
{{--                    </th>--}}
{{--                    <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">--}}
{{--                        STATUS--}}
{{--                    </th>--}}
{{--                    <th class="py-2 px-4 border-b border-gray-200 text-left text-sm font-semibold text-gray-700">--}}
{{--                        ACTIONS--}}
{{--                    </th>--}}
{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                <tr>--}}
{{--                    <td class="py-4 px-4 border-b border-gray-200 flex items-center">--}}
{{--                        <img alt="User profile picture" class="w-10 h-10 rounded-full mr-4" height="40"--}}
{{--                             src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-LmQ09WWGIGwOeeA4ArnRw0x5/user-uJPET5fjNenSso8wCETWVNOp/img-Arc1DPBpNmIatU8zXyr7QgQa.png?st=2024-09-17T12%3A20%3A41Z&amp;se=2024-09-17T14%3A20%3A41Z&amp;sp=r&amp;sv=2024-08-04&amp;sr=b&amp;rscd=inline&amp;rsct=image/png&amp;skoid=d505667d-d6c1-4a0a-bac7-5c84a87759f8&amp;sktid=a48cca56-e6da-484e-a814-9c849652bcb3&amp;skt=2024-09-16T23%3A24%3A36Z&amp;ske=2024-09-17T23%3A24%3A36Z&amp;sks=b&amp;skv=2024-08-04&amp;sig=WlKt/rvaIEyK0kP01s5XanuUY18t0XjboEVvKKeCuT0%3D"--}}
{{--                             width="40"/>--}}
{{--                        <div>--}}
{{--                            <div class="text-sm font-semibold text-gray-700">--}}
{{--                                Test User--}}
{{--                            </div>--}}
{{--                            <div class="text-sm text-gray-500">--}}
{{--                                test_user@email.com--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </td>--}}
{{--                    <td class="py-4 px-4 border-b border-gray-200 text-sm text-gray-700">--}}
{{--                        Toyota Camry--}}
{{--                    </td>--}}
{{--                    <td class="py-4 px-4 border-b border-gray-200 text-sm text-gray-700">--}}
{{--                        24-09-16--}}
{{--                    </td>--}}
{{--                    <td class="py-4 px-4 border-b border-gray-200 text-sm text-gray-700">--}}
{{--                        24-09-18--}}
{{--                    </td>--}}
{{--                    <td class="py-4 px-4 border-b border-gray-200 text-sm text-gray-700">--}}
{{--                        2 days--}}
{{--                    </td>--}}
{{--                    <td class="py-4 px-4 border-b border-gray-200 text-sm text-gray-700">--}}
{{--                        0 days--}}
{{--                    </td>--}}
{{--                    <td class="py-4 px-4 border-b border-gray-200 text-sm text-gray-700">--}}
{{--                        100 $--}}
{{--                    </td>--}}
{{--                    <td class="py-4 px-4 border-b border-gray-200 text-sm">--}}
{{--        <span class="bg-yellow-500 text-white py-1 px-3 rounded-full text-xs">--}}
{{--         Pending--}}
{{--        </span>--}}
{{--                    </td>--}}
{{--                    <td class="py-4 px-4 border-b border-gray-200 text-sm">--}}
{{--        <span class="bg-green-500 text-white py-1 px-3 rounded-full text-xs">--}}
{{--         Active--}}
{{--        </span>--}}
{{--                    </td>--}}
{{--                    <td class="py-4 px-4 border-b border-gray-200 text-sm">--}}
{{--                        <button class="bg-orange-500 text-white py-1 px-3 rounded-full text-xs mr-2">--}}
{{--                            Edit Status--}}
{{--                        </button>--}}
{{--                        <button class="bg-purple-500 text-white py-1 px-3 rounded-full text-xs">--}}
{{--                            Edit payment--}}
{{--                        </button>--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--                </tbody>--}}
{{--            </table>--}}
{{--        </div>--}}
    </div>
    </body>
    </html>

    {{-- info dashboard end --}}
</x-app-layout>
