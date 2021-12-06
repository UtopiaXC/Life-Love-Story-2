<template>
  <b-row
    v-if="$route.meta.breadcrumb || $route.meta.pageTitle"
    class="content-header"
  >

    <!-- Content Left -->
    <b-col
      class="content-header-left mb-2"
      cols="12"
      md="9"
    >
    </b-col>
  </b-row>
</template>

<script>
import {
  BBreadcrumb, BBreadcrumbItem, BRow, BCol, BDropdown, BDropdownItem, BButton,
} from 'bootstrap-vue'
import Ripple from 'vue-ripple-directive'

export default {
  directives: {
    Ripple,
  },
  components: {
    BBreadcrumb,
    BBreadcrumbItem,
    BRow,
    BCol,
    BDropdown,
    BDropdownItem,
    BButton,
  },
}
</script>
