<template>

<div class="flex justify-between bg-gray-500 mx-w-full">
  <div class="bg-blue-300 ">
<h1>Title</h1>

  </div>
  <div class="bg-white">Search</div>
  <div class="  bg-yellow-400 flex justify-itmes-center">
  <div>
     <button type="button" @click= "logout" class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">LogOut</button>
     </div>
  <div>
    
  </div>
  </div>
</div>
 
</template>

<script setup>
import { useRouter } from 'vue-router'


const router = useRouter()

    const logout = () => {
        localStorage.removeItem('token');
        router.push('/')
    }
</script>

<style>
@vite('css/app.css');
</style>