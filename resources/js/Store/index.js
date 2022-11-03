import { createStore } from 'vuex'

const store = createStore({
    state() {
        return {
            cart: [],
            numberCart: 0
        }
    },
    actions: {
        addToCart({ commit, state }, payload) {
            commit('incrementCart')
            const index = state.cart.findIndex(item => item.name === payload.itemName)
            if (index != -1) {
                commit('addQuantity', index)
                // state.cart.map(item => {
                //     if(item.name == itemName){
                //         item.quantity += 1
                //     }
                // })
            } else {
                commit('addItem', payload)
                // mutacao queadiciona
                // state.cart.push({
                //     name: itemName,
                //     price: itemPrice,
                //     quantity: 0
                // })
            }
        },
    },
    mutations: {
        incrementCart(state) {
            state.numberCart += 1
        },
        addQuantity(state, index) {
            state.cart[index].quantity += 1;
        },
        addItem(state, product) {
            state.cart.push({
                name: product.itemName,
                price: product.itemPrice,
                quantity: 1,
            })
        },
    }
})

export default store;