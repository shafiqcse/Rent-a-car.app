
@extends('cars.app')
@section('content')
    <div class="container mx-auto py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">CARS LIST</h1>
            <div>
                <a href="{{ route('cars.create') }}" class="bg-orange-500 text-gray-800 hover:text-white font-medium rounded-md px-5 py-3">ADD CAR</a>
                <a href="{{ route('admin.dashboard') }}" class="bg-orange-500 text-gray-800 hover:text-white font-medium rounded-md px-5 py-3"  >DASHBOARD</a>
            </div>
        </div>

        @if(session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-4">{{ session('success') }}</div>
        @endif

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg shadow-md">
                <thead>
                <tr class="bg-gray-200">
                    <th class="py-3 px-4">ID</th>
                    <th class="py-3 px-4">Name</th>
                    <th class="py-3 px-4">Brand</th>
                    <th class="py-3 px-4">Model</th>
                    <th class="py-3 px-4">Year</th>
                    <th class="py-3 px-4">Car Type</th>
                    <th class="py-3 px-4">Daily Rent Price</th>
                    <th class="py-3 px-4">Availability</th>
                    <th class="py-3 px-4">Image</th>
                    <th class="py-3 px-4">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cars as $car)
                    <tr class="hover:bg-gray-50">
                        <td class="border px-4 py-2">{{ $car->id }}</td>
                        <td class="border px-4 py-2">{{ $car->name }}</td>
                        <td class="border px-4 py-2">{{ $car->brand }}</td>
                        <td class="border px-4 py-2">{{ $car->model }}</td>
                        <td class="border px-4 py-2">{{ $car->year }}</td>
                        <td class="border px-4 py-2">{{ $car->car_type }}</td>
                        <td class="border px-4 py-2">${{ number_format($car->daily_rent_price, 2) }}</td>
                        <td class="border px-4 py-2">{{ $car->availability ? 'Available' : 'Not Available' }}</td>
                        <td class="border px-4 py-2">
                            <img class="h-16 w-50 object-cover" alt="{{ $car->name }}" src="{{ asset('storage/' . $car->image) }}">
{{--                            <img src="{{ $car->image }}" alt="{{ $car->name }}" class="h-16 w-24 object-cover">--}}
                        </td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('cars.edit', $car->id) }}" class="bg-orange-500 text-gray-800 hover:text-white font-medium rounded-md px-3 py-1.5">Edit</a>
                            <a href="{{ route('cars.show', $car->id) }}" class="bg-orange-500 text-gray-800 hover:text-white font-medium rounded-md px-3 py-1.5">Show</a>
                            <form action="{{ route('cars.destroy', $car->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-1 px-3 rounded">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

