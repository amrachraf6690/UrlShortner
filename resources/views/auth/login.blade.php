<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css">
    <style>
        /* Transitions */
        .transition-all {
            transition-property: all;
            transition-duration: 0.3s;
            transition-timing-function: ease-in-out;
        }

        /* Hover Effects */
        .hover\:scale-105:hover {
            transform: scale(1.05);
        }
        .hover\:bg-green-600:hover {
            background-color: #34D399;
        }
        .hover\:scale-110:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body class="bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 h-screen font-sans flex justify-center items-center">
    <div class="bg-white shadow-md rounded-md p-8 w-96">
        <h2 class="text-3xl font-semibold mb-4 text-center">Login</h2>
        <form>
            <div class="mb-4 relative">
                <input type="text" id="username" name="username" class="w-full border-b-2 border-gray-400 py-2 px-3 focus:outline-none focus:border-blue-500" placeholder="Username">
            </div>
            <div class="mb-6 relative">
                <input type="password" id="password" name="password" class="w-full border-b-2 border-gray-400 py-2 px-3 focus:outline-none focus:border-blue-500" placeholder="Password">
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600 hover:scale-105 hover:bg-green-600">Login</button>
        </form>
        <div class="mt-5 flex justify-center items-center">
            <p class="text-gray-500 mr-2">Login with:</p>
            <a href="#" class="text-gray-500 hover:text-white hover:scale-120 duration-1000 mx-2"><i class='bx bxl-facebook text-3xl'></i></a>
            <a href="#" class="text-gray-500 hover:text-white hover:scale-120 duration-1000 mx-2"><i class='bx bxl-google text-3xl'></i></a>
            <a href="#" class="text-gray-500 hover:text-white hover:scale-120 duration-1000 mx-2"><i class='bx bxl-linkedin text-3xl'></i></a>
            <a href="#" class="text-gray-500 hover:text-white hover:scale-120 duration-1000 mx-2"><i class='bx bxl-github text-3xl'></i></a>
        </div>
        <hr class="my-4">
        <div class="text-center">
            <p class="text-gray-500">Don't have an account?</p>
            <a href="#" class="text-blue-500 hover:underline">Register now</a>
        </div>
    </div>
</body>
</html>
