<?php
 class Receita_dao{

	public static $instance;

	private function __construct() {
	  //
	}

	public static function getInstance() {
	  if (!isset(self::$instance))
		  self::$instance = new Receita_dao();

	  return self::$instance;
	}
	public function BuscarTodos_porAnoExercicio($ano)
	{
		try
		{
		  $sql = "SELECT * , receita_ds_cd_aplicacao_variavel, sum(receita_vl_arrecadacao) as receita_vl_arrecadacao
		  FROM receita where receita_ano_exercicio = ".$ano."
		  group by receita_ds_cd_aplicacao_variavel order by receita_vl_arrecadacao desc";
		  $result = Conexao::getInstance()->query($sql);
		  $lista = $result->fetchAll(PDO::FETCH_ASSOC);
		  $f_lista = array();

		  foreach ($lista as $l)
			  $f_lista[] = $this->populaReceita($l);

		  return $f_lista;
		}
		catch (Exception $e)
		{
		  print "Ocorreu um erro : ".$e;
		}
	}

	public function BuscarTodos_porAnoExercicio_topCincoArrecadacoes($ano)
	{
		try
		{
		  $sql = "SELECT * ,receita_ds_cd_aplicacao_variavel, sum(receita_vl_arrecadacao) as receita_vl_arrecadacao, count(receita_id) as receita_id FROM receita
			where receita_ano_exercicio = ".$ano." group by receita_ds_cd_aplicacao_variavel order by receita_vl_arrecadacao desc limit 5;";
		  $result = Conexao::getInstance()->query($sql);
		  $lista = $result->fetchAll(PDO::FETCH_ASSOC);
		  $f_lista = array();

		  foreach ($lista as $l)$sql = "select * from receita where receita_ano_exercicio = ".$ano."";
			  $f_lista[] = $this->populaReceita($l);

		  return $f_lista;
		}
		catch (Exception $e)
		{
		  print "Ocorreu um erro : ".$e;
		}
	}

	private function populaReceita($row)
	{
	$pojo = new Receita();
	$pojo->setId_receita($row['receita_id']);
	$pojo->setReceita_id_rec_arrec_detalhe($row['receita_id_rec_arrec_detalhe']);
	$pojo->setReceita_ano_exercicio($row['receita_ano_exercicio']);
	$pojo->setReceita_ds_municipio($row['receita_ds_municipio']);
	$pojo->setReceita_ds_orgao($row['receita_ds_orgao']);
	$pojo->setReceita_mes_referencia($row['receita_mes_referencia']);
	$pojo->setReceita_ds_poder($row['receita_ds_poder']);
	$pojo->setReceita_ds_fonte_recurso($row['receita_ds_fonte_recurso']);
	$pojo->setReceita_ds_cd_aplicacao_fixo($row['receita_ds_cd_aplicacao_fixo']);
	$pojo->setReceita_ds_cd_aplicacao_variavel($row['receita_ds_cd_aplicacao_variavel']);
	$pojo->setReceita_ds_categoria($row['receita_ds_categoria']);
	$pojo->setReceita_ds_subcategoria($row['receita_ds_subcategoria']);
	$pojo->setReceita_ds_fonte($row['receita_ds_fonte']);
	$pojo->setReceita_ds_rubrica($row['receita_ds_rubrica']);
	$pojo->setReceita_ds_alinea($row['receita_ds_alinea']);
	$pojo->setReceita_ds_subalinea($row['receita_ds_subalinea']);
	$pojo->setReceita_vl_arrecadacao($row['receita_vl_arrecadacao']);
	$pojo->setReceita_data_atualizacao($row['receita_data_atualizacao']);
	return $pojo;
    }
  }

  ?>
