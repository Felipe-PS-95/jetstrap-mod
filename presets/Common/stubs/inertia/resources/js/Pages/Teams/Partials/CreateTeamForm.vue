<template>
    <jet-form-section @submitted="createTeam">
        <template #title>
            Team Details
        </template>

        <template #description>
            Create a new team to collaborate with others on projects.
        </template>

        <template #form>
            <div class="mb-3">
                <jet-label value="Team Owner" />

                <div class="d-flex mt-2">
                    <img class="rounded-circle" width="48" :src="$page.props.user.profile_photo_url" :alt="$page.props.user.name">

                    <div class="ms-2">
                        <div>{{ $page.props.user.name }}</div>
                        <div class="text-muted">{{ $page.props.user.email }}</div>
                    </div>
                </div>
            </div>

            <div class="w-75">
              <div class="form-group">
                <jet-label for="name" value="Team Name" />
                <jet-input id="name" type="text" v-model="form.name" autofocus
                           :class="{ 'is-invalid': form.errors.name }" />
                <jet-input-error :message="form.errors.name" />
              </div>
            </div>
        </template>

        <template #actions>
            <jet-button :class="{ 'text-white-50': form.processing }" :disabled="form.processing">
                Save
            </jet-button>
        </template>
    </jet-form-section>
</template>

<script>
import { defineComponent } from 'vue'
import JetActionMessage from '@/Jetstream/ActionMessage.vue'
import JetButton from '@/Jetstream/Button.vue'
import JetFormSection from '@/Jetstream/FormSection.vue'
import JetInput from '@/Jetstream/Input.vue'
import JetInputError from '@/Jetstream/InputError.vue'
import JetLabel from '@/Jetstream/Label.vue'

export default defineComponent({
  components: {
    JetActionMessage,
    JetButton,
    JetFormSection,
    JetInput,
    JetInputError,
    JetLabel,
  },

  data() {
    return {
      form: this.$inertia.form({
        name: '',
      })
    }
  },

  methods: {
    createTeam() {
      this.form.post(route('teams.store'), {
        errorBag: 'createTeam',
        preserveScroll: true
      });
    },
  },
})
</script>
