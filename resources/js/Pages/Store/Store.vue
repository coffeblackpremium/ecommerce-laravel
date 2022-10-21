
<template>
    <Head title="Loja Laravel" />
    <Navbar></Navbar>
    <Search class="mt-10"></Search>
    <div class="container mx-auto px-4 mt-9">
        <div class="flex flex-row flex-wrap justify-center mx-auto">
            <li v-for="key in info" class="px-4 box-border list-none">
               <div class="shadow-sm mx-5 mt-5 py-3 border rounded-lg">
                <div class="px-5">
                    <a href="#" class="">
                        <img :src="key.image" :style="{width: `150px`, height: `150px`}" class="px-4"/>
                    </a>
                </div>
                <div class="w-48 text-center px-6 py-6">
                    <span class="ml-3">{{key.title}}:</span>
                    <span><strong> R$:{{key.price}} </strong></span>

                </div>
               </div> 
            </li>
        </div>
    </div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</template>

<script>
import axios from 'axios'
import Navbar from '@/Components/Store/NavbarComponent.vue'
import Search from '@/Components/Store/SearchComponent.vue'
import { Head } from '@inertiajs/inertia-vue3'

export default {
    data(){
        return {
            info: null
        }
    },
    mounted () {
        axios
        .get('https://fakestoreapi.com/products')
        .then(response => (this.info = response.data))
        .catch(error => console.log(error))
    },
    components: {
        Navbar, Head, Search
    },
    name: 'Home',
    metaInfo: {
        title: "Loja Laravel",
        titleTemplate: "$s | My Awesome webApp"
    },
}

</script>