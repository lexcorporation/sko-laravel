<x-layouts.app >
    Hola caracola


<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Edit
                </th>                
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                    <td class="px-6 py-3">
                        {{$category->id}}
                    </td>
                    <td class="px-6 py-3">
                        {{$category->name}}
                    </td>
                    <td class="px-6 py-3">
                        Editar - Eliminar
                    </td>
                </tr>                       
            @endforeach
        </tbody>
    </table>
</div>

    
</x-layouts.app>
