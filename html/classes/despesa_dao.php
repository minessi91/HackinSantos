<?php
 class Despesa_dao {

	public static $instance;

	private function __construct() {}


	public static function getInstance()
	{
	  if (!isset(self::$instance))
		  self::$instance = new Despesa_dao();

	  return self::$instance;
	}

	public function BuscarTodos_porAnoExercicio($ano)
	{
		try
		{
		  $sql = "SELECT *  FROM despesa where despesa_ano_exercicio = ".$ano;
		  $result = Conexao::getInstance()->query($sql);
		  $lista = $result->fetchAll(PDO::FETCH_ASSOC);
		  $f_lista = array();
		  var_dump($lista);
		  foreach ($lista as $l)
		  {
			  $f_lista[] = $this->populaDespesa($l);
		  }
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
		  $sql = "SELECT * , despesa_ds_despesa, sum(despesa_vl_despesa) as despesa_vl_despesa
      FROM despesa
      where despesa_ano_exercicio = ".$ano." group by despesa_ds_despesa order by despesa_vl_despesa desc limit 5";
		  $result = Conexao::getInstance()->query($sql);
		  $lista = $result->fetchAll(PDO::FETCH_ASSOC);
		  $f_lista = array();

		  foreach ($lista as $l)
		  {
			  $f_lista[] = $this->populaDespesa($l);
		  }
		  return $f_lista;
		}
		catch (Exception $e)
		{
		  print "Ocorreu um erro : ".$e;
		}
	}

	private function populaDespesa($row)
	{
  	$pojo = new despesa();
  	$pojo->setDespesa_id($row['despesa_id']);
  	$pojo->setDespesa_id_despesa_detalhe($row['despesa_id_despesa_detalhe']);
  	$pojo->setDespesa_ano_exercicio($row['despesa_ano_exercicio']);
  	$pojo->setDespesa_ds_municipio($row['despesa_ds_municipio']);
  	$pojo->setDespesa_ds_orgao($row['despesa_ds_orgao']);
  	$pojo->setDespesa_mes_referencia($row['despesa_mes_referencia']);
  	$pojo->setDespesa_tp_despesa($row['despesa_tp_despesa']);
  	$pojo->setDespesa_nr_empenho($row['despesa_nr_empenho']);
  	$pojo->setDespesa_identificador_despesa($row['despesa_identificador_despesa']);
  	$pojo->setDespesa_ds_despesa($row['despesa_ds_despesa']);
  	$pojo->setDespesa_dt_emissao_despesa($row['despesa_dt_emissao_despesa']);
  	$pojo->setDespesa_vl_despesa($row['despesa_vl_despesa']);
  	$pojo->setDespesa_ds_funcao_governo($row['despesa_ds_funcao_governo']);
  	$pojo->setDespesa_ds_subfuncao_governo($row['despesa_ds_subfuncao_governo']);
  	$pojo->setDespesa_cd_programa($row['despesa_cd_programa']);
  	$pojo->setDespesa_ds_programa($row['despesa_ds_programa']);
  	$pojo->setDespesa_cd_acao($row['despesa_cd_acao']);
    $pojo->setDespesa_ds_acao($row['despesa_ds_acao']);
  	$pojo->setDespesa_ds_fonte_recurso($row['despesa_ds_fonte_recurso']);
  	$pojo->setDespesa_ds_cd_aplicacao_fixo($row['despesa_ds_cd_aplicacao_fixo']);
  	$pojo->setDespesa_ds_modalidade_lic($row['despesa_ds_modalidade_lic']);
  	$pojo->setDespesa_ds_elemento($row['despesa_ds_elemento']);
  	$pojo->setDespesa_historico_despesa($row['despesa_historico_despesa']);
  	$pojo->setDespesa_obs($row['despesa_obs']);
  	$pojo->setDespesa_obs2($row['despesa_obs2']);
  	$pojo->setDespesa_obs3($row['despesa_obs3']);
  	return $pojo;
	}
  }

  ?>
