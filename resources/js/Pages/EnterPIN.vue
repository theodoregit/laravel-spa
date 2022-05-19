<template>
    <Head>
        <title>CBEBirr</title>
    </Head>
        <h1 class="text-4xl font-bold">Enter Your CBEBirr PIN</h1>
        <div class="w-full max-w-m">
            <div class="bg-white shadow-md rounded grid grid-cols-3 gap-4">
                <div class="col-span-1">
                    <img src="img/img-01.PNG" alt="cbe birr" style="width: 15%">
                    <p><u>Payment Summary</u></p>
                    <p><strong>Bill to: </strong>Commercial Bank of Ethiopia</p>
                    <p><strong>Amount: </strong>542.63 ETB</p>
                    <p><strong>Till No: </strong>001</p>
                    <p><strong>Date: </strong>10/02/2022</p>
                </div>
                <div class="col-span-2">
                    <form action="" class="bg-white rounded px-8 pt-6 pb-8 mb-4">
                        <div class="mb-4">
                            <label for="phonenumber" class="block text-grey-700 text-sm font-bold mb-2">
                                Phone Number
                            </label>
                            <input
                                type="text" 
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="Phone Number"
                                id="phonenumber"
                                name="phonenumber"
                                value="{{phonenumber}}"
                                disabled>
                                <!-- <p class="text-red-500 text-xs italic">Please provide a valid phone number.</p> -->
                        </div>
                        <div class="mb-6">
                            <label for="phonenumber" class="block text-grey-700 text-sm font-bold mb-2">
                                PIN
                            </label>
                            <input
                                type="password" 
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-700 leading-tight focus:outline-none focus:shadow-outline"
                                placeholder="CBEBirr PIN"
                                id="pin"
                                name="pin">
                        </div>
                        <div class="flex items-center justify-between">
                            <!-- <button 
                            class="bg-purple-500 hover:black-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="button"
                            >Submit</button> -->
                            <Link href="/successful" type="button" method="" class="bg-purple-500 hover:black-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Pay
                            </Link>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</template>

<script>
    import { Head } from '@inertiajs/inertia-vue3';
    import { Link } from '@inertiajs/inertia-vue3';

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
