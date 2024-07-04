import * as echarts from 'echarts';

let chart = echarts.init(document.getElementById('chart__container'));

chart.setOption({
    title: {
      text: 'ECharts Getting Started Example'
    },
    tooltip: {},
    xAxis: {
      data: ['shirt', 'cardigan', 'chiffon', 'pants', 'heels', 'socks']
    },
    yAxis: {},
    series: [
      {
        name: 'sales',
        type: 'bar',
        data: [5, 20, 36, 10, 10, 20]
      }
    ]
  });