<script>
export default {
    props: { lists: Array }
}
</script>

<template>
    <section id="footer-top">
        <div class="container">
            <div class="footer-list-container">
                <div class="footer-list-col">
                    <h3>dc comics</h3>
                    <ul>
                        <li><a href="#">Characters</a></li>
                        <li><a href="#">Comics</a></li>
                        <li><a href="#">Movies</a></li>
                        <li><a href="#">TV</a></li>
                        <li><a href="#">Games</a></li>
                        <li><a href="#">Videos</a></li>
                        <li><a href="#">News</a></li>
                    </ul>

                    <h3>shop</h3>
                    <ul>
                        <li><a href="#">Shop DC</a></li>
                        <li><a href="#">Shop DC Collectibles</a></li>
                    </ul>
                </div>
                <div class="footer-list-col">
                    <h3>dc</h3>
                    <ul>
                        <li><a href="#">Terms Of Use</a></li>
                        <li><a href="#">Privacy policy (New)</a></li>
                        <li><a href="#">Ad Choices</a></li>
                        <li><a href="#">Advertising</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Subscriptions</a></li>
                        <li><a href="#">Talent WorkShops</a></li>
                        <li><a href="#">CPSC Certificates</a></li>
                        <li><a href="#">Ratings</a></li>
                        <li><a href="#">Shop Help</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-list-col">
                    <h3>sites</h3>
                    <ul>
                        <li><a href="#">DC</a></li>
                        <li><a href="#">MAD Magazine</a></li>
                        <li><a href="#">DC Kids</a></li>
                        <li><a href="#">DC Universe</a></li>
                        <li><a href="#">DC Power Visa</a></li>
                    </ul>
                </div>
            </div>
            <figure>
                <img src="../../assets/img/dc-logo-bg.png" alt="DC logo">
            </figure>
        </div>
    </section>
</template>

<style lang="scss" scoped>
@use '../../assets/scss/partials/mixins' as *;
@use '../../assets/scss/partials/variables' as *;

#footer-top {
    @include background-reset;
    background-image: url('../../assets/img/footer-bg.jpg');
    color: #fff;
    overflow: hidden;

    .container {
        @include flex('between');
        padding: 30px 0;
        position: relative;

        .footer-list-container {
            @include flex();

            .footer-list-col {
                padding: 0 15px;

                h3 {
                    font-size: 20px;
                    text-transform: uppercase;
                }

                ul {
                    @include list-reset;
                    padding: 8px 0;

                    li a {
                        font-size: 12px;
                        font-weight: bold;
                        color: $list-grey;

                        &:hover {
                            text-decoration: underline;
                        }
                    }
                }
            }
        }

        figure {
            position: absolute;
            right: 0;
            top: -100px;
        }
    }
}
</style>