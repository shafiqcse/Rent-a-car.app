<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rentals</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="bg-gray-100 p-8">
<div class="container mx-auto max-w-6xl">
    <h1 class="text-3xl font-bold mb-6 text-center">RENTALS</h1>
    <div class="flex justify-end mb-4">
        <a href="{{ route('rentals.create') }}" class="bg-orange-500 text-gray-800 hover:text-white font-medium rounded-md px-5 py-3 mr-3">ADD RENTAL</a>
        <a href="{{ route('dashboard') }}" class="bg-orange-500 text-gray-800 hover:text-white font-medium rounded-md px-5 py-3 ">DASHBOARD</a>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
            <thead class="bg-gray-200">
            <tr>
                <th class="py-3 px-4 border-b text-left">Rental ID</th>
                <th class="py-3 px-4 border-b text-left">Customer Name</th>
                <th class="py-3 px-4 border-b text-left">Car Details (Name, Brand)</th>
                <th class="py-3 px-4 border-b text-left">Start Date</th>
                <th class="py-3 px-4 border-b text-left">End Date</th>
                <th class="py-3 px-4 border-b text-left">Total Cost</th>
                <th class="py-3 px-4 border-b text-left">Status</th>
                <th class="py-3 px-4 border-b text-left">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($rentals as $rental)
                <tr class="hover:bg-gray-50">
                    <td class="py-2 px-4 border-b">{{ $rental->id }}</td>
                    <td class="py-2 px-4 border-b">{{ $rental->user->name }}</td>
                    <td class="py-2 px-4 border-b">{{ $rental->car->name }} ({{ $rental->car->brand }})</td>
                    <td class="py-2 px-4 border-b">{{ $rental->start_date }}</td>
                    <td class="py-2 px-4 border-b">{{ $rental->end_date }}</td>
                    <td class="py-2 px-4 border-b">${{ number_format($rental->total_cost, 2) }}</td>
                    <td class="py-2 px-4 border-b">{{ $rental->status }}</td>
                    <td class="py-2 px-4 border-b">
                        <a href="{{ route('rentals.edit', $rental->id) }}" class="bg-orange-500 text-gray-800 hover:text-white font-medium rounded-md px-3 py-1.5">Edit</a>
{{--                        <a href="{{ route('rentals.edit', $rental->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white py-1 px-3 rounded">Show</a>--}}
                        <form action="{{ route('rentals.destroy', $rental->id) }}" method="POST" class="inline-block">
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
</body>
</html>
