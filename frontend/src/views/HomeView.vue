<template>
  <div class="flex justify-center flex-col">
    <img src="../assets/images/image.png" alt="image" class="h-[507px]" />
    <main class="my-6">
      <p class="text-lg">Teacher</p>
      <div class="grid grid-cols-2 md:grid-cols-5 gap-6 my-6">
        <div v-for="teacher in teachers" :key="teacher.id">
          <div
            class="card shadow-sm flex flex-col justify-center items-center h-[150px] bg-gray-50"
          >
            <img :src="teacher.image" alt="" />
            <p>Name: {{ teacher.name }}</p>
          </div>
        </div>
      </div>
    </main>
  </div>
</template>

<script setup>
import { onMounted, ref } from "vue";
import axios from "axios";

const teachers = ref([]);

const getTeachers = async () => {
  try {
    const response = await axios.get("/api/teachers");
    console.log('hello teacher', response);
    teachers.value = response.data.teachers; // Update teachers ref with the retrieved data
  } catch (error) {
    console.error(error);
  }
};

onMounted(getTeachers);
</script>
<!-- <script>
export default {
  data() {
    return {
      teachers: [],
    };
  },
  created() {
    fetch("api/teachers")
      .then((response) => response.json())
      .then((data) => {
        console.log(data); // Log the parsed JSON data to the console
        // this.teachers = data.data;
      })
      .catch((error) => {
        // console.error("Error:", error);
      });
  },
  methods: {},
};
</script> -->
