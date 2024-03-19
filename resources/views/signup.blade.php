<x-layout>
<div class="grid place-content-center h-screen">
    <h1 class="text-green-700 flex justify-center text-5xl uppercase font-semibold tracking-wide font-mono">Sing Up</h1>
    <form action="/register" method="POST" class="flex flex-col justify-center my-12">
        @csrf
            <x-input titulo="Name" type="text" nombre="nombre"/>

            <x-input titulo="Email" type="text" nombre="email"/>

            <x-input titulo="Password" type="password" nombre="password"/>

            <x-input titulo="Birthday" type="date" nombre="birthday"/>
        <button class="font-semibold font-serif px-5 py-2 rounded-2xl mt-10 border border-emerald-700 bg-emerald-700" type="submit">Submit</button>
    </form>
</div>
</x-layout>
