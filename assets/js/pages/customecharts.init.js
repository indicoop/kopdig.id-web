function getChartColorsArray(e) {
    if (null !== document.getElementById(e)) {
        var e = document.getElementById(e).getAttribute("data-colors");
        return (e = JSON.parse(e)).map(function (e) {
            var t = e.replace(" ", "");
            if (-1 === t.indexOf(",")) {
                var a = getComputedStyle(document.documentElement).getPropertyValue(t);
                return a || t
            }
            e = e.split(",");
            return 2 != e.length ? t : "rgba(" + getComputedStyle(document.documentElement).getPropertyValue(e[0]) + "," + e[1] + ")"
        })
    }
}
var areachartBasicColors = getChartColorsArray("area_chart_basic"),
    options = {
        series: [{
            name: "STOCK ABC",
            data: series.monthDataSeries1.prices
        }],
        chart: {
            toolbar: {
                show: false
              },
            type: "area",
            height: 100,
            zoom: {
                enabled: !1
            }
        },
        dataLabels: {
            enabled: !1
        },
        stroke: {
            curve: "straight"
        },
        
        labels: series.monthDataSeries1.dates,
        xaxis: {
            labels: {
                show: false,
                },
            type: "datetime"
        },
        yaxis: {
            labels: {
                show: false,
                },
            opposite: !0
        },
        legend: {
            show: false,
            horizontalAlign: "left"
        },
        colors: areachartBasicColors
    },
    chart = new ApexCharts(document.querySelector("#area_chart_basic"), options);
chart.render();
var areachartBasicColors = getChartColorsArray("area_chart_basic2"),
    options = {
        series: [{
            name: "STOCK ABC",
            data: series.monthDataSeries1.prices
        }],
        chart: {
            toolbar: {
                show: false
              },
            type: "area",
            height: 100,
            zoom: {
                enabled: !1
            }
        },
        dataLabels: {
            enabled: !1
        },
        stroke: {
            curve: "straight"
        },
        
        labels: series.monthDataSeries1.dates,
        xaxis: {
            labels: {
                show: false,
                },
            type: "datetime"
        },
        yaxis: {
            labels: {
                show: false,
                },
            opposite: !0
        },
        legend: {
            show: false,
            horizontalAlign: "left"
        },
        colors: areachartBasicColors
    },
    chart = new ApexCharts(document.querySelector("#area_chart_basic2"), options);
chart.render();
var areachartBasicColors = getChartColorsArray("area_chart_basic3"),
    options = {
        series: [{
            name: "STOCK ABC",
            data: series.monthDataSeries1.prices
        }],
        chart: {
            toolbar: {
                show: false
              },
            type: "area",
            height: 100,
            zoom: {
                enabled: !1
            }
        },
        dataLabels: {
            enabled: !1
        },
        stroke: {
            curve: "straight"
        },
        
        labels: series.monthDataSeries1.dates,
        xaxis: {
            labels: {
                show: false,
                },
            type: "datetime"
        },
        yaxis: {
            labels: {
                show: false,
                },
            opposite: !0
        },
        legend: {
            show: false,
            horizontalAlign: "left"
        },
        colors: areachartBasicColors
    },
    chart = new ApexCharts(document.querySelector("#area_chart_basic3"), options);
chart.render();
