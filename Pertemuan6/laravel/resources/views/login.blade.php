<x-layout>
    <x-slot:title>
        Login
    </x-slot:title>
    <x-slot:content>
        <form action="/login" method="POST">
            <table>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Email :</td>
                    <td><input type="email" name="email" id="email"></td>
                </tr>
                <tr>
                    <td>Password :</td>
                    <td><input type="password" name="password" id="password"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button type="submit" class="text-black bg-brand box-border border hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Login</button>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </td>
                </tr>
            </table>
        </form>
    </x-slot:content>
</x-layout>