<template>
    <Head>
        <title>CBEBirr</title>
    </Head>
        <h1 class="text-4xl font-bold">Invoice</h1>       
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
                        <h3>Payment has been successfully completed.</h3>
                        <div class="flex items-center justify-between">
                            <Link href="/phonenumber" type="button" method="" class="bg-purple-500 hover:black-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Home
                            </Link>
                        </div>
                    </form>
                </div>
            </div>            
        </div>
</template>

<script>
    import { Head } from '@inertiajs/inertia-vue3';

    export default {
        components: {
            
        },
        props: {
            amount: String,
            till: String,
            compName: String
        }
    }
    
</script>
