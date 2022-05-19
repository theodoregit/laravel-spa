<template>
    <h1 class="text-4xl font-bold">Please Enter Your Phone Number</h1>
        <div class="w-full max-w-m">
            <div class="bg-white shadow-md rounded grid grid-cols-3 gap-4">
                <div class="col-span-1">
                    <img src="img/img-01.PNG" alt="cbe birr" style="width: 15%">
                    <p><u>Payment Summary</u></p>
                    <p><strong>Bill to: </strong>{{$page.props.payment.compName}}</p>
                    <p><strong>Amount: </strong>{{$page.props.payment.amount}} ETB</p>
                    <p><strong>Till No: </strong>{{$page.props.payment.till}}</p>
                    <p><strong>Date: </strong>10/02/2022</p>
                </div>
                <div class="col-span-2">
                    <form 
                        @submit.prevent="submit"
                        class="bg-white rounded px-8 pt-6 pb-8 mb-4">
                        <div class="mb-4">
                            <label for="phonenumber" class="block text-grey-700 text-sm font-bold mb-2">
                                Please Enter Your Phone Number
                            </label>
                            <input type="text" style="display:" :value="$page.props.payment.amount">
                            <input type="text" v-model="$page.props.payment.till" style="display: none">
                            <input type="text" v-model="$page.props.payment.compName" style="display: none">
                            <input
                                v-model="form.phonenumber"
                                type="text" 
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Phone Number"
                                id="otp">
                                <p class="text-red-500 text-xs italic">Please provide a valid phone number.</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <!-- <Link href="/otp" type="button" method="" class="bg-purple-500 hover:black-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Submit
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
            //
        },
        setup() {
            const form = reactive({
                phonenumber: null,
                amount: null,
                till: null,
                compName: null
            })

            function submit() {
                Inertia.post('/otp', form)
            }

            return {form, submit}
        }
    }
    
</script>
