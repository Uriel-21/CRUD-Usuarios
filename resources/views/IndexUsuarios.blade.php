<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title> Ver usuarios </title>
</head>
<body>
    <div class="min-h-screen bg-gray-900 py-10 px-4 sm:px-6 lg:px-8">

    <div class="max-w-7xl mx-auto">

        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-bold text-white tracking-tight">
                Lista de Usuarios
            </h2>
            <a href="{{ route('usuarios.create') }}" class="bg-blue-600 hover:bg-blue-500 text-white font-medium py-2 px-4 rounded-lg transition duration-300 flex items-center shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Nuevo Usuario
            </a>
        </div>

        <div class="overflow-x-auto shadow-xl rounded-lg border border-gray-700">
            <table class="min-w-full text-left text-sm whitespace-nowrap">

                <thead class="uppercase tracking-wider border-b border-gray-700 bg-gray-800 text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-4 font-semibold">ID</th>
                        <th scope="col" class="px-6 py-4 font-semibold">Nombre Completo</th>
                        <th scope="col" class="px-6 py-4 font-semibold">Usuario</th>
                        <th scope="col" class="px-6 py-4 font-semibold">Correo</th>
                        <th scope="col" class="px-6 py-4 font-semibold">Teléfono</th>
                        <th scope="col" class="px-6 py-4 font-semibold text-right">Acciones</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-700 bg-gray-800">

                    @forelse($usuarios as $usuario)
                    <tr class="hover:bg-gray-700 transition duration-150 ease-in-out group">

                        <td class="px-6 py-4 text-gray-400 font-medium">
                            #{{ $usuario->id }}
                        </td>

                        <td class="px-6 py-4 text-white font-medium">
                            {{ $usuario->nombre }} {{ $usuario->apellidos }}
                            <div class="text-xs text-gray-500 mt-1 uppercase">{{ $usuario->CURP }}</div>
                        </td>

                        <td class="px-6 py-4">
                            <span class="bg-gray-700 text-blue-400 py-1 px-3 rounded-full text-xs font-bold border border-gray-600">
                                {{ $usuario->username }}
                            </span>
                        </td>

                        <td class="px-6 py-4 text-gray-300">
                            {{ $usuario->correo }}
                        </td>

                        <td class="px-6 py-4 text-gray-300">
                            {{ $usuario->telefono }}
                        </td>

                        <td class="px-6 py-4 text-right">
                            <div class="flex items-center justify-end gap-3">
                                <a href="{{ route('usuarios.edit', $usuario -> id) }}" class="text-blue-400 hover:text-blue-300 font-medium transition duration-300">
                                    Editar
                                </a>

                                <form action="{{ route('usuarios.destroy', $usuario -> id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este usuario?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-400 hover:text-red-300 font-medium transition duration-300">
                                        Eliminar
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="px-6 py-10 text-center text-gray-500">
                            <div class="flex flex-col items-center justify-center">
                                <svg class="w-10 h-10 mb-2 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                                <p>No hay usuarios registrados aún.</p>
                            </div>
                        </td>
                    </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
