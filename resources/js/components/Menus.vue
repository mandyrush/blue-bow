<template>
    <div>
        <menu-on-scroll></menu-on-scroll>

        <menu-main></menu-main>
    </div>
</template>

<script>
    import MenuOnScroll from './MenuOnScroll'
    import MenuMain from './MenuMain'

    export default {
        components: {
            MenuOnScroll,
            MenuMain
        }
    }
</script>
