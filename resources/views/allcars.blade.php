@extends('welcome')

{{--@section('content')--}}
{{--    <html>--}}
{{--    <head>--}}
{{--        <script src="https://cdn.tailwindcss.com">--}}
{{--        </script>--}}
{{--        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>--}}
{{--    </head>--}}
{{--    <body class="bg-gray-100">--}}
{{--    <div class="container mx-auto p-4">--}}
{{--        <div class="flex items-center pb-10  w-full">--}}
{{--            <div class="flex-grow border-t border-orange-500"></div>--}}
{{--            <span class="mx-4 text-orange-500 font-bold">ALL CARS</span>--}}
{{--            <div class="flex-grow border-t border-orange-500"></div>--}}
{{--        </div>--}}
{{--        <div class="flex justify-center mb-6">--}}
{{--            <input class="border rounded-l-lg p-2 w-1/4" placeholder="brand" type="text"/>--}}
{{--            <input class="border p-2 w-1/4" placeholder="model" type="text"/>--}}
{{--            <input class="border p-2 w-1/4" placeholder="$ minimum price" type="text"/>--}}
{{--            <input class="border rounded-r-lg p-2 w-1/4" placeholder="$ maximum price" type="text"/>--}}
{{--            <button class="bg-orange-500 text-white px-4 py-2 rounded-lg ml-2">--}}
{{--                Search--}}
{{--            </button>--}}
{{--        </div>--}}
{{--        <div class="grid grid-cols-3 gap-6">--}}


{{--            <!-- Card 1 -->--}}


