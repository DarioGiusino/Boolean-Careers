<script>
import { sliderImages } from '../data/images'
export default {
    name: 'AppMain',
    props: {
        restaurants: Array,
        categories: Array,
    },
    data() {
        return {
            sliderImages
        }

    },

}
</script>

<template>
    <!--! JUMBOTRON -->
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <!-- MAIN-TEXT -->
                <div class="col-9 text-lg-center mx-lg-auto jumbo-text">
                    <h1 class="main-text mb-4">I piatti che ami, a <span class="primary-color">domicilio.</span>
                    </h1>
                    <router-link class="search-button "
                        :to="{ name: 'restaurants', params: { component: RestaurantPage } }">
                        Cerca Ristoranti
                    </router-link>
                </div>
            </div>
        </div>
    </div>

    <!--! DYNAMIC IMAGES COLLECTION -->
    <div class="dynamic-img-collection my-3">
        <div class="slider">
            <div class="slide-track mb-3">
                <div v-for="image in sliderImages" :class="'slide ' + image.type"
                    :style="`background-image: url(${image.url}) `">
                </div>

                <div v-for="image in sliderImages" :class="'slide ' + image.type"
                    :style="`background-image: url(${image.url}) `">
                </div>

            </div>

            <div class="slide-track mb-3">
                <div v-for="image in sliderImages" :class="'slide ' + image.type"
                    :style="`background-image: url(${image.url}) `">
                </div>

                <div v-for="image in sliderImages" :class="'slide ' + image.type"
                    :style="`background-image: url(${image.url}) `">
                </div>

            </div>
        </div>
    </div>


    <!--!RESTAURANTS CATEGORIES-->
    <div class="restaurants-categories mb-5">
        <div class="container">
            <h2 class="categories-title mb-4">Le nostre cucine</h2>

            <!-- RESTAURANTS CATEGORIES COLLECTION -->
            <div class="row categories-collection d-flex justify-content-center">

                <!-- CATEGORIES -->
                <div v-for="category in categories" :key="category.id" class="col-12 col-sm-6 col-lg-4">
                    <router-link :to="{ name: 'categories-restaurants', params: { id: category.id } }">
                        <div class="categories-card mb-5">
                            <!-- CATEGORIES CONTENT -->
                            <div class="categories-content">
                                <!-- IMG -->
                                <div class="categories-img" :style="`background-image: url(${category.image}) `">
                                </div>
                                <!-- BUTTON -->
                                <div class="categories-button">
                                    <!-- <h1 class="categories-text">{{ category.label }}</h1> -->
                                    <button>Scopri di più</button>
                                </div>
                                <!-- TEXT -->
                                <h2 class="categories-text">{{ category.label }}</h2>

                            </div>

                        </div>
                    </router-link>
                </div>
            </div>
        </div>
    </div>

    <!--! NEWS -->
    <div class="news my-5 pb-4">
        <div class="container">
            <h2 class="news-title py-3">Novità dalla nostra cucina</h2>


            <div class="news-card mb-4">
                <!-- DELIVEROO FOR WORK -->
                <div class="row deliveroo-for-work align-items-center">

                    <div class="col-6">
                        <div class="news-img"
                            style="background-image: url('https://dcd2fe06bf58808e48f5-f58c1372aeba1bc7277f53e7c981d121.ssl.cf5.rackcdn.com/d855b605203442e3a03e7b5f5b69c5fd_backtowork.jpg');">
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="card-text">
                            <h4>Booliveroo for Work</h4>
                            <p>Clienti o colleghi affamati? Il nostro team Corporate ti può aiutare.</p>
                            <router-link :to="{ name: 'contact_page', params: { component: Contact } }">
                                <a href="#" class="primary-button">Contattaci</a>

                            </router-link>
                        </div>
                    </div>

                </div>
            </div>


            <div class="news-card">
                <!-- DELIVEROO APP -->
                <div class="row deliveroo-app align-items-center">

                    <div class="col-6">

                        <div class="card-text ps-3 row">

                            <div class="col-12">
                                <h4>Hai già la nostra app?</h4>
                            </div>
                            <div class="d-none d-md-block ">
                                <p>Scaricala ora - disponibile su Apple Store e Google Play!</p>
                            </div>
                            <div class="col-12">
                                <div class="download-buttons">
                                    <router-link
                                        :to="{ name: 'work_in_progress', params: { component: WorkInProgressPage } }">
                                        <a href="#">
                                            <img class="img-fluid download "
                                                src="https://chiavari.ditechmobility.com/wp-content/uploads/2018/04/apple-store.png"
                                                alt="download-appstore">
                                        </a>
                                    </router-link>


                                    <router-link
                                        :to="{ name: 'work_in_progress', params: { component: WorkInProgressPage } }">
                                        <a href="#">
                                            <img class="img-fluid download"
                                                src="https://www.hiboost.com/eu/wp-content/uploads/2020/03/get-it-on-google-play.png"
                                                alt="google-play">
                                        </a>

                                    </router-link>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-6">
                        <div class="news-img">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!--! WORK WITH DELIVEROO -->
    <div class="work-with-deliveroo my-5">
        <div class="container">
            <h2 class="work-title py-4">Lavora con Booliveroo</h2>

            <div class="row">
                <!-- RESTAURANTS-->
                <div class="col-12 ">
                    <div class="mb-5" style="background-color: #FF8100;">
                        <div class="p-0 work-card pb-4">

                            <!-- CARD-IMG -->
                            <div class="work-img">

                            </div>

                            <!-- CARD-TEXT -->
                            <div class="card-body p-3">
                                <h3>Ristoranti</h3>
                                <p class="card-description py-3">Diventa partner di Booliveroo e raggiungi sempre più
                                    clienti. Ci
                                    occupiamo noi della consegna, così che la tua unica preoccupazione sia continuare a
                                    preparare il miglior cibo.</p>
                                <a href="http://127.0.0.1:8000/login" class="primary-button">Diventa partner</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<style scoped lang="scss">
