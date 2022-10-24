
<template>
    <Head title="Loja Laravel" />
    <Navbar :numberChart="numberChart">
    </Navbar>
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
                <div class="w-48 text-center px-6 py-6" v-if="key.title.lenght > 20">
                    <span class="ml-3">{{key.title.substring(0,30)}}:....</span>
                    <span><strong> R$:{{key.price}} </strong></span>
                </div>
                <div class="w-48 text-center px-6 py-6" v-else>
                    <span class="ml-3">{{key.title.substring(0,20)}}:</span>
                    <span><strong> R$:{{key.price}} </strong></span>
                </div>
                <div class="flex justify-start px-4">
                    <button @click="addToCart()" class="btn bg-green-500 hover:bg-green-700 text-white font-bold px-4 py-2 rounded">
                        <i class="fa-solid fa-cart-shopping"></i>
                        +
                    </button>
                </div>
               </div> 
            </li>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
import Navbar from '@/Components/Store/NavbarComponent.vue'
import Search from '@/Components/Store/SearchComponent.vue'
import { Head } from '@inertiajs/inertia-vue3'
import NavbarComponentVue from '@/Components/Store/NavbarComponent.vue'

export default {
    data(){
        return {
            info: null,
            numberChart: 0
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
        titleTemplate: "%s | My Awesome webApp"
    },
    methods: {
        getId(data){
            this.id = data
        },
        addToCart() {
            this.numberChart += 1
        }
    }
}

</script>