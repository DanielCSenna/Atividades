<?php       



calss user{
    privece $disciplina;
    privece $duracao;
    privece $professor;
    privece $horario;


    public function setDisciplina($disciplina){
        $this->disciplina = $disciplina;
    }

    public function getDisciplina(){
        return $this->disciplina;
    }

    public function setDuracao($duracao){
        $this->duracao = $duracao;
    }

    public function getDuracao(){
        return $this->duracao;
    }

    public function setProfessor($professor){
        $this->professor = $professor;
    }

    public function getProfessor(){
        return $this->professor;
    }

    public function setHorario($horario){
        $this->horario = $horario;
    }

    public function getHorario(){
        return $this->horario;
    }
}