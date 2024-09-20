@extends('welcome')
{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <title>All Cars</title>--}}
{{--    <script src="https://cdn.tailwindcss.com"></script>--}}
{{--</head>--}}
{{--<body class="bg-gray-100 p-8">--}}
{{--<div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">--}}
{{--    <h1 class="text-3xl font-semibold mb-6">All Cars</h1>--}}

{{--    <!-- Filters and Search Form -->--}}
{{--    <form action="{{ route('cars.index') }}" method="GET">--}}
{{--        <div class="grid grid-cols-3 gap-4 mb-6">--}}
{{--            <div>--}}
{{--                <label class="block text-sm font-medium text-gray-700" for="carType">--}}
{{--                    Car Type--}}
{{--                </label>--}}
{{--                <input name="car_type" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" id="carType" placeholder="All" type="text" value="{{ request('car_type') }}"/>--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <label class="block text-sm font-medium text-gray-700" for="brand">--}}
{{--                    Brand--}}
{{--                </label>--}}
{{--                <input name="brand" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" id="brand" placeholder="All" type="text" value="{{ request('brand') }}"/>--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <label class="block text-sm font-medium text-gray-700" for="price">--}}
{{--                    Max Price--}}
{{--                </label>--}}
{{--                <input name="max_price" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" id="price" placeholder="Price Filter" type="number" step="0.01" value="{{ request('max_price') }}"/>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <button type="submit" class="bg-white text-green-600 border border-green-600 rounded-md px-4 py-2 mb-6">--}}
{{--            Filter--}}
{{--        </button>--}}
{{--    </form>--}}

{{--    <!-- Cars Listing -->--}}
{{--    <div class="space-y-6">--}}
{{--        @forelse($cars as $car)--}}
{{--            <div class="bg-white p-4 rounded-lg shadow-md flex items-center">--}}
{{--                <div class="flex-1">--}}
{{--                    <h2 class="text-xl font-semibold">--}}
{{--                        {{ $car->brand }} - {{ $car->type }}--}}
{{--                    </h2>--}}
{{--                    <p class="text-gray-600">--}}
{{--                        Daily Rent Price: ${{ number_format($car->daily_rent_price, 2) }}--}}
{{--                    </p>--}}
{{--                    <button class="mt-2 bg-white text-green-600 border border-green-600 rounded-md px-4 py-2">--}}
{{--                        View Details--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <img alt="Image of {{ $car->brand }} {{ $car->type }}" class="w-24 h-24 rounded-md" src="{{ $car->image_url }}" width="100"/>--}}
{{--            </div>--}}
{{--        @empty--}}
{{--            <p class="text-center text-gray-600">No cars found.</p>--}}
{{--        @endforelse--}}
{{--    </div>--}}
{{--</div>--}}
{{--</body>--}}
{{--</html>--}}

@section('content')
    <html>
    <head>
        <script src="https://cdn.tailwindcss.com">
        </script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    </head>
    <body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <div class="flex items-center pb-10  w-full">
            <div class="flex-grow border-t border-orange-500"></div>
            <span class="mx-4 text-orange-500 font-bold">ALL CARS</span>
            <div class="flex-grow border-t border-orange-500"></div>
        </div>
        <div class="flex justify-center mb-6">
            <input class="border rounded-l-lg p-2 w-1/4" placeholder="brand" type="text"/>
            <input class="border p-2 w-1/4" placeholder="model" type="text"/>
            <input class="border p-2 w-1/4" placeholder="$ minimum price" type="text"/>
            <input class="border rounded-r-lg p-2 w-1/4" placeholder="$ maximum price" type="text"/>
            <button class="bg-orange-500 text-white px-4 py-2 rounded-lg ml-2">
                Search
            </button>
        </div>
        <div class="grid grid-cols-3 gap-6">


            <!-- Card 1 -->


            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="relative">
                    <img alt="Toyota Camry 2.5L" class="w-full h-48 object-cover" height="300"
                         src="{{ asset('storage/images/cars/Toyota_Camry.jpg') }}" width="400"/>
                    <div class="absolute top-2 left-2 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded">
                        30 % OFF
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-bold text-black"> Toyota Camry 2.5L</h3>
                    <div class="flex items-center mt-2">
                    <span class="text-2xl text-black font-bold">50.00 </span>
                        <span class=" text-red-500 line-through ml-2">
        71
       </span>
                        <div class="flex items-center ml-auto">
        <span class="text-yellow-500">
         <i class="fas fa-star">
         </i>
        </span>
                            <span class="ml-1 font-bold">
         5.0
        </span>
                        </div>
                    </div>
                    <button class="bg-blue-900 text-white w-full py-2 mt-4 rounded-lg flex items-center justify-center">
                        <i class="fas fa-calendar-alt mr-2">
                        </i>
                        <a href="{{ url('/rentals/create') }}">Reserve </a>
                    </button>
                </div>
            </div>


            <!-- Card 2 -->


            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="relative">
                    <img alt="Honda Civic 1.8L" class="w-full h-48 object-cover" height="300"
                         src="{{ asset('storage/images/cars/Honda_Civic.jpg') }}" width="400"/>
                    <div class="absolute top-2 left-2 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded">
                        10 % OFF
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg text-black font-bold">
                        Honda Civic 1.8L
                    </h3>
                    <div class="flex items-center mt-2">
       <span class="text-2xl text-black font-bold">
        45.00
       </span>
                        <span class="text-red-500 line-through ml-2">
        59
       </span>
                        <div class="flex items-center ml-auto">
        <span class="text-yellow-500">
         <i class="fas fa-star">
         </i>
        </span>
                            <span class="ml-1 font-bold">
         5.0
        </span>
                        </div>
                    </div>
                    <button class="bg-blue-900 text-white w-full py-2 mt-4 rounded-lg flex items-center justify-center">
                        <i class="fas fa-calendar-alt mr-2">
                        </i>
                        <a href="{{ url('/rentals/create') }}">Reserve </a>
                    </button>
                </div>
            </div>


            <!-- Card 3 -->


            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="relative">
                    <img alt="Ford Mustang 5.0L V8" class="w-full h-48 object-cover" height="300"
                         src="{{ asset('storage/images/cars/Ford_Mustang.jpg') }}" width="400"/>
                    <div class="absolute top-2 left-2 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded">
                        0 % OFF
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg text-black font-bold">
                        Ford Mustang 5.0L V8
                    </h3>
                    <div class="flex items-center mt-2">
       <span class="text-2xl text-black font-bold">
        70.00
       </span>
                        <span class="text-red-500 line-through ml-2">
        79
       </span>
                        <div class="flex items-center ml-auto">
        <span class="text-yellow-500">
         <i class="fas fa-star">
         </i>
        </span>
                            <span class="ml-1 font-bold">
         5.0
        </span>
                        </div>
                    </div>
                    <button class="bg-blue-900 text-white w-full py-2 mt-4 rounded-lg flex items-center justify-center">
                        <i class="fas fa-calendar-alt mr-2">
                        </i>
                        <a href="{{ url('/rentals/create') }}">Reserve </a>
                    </button>
                </div>
            </div>


            <!-- Card 4 -->


            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="relative">
                    <img alt="BMW X5 3.0L" class="w-full h-48 object-cover" height="300"
                         src="{{ asset('storage/images/cars/BMW_X5.jpg') }}" width="400"/>
                    <div class="absolute top-2 left-2 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded">
                        20 % OFF
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg text-black font-bold">
                        BMW X5 3.0L
                    </h3>
                    <div class="flex items-center mt-2">
       <span class="text-2xl text-black font-bold">
        80.00
       </span>
                        <span class="text-red-500 line-through ml-2">
        100
       </span>
                        <div class="flex items-center ml-auto">
        <span class="text-yellow-500">
         <i class="fas fa-star">
         </i>
        </span>
                            <span class="ml-1 font-bold">
         5.0
        </span>
                        </div>
                    </div>
                    <button class="bg-blue-900 text-white w-full py-2 mt-4 rounded-lg flex items-center justify-center">
                        <i class="fas fa-calendar-alt mr-2">
                        </i>
                        <a href="{{ url('/rentals/create') }}">Reserve </a>
                    </button>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="relative">
                    <img alt="Mercedes-Benz E-Class 2.0L" class="w-full h-48 object-cover" height="300"
                    src="{{ asset('storage/images/cars/Mercedes-Benz_E-Class.jpg') }}"  width="400"/>
                    <div class="absolute top-2 left-2 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded">
                        10 % OFF
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg text-black font-bold">
                        Mercedes-Benz E-Class 2.0L
                    </h3>
                    <div class="flex items-center mt-2">
       <span class="text-2xl text-black font-bold">
        65.00
       </span>
                        <span class="text-red-5000 line-through ml-2">
        72
       </span>
                        <div class="flex items-center ml-auto">
        <span class="text-yellow-500">
         <i class="fas fa-star">
         </i>
        </span>
                            <span class="ml-1 font-bold">
         5.0
        </span>
                        </div>
                    </div>
                    <button class="bg-blue-900 text-white w-full py-2 mt-4 rounded-lg flex items-center justify-center">
                        <i class="fas fa-calendar-alt mr-2">
                        </i>
                        <a href="{{ url('/rentals/create') }}">Reserve </a>
                    </button>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="relative">
                    <img alt="Chevrolet Malibu 1.5L" class="w-full h-48 object-cover" height="300"
                         src="{{ asset('storage/images/homecar.png') }}"
                         width="400"/>
                    <div class="absolute top-2 left-2 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded">
                        50 % OFF
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg text-black font-bold">
                        Chevrolet Malibu 1.5L
                    </h3>
                    <div class="flex items-center mt-2">
       <span class="text-2xl text-black font-bold">
        55.00
       </span>
                        <span class="text-red-500 line-through ml-2">
        110
       </span>
                        <div class="flex items-center ml-auto">
        <span class="text-yellow-500">
         <i class="fas fa-star">
         </i>
        </span>
                            <span class="ml-1 font-bold">
         5.0
        </span>
                        </div>
                    </div>
                    <button class="bg-blue-900 text-white w-full py-2 mt-4 rounded-lg flex items-center justify-center">
                        <i class="fas fa-calendar-alt mr-2">
                        </i>
                        <a href="{{ url('/rentals/create') }}">Reserve </a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>
@endsection

@section('content')
    <html>
    <head>
        <script src="https://cdn.tailwindcss.com">
        </script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    </head>
    <body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <div class="flex justify-center mb-6">
            <input class="border rounded-l-lg p-2 w-1/4" placeholder="brand" type="text"/>
            <input class="border p-2 w-1/4" placeholder="model" type="text"/>
            <input class="border p-2 w-1/4" placeholder="$ minimum price" type="text"/>
            <input class="border rounded-r-lg p-2 w-1/4" placeholder="$ maximum price" type="text"/>
            <button class="bg-orange-500 text-white px-4 py-2 rounded-lg ml-2">
                Search
            </button>
        </div>
        <div class="grid grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="relative">
                    <img alt="Toyota Camry 2.5L" class="w-full h-48 object-cover" height="300"
                         src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-BVbpSZmLndA7MfHIxv2ahIKS/user-IBY8IaMXtVn7IVIdZeyvjx16/img-XaRDXkoGdwdI1PFW8Lk04vCX.png?st=2024-09-19T14%3A41%3A23Z&amp;se=2024-09-19T16%3A41%3A23Z&amp;sp=r&amp;sv=2024-08-04&amp;sr=b&amp;rscd=inline&amp;rsct=image/png&amp;skoid=d505667d-d6c1-4a0a-bac7-5c84a87759f8&amp;sktid=a48cca56-e6da-484e-a814-9c849652bcb3&amp;skt=2024-09-19T02%3A11%3A35Z&amp;ske=2024-09-20T02%3A11%3A35Z&amp;sks=b&amp;skv=2024-08-04&amp;sig=XjEEmhCClwQzy5tZDHJNvD7n/7DRjNHQzXVX3lENbSg%3D"
                         width="400"/>
                    <div class="absolute top-2 left-2 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded">
                        30 % OFF
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-bold">
                        Toyota Camry 2.5L
                    </h3>
                    <div class="flex items-center mt-2">
       <span class="text-2xl font-bold">
        50.00
       </span>
                        <span class="text-gray-500 line-through ml-2">
        71
       </span>
                        <div class="flex items-center ml-auto">
        <span class="text-yellow-500">
         <i class="fas fa-star">
         </i>
        </span>
                            <span class="ml-1 font-bold">
         5.0
        </span>
                        </div>
                    </div>
                    <button class="bg-blue-900 text-white w-full py-2 mt-4 rounded-lg flex items-center justify-center">
                        <i class="fas fa-calendar-alt mr-2">
                        </i>
                        Reserve
                    </button>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="relative">
                    <img alt="Honda Civic 1.8L" class="w-full h-48 object-cover" height="300"
                         src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-BVbpSZmLndA7MfHIxv2ahIKS/user-IBY8IaMXtVn7IVIdZeyvjx16/img-mzU59MLpStKJCBGDK0dcaFJ4.png?st=2024-09-19T14%3A41%3A25Z&amp;se=2024-09-19T16%3A41%3A25Z&amp;sp=r&amp;sv=2024-08-04&amp;sr=b&amp;rscd=inline&amp;rsct=image/png&amp;skoid=d505667d-d6c1-4a0a-bac7-5c84a87759f8&amp;sktid=a48cca56-e6da-484e-a814-9c849652bcb3&amp;skt=2024-09-19T02%3A59%3A50Z&amp;ske=2024-09-20T02%3A59%3A50Z&amp;sks=b&amp;skv=2024-08-04&amp;sig=icwMIJqk%2BX6yEvjz6SRpTgSqLtaiMnNQsInUg/BGN20%3D"
                         width="400"/>
                    <div class="absolute top-2 left-2 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded">
                        10 % OFF
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-bold">
                        Honda Civic 1.8L
                    </h3>
                    <div class="flex items-center mt-2">
       <span class="text-2xl font-bold">
        45.00
       </span>
                        <span class="text-gray-500 line-through ml-2">
        59
       </span>
                        <div class="flex items-center ml-auto">
        <span class="text-yellow-500">
         <i class="fas fa-star">
         </i>
        </span>
                            <span class="ml-1 font-bold">
         5.0
        </span>
                        </div>
                    </div>
                    <button class="bg-blue-900 text-white w-full py-2 mt-4 rounded-lg flex items-center justify-center">
                        <i class="fas fa-calendar-alt mr-2">
                        </i>
                        Reserve
                    </button>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="relative">
                    <img alt="Ford Mustang 5.0L V8" class="w-full h-48 object-cover" height="300"
                         src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-BVbpSZmLndA7MfHIxv2ahIKS/user-IBY8IaMXtVn7IVIdZeyvjx16/img-7MjsUazcQ3FAn4v1HFoFKJ0l.png?st=2024-09-19T14%3A41%3A26Z&amp;se=2024-09-19T16%3A41%3A26Z&amp;sp=r&amp;sv=2024-08-04&amp;sr=b&amp;rscd=inline&amp;rsct=image/png&amp;skoid=d505667d-d6c1-4a0a-bac7-5c84a87759f8&amp;sktid=a48cca56-e6da-484e-a814-9c849652bcb3&amp;skt=2024-09-19T02%3A12%3A01Z&amp;ske=2024-09-20T02%3A12%3A01Z&amp;sks=b&amp;skv=2024-08-04&amp;sig=0TUgAgCfDu8lg37U2WsCYDkP%2BnS%2BPGnsVYW9/OTmmPw%3D"
                         width="400"/>
                    <div class="absolute top-2 left-2 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded">
                        0 % OFF
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-bold">
                        Ford Mustang 5.0L V8
                    </h3>
                    <div class="flex items-center mt-2">
       <span class="text-2xl font-bold">
        70.00
       </span>
                        <span class="text-gray-500 line-through ml-2">
        79
       </span>
                        <div class="flex items-center ml-auto">
        <span class="text-yellow-500">
         <i class="fas fa-star">
         </i>
        </span>
                            <span class="ml-1 font-bold">
         5.0
        </span>
                        </div>
                    </div>
                    <button class="bg-blue-900 text-white w-full py-2 mt-4 rounded-lg flex items-center justify-center">
                        <i class="fas fa-calendar-alt mr-2">
                        </i>
                        Reserve
                    </button>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="relative">
                    <img alt="BMW X5 3.0L" class="w-full h-48 object-cover" height="300"
                         src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-BVbpSZmLndA7MfHIxv2ahIKS/user-IBY8IaMXtVn7IVIdZeyvjx16/img-ArtZEaBZk77HD4JMOanpMh0x.png?st=2024-09-19T14%3A41%3A27Z&amp;se=2024-09-19T16%3A41%3A27Z&amp;sp=r&amp;sv=2024-08-04&amp;sr=b&amp;rscd=inline&amp;rsct=image/png&amp;skoid=d505667d-d6c1-4a0a-bac7-5c84a87759f8&amp;sktid=a48cca56-e6da-484e-a814-9c849652bcb3&amp;skt=2024-09-19T02%3A06%3A21Z&amp;ske=2024-09-20T02%3A06%3A21Z&amp;sks=b&amp;skv=2024-08-04&amp;sig=KqOu0uTFgyYOqWBL28Ot09SgLyB8uAlt2MgJCspLlxE%3D"
                         width="400"/>
                    <div class="absolute top-2 left-2 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded">
                        20 % OFF
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-bold">
                        BMW X5 3.0L
                    </h3>
                    <div class="flex items-center mt-2">
       <span class="text-2xl font-bold">
        80.00
       </span>
                        <span class="text-gray-500 line-through ml-2">
        100
       </span>
                        <div class="flex items-center ml-auto">
        <span class="text-yellow-500">
         <i class="fas fa-star">
         </i>
        </span>
                            <span class="ml-1 font-bold">
         5.0
        </span>
                        </div>
                    </div>
                    <button class="bg-blue-900 text-white w-full py-2 mt-4 rounded-lg flex items-center justify-center">
                        <i class="fas fa-calendar-alt mr-2">
                        </i>
                        Reserve
                    </button>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="relative">
                    <img alt="Mercedes-Benz E-Class 2.0L" class="w-full h-48 object-cover" height="300"
                         src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-BVbpSZmLndA7MfHIxv2ahIKS/user-IBY8IaMXtVn7IVIdZeyvjx16/img-2dHlTthehCtZGQyaLd0J3DvM.png?st=2024-09-19T14%3A41%3A26Z&amp;se=2024-09-19T16%3A41%3A26Z&amp;sp=r&amp;sv=2024-08-04&amp;sr=b&amp;rscd=inline&amp;rsct=image/png&amp;skoid=d505667d-d6c1-4a0a-bac7-5c84a87759f8&amp;sktid=a48cca56-e6da-484e-a814-9c849652bcb3&amp;skt=2024-09-19T01%3A57%3A47Z&amp;ske=2024-09-20T01%3A57%3A47Z&amp;sks=b&amp;skv=2024-08-04&amp;sig=Pjo/NSxpIOijpgAmqDoBA17JRe8ZOXMVbnxpU5eR4tY%3D"
                         width="400"/>
                    <div class="absolute top-2 left-2 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded">
                        10 % OFF
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-bold">
                        Mercedes-Benz E-Class 2.0L
                    </h3>
                    <div class="flex items-center mt-2">
       <span class="text-2xl font-bold">
        65.00
       </span>
                        <span class="text-gray-500 line-through ml-2">
        72
       </span>
                        <div class="flex items-center ml-auto">
        <span class="text-yellow-500">
         <i class="fas fa-star">
         </i>
        </span>
                            <span class="ml-1 font-bold">
         5.0
        </span>
                        </div>
                    </div>
                    <button class="bg-blue-900 text-white w-full py-2 mt-4 rounded-lg flex items-center justify-center">
                        <i class="fas fa-calendar-alt mr-2">
                        </i>
                        Reserve
                    </button>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="relative">
                    <img alt="Chevrolet Malibu 1.5L" class="w-full h-48 object-cover" height="300"
                         src="https://oaidalleapiprodscus.blob.core.windows.net/private/org-BVbpSZmLndA7MfHIxv2ahIKS/user-IBY8IaMXtVn7IVIdZeyvjx16/img-UvTlVoh4v9UwjtvU5RbpQdBT.png?st=2024-09-19T14%3A41%3A22Z&amp;se=2024-09-19T16%3A41%3A22Z&amp;sp=r&amp;sv=2024-08-04&amp;sr=b&amp;rscd=inline&amp;rsct=image/png&amp;skoid=d505667d-d6c1-4a0a-bac7-5c84a87759f8&amp;sktid=a48cca56-e6da-484e-a814-9c849652bcb3&amp;skt=2024-09-19T02%3A02%3A05Z&amp;ske=2024-09-20T02%3A02%3A05Z&amp;sks=b&amp;skv=2024-08-04&amp;sig=DwnvEAKm8yBxRM2NKb53GzX12uU%2B8kURuAVG%2BEIq8cg%3D"
                         width="400"/>
                    <div class="absolute top-2 left-2 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded">
                        50 % OFF
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="text-lg font-bold">
                        Chevrolet Malibu 1.5L
                    </h3>
                    <div class="flex items-center mt-2">
       <span class="text-2xl font-bold">
        55.00
       </span>
                        <span class="text-gray-500 line-through ml-2">
        110
       </span>
                        <div class="flex items-center ml-auto">
        <span class="text-yellow-500">
         <i class="fas fa-star">
         </i>
        </span>
                            <span class="ml-1 font-bold">
         5.0
        </span>
                        </div>
                    </div>
                    <button class="bg-blue-900 text-white w-full py-2 mt-4 rounded-lg flex items-center justify-center">
                        <i class="fas fa-calendar-alt mr-2">
                        </i>
                        Reserve
                    </button>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>
@endsection
