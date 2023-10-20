<html>
  <head>

    <!-- gráfico de pizza -->
    

    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Pães', 32],
          ['Pudins', 18],
          ['Baguetes', 10],
          ['Sonhos', 17],
          ['Queijo Minas', 13]
        ]);

        // Set chart options
        var options = {'title':'Produtos vendidos hoje',
                       'width':700,
                       'height':600};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div1'));
        chart.draw(data, options);
      }
    </script>

    

      <!-- gráfico de coluna -->


      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Pães', 'Pudins', 'Baguetes', 'Sonhos', 'Queijo MInas'],
          ['2004/05',  1500,      1100,         1300,             1298,           600,      ],
          ['2005/06',  1600,      1120,        1220,             1068,          800,      ],
          ['2006/07',  1550,      1000,        1180,             907,           700,      ],
          ['2007/08',  1200,      980,        1280,             1006,           900,      ],
          ['2008/09',  1700,      1150,         1500,             1126,          780,      ]
        ]);

        var options = {
          title : 'Produção de Produtos (anual)',
          vAxis: {title: 'Cups'},
          hAxis: {title: 'Ano'},
          seriesType: 'bars',
          series: {5: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart_div2'));
        chart.draw(data, options);
      }
    </script>

      <!-- gráfico de linha -->


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Vendas', 'Despesas'],
          ['2004',  9000,      3000],
          ['2005',  10000,      4000],
          ['2006',  8000,       4200],
          ['2007',  10030,      3900]
        ]);

        var options = {
          title: 'Performance De Lucro/Despesa Da Padaria (Anual)',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>

<style>
        .chart-container {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            flex-wrap: wrap;
        }

        .chart {
            width: 40%; 
            margin-bottom: 30px;
        }
    </style>
    </head>
    <body>

    <div class="chart-container">
        <div class="chart" id="chart_div1" ></div>

        <div class="chart" id="chart_div2" style="width: 900px; height: 500px;"></div>
    </div>
        <div class="chart" id="curve_chart" style="width: 900px; height: 500px"></div>
 
  </body>
</html>
