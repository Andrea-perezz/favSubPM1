<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
    <h1>Sing Up</h1>
    <form action="/register" method="POST">
        @csrf
        <div>
            <x-input titulo="Name" type="text" nombre="nombre"/>
        </div>
        <div>
            <x-input titulo="Email" type="text" nombre="email"/>
        </div>
        <div>
            <x-input titulo="Password" type="password" nombre="password"/>
        </div>
        <div>
            <x-input titulo="Birthday" type="date" nombre="birthday"/>
        </div>
        <button type="submit">Submit</button>
    </form>
</div>
