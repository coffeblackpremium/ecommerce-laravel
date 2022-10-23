<script>
export default {
    data() {
        return {
            numberChart: String
        }
    
    },
}


</script>

<template>
    <nav class="font-sans flex flex-col text-center sm:flex-row sm:text-left sm:justify-between py-4 px-6 bg-white
    shadow sm:items-baseline w-full">
        <div class="mb-2 sm:mb-0">
            <a href="#home" class="text-2xl no-underline text-grey-darkest hover:text-blue-dark">Home</a>
        </div>
        <div class="mb-2 sm:mb-0">
            <a href="#carrinho" class="text-xl no-underline text-grey-darkest hover:text-blue-dark">
                <span id="numberChart" class="float mb-10" @change=""></span>
                <i class="fa-solid fa-cart-shopping"></i>
                Carrinho</a>
        </div>
    </nav>
</template>