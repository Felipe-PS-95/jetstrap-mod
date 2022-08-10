<template>
  <app-layout title="Team Settings">
    <template #header>
      <h2 class="h4 font-weight-bold">
        Team Settings
      </h2>
    </template>

    <update-team-name-form :team="team" :permissions="permissions" />

    <team-member-manager :team="team"
                         :available-roles="availableRoles"
                         :user-permissions="permissions" />

    <template v-if="permissions.canDeleteTeam && ! team.personal_team">
      <jet-section-border />

      <delete-team-form :team="team" />
    </template>
  </app-layout>
</template>

<script>
import { defineComponent } from "vue"
import AppLayout from '@/Layouts/AppLayout.vue'
import DeleteTeamForm from '@/Pages/Teams/Partials/DeleteTeamForm.vue'
import JetSectionBorder from '@/Jetstream/SectionBorder.vue'
import TeamMemberManager from '@/Pages/Teams/Partials/TeamMemberManager.vue'
import UpdateTeamNameForm from '@/Pages/Teams/Partials/UpdateTeamNameForm.vue'

export default defineComponent({
  props: [
    'team',
    'availableRoles',
    'permissions',
  ],

  components: {
    AppLayout,
    DeleteTeamForm,
    JetSectionBorder,
    TeamMemberManager,
    UpdateTeamNameForm,
  },
})
</script>
