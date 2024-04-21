import axios from "axios";
import { defineStore } from 'pinia'

export const useTeacherStore = defineStore('teachers', {
  state: () => {
    return {
       teachers:[]
      }
  },
  // could also be defined as
  // state: () => ({ count: 0 })
  actions: {
    async getTeachers() {
      try {
        const res = await axios.get('api/teachers')
        console.log(res.data), 'hkkoi';

      }
      catch (e){}
    },
  },
})