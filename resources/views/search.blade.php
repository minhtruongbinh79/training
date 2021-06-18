<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Search</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="m-auto w-4/8 py-10">
        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Search User
            </h1>
        </div>
    </div>

    <div class="flex justify-center pt-2">
        <form action="/search" method="GET">
            @csrf
            <div class="block">
                <input 
                    type="text"
                    class="block shadow-5xl mb-10 p-2 h-10 w-80 placeholder-gray-400"
                    name="id"
                    placeholder="ID...">

                <input 
                    type="textarea"
                    class="block shadow-5xl mb-10 p-2 h-10 w-80 placeholder-gray-400 text-lg"
                    name="phone"
                    placeholder="Phone...">

                <input 
                    type="textarea"
                    class="block shadow-5xl mb-10 p-2 h-10 w-80 placeholder-gray-400 text-lg"
                    name="role"
                    placeholder="Role...">
                <button type="search" class="bg-blue-500 hover:bg-blue-300 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">
                    Submit
                </button>
            </div>
        </form>
    </div>
    <div class="flex justify-center">
        <table class="table-auto">
            <tr class="bg-blue-100">
                <th class="w-50 border-4 border-gray-500">
                    ID
                </th>
                <th class="w-60 border-4 border-gray-500">
                    First Name
                </th>
                <th class="w-60 border-4 border-gray-500">
                    Last Name
                </th>
                <th class="w-80 border-4 border-gray-500">
                    Phone
                </th>
                <th class="w-80 border-4 border-gray-500">
                    Role
                </th>
            </tr>

            @if ($users)
                @foreach ($users as $user)
                    <tr class="text-center">
                        <td class="border-4 border-gray-500">
                            {{ $user->id }}
                        </td>
                        <td class="border-4 border-gray-500">
                            {{ $user->first_name }}
                        </td>
                        <td class="border-4 border-gray-500">
                            {{ $user->last_name }}
                        </td>
                        <td class="border-4 border-gray-500">
                            {{ $user->phone->number }}
                        </td>
                        <td class="border-4 border-gray-500">
                            @foreach ($user->roles as $role)
                                <p>{{ $role->name }}</p>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            @endif
        </table>
    </div>
</body>
</html>