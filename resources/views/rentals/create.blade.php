<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white flex items-center justify-center h-screen">
<div class="w-full max-w-lg">
    <h1 class="text-2xl font-semibold mb-6">ADD RENTAL</h1>

    <!-- Rental create form -->
    <form action="{{ route('rentals.store') }}" method="POST" class="space-y-4">
        @csrf

        <!-- Select Car -->
        <!-- Show custom error message for existing booking conflicts -->
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
                <strong class="font-bold">Error!</strong>
                <span class="block sm:inline">{{ $errors->first() }}</span>
            </div>
        @endif
        <div>
            <label class="block text-gray-700">Car Name</label>
            <select name="car_id" id="car_id" required class="w-full border border-gray-300 p-2 rounded @error('car_id') border-red-500 @enderror" onchange="calculateTotalCost()">
                <option value="">-- Choose Car --</option>
                @foreach($cars as $car)
                    <option value="{{ $car->id }}" data-daily-rate="{{ $car->daily_rate }}" {{ old('car_id') == $car->id ? 'selected' : '' }}>{{ $car->name }}</option>
                @endforeach
            </select>
            <!-- Show validation error message for car_id -->
            @error('car_id')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Start Date -->
        <div>
            <label class="block text-gray-700">Start Date</label>
            <input type="date" name="start_date" id="start_date" value="{{ old('start_date') }}" required class="w-full border border-gray-300 p-2 rounded @error('start_date') border-red-500 @enderror" onchange="calculateTotalCost()">
            <!-- Show error message for start_date -->
            @error('start_date')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- End Date -->
        <div>
            <label class="block text-gray-700">End Date</label>
            <input type="date" name="end_date" id="end_date" value="{{ old('end_date') }}" required class="w-full border border-gray-300 p-2 rounded @error('end_date') border-red-500 @enderror" onchange="calculateTotalCost()">
            <!-- Show error message for end_date -->
            @error('end_date')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Status -->
        <div>
{{--            <label class="block text-gray-700">Status</label>--}}
{{--            <select name="status" required class="w-full border border-gray-300 p-2 rounded @error('status') border-red-500 @enderror">--}}
{{--                <option value="">-- Choose Status --</option>--}}
{{--                <option value="Pending" {{ old('status') == 'Pending' ? 'selected' : '' }}>Pending</option>--}}
{{--                <option value="Confirmed" {{ old('status') == 'Confirmed' ? 'selected' : '' }}>Confirmed</option>--}}
{{--                <option value="Cancelled" {{ old('status') == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>--}}
{{--                <option value="Ended" {{ old('status') == 'Ended' ? 'selected' : '' }}>Ended</option>--}}
{{--            </select>--}}
            <!-- Show error message for status -->
            @error('status')
            <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit" class="bg-orange-500 text-gray-800 hover:text-white font-medium rounded-md px-5 py-3">ADD RENTAL</button>
            <a href="{{ route('dashboard') }}" class="bg-orange-500 text-gray-800 hover:text-white font-medium rounded-md px-5 py-3">DASHBOARD</a>
        </div>
    </form>

</div>

<script>
    function calculateTotalCost() {
        // Get selected car's daily rate
        const carSelect = document.getElementById('car_id');
        const selectedCar = carSelect.options[carSelect.selectedIndex];
        const dailyRate = selectedCar.getAttribute('data-daily-rate');

        // Get the start and end dates
        const startDate = document.getElementById('start_date').value;
        const endDate = document.getElementById('end_date').value;

        // If all fields are selected, calculate the total cost
        if (dailyRate && startDate && endDate) {
            const start = new Date(startDate);
            const end = new Date(endDate);

            // Calculate the difference in days
            const rentalDays = Math.ceil((end - start) / (1000 * 60 * 60 * 24)) + 1; // Including the last day

            // Calculate total cost
            const totalCost = rentalDays * dailyRate;

            // Set the total cost in the input field
            document.getElementById('total_cost').value = totalCost.toFixed(2);
        } else {
            // Clear the total cost if any field is missing
            document.getElementById('total_cost').value = '';
        }
    }
</script>
</body>
</html>

