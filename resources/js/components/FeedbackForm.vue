<script setup>
import {ref} from "vue";
import axios from "axios";

const phone = ref('')
const name = ref('')
const text = ref('')

const errMessages = ref( {
    phone: [],
    name: [],
    text: [],
})

const send = async () => {
    const body = {
        phone: phone.value,
        name: name.value,
        text: text.value,
    }

    try {
        const resp = await axios({
            method: 'post',
            url: '/api/feedback',
            data: body
        })

    } catch (e) {
        errMessages.value = {
            phone: [],
            name: [],
            text: [],
        }
        const errors = e.response.data.errors;

        Object.keys(errors).forEach(function (key) {
            errMessages.value[key] = errors[key]
        })
    }
}
</script>

<template>
    <form @submit.prevent="send" class="form">
        <input type="text" v-model="name" placeholder="Имя" class="form__field">
        <div v-if="errMessages.name.length > 0" v-for="error in errMessages.name" class="danger">
            {{error}}
        </div>
        <input type="tel" v-model="phone" placeholder="Телефон" class="form__field">
        <div v-if="errMessages.phone.length > 0" v-for="error in errMessages.phone" class="danger">
            {{error}}
        </div>
        <textarea v-model="text" placeholder="Текст" class="form__field">
        </textarea>
        <div v-if="errMessages.text.length > 0" v-for="error in errMessages.text" class="danger">
            {{error}}
        </div>
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
