<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ver ordenador
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <dl class="max-w-md text-gray-900 divide-y divide-gray-200 dark:text-white dark:divide-gray-700">
                        <div class="flex flex-col py-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">
                                ID
                            </dt>
                            <dd class="text-lg font-semibold">
                                {{ $ordenador->id }}
                            </dd>
                        </div>
                        <div class="flex flex-col pb-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">
                                Marca
                            </dt>
                            <dd class="text-lg font-semibold">
                                {{ $ordenador->marca }}
                            </dd>
                        </div>
                        <div class="flex flex-col pb-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">
                                Modelo
                            </dt>
                            <dd class="text-lg font-semibold">
                                {{ $ordenador->modelo }}
                            </dd>
                        </div>

                        <div class="flex flex-col pb-3">
                            <dt class="mb-1 text-gray-500 md:text-lg dark:text-gray-400">
                                Aula ID
                            </dt>
                            <dd class="text-lg font-semibold">
                                {{ $ordenador->aula_id }}
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
