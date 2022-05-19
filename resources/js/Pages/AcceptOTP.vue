<template>
    <Head>
        <title>CBEBirr</title>
    </Head>
        <h1 class="text-4xl font-bold">Enter the received Short Code</h1>
        <div class="w-full max-w-m">
            <div class="bg-white shadow-md rounded grid grid-cols-3 gap-4">
                <div class="col-span-1">
                    <img src="img/img-01.PNG" alt="cbe birr" style="width: 15%">
                    <p><u>Payment Summary</u></p>
                    <p><strong>Bill to: </strong>{{compName}}</p>
                    <p><strong>Amount: </strong>{{amount}} ETB</p>
                    <p><strong>Till No: </strong>{{till}}</p>
                    <p><strong>Date: </strong>10/02/2022</p>
                </div>
                <div class="col-span-2">
                    <form 
                        @submit.prevent="submit"
                        class="bg-white rounded px-8 pt-6 pb-8 mb-4">
                        <p class="" style="font-weight: bold">We have sent a Text Message to your phone number {{phonenumber}}. Please confirm your identity by entering the received short code below.</p>
                        <div class="mb-4">
                            <label for="phonenumber" class="block text-grey-700 text-sm font-bold mb-2">
                                
                            </label>
                            <input type="text" value="{{amount}}" style="display: none" name="amount">
                            <input type="text" value="{{till}}" style="display: none" name="till">
                            <input type="text" value="{{compName}}" style="display: none" name="compName">
                            <input type="text" value="{{phonenumber}}" style="display: none" name="phonenumber">
                            <input
                                type="text" 
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Short Code"
                                id="otp"
                                name="otp">
                            <input type="text" style="display: none" value="{{}}">
                                <p class="text-red-500 text-xs italic">Please provide a valid short code.</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <!-- <button 
                            class="bg-purple-500 hover:black-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="button"
                            >Submit</button> -->
                            <!-- <Link href="/pin" type="button" method="" class="bg-purple-500 hover:black-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Confirm
                            </Link> -->
                            <button type="submit" class="btn bg-purple-900">Submit</button>
                        </div>
                    </form>
                </div>
            </div>            
        </div>
</template>

<script>
    import { Head } from '@inertiajs/inertia-vue3';
    import { Link } from '@inertiajs/inertia-vue3';
    import { reactive } from 'vue';
    import { Inertia } from '@inertiajs/inertia';

    export default {
        components: {
            Link
        },
        props: {
            phonenumber: String,
            amount: String,
            till: String,
            compName: String
        },
        setup() {
            const form = reactive({
                otp: null,
                phonenumber: null,
                amount: null,
                till: null,
                compName: null
            })

            function submit() {
                Inertia.post('/pin', form)
            }

            return {form, submit}
        }
    }
    
</script>
