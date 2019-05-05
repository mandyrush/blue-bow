<template>
    <div class="nav-content test" v-if="isVisible">
        <a
            @click.prevent="navScroll('main-bg')"
        >
            <i class="btn-to-top fas fa-angle-up"></i>
        </a>

        <header class="col-lg-5">
            <a href="/">
                <div class="logo scrl-logo title">Blue Bow Fashion</div>
            </a>
        </header>

        <nav class="col-sm-5">
            <a
                v-if="windowUrl === '/'"
                href="/#carousel"
                class="nav-item my-work-btn is-size-4"
                @click.prevent="navScroll('carousel')"
            >
                My Work
            </a>
            <a
                v-else
                href="/#carousel"
                class="nav-item my-work-btn is-size-4"
            >
                My Work
            </a>

            <a
                v-if="windowUrl === '/'"
                href="/#contact-me"
                class="nav-item contact-btn is-size-4"
                @click.prevent="navScroll('contact-me')"
            >
                Contact Me
            </a>
            <a
                v-else
                href="/#contact-me"
                class="nav-item contact-btn is-size-4"
            >
                Contact Me
            </a>

            <a
                v-if="windowUrl === '/'"
                href="/#about-me"
                class="nav-item about-me-btn is-size-4"
                @click.prevent="navScroll('about-me')"
            >
                About Me
            </a>
            <a
                v-else
                href="/#about-me"
                class="nav-item about-me-btn is-size-4"
            >
                About Me
            </a>
        </nav>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                isVisible: false,
                prevScrollPos: window.pageYOffset,

            }
        },
        computed: {
            windowUrl() {
                return window.location.pathname;
            }
        },
        methods: {
            navScroll(target) {
                document.getElementById(target).scrollIntoView({
                    behavior: 'smooth'
                });
            }
        },
        created() {
            window.onscroll = function () {
                let currentScrollPos = window.pageYOffset;

                if (this.prevScrollpos > currentScrollPos) {
                    this.isVisible = true;
                } else {
                    this.isVisible = false;
                }

                this.prevScrollpos = currentScrollPos;
            }
        }
    }
</script>

<style scoped>
    .nav-content {
        background-color: rgba(10, 51, 149, 1);
        padding: .5rem 0;
        align-items: center;
        position: fixed;
        width: 100%;
        z-index: 10;
    }
    .scrl-logo {
        font-size: 3.5vw;
    }
    .btn-to-top {
        /*display: none;*/
        position: absolute;
        cursor: pointer;
        top: 5px;
        right: 5px;
        color: rgba(255, 255, 255, 1);
        font-size: 4rem;
        margin-left: .5rem;
        padding: 0 .5rem;
        border-radius: 1rem;
    }
</style>
