
<template>
    <Head title="Loja Laravel" />
    <Navbar :numberCart="numberCart">
    </Navbar>
    <!-- <Search class="mt-10" v-model="search" ></Search> -->
    <div class="flex justify-center">
        <div class="mb-3 xl:w-96">
            <div class="input-group relative flex flex-wrap items-stretch w-full mb-4 rounded">
                <input type="search" class="form-control relative flex-auto win-w-0 block w-ful 
                px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid
                border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:border-blue-600
                focus:outline-none" v-model="search"
                placeholder="Procurar..." arial-label="Search" aria-describedby="button-addon2"/>
                <span class="input-group-text flex items-center px-3 py-1.5 text-base font-normal text-gray-700 text-center whitespace-nowrap rounded" id="basic-addon2">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                    </svg>
                </span>
            </div>
        </div>
    </div>
    <div class="container mx-auto px-4 mt-9">
        <div class="flex flex-row flex-wrap justify-center mx-auto">
            <ul v-for="key in filterList">
                <div>
                    <li class="px-4 box-border list-none">
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
                            <button @click="add(key.title, key.price)" class="btn bg-green-500 hover:bg-green-700 text-white font-bold px-4 py-2 rounded">
                                <i class="fa-solid fa-cart-shopping"></i>
                                +
                            </button>
                        </div>
                        </div>
                    </li>
                </div>
            </ul>
        </div>
    </div>
</template>

<script>
import Navbar from '@/Components/Shop/NavbarComponent.vue'
import Search from '@/Components/Shop/SearchComponent.vue'
import { Head } from '@inertiajs/inertia-vue3'
import NavbarComponentVue from '@/Components/Shop/NavbarComponent.vue'
import { mapState, mapActions } from 'vuex'
import { defineComponent } from 'vue'

export default defineComponent({
    props: {
        apiInformation: Array,
    },
    data () {
        return {
            search: '',
            items: this.apiInformation,
        }
    },
    computed: {
        filterList() {
            if(this.search != ''){
                return this.items.filter(apiData => {
                return apiData.title.toLowerCase().includes(this.search.toLowerCase())
                })
            } else {
                return this.items
            }
        },
        ...mapState({
            cart: state => state.cart,
            numberCart: state => state.numberCart
        }),
    },
    methods: {
      ...mapActions([
        'addToCart'
    ]),
    add(itemName, itemPrice) {
        this.addToCart({itemName, itemPrice})
    }
    },
    mounted() {
        console.log(this.apiInformation);
    },
    components: {
        Navbar, Head, Search
    },
    name: 'Home',
    metaInfo: {
        title: "Loja Laravel",
        titleTemplate: "%s | My Awesome webApp"
    },

})
</script>