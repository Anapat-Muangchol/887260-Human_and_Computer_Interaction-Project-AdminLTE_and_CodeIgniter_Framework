<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- amCharts javascript sources -->
    <script src="http://www.amcharts.com/lib/3/amcharts.js" type="text/javascript"></script>
    <script src="http://www.amcharts.com/lib/3/serial.js" type="text/javascript"></script>
    <script src="http://www.amcharts.com/lib/3/themes/light.js" type="text/javascript"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!-- ChartCode Year -->
  <script type="text/javascript">
    AmCharts.makeChart("chartyear",
      {
        "type": "serial",
        "categoryField": "date",
        "dataDateFormat": "YYYY-MM",
        "autoDisplay": true,
        "theme": "light",
        "categoryAxis": {
          "minPeriod": "MM",
          "parseDates": true
        },
        "chartCursor": {
          "enabled": true,
          "categoryBalloonDateFormat": "MMM YYYY"
        },
        "chartScrollbar": {
          "enabled": true
        },
        "trendLines": [],
        "graphs": [
          {
            "bullet": "round",
            "id": "AmGraph-1",
            "title": "ลาป่วย",
            "valueField": "column-1"
          },
          {
            "bullet": "square",
            "id": "AmGraph-2",
            "title": "ลากิจ",
            "valueField": "column-2"
          },
          {
            "bullet": "diamond",
            "id": "AmGraph-3",
            "title": "อื่นๆ",
            "valueField": "column-3"
          }
        ],
        "guides": [],
        "valueAxes": [
          {
            "id": "ValueAxis-1",
            "title": "จำนวนคน"
          }
        ],
        "allLabels": [],
        "balloon": {},
        "legend": {
          "enabled": true,
          "useGraphSettings": true
        },
        "titles": [
          {
            "bold": true,
            "id": "Title-1",
            "size": 25,
            "text": "กราฟแสดงสถิติการลาปี 2015"
          }
        ],
        "dataProvider": [
          {
            "date": "2015-01",
            "column-1": 6,
            "column-2": 19,
            "column-3": 10
          },
          {
            "date": "2015-02",
            "column-1": 20,
            "column-2": 13,
            "column-3": 5
          },
          {
            "date": "2015-03",
            "column-1": 30,
            "column-2": 19,
            "column-3": 3
          },
          {
            "date": "2015-04",
            "column-1": 29,
            "column-2": 7,
            "column-3": 5
          },
          {
            "date": "2015-05",
            "column-1": 25,
            "column-2": 4,
            "column-3": 10
          },
          {
            "date": "2015-06",
            "column-1": 13,
            "column-2": 18,
            "column-3": 2
          },
          {
            "date": "2015-07",
            "column-1": 5,
            "column-2": 12,
            "column-3": 10
          },
          {
            "date": "2015-08",
            "column-1": 25,
            "column-2": 6,
            "column-3": 8
          },
          {
            "date": "2015-09",
            "column-1": 6,
            "column-2": 13,
            "column-3": 7
          },
          {
            "date": "2015-10",
            "column-1": 5,
            "column-2": 10,
            "column-3": 3
          },
          {
            "date": "2015-11",
            "column-1": 27,
            "column-2": 13,
            "column-3": 8
          },
          {
            "date": "2015-12",
            "column-1": 14,
            "column-2": 19,
            "column-3": 7
          }
        ]
      }
    );
  </script>
<!-- End ChartCode Year -->

<!-- ChartCode Months 01 to 12 -->
<script type="text/javascript">
  AmCharts.makeChart("month01",
    {
      "type": "serial",
      "categoryField": "date",
      "dataDateFormat": "YYYY-MM-DD",
      "theme": "light",
      "export": {
        "enabled": true
      },
      "categoryAxis": {
        "parseDates": true
      },
      "chartCursor": {
        "enabled": true
      },
      "chartScrollbar": {
        "enabled": true
      },
      "trendLines": [],
      "graphs": [
        {
          "id": "AmGraph-3",
          "title": "ลาป่วย",
          "valueField": "column-2"
        },
        {
          "id": "AmGraph-4",
          "title": "ลากิจ",
          "valueField": "column-3"
        },
        {
          "id": "AmGraph-5",
          "title": "อื่นๆ",
          "valueField": "column-4"
        }
      ],
      "guides": [],
      "valueAxes": [
        {
          "id": "ValueAxis-1",
          "title": "จำนวนคน"
        }
      ],
      "allLabels": [],
      "balloon": {},
      "legend": {
        "enabled": true,
        "useGraphSettings": true
      },
      "titles": [
        {
          "id": "Title-1",
          "size": 15,
          "text": "มกราคม"
        }
      ],
      "dataProvider": [
        {
          "date": "2015-01-01",
          "column-2": 15,
          "column-3": 20,
          "column-4": 4
        },
        {
          "date": "2015-01-02",
          "column-2": 27,
          "column-3": 13,
          "column-4": 0
        },
        {
          "date": "2015-01-03",
          "column-2": 15,
          "column-3": 3,
          "column-4": 0
        },
        {
          "date": "2015-01-04",
          "column-2": 8,
          "column-3": 18,
          "column-4": 5
        },
        {
          "date": "2015-01-05",
          "column-2": 1,
          "column-3": 3,
          "column-4": 4
        },
        {
          "date": "2015-01-06",
          "column-2": 9,
          "column-3": 2,
          "column-4": 6
        },
        {
          "date": "2015-01-07",
          "column-2": 10,
          "column-3": 11,
          "column-4": 8
        },
        {
          "date": "2015-01-08",
          "column-2": 28,
          "column-3": 12,
          "column-4": 3
        },
        {
          "date": "2015-01-09",
          "column-2": 3,
          "column-3": 7,
          "column-4": 9
        },
        {
          "date": "2015-01-10",
          "column-2": 23,
          "column-3": 12,
          "column-4": 10
        },
        {
          "date": "2015-01-11",
          "column-2": 9,
          "column-3": 16,
          "column-4": 1
        },
        {
          "date": "2015-01-12",
          "column-2": 20,
          "column-3": 4,
          "column-4": 5
        },
        {
          "date": "2015-01-13",
          "column-2": 4,
          "column-3": 16,
          "column-4": 0
        },
        {
          "date": "2015-01-14",
          "column-2": 27,
          "column-3": 11,
          "column-4": 0
        },
        {
          "date": "2015-01-15",
          "column-2": 8,
          "column-3": 12,
          "column-4": 6
        },
        {
          "date": "2015-01-16",
          "column-2": 26,
          "column-3": 14,
          "column-4": 0
        },
        {
          "date": "2015-01-17",
          "column-2": 28,
          "column-3": 13,
          "column-4": 0
        },
        {
          "date": "2015-01-18",
          "column-2": 10,
          "column-3": 3,
          "column-4": 4
        },
        {
          "date": "2015-01-19",
          "column-2": 11,
          "column-3": 18,
          "column-4": 10
        },
        {
          "date": "2015-01-20",
          "column-2": 10,
          "column-3": 14,
          "column-4": 1
        },
        {
          "date": "2015-01-21",
          "column-2": 23,
          "column-3": 11,
          "column-4": 9
        },
        {
          "date": "2015-01-22",
          "column-2": 9,
          "column-3": 1,
          "column-4": 2
        },
        {
          "date": "2015-01-23",
          "column-2": 5,
          "column-3": 12,
          "column-4": 4
        },
        {
          "date": "2015-01-24",
          "column-2": 2,
          "column-3": 0,
          "column-4": 10
        },
        {
          "date": "2015-01-25",
          "column-2": 27,
          "column-3": 7,
          "column-4": 5
        },
        {
          "date": "2015-01-26",
          "column-2": 13,
          "column-3": 0,
          "column-4": 8
        },
        {
          "date": "2015-01-27",
          "column-2": 12,
          "column-3": 16,
          "column-4": 7
        },
        {
          "date": "2015-01-28",
          "column-2": 11,
          "column-3": 19,
          "column-4": 0
        },
        {
          "date": "2015-01-29",
          "column-2": 11,
          "column-3": 18,
          "column-4": 2
        },
        {
          "date": "2015-01-30",
          "column-2": 30,
          "column-3": 6,
          "column-4": 2
        },
        {
          "date": "2015-01-31",
          "column-2": 2,
          "column-3": 20,
          "column-4": 5
        }
      ]
    }
  );
