<template>
  <button type="submit" style="min-width: 0" @click="$emit('clicked')" class="dropdown-item" v-if="as == 'button'">
    <slot></slot>
  </button>

  <Link style="min-width: 0" :href="href" class="dropdown-item" v-else>
    <slot></slot>
  </Link>
</template>

<script>
import { defineComponent} from "vue"
import { Link } from '@inertiajs/inertia-vue3'

export default defineComponent({
  components: {
    Link,
  },
  emits: ['clicked'],
  props: ['href', 'as']
})
</script>
