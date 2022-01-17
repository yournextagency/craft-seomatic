<template>
  <div>
    <span
      :style="{ backgroundColor: rowData.setup['color'] }"
      :title="'Setup Grade: ' + rowData.setup['name']"
      class="status"
    />
    <a
      :href="rowData.contentSeoUrl"
      :title="linkTitle"
      class="go"
    >{{ rowData.sourceName }}</a>
  </div>
</template>

<script>
export default {
  props: {
    rowData: {
      type: Object,
      required: true
    },
    rowIndex: {
      type: Number
    }
  },
  computed: {
    linkTitle: function () {
      let title = '';

      title += this.rowData.sourceName;

      return title;
    }
  }
}
</script>
