<script>
import axios from 'axios';
import braintree from 'braintree-web-drop-in';
const baseUrl = 'http://127.0.0.1:8000/api/';
export default {
    name: 'Payment',
    props: { tokenApi: String, address: String, phone: String, email: String, name: String },
    data() {
        return {
            isLoading: false
        }
    },
    methods: {
        // render payment box and make payment
        makePayment() {
            // get the button from dom
            const button = document.querySelector('#submit-button');

            // // instace of braintree
            braintree.create({
                authorization: this.tokenApi,
                selector: '#dropin-container'
            }, (err, dropinInstance) => {
                if (err) {
                    console.error(err);
                    return;
                }
                // on "pay" click
                button.addEventListener('click', () => {

                    // start loader
                    this.isLoading = true;


                    dropinInstance.requestPaymentMethod((err, payload) => {
                        if (err) {
                            console.error(err);
                            console.log('sono qui');
                            this.isLoading = false;
                            return;
                        }

                        // define what will be passed to backend
                        const foods = JSON.parse(localStorage.getItem('cart'));
                        const address = this.address;
                        const phone = this.phone;
                        const email = this.email;
                        const name = this.name

                        // pack everything in a data object
                        const data = {
                            token: payload.nonce,
                            foods: foods,
                            address: address,
                            phone: phone,
                            email: email,
                            name: name
                        };

                        // post the payment in backend passing the data
                        axios.post(`${baseUrl}make-payment`, data)
                            .then(response => {
                                // empty cart
                                this.$store.commit('emptyCart', this.$store.state)

                                // redirect success page
                                this.$router.push({ name: 'payment-success' })
                            })
                            .catch(error => {
                                // redirect error page
                                this.$router.push({ name: 'payment-failed' })
                            });
                    });
                });
            });
        },
    },

    mounted() {
        this.makePayment();
    },
}
</script>

<template>
    <!-- payment components -->
    <div id="dropin-container"></div>
    <button id="submit-button" class="button button--small button--green">Paga adesso</button>

    <!-- loader -->
    <app-loader v-if="isLoading"></app-loader>
</template>

<style scoped lang="scss">
.button {
    cursor: pointer;
    font-weight: 500;
    left: 3px;
    line-height: inherit;
    position: relative;
    text-decoration: none;
    text-align: center;
    border-style: solid;
    border-width: 1px;
    border-radius: 3px;
    display: inline-block;
}

.button--small {
    padding: 10px 20px;
    font-size: 0.875rem;
}

.button--green {
    outline: none;
    background-color: #64d18a;
    border-color: #64d18a;
    color: white;
    transition: all 200ms ease;
}

.button--green:hover {
    background-color: #8bdda8;
    color: white;
}
</style>