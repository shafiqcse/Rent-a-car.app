@extends('cars.app')
@section('content')
    <div class="container mx-auto py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl">Cars List</h1>
            <div>
                <a href="{{ route('cars.create') }}" class="bg-blue-500 text-white py-2 px-4 rounded mr-2">Add Car</a>
                <a href="{{ route('admin.dashboard') }}" class="bg-blue-500 text-white py-2 px-4 rounded">Dashboard</a>
            </div>
        </div>

        @if(session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-4">{{ session('success') }}</div>
        @endif
        <table class="min-w-full bg-white rounded-lg shadow">
            <thead>
            <tr class="bg-gray-200 text-left">
                <th class="py-2 px-4">ID</th>
                <th class="py-2 px-4">Name</th>
                <th class="py-2 px-4">Brand</th>
                <th class="py-2 px-4">Model</th>
                <th class="py-2 px-4">Year</th>
                <th class="py-2 px-4">Car Type</th>
                <th class="py-2 px-4">Daily Rent Price</th>
                <th class="py-2 px-4">Availability</th>
                <th class="py-2 px-4">Image</th>
                <th class="py-2 px-4">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cars as $car)
                <tr>
                    <td class="border py-2 px-4">{{ $car->id }}</td>
                    <td class="border py-2 px-4">{{ $car->name }}</td>
                    <td class="border py-2 px-4">{{ $car->brand }}</td>
                    <td class="border py-2 px-4">{{ $car->model }}</td>
                    <td class="border py-2 px-4">{{ $car->year }}</td>
                    <td class="border py-2 px-4">{{ $car->car_type }}</td>
                    <td class="border py-2 px-4">{{ $car->daily_rent_price }}</td>
                    <td class="border py-2 px-4">{{ $car->availability }}</td>
                    <td class="border py-2 px-4">{{ $car->image }}</td>
                    <td class="border py-2 px-4">
                        <button class="py-1 px-3 mx-1 btn bg-green-600">
                            <a href="{{ route('cars.edit', $car->id) }}" class="text-gray-50">Edit</a>
                        </button>
                        <button class="py-1 px-3 mx-1 btn bg-green-600">
                            <a href="{{ route('cars.show', $car->id) }}" class="text-gray-50">Show</a>
                        </button>
                        <form action="{{ route('cars.destroy', $car->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="py-1 px-3 mx-1 btn bg-red-600 text-gray-50 ml-2">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
