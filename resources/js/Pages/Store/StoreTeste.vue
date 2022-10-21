
<template>
    <Navbar></Navbar>
    <div class="container mx-auto px-4 mt-9">
        <div class="flex flex-row flex-wrap justify-center mx-auto">
            <li v-for="key in info" class="px-4 box-border list-none">
               <div class="shadow mx-5 mt-5 py-3">
                <a href="#">
                    <img :src="key.image" :style="{width: `150px`, height: `150px`}" class="px-4 "/>
                </a>
                   <span class="ml-3">Produto:</span>
                   <span><strong>R$: 15,00</strong></span>
               </div> 
            </li>
        </div>

    </div>
    
</template>


<script>
import axios from 'axios'
import Navbar from '@/Components/Store/NavbarComponent.vue';

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
        Navbar
    }
}

</script>