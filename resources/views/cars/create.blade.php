@extends('cars.app')

<div class="flex justify-center min-h-screen items-center">
    <div class="max-w-lg w-full bg-white shadow-md rounded-lg p-6">
        <h1 class="text-2xl font-bold mb-6 text-center">CREATE NEW CAR</h1>

        <form action="{{ route('cars.store') }}" method="post" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
                <input type="text" id="name" name="name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm p-2">
            </div>

            <div>
                <label for="brand" class="block text-sm font-medium text-gray-700">Brand:</label>
                <input type="text" id="brand" name="brand" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm p-2">
            </div>

            <div>
                <label for="model" class="block text-sm font-medium text-gray-700">Model:</label>
                <input type="text" id="model" name="model" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm p-2">
            </div>

            <div>
                <label for="year" class="block text-sm font-medium text-gray-700">Year:</label>
                <input type="number" id="year" name="year" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm p-2">
            </div>

            <div>
                <label for="car_type" class="block text-sm font-medium text-gray-700">Car Type:</label>
                <input type="text" id="car_type" name="car_type" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm p-2">
            </div>

            <div>
                <label for="daily_rent_price" class="block text-sm font-medium text-gray-700">Daily Rent Price:</label>
                <input type="number" id="daily_rent_price" name="daily_rent_price" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm p-2">
            </div>

            <div class="flex items-center">
                <label for="availability" class="ml-2 block text-sm font-medium text-gray-700 mr-2">Availability</label>
                <input type="checkbox" id="availability" name="availability" class="h-4 w-4 text-indigo-600 border-gray-300 rounded">
            </div>

            <div>
                <label for="image" class="block text-sm font-medium text-gray-700">Image:</label>
                <input type="file" id="image" name="image" class="mt-1 block w-full text-sm text-gray-500 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <div>
                <button type="submit" class="inline-flex items-center w-full justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    CREATE
                </button>
            </div>
        </form>
    </div>
</div>

