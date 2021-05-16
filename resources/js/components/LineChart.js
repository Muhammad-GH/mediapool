import { Line } from "vue-chartjs";

export default {
    extends: Line,
    props: ["lineData", "chartOptions"],
    mounted() {
        this.renderChart(this.lineData, this.chartOptions);
    }
};
