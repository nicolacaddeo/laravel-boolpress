<template>
    <div>
        <header>
            <NavComponent />
        </header>
        <router-view></router-view>
    </div>
</template>

<script>
import NavComponent from '../components/NavComponent.vue';

export default {
    name: 'App',
    components: {
        NavComponent
    }
}
</script>

<style lang="scss">

</style>
