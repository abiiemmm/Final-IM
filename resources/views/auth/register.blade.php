<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Register</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="relative flex flex-col justify-center h-screen overflow-hidden">
        <div class="w-full p-6 m-auto bg-white rounded-md shadow-md ring-2 ring-gray-800/50 lg:max-w-xl">
            <h1 class="text-3xl font-semibold text-center text-gray-700">Register</h1>
            <form action="{{ route('register.save') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="label">
                        <span class="text-base label-text">Name</span>
                    </label>
                    <input name="name" type="text" placeholder="Name" class="w-full input input-bordered @error('name')is-invalid @enderror" />
                    @error('name')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label class="label">
                        <span class="text-base label-text">Email</span>
                    </label>
                    <input name="email" type="email" placeholder="Email Address" class="w-full input input-bordered" />
                    @error('email')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label class="label">
                        <span class="text-base label-text">Password</span>
                    </label>
                    <input name="password" type="password" placeholder="Enter Password" class="w-full input input-bordered" />
                    @error('password')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label class="label">
                        <span class="text-base label-text">Confirm Password</span>
                    </label>
                    <input name="password_confirmation" type="password" placeholder="Confirm Password" class="w-full input input-bordered" />
                    @error('password_confirmation')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label class="label">
                        <span class="text-base label-text">Address</span>
                    </label>
                    <input name="address" type="text" placeholder="Address" class="w-full input input-bordered" />
                    @error('address')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label class="label">
                        <span class="text-base label-text">Phone Number</span>
                    </label>
                    <input name="phone" type="text" placeholder="Phone Number" class="w-full input input-bordered" />
                    @error('phone')
                    <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="btn btn-block">Register Account</button>
                </div>
                <span>Already have an account ?
                    <a href="{{ route('backlogin') }}" class="text-blue-600 hover:text-blue-800 hover:underline">Login</a></span>
            </form>
        </div>
    </div>
</body>
</html>