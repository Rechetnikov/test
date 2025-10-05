<template>
    <p><input type="text" v-model="user_name" placeholder="Логин"></p>
    <p><input type="password" v-model="user_pass" placeholder="Пароль" /></p>
    <p><input type="email" v-model="user_email" placeholder="E-mail" /></p>

    <p className="error">{{ error }}</p>

    <p><button @click="sendData()">Отправить</button> <button @click="clearUsers()">Очистить</button></p>

    <div v-if="users.length == 0">Нет пользователей</div>

    <div v-for="(item, index) in users" :key="index">
        <h3>{{ item.name }}</h3>
        <p>{{ item.email }} - <b>{{item.pass}}</b></p>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                users: [],
                user_name: '',
                user_pass: '',
                user_email: '',
                error: ''
            }
        },
        methods: {
            sendData() {
                if (this.user_name == '') {
                    this.error = "Поле \"Логин\" не должно быть пустым!";

                    return;
                } else if (this.user_pass == '') {
                    this.error = "Поле \"Пароль\" не должно быть пустым!";

                    return;
                } else if (this.user_email == '') {
                    this.error = "Поле \"E-mail\" не должно быть пустым!";

                    return;
                }

                this.error = '';

                this.users.push({
                    name: this.user_name,
                    pass: this.user_pass,
                    email: this.user_email
                });
            },
            clearUsers() {
                this.users = [];
                this.error = '';
            }
        }
    };
</script>

<style scoped>
    p, div, button {
        font-family: Verdana;
    }
    .error {
        color: red;
    }
</style>
