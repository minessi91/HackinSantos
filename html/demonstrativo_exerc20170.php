<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Exercício 2017 - Câmara Transparente</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
	
	<!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<?php
	require_once('classes/receita_dao.php');require_once('classes/conexao.php');require_once('classes/receita.php');
	?>	
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart','bar']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(despesas);
	  // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(receitas);
	  // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawSort_receita);


      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
	function despesas() 
	{	 
		// Create the data table.
		var data_despesas = new google.visualization.DataTable();
		data_despesas.addColumn('string', 'Topping');
		data_despesas.addColumn('number', 'Slices');
		data_despesas.addRows([		
		  ['Mushrooms', 3],
		  ['Onions', 1],
		  ['Olives', 1],
		  ['Zucchini', 1],
		  ['Pepperoni', 2]
		]);	

		// Set chart options
		var options = {'title': 'Despesas do período',
			   'width': 400,
			   'height': 300,
			   'chartArea': {'width': '100%', 'height': '80%'},
			   'legend': {'position': 'middle'}
		};

		// Instantiate and draw our chart, passing in some options.
		var chart_despesas = new google.visualization.PieChart(document.getElementById('chart_div_despesas'));
		chart_despesas.draw(data_despesas, options);
	}
	function receitas() 
	{		
		<?php
		//PIZZAS
		$daoReceita = Receita_dao::getInstance();
		$daoReceita_lista = $daoReceita->BuscarTodos_porAnoExercicio(2017);	
		?>	
		// Create the data table.
        var data_receitas = new google.visualization.DataTable();
        data_receitas.addColumn('string', 'Topping');
        data_receitas.addColumn('number', 'Slices');
        data_receitas.addRows([
		<?php 
		foreach ($daoReceita_lista as $value)
		{
			if($value->getReceita_vl_arrecadacao()>=0)
			{
				echo "['".'R$' . number_format($value->getReceita_vl_arrecadacao(), 2, ',', '.')."', ".$value->getReceita_vl_arrecadacao()."]";
				if ($value === end($daoReceita_lista))
				{
					echo '';
				}
				else
				{
					echo ',';
				}
			}
		}
		?>
        ]);

        // Set chart options
        var options = {'title': 'Receitas do período',
               'width': 400,
               'height': 300,
               'chartArea': {'width': '100%', 'height': '80%'},
               'legend': {'position': 'middle'}
		};

		var chart_receitas = new google.visualization.PieChart(document.getElementById('chart_div_receitas'));
        chart_receitas.draw(data_receitas, options);
    }
	function drawSort_receita()
	{
		<?php	  
		//barras_horizontais
		$daoReceita = Receita_dao::getInstance();
		$daoReceita_lista = $daoReceita->BuscarTodos_porAnoExercicio_topCincoArrecadacoes(2017);
		?>
		var data = google.visualization.arrayToDataTable([
		['Receitas', 'Receita',],
		<?php 		
		foreach ($daoReceita_lista as $value)
		{
			if($value->getReceita_vl_arrecadacao()>=0)
			{
				echo "['".$value->getReceita_ds_cd_aplicacao_variavel()."',".$value->getReceita_vl_arrecadacao()."]";
				if ($value === end($daoReceita_lista))
				{
					echo '';
				}
				else
				{
					echo ',';
				}
			}
		}
		?>	
	  ]);

	  var options =
	  {
		title: 'As maiores Receitas recebidas',
		chartArea: {width: '30%'},
		hAxis: {
		  title: 'Total',
		  minValue: 0
		},
		vAxis: {
		  title: 'Receitas'
		}
	  };

	  var chart = new google.visualization.BarChart(document.getElementById('chart_sort_div_receitas'));
	  chart.draw(data, options);
	}		  
    </script>	
</head>
<body>
	<div id="page">
		<?php include('itens/menu.php');?>
		<div id="body">
			<div class="header"style="margin:0;padding:0;height:auto">
				<div>
					<h1 style="margin:0;padding:0">Exercício 2017</h1>	
					<div style="width: 100%; display: table;margin:0; padding:0;">
						<div style="display: table-row;margin:0; padding:0;height:auto">
							<div id="chart_div_receitas" style="width: 600px; display: table-cell;margin:0; padding:0;height:auto"></div>
							<div id="chart_div_despesas" style="display: table-cell;margin:0; padding:0;height:auto"></div>
						</div>
					</div	>
					<div style="width: 100%; display: table;margin:0; padding:0;">
						<div style="display: table-row;margin:0; padding:0;height:auto">
							<div id="chart_sort_div_receitas" style="width: 600px; display: table-cell;margin:0; padding:0;height:auto"></div>
							<div id="" style="display: table-cell;margin:0; padding:0;height:auto"></div>
						</div>
					</div>
					<h2>DADOS REFERÊNCIAS AO ANO DE 2017</h2>
					<!--<p>Our website templates are created with inspiration, checked for quality and originality and meticulously sliced and coded. What’s more, they’re absolutely free! You can do a lot with them. You can modify them. You can use them to design websites for clients, so long as you agree with the Terms of Use. You can even remove all our links if you want to.</p>
					<p>Looking for more templates? Just browse through all our Free Website Templates and find what you’re looking for. But if you don’t find any website template you can use, you can try our Free Web Design service and tell us all about it. Maybe you’re looking for something different, something special.</p> -->
				</div>
			</div>
		</div>
		<?php include_once('itens/rodape.php');?>
	</div>
</body>
</html>