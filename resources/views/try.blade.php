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
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

     @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
     @endif


    <!-- Register Form -->
    <form action="{{ route('login.post') }}" method="POST" class="flex justify-center items-center pt-10">
        @csrf
        <div class="relative flex flex-col px-12 py-12 bg-blue-200 bg-opacity-60 rounded-lg shadow-lg">
            <div class="absolute inset-0 backdrop-blur-md -z-10"></div>
            <p class="text-center text-lg font-bold text-white mb-6">REGISTER FORM</p>

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



            <div class="flex flex-col pt-4 ">
                <button type="submit" class="bg-blue-400 font-normal text-white px-4 py-2 rounded-md hover:bg-red-500 hover:text-blue-800 ">
                    LOGIN
                </button>
                <a href="{{ route('dashboard') }}" class="text-sm font-normal text-white italic hover:text-red-500">Sudah punya akun?</a>

            </div>

            <!-- Submit Button and Link -->
            <div class="flex flex-col items-center gap-2 mt-4">

        </div>
        </div>
    </form>
</body>

</html>
