<template>
    <div
        class="flash"
        v-if="showMessage"
    >
        {{ body }}
    </div>
</template>

<script>
    export default {
        props: {
            message: String
        },
        data() {
            return {
                showMessage: false,
                body: ''
            }
        },
        created() {
            if(this.message) {
                this.body = this.message;
                this.showMessage = true;
            }
            setTimeout(() => {
                this.showMessage = false;
            }, 3000);
        }
    }
</script>

<style lang="scss" scoped>
    .flash {
        background-color: rgba(10, 51, 149, 1);
        color: white;
        box-shadow: 5px 6px 8px 0 rgba(50, 50, 50, 0.55);
        font-size: 1.5rem;
        border-radius: 3rem;
        position: fixed;
        right: 25px;
        bottom: 25px;
        padding: 1rem;
    }
</style>
