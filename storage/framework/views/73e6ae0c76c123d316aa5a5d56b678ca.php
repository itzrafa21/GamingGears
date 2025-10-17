<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - GamingGears</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white min-h-screen flex items-center justify-center">
    <div class="max-w-md w-full mx-4">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-blue-400 mb-2">GamingGears</h1>
            <h2 class="text-xl text-gray-300">Create your account</h2>
        </div>

        <!-- Registration Form -->
        <div class="bg-gray-800 p-8 rounded-lg shadow-lg">
            <form method="POST" action="/register">
                <?php echo csrf_field(); ?>
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Full Name</label>
                    <input type="text" id="name" name="name" required 
                           class="w-full px-3 py-2 bg-gray-700 border border-gray-600 rounded-md text-white focus:outline-none focus:border-blue-500"
                           placeholder="Enter your full name">
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Email</label>
                    <input type="email" id="email" name="email" required 
                           class="w-full px-3 py-2 bg-gray-700 border border-gray-600 rounded-md text-white focus:outline-none focus:border-blue-500"
                           placeholder="Enter your email">
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-300 mb-2">Password</label>
                    <input type="password" id="password" name="password" required 
                           class="w-full px-3 py-2 bg-gray-700 border border-gray-600 rounded-md text-white focus:outline-none focus:border-blue-500"
                           placeholder="Create a password">
                </div>

                <div class="mb-6">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-300 mb-2">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required 
                           class="w-full px-3 py-2 bg-gray-700 border border-gray-600 rounded-md text-white focus:outline-none focus:border-blue-500"
                           placeholder="Confirm your password">
                </div>

                <div class="mb-6">
                    <label class="flex items-center">
                        <input type="checkbox" name="terms" required class="rounded border-gray-600 bg-gray-700 text-blue-600 focus:ring-blue-500">
                        <span class="ml-2 text-sm text-gray-300">I agree to the <a href="#" class="text-blue-400 hover:text-blue-300">Terms of Service</a> and <a href="#" class="text-blue-400 hover:text-blue-300">Privacy Policy</a></span>
                    </label>
                </div>

                <button type="submit" 
                        class="w-full bg-green-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-md transition duration-300">
                    Create Account
                </button>
            </form>

            <!-- Login Link -->
            <div class="mt-6 text-center">
                <p class="text-gray-400">Already have an account? 
                    <a href="/login" class="text-blue-400 hover:text-blue-300 font-medium">Sign in here</a>
                </p>
            </div>
        </div>

        <!-- Back to Home -->
        <div class="text-center mt-6">
            <a href="/" class="text-gray-400 hover:text-white">← Back to Home</a>
        </div>
    </div>
</body>
</html>
<?php /**PATH C:\php\phpsite\GamingGears\resources\views/auth/register.blade.php ENDPATH**/ ?>