</script>

<script type="text/javascript">
  AmCharts.makeChart("month02",
    {
      "type": "serial",
      "categoryField": "date",
      "dataDateFormat": "YYYY-MM-DD",
      "theme": "light",
      "export": {
        "enabled": true
      },
      "categoryAxis": {
        "parseDates": true
      },
      "chartCursor": {
        "enabled": true
      },
      "chartScrollbar": {
        "enabled": true
      },
      "trendLines": [],
      "graphs": [
        {
          "id": "AmGraph-6",
          "title": "ลาป่วย",
          "valueField": "column-2"
        },
        {
          "id": "AmGraph-7",
          "title": "ลากิจ",
          "valueField": "column-3"
        },
        {
          "id": "AmGraph-8",
          "title": "อื่นๆ",
          "valueField": "column-4"
        }
      ],
      "guides": [],
      "valueAxes": [
        {
          "id": "ValueAxis-1",
          "title": "จำนวนคน"
        }
      ],
      "allLabels": [],
      "balloon": {},
      "legend": {
        "enabled": true,
        "useGraphSettings": true
      },
      "titles": [
        {
          "id": "Title-1",
          "size": 15,
          "text": "กุมภาพันธ์"
        }
      ],
      "dataProvider": [
        {
          "date": "2015-02-01",
          "column-2": 14,
          "column-3": 4,
          "column-4": 3
        },
        {
          "date": "2015-02-02",
          "column-2": 0,
          "column-3": 15,
          "column-4": 9
        },
        {
          "date": "2015-02-03",
          "column-2": 23,
          "column-3": 14,
          "column-4": 1
        },
        {
          "date": "2015-02-04",
          "column-2": 14,
          "column-3": 17,
          "column-4": 9
        },
        {
          "date": "2015-02-05",
          "column-2": 2,
          "column-3": 9,
          "column-4": 7
        },
        {
          "date": "2015-02-06",
          "column-2": 6,
          "column-3": 19,
          "column-4": 4
        },
        {
          "date": "2015-02-07",
          "column-2": 21,
          "column-3": 4,
          "column-4": 1
        },
        {
          "date": "2015-02-08",
          "column-2": 17,
          "column-3": 7,
          "column-4": 5
        },
        {
          "date": "2015-02-09",
          "column-2": 19,
          "column-3": 8,
          "column-4": 9
        },
        {
          "date": "2015-02-10",
          "column-2": 23,
          "column-3": 13,
          "column-4": 8
        },
        {
          "date": "2015-02-11",
          "column-2": 19,
          "column-3": 1,
          "column-4": 7
        },
        {
          "date": "2015-02-12",
          "column-2": 0,
          "column-3": 17,
          "column-4": 7
        },
        {
          "date": "2015-02-13",
          "column-2": 22,
          "column-3": 15,
          "column-4": 3
        },
        {
          "date": "2015-02-14",
          "column-2": 10,
          "column-3": 15,
          "column-4": 7
        },
        {
          "date": "2015-02-15",
          "column-2": 14,
          "column-3": 14,
          "column-4": 8
        },
        {
          "date": "2015-02-16",
          "column-2": 28,
          "column-3": 0,
          "column-4": 2
        },
        {
          "date": "2015-02-17",
          "column-2": 16,
          "column-3": 0,
          "column-4": 1
        },
        {
          "date": "2015-02-18",
          "column-2": 3,
          "column-3": 13,
          "column-4": 8
        },
        {
          "date": "2015-02-19",
          "column-2": 15,
          "column-3": 2,
          "column-4": 5
        },
        {
          "date": "2015-02-20",
          "column-2": 26,
          "column-3": 17,
          "column-4": 10
        },
        {
          "date": "2015-02-21",
          "column-2": 21,
          "column-3": 14,
          "column-4": 1
        },
        {
          "date": "2015-02-22",
          "column-2": 5,
          "column-3": 8,
          "column-4": 10
        },
        {
          "date": "2015-02-23",
          "column-2": 23,
          "column-3": 3,
          "column-4": 1
        },
        {
          "date": "2015-02-24",
          "column-2": 8,
          "column-3": 11,
          "column-4": 0
        },
        {
          "date": "2015-02-25",
          "column-2": 3,
          "column-3": 15,
          "column-4": 5
        },
        {
          "date": "2015-02-26",
          "column-2": 30,
          "column-3": 6,
          "column-4": 10
        },
        {
          "date": "2015-02-27",
          "column-2": 11,
          "column-3": 3,
          "column-4": 10
        },
        {
          "date": "2015-02-28",
          "column-2": 29,
          "column-3": 4,
          "column-4": 8
        }
      ]
    }
  );
</script>

<script type="text/javascript">
  AmCharts.makeChart("month03",
    {
      "type": "serial",
      "categoryField": "date",
      "dataDateFormat": "YYYY-MM-DD",
      "theme": "light",
      "export": {
        "enabled": true
      },
      "categoryAxis": {
        "parseDates": true
      },
      "chartCursor": {
        "enabled": true
      },
      "chartScrollbar": {
        "enabled": true
      },
      "trendLines": [],
      "graphs": [
        {
          "id": "AmGraph-9",
          "title": "ลาป่วย",
          "valueField": "column-2"
        },
        {
          "id": "AmGraph-10",
          "title": "ลากิจ",
          "valueField": "column-3"
        },
        {
          "id": "AmGraph-11",
          "title": "อื่นๆ",
          "valueField": "column-4"
        }
      ],
      "guides": [],
      "valueAxes": [
        {
          "id": "ValueAxis-1",
          "title": "จำนวนคน"
        }
      ],
      "allLabels": [],
      "balloon": {},
      "legend": {
        "enabled": true,
        "useGraphSettings": true
      },
      "titles": [
        {
          "id": "Title-1",
          "size": 15,
          "text": "มีนาคม"
        }
      ],
      "dataProvider": [
        {
          "date": "2015-03-01",
          "column-2": 25,
          "column-3": 15,
          "column-4": 9
        },
        {
          "date": "2015-03-02",
          "column-2": 11,
          "column-3": 0,
          "column-4": 6
        },
        {
          "date": "2015-03-03",
          "column-2": 5,
          "column-3": 19,
          "column-4": 10
        },
        {
          "date": "2015-03-04",
          "column-2": 30,
          "column-3": 5,
          "column-4": 1
        },
        {
          "date": "2015-03-05",
          "column-2": 28,
          "column-3": 19,
          "column-4": 3
        },
        {
          "date": "2015-03-06",
          "column-2": 25,
          "column-3": 8,
          "column-4": 2
        },
        {
          "date": "2015-03-07",
          "column-2": 17,
          "column-3": 4,
          "column-4": 1
        },
        {
          "date": "2015-03-08",
          "column-2": 28,
          "column-3": 18,
          "column-4": 2
        },
        {
          "date": "2015-03-09",
          "column-2": 12,
          "column-3": 15,
          "column-4": 1
        },
        {
          "date": "2015-03-10",
          "column-2": 18,
          "column-3": 11,
          "column-4": 7
        },
        {
          "date": "2015-03-11",
          "column-2": 24,
          "column-3": 17,
          "column-4": 3
        },
        {
          "date": "2015-03-12",
          "column-2": 21,
          "column-3": 0,
          "column-4": 1
        },
        {
          "date": "2015-03-13",
          "column-2": 20,
          "column-3": 11,
          "column-4": 1
        },
        {
          "date": "2015-03-14",
          "column-2": 7,
          "column-3": 7,
          "column-4": 1
        },
        {
          "date": "2015-03-15",
          "column-2": 10,
          "column-3": 13,
          "column-4": 1
        },
        {
          "date": "2015-03-16",
          "column-2": 19,
          "column-3": 7,
          "column-4": 10
        },
        {
          "date": "2015-03-17",
          "column-2": 10,
          "column-3": 11,
          "column-4": 2
        },
        {
          "date": "2015-03-18",
          "column-2": 28,
          "column-3": 10,
          "column-4": 5
        },
        {
          "date": "2015-03-19",
          "column-2": 25,
          "column-3": 5,
          "column-4": 8
        },
        {
          "date": "2015-03-20",
          "column-2": 12,
          "column-3": 17,
          "column-4": 6
        },
        {
          "date": "2015-03-21",
          "column-2": 9,
          "column-3": 18,
          "column-4": 3
        },
        {
          "date": "2015-03-22",
          "column-2": 28,
          "column-3": 12,
          "column-4": 5
        },
        {
          "date": "2015-03-23",
          "column-2": 23,
          "column-3": 17,
          "column-4": 4
        },
        {
          "date": "2015-03-24",
          "column-2": 23,
          "column-3": 14,
          "column-4": 10
        },
        {
          "date": "2015-03-25",
          "column-2": 0,
          "column-3": 8,
          "column-4": 4
        },
        {
          "date": "2015-03-26",
          "column-2": 24,
          "column-3": 4,
          "column-4": 0
        },
        {
          "date": "2015-03-27",
          "column-2": 9,
          "column-3": 4,
          "column-4": 7
        },
        {
          "date": "2015-03-28",
          "column-2": 22,
          "column-3": 12,
          "column-4": 1
        },
        {
          "date": "2015-03-29",
          "column-2": 8,
          "column-3": 7,
          "column-4": 5
        },
        {
          "date": "2015-03-30",
          "column-2": 20,
          "column-3": 8,
          "column-4": 5
        },
        {
          "date": "2015-03-31",
          "column-2": 9,
          "column-3": 20,
          "column-4": 8
        }
      ]
    }
  );
