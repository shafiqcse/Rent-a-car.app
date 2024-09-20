<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Rental</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
<div class="w-full max-w-lg bg-white p-8 rounded-lg shadow-lg">
    <h1 class="text-2xl font-semibold mb-6 text-center">Edit Rental</h1>

    <!-- Display validation errors -->
    @if ($errors->any())
        <div class="mb-4 p-4 bg-red-100 text-red-700 border border-red-300 rounded-lg">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('rentals.update', $rental->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="user_id" class="block text-gray-700">User:</label>
            <select name="user_id" id="user_id" required class="w-full border border-gray-300 p-2 rounded">
                @foreach($users as $user)
                    <option value="{{ $user->id }}" {{ $user->id == $rental->user_id ? 'selected' : '' }}>
                        {{ $user->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="car_id" class="block text-gray-700">Car:</label>
            <select name="car_id" id="car_id" required class="w-full border border-gray-300 p-2 rounded">
                @foreach($cars as $car)
                    <option value="{{ $car->id }}" {{ $car->id == $rental->car_id ? 'selected' : '' }}>
                        {{ $car->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="start_date" class="block text-gray-700">Start Date:</label>
            <input type="date" name="start_date" id="start_date" value="{{ $rental->start_date }}" required class="w-full border border-gray-300 p-2 rounded">
        </div>

        <div>
            <label for="end_date" class="block text-gray-700">End Date:</label>
            <input type="date" name="end_date" id="end_date" value="{{ $rental->end_date }}" required class="w-full border border-gray-300 p-2 rounded">
        </div>

        <div>
            <label for="status" class="block text-gray-700">Status:</label>
            <select name="status" id="status" required class="w-full border border-gray-300 p-2 rounded">
                <option value="">-- Choose Status --</option>
                <option value="Pending" {{ $rental->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                <option value="Confirmed" {{ $rental->status == 'Confirmed' ? 'selected' : '' }}>Confirmed</option>
                <option value="Cancelled" {{ $rental->status == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                <option value="Completed" {{ $rental->status == 'Completed' ? 'selected' : '' }}>Completed</option>
            </select>
        </div>

        <div>
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Update Rental</button>
        </div>
    </form>
</div>
</body>
</html>
