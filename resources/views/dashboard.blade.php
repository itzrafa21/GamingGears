<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - GamingGears</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white min-h-screen">
    <!-- Header -->
    <header class="bg-gray-800 p-4">
        <div class="max-w-4xl mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold text-blue-400">GamingGears</h1>
            <div class="flex items-center space-x-4">
                <span class="text-gray-300">Welcome, {{ Auth::user()->name }}!</span>
                <form method="POST" action="/logout" class="inline">
                    @csrf
                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded">Logout</button>
                </form>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-4xl mx-auto p-8">
        <div class="text-center mb-8">
            <h2 class="text-4xl font-bold text-blue-400 mb-4">Dashboard</h2>
            <p class="text-xl text-gray-300">Welcome to your GamingGears account!</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-gray-800 p-6 rounded-lg">
                <h3 class="text-xl font-semibold text-white mb-2">Profile</h3>
                <p class="text-gray-400 mb-4">Manage your account settings</p>
                <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Edit Profile</button>
            </div>

            <div class="bg-gray-800 p-6 rounded-lg">
                <h3 class="text-xl font-semibold text-white mb-2">Orders</h3>
                <p class="text-gray-400 mb-4">View your order history</p>
                <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">View Orders</button>
            </div>

            <div class="bg-gray-800 p-6 rounded-lg">
                <h3 class="text-xl font-semibold text-white mb-2">Wishlist</h3>
                <p class="text-gray-400 mb-4">Your saved items</p>
                <button class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded">View Wishlist</button>
            </div>
        </div>
    </main>
</body>
</html>