</script>

<script type="text/javascript">
  AmCharts.makeChart("month04",
    {
      "type": "serial",
      "categoryField": "date",
      "dataDateFormat": "YYYY-MM-DD",
      "theme": "light",
      "export": {
        "enabled": true
      },
      "categoryAxis": {
        "parseDates": true
      },
      "chartCursor": {
        "enabled": true
      },
      "chartScrollbar": {
        "enabled": true
      },
      "trendLines": [],
      "graphs": [
        {
          "id": "AmGraph-12",
          "title": "ลาป่วย",
          "valueField": "column-2"
        },
        {
          "id": "AmGraph-13",
          "title": "ลากิจ",
          "valueField": "column-3"
        },
        {
          "id": "AmGraph-14",
          "title": "อื่นๆ",
          "valueField": "column-4"
        }
      ],
      "guides": [],
      "valueAxes": [
        {
          "id": "ValueAxis-1",
          "title": "จำนวนคน"
        }
      ],
      "allLabels": [],
      "balloon": {},
      "legend": {
        "enabled": true,
        "useGraphSettings": true
      },
      "titles": [
        {
          "id": "Title-1",
          "size": 15,
          "text": "เมษายน"
        }
      ],
      "dataProvider": [
        {
          "date": "2015-04-01",
          "column-2": 1,
          "column-3": 18,
          "column-4": 0
        },
        {
          "date": "2015-04-02",
          "column-2": 19,
          "column-3": 5,
          "column-4": 3
        },
        {
          "date": "2015-04-03",
          "column-2": 12,
          "column-3": 9,
          "column-4": 6
        },
        {
          "date": "2015-04-04",
          "column-2": 5,
          "column-3": 19,
          "column-4": 0
        },
        {
          "date": "2015-04-05",
          "column-2": 26,
          "column-3": 0,
          "column-4": 7
        },
        {
          "date": "2015-04-06",
          "column-2": 8,
          "column-3": 16,
          "column-4": 7
        },
        {
          "date": "2015-04-07",
          "column-2": 17,
          "column-3": 18,
          "column-4": 5
        },
        {
          "date": "2015-04-08",
          "column-2": 22,
          "column-3": 1,
          "column-4": 1
        },
        {
          "date": "2015-04-09",
          "column-2": 19,
          "column-3": 7,
          "column-4": 5
        },
        {
          "date": "2015-04-10",
          "column-2": 9,
          "column-3": 16,
          "column-4": 7
        },
        {
          "date": "2015-04-11",
          "column-2": 29,
          "column-3": 11,
          "column-4": 5
        },
        {
          "date": "2015-04-12",
          "column-2": 11,
          "column-3": 3,
          "column-4": 6
        },
        {
          "date": "2015-04-13",
          "column-2": 20,
          "column-3": 14,
          "column-4": 9
        },
        {
          "date": "2015-04-14",
          "column-2": 8,
          "column-3": 0,
          "column-4": 6
        },
        {
          "date": "2015-04-15",
          "column-2": 27,
          "column-3": 2,
          "column-4": 0
        },
        {
          "date": "2015-04-16",
          "column-2": 30,
          "column-3": 15,
          "column-4": 8
        },
        {
          "date": "2015-04-17",
          "column-2": 27,
          "column-3": 18,
          "column-4": 0
        },
        {
          "date": "2015-04-18",
          "column-2": 17,
          "column-3": 12,
          "column-4": 7
        },
        {
          "date": "2015-04-19",
          "column-2": 22,
          "column-3": 20,
          "column-4": 0
        },
        {
          "date": "2015-04-20",
          "column-2": 24,
          "column-3": 4,
          "column-4": 2
        },
        {
          "date": "2015-04-21",
          "column-2": 8,
          "column-3": 20,
          "column-4": 8
        },
        {
          "date": "2015-04-22",
          "column-2": 7,
          "column-3": 3,
          "column-4": 10
        },
        {
          "date": "2015-04-23",
          "column-2": 6,
          "column-3": 13,
          "column-4": 2
        },
        {
          "date": "2015-04-24",
          "column-2": 3,
          "column-3": 7,
          "column-4": 6
        },
        {
          "date": "2015-04-25",
          "column-2": 16,
          "column-3": 14,
          "column-4": 10
        },
        {
          "date": "2015-04-26",
          "column-2": 29,
          "column-3": 18,
          "column-4": 8
        },
        {
          "date": "2015-04-27",
          "column-2": 28,
          "column-3": 14,
          "column-4": 4
        },
        {
          "date": "2015-04-28",
          "column-2": 13,
          "column-3": 5,
          "column-4": 2
        },
        {
          "date": "2015-04-29",
          "column-2": 17,
          "column-3": 8,
          "column-4": 7
        },
        {
          "date": "2015-04-30",
          "column-2": 2,
          "column-3": 7,
          "column-4": 8
        }
      ]
    }
  );
</script>

