<template>
    <input type="text" @input="insertData($event.target.value)" placeholder="Логин"><br />
    <input type="password" placeholder="Пароль" /><br />
    <input type="emil" placeholder="E-mail" />

    <p>{{user_name}}</p>
</template>

<script>
    export default {
        data() {
            return {
                user_name: '',
                user_pass: '',
                user_emil: ''
            }
        },
        methods: {
            insertData(value) {
                this.user_name = value
            }
        }
    };
</script>

<style scoped>

</style>
