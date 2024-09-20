@extends('cars.app')

@section('content')
    <div class="container mx-auto py-8">
        <div class="flex justify-between mb-6">
            <h1 class="text-3xl">{{ $car->name }} - Details</h1>
            <a href="{{ route('cars.index') }}" class="bg-blue-500 text-white py-2 px-4 rounded">Back to List</a>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex mb-6">
                <div class="w-1/3">
                    <img src="{{ asset('storage/' . $car->image) }}" alt="{{ $car->name }}" class="rounded-lg">
                </div>
                <div class="w-2/3 pl-6">
                    <h2 class="text-2xl font-bold mb-4">{{ $car->name }}</h2>
                    <p class="text-gray-700 mb-2"><strong>Brand:</strong> {{ $car->brand }}</p>
                    <p class="text-gray-700 mb-2"><strong>Model:</strong> {{ $car->model }}</p>
                    <p class="text-gray-700 mb-2"><strong>Year:</strong> {{ $car->year }}</p>
                    <p class="text-gray-700 mb-2"><strong>Car Type:</strong> {{ $car->car_type }}</p>
                    <p class="text-gray-700 mb-2"><strong>Daily Rent Price:</strong> ${{ $car->daily_rent_price }}</p>
                    <p class="text-gray-700 mb-2"><strong>Availability:</strong> {{ $car->availability ? 'Available' : 'Not Available' }}</p>
                </div>
            </div>

            <div class="mt-6">
                <a href="{{ route('cars.edit', $car->id) }}" class="bg-yellow-500 text-white py-2 px-4 rounded">Edit</a>
                <form action="{{ route('cars.destroy', $car->id) }}" method="POST" class="inline-block ml-2">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
