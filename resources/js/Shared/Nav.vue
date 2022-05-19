<template>
    <nav class="mt-6">
        <ul class="flex space-x-6">
            <!-- <li>
                <NavLink href="/" :active="$page.component == 'Home'">Home</NavLink>
            </li> -->
            <!-- <li>
                <NavLink href="/users" :active="$page.component == 'Users'">Users</NavLink>
            </li>
            <li>
                <NavLink href="/settings" :active="$page.component == 'Settings'">Settings</NavLink>
            </li> -->
            <!-- <li>
                <NavLink href="/phonenumber" :active="$page.component == 'AcceptPhoneNumber'">Enter Phone Number</NavLink>
            </li>
            <li>
                <NavLink href="/otp" :active="$page.component == 'AcceptOTP'">OTP</NavLink>
            </li>
            <li>
                <NavLink href="/pin" :active="$page.component == 'EnterPIN'">CBEBirr Pin</NavLink>
            </li>
            <li>
                <NavLink href="/successful" :active="$page.component == 'Invoice'">Invoice</NavLink>
            </li> -->
            <!-- <li><Link href="/logout" method="post" :data="{foo: 'bar'}" as="button" class="text-blue-500 hover:underline">Log Out</Link></li> -->
        </ul>
    </nav>

</template>

<script>
    import NavLink from './NavLink.vue';
    import Home from '../Pages/Home';
    export default {
       components: { NavLink, Home },
    };
</script>