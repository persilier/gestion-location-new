var e=document.getElementById("performanceReport");if(e!==null){e.innerHTML="";var o={series:[{name:"Designing",data:[44,55,41,67,22,43,44,55,41,67,22,43]},{name:"Development",data:[13,23,20,8,13,27,13,23,20,8,13,27]},{name:"SEO",data:[11,17,15,15,21,14,11,17,15,15,21,14]}],chart:{type:"bar",height:310,stacked:!0,toolbar:{show:!0},zoom:{enabled:!0}},grid:{borderColor:"#f1f1f1",strokeDashArray:3},responsive:[{breakpoint:480,options:{legend:{position:"bottom",offsetX:-10,offsetY:0}}}],colors:["rgba(132, 90, 223, 1)","rgba(132, 90, 223, 0.5)","rgba(132, 90, 223, 0.2)"],legend:{show:!1,position:"top"},plotOptions:{bar:{columnWidth:"20%"}},dataLabels:{enabled:!1},xaxis:{categories:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"]},fill:{opacity:1}},t=new ApexCharts(document.querySelector("#performanceReport"),o);t.render()}var e=document.getElementById("jobs-summary");if(e!==null){e.innerHTML="";var o={series:[1754,544,682,263],labels:["Published","Private","Closed","On Hold"],chart:{height:250,type:"donut"},dataLabels:{enabled:!1},legend:{show:!1},stroke:{show:!0,curve:"smooth",lineCap:"round",colors:"#fff",width:0,dashArray:0},plotOptions:{pie:{expandOnClick:!1,donut:{size:"70%",background:"transparent",labels:{show:!0,name:{show:!0,fontSize:"20px",color:"#495057",offsetY:-4},value:{show:!0,fontSize:"18px",color:void 0,offsetY:8,formatter:function(r){return r+"%"}},total:{show:!0,showAlways:!0,label:"Total",fontSize:"22px",fontWeight:600,color:"#495057"}}}}},colors:["rgb(132, 90, 223)","rgba(132, 90, 223, 0.7)","rgba(132, 90, 223,0.4)","rgb(243, 246, 248)"]},a=new ApexCharts(document.querySelector("#jobs-summary"),o);a.render()}
