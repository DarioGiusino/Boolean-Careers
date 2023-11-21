<script>
export default {
    name: 'BaseButton',
    props: { buttonLabel: String },
    emits: ['button-clicked']
}
</script>

<template>
    <!-- # generic button -->
    <button @click="$emit('button-clicked')">
        <!-- slot to add some icon [or not :) ] -->
        <slot></slot>
        {{ buttonLabel }}
    </button>
</template>

<style scoped lang="scss">
button {
    cursor: pointer;
    border: 0.5px solid transparent;
    border-radius: 30px;
    padding: 20px 30px;
}
</style>