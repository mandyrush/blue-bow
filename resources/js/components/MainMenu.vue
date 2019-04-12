<template>
    <div class="nav-content">
        <header class="col-lg-5">
            <a href="/">
                <div class="logo static-logo title">Blue Bow Fashion</div>
                <div class="logo-description subtitle is-5">Handmade Wedding Veils and Accessories</div>

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
        }
    }
</script>
