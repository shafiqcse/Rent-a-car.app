

@extends('welcome')

@section('content')

    <main>
        <div class="container mx-auto flex flex-col md:flex-row items-center py-20">
            <div class="md:w-1/2 text-center md:text-left">
                <h1 class="text-5xl font-bold text-black">
     <span class="text-orange-500">
      EASY
     </span>
                    AND FAST WAY TO RENT YOUR CAR
                </h1>
                <p class="text-gray-600 mt-4">
                    Whether you're planning a weekend getaway or a cross-country adventure, we've got you covered. With our wide
                    selection of vehicles and
                    convenient booking system, renting a car has never been this effortless.
                </p>
                <div class="mt-8 flex justify-center md:justify-start space-x-4">
                    <button class="bg-orange-500 text-white px-6 py-3 rounded">
                        <a class="text-gray-800 hover:text-white" href="{{ url('/allcars') }}">
                            CARS
                        </a>
                    </button>
                    <button class="border border-orange-500 text-orange-500 px-6 py-3 rounded">
                        <a class="text-gray-800 hover:text-gray-600" href="{{ url('/contact_us') }}">
                            CONTACT US
                        </a>
                    </button>
                </div>
            </div>
            <div class="md:w-1/2 mt-10 md:mt-0">
                <img alt="Blue Range Rover car" height="400" src="{{ asset('storage/images/homecar.png') }}" width="600"/>
            </div>
        </div>
    </main>

@endsection
