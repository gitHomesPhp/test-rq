<script setup>



import FeedbackForm from "../components/FeedbackForm.vue";
</script>

<template>
    <section class="page feedback-page">
        <feedback-form />
    </section>
</template>

<style>
.page {
    width: 100vw;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
</style>
