<template>
    <div><slot></slot></div>
</template>

<script>
    import { throttle } from 'lodash';

    export default {
        mounted() {
            let el = this.$el;
            let originalOffsetTop = el.offsetTop;

            window.addEventListener(
                'scroll',
                throttle(function() {
                    if (window.scrollY >= originalOffsetTop) {
                        el.classList.add('is-fixed-to-top');
                    } else {
                        el.classList.remove('is-fixed-to-top');
                    }
                }, 300)
            )
        }
    }
</script>
