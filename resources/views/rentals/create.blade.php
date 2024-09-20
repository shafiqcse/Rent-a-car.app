<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white flex items-center justify-center h-screen">
<div class="w-full max-w-lg">
    <h1 class="text-2xl font-semibold mb-6">Add Rental</h1>

    <!-- Rental create form -->
    <form action="{{ route('rentals.store') }}" method="POST" class="space-y-4">
        @csrf

        <!-- Select User -->
        <div>
            <label class="block text-gray-700">Customer</label>
            <select name="user_id" id="user_id" required class="w-full border border-gray-300 p-2 rounded">
                <option value="">-- Choose User --</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Select Car -->
        <div>
            <label class="block text-gray-700">Car</label>
            <select name="car_id" id="car_id" required class="w-full border border-gray-300 p-2 rounded" onchange="calculateTotalCost()">
                <option value="">-- Choose Car --</option>
                @foreach($cars as $car)
                    <option value="{{ $car->id }}" data-daily-rate="{{ $car->daily_rate }}">{{ $car->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Start Date -->
        <div>
            <label class="block text-gray-700">Start Date</label>
            <input type="date" name="start_date" id="start_date" required class="w-full border border-gray-300 p-2 rounded" onchange="calculateTotalCost()">
        </div>

        <!-- End Date -->
        <div>
            <label class="block text-gray-700">End Date</label>
            <input type="date" name="end_date" id="end_date" required class="w-full border border-gray-300 p-2 rounded" onchange="calculateTotalCost()">
        </div>

        <!-- Total Cost (calculated automatically) -->
        <div>
            <label class="block text-gray-700">Total Cost</label>
            <input type="text" id="total_cost" readonly class="w-full border border-gray-300 p-2 rounded bg-gray-100">
        </div>

        <!-- Status -->
        <div>
            <label class="block text-gray-700">Status</label>
            <select name="status" required class="w-full border border-gray-300 p-2 rounded">
                <option value="">-- Choose Status --</option>
                <option value="Pending">Pending</option>
                <option value="Confirmed">Confirmed</option>
                <option value="Cancelled">Cancelled</option>
                <option value="Cancelled">Ended</option>
            </select>
        </div>

        <!-- Submit Button -->
        <div>
            <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Add Rental</button>
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