<script type="text/javascript">
  AmCharts.makeChart("month05",
    {
      "type": "serial",
      "categoryField": "date",
      "dataDateFormat": "YYYY-MM-DD",
      "theme": "light",
      "export": {
        "enabled": true
      },
      "categoryAxis": {
        "parseDates": true
      },
      "chartCursor": {
        "enabled": true
      },
      "chartScrollbar": {
        "enabled": true
      },
      "trendLines": [],
      "graphs": [
        {
          "id": "AmGraph-15",
          "title": "ลาป่วย",
          "valueField": "column-2"
        },
        {
          "id": "AmGraph-16",
          "title": "ลากิจ",
          "valueField": "column-3"
        },
        {
          "id": "AmGraph-17",
          "title": "อื่นๆ",
          "valueField": "column-4"
        }
      ],
      "guides": [],
      "valueAxes": [
        {
          "id": "ValueAxis-1",
          "title": "จำนวนคน"
        }
      ],
      "allLabels": [],
      "balloon": {},
      "legend": {
        "enabled": true,
        "useGraphSettings": true
      },
      "titles": [
        {
          "id": "Title-1",
          "size": 15,
          "text": "พฤษภาคม"
        }
      ],
      "dataProvider": [
        {
          "date": "2015-05-01",
          "column-2": 15,
          "column-3": 4,
          "column-4": 7
        },
        {
          "date": "2015-05-02",
          "column-2": 1,
          "column-3": 9,
          "column-4": 2
        },
        {
          "date": "2015-05-03",
          "column-2": 0,
          "column-3": 13,
          "column-4": 8
        },
        {
          "date": "2015-05-04",
          "column-2": 24,
          "column-3": 0,
          "column-4": 6
        },
        {
          "date": "2015-05-05",
          "column-2": 17,
          "column-3": 8,
          "column-4": 6
        },
        {
          "date": "2015-05-06",
          "column-2": 22,
          "column-3": 19,
          "column-4": 5
        },
        {
          "date": "2015-05-07",
          "column-2": 16,
          "column-3": 10,
          "column-4": 10
        },
        {
          "date": "2015-05-08",
          "column-2": 1,
          "column-3": 19,
          "column-4": 8
        },
        {
          "date": "2015-05-09",
          "column-2": 14,
          "column-3": 3,
          "column-4": 1
        },
        {
          "date": "2015-05-10",
          "column-2": 17,
          "column-3": 16,
          "column-4": 6
        },
        {
          "date": "2015-05-11",
          "column-2": 1,
          "column-3": 0,
          "column-4": 4
        },
        {
          "date": "2015-05-12",
          "column-2": 12,
          "column-3": 4,
          "column-4": 2
        },
        {
          "date": "2015-05-13",
          "column-2": 23,
          "column-3": 9,
          "column-4": 7
        },
        {
          "date": "2015-05-14",
          "column-2": 14,
          "column-3": 6,
          "column-4": 8
        },
        {
          "date": "2015-05-15",
          "column-2": 4,
          "column-3": 10,
          "column-4": 2
        },
        {
          "date": "2015-05-16",
          "column-2": 9,
          "column-3": 18,
          "column-4": 8
        },
        {
          "date": "2015-05-17",
          "column-2": 30,
          "column-3": 1,
          "column-4": 6
        },
        {
          "date": "2015-05-18",
          "column-2": 23,
          "column-3": 4,
          "column-4": 6
        },
        {
          "date": "2015-05-19",
          "column-2": 1,
          "column-3": 5,
          "column-4": 0
        },
        {
          "date": "2015-05-20",
          "column-2": 12,
          "column-3": 17,
          "column-4": 9
        },
        {
          "date": "2015-05-21",
          "column-2": 26,
          "column-3": 6,
          "column-4": 5
        },
        {
          "date": "2015-05-22",
          "column-2": 6,
          "column-3": 17,
          "column-4": 7
        },
        {
          "date": "2015-05-23",
          "column-2": 8,
          "column-3": 15,
          "column-4": 4
        },
        {
          "date": "2015-05-24",
          "column-2": 24,
          "column-3": 9,
          "column-4": 7
        },
        {
          "date": "2015-05-25",
          "column-2": 2,
          "column-3": 9,
          "column-4": 0
        },
        {
          "date": "2015-05-26",
          "column-2": 9,
          "column-3": 17,
          "column-4": 0
        },
        {
          "date": "2015-05-27",
          "column-2": 3,
          "column-3": 19,
          "column-4": 4
        },
        {
          "date": "2015-05-28",
          "column-2": 16,
          "column-3": 2,
          "column-4": 4
        },
        {
          "date": "2015-05-29",
          "column-2": 2,
          "column-3": 14,
          "column-4": 10
        },
        {
          "date": "2015-05-30",
          "column-2": 6,
          "column-3": 13,
          "column-4": 7
        },
        {
          "date": "2015-05-31",
          "column-2": 1,
          "column-3": 20,
          "column-4": 7
        }
      ]
    }
  );
</script>

<script type="text/javascript">
  AmCharts.makeChart("month06",
    {
      "type": "serial",
      "categoryField": "date",
      "dataDateFormat": "YYYY-MM-DD",
      "theme": "light",
      "export": {
        "enabled": true
      },
      "categoryAxis": {
        "parseDates": true
      },
      "chartCursor": {
        "enabled": true
      },
      "chartScrollbar": {
        "enabled": true
      },
      "trendLines": [],
      "graphs": [
        {
          "id": "AmGraph-19",
          "title": "ลาป่วย",
          "valueField": "column-3"
        },
        {
          "id": "AmGraph-20",
          "title": "ลากิจ",
          "valueField": "column-4"
        },
        {
          "id": "AmGraph-21",
          "title": "อื่นๆ",
          "valueField": "column-2"
        }
      ],
      "guides": [],
      "valueAxes": [
        {
          "id": "ValueAxis-1",
          "title": "จำนวนคน"
        }
      ],
      "allLabels": [],
      "balloon": {},
      "legend": {
        "enabled": true,
        "useGraphSettings": true
      },
      "titles": [
        {
          "id": "Title-1",
          "size": 15,
          "text": "มิถุนายน"
        }
      ],
      "dataProvider": [
        {
          "date": "2015-06-01",
          "column-2": 0,
          "column-3": 14,
          "column-4": 5
        },
        {
          "date": "2015-06-02",
          "column-2": 5,
          "column-3": 3,
          "column-4": 9
        },
        {
          "date": "2015-06-03",
          "column-2": 4,
          "column-3": 19,
          "column-4": 3
        },
        {
          "date": "2015-06-04",
          "column-2": 8,
          "column-3": 7,
          "column-4": 5
        },
        {
          "date": "2015-06-05",
          "column-2": 17,
          "column-3": 0,
          "column-4": 3
        },
        {
          "date": "2015-06-06",
          "column-2": 29,
          "column-3": 9,
          "column-4": 9
        },
        {
          "date": "2015-06-07",
          "column-2": 2,
          "column-3": 19,
          "column-4": 1
        },
        {
          "date": "2015-06-08",
          "column-2": 20,
          "column-3": 17,
          "column-4": 9
        },
        {
          "date": "2015-06-09",
          "column-2": 5,
          "column-3": 0,
          "column-4": 10
        },
        {
          "date": "2015-06-10",
          "column-2": 5,
          "column-3": 11,
          "column-4": 0
        },
        {
          "date": "2015-06-11",
          "column-2": 2,
          "column-3": 7,
          "column-4": 6
        },
        {
          "date": "2015-06-12",
          "column-2": 23,
          "column-3": 15,
          "column-4": 8
        },
        {
          "date": "2015-06-13",
          "column-2": 18,
          "column-3": 6,
          "column-4": 6
        },
        {
          "date": "2015-06-14",
          "column-2": 23,
          "column-3": 6,
          "column-4": 1
        },
        {
          "date": "2015-06-15",
          "column-2": 11,
          "column-3": 14,
          "column-4": 2
        },
        {
          "date": "2015-06-16",
          "column-2": 23,
          "column-3": 4,
          "column-4": 3
        },
        {
          "date": "2015-06-17",
          "column-2": 15,
          "column-3": 20,
          "column-4": 10
        },
        {
          "date": "2015-06-18",
          "column-2": 30,
          "column-3": 7,
          "column-4": 0
        },
        {
          "date": "2015-06-19",
          "column-2": 2,
          "column-3": 6,
          "column-4": 3
        },
        {
          "date": "2015-06-20",
          "column-2": 5,
          "column-3": 14,
          "column-4": 10
        },
        {
          "date": "2015-06-21",
          "column-2": 30,
          "column-3": 18,
          "column-4": 10
        },
        {
          "date": "2015-06-22",
          "column-2": 14,
          "column-3": 13,
          "column-4": 5
        },
        {
          "date": "2015-06-23",
          "column-2": 6,
          "column-3": 10,
          "column-4": 2
        },
        {
          "date": "2015-06-24",
          "column-2": 6,
          "column-3": 13,
          "column-4": 9
        },
        {
          "date": "2015-06-25",
          "column-2": 1,
          "column-3": 9,
          "column-4": 4
        },
        {
          "date": "2015-06-26",
          "column-2": 28,
          "column-3": 15,
          "column-4": 4
        },
        {
          "date": "2015-06-27",
          "column-2": 29,
          "column-3": 17,
          "column-4": 9
        },
        {
          "date": "2015-06-28",
          "column-2": 20,
          "column-3": 13,
          "column-4": 9
        },
        {
          "date": "2015-06-29",
          "column-2": 30,
          "column-3": 7,
          "column-4": 5
        },
        {
          "date": "2015-06-30",
          "column-2": 14,
          "column-3": 10,
          "column-4": 4
        }
      ]
    }
  );
</script>

