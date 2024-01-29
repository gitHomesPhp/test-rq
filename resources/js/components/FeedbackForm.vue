<script setup>
import {ref} from "vue";
import axios from "axios";

const phone = ref('')
const name = ref('')
const text = ref('')

const send = async () => {
    const body = {
        phone: phone.value,
        name: name.value,
        text: text.value,
    }

    console.log(body)

    try {
        const resp = await axios({
            method: 'post',
            url: '/api/feedback',
            data: body
        })
        console.log(resp.data)

    } catch (e) {
        console.log(e.response.data.errors)
    }



}
</script>

<template>
    <form @submit.prevent="send" class="form">
        <input type="text" v-model="name" placeholder="Имя" class="form__field">
        <input type="tel" v-model="phone" placeholder="Телефон" class="form__field">
        <textarea v-model="text" placeholder="Текст" class="form__field">
            </textarea>
        <button type="submit" class="form__field">Отправить</button>
    </form>
    <div>{{name}}</div>
    <div>{{phone}}</div>
    <div>{{text}}</div>
</template>

<style scoped>
    .form {
        display: flex;
        flex-direction: column;
        row-gap: 15px;
        max-width: 500px;
        width: 500px;
        .form__field {
            padding: .5rem 1rem;
        }
    }
</style>
