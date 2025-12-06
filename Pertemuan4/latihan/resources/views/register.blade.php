<x-layout>
    <x-slot:title>
        Register
    </x-slot:title>
    <x-slot:content>
        <div>
            <form action="/register" method="POST">
                @csrf
                Name :
                <input type="text" name="nama" id="nama">
                Email :
                <input type="email" name="email" id="email">
                Password :
                <input type="password" name="password" id="password">
                Confirm Password :
                <input type="password" name="password_confirmation" id="password_confirmation">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit">Submit</button>
            </form>
        </div>
    </x-slot:content>
</x-layout>