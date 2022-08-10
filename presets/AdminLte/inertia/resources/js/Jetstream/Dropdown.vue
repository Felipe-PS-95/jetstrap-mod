<template>
  <li :class="classes">
    <a :id="id" href="#" class="nav-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      <slot name="trigger"></slot>
    </a>

    <div class="dropdown-menu dropdown-menu-right animate slideIn" :aria-labelledby="id">
      <slot name="content"></slot>
    </div>
  </li>
</template>

<script>
  import { defineComponent} from "vue"

  export default defineComponent({
    props: {
      id: {
        type: String,
        required: true
      },

      classes: {
        type: String,
        default: 'nav-item dropdown'
      }
    }
  })
</script>
