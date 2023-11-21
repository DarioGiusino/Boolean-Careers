<script>
export default {}
</script>

<template>
    <section id="footer-bottom">
        <div class="container">
            <button>sign-up now!</button>
            <div class="footer-links">
                <a href="#">follow us</a>
                <a href="#"><img src="../../assets/img/footer-facebook.png" alt="fb"></a>
                <a href="#"><img src="../../assets/img/footer-twitter.png" alt="tw"></a>
                <a href="#"><img src="../../assets/img/footer-youtube.png" alt="yt"></a>
                <a href="#"><img src="../../assets/img/footer-pinterest.png" alt="pt"></a>
                <a href="#"><img src="../../assets/img/footer-periscope.png" alt="ps"></a>
            </div>
        </div>
    </section>
</template>

<style lang="scss" scoped>
@use '../../assets/scss/partials/variables' as *;
@use '../../assets/scss/partials/mixins' as *;

#footer-bottom {
    background-color: $footer-grey;
    padding: 20px 0;
}

.container {
    @include flex('between', 'center');

    button {
        background-color: transparent;
        color: #fff;
        text-transform: uppercase;
        border: 3px solid $blue;
        padding: 10px 15px;
        font-weight: bold;
    }


    .footer-links {
        @include flex('around', 'center');

        a {
            text-decoration: none;
            padding: 0 5px;

            &:first-child {
                color: $blue;
                text-transform: uppercase;
                font-weight: bold;
                padding-right: 15px;
            }
        }
    }
}
</style>