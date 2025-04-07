<x-layout>

    <div class="p-6 text-center text-white rounded-t-lg bg-gradient-to-r from-blue-500 to-purple-600">
        <h1 class="text-3xl font-bold">
            Histórico de encomendas
        </h1>
        <p class="mt-4 text-lg">
            Cliente: João da Silva
        </p>
    </div>

    <div class="max-w-full mx-auto mt-8 bg-white rounded-lg shadow-sm">
        <div class="p-6 text-center">
            <h1 class="text-2xl font-semibold text-gray-800">
                Itens enviados
            </h1>
        </div>
        <table class="w-full text-sm text-left">
            <thead>
                <tr class="border-b">
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Código de rastreamento
                    </th>
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Origem
                    </th>
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Destino
                    </th>
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="transition-colors border-b hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="#" class="underline">
                            ABC123456
                        </a>
                    </td>
                    <td class="px-6 py-4">
                        São Paulo
                    </td>
                    <td class="px-6 py-4">
                        Rio de Janeiro
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 py-1 text-white bg-green-500 rounded-full">
                            Entregue
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="max-w-full mx-auto mt-8 bg-white rounded-lg shadow-sm">
        <div class="p-6 text-center">
            <h1 class="text-2xl font-semibold text-gray-800">
                Itens Recebidos
            </h1>
        </div>
        <table class="w-full text-sm text-left">
            <thead>
                <tr class="border-b">
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Código de rastreamento
                    </th>
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Origem
                    </th>
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Destino
                    </th>
                    <th class="px-6 py-4 font-semibold text-gray-900">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="transition-colors border-b hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="#" class="underline">
                            LMN456789
                        </a>
                    </td>
                    <td class="px-6 py-4">
                        Porto Alegre
                    </td>
                    <td class="px-6 py-4">
                        Curitiba
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 py-1 text-white bg-blue-500 rounded-full">
                            Enviado
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</x-layout>