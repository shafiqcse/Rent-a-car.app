@extends('cars.app')

@section('content')
    <div class="container mx-auto py-8 flex justify-center items-center min-h-screen">
        <div class="w-full max-w-lg bg-white p-6 rounded-lg shadow-md">
            <h1 class="text-3xl mb-6 text-center">{{ isset($car) ? 'EDIT CAR' : 'Add Car' }}</h1>

            <!-- Display validation errors -->
            @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <strong class="font-bold">Whoops!</strong>
                    <span class="block sm:inline">There were some problems with your input.</span>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ isset($car) ? route('cars.update', $car->id) : route('cars.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if(isset($car))
                    @method('PUT')
                @endif

                <div class="mb-4">
                    <label for="name" class="block text-sm">Car Name</label>
                    <input type="text" id="name" name="name" class="w-full p-2 border rounded" value="{{ old('name', $car->name ?? '') }}">
                </div>

                <div class="mb-4">
                    <label for="brand" class="block text-sm">Brand</label>
                    <input type="text" id="brand" name="brand" class="w-full p-2 border rounded" value="{{ old('brand', $car->brand ?? '') }}">
                </div>

                <div class="mb-4">
                    <label for="model" class="block text-sm">Model</label>
                    <input type="text" id="model" name="model" class="w-full p-2 border rounded" value="{{ old('model', $car->model ?? '') }}">
                </div>

                <div class="mb-4">
                    <label for="year" class="block text-sm">Year</label>
                    <input type="number" id="year" name="year" class="w-full p-2 border rounded" value="{{ old('year', $car->year ?? '') }}">
                </div>

                <div class="mb-4">
                    <label for="car_type" class="block text-sm">Car Type</label>
                    <input type="text" id="car_type" name="car_type" class="w-full p-2 border rounded" value="{{ old('car_type', $car->car_type ?? '') }}">
                </div>

                <div class="mb-4">
                    <label for="daily_rent_price" class="block text-sm">Daily Rent Price</label>
                    <input type="number" id="daily_rent_price" name="daily_rent_price" class="w-full p-2 border rounded" value="{{ old('daily_rent_price', $car->daily_rent_price ?? '') }}">
                </div>

                <div class="mb-4">
                    <label for="availability" class="block text-sm">Availability</label>
                    <input type="checkbox" id="availability" name="availability" class="h-4 w-4 text-indigo-600 border-gray-300 rounded" {{ old('availability', $car->availability ?? 0) ? 'checked' : '' }}>
                </div>

                <div class="mb-4">
                    <label for="image" class="block text-sm">Car Image</label>
                    <input type="file" id="image" name="image" class="w-full p-2 border rounded">
                    <!-- Display existing image -->
                    @if(isset($car) && $car->image)
                        <img class="mt-4 w-70 h-32 object-cover" alt="{{ $car->name }}" src="{{ asset('storage/' . $car->image) }}">
{{--                        <img src="{{ asset($car->image) }}" alt="Car Image" class="mt-4 w-32 h-32 object-cover">--}}
                    @endif
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded w-full">
                        {{ isset($car) ? 'UPDATE CAR' : 'Add Car' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
