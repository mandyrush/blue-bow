<template>
    <!--Crop ratio for featured images = 4:5 (8:10), min-height = 640px-->
    <!--Crop ratio for thumbnails = 1:1, height = 500px x 500px-->

    <div class="gallery">
        <div v-for="card in galleryCards">

            <gallery-card
                :card="card"
                :key="card.id"
            >
            </gallery-card>

        </div>
    </div>
</template>

<script>
    import GalleryCard from '../components/GalleryCard'

    export default {
        components: {
            GalleryCard
        },
        data() {
            return {
                galleryCards: [
                    {
                        id: 1,
                        thumbnails: [
                            '/images/gallery/rhinestone_bride/thumbnail_6',
                            '/images/gallery/rhinestone_bride/thumbnail_1',
                            '/images/gallery/rhinestone_bride/thumbnail_3',
                            '/images/gallery/rhinestone_bride/thumbnail_2',
                            '/images/gallery/rhinestone_bride/thumbnail_7',
                            '/images/gallery/rhinestone_bride/thumbnail_5'
                        ],
                        cardTitle: 'Cathedral Veil with Rhinestone Embellishments'
                    },
                    {
                        id: 2,
                        thumbnails: [
                            '/images/gallery/renee/thumbnail_1',
                            '/images/gallery/renee/thumbnail_2',
                            '/images/gallery/renee/thumbnail_3',
                            '/images/gallery/renee/thumbnail_4'
                        ],
                        cardTitle: 'Cathedral Veil with Lace Trim'
                    },
                    {
                        id: 3,
                        thumbnails: [
                            '/images/gallery/brooke/thumbnail_1',
                            '/images/gallery/brooke/thumbnail_5',
                            '/images/gallery/brooke/thumbnail_3',
                            '/images/gallery/brooke/thumbnail_4',
                            '/images/gallery/brooke/thumbnail_2'
                        ],
                        cardTitle: 'Cathedral Veil with Pearl Accents'
                    },
                    {
                        id: 4,
                        thumbnails: [
                            '/images/gallery/sarah_veil2/thumbnail_1',
                            '/images/gallery/sarah_veil2/thumbnail_2',
                            '/images/gallery/sarah_veil2/thumbnail_3',
                            '/images/gallery/sarah_veil2/thumbnail_4',
                            '/images/gallery/sarah_veil2/thumbnail_5'
                        ],
                        cardTitle: 'Floral Halo Veil'
                    },
                    {
                        id: 5,
                        thumbnails: [
                            '/images/gallery/nicki/thumbnail_1',
                            '/images/gallery/nicki/thumbnail_2',
                            '/images/gallery/nicki/thumbnail_3',
                            '/images/gallery/nicki/thumbnail_5',
                            '/images/gallery/nicki/thumbnail_4',
                            '/images/gallery/nicki/thumbnail_6'
                        ],
                        cardTitle: 'Tea Length Wedding Dress & Birdcage Veil'
                    },
                    {
                        id: 6,
                        thumbnails: [
                            '/images/gallery/black_red_bride/thumbnail_2',
                            '/images/gallery/black_red_bride/thumbnail_1',
                            '/images/gallery/black_red_bride/thumbnail_4',
                            '/images/gallery/black_red_bride/thumbnail_3'
                        ],
                        cardTitle: 'Birdcage Veil with Feather Embellishment'
                    },
                    {
                        id: 7,
                        thumbnails: [
                            '/images/gallery/shandra/thumbnail_1',
                            '/images/gallery/shandra/thumbnail_2',
                            '/images/gallery/shandra/thumbnail_3',
                            '/images/gallery/shandra/thumbnail_4',
                            '/images/gallery/shandra/thumbnail_5',
                            '/images/gallery/shandra/thumbnail_6'
                        ],
                        cardTitle: 'Lace Cathedral Veil'
                    },
                    {
                        id: 8,
                        thumbnails: [
                            '/images/gallery/shandra_halos/thumbnail_5',
                            '/images/gallery/shandra_halos/thumbnail_6',
                            '/images/gallery/shandra_halos/thumbnail_4',
                            '/images/gallery/shandra_halos/thumbnail_1',
                            '/images/gallery/shandra_halos/thumbnail_2',
                            '/images/gallery/shandra_halos/thumbnail_3'
                        ],
                        cardTitle: 'Flower Girl Floral Halo'
                    },
                    {
                        id: 9,
                        thumbnails: [
                            '/images/gallery/sarah/thumbnail_1',
                            '/images/gallery/sarah/thumbnail_2',
                            '/images/gallery/sarah/thumbnail_3',
                            '/images/gallery/sarah/thumbnail_4',
                            '/images/gallery/sarah/thumbnail_5',
                            '/images/gallery/sarah/thumbnail_6'
                        ],
                        cardTitle: 'Floral Halo Veil'
                    },

                    {
                        id: 10,
                        thumbnails: [
                            '/images/gallery/amanda/thumbnail_1',
                            '/images/gallery/amanda/thumbnail_2',
                            '/images/gallery/amanda/thumbnail_3',
                            '/images/gallery/amanda/thumbnail_4'
                        ],
                        cardTitle: 'Double Tiered Veil with Pearl Edging'
                    },
                    {
                        id: 11,
                        thumbnails: [
                            '/images/gallery/tacy/thumbnail_1',
                            '/images/gallery/tacy/thumbnail_2',
                            '/images/gallery/tacy/thumbnail_3',
                            '/images/gallery/tacy/thumbnail_4',
                            '/images/gallery/tacy/thumbnail_5'
                        ],
                        cardTitle: 'Wedding Dress with Asymmetrical Hem & Birdcage Veil'
                    },
                    {
                        id: 12,
                        thumbnails: [
                            '/images/gallery/kelvin/thumbnail_3',
                            '/images/gallery/kelvin/thumbnail_2',
                            '/images/gallery/kelvin/thumbnail_4',
                            '/images/gallery/kelvin/thumbnail_1',
                        ],
                        cardTitle: 'Button Down Vest with Decorative Pockets'
                    }
                ]
            }
        },
        // methods: {
        //     createGallery() {
        //
        //         class GalleryCard {
        //             constructor(thumbnails, cardTitle) {
        //                 this.thumbnails = thumbnails;
        //                 this.cardTitle = cardTitle;
        //             }
        //         }
        //
        //         function createGalleryCard() {
        //             let gallery = document.querySelector('.gallery');
        //
        //             galleryCard = document.createElement('div');
        //             galleryCard.setAttribute('class', 'gallery-card');
        //
        //             images = document.createElement('div');
        //             images.setAttribute('class', 'images');
        //
        //             cardTitle = document.createElement('div');
        //             cardTitle.setAttribute('class', 'card-title content is-large');
        //
        //             featuredImage = document.createElement('img');
        //             featuredImage.setAttribute('class', 'featured-image');
        //
        //             thumbnails = document.createElement('div');
        //             thumbnails.setAttribute('class', 'thumbnails');
        //
        //
        //             gallery.appendChild(galleryCard);
        //
        //             galleryCard.appendChild(images);
        //             galleryCard.appendChild(cardTitle);
        //
        //             images.appendChild(featuredImage);
        //             images.appendChild(thumbnails);
        //         }
        //
        //         //Crop ratio for featured images = 4:5 (8:10), min-height = 640px
        //         //Crop ratio for thumbnails = 1:1, height = 500px x 500px
        //
        //         let cardOne = new GalleryCard(
        //             [
        //                 '/images/gallery/renee/thumbnail_1',
        //                 '/images/gallery/renee/thumbnail_2',
        //                 '/images/gallery/renee/thumbnail_3',
        //                 '/images/gallery/renee/thumbnail_4'
        //             ],
        //             'Cathedral Veil with Lace Trim'
        //         );
        //
        //         let cardTwo = new GalleryCard(
        //             [
        //                 '/images/gallery/brooke/thumbnail_1',
        //                 '/images/gallery/brooke/thumbnail_5',
        //                 '/images/gallery/brooke/thumbnail_3',
        //                 '/images/gallery/brooke/thumbnail_4',
        //                 '/images/gallery/brooke/thumbnail_2'
        //             ],
        //             'Cathedral Veil with Pearl Accents'
        //         );
        //
        //         let cardThree = new GalleryCard(
        //             [
        //                 '/images/gallery/sarah_veil2/thumbnail_1',
        //                 '/images/gallery/sarah_veil2/thumbnail_2',
        //                 '/images/gallery/sarah_veil2/thumbnail_3',
        //                 '/images/gallery/sarah_veil2/thumbnail_4',
        //                 '/images/gallery/sarah_veil2/thumbnail_5'
        //             ],
        //             'Floral Halo Veil'
        //         );
        //
        //         let cardFour = new GalleryCard(
        //             [
        //                 '/images/gallery/nicki/thumbnail_1',
        //                 '/images/gallery/nicki/thumbnail_2',
        //                 '/images/gallery/nicki/thumbnail_3',
        //                 '/images/gallery/nicki/thumbnail_5',
        //                 '/images/gallery/nicki/thumbnail_4',
        //                 '/images/gallery/nicki/thumbnail_6'
        //             ],
        //             'Tea Length Wedding Dress & Birdcage Veil'
        //         );
        //
        //         let cardFive = new GalleryCard(
        //             [
        //                 '/images/gallery/black_red_bride/thumbnail_2',
        //                 '/images/gallery/black_red_bride/thumbnail_1',
        //                 '/images/gallery/black_red_bride/thumbnail_4',
        //                 '/images/gallery/black_red_bride/thumbnail_3'
        //             ],
        //             'Birdcage Veil with Feather Embellishment'
        //         );
        //
        //         let cardSix = new GalleryCard(
        //             [
        //                 '/images/gallery/shandra/thumbnail_1',
        //                 '/images/gallery/shandra/thumbnail_2',
        //                 '/images/gallery/shandra/thumbnail_3',
        //                 '/images/gallery/shandra/thumbnail_4',
        //                 '/images/gallery/shandra/thumbnail_5',
        //                 '/images/gallery/shandra/thumbnail_6'
        //             ],
        //             'Lace Cathedral Veil'
        //         );
        //
        //         let cardSeven = new GalleryCard(
        //             [
        //                 '/images/gallery/shandra_halos/thumbnail_5',
        //                 '/images/gallery/shandra_halos/thumbnail_6',
        //                 '/images/gallery/shandra_halos/thumbnail_4',
        //                 '/images/gallery/shandra_halos/thumbnail_1',
        //                 '/images/gallery/shandra_halos/thumbnail_2',
        //                 '/images/gallery/shandra_halos/thumbnail_3'
        //
        //             ],
        //             'Flower Girl Floral Halo'
        //         );
        //
        //         let cardEight = new GalleryCard(
        //             [
        //                 '/images/gallery/sarah/thumbnail_1',
        //                 '/images/gallery/sarah/thumbnail_2',
        //                 '/images/gallery/sarah/thumbnail_3',
        //                 '/images/gallery/sarah/thumbnail_4',
        //                 '/images/gallery/sarah/thumbnail_5',
        //                 '/images/gallery/sarah/thumbnail_6'
        //             ],
        //             'Floral Halo Veil'
        //         );
        //
        //         let cardNine = new GalleryCard(
        //             [
        //                 '/images/gallery/amanda/thumbnail_1',
        //                 '/images/gallery/amanda/thumbnail_2',
        //                 '/images/gallery/amanda/thumbnail_3',
        //                 '/images/gallery/amanda/thumbnail_4'
        //             ],
        //             'Double Tiered Veil with Pearl Edging'
        //         );
        //
        //         let cardTen = new GalleryCard(
        //             [
        //                 '/images/gallery/tacy/thumbnail_1',
        //                 '/images/gallery/tacy/thumbnail_2',
        //                 '/images/gallery/tacy/thumbnail_3',
        //                 '/images/gallery/tacy/thumbnail_4',
        //                 '/images/gallery/tacy/thumbnail_5'
        //             ],
        //             'Wedding Dress with Asymmetrical Hem & Birdcage Veil'
        //         );
        //
        //         let cardEleven = new GalleryCard(
        //             [
        //                 '/images/gallery/rhinestone_bride/thumbnail_6',
        //                 '/images/gallery/rhinestone_bride/thumbnail_1',
        //                 '/images/gallery/rhinestone_bride/thumbnail_3',
        //                 '/images/gallery/rhinestone_bride/thumbnail_2',
        //                 '/images/gallery/rhinestone_bride/thumbnail_7',
        //                 '/images/gallery/rhinestone_bride/thumbnail_5'
        //             ],
        //             'Cathedral Veil with Rhinestone Embellishments'
        //         );
        //
        //         let cardTwelve = new GalleryCard(
        //             [
        //                 '/images/gallery/kelvin/thumbnail_3',
        //                 '/images/gallery/kelvin/thumbnail_2',
        //                 '/images/gallery/kelvin/thumbnail_4',
        //                 '/images/gallery/kelvin/thumbnail_1',
        //             ],
        //             'Button Down Vest with Decorative Pockets'
        //         );
        //
        //
        //         let cards = [];
        //         cards.push(cardEleven, cardOne, cardTwo, cardThree, cardFour, cardFive, cardSix, cardSeven, cardEight, cardNine, cardTen, cardTwelve);
        //
        //
        //         for (let j = 0; j < cards.length; j++) {
        //
        //             createGalleryCard();
        //
        //             let featuredImage = document.querySelectorAll('.featured-image');
        //             let thumbnailBar = document.querySelectorAll('.thumbnails');
        //             let cardTitle = document.querySelectorAll('.card-title');
        //
        //             featuredImage[j].setAttribute('src', cards[j].thumbnails[0] + '_lg.jpg');
        //
        //             let header = document.createElement('header');
        //             cardTitle[j].appendChild(header);
        //             header.textContent = cards[j].cardTitle;
        //
        //             for (let i = 0; i < cards[j].thumbnails.length; i++) {
        //
        //                 let thumbnail = document.createElement('img');
        //                 thumbnail.setAttribute('src', cards[j].thumbnails[i] + '.jpg');
        //                 thumbnailBar[j].appendChild(thumbnail);
        //
        //                 thumbnail.onclick = function(){
        //                     featuredImage[j].setAttribute('src', cards[j].thumbnails[i] + '_lg.jpg');
        //                 };
        //
        //             }
        //         }
        //     }
        // },
        // mounted() {
        //     this.createGallery();
        // }
    }
</script>