<script type="text/javascript">
  AmCharts.makeChart("month07",
    {
      "type": "serial",
      "categoryField": "date",
      "dataDateFormat": "YYYY-MM-DD",
      "theme": "light",
      "export": {
        "enabled": true
      },
      "categoryAxis": {
        "parseDates": true
      },
      "chartCursor": {
        "enabled": true
      },
      "chartScrollbar": {
        "enabled": true
      },
      "trendLines": [],
      "graphs": [
        {
          "id": "AmGraph-22",
          "title": "ลาป่วย",
          "valueField": "column-2"
        },
        {
          "id": "AmGraph-23",
          "title": "ลากิจ",
          "valueField": "column-3"
        },
        {
          "id": "AmGraph-24",
          "title": "อื่นๆ",
          "valueField": "column-4"
        }
      ],
      "guides": [],
      "valueAxes": [
        {
          "id": "ValueAxis-1",
          "title": "จำนวนคน"
        }
      ],
      "allLabels": [],
      "balloon": {},
      "legend": {
        "enabled": true,
        "useGraphSettings": true
      },
      "titles": [
        {
          "id": "Title-1",
          "size": 15,
          "text": "กรกฏาคม"
        }
      ],
      "dataProvider": [
        {
          "date": "2015-07-01",
          "column-2": 26,
          "column-3": 5,
          "column-4": 6
        },
        {
          "date": "2015-07-02",
          "column-2": 0,
          "column-3": 13,
          "column-4": 8
        },
        {
          "date": "2015-07-03",
          "column-2": 3,
          "column-3": 1,
          "column-4": 8
        },
        {
          "date": "2015-07-04",
          "column-2": 11,
          "column-3": 4,
          "column-4": 5
        },
        {
          "date": "2015-07-05",
          "column-2": 19,
          "column-3": 2,
          "column-4": 4
        },
        {
          "date": "2015-07-06",
          "column-2": 17,
          "column-3": 9,
          "column-4": 1
        },
        {
          "date": "2015-07-07",
          "column-2": 21,
          "column-3": 10,
          "column-4": 4
        },
        {
          "date": "2015-07-08",
          "column-2": 18,
          "column-3": 3,
          "column-4": 9
        },
        {
          "date": "2015-07-09",
          "column-2": 5,
          "column-3": 12,
          "column-4": 0
        },
        {
          "date": "2015-07-10",
          "column-2": 17,
          "column-3": 7,
          "column-4": 4
        },
        {
          "date": "2015-07-11",
          "column-2": 16,
          "column-3": 16,
          "column-4": 1
        },
        {
          "date": "2015-07-12",
          "column-2": 22,
          "column-3": 15,
          "column-4": 7
        },
        {
          "date": "2015-07-13",
          "column-2": 14,
          "column-3": 19,
          "column-4": 3
        },
        {
          "date": "2015-07-14",
          "column-2": 20,
          "column-3": 2,
          "column-4": 4
        },
        {
          "date": "2015-07-15",
          "column-2": 11,
          "column-3": 4,
          "column-4": 9
        },
        {
          "date": "2015-07-16",
          "column-2": 22,
          "column-3": 20,
          "column-4": 4
        },
        {
          "date": "2015-07-17",
          "column-2": 21,
          "column-3": 13,
          "column-4": 4
        },
        {
          "date": "2015-07-18",
          "column-2": 10,
          "column-3": 13,
          "column-4": 5
        },
        {
          "date": "2015-07-19",
          "column-2": 24,
          "column-3": 9,
          "column-4": 9
        },
        {
          "date": "2015-07-20",
          "column-2": 27,
          "column-3": 8,
          "column-4": 6
        },
        {
          "date": "2015-07-21",
          "column-2": 7,
          "column-3": 0,
          "column-4": 4
        },
        {
          "date": "2015-07-22",
          "column-2": 24,
          "column-3": 12,
          "column-4": 8
        },
        {
          "date": "2015-07-23",
          "column-2": 5,
          "column-3": 10,
          "column-4": 7
        },
        {
          "date": "2015-07-24",
          "column-2": 9,
          "column-3": 6,
          "column-4": 8
        },
        {
          "date": "2015-07-25",
          "column-2": 22,
          "column-3": 13,
          "column-4": 7
        },
        {
          "date": "2015-07-26",
          "column-2": 4,
          "column-3": 19,
          "column-4": 1
        },
        {
          "date": "2015-07-27",
          "column-2": 11,
          "column-3": 4,
          "column-4": 4
        },
        {
          "date": "2015-07-28",
          "column-2": 14,
          "column-3": 6,
          "column-4": 1
        },
        {
          "date": "2015-07-29",
          "column-2": 3,
          "column-3": 20,
          "column-4": 4
        },
        {
          "date": "2015-07-30",
          "column-2": 30,
          "column-3": 17,
          "column-4": 1
        },
        {
          "date": "2015-07-31",
          "column-2": 28,
          "column-3": 0,
          "column-4": 4
        }
      ]
    }
  );
</script>

<script type="text/javascript">
  AmCharts.makeChart("month08",
    {
      "type": "serial",
      "categoryField": "date",
      "dataDateFormat": "YYYY-MM-DD",
      "theme": "light",
      "export": {
        "enabled": true
      },
      "categoryAxis": {
        "parseDates": true
      },
      "chartCursor": {
        "enabled": true
      },
      "chartScrollbar": {
        "enabled": true
      },
      "trendLines": [],
      "graphs": [
        {
          "id": "AmGraph-25",
          "title": "ลาป่วย",
          "valueField": "column-2"
        },
        {
          "id": "AmGraph-26",
          "title": "ลากิจ",
          "valueField": "column-3"
        },
        {
          "id": "AmGraph-27",
          "title": "อื่นๆ",
          "valueField": "column-4"
        }
      ],
      "guides": [],
      "valueAxes": [
        {
          "id": "ValueAxis-1",
          "title": "จำนวนคน"
        }
      ],
      "allLabels": [],
      "balloon": {},
      "legend": {
        "enabled": true,
        "useGraphSettings": true
      },
      "titles": [
        {
          "id": "Title-1",
          "size": 15,
          "text": "สิงหาคม"
        }
      ],
      "dataProvider": [
        {
          "date": "2015-08-01",
          "column-2": 26,
          "column-3": 1,
          "column-4": 4
        },
        {
          "date": "2015-08-02",
          "column-2": 30,
          "column-3": 17,
          "column-4": 7
        },
        {
          "date": "2015-08-03",
          "column-2": 26,
          "column-3": 12,
          "column-4": 6
        },
        {
          "date": "2015-08-04",
          "column-2": 16,
          "column-3": 20,
          "column-4": 10
        },
        {
          "date": "2015-08-05",
          "column-2": 25,
          "column-3": 1,
          "column-4": 2
        },
        {
          "date": "2015-08-06",
          "column-2": 15,
          "column-3": 8,
          "column-4": 1
        },
        {
          "date": "2015-08-07",
          "column-2": 25,
          "column-3": 16,
          "column-4": 7
        },
        {
          "date": "2015-08-08",
          "column-2": 2,
          "column-3": 2,
          "column-4": 6
        },
        {
          "date": "2015-08-09",
          "column-2": 27,
          "column-3": 5,
          "column-4": 5
        },
        {
          "date": "2015-08-10",
          "column-2": 3,
          "column-3": 5,
          "column-4": 9
        },
        {
          "date": "2015-08-11",
          "column-2": 26,
          "column-3": 12,
          "column-4": 6
        },
        {
          "date": "2015-08-12",
          "column-2": 2,
          "column-3": 12,
          "column-4": 7
        },
        {
          "date": "2015-08-13",
          "column-2": 25,
          "column-3": 14,
          "column-4": 8
        },
        {
          "date": "2015-08-14",
          "column-2": 3,
          "column-3": 1,
          "column-4": 10
        },
        {
          "date": "2015-08-15",
          "column-2": 26,
          "column-3": 20,
          "column-4": 5
        },
        {
          "date": "2015-08-16",
          "column-2": 26,
          "column-3": 13,
          "column-4": 9
        },
        {
          "date": "2015-08-17",
          "column-2": 26,
          "column-3": 8,
          "column-4": 7
        },
        {
          "date": "2015-08-18",
          "column-2": 8,
          "column-3": 7,
          "column-4": 6
        },
        {
          "date": "2015-08-19",
          "column-2": 27,
          "column-3": 10,
          "column-4": 1
        },
        {
          "date": "2015-08-20",
          "column-2": 4,
          "column-3": 17,
          "column-4": 6
        },
        {
          "date": "2015-08-21",
          "column-2": 10,
          "column-3": 2,
          "column-4": 4
        },
        {
          "date": "2015-08-22",
          "column-2": 2,
          "column-3": 0,
          "column-4": 7
        },
        {
          "date": "2015-08-23",
          "column-2": 12,
          "column-3": 5,
          "column-4": 10
        },
        {
          "date": "2015-08-24",
          "column-2": 27,
          "column-3": 10,
          "column-4": 9
        },
        {
          "date": "2015-08-25",
          "column-2": 18,
          "column-3": 3,
          "column-4": 8
        },
        {
          "date": "2015-08-26",
          "column-2": 22,
          "column-3": 13,
          "column-4": 0
        },
        {
          "date": "2015-08-27",
          "column-2": 23,
          "column-3": 17,
          "column-4": 4
        },
        {
          "date": "2015-08-28",
          "column-2": 6,
          "column-3": 11,
          "column-4": 2
        },
        {
          "date": "2015-08-29",
          "column-2": 19,
          "column-3": 14,
          "column-4": 10
        },
        {
          "date": "2015-08-30",
          "column-2": 15,
          "column-3": 8,
          "column-4": 9
        },
        {
          "date": "2015-08-31",
          "column-2": 21,
          "column-3": 5,
          "column-4": 9
        }
      ]
    }
  );
