<template>
    <!-- ====== navbar ====== -->
  <div class=" container">
    <div class="my-6 flex gap-3 items-center p-3 ">
      <router-link to="/" class=" p-3 rounded-lg text-lg" active-class="bg-yellow-400">Home</router-link>
      <router-link to="/teacher" class=" p-3 rounded-lg text-lg" active-class="bg-yellow-400">Teacher</router-link>
      <router-link to="/student" class=" p-3 rounded-lg text-lg" active-class="bg-yellow-400">Student</router-link>
      <router-link to="/faculty" class=" p-3 rounded-lg text-lg " active-class="bg-yellow-400">Faculty</router-link>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped></style>
