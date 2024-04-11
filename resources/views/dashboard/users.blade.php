<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Tab</title>
    <!-- Include the Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Include the Daisy UI CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.14.0/dist/full.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-4">
    <div class="max-w-screen-lg mx-auto">
        <div class="border rounded-lg overflow-hidden">
            <!-- Tab buttons -->
            <div class="flex bg-gray-200">
                <button class="w-full py-2 px-4 text-gray-600 focus:outline-none focus:text-gray-900 border-b-2 border-transparent hover:border-gray-300">Profile</button>
                <button class="w-full py-2 px-4 text-gray-600 focus:outline-none focus:text-gray-900 border-b-2 border-transparent hover:border-gray-300">Settings</button>
                <button class="w-full py-2 px-4 text-gray-600 focus:outline-none focus:text-gray-900 border-b-2 border-transparent hover:border-gray-300">Security</button>
            </div>
            <!-- Tab contents -->
            <div class="p-4">
                <!-- Profile Tab Content -->
                <div class="profile-tab hidden">
                    <h2 class="text-xl font-semibold mb-4">Profile Information</h2>
                    <p>Content for Profile Tab goes here...</p>
                </div>
                <!-- Settings Tab Content -->
                <div class="settings-tab hidden">
                    <h2 class="text-xl font-semibold mb-4">Settings</h2>
                    <p>Content for Settings Tab goes here...</p>
                </div>
                <!-- Security Tab Content -->
                <div class="security-tab hidden">
                    <h2 class="text-xl font-semibold mb-4">Security Settings</h2>
                    <p>Content for Security Tab goes here...</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
