<?php      

    class colaboradores {
        private $nome;
        private $matricula; 
        private $cpf;
        private $nascimento;
        private $cargo;
        private $funcao;    
        private $data_de_admissao;

        public function setNome($nomeRecebido){
            if (!empty($nomeRecebido)){
                $this->nome = $nomeRecebido;
            }
        }


        public function setMatricula($matriculaRecebida){
            if (!empty($matriculaRecebida)){
                $this->matricula = $matriculaRecebida;
            }
        }

        public function setCpf($cpfRecebido){
            if (!empty($cpfRecebido)){
                $this->cpf = $cpfRecebido;
            }
        }

        public function setNascimento($nascimentoRecebido){
            if (!empty($nascimentoRecebido)){
                $this->nascimento = $nascimentoRecebido;
            }
        }

        public function setCargo($cargoRecebido){
            if (!empty($cargoRecebido)){
                $this->cargo = $cargoRecebido;
            }
        }

        public function setFuncao($funcaoRecebida){
            if (!empty($funcaoRecebida)){
                $this->funcao = $funcaoRecebida;
            }
        }

        public function setDataDeAdmissao($dataDeAdmissaoRecebida){
        if (!empty($dataDeAdmissaoRecebida)){
            $this->data_de_admissao = $dataDeAdmissaoRecebida;
            }
        }   

        public function getNome(){ return $this->nome ?? null; }
        public function getMatricula(){ return $this->matricula ?? null; }
        public function getCpf(){ return $this->cpf ?? null; }
        public function getNascimento(){ return $this->nascimento ?? null; }
        public function getCargo(){ return $this->cargo ?? null; }
        public function getFuncao(){ return $this->funcao ?? null; }
        public function getDataDeAdmissao(){ return $this->data_de_admissao ?? null; }

        public function listarUsuarios($conexao){
            $sql = "SELECT id, nome, matricula, cpf, nascimento, cargo, funcao, data_de_admissao FROM colaboradores ORDER BY id DESC";
            return mysqli_query($conexao, $sql);
        }
    }

