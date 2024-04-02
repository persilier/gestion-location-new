(function () {
  var n = {
      series: [
        { name: "Metric1", data: a(18, { min: 0, max: 90 }) },
        { name: "Metric2", data: a(18, { min: 0, max: 90 }) },
        { name: "Metric3", data: a(18, { min: 0, max: 90 }) },
        { name: "Metric4", data: a(18, { min: 0, max: 90 }) },
        { name: "Metric5", data: a(18, { min: 0, max: 90 }) },
        { name: "Metric6", data: a(18, { min: 0, max: 90 }) },
        { name: "Metric7", data: a(18, { min: 0, max: 90 }) },
        { name: "Metric8", data: a(18, { min: 0, max: 90 }) },
        { name: "Metric9", data: a(18, { min: 0, max: 90 }) },
      ],
      chart: { height: 350, type: "heatmap" },
      dataLabels: { enabled: !1 },
      colors: ["#845adf"],
      grid: { borderColor: "#f2f5f7" },
      title: {
        text: "HeatMap Chart (Single color)",
        align: "left",
        style: { fontSize: "13px", fontWeight: "bold", color: "#8c9097" },
      },
      xaxis: {
        labels: {
          show: !0,
          style: {
            colors: "#8c9097",
            fontSize: "11px",
            fontWeight: 600,
            cssClass: "apexcharts-xaxis-label",
          },
        },
      },
      yaxis: {
        labels: {
          show: !0,
          style: {
            colors: "#8c9097",
            fontSize: "11px",
            fontWeight: 600,
            cssClass: "apexcharts-yaxis-label",
          },
        },
      },
    },
    i = new ApexCharts(document.querySelector("#heatmap-basic"), n);
  i.render();
  var l = [
    { name: "W1", data: a(8, { min: 0, max: 90 }) },
    { name: "W2", data: a(8, { min: 0, max: 90 }) },
    { name: "W3", data: a(8, { min: 0, max: 90 }) },
    { name: "W4", data: a(8, { min: 0, max: 90 }) },
    { name: "W5", data: a(8, { min: 0, max: 90 }) },
    { name: "W6", data: a(8, { min: 0, max: 90 }) },
    { name: "W7", data: a(8, { min: 0, max: 90 }) },
    { name: "W8", data: a(8, { min: 0, max: 90 }) },
    { name: "W9", data: a(8, { min: 0, max: 90 }) },
    { name: "W10", data: a(8, { min: 0, max: 90 }) },
    { name: "W11", data: a(8, { min: 0, max: 90 }) },
    { name: "W12", data: a(8, { min: 0, max: 90 }) },
    { name: "W13", data: a(8, { min: 0, max: 90 }) },
    { name: "W14", data: a(8, { min: 0, max: 90 }) },
    { name: "W15", data: a(8, { min: 0, max: 90 }) },
  ];
  l.reverse();
  var x = [
    "#845adf",
    "#F27036",
    "#663F59",
    "#6A6E94",
    "#4E88B4",
    "#00A7C6",
    "#18D8D8",
    "#A9D794",
    "#46AF78",
    "#A93F55",
    "#8C5E58",
    "#2176FF",
    "#33A1FD",
    "#7A918D",
    "#BAFF29",
  ];
  x.reverse();
  var n = {
      series: l,
      chart: { height: 350, type: "heatmap" },
      dataLabels: { enabled: !1 },
      colors: x,
      xaxis: {
        type: "category",
        categories: [
          "10:00",
          "10:30",
          "11:00",
          "11:30",
          "12:00",
          "12:30",
          "01:00",
          "01:30",
        ],
      },
      title: {
        text: "HeatMap Chart (Different color shades for each series)",
        align: "left",
        style: { fontSize: "13px", fontWeight: "bold", color: "#8c9097" },
      },
      grid: { padding: { right: 20 }, borderColor: "#f2f5f7" },
      xaxis: {
        labels: {
          show: !0,
          style: {
            colors: "#8c9097",
            fontSize: "11px",
            fontWeight: 600,
            cssClass: "apexcharts-xaxis-label",
          },
        },
      },
      yaxis: {
        labels: {
          show: !0,
          style: {
            colors: "#8c9097",
            fontSize: "11px",
            fontWeight: 600,
            cssClass: "apexcharts-yaxis-label",
          },
        },
      },
    },
    i = new ApexCharts(document.querySelector("#heatmap-multiseries"), n);
  i.render();
  function a(m, e) {
    for (var t = 0, r = []; t < m; ) {
      var o = (t + 1).toString(),
        s = Math.floor(Math.random() * (e.max - e.min + 1)) + e.min;
      r.push({ x: o, y: s }), t++;
    }
    return r;
  }
  var n = {
      series: [
        { name: "Jan", data: a(20, { min: -30, max: 55 }) },
        { name: "Feb", data: a(20, { min: -30, max: 55 }) },
        { name: "Mar", data: a(20, { min: -30, max: 55 }) },
        { name: "Apr", data: a(20, { min: -30, max: 55 }) },
        { name: "May", data: a(20, { min: -30, max: 55 }) },
        { name: "Jun", data: a(20, { min: -30, max: 55 }) },
        { name: "Jul", data: a(20, { min: -30, max: 55 }) },
        { name: "Aug", data: a(20, { min: -30, max: 55 }) },
        { name: "Sep", data: a(20, { min: -30, max: 55 }) },
      ],
      chart: { height: 350, type: "heatmap" },
      plotOptions: {
        heatmap: {
          shadeIntensity: 0.5,
          radius: 0,
          useFillColorAsStroke: !0,
          colorScale: {
            ranges: [
              { from: -30, to: 5, name: "low", color: "#845adf" },
              { from: 6, to: 20, name: "medium", color: "#23b7e5" },
              { from: 21, to: 45, name: "high", color: "#f5b849" },
              { from: 46, to: 55, name: "extreme", color: "#49b6f5" },
            ],
          },
        },
      },
      dataLabels: { enabled: !1 },
      grid: { borderColor: "" },
      stroke: { width: 1 },
      title: {
        text: "HeatMap Chart with Color Range",
        align: "left",
        style: { fontSize: "13px", fontWeight: "bold", color: "#8c9097" },
      },
      xaxis: {
        labels: {
          show: !0,
          style: {
            colors: "#8c9097",
            fontSize: "11px",
            fontWeight: 600,
            cssClass: "apexcharts-xaxis-label",
          },
        },
      },
      yaxis: {
        labels: {
          show: !0,
          style: {
            colors: "#8c9097",
            fontSize: "11px",
            fontWeight: 600,
            cssClass: "apexcharts-yaxis-label",
          },
        },
      },
    },
    i = new ApexCharts(document.querySelector("#heatmap-colorrange"), n);
  i.render();
  var n = {
      series: [
        { name: "Metric1", data: a(20, { min: 0, max: 90 }) },
        { name: "Metric2", data: a(20, { min: 0, max: 90 }) },
        { name: "Metric3", data: a(20, { min: 0, max: 90 }) },
        { name: "Metric4", data: a(20, { min: 0, max: 90 }) },
        { name: "Metric5", data: a(20, { min: 0, max: 90 }) },
        { name: "Metric6", data: a(20, { min: 0, max: 90 }) },
        { name: "Metric7", data: a(20, { min: 0, max: 90 }) },
        { name: "Metric8", data: a(20, { min: 0, max: 90 }) },
        { name: "Metric8", data: a(20, { min: 0, max: 90 }) },
      ],
      chart: { height: 350, type: "heatmap" },
      stroke: { width: 0 },
      plotOptions: {
        heatmap: {
          radius: 30,
          enableShades: !1,
          colorScale: {
            ranges: [
              { from: 0, to: 50, color: "#845adf" },
              { from: 51, to: 100, color: "#23b7e5" },
            ],
          },
        },
      },
      grid: { borderColor: "#f2f5f7" },
      dataLabels: { enabled: !0, style: { colors: ["#fff"] } },
      xaxis: {
        type: "category",
        labels: {
          show: !0,
          style: {
            colors: "#8c9097",
            fontSize: "11px",
            fontWeight: 600,
            cssClass: "apexcharts-xaxis-label",
          },
        },
      },
      yaxis: {
        labels: {
          show: !0,
          style: {
            colors: "#8c9097",
            fontSize: "11px",
            fontWeight: 600,
            cssClass: "apexcharts-yaxis-label",
          },
        },
      },
      title: {
        text: "Rounded (Range without Shades)",
        align: "left",
        style: { fontSize: "13px", fontWeight: "bold", color: "#8c9097" },
      },
    },
    i = new ApexCharts(document.querySelector("#heatmap-range"), n);
  i.render();
})();
