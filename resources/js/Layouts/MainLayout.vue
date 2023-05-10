<template>
  <!-- <Link href="/">Main Page</Link>&nbsp;-->
  <!-- <Link href="/hello">Show Page</Link>-->
  <!-- <div>The page with time {{ timer }}</div> -->
  <div v-if="flashSuccess" class="success">
    {{ flashsuccess }}
  </div>
  <slot>Default</slot>
</template>

<script setup>
import { computed } from 'vue'
// import { Link, usePage } from '@inertiajs/inertia-vue3'
import { usePage } from '@inertiajs/inertia-vue3'

//const x = ref(value: 0)
//const y = computed(() => x.value * 2)

// page.props.value.flash.successful
const page = usePage()
const flashSuccess = computed(
  () => page.props.value.flash.success,
)
// import { ref } from 'vue'
//const timer = ref(0)
//setInterval(() => timer.value++, 1000)
</script>

<style scoped>
  .success {
    background-color: green;
    color: white;
  }
</style>