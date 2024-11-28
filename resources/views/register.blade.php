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
    <div class="flex items-center justify-end space-x-4 p-4">
            <img src="{{ asset('src/poli.png')}}" alt="logo" class="size-14" />
            <img src="{{ asset('src/abd.png')}}" alt="logo" class="w-24 h-auto" />

    </div>


    <!-- Register Form -->
    <form action="{{ route('register') }}" method="POST" class="flex justify-center items-center pt-10">
        @csrf
        <div class="relative flex flex-col px-12 py-12 bg-blue-200 bg-opacity-60 rounded-lg shadow-lg">
            <div class="absolute inset-0 backdrop-blur-md -z-10"></div>
            <p class="text-center text-2xl font-bold text-white mb-6">REGISTER FORM</p>

            <!-- Name Input -->
            <div class="flex flex-row items-center gap-2 mb-4 pt-4 gap-x-3 ">
            <img src="{{ asset('src/user-pen.png')}}" alt="logo1nama" class="w-10 h-auto" />
                <input

                    name="name"
                    value="{{ old('name') }}"
                    type="text"
                    class="p-2 w-xl border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-300"
                    id="name"
                    placeholder="Nama anda.."
                    required
                />
         
                @error('name')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email Input -->
            <div class="flex flex-row items-center gap-2 mb-4 gap-x-3">
            <img src="{{ asset('src/mail1.png')}}" alt="logo1nama" class="w-10 h-auto" />
                <input
                    name="email"
                    value="{{ old('email') }}"
                    type="email"
                    class="p-2 w-xl border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-300"
                    id="email"
                    placeholder="email anda.."
                    required
                />
               
                @error('email')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Password Input -->
            <div class="flex items-center flex-row gap-2 mb-4 gap-x-3">
            <img src="{{ asset('src/key-round.png')}}" alt="logo2nama" class="w-10 h-auto" />
                <input
                    type="password"
                    name="password"
                    class="p-2 w-xl border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-300"
                    id="password"
                    placeholder="password..."
                    required
                />

                @error('password')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirm Password Input -->
            <div class="flex flex-row  items-center gap-2 gap-x-3 mb-4">
            <img src="{{ asset('src/lock-keyhole.png')}}" alt="logo2nama" class="w-10 h-auto" />
                <input
                    type="password"
                    name="password_confirmation"
                    class="p-2 w-xl border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-300"
                    id="password_confirmation"
                    placeholder="confirm password..."
                    required
                />
 
            </div>


            <div class="flex flex-col pt-4 ">
                <button type="submit" class="bg-blue-400 font-semibold text-white px-4 py-2 rounded-md hover:bg-red-500 ">
                    DAFTAR
                </button>
                <a href="{{ route('login') }}" class="text-sm font-normal text-white italic hover:text-red-500">Sudah punya akun?</a>

            </div>

            <!-- Submit Button and Link -->
            <div class="flex flex-col items-center gap-2 mt-4">

        </div>
        </div>
    </form>
</body>

</html>
