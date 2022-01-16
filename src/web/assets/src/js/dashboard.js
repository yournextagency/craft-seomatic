import ConfettiParty from '@/vue/ConfettiParty.vue';
import DashboardMultiRadialChart from '@/vue/DashboardMultiRadialChart.vue';
import DashboardRadialChart from '@/vue/DashboardRadialChart.vue';

// Create our vue instance
const vm = new Vue({
  el: "#cp-nav-content",
  components: {
    ConfettiParty,
    DashboardMultiRadialChart,
    DashboardRadialChart,
  },
});
