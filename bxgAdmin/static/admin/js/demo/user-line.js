$(function () {
    // 用户增长趋势分析----线性图
    var lineChart = echarts.init(document.getElementById("echarts-line-chart"));
    var dataNum=[0, 5, 8, 3, 6, 10, 9,15,2,6];
    var date = ['10-01','10-02','10-03','10-04','10-05','10-06','10-07','10-08','10-09','10-10'];
    var lineoption = {
        tooltip : {
            trigger: 'axis'
        },
        grid:{
            x:40
        },
        
        xAxis : [
            {
                type : 'category',
                boundaryGap : false,
                data : date
            }
        ],
        yAxis : [
            {
                type : 'value',
                axisLabel : {
                    formatter: '{value} 人'
                }
            }
        ],
        toolbox:{
            show:true,
            itemSize: 12,
            feature:{
                saveAsImage:{
                    type: 'jpg',
                    name: '用户增长趋势图',
                    backgroundColor: '#fff',
                    excludeComponents: ['toolbox'],
                    show: true,
                    title: '保存'
                }
            }
        },
        series : [
            {
                name:'增长人数',
                type:'line',
                lineStyle:{
                    normal:{
                        color:'#1ab394'
                    }
                },
                data: dataNum
            }
        ]
    };
    lineChart.setOption(lineoption);
    $(window).resize(lineChart.resize);

    // 用户年龄分布
    var ageChart = echarts.init(document.getElementById('user-age'));
    var ageNum = [
                    {value:10, name:'18岁以下'},
                    {value:60, name:'18-25岁'},
                    {value:30, name:'26-35岁'},
                    {value:20, name:'35岁以上'}
                ];
    var ageoption = {
        title : {
            text: '用户年龄分布',
            x:'center',
            height:40,
            textStyle:{
                color:'#888',
                fontSize:14
            }
        },
        toolbox:{
            show:true,
            itemSize: 10,
            orient: 'horizontal',
            showTitle: true,
            feature:{
                saveAsImage:{
                    type: 'jpg',
                    name: '用户年龄分布',
                    backgroundColor: '#fff',
                    excludeComponents: ['toolbox'],
                    show: true,
                    title: '保存'
                }
            }
        },
        series : [
            {
                name: '访问来源',
                type: 'pie',
                radius : '55%',
                
                label: {
                    normal: {
                        formatter: '{b}：{c} {per|{d}%}',
                        rich:{
                            per: {
                                color: '#eee',
                                backgroundColor: '#334455',
                                padding: [2, 4],
                                borderRadius: 2
                            }
                        }
                        
                    }
                },
                data:ageNum
            }
        ]
    };
    ageChart.setOption(ageoption);
    $(window).resize(ageChart.resize);
    // 用户来源分布
    var sourceCharts = echarts.init(document.getElementById('user-source'));
    var sourceNum = [
                    {value:10, name:'18岁以下'},
                    {value:60, name:'18-25岁'},
                    {value:30, name:'26-35岁'},
                    {value:20, name:'35岁以上'}
                ];
    var option = {
        title : {
            text: '用户来源分布',
            x:'center',
            height:40,
            textStyle:{
                color:'#888',
                fontSize:14
            }
        },
        toolbox:{
            show:true,
            itemSize: 10,
            orient: 'horizontal',
            showTitle: true,
            feature:{
                saveAsImage:{
                    type: 'jpg',
                    name: '用户来源分布',
                    backgroundColor: '#fff',
                    excludeComponents: ['toolbox'],
                    show: true,
                    title: '保存'
                }
            }
        },
        series : [
            {
                name: '访问来源',
                type: 'pie',
                radius : '55%',
                
                label: {
                    normal: {
                        formatter: '{b}：{c} {per|{d}%}',
                        rich:{
                            per: {
                                color: '#eee',
                                backgroundColor: '#334455',
                                padding: [2, 4],
                                borderRadius: 2
                            }
                        }
                        
                    }
                },
                data:sourceNum
            }
        ]
    };
    sourceCharts.setOption(option);
    $(window).resize(sourceCharts.resize);

    // 用户偏好分布
    var hobbyCharts = echarts.init(document.getElementById('user-hobby'));
    var hobbyNum = [
                    {value:10, name:'服装鞋包'},
                    {value:60, name:'生活家居'},
                    {value:30, name:'电子电器'},
                    {value:20, name:'宠物用品'},
                    {value:20, name:'母婴生活'}
                ];
    var option = {
        title : {
            text: '用户来源分布',
            x:'center',
            height:40,
            textStyle:{
                color:'#888',
                fontSize:14
            }
        },
        toolbox:{
            show:true,
            itemSize: 10,
            orient: 'horizontal',
            showTitle: true,
            feature:{
                saveAsImage:{
                    type: 'jpg',
                    name: '用户来源分布',
                    backgroundColor: '#fff',
                    excludeComponents: ['toolbox'],
                    show: true,
                    title: '保存'
                }
            }
        },
        series : [
            {
                name: '访问来源',
                type: 'pie',
                radius : '55%',
                
                label: {
                    normal: {
                        formatter: '{b}：{c} {per|{d}%}',
                        rich:{
                            per: {
                                color: '#eee',
                                backgroundColor: '#334455',
                                padding: [2, 4],
                                borderRadius: 2
                            }
                        }
                        
                    }
                },
                data:hobbyNum
            }
        ]
    };
    hobbyCharts.setOption(option);
    $(window).resize(hobbyCharts.resize);

     // 用户消费习惯分布
    var consumeCharts = echarts.init(document.getElementById('user-consume'));
    var consumeNum = [
                    {value:10, name:'服装鞋包'},
                    {value:60, name:'生活家居'},
                    {value:30, name:'电子电器'},
                    {value:20, name:'宠物用品'},
                    {value:20, name:'母婴生活'}
                ];
    var option = {
        title : {
            text: '用户消费习惯分布',
            x:'center',
            height:40,
            textStyle:{
                color:'#888',
                fontSize:14
            }
        },
        toolbox:{
            show:true,
            itemSize: 10,
            orient: 'horizontal',
            showTitle: true,
            feature:{
                saveAsImage:{
                    type: 'jpg',
                    name: '用户消费习惯分布',
                    backgroundColor: '#fff',
                    excludeComponents: ['toolbox'],
                    show: true,
                    title: '保存'
                }
            }
        },
        series : [
            {
                name: '访问来源',
                type: 'pie',
                radius : '55%',
                
                label: {
                    normal: {
                        formatter: '{b}：{c} {per|{d}%}',
                        rich:{
                            per: {
                                color: '#eee',
                                backgroundColor: '#334455',
                                padding: [2, 4],
                                borderRadius: 2
                            }
                        }
                        
                    }
                },
                data:consumeNum
            }
        ]
    };
    consumeCharts.setOption(option);
    $(window).resize(consumeCharts.resize);

    // 用户浏览分布
    var viewCharts = echarts.init(document.getElementById('user-view'));
    var viewNum = [
                    {value:10, name:'IE'},
                    {value:60, name:'谷歌'},
                    {value:30, name:'火狐'},
                    {value:20, name:'Safari'},
                    {value:20, name:'欧朋'}
                ];
    var viewoption = {
        title : {
            text: '用户浏览器分布',
            x:'center',
            height:40,
            textStyle:{
                color:'#888',
                fontSize:14
            }
        },
        toolbox:{
            show:true,
            itemSize: 10,
            orient: 'horizontal',
            showTitle: true,
            feature:{
                saveAsImage:{
                    type: 'jpg',
                    name: '用户浏览器分布',
                    backgroundColor: '#fff',
                    excludeComponents: ['toolbox'],
                    show: true,
                    title: '保存'
                }
            }
        },
        series : [
            {
                name: '访问来源',
                type: 'pie',
                radius : '55%',
                
                label: {
                    normal: {
                        formatter: '{b}：{c} {per|{d}%}',
                        rich:{
                            per: {
                                color: '#eee',
                                backgroundColor: '#334455',
                                padding: [2, 4],
                                borderRadius: 2
                            }
                        }
                        
                    }
                },
                data:viewNum
            }
        ]
    };
    viewCharts.setOption(viewoption);
    $(window).resize(viewCharts.resize);

    // 用户地区分布
    $.get('js/china.json', function (chinaJson) {
        console.log(chinaJson.features[0].properties.cp);
        echarts.registerMap('china', chinaJson);
        var areaCharts = echarts.init(document.getElementById('user-area'));
        var areaoption ={
            title:{
                text:'用户地区分布',
                x:'center',
                textStyle:{
                    color:'#888',
                    fontSize:14
            }
            },
            tooltip: {
                show: true,
                padding: 0,
                backgroundColor: "rgba(0,0,0,0.5)"
            },
            series: [
                {
                    name: "中国",
                    type: "map",
                    mapType: "china",
                    zoom: 1,
                    selectedMode: false,
                    itemStyle: {
                        normal: {
                            areaColor: "#103a65",
                            borderWidth: 1.5,
                            borderColor: "#1f5c94",
                            label: {
                                show: true
                            }
                        },
                        emphasis: {
                            areaColor: "#74c0ed",
                            label: {
                                show: true
                            }
                        }
                    },
                    label: {
                        normal: {
                            show: false
                        },
                        emphasis: {
                            show: false
                        }
                    },
                    data: [
                        {
                            value: 3997830,
                            name: "广西",
                            itemStyle: {
                                normal: {
                                    color: "#726fb4",
                                    label: {
                                        show: true,
                                        textStyle: {
                                            color: "#fff",
                                            fontSize: 10
                                        }
                                    }
                                }
                            }
                        },
                        {
                            value: 3102814,
                            name: "湖南",
                            itemStyle: {
                                normal: {
                                    color: "#8985d2",
                                    label: {
                                        show: true,
                                        textStyle: {
                                            color: "#fff",
                                            fontSize: 10
                                        }
                                    }
                                }
                            }
                        },
                        {
                            value: 1610236,
                            name: "江西",
                            itemStyle: {
                                normal: {
                                    color: "#9baded",
                                    label: {
                                        show: true,
                                        textStyle: {
                                            color: "#fff",
                                            fontSize: 10
                                        }
                                    }
                                }
                            }
                        },
                        {
                            value: 5,
                            name: "广东",
                            itemStyle: {
                                normal: {
                                    color: "#9baded",
                                    label: {
                                        show: true,
                                        textStyle: {
                                            color: "#fff",
                                            fontSize: 10
                                        }
                                    }
                                }
                            }
                        }
                       
                    ],
                    markPoint: {
                        symbol: "pin",
                        symbolSize: 50,
                        label: {
                            normal: {
                                show: false,
                                fontSize:10
                            }
                        },
                        data: [
                            {   
                                value:5,
                                name: "广东",
                                coord: [
                                    113.23,
                                    23.16
                                ]
                            },{   
                                value:5,
                                name: "江西",
                                coord: [
                                    113.23,
                                    23.16
                                ]
                            }
                        ]
                    }
                }
            ]
        }
        areaCharts.setOption(areaoption);
        $(window).resize(areaCharts.resize);      
    });

});