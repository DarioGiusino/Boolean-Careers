<script>
import { footerLists } from '../../data';
export default {
    name: 'FooterNavLists',
    data() {
        return { footerLists }
    }
}
</script>

<template>
    <!-- lists -->
    <div class="row row-cols-2">
        <!-- list -->
        <div v-for="list in footerLists" :key="list.title" class="col">
            <h5 class="mb-4">{{ list.title }}</h5>
            <ul class="list-group">
                <li v-for="link in list.links" :key="link"><a href="#">{{ link }}</a></li>
            </ul>
        </div>
    </div>
</template>

<style scoped lang="scss">
ul {
    list-style-type: none;

    li {
        margin-bottom: 0.5rem;
        font-weight: 300;

        a:hover {
            text-decoration: underline;
        }
    }
}
</style>