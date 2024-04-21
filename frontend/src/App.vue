<template>
  <div>
    <Header></Header>
    <div class="container m-auto">
      <navbar></navbar>
      
      <!-- <Suspense> -->
        <router-view></router-view>
      <!-- </Suspense> -->

    </div>
  </div>
</template>

<script setup>
import Header from '@/components/Header.vue'
import Navbar from '@/components/Navbar.vue'

  
</script>
