<script>
export default {
    name: 'AppNavbar'
}
</script>

<template>
    <nav class="navbar navbar-expand-lg bg-body-tertiary mb-5">
        <div class="container-fluid">
            <router-link to="/" class="navbar-brand">Portfolio</router-link>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <router-link to="/" class="nav-link">Home</router-link>
                    </li>
                    <li class="nav-item">
                        <!-- <router-link :to="{ name: contactPage }" class="nav-link">Concact me</router-link> -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script></script>