</script>

<script type="text/javascript">
  AmCharts.makeChart("month09",
    {
      "type": "serial",
      "categoryField": "date",
      "dataDateFormat": "YYYY-MM-DD",
      "theme": "light",
      "export": {
        "enabled": true
      },
      "categoryAxis": {
        "parseDates": true
      },
      "chartCursor": {
        "enabled": true
      },
      "chartScrollbar": {
        "enabled": true
      },
      "trendLines": [],
      "graphs": [
        {
          "id": "AmGraph-28",
          "title": "ลาป่วย",
          "valueField": "column-2"
        },
        {
          "id": "AmGraph-29",
          "title": "ลากิจ",
          "valueField": "column-3"
        },
        {
          "id": "AmGraph-30",
          "title": "อื่นๆ",
          "valueField": "column-4"
        }
      ],
      "guides": [],
      "valueAxes": [
        {
          "id": "ValueAxis-1",
          "title": "จำนวนคน"
        }
      ],
      "allLabels": [],
      "balloon": {},
      "legend": {
        "enabled": true,
        "useGraphSettings": true
      },
      "titles": [
        {
          "id": "Title-1",
          "size": 15,
          "text": "กันยายน"
        }
      ],
      "dataProvider": [
        {
          "date": "2015-09-01",
          "column-2": 15,
          "column-3": 18,
          "column-4": 1
        },
        {
          "date": "2015-09-02",
          "column-2": 29,
          "column-3": 3,
          "column-4": 8
        },
        {
          "date": "2015-09-03",
          "column-2": 25,
          "column-3": 4,
          "column-4": 5
        },
        {
          "date": "2015-09-04",
          "column-2": 13,
          "column-3": 7,
          "column-4": 6
        },
        {
          "date": "2015-09-05",
          "column-2": 17,
          "column-3": 10,
          "column-4": 1
        },
        {
          "date": "2015-09-06",
          "column-2": 26,
          "column-3": 4,
          "column-4": 10
        },
        {
          "date": "2015-09-07",
          "column-2": 6,
          "column-3": 4,
          "column-4": 3
        },
        {
          "date": "2015-09-08",
          "column-2": 6,
          "column-3": 17,
          "column-4": 10
        },
        {
          "date": "2015-09-09",
          "column-2": 15,
          "column-3": 16,
          "column-4": 3
        },
        {
          "date": "2015-09-10",
          "column-2": 12,
          "column-3": 0,
          "column-4": 9
        },
        {
          "date": "2015-09-11",
          "column-2": 0,
          "column-3": 11,
          "column-4": 6
        },
        {
          "date": "2015-09-12",
          "column-2": 20,
          "column-3": 0,
          "column-4": 10
        },
        {
          "date": "2015-09-13",
          "column-2": 17,
          "column-3": 10,
          "column-4": 2
        },
        {
          "date": "2015-09-14",
          "column-2": 11,
          "column-3": 3,
          "column-4": 1
        },
        {
          "date": "2015-09-15",
          "column-2": 17,
          "column-3": 17,
          "column-4": 9
        },
        {
          "date": "2015-09-16",
          "column-2": 18,
          "column-3": 15,
          "column-4": 0
        },
        {
          "date": "2015-09-17",
          "column-2": 0,
          "column-3": 11,
          "column-4": 9
        },
        {
          "date": "2015-09-18",
          "column-2": 12,
          "column-3": 7,
          "column-4": 2
        },
        {
          "date": "2015-09-19",
          "column-2": 7,
          "column-3": 8,
          "column-4": 4
        },
        {
          "date": "2015-09-20",
          "column-2": 30,
          "column-3": 14,
          "column-4": 9
        },
        {
          "date": "2015-09-21",
          "column-2": 1,
          "column-3": 19,
          "column-4": 4
        },
        {
          "date": "2015-09-22",
          "column-2": 5,
          "column-3": 13,
          "column-4": 0
        },
        {
          "date": "2015-09-23",
          "column-2": 24,
          "column-3": 18,
          "column-4": 4
        },
        {
          "date": "2015-09-24",
          "column-2": 0,
          "column-3": 5,
          "column-4": 10
        },
        {
          "date": "2015-09-25",
          "column-2": 29,
          "column-3": 5,
          "column-4": 2
        },
        {
          "date": "2015-09-26",
          "column-2": 28,
          "column-3": 5,
          "column-4": 0
        },
        {
          "date": "2015-09-27",
          "column-2": 12,
          "column-3": 15,
          "column-4": 5
        },
        {
          "date": "2015-09-28",
          "column-2": 27,
          "column-3": 5,
          "column-4": 7
        },
        {
          "date": "2015-09-29",
          "column-2": 29,
          "column-3": 12,
          "column-4": 0
        },
        {
          "date": "2015-09-30",
          "column-2": 14,
          "column-3": 17,
          "column-4": 6
        }
      ]
    }
  );
</script>

