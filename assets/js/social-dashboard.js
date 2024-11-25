/* Audience */
var options = {
  series: [{
      name: "Faturamento",
      data: [30, 58, 25, 42, 35, 33, 63, 25, 53, 57, 38, 40],
      type: 'column',
  },
  {
      name: "Quantidade de Vendas",
      data: [20, 38, 38, 72, 55, 73, 43, 55, 33, 45, 30, 60],
      type: 'line',
  }],
  chart: {
      type: 'line',
      height: 330,
      toolbar: {
        show: false,
      },
      dropShadow: {
          enabled: true,
          enabledOnSeries: undefined,
          top: 7,
          left: 0,
          blur: 1,
          color: ["rgb(227, 84, 212)",  'rgb(227, 84, 212)', 'transparent' , 'transparent'],
          opacity: 0.05,
        },
  },
  plotOptions: {
    bar: {
      horizontal: false,
      columnWidth: '20%',
      borderRadius: 6
    },
  },
  grid: {
      borderColor: 'rgba(167, 180, 201 ,0.2)',
  },
  colors: ['var(--primary-color)', "rgb(227, 84, 212)"],
  stroke: {
      width: [0, 2],
      curve: ["smooth", "straight"],
      dashArray: [0, 4], 
    },
  dataLabels: {
      enabled: false,
  },fill: {
      opacity: 1
    },
  legend: {
      show: true,
      position: 'top',
      labels: {
          colors: '#74767c',
      },
  },
  yaxis: {
      labels: {
          formatter: function (y) {
              return y.toFixed(0) + "";
          }
      },
      labels: {
          style: {
              colors: "#8c9097",
              fontSize: '11px',
              fontWeight: 600,
              cssClass: 'apexcharts-xaxis-label',
          },
      }
  },
  xaxis: {
      type: 'month',
      categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'sep', 'oct', 'nov', 'dec'],
      axisBorder: {
          show: true,
          color: 'rgba(167, 180, 201 ,0.2)',
          offsetX: 0,
          offsetY: 0,
      },
      axisTicks: {
          show: true,
          borderType: 'solid',
          color: 'rgba(167, 180, 201 ,0.2)',
          width: 6,
          offsetX: 0,
          offsetY: 0
      },
      labels: {
          rotate: -90,
          style: {
              colors: "#8c9097",
              fontSize: '11px',
              fontWeight: 600,
              cssClass: 'apexcharts-xaxis-label',
          },
      }
  }
};
var chartAudience = new ApexCharts(document.querySelector("#audience"), options);
chartAudience.render();

    /* Follow-on device */
    var options = {
        series: [904, 1234, 608, 300],
        labels: ["Pinterest", "Google", "Youtube", "Facebook"],
      chart: {
          height: 150,
          type: 'donut',
      },
      dataLabels: {
          enabled: false,
      },
      legend: {
          show: false,
      },
      stroke: {
          show: true,
          curve: 'smooth',
          lineCap: 'round',
          colors: "#fff",
          width: 0,
          dashArray: 0,
      },
      plotOptions: {
          pie: {
              expandOnClick: false,
              donut: {
                  size: '60%',
                  background: 'transparent',
                  labels: {
                      show: false,
                      name: {
                          show: true,
                          fontSize: '20px',
                          color: '#495057',
                          offsetY: -4
                      },
                      value: {
                          show: true,
                          fontSize: '18px',
                          color: undefined,
                          offsetY: 8,
                          formatter: function (val) {
                              return val + "%"
                          }
                      }

                  }
              }
          }
      },
      colors: ["#BD081C", "#F4B400","#FF0000", "#4267B2",],
  };
  var chart = new ApexCharts(document.querySelector("#follow-on-device"), options);
  chart.render();


    /* Follow-on device 2 */
    var options = {
        series: [954, 1534, 508, 1200],
        labels: ["Pinterest", "Google", "Youtube", "Facebook"],
        chart: {
            height: 150,
            type: 'donut',
        },
        dataLabels: {
            enabled: false,
        },
        legend: {
            show: false,
        },
        stroke: {
            show: true,
            curve: 'smooth',
            lineCap: 'round',
            colors: "#fff",
            width: 0,
            dashArray: 0,
        },
        plotOptions: {
            pie: {
                expandOnClick: false,
                donut: {
                    size: '60%',
                    background: 'transparent',
                    labels: {
                        show: false,
                        name: {
                            show: true,
                            fontSize: '20px',
                            color: '#495057',
                            offsetY: -4
                        },
                        value: {
                            show: true,
                            fontSize: '18px',
                            color: undefined,
                            offsetY: 8,
                            formatter: function (val) {
                                return val + "%"
                            }
                        }
  
                    }
                }
            }
        },
        colors: ["#BD081C", "#F4B400","#FF0000", "#4267B2",],
    };
  var chart2 = new ApexCharts(document.querySelector("#follow-on-device2"), options);
  chart2.render();
  /* Follow-on  device */

  

      /* Follow-on device 3 */
      var options = {
        series: [954, 1534, 508, 1200],
        labels: ["Pinterest", "Google", "Youtube", "Facebook"],
        chart: {
            height: 150,
            type: 'donut',
        },
        dataLabels: {
            enabled: false,
        },
  
        legend: {
            show:false,
        },
        stroke: {
            show: true,
            curve: 'smooth',
            lineCap: 'round',
            colors: "#fff",
            width: 0,
            dashArray: 0,
        },
        plotOptions: {
            pie: {
                expandOnClick: false,
                donut: {
                    size: '60%',
                    background: 'transparent',
                    labels: {
                        show: false,
                        name: {
                            show: true,
                            fontSize: '20px',
                            color: '#495057',
                            offsetY: -4
                        },
                        value: {
                            show: true,
                            fontSize: '18px',
                            color: undefined,
                            offsetY: 8,
                            formatter: function (val) {
                                return val + "%"
                            }
                        }
  
                    }
                }
            }
        },
        colors: ["#BD081C", "#F4B400","#FF0000", "#4267B2",],
    };
  var chart3 = new ApexCharts(document.querySelector("#follow-on-device3"), options);
  chart3.render();
  /* Follow-on  device */

      /* Follow-on device 4 */
      var options = {
        series: [954, 1534, 508, 1200],
        labels: ["Pinterest", "Google", "Youtube", "Facebook"],
        chart: {
            height: 150,
            type: 'donut',
        },
        dataLabels: {
            enabled: false,
        },
  
        legend: {
            show: false,
        },
        stroke: {
            show: true,
            curve: 'smooth',
            lineCap: 'round',
            colors: "#fff",
            width: 0,
            dashArray: 0,
        },
        plotOptions: {
            pie: {
                expandOnClick: false,
                donut: {
                    size: '60%',
                    background: 'transparent',
                    labels: {
                        show: false,
                        name: {
                            show: true,
                            fontSize: '20px',
                            color: '#495057',
                            offsetY: -4
                        },
                        value: {
                            show: true,
                            fontSize: '18px',
                            color: undefined,
                            offsetY: 8,
                            formatter: function (val) {
                                return val + "%"
                            }
                        }
  
                    }
                }
            }
        },
        colors: ["#BD081C", "#F4B400","#FF0000", "#4267B2",],
    };
  var chart4 = new ApexCharts(document.querySelector("#follow-on-device4"), options);
  chart4.render();
  /* Follow-on  device */

       /* Follow-on device 5 */
       var options = {
        series: [954, 1534, 508, 1200],
        labels: ["Pinterest", "Google", "Youtube", "Facebook"],
        chart: {
            height: 150,
            type: 'donut',
        },
        dataLabels: {
            enabled: false,
        },
  
        legend: {
            show: false,
        },
        stroke: {
            show: true,
            curve: 'smooth',
            lineCap: 'round',
            colors: "#fff",
            width: 0,
            dashArray: 0,
        },
        plotOptions: {
            pie: {
                expandOnClick: false,
                donut: {
                    size: '60%',
                    background: 'transparent',
                    labels: {
                        show: false,
                        name: {
                            show: true,
                            fontSize: '20px',
                            color: '#495057',
                            offsetY: -4
                        },
                        value: {
                            show: true,
                            fontSize: '18px',
                            color: undefined,
                            offsetY: 8,
                            formatter: function (val) {
                                return val + "%"
                            }
                        }
  
                    }
                }
            }
        },
        colors: ["#BD081C", "#F4B400","#FF0000", "#4267B2",],
    };
  var chart5 = new ApexCharts(document.querySelector("#follow-on-device5"), options);
  chart5.render();
  /* Follow-on  device */

       /* Follow-on device 6 */
       var options = {
        series: [954, 1534, 508, 1200],
        labels: ["Pinterest", "Google", "Youtube", "Facebook"],
        chart: {
            height: 150,
            type: 'donut',
        },
        dataLabels: {
            enabled: false,
        },
  
        legend: {
            show: false,
        },
        stroke: {
            show: true,
            curve: 'smooth',
            lineCap: 'round',
            colors: "#fff",
            width: 0,
            dashArray: 0,
        },
        plotOptions: {
            pie: {
                expandOnClick: false,
                donut: {
                    size: '60%',
                    background: 'transparent',
                    labels: {
                        show: false,
                        name: {
                            show: true,
                            fontSize: '20px',
                            color: '#495057',
                            offsetY: -4
                        },
                        value: {
                            show: true,
                            fontSize: '18px',
                            color: undefined,
                            offsetY: 8,
                            formatter: function (val) {
                                return val + "%"
                            }
                        }
  
                    }
                }
            }
        },
        colors: ["#BD081C", "#F4B400","#FF0000", "#4267B2",],
    };
  var chart6 = new ApexCharts(document.querySelector("#follow-on-device6"), options);
  chart6.render();
  /* Follow-on  device */