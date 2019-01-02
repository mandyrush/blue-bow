@extends('layouts.mywork')

@section('title', 'Welcome to')

@section('content')

    <div class="dark-bg home">

        <div class="navigation">
            @include('partials.header')
        </div>

        <div class="gallery"></div>

    </div>



    <script>
        class GalleryCard {
            constructor(thumbnails, cardTitle) {
                this.thumbnails = thumbnails;
                this.cardTitle = cardTitle;
            }
        }

        function createGalleryCard() {
            let gallery = document.querySelector('.gallery');

            galleryCard = document.createElement('div');
            galleryCard.setAttribute('class', 'gallery-card');

            images = document.createElement('div');
            images.setAttribute('class', 'images');

            cardTitle = document.createElement('div');
            cardTitle.setAttribute('class', 'card-title');

            featuredImage = document.createElement('img');
            featuredImage.setAttribute('class', 'featured-image');

            thumbnails = document.createElement('div');
            thumbnails.setAttribute('class', 'thumbnails');


            gallery.appendChild(galleryCard);

            galleryCard.appendChild(images);
            galleryCard.appendChild(cardTitle);

            images.appendChild(featuredImage);
            images.appendChild(thumbnails);
        }

        let cardOne = new GalleryCard(
            [
                '/images/brittany-hat-front.jpg',
                '/images/brittany-hat-back2.jpg',
                '/images/brittany-hat-front.jpg',
                '/images/brittany-hat-back2.jpg',
                '/images/brittany-hat-front.jpg',
                '/images/brittany-hat-back2.jpg'
            ],
            'Pill Box Hat'
        );

        let cardTwo = new GalleryCard(
            [
                'https://pbs.twimg.com/profile_images/497043545505947648/ESngUXG0.jpeg',
                'https://pbs.twimg.com/profile_images/497043545505947648/ESngUXG0.jpeg',
                'https://pbs.twimg.com/profile_images/497043545505947648/ESngUXG0.jpeg',
                'https://pbs.twimg.com/profile_images/497043545505947648/ESngUXG0.jpeg',
                'https://pbs.twimg.com/profile_images/497043545505947648/ESngUXG0.jpeg',
                'https://pbs.twimg.com/profile_images/497043545505947648/ESngUXG0.jpeg'
            ],
            'Some other puppy'
        );

        let cardThree = new GalleryCard(
            [
                'http://www.smalldogbreeds.info/wp-content/uploads/2016/02/teddy-bear-pomeranian.gif',
                'https://i.pinimg.com/564x/a6/c5/fa/a6c5fadc3b4f5963908a6a40ac0c6f96.jpg',
                'http://www.longislandpuppies.com/templates/Glow/images/breeds/p/pomeranian1.jpg',
                'http://images5.fanpop.com/image/photos/25800000/puppies-dogs-25835177-120-112.jpg',
                'https://i.pinimg.com/236x/4c/97/7f/4c977f7567442e36d86dbd568c5bab8b.jpg',
                'https://i.pinimg.com/236x/1e/b6/cd/1eb6cdb576ac3d8ad2708b07e2c5f2ee.jpg'
            ],
            'Teddy Bear Pomeranian'
        );

        let cards = [];
        cards.push(cardOne, cardTwo, cardThree);


        for (let j = 0; j < cards.length; j++) {

            createGalleryCard();

            let featuredImage = document.querySelectorAll('.featured-image');
            let thumbnailBar = document.querySelectorAll('.thumbnails');
            let cardTitle = document.querySelectorAll('.card-title');

            featuredImage[j].setAttribute('src', cards[j].thumbnails[0]);

            let header = document.createElement('header');
            cardTitle[j].appendChild(header);
            header.textContent = cards[j].cardTitle;

            for (let i = 0; i < cards[j].thumbnails.length; i++) {

                let thumbnail = document.createElement('img');
                thumbnail.setAttribute('src', cards[j].thumbnails[i]);
                thumbnailBar[j].appendChild(thumbnail);

                thumbnail.onclick = function(){
                    featuredImage[j].setAttribute('src', cards[j].thumbnails[i]);
                };

            }
        }
    </script>
@endsection
