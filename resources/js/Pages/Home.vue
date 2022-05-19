<template>
    <Head>
        <title>CBEBirr</title>
    </Head>
        <h1 class="text-4xl font-bold">Welcome to CBEBirr</h1>
        <div class="w-full max-w-m">
            <div class="bg-white shadow-md rounded grid grid-cols-3 gap-4">
                <div class="col-span-1">
                    <img src="img/img-01.PNG" alt="cbe birr" style="width: 15%">
                    <p><u>Payment Summary</u></p>
                    <p><strong>Bill to: </strong>{{compName}}</p>
                    <p><strong>Amount: </strong>{{amount}}</p>
                    <p><strong>Till No: </strong>{{till}}</p>
                    <p><strong>Date: </strong>10/02/2022</p>
                </div>
                <div class="col-span-2">                    
                    <form action="" class="bg-white rounded px-8 pt-6 pb-8 mb-4">
                        <input type="text" name="" id="">
                        <div class="flex items-center justify-between">
                            <Link href="/phonenumber" type="button" method="" class="bg-purple-500 hover:black-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                pay
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
            amount: String,
            till: String,
            compName: String
        }
    }
    
</script>
