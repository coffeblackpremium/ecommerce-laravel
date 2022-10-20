
<template>
    <li v-for="key in info">
        <h1>{{key.title}}</h1>
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
    }
}

</script>