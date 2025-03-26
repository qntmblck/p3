<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue'
import { router } from '@inertiajs/vue3'

const solicitarRol = (rol) => {
    router.post(route('roles.solicitar'), { rol })
}
</script>

<template>
  <div class="flex items-center justify-center min-h-[70vh]">
    <div class="bg-white rounded-lg shadow-lg p-8 max-w-md w-full text-center">
      <ApplicationLogo class="mx-auto h-16 w-auto mb-4" />
      <h1 class="text-2xl font-bold text-gray-800 mb-2">
        ¡Bienvenido a Transportes SCAR!
      </h1>
      <p class="text-gray-600 mb-6">
        Selecciona el tipo de cuenta con la que deseas continuar:
      </p>

      <div class="space-y-4">
        <button
          @click="solicitarRol('Conductor')"
          class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 rounded-md"
        >
          Soy Conductor
        </button>
        <button
          @click="solicitarRol('Cliente')"
          class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 rounded-md"
        >
          Soy Cliente
        </button>
        <button
          @click="solicitarRol('Transportista')"
          class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 rounded-md"
        >
          Soy Transportista
        </button>
      </div>
    </div>
  </div>
</template>
