<template>
  <p class="clearfix mb-0">
    <span class="float-md-left d-block d-md-inline-block mt-25">
      Copyright  © {{ new Date().getFullYear() }}
      <b-link
        class="ml-25"
        href="https://www.utopiaxc.cn/"
        target="_blank"
      >UtopiaXC</b-link>
      <span class="d-none d-sm-inline-block">, All rights Reserved</span>
    </span>

    <span class="float-md-right d-none d-md-block">Powered By
        <b-link
            class="ml-25"
            href="https://github.com/UtopiaXC/Life-Love-Story-2"
            target="_blank"
        >Life&Love&Story</b-link>
    </span>
  </p>
</template>

<script>
import { BLink } from 'bootstrap-vue'

export default {
  components: {
    BLink,
  },
}
</script>
