<script>
import { members } from '../data/members'
export default {
    name: "TeamPage",
    data() {
        return {
            members
        }
    }
};
</script>
    
<template>
    <!--! TEAM -->
    <div class="container">
        <h2 class="my-4">Il Team</h2>
        <div class="member-card-wrap row gy-3 mb-5">
            <div v-for="member in members" :key="member.name" class="col-12 col-sm-6 col-md-4 col-xl-2">
                <div class="member-card shadow" :style="`background-image: url(${member.profile_pic}) `">
                    <div class="member-card-content">
                        <h5 class="member-card-title m-0">{{ member.name }}</h5>
                        <p class="member-card-sub-title my-2">{{ member.role }}</p>
                        <!-- SOCIALS -->
                        <div class="member-socials">
                            <a :href="`${member.git_hub_link}`" target="_blank"><i class="fa-brands fa-github"></i></a>
                            <a :href="`${member.linkedin_link}`" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                            <!-- <a :href="`${member.git_hub_link}`"><i class="fa-brands fa-instagram"></i></a> -->
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-start my-4">
            <router-link :to="{ name: 'home', params: { component: HomePage } }">
                <button class="btn btn-secondary">Torna Indietro</button>
            </router-link>
        </div>
    </div>
</template>
    
<style scoped lang="scss">
@use '../assets/scss/partials/variables' as *;

// GENERAL


.member-card {
    height: 300px;

    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    overflow: hidden;

    position: relative;
    transition: 500ms ease all;

    border-radius: 10px;



    &:hover {
        transform: scale(1.01);
    }



    .member-card-content {
        justify-content: flex-end;
        color: white;
        padding: 10px;

        position: absolute;
        bottom: 0;
        transform: translateY(38%);
        transition: 500ms ease all;


        p {
            font-size: 12px;
            text-shadow: 1px 1px black;

        }

        h5 {
            text-shadow: 1px 1px black;

        }

        .member-socials {
            display: flex;
            column-gap: 8px;
            cursor: pointer;



            .fa-brands {

                background-color: white;
                color: $primary;
                width: 30px;
                height: 30px;

                display: flex;
                justify-content: center;
                align-items: center;

                text-decoration: none;
                border-radius: 50%;
                transition: 500ms ease all;


                &:hover {
                    background-color: $primary;
                    color: white;
                }
            }
        }
    }


}



.member-card:hover .member-card-content {
    transform: translateY(0);

}
</style>