<script type="text/javascript">
  AmCharts.makeChart("month10",
    {
      "type": "serial",
      "categoryField": "date",
      "dataDateFormat": "YYYY-MM-DD",
      "theme": "light",
      "export": {
        "enabled": true
      },
      "categoryAxis": {
        "parseDates": true
      },
      "chartCursor": {
        "enabled": true
      },
      "chartScrollbar": {
        "enabled": true
      },
      "trendLines": [],
      "graphs": [
        {
          "id": "AmGraph-31",
          "title": "ลาป่วย",
          "valueField": "column-2"
        },
        {
          "id": "AmGraph-33",
          "title": "ลากิจ",
          "valueField": "column-4"
        },
        {
          "id": "AmGraph-34",
          "title": "อื่นๆ",
          "valueField": "column-3"
        }
      ],
      "guides": [],
      "valueAxes": [
        {
          "id": "ValueAxis-1",
          "title": "จำนวนคน"
        }
      ],
      "allLabels": [],
      "balloon": {},
      "legend": {
        "enabled": true,
        "useGraphSettings": true
      },
      "titles": [
        {
          "id": "Title-1",
          "size": 15,
          "text": "ตุลาคม"
        }
      ],
      "dataProvider": [
        {
          "date": "2015-10-01",
          "column-2": 28,
          "column-3": 13,
          "column-4": 4
        },
        {
          "date": "2015-10-02",
          "column-2": 19,
          "column-3": 18,
          "column-4": 8
        },
        {
          "date": "2015-10-03",
          "column-2": 23,
          "column-3": 20,
          "column-4": 10
        },
        {
          "date": "2015-10-04",
          "column-2": 7,
          "column-3": 1,
          "column-4": 3
        },
        {
          "date": "2015-10-05",
          "column-2": 4,
          "column-3": 16,
          "column-4": 6
        },
        {
          "date": "2015-10-06",
          "column-2": 22,
          "column-3": 15,
          "column-4": 1
        },
        {
          "date": "2015-10-07",
          "column-2": 13,
          "column-3": 14,
          "column-4": 6
        },
        {
          "date": "2015-10-08",
          "column-2": 1,
          "column-3": 12,
          "column-4": 10
        },
        {
          "date": "2015-10-09",
          "column-2": 8,
          "column-3": 3,
          "column-4": 1
        },
        {
          "date": "2015-10-10",
          "column-2": 9,
          "column-3": 4,
          "column-4": 1
        },
        {
          "date": "2015-10-11",
          "column-2": 27,
          "column-3": 15,
          "column-4": 4
        },
        {
          "date": "2015-10-12",
          "column-2": 22,
          "column-3": 4,
          "column-4": 8
        },
        {
          "date": "2015-10-13",
          "column-2": 29,
          "column-3": 11,
          "column-4": 2
        },
        {
          "date": "2015-10-14",
          "column-2": 16,
          "column-3": 9,
          "column-4": 9
        },
        {
          "date": "2015-10-15",
          "column-2": 30,
          "column-3": 8,
          "column-4": 7
        },
        {
          "date": "2015-10-16",
          "column-2": 25,
          "column-3": 10,
          "column-4": 0
        },
        {
          "date": "2015-10-17",
          "column-2": 22,
          "column-3": 9,
          "column-4": 2
        },
        {
          "date": "2015-10-18",
          "column-2": 30,
          "column-3": 3,
          "column-4": 6
        },
        {
          "date": "2015-10-19",
          "column-2": 17,
          "column-3": 17,
          "column-4": 6
        },
        {
          "date": "2015-10-20",
          "column-2": 5,
          "column-3": 20,
          "column-4": 4
        },
        {
          "date": "2015-10-21",
          "column-2": 12,
          "column-3": 0,
          "column-4": 4
        },
        {
          "date": "2015-10-22",
          "column-2": 8,
          "column-3": 19,
          "column-4": 0
        },
        {
          "date": "2015-10-23",
          "column-2": 19,
          "column-3": 1,
          "column-4": 1
        },
        {
          "date": "2015-10-24",
          "column-2": 28,
          "column-3": 11,
          "column-4": 5
        },
        {
          "date": "2015-10-25",
          "column-2": 17,
          "column-3": 3,
          "column-4": 8
        },
        {
          "date": "2015-10-26",
          "column-2": 9,
          "column-3": 13,
          "column-4": 7
        },
        {
          "date": "2015-10-27",
          "column-2": 1,
          "column-3": 10,
          "column-4": 9
        },
        {
          "date": "2015-10-28",
          "column-2": 10,
          "column-3": 20,
          "column-4": 1
        },
        {
          "date": "2015-10-29",
          "column-2": 18,
          "column-3": 10,
          "column-4": 1
        },
        {
          "date": "2015-10-30",
          "column-2": 27,
          "column-3": 10,
          "column-4": 1
        },
        {
          "date": "2015-10-31",
          "column-2": 0,
          "column-3": 11,
          "column-4": 5
        }
      ]
    }
  );
</script>

<script type="text/javascript">
  AmCharts.makeChart("month11",
    {
      "type": "serial",
      "categoryField": "date",
      "dataDateFormat": "YYYY-MM-DD",
      "theme": "light",
      "export": {
        "enabled": true
      },
      "categoryAxis": {
        "parseDates": true
      },
      "chartCursor": {
        "enabled": true
      },
      "chartScrollbar": {
        "enabled": true
      },
      "trendLines": [],
      "graphs": [
        {
          "id": "AmGraph-35",
          "title": "ลาป่วย",
          "valueField": "column-2"
        },
        {
          "id": "AmGraph-36",
          "title": "ลากิจ",
          "valueField": "column-3"
        },
        {
          "id": "AmGraph-37",
          "title": "อื่นๆ",
          "valueField": "column-4"
        }
      ],
      "guides": [],
      "valueAxes": [
        {
          "id": "ValueAxis-1",
          "title": "จำนวนคน"
        }
      ],
      "allLabels": [],
      "balloon": {},
      "legend": {
        "enabled": true,
        "useGraphSettings": true
      },
      "titles": [
        {
          "id": "Title-1",
          "size": 15,
          "text": "พฤศจิกายน"
        }
      ],
      "dataProvider": [
        {
          "date": "2015-11-01",
          "column-2": 7,
          "column-3": 13,
          "column-4": 5
        },
        {
          "date": "2015-11-02",
          "column-2": 8,
          "column-3": 7,
          "column-4": 1
        },
        {
          "date": "2015-11-03",
          "column-2": 8,
          "column-3": 16,
          "column-4": 0
        },
        {
          "date": "2015-11-04",
          "column-2": 6,
          "column-3": 7,
          "column-4": 3
        },
        {
          "date": "2015-11-05",
          "column-2": 25,
          "column-3": 4,
          "column-4": 6
        },
        {
          "date": "2015-11-06",
          "column-2": 29,
          "column-3": 6,
          "column-4": 5
        },
        {
          "date": "2015-11-07",
          "column-2": 24,
          "column-3": 8,
          "column-4": 4
        },
        {
          "date": "2015-11-08",
          "column-2": 28,
          "column-3": 19,
          "column-4": 1
        },
        {
          "date": "2015-11-09",
          "column-2": 10,
          "column-3": 15,
          "column-4": 0
        },
        {
          "date": "2015-11-10",
          "column-2": 6,
          "column-3": 14,
          "column-4": 3
        },
        {
          "date": "2015-11-11",
          "column-2": 21,
          "column-3": 20,
          "column-4": 8
        },
        {
          "date": "2015-11-12",
          "column-2": 12,
          "column-3": 16,
          "column-4": 1
        },
        {
          "date": "2015-11-13",
          "column-2": 5,
          "column-3": 4,
          "column-4": 0
        },
        {
          "date": "2015-11-14",
          "column-2": 0,
          "column-3": 14,
          "column-4": 5
        },
        {
          "date": "2015-11-15",
          "column-2": 12,
          "column-3": 3,
          "column-4": 5
        },
        {
          "date": "2015-11-16",
          "column-2": 17,
          "column-3": 6,
          "column-4": 7
        },
        {
          "date": "2015-11-17",
          "column-2": 6,
          "column-3": 12,
          "column-4": 5
        },
        {
          "date": "2015-11-18",
          "column-2": 11,
          "column-3": 4,
          "column-4": 2
        },
        {
          "date": "2015-11-19",
          "column-2": 24,
          "column-3": 18,
          "column-4": 9
        },
        {
          "date": "2015-11-20",
          "column-2": 28,
          "column-3": 19,
          "column-4": 4
        },
        {
          "date": "2015-11-21",
          "column-2": 20,
          "column-3": 16,
          "column-4": 9
        },
        {
          "date": "2015-11-22",
          "column-2": 19,
          "column-3": 13,
          "column-4": 10
        },
        {
          "date": "2015-11-23",
          "column-2": 23,
          "column-3": 15,
          "column-4": 4
        },
        {
          "date": "2015-11-24",
          "column-2": 10,
          "column-3": 13,
          "column-4": 8
        },
        {
          "date": "2015-11-25",
          "column-2": 1,
          "column-3": 19,
          "column-4": 3
        },
        {
          "date": "2015-11-26",
          "column-2": 17,
          "column-3": 16,
          "column-4": 7
        },
        {
          "date": "2015-11-27",
          "column-2": 11,
          "column-3": 17,
          "column-4": 7
        },
        {
          "date": "2015-11-28",
          "column-2": 11,
          "column-3": 14,
          "column-4": 1
        },
        {
          "date": "2015-11-29",
          "column-2": 12,
          "column-3": 17,
          "column-4": 2
        },
        {
          "date": "2015-11-30",
          "column-2": 1,
          "column-3": 16,
          "column-4": 6
        }
      ]
    }
  );
</script>

