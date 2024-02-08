<template>

<div>
    <Base/>
    <div class="bg-yellow-100 max-w-full">
        <h1>Slide Show</h1>
        <button type="button" @click= "create" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Light</button>
    </div>
</div>
</template>

<script setup>
 import Base from '../admin/layouts/base.vue'
 import { useRouter } from 'vue-router'


const router = useRouter()
const create =() =>{
          router.push('/create')
}
</script>

<style>
@vite('/css/app.css');
</style>