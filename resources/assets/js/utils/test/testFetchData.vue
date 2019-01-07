<template></template>

<script>
import axios from 'axios';
export default {
  data: () => {
    return {
      fetchData: []
    }
  },
  methods: {
    fetchItems() {
        axios.get('/events').then(response => {
            this.fetchData = response.data;
      }).catch((response) => {
          console.log('failed');
      });
    }
  }
}
</script>