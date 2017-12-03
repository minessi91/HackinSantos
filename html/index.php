<!doctype html>
<?php
	require('classes/receita_dao.php');
	require('classes/conexao.php');
	require('classes/receita.php');
	require('classes/despesa_dao.php');
	require('classes/despesa.php');
?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Câmara Transparente</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>

	<!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart','bar']});
      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(receitas);
	  // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(despesas);

	function receitas()
	{
		<?php
		//PIZZAS
		$daoReceita = Receita_dao::getInstance();
		$daoReceita_lista = $daoReceita->BuscarTodos_porAnoExercicio(2016);
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
               'width': 600,
               'height': 400,
               'chartArea': {'width': '100%', 'height': '80%'},
               'legend': {'position': 'middle'}
		}
		var chart_receitas = new google.visualization.PieChart(document.getElementById('chart_div_receitas_2016'));
        chart_receitas.draw(data_receitas, options);
    }
	</script>

</head>
<body>
	<div id="page"  style="margin:0;padding:0">
		<?php include_once('itens/menu.php');?>
		<div id="body" class="home" style="margin:0;padding:0">
			<div class="header">
				<div id="carrousel" style="background-image: url('images/mesa.jpeg');background-size: 100% auto;">
					<div id="carrousel" style="background-color:#fff;background-size: 100% auto;opacity:0.3;">
						<div style="float:left;postition:relative; width:100%;height:auto;margin: auto;padding:20px;">
							<h1>CONSULTA PÚBLICA</h1>
						</div>
						<div style="float:left;postition:relative;width:100%;height:auto;margin: auto">
							<h2></h2>
						</div>
						<div style="float:left;postition:relative">
							<a href="demonstrativo_exerc2017.php" class="more">EXERCÍCIO 2017</a>
							<h3>ULTIMOS BALANÇOS</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="body">
				<div>
					<h1>NOSSA MISSÃO</h1>
					<p>Trazer ao público todos os dados que contemplam a câmara dos vereadores, de forma simples e direta!</p>
				</div>
			</div>
			<div id="back2016">
				<div>
					<h1>Ano 2016</h1>
					<p>Gráfico de receita municipal referente ao ano de 2016</p>
					<div style="width: 100%; display: table;margin:0; padding:0;">
						<div style="display: table-row;margin:0; width:auto;padding:0;height:auto">
							<div id="chart_div_receitas_2016" style="chart_div:  display: block and margin: 0 auto;	"></div>
						</div>
					</div>
				</div>
			</div>
			<div id="back2017">
				<div>
					<h1>Ano 2017</h1>
					<p>Gráfico de receita municipal referente ao ano de 2017</p>
				</div>
			</div>
			<div id="datas">
				<div>
					<h1>dados</h1>
					<p>Trazer ao público todos os dados que contemplam a câmara dos vereadores, de forma simples e direta!</p>
				</div>
			</div>
		</div>
		<?php include_once('/itens/rodape.php');?>
	</div>
</body>
</html>
