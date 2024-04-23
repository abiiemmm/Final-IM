<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <!-- Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- DaisyUI CSS -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.3.9/dist/full.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-6">
    <div class="bg-white rounded-lg shadow-lg p-6">
        <h1 class="text-2xl font-semibold mb-4">User Profile</h1>
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
            <p id="name" class="mt-1 text-sm text-gray-900">{{ $user->name }}</p>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
            <p id="email" class="mt-1 text-sm text-gray-900">{{ $user->email }}</p>
        </div>
        <div class="mb-4">
            <label for="phone" class="block text-sm font-medium text-gray-700">Phone:</label>
            <div class="flex items-center">
                <p id="phone" class="mt-1 text-sm text-gray-900">{{ $user->phone }}</p>
                <button id="editButton" class="ml-2 text-blue-500 hover:text-blue-700">Edit</button>
            </div>
        </div>
        <div class="mb-4">
            <label for="address" class="block text-sm font-medium text-gray-700">Address:</label>
            <p id="address" class="mt-1 text-sm text-gray-900">{{ $user->address }}</p>
        </div>
    </div>

    <!-- JavaScript Section -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script>
        // JavaScript untuk menangani tombol edit
        document.getElementById("editButton").addEventListener("click", function() {
            // Redirect user to edit page or show edit form using JavaScript
            // For example:
            window.location.href = "/edit-profile";
        });
    </script>
</body>
</html>
