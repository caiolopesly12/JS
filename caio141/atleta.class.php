<?php

    class Atleta {
        private $id;
        private $nome;
        private $peso;
        private $altura;

        public function  setId($novo_id) {
            $this->id = $novo_id;
        }
        public function  setNome($novo_nome) {
            $this->nome = $novo_nome;
        }
        public function  setPeso($novo_peso) {
            $this->peso = $novo_peso;
        }
        public function  setAltura($novo_altura) {
            $this->altura = $novo_altura;
        }
        public function getId() {
            return $this->id;
        }
        public function getNome() {
            return $this->nome;
        }
        public function getPeso() {
            return $this->peso;
        }
        public function getAltura() {
            return $this->altura;
        }
        public function calculadoraIMC() {
            return $imc = $this->peso / ($this->altura * $this->altura);
        }

    }

?>