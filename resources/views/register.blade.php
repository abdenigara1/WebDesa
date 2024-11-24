<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-cover bg-no-repeat" style="background-image: url('{{ asset('src/wall.jpg') }}'); font-family: Arial, sans-serif;">
    <!-- Header Section -->
    <div class="flex items-start p-4 justify-between">
        <img src="poli.png" alt="logo" class="w-16 h-auto mx-auto" />
        <img src="XOsX.gif" alt="logo" class="w-16 h-auto mx-auto" />
    </div>

    <!-- Register Form -->
    <form action="{{ route('register') }}" method="POST" class="flex justify-center items-center pt-10">
        @csrf
        <div class="relative flex flex-col px-6 py-8 bg-blue-200 bg-opacity-60 rounded-lg shadow-lg">
            <div class="absolute inset-0 backdrop-blur-md -z-10"></div>
            <p class="text-center text-lg font-bold text-white mb-6">REGISTER FORM</p>

            <!-- Name Input -->
            <div class="flex items-center gap-2 mb-4">
                <input
                    name="name"
                    value="{{ old('name') }}"
                    type="text"
                    class="p-2 w-48 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-300"
                    id="name"
                    placeholder="Nama anda.."
                    required
                />
                @error('name')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email Input -->
            <div class="flex items-center gap-2 mb-4">
                <input
                    name="email"
                    value="{{ old('email') }}"
                    type="email"
                    class="p-2 w-48 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-300"
                    id="email"
                    placeholder="email anda.."
                    required
                />
                @error('email')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password Input -->
            <div class="flex items-center gap-2 mb-4">
                <input
                    type="password"
                    name="password"
                    class="p-2 w-48 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-300"
                    id="password"
                    placeholder="password..."
                    required
                />
                @error('password')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirm Password Input -->
            <div class="flex items-center gap-2 mb-4">
                <input
                    type="password"
                    name="password_confirmation"
                    class="p-2 w-48 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-300"
                    id="password_confirmation"
                    placeholder="confirm password..."
                    required
                />
            </div>

            <!-- Submit Button and Link -->
            <div class="flex flex-col items-center gap-2 mt-4">
            <button type="submit" class="bg-blue-400 text-white px-4 py-2 rounded-md hover:bg-red-500">
                DAFTAR
            </button>
            <a href="{{ route('login') }}" class="text-sm text-white italic hover:text-red-500">Sudah punya akun?</a>
        </div>
        </div>
    </form>
</body>
</html>
