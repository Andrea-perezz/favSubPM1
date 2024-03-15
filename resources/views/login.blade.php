<x-layout>
    <!-- An unexamined life is not worth living. - Socrates -->
    <div class="grid place-content-center h-screen">
        <h1 class="text-green-700 text-5xl uppercase flex justify-center">Log In</h1>
        <form action="/login" method="POST" class="flex flex-col justify-center my-12">
            @csrf
            <div class="mt-10 my-2 ">
                <x-input titulo='Email' type='text' nombre="email" />
            </div>
            <div my-2>
                <x-input titulo='Password' type='password' nombre="password" />
            </div>

            <button type="submit" class="bg-green-600 font-semibold px-5 py-2 rounded-2xl mt-10 ">Log In</button>
        </form>
    </div>
</x-layout>
