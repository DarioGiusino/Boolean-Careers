<script>
export default {
    name: 'Search Bar',
    data: () => ({ searchWord: '' }),
    props: {
        placeholder: String,
        buttonLabel: String
    },
    emits: ['form-submit', 'writing']
}
</script>

<template>
    <!-- # Search Bar -->
    <form @submit.prevent="$emit('form-submit')">
        <input type="text" :placeholder="placeholder || 'Cerca...'" v-model.trim="searchWord"
            @keyup="$emit('writing', searchWord)">
        <button>{{ buttonLabel || '' }}<slot></slot></button>
    </form>
</template>

<style scoped lang="scss">
@use '../../assets/scss/partials/variables.scss' as *;

form {
    position: relative;

    input {
        width: 100%;
        padding: 12px 20px;
        height: 50px;
        border: none;
        border-radius: 25px;
        color: $text-grey-10;

        &:focus-visible {
            outline: unset;
        }
    }

    button {
        background-color: $bg-yellow;
        border: none;
        color: $text-white-1;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        position: absolute;
        right: 0;
        top: 50%;
        bottom: 50%;
        transform: translate(0, -50%);
    }
}
</style>