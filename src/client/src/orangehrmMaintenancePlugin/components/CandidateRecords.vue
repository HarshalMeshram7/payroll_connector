<!--
/**
 * OrangeHRM is a comprehensive Human Resource Management (HRM) System that captures
 * all the essential functionalities required for any enterprise.
 * Copyright (C) 2006 OrangeHRM Inc., http://www.orangehrm.com
 *
 * OrangeHRM is free software; you can redistribute it and/or modify it under the terms of
 * the GNU General Public License as published by the Free Software Foundation; either
 * version 2 of the License, or (at your option) any later version.
 *
 * OrangeHRM is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with this program;
 * if not, write to the Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor,
 * Boston, MA  02110-1301, USA
 */
 -->

<template>
  <div class="orangehrm-card-container">
    <oxd-text tag="h6" class="orangehrm-main-title">
      {{ $t('maintenance.purge_candidate_records') }}
    </oxd-text>
    <oxd-divider />
    <oxd-form @submit-valid="$emit('search', vacancy.id)">
      <oxd-form-row>
        <oxd-grid :cols="3" class="orangehrm-full-width-grid">
          <oxd-grid-item>
            <vacancy-autocomplete
              v-model="vacancy"
              :rules="rules.vacancy"
              required
            />
          </oxd-grid-item>
        </oxd-grid>
      </oxd-form-row>
      <oxd-divider />
      <oxd-form-actions>
        <required-text />
        <oxd-button display-type="secondary"  @click="redirectToGoogle" :label="$t('general.go to google')"/>
        <oxd-button
          display-type="secondary"
          :label="$t('general.search')"
          type="submit"
         />
      </oxd-form-actions>
    </oxd-form>
  </div>
</template>

<script>
import {required, validSelection} from '@/core/util/validation/rules';
import RequiredText from '@/core/components/labels/RequiredText';
import VacancyAutocomplete from '@/orangehrmMaintenancePlugin/components/VacancyAutocomplete';

export default {
  name: 'CandidateRecords',
  components: {
    'required-text': RequiredText,
    'vacancy-autocomplete': VacancyAutocomplete,
  },
  emits: ['search'],
  data() {
    return {
      vacancy: null,
      rules: {
        vacancy: [required, validSelection],
      },
    };
  },
  redirectToGoogle() {
      // Redirect to Google when the button is clicked
      window.location.href = 'https://www.google.com/';
    },
};
</script>
