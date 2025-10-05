<template>
    <h3>{{ info }}</h3>
    <p>{{ some_info }}</p>
    <button
        type="button"
        @click="userData('Очищено!')">
        Отправить
    </button>
</template>

<script>
    export default {
        data() {
            return {
                info: 'Title!',
                some_info: 'Текст'
            }
        },
        methods: {
            userData(world = 'Default') {
                this.some_info = world;
            }
        }
    };
</script>

<style scoped>
    p {
        color: gray;
    }
</style>