{{--            <div class="bg-white rounded-lg shadow-lg overflow-hidden">--}}
{{--                <div class="relative">--}}
{{--                    <img alt="Toyota Camry 2.5L" class="w-full h-48 object-cover" height="300"--}}
{{--                         src="{{ asset('storage/images/cars/Toyota_Camry.jpg') }}" width="400"/>--}}
{{--                    <div class="absolute top-2 left-2 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded">--}}
{{--                        30 % OFF--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="p-4">--}}
{{--                    <h3 class="text-lg font-bold text-black"> Toyota Camry 2.5L</h3>--}}
{{--                    <div class="flex items-center mt-2">--}}
{{--                    <span class="text-2xl text-black font-bold">50.00 </span>--}}
{{--                        <span class=" text-red-500 line-through ml-2">--}}
{{--        71--}}
{{--       </span>--}}
{{--                        <div class="flex items-center ml-auto">--}}
{{--        <span class="text-yellow-500">--}}
{{--         <i class="fas fa-star">--}}
{{--         </i>--}}
{{--        </span>--}}
{{--                            <span class="ml-1 font-bold">--}}
{{--         5.0--}}
{{--        </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <button class="bg-blue-900 text-white w-full py-2 mt-4 rounded-lg flex items-center justify-center">--}}
{{--                        <i class="fas fa-calendar-alt mr-2">--}}
{{--                        </i>--}}
{{--                        <a href="{{ url('/rentals/create') }}">Reserve </a>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}


{{--            <!-- Card 2 -->--}}


{{--            <div class="bg-white rounded-lg shadow-lg overflow-hidden">--}}
{{--                <div class="relative">--}}
{{--                    <img alt="Honda Civic 1.8L" class="w-full h-48 object-cover" height="300"--}}
{{--                         src="{{ asset('storage/images/cars/Honda_Civic.jpg') }}" width="400"/>--}}
{{--                    <div class="absolute top-2 left-2 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded">--}}
{{--                        10 % OFF--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="p-4">--}}
{{--                    <h3 class="text-lg text-black font-bold">--}}
{{--                        Honda Civic 1.8L--}}
{{--                    </h3>--}}
{{--                    <div class="flex items-center mt-2">--}}
{{--       <span class="text-2xl text-black font-bold">--}}
{{--        45.00--}}
{{--       </span>--}}
{{--                        <span class="text-red-500 line-through ml-2">--}}
{{--        59--}}
{{--       </span>--}}
{{--                        <div class="flex items-center ml-auto">--}}
{{--        <span class="text-yellow-500">--}}
{{--         <i class="fas fa-star">--}}
{{--         </i>--}}
{{--        </span>--}}
{{--                            <span class="ml-1 font-bold">--}}
{{--         5.0--}}
{{--        </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <button class="bg-blue-900 text-white w-full py-2 mt-4 rounded-lg flex items-center justify-center">--}}
{{--                        <i class="fas fa-calendar-alt mr-2">--}}
{{--                        </i>--}}
{{--                        <a href="{{ url('/rentals/create') }}">Reserve </a>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}


{{--            <!-- Card 3 -->--}}


{{--            <div class="bg-white rounded-lg shadow-lg overflow-hidden">--}}
{{--                <div class="relative">--}}
{{--                    <img alt="Ford Mustang 5.0L V8" class="w-full h-48 object-cover" height="300"--}}
{{--                         src="{{ asset('storage/images/cars/Ford_Mustang.jpg') }}" width="400"/>--}}
{{--                    <div class="absolute top-2 left-2 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded">--}}
{{--                        0 % OFF--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="p-4">--}}
{{--                    <h3 class="text-lg text-black font-bold">--}}
{{--                        Ford Mustang 5.0L V8--}}
{{--                    </h3>--}}
{{--                    <div class="flex items-center mt-2">--}}
{{--       <span class="text-2xl text-black font-bold">--}}
{{--        70.00--}}
{{--       </span>--}}
{{--                        <span class="text-red-500 line-through ml-2">--}}
{{--        79--}}
{{--       </span>--}}
{{--                        <div class="flex items-center ml-auto">--}}
{{--        <span class="text-yellow-500">--}}
{{--         <i class="fas fa-star">--}}
{{--         </i>--}}
{{--        </span>--}}
{{--                            <span class="ml-1 font-bold">--}}
{{--         5.0--}}
{{--        </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <button class="bg-blue-900 text-white w-full py-2 mt-4 rounded-lg flex items-center justify-center">--}}
{{--                        <i class="fas fa-calendar-alt mr-2">--}}
{{--                        </i>--}}
{{--                        <a href="{{ url('/rentals/create') }}">Reserve </a>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}


{{--            <!-- Card 4 -->--}}


{{--            <div class="bg-white rounded-lg shadow-lg overflow-hidden">--}}
{{--                <div class="relative">--}}
{{--                    <img alt="BMW X5 3.0L" class="w-full h-48 object-cover" height="300"--}}
{{--                         src="{{ asset('storage/images/cars/BMW_X5.jpg') }}" width="400"/>--}}
{{--                    <div class="absolute top-2 left-2 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded">--}}
{{--                        20 % OFF--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="p-4">--}}
{{--                    <h3 class="text-lg text-black font-bold">--}}
{{--                        BMW X5 3.0L--}}
{{--                    </h3>--}}
{{--                    <div class="flex items-center mt-2">--}}
{{--       <span class="text-2xl text-black font-bold">--}}
{{--        80.00--}}
{{--       </span>--}}
{{--                        <span class="text-red-500 line-through ml-2">--}}
{{--        100--}}
{{--       </span>--}}
{{--                        <div class="flex items-center ml-auto">--}}
{{--        <span class="text-yellow-500">--}}
{{--         <i class="fas fa-star">--}}
{{--         </i>--}}
{{--        </span>--}}
{{--                            <span class="ml-1 font-bold">--}}
{{--         5.0--}}
{{--        </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <button class="bg-blue-900 text-white w-full py-2 mt-4 rounded-lg flex items-center justify-center">--}}
{{--                        <i class="fas fa-calendar-alt mr-2">--}}
{{--                        </i>--}}
{{--                        <a href="{{ url('/rentals/create') }}">Reserve </a>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- Card 5 -->--}}
{{--            <div class="bg-white rounded-lg shadow-lg overflow-hidden">--}}
{{--                <div class="relative">--}}
{{--                    <img alt="Mercedes-Benz E-Class 2.0L" class="w-full h-48 object-cover" height="300"--}}
{{--                    src="{{ asset('storage/images/cars/Mercedes-Benz_E-Class.jpg') }}"  width="400"/>--}}
{{--                    <div class="absolute top-2 left-2 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded">--}}
{{--                        10 % OFF--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="p-4">--}}
{{--                    <h3 class="text-lg text-black font-bold">--}}
{{--                        Mercedes-Benz E-Class 2.0L--}}
{{--                    </h3>--}}
{{--                    <div class="flex items-center mt-2">--}}
{{--       <span class="text-2xl text-black font-bold">--}}
{{--        65.00--}}
{{--       </span>--}}
{{--                        <span class="text-red-5000 line-through ml-2">--}}
{{--        72--}}
{{--       </span>--}}
{{--                        <div class="flex items-center ml-auto">--}}
{{--        <span class="text-yellow-500">--}}
{{--         <i class="fas fa-star">--}}
{{--         </i>--}}
{{--        </span>--}}
{{--                            <span class="ml-1 font-bold">--}}
{{--         5.0--}}
{{--        </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <button class="bg-blue-900 text-white w-full py-2 mt-4 rounded-lg flex items-center justify-center">--}}
{{--                        <i class="fas fa-calendar-alt mr-2">--}}
{{--                        </i>--}}
{{--                        <a href="{{ url('/rentals/create') }}">Reserve </a>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- Card 6 -->--}}
{{--            <div class="bg-white rounded-lg shadow-lg overflow-hidden">--}}
{{--                <div class="relative">--}}
{{--                    <img alt="Chevrolet Malibu 1.5L" class="w-full h-48 object-cover" height="300"--}}
{{--                         src="{{ asset('storage/images/homecar.png') }}"--}}
{{--                         width="400"/>--}}
{{--                    <div class="absolute top-2 left-2 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded">--}}
{{--                        50 % OFF--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="p-4">--}}
{{--                    <h3 class="text-lg text-black font-bold">--}}
{{--                        Chevrolet Malibu 1.5L--}}
{{--                    </h3>--}}
{{--                    <div class="flex items-center mt-2">--}}
{{--       <span class="text-2xl text-black font-bold">--}}
{{--        55.00--}}
{{--       </span>--}}
{{--                        <span class="text-red-500 line-through ml-2">--}}
{{--        110--}}
{{--       </span>--}}
{{--                        <div class="flex items-center ml-auto">--}}
{{--        <span class="text-yellow-500">--}}
{{--         <i class="fas fa-star">--}}
{{--         </i>--}}
{{--        </span>--}}
{{--                            <span class="ml-1 font-bold">--}}
{{--         5.0--}}
{{--        </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <button class="bg-blue-900 text-white w-full py-2 mt-4 rounded-lg flex items-center justify-center">--}}
{{--                        <i class="fas fa-calendar-alt mr-2">--}}
{{--                        </i>--}}
{{--                        <a href="{{ url('/rentals/create') }}">Reserve </a>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    </body>--}}
{{--    </html>--}}
{{--@endsection--}}


@section('content')
    <html>

    <head>
        <script src="https://cdn.tailwindcss.com">
        </script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    </head>

    <body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <div class="flex items-center pb-10  w-full">
            <div class="flex-grow border-t border-orange-500"></div>
            <span class="mx-4 text-orange-500 font-bold">ALL CARS</span>
            <div class="flex-grow border-t border-orange-500"></div>
        </div>
        <div class="flex justify-center mb-6">
            <form action="#" method="GET" class="flex justify-center mb-6">
                <input name="brand" class="border rounded-l-lg p-2 w-1/4 text-black" placeholder="brand" type="text" />
                <input name="model" class="border p-2 w-1/4 text-black" placeholder="model" type="text" />
                <input name="min_price" class="border p-2 w-1/4 text-black" placeholder="$ minimum price" type="number" />
                <input name="max_price" class="border rounded-r-lg p-2 w-1/4 text-black" placeholder="$ maximum price" type="number" />
                <button class="bg-orange-500 text-white px-4 py-2 rounded-lg ml-2" type="submit">Search</button>
            </form>
        </div>

        <div class="container mx-auto p-4">

            <div class="grid grid-cols-3 gap-6">
                @foreach($cars as $car)
                    <!-- Display each car's card here -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <div class="relative">
                            <img class="h-80" alt="{{ $car->name }}" src="{{ asset('storage/' . $car->image) }}">

                        @if($car->discount)
                                <div class="absolute top-2 left-2 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded">
                                    {{ $car->discount }} % OFF
                                </div>
                            @endif
                        </div>
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-black">{{ $car->brand }} {{ $car->model }}</h3>
                            <div class="flex items-center mt-2">
                                <span class="text-2xl text-black font-bold">{{ $car->daily_rent_price }}</span>
                                @if($car->original_price)
                                    <span class="text-red-500 line-through ml-2">{{ $car->original_price }}</span>
                                @endif
                                <div class="flex items-center ml-auto">
                                    <span class="text-yellow-500"><i class="fas fa-star"></i></span>
                                    <span class="ml-1 font-bold">5.0</span>
                                </div>
                            </div>
                            <button class="bg-blue-900 text-white w-full py-2 mt-4 rounded-lg flex items-center justify-center">
                                <i class="fas fa-calendar-alt mr-2"></i>
                                <a href="{{ url('/rentals/create') }}">Reserve</a>
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
    </body>

    </html>
@endsection
