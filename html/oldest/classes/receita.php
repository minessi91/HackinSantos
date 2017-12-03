<?php
   
  class receita {
   
		private $receita_id;
		private $receita_id_rec_arrec_detalhe;
		private $receita_ano_exercicio;
		private $receita_ds_municipio;
		private $receita_ds_orgao;
		private $receita_mes_referencia;
		private $receita_ds_poder;
		private $receita_ds_fonte_recurso;
		private $receita_ds_cd_aplicacao_fixo;
		private $receita_ds_cd_aplicacao_variavel;
		private $receita_ds_categoria;
		private $receita_ds_subcategoria;
		private $receita_ds_fonte;
		private $receita_ds_rubrica;
		private $receita_ds_alinea;
		private $receita_ds_subalinea;
		private $receita_vl_arrecadacao;
		private $receita_data_atualizacao;

      public function getId_receita() {
          return $this->receita_id;
      }
   
      public function setId_receita($receita_id) {
          $this->receita_id = $receita_id;
      }
   
      public function getReceita_id_rec_arrec_detalhe() {
          return $this->receita_id_rec_arrec_detalhe;
      }
   
      public function setReceita_id_rec_arrec_detalhe($receita_id_rec_arrec_detalhe) {
          $this->receita_id_rec_arrec_detalhe = $receita_id_rec_arrec_detalhe;
      }
   
      public function getReceita_ano_exercicio() {
          return $this->receita_ano_exercicio;
      }
   
      public function setReceita_ano_exercicio($receita_ano_exercicio) {
          $this->receita_ano_exercicio = strtolower($receita_ano_exercicio);
      }
   
      public function getReceita_ds_municipio() {
          return $this->receita_ds_municipio;
      }
   
      public function setReceita_ds_municipio($receita_ds_municipio) {
          $this->receita_ds_municipio = $receita_ds_municipio;
      }    
      
      public function getReceita_ds_orgao() {
          return $this->receita_ds_orgao;
      }
   
      public function setReceita_ds_orgao($receita_ds_orgao) {
          $this->receita_ds_orgao = strtolower($receita_ds_orgao);
      }
      
      public function getReceita_mes_referencia() {
          return $this->receita_mes_referencia;
      }
   
      public function setReceita_mes_referencia($receita_mes_referencia) {
          $this->receita_mes_referencia = $receita_mes_referencia;
      }
	  
	  public function getReceita_ds_poder() {
          return $this->receita_ds_poder;
      }
   
      public function setReceita_ds_poder($receita_ds_poder) {
          $this->receita_ds_poder = $receita_ds_poder;
      }
	  
	  public function getReceita_ds_fonte_recurso() {
          return $this->receita_ds_fonte_recurso;
      }
   
      public function setReceita_ds_fonte_recurso($receita_ds_fonte_recurso) {
          $this->receita_ds_fonte_recurso = $receita_ds_fonte_recurso;
      }
	  
	  public function getReceita_ds_cd_aplicacao_fixo() {
          return $this->receita_ds_cd_aplicacao_fixo;
      }
   
      public function setReceita_ds_cd_aplicacao_fixo($receita_ds_cd_aplicacao_fixo) {
          $this->receita_ds_cd_aplicacao_fixo = $receita_ds_cd_aplicacao_fixo;
      }
     
	 public function getReceita_ds_cd_aplicacao_variavel() {
          return $this->receita_ds_cd_aplicacao_variavel;
      }
   
      public function setReceita_ds_cd_aplicacao_variavel($receita_ds_cd_aplicacao_variavel) {
          $this->receita_ds_cd_aplicacao_variavel = $receita_ds_cd_aplicacao_variavel;
      }
   
	public function getReceita_ds_categoria() {
          return $this->receita_ds_categoria;
      }
   
      public function setReceita_ds_categoria($receita_ds_categoria) {
          $this->receita_ds_categoria = $receita_ds_categoria;
      }
   public function getReceita_ds_subcategoria() {
          return $this->receita_ds_subcategoria;
      }
   
      public function setReceita_ds_subcategoria($receita_ds_subcategoria) {
          $this->receita_ds_subcategoria = $receita_ds_subcategoria;
      }
	  public function getReceita_ds_fonte() {
          return $this->receita_ds_fonte;
      }
   
      public function setReceita_ds_fonte($receita_ds_fonte) {
          $this->receita_ds_fonte = $receita_ds_fonte;
      }
   public function geTreceita_ds_rubrica() {
          return $this->receita_ds_rubrica;
      }
   
      public function setReceita_ds_rubrica($receita_ds_rubrica) {
          $this->receita_ds_rubrica = $receita_ds_rubrica;
      }
    public function getReceita_ds_alinea() {
          return $this->receita_ds_alinea;
      }
   
      public function setReceita_ds_alinea($receita_ds_alinea) {
          $this->receita_ds_alinea = $receita_ds_alinea;
      }
   public function getReceita_ds_subalinea() {
          return $this->receita_ds_subalinea;
      }
   
      public function setReceita_ds_subalinea($receita_ds_subalinea) {
          $this->receita_ds_subalinea = $receita_ds_subalinea;
      }
   public function getReceita_vl_arrecadacao() {
          return $this->receita_vl_arrecadacao;
      }
   
      public function setReceita_vl_arrecadacao($receita_vl_arrecadacao) {
          $this->receita_vl_arrecadacao = $receita_vl_arrecadacao;
      }
    public function getReceita_data_atualizacao() {
          return $this->receita_data_atualizacao;
      }
   
      public function setReceita_data_atualizacao($receita_data_atualizacao) {
          $this->receita_data_atualizacao = $receita_data_atualizacao;
      }
   
  }   
  ?>