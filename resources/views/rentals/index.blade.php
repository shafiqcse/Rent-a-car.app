<!DOCTYPE html>
<html>
<head>
    <title>Rentals</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="bg-gray-100 p-8">
<div class="container mx-auto max-w-6xl">
    <h1 class="text-3xl font-bold mb-6 text-center">Rentals</h1>
    <div class="flex justify-center mb-4">
        <a href="{{ route('rentals.create') }}" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Add Rental</a>
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
                    <td class="py-2 px-4 border-b">{{ $rental->total_cost }}</td>
                    <td class="py-2 px-4 border-b">{{ $rental->status }}</td>
                    <td class="py-2 px-4 border-b">
                        <a href="{{ route('rentals.edit', $rental->id) }}" class="px-2 py-1 bg-yellow-200 text-yellow-700 rounded hover:bg-yellow-300">Edit</a>
                        <form action="{{ route('rentals.destroy', $rental->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-2 py-1 bg-red-200 text-red-700 rounded hover:bg-red-300">Delete</button>
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