@use '../assets/scss/partials/variables' as*;



// ****** GENERAL******
.primary-button {
    padding: 10px 20px;
    border-radius: 4px;

    color: white;
    background-color: $primary;

    &:hover {
        background-color: #02baab;
        transition: 0.1s;


    }
}

.primary-color {
    color: $primary;
}

a {
    text-decoration: none;
}


li {
    list-style-type: none;
}



// JUMBOTRON
.jumbotron {
    height: 500px;
    background-image: url('../assets/img/burger1.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 50% 20%;
    color: white;

    position: relative;


    .jumbo-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .main-text {
        font-size: 40px;
        font-weight: 700;
        text-shadow: 2px 2px black;

    }


    .search-button {
        border-radius: 20px;
        padding: 10px 20px;
        background-color: $primary;
        color: white;
        transition: 0.1s;


        &:hover {
            background-color: #02baab;

        }
    }


}

// DYNAMIC IMAGES COLLECTION
.dynamic-img-collection {
    position: relative;

    // Animation
    @keyframes scroll {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-2120px)
        }
    }


    // Styling
    .slider {
        margin: auto;
        overflow-x: hidden;
        display: grid;
        top: -50px;


        .slide-track:first-child {
            animation: scroll 15s linear infinite;

        }

        .slide-track:last-child {
            animation: scroll 25s linear infinite;

        }


        .slide-track {
            display: flex;
            width: 4240px;
            overflow-x: hidden;


        }


        .slide {

            height: 130px;
            margin-left: 15px;
            display: flex;
            align-items: center;


            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            border-radius: 10px;
        }

        .slide.square {
            width: 130px;
        }

        .slide.rect {
            width: 270px;
        }

        .slide img {
            max-width: 100%;
            min-height: 100%;
            object-fit: cover;
            border-radius: 10px;
        }
    }




}


// DELIVEROO'S SELECTION
.deliveroo-selection {
    background-color: black;
    color: white;

    .selection-card {
        a {
            color: white;
        }

        .selection-img {
            position: relative;
            background-image: url('https://www.thespruceeats.com/thmb/KKVYHEcAN6Jt7yvULfCB4r3ad30=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/what-is-sushi-5079606-hero-01-e5a0a26f194a49478f84e04193baaefa.jpg');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            height: 150px;

            .img-text {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
        }

        .card-body {
            .discover-link {
                a {
                    color: $primary;
                }
            }
        }
    }
}


// RESTAURANTS CATEGORIES

.categories-card {
    transition: 0.8s;


    .categories-content {
        position: relative;
        transition: 0.8s;


        &:hover {
            scale: 0.9;
        }

        .categories-img {
            height: 230px;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            border-radius: 8px;
        }



        .categories-button {

            &:hover {
                opacity: 1;

            }

            background: linear-gradient(0deg, rgba(0, 0, 0, 0.6)0%, rgba(0, 0, 0, 0)80%);
            color: white;
            opacity: 0;

            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;

            display: flex;
            justify-content: center;
            align-items: center;

            transition: 0.5s;

            button {
                background-color: transparent;
                padding: 10px 20px;
                border: 2px solid white;
                color: white;
                transition: 0.6s;
                border-radius: 6px;

                &:hover {
                    background-color: rgba(0, 0, 0, 0.6);
                }
            }

        }
    }

    &:hover .categories-text {
        opacity: 0;
    }

    .categories-text {
        text-align: center;
        color: white;
        background-color: black;
        position: absolute;
        right: 0;
        left: 0;
        bottom: 5px;

        transition: 0.5s;
    }



}




// NEWS
.news {
    min-height: 300px;
    background-color: #F9FAFA;

    .news-card {
        background-color: white;

        .download {
            width: 100px;
            height: 30px;
        }

        .news-img {
            background-image: url('https://www.businessmagazine.org/wp-content/uploads/2022/02/960x0.jpg');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            height: 150px;
        }
    }
}


// WORK WITH DELIVEROO

.work-with-deliveroo {

    .work-card {
        color: white;

        .work-img {
            height: 300px;
            background-image: url('https://cms.jibecdn.com/prod/bms-working-with-us/assets/LP-A1-BG-IMG-en-us-1638557983139.jpg');
            background-position: 50% 25%;
            background-size: cover;
            background-repeat: no-repeat;
        }
    }


}
</style>