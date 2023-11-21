<script>
export default {}
</script>

<template>
    <section>
        <div class="container">
            <ul>
                <li>
                    <a href="#">
                        <img src="../assets/img/buy-comics-digital-comics.png" alt="digital">
                        <p>DIGITAL COMICS</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="../assets/img/buy-comics-merchandise.png" alt="merch">
                        <p>DC MERCHANDISE</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="../assets/img/buy-comics-subscriptions.png" alt="subs">
                        <p>SUBSCRIPTION</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="../assets/img/buy-comics-shop-locator.png" alt="locator">
                        <p>COMIC SHOP LOCATOR</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="../assets/img/buy-dc-power-visa.svg" alt="visa">
                        <p>DC POWER VISA</p>
                    </a>
                </li>
            </ul>
        </div>
    </section>
</template>

<style lang="scss" scoped>
@use '../assets/scss/partials/variables' as *;
@use '../assets/scss/partials/mixins' as *;

section {
    height: 130px;
    background-color: $blue;
    color: #fff;
    padding: 30px 0;

    .container {
        @include flex('center', 'center');
        height: 100%;
    }

    ul {
        @include list-reset;
        @include flex('center', 'center');
        height: 100%;

        li a {
            @include flex('start', 'center');
            color: #fff;
            padding-right: 20px;
            font-size: 13px;

            img {
                width: 30%;
                padding-right: 10px;
            }
        }
    }
}
</style>