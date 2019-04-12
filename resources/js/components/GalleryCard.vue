<template>
    <div class="gallery-card">

        <div class="images">
            <div class="featured-image">
                <img :src="featuredImagePath" :alt="card.cardTitle">
            </div>

            <div class="thumbnails">
                <div class="thumbnail" v-for="(thumbnail, index) in card.thumbnails">
                    <img :src="thumbnailPath(thumbnail)" alt="" @click="setFeaturedImage(index)">
                </div>
            </div>
        </div>

        <div class="card-title content is-large">{{ card.cardTitle }}</div>
    </div>
</template>

<script>
    export default {
        props: {
            card: Object
        },
        data() {
            return {
                thumbnailNumber: 0
            }
        },
        computed: {
            featuredImagePath() {
                return this.card.thumbnails[this.thumbnailNumber] + '_lg.jpg';
            },
        },
        methods: {
            thumbnailPath(thumbnail) {
                return  thumbnail + '.jpg';
            },
            setFeaturedImage(index) {
                this.thumbnailNumber = index;
            }
        },
    }
</script>
