
<template>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <nav class="font-sans flex flex-col text-center sm:flex-row sm:text-left sm:justify-between py-4 px-6 bg-white
    shadow sm:items-baseline w-full">
        <div class="mb-2 sm:mb-0">
            <a :href="shopRoute" class="text-2xl no-underline text-grey-darkest hover:text-blue-dark">Home</a>
        </div>
        <div class="mb-2 sm:mb-0">
            <a :href="CartRoute" class="text-xl no-underline text-grey-darkest hover:text-blue-dark">
                <span id="numberChart" class="float mb-10">{{numberCart}}</span>
                <i class="fa-solid fa-cart-shopping"></i>
                Carrinho
            </a>
        </div>
    </nav>
</template>

<script>
    export default {
        data() {
            return {
                shopRoute: route('shop'),
                CartRoute: route('cart.index'),
            }
        },
        props: {
            numberCart: 0
        }
    }
    
</script>