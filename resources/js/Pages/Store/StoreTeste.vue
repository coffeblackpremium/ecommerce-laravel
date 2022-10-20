
<template>
    <li v-for="key in info">
        <h1>{{key.image}}</h1>
        <img :src="{{key.image}}"height="500" width="500" />
    </li>
    
</template>


<script>
import axios from 'axios'
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
    methods: {
        getImage = (image_url) => {

        }
    }
}

</script>