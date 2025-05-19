<template>
    <div class="p-6">
      <h1 class="text-2xl font-bold mb-4">Каталог ножей</h1>
  
      <div v-if="knives.length" class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div
          v-for="knife in knives"
          :key="knife.id"
          class="border rounded-xl shadow p-4 bg-white"
        >
          <h2 class="text-xl font-semibold mb-2">{{ knife.name }}</h2>
          <img v-if="knife.image" :src="knife.image" class="w-full h-48 object-cover mb-2 rounded" />
          <p class="text-gray-600 mb-2">{{ knife.description }}</p>
          <p class="font-bold text-lg text-green-700">{{ knife.price }} ₽</p>
        </div>
      </div>
  
      <p v-else class="text-gray-500">Нет доступных ножей.</p>
    </div>
  </template>
  
  <script setup>
  defineProps({
    knives: Array
  });
  </script>
  
  