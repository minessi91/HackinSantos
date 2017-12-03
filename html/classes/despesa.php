<?php   
  class Despesa {   
		private $despesa_id;
		private $despesa_id_despesa_detalhe;
		private $despesa_ano_exercicio;
		private $despesa_ds_municipio;
		private $despesa_ds_orgao;
		private $despesa_mes_referencia;
		private $despesa_tp_despesa;
		private $despesa_nr_empenho;
		private $despesa_identificador_despesa;
		private $despesa_ds_despesa;
		private $despesa_dt_emissao_despesa;
		private $despesa_vl_despesa;
		private $despesa_ds_funcao_governo;
		private $despesa_ds_subfuncao_governo;
		private $despesa_cd_programa;
		private $despesa_ds_programa;
		private $despesa_cd_acao;
		private $despesa_ds_acao;
		private $despesa_ds_fonte_recurso;
		private $despesa_ds_cd_aplicacao_fixo;
		private $despesa_ds_modalidade_lic;
		private $despesa_ds_elemento;
		private $despesa_historico_despesa;
		private $despesa_obs;
		private $despesa_obs2;
		private $despesa_obs3;

      public function getDespesa_id() {
          return $this->despesa_id;
      }
   
      public function setDespesa_id($despesa_id) {
          $this->despesa_id = $despesa_id;
      }
   
      public function getDespesa_id_despesa_detalhe() {
          return $this->despesa_id_despesa_detalhe;
      }
   
      public function setDespesa_id_despesa_detalhe($despesa_id_despesa_detalhe) {
          $this->despesa_id_despesa_detalhe = $despesa_id_despesa_detalhe;
      }
   
      public function getDespesa_ano_exercicio() {
          return $this->despesa_ano_exercicio;
      }
   
      public function setDespesa_ano_exercicio($despesa_ano_exercicio) {
          $this->despesa_ano_exercicio = strtolower($despesa_ano_exercicio);
      }
   
      public function getDespesa_ds_municipio() {
          return $this->despesa_ds_municipio;
      }
   
      public function setDespesa_ds_municipio($despesa_ds_municipio) {
          $this->despesa_ds_municipio = $despesa_ds_municipio;
      }    
      
      public function getDespesa_ds_orgao() {
          return $this->despesa_ds_orgao;
      }
   
      public function setDespesa_ds_orgao($despesa_ds_orgao) {
          $this->despesa_ds_orgao = strtolower($despesa_ds_orgao);
      }
      
      public function getDespesa_mes_referencia() {
          return $this->despesa_mes_referencia;
      }
   
      public function setDespesa_mes_referencia($despesa_mes_referencia) {
          $this->despesa_mes_referencia = $despesa_mes_referencia;
      }
	  
	  public function getDespesa_tp_despesa() {
          return $this->despesa_tp_despesa;
      }
   
      public function setDespesa_tp_despesa($despesa_tp_despesa) {
          $this->despesa_tp_despesa = $despesa_tp_despesa;
      }
	  
	  public function getDespesa_nr_empenho() {
          return $this->despesa_nr_empenho;
      }
   
      public function setDespesa_nr_empenho($despesa_nr_empenho) {
          $this->despesa_nr_empenho = $despesa_nr_empenho;
      }
	  
	  public function getDespesa_identificador_despesa() {
          return $this->despesa_identificador_despesa;
      }
   
      public function setDespesa_identificador_despesa($despesa_identificador_despesa) {
          $this->despesa_identificador_despesa = $despesa_identificador_despesa;
      }
     
	 public function getDespesa_ds_despesa() {
          return $this->despesa_ds_despesa;
      }
   
      public function setDespesa_ds_despesa() {
          $this->despesa_ds_despesa = $despesa_ds_despesa;
      }
   
	public function getDespesa_dt_emissao_despesa() {
          return $this->despesa_dt_emissao_despesa;
      }
   
      public function setDespesa_dt_emissao_despesa($despesa_dt_emissao_despesa) {
          $this->despesa_dt_emissao_despesa = $despesa_dt_emissao_despesa;
      }
   public function getDespesa_vl_despesa() {
          return $this->despesa_vl_despesa;
      }
   
      public function setDespesa_vl_despesa($despesa_vl_despesa) {
          $this->despesa_vl_despesa = $despesa_vl_despesa;
      }
	  public function getDespesa_ds_funcao_governo() {
          return $this->despesa_ds_funcao_governo;
      }
   
      public function setDespesa_ds_funcao_governo($despesa_ds_funcao_governo) {
          $this->despesa_ds_funcao_governo = $despesa_ds_funcao_governo;
      }
   public function getDespesa_ds_subfuncao_governo() {
          return $this->despesa_ds_subfuncao_governo;
      }
   
      public function setDespesa_ds_subfuncao_governo($despesa_ds_subfuncao_governo) {
          $this->despesa_ds_subfuncao_governo = $despesa_ds_subfuncao_governo;
      }
    public function getDespesa_cd_programa() {
          return $this->despesa_cd_programa;
      }
   
      public function setDespesa_cd_programa($despesa_cd_programa) {
          $this->despesa_cd_programa = $despesa_cd_programa;
      }
   public function getDespesa_ds_programa() {
          return $this->despesa_ds_programa;
      }
   
      public function setDespesa_ds_programa($despesa_ds_programa) {
          $this->despesa_ds_programa = $despesa_ds_programa;
      }
   public function getDespesa_cd_acao() {
          return $this->despesa_cd_acao;
      }
   
      public function setDespesa_cd_acao($despesa_cd_acao) {
          $this->despesa_cd_acao = $despesa_cd_acao;
      }
    public function getDespesa_ds_acao() {
          return $this->despesa_ds_acao;
      }
   
      public function setDespesa_ds_acao($despesa_ds_acao) {
          $this->despesa_ds_acao = $despesa_ds_acao;
      }
    public function getDespesa_ds_fonte_recurso() {
          return $this->despesa_ds_fonte_recurso;
      }
   
      public function setDespesa_ds_fonte_recurso($despesa_ds_fonte_recurso) {
          $this->despesa_ds_fonte_recurso = $despesa_ds_fonte_recurso;
      }
    public function getDespesa_ds_cd_aplicacao_fixo() {
          return $this->despesa_ds_cd_aplicacao_fixo;
      }
   
      public function setDespesa_ds_cd_aplicacao_fixo($despesa_ds_cd_aplicacao_fixo) {
          $this->despesa_ds_cd_aplicacao_fixo = $despesa_ds_cd_aplicacao_fixo;
      }
    public function getDespesa_ds_modalidade_lic() {
          return $this->despesa_ds_modalidade_lic;
      }
   
      public function setDespesa_ds_modalidade_lic($despesa_ds_modalidade_lic) {
          $this->despesa_ds_modalidade_lic = $despesa_ds_modalidade_lic;
      }
    public function getDespesa_ds_elemento() {
          return $this->despesa_ds_elemento;
      }
   
      public function setDespesa_ds_elemento($despesa_ds_elemento) {
          $this->despesa_ds_elemento = $despesa_ds_elemento;
      }
    public function getDespesa_historico_despesa() {
          return $this->despesa_historico_despesa;
      }
   
      public function setDespesa_historico_despesa($despesa_historico_despesa) {
          $this->despesa_historico_despesa = $despesa_historico_despesa;
      }
    public function getDespesa_obs() {
          return $this->despesa_obs;
      }
   
      public function setDespesa_obs($despesa_obs) {
          $this->despesa_obs = $despesa_obs;
      }
     public function getDespesa_obs2() {
          return $this->despesa_obs2;
      }
   
      public function setDespesa_obs2($despesa_obs2) {
          $this->despesa_obs2 = $despesa_obs2;
      }
   public function getDespesa_obs3() {
          return $this->despesa_obs3;
      }
   
      public function setdespesa_obs3($despesa_obs3) {
          $this->despesa_obs3 = $despesa_obs3;
      }   
  }   
  ?>