<script type="text/javascript">
  AmCharts.makeChart("month12",
    {
      "type": "serial",
      "categoryField": "date",
      "dataDateFormat": "YYYY-MM-DD",
      "theme": "light",
      "export": {
        "enabled": true
      },
      "categoryAxis": {
        "parseDates": true
      },
      "chartCursor": {
        "enabled": true
      },
      "chartScrollbar": {
        "enabled": true
      },
      "trendLines": [],
      "graphs": [
        {
          "id": "AmGraph-38",
          "title": "ลาป่วย",
          "valueField": "column-2"
        },
        {
          "id": "AmGraph-39",
          "title": "ลากิจ",
          "valueField": "column-3"
        },
        {
          "id": "AmGraph-40",
          "title": "อื่นๆ",
          "valueField": "column-4"
        }
      ],
      "guides": [],
      "valueAxes": [
        {
          "id": "ValueAxis-1",
          "title": "จำนวนคน"
        }
      ],
      "allLabels": [],
      "balloon": {},
      "legend": {
        "enabled": true,
        "useGraphSettings": true
      },
      "titles": [
        {
          "id": "Title-1",
          "size": 15,
          "text": "ธันวาคม"
        }
      ],
      "dataProvider": [
        {
          "date": "2015-12-01",
          "column-2": 7,
          "column-3": 16,
          "column-4": 1
        },
        {
          "date": "2015-12-02",
          "column-2": 16,
          "column-3": 7,
          "column-4": 2
        },
        {
          "date": "2015-12-03",
          "column-2": 29,
          "column-3": 8,
          "column-4": 3
        },
        {
          "date": "2015-12-04",
          "column-2": 12,
          "column-3": 4,
          "column-4": 7
        },
        {
          "date": "2015-12-05",
          "column-2": 7,
          "column-3": 5,
          "column-4": 5
        },
        {
          "date": "2015-12-06",
          "column-2": 27,
          "column-3": 5,
          "column-4": 5
        },
        {
          "date": "2015-12-07",
          "column-2": 2,
          "column-3": 20,
          "column-4": 8
        },
        {
          "date": "2015-12-08",
          "column-2": 12,
          "column-3": 0,
          "column-4": 6
        },
        {
          "date": "2015-12-09",
          "column-2": 14,
          "column-3": 9,
          "column-4": 1
        },
        {
          "date": "2015-12-10",
          "column-2": 2,
          "column-3": 20,
          "column-4": 6
        },
        {
          "date": "2015-12-11",
          "column-2": 23,
          "column-3": 17,
          "column-4": 10
        },
        {
          "date": "2015-12-12",
          "column-2": 11,
          "column-3": 17,
          "column-4": 10
        },
        {
          "date": "2015-12-13",
          "column-2": 27,
          "column-3": 13,
          "column-4": 3
        },
        {
          "date": "2015-12-14",
          "column-2": 25,
          "column-3": 14,
          "column-4": 1
        },
        {
          "date": "2015-12-15",
          "column-2": 17,
          "column-3": 6,
          "column-4": 8
        },
        {
          "date": "2015-12-16",
          "column-2": 20,
          "column-3": 9,
          "column-4": 5
        },
        {
          "date": "2015-12-17",
          "column-2": 27,
          "column-3": 8,
          "column-4": 9
        },
        {
          "date": "2015-12-18",
          "column-2": 20,
          "column-3": 6,
          "column-4": 2
        },
        {
          "date": "2015-12-19",
          "column-2": 10,
          "column-3": 11,
          "column-4": 10
        },
        {
          "date": "2015-12-20",
          "column-2": 5,
          "column-3": 9,
          "column-4": 9
        },
        {
          "date": "2015-12-21",
          "column-2": 4,
          "column-3": 3,
          "column-4": 10
        },
        {
          "date": "2015-12-22",
          "column-2": 25,
          "column-3": 4,
          "column-4": 6
        },
        {
          "date": "2015-12-23",
          "column-2": 29,
          "column-3": 15,
          "column-4": 1
        },
        {
          "date": "2015-12-24",
          "column-2": 18,
          "column-3": 16,
          "column-4": 3
        },
        {
          "date": "2015-12-25",
          "column-2": 22,
          "column-3": 6,
          "column-4": 8
        },
        {
          "date": "2015-12-26",
          "column-2": 12,
          "column-3": 9,
          "column-4": 4
        },
        {
          "date": "2015-12-27",
          "column-2": 20,
          "column-3": 6,
          "column-4": 8
        },
        {
          "date": "2015-12-28",
          "column-2": 15,
          "column-3": 13,
          "column-4": 3
        },
        {
          "date": "2015-12-29",
          "column-2": 6,
          "column-3": 6,
          "column-4": 8
        },
        {
          "date": "2015-12-30",
          "column-2": 3,
          "column-3": 0,
          "column-4": 10
        },
        {
          "date": "2015-12-31",
          "column-2": 20,
          "column-3": 8,
          "column-4": 3
        }
      ]
    }
  );
</script>

<!-- end monthchart -->

  <head>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">


  <script>
    $(function() {
      $( "#tabs" ).tabs()
    });
    $(function() {
      $( "#tabsin" ).tabs()
    });
    </script>



</head>
<body>

<div id="tabs">
  <ul>
    <li><a href="#tabs-1">ตลอดปี 2015</a></li>
    <li><a href="#tabs-2">เดือน</a></li>
  </ul>


  <div id="tabs-1">
    <div id="chartyear" style="width: 100%; height: 400px; background-color: #FFFFFF;" ></div>
  </div>
  <div id="tabs-2">
    <div class="container">
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">มกราคม</a></li>
        <li><a data-toggle="tab" href="#menu1">กุมภาพันธ์</a></li>
        <li><a data-toggle="tab" href="#menu2">มีนาคม</a></li>
        <li><a data-toggle="tab" href="#menu3">เมษายน</a></li>
        <li><a data-toggle="tab" href="#menu4">พฤษภาคม</a></li>
        <li><a data-toggle="tab" href="#menu5">มิถุนายน</a></li>
        <li><a data-toggle="tab" href="#menu6">กรกฏาคม</a></li>
        <li><a data-toggle="tab" href="#menu7">สิงหาคม</a></li>
        <li><a data-toggle="tab" href="#menu8">กันยายน</a></li>
        <li><a data-toggle="tab" href="#menu9">ตุลาคม</a></li>
        <li><a data-toggle="tab" href="#menu10">พฤศจิกายน</a></li>
        <li><a data-toggle="tab" href="#menu11">ธันวาคม</a></li>
      </ul>

        <div class="tab-content">
          <div id="home" class="tab-pane fade in active">
            <div id="month01" style="width: 100%; height: 400px; background-color: #FFFFFF;" ></div>
          </div>
          <div id="menu1" class="tab-pane fade">
            <div id="month02" style="width: 100%; height: 400px; background-color: #FFFFFF;" ></div>
          </div>
          <div id="menu2" class="tab-pane fade">
            <div id="month03" style="width: 100%; height: 400px; background-color: #FFFFFF;" ></div>
          </div>
          <div id="menu3" class="tab-pane fade">
            <div id="month04" style="width: 100%; height: 400px; background-color: #FFFFFF;" ></div>
          </div>
          <div id="menu4" class="tab-pane fade">
            <div id="month05" style="width: 100%; height: 400px; background-color: #FFFFFF;" ></div>
          </div>
          <div id="menu5" class="tab-pane fade">
            <div id="month06" style="width: 100%; height: 400px; background-color: #FFFFFF;" ></div>
          </div>
          <div id="menu6" class="tab-pane fade">
            <div id="month07" style="width: 100%; height: 400px; background-color: #FFFFFF;" ></div>
          </div>
          <div id="menu7" class="tab-pane fade">
            <div id="month08" style="width: 100%; height: 400px; background-color: #FFFFFF;" ></div>
          </div>
          <div id="menu8" class="tab-pane fade">
            <div id="month09" style="width: 100%; height: 400px; background-color: #FFFFFF;" ></div>
          </div>
          <div id="menu9" class="tab-pane fade">
            <div id="month10" style="width: 100%; height: 400px; background-color: #FFFFFF;" ></div>
          </div>
          <div id="menu10" class="tab-pane fade">
            <div id="month11" style="width: 100%; height: 400px; background-color: #FFFFFF;" ></div>
          </div>
          <div id="menu11" class="tab-pane fade">
            <div id="month12" style="width: 100%; height: 400px; background-color: #FFFFFF;" ></div>
          </div>
        </div>

    </div>

    </div>
  </div>



</div>
  </body>
</html>
