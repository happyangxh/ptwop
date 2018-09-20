   // 基于准备好的dom，初始化echarts图表
   var myChart = echarts.init(document.getElementById('main')); 
        
   var option = {
title : {
   text: '借款项目报表',
   subtext: '2018-09',
   x:'center'
},
tooltip : {
   trigger: 'item',
   formatter: "{a} <br/>{b} : {c} ({d}%)"
},
legend: {
   orient : 'vertical',
   x : 'left',
   data:[]
},
toolbox: {
   show : false,
   feature : {
       mark : {show: true},
       dataView : {show: true, readOnly: false},
       magicType : {
           show: true, 
           type: ['pie', 'funnel'],
           option: {
               funnel: {
                   x: '25%',
                   width: '50%',
                   funnelAlign: 'left',
                   max: 1548
               }
           }
       },
       restore : {show: true},
       saveAsImage : {show: true}
   }
},
calculable : true,
series : [
   {
       name:'访问来源',
       type:'pie',
       radius : '55%',
       center: ['50%', '60%'],
       data:[]
   }
]
};
   
   // 为echarts对象加载数据 
   myChart.setOption(option); 