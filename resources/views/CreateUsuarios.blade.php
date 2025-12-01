<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Nuevo usuario</title>
</head>
<body>
    <div class="min-h-screen bg-gray-900 py-10 px-4 sm:px-6 lg:px-8 flex items-center justify-center">

    <div class="max-w-4xl w-full bg-gray-800 p-8 rounded-xl shadow-2xl border border-gray-700">

        <h2 class="text-2xl font-bold mb-6 text-white border-b border-gray-600 pb-2">
            Registrar Nuevo Usuario
        </h2>

        <form action="{{ route('usuarios.store') }}" method="POST">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                <div class="mb-4">
                    <label for="nombre" class="block text-gray-300 text-sm font-bold mb-2">Nombre:</label>
                    <input type="text"
                           name="nombre"
                           id="nombre"
                           class="w-full px-3 py-2 bg-gray-700 text-gray-100 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent placeholder-gray-400"
                           placeholder="Ej. Juan"
                           required>
                </div>

                <div class="mb-4">
                    <label for="apellidos" class="block text-gray-300 text-sm font-bold mb-2">Apellidos:</label>
                    <input type="text"
                           name="apellidos"
                           id="apellidos"
                           class="w-full px-3 py-2 bg-gray-700 text-gray-100 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent placeholder-gray-400"
                           placeholder="Ej. Pérez López"
                           required>
                </div>

                <div class="mb-4">
                    <label for="correo" class="block text-gray-300 text-sm font-bold mb-2">Correo Electrónico:</label>
                    <input type="email"
                           name="correo"
                           id="correo"
                           class="w-full px-3 py-2 bg-gray-700 text-gray-100 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent placeholder-gray-400"
                           placeholder="juan@ejemplo.com"
                           required>
                </div>

                <div class="mb-4">
                    <label for="telefono" class="block text-gray-300 text-sm font-bold mb-2">Teléfono:</label>
                    <input type="tel"
                           name="telefono"
                           id="telefono"
                           class="w-full px-3 py-2 bg-gray-700 text-gray-100 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent placeholder-gray-400"
                           placeholder="55 1234 5678"
                           required maxlength="10">
                </div>

                <div class="mb-4">
                    <label for="CURP" class="block text-gray-300 text-sm font-bold mb-2">CURP:</label>
                    <input type="text"
                           name="CURP"
                           id="CURP"
                           class="w-full px-3 py-2 bg-gray-700 text-gray-100 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent uppercase placeholder-gray-400"
                           placeholder="AAAA000000H..."
                           required" maxlength="18">
                </div>

                <div class="mb-4">
                    <label for="username" class="block text-gray-300 text-sm font-bold mb-2">Usuario (Username):</label>
                    <input type="text"
                           name="username"
                           id="username"
                           class="w-full px-3 py-2 bg-gray-700 text-gray-100 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent placeholder-gray-400"
                           placeholder="juanperez23"
                           required>
                </div>

            </div>
            <div class="mt-8 flex justify-end gap-4">

                <a href="{{ route('usuarios.index') }}"
                   class="bg-gray-600 hover:bg-gray-500 text-white font-bold py-2 px-6 rounded-lg transition duration-300 flex items-center">
                    Cancelar
                </a>

                <button type="submit"
                        class="bg-blue-600 hover:bg-blue-500 text-white font-bold py-2 px-6 rounded-lg transition duration-300 shadow-md">
                    Guardar Usuario
                </button>

            </div>

        </form>
    </div>
</div>
</body>
</html>
