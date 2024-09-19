<script setup>
import RestaurantCard from "@/components/RestaurantCard.vue";
import axios from "axios";

const restaurants = [
  { name: "O'Tacos", description: "Le tacos" },
  { name: "La ruche", description: "La ruche de troyes" },
  { name: "Burger King", description: "Le BK" }
]



const getRestaurant = async () => {
  const response = await axios.get('http://localhost:8215/restaurants');
  restaurants.value = response.data;

  console.log(response);
}
</script>

<template>


  <div class="flex flex-wrap gap-4">
<RestaurantCard v-for="restaurant in restaurants" :restaurant="restaurant"/>
  </div>
</template>
