
<template>
    <Navbar></Navbar>
    <Search class="py-12"></Search>
    <div class="overflow-x-auto flex justify-center">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">Produto</th>
                    <th scope="col" class="py-3 px-6">Descrição</th>
                    <th scope="col" class="py-3 px-6">Preço Unitário</th>
                    <th scope="col" class="py-3 px-6">Qtd</th>
                    <th scope="col" class="py-3 px-6"></th>
                    <th scope="col" class="py-3 px-6">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">

                    </th>
                    <td class="py-4 px-6"></td>
                    <td class="py-4 px-6"></td>
                    <td class="py-4 px-6"></td>
                    <td class="py-4 px-6"></td>
                    <td class="py-4 px-6"></td>
                    
                </tr>
            </tbody>
        </table>

    </div>
</template>

<script>
import Navbar from '@/Components/Store/NavbarComponent.vue'
import Search from '@/Components/Store/SearchComponent.vue'
export default {
    data () {
        return {

        }
    },
    components: {
        Navbar, Search
    }
}
</script>