<script setup>
defineProps(["restaurant"])
</script>

<template>
  <div class=" justify-around ">
    <img class="w-72" src="https://media.istockphoto.com/id/936176018/fr/photo/tacos-de-boeuf-servis-avec-frites-dorées-de-français.jpg?s=612x612&w=0&k=20&c=qzwV8BwE8Le4R2pRxFl2XGK_8PU0b7VCiRmcIEesfrQ=" alt="">
    <h2>{{restaurant.name}}</h2>
    <p>{{ restaurant.description }} </p>
  </div>
</template>

<style scoped>

</style>