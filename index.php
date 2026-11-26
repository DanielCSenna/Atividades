<?php
class Aluno {
private $nome;
private $matricula;
private $nota1;
private $nota2;
private $nota3;
private $nota4; 

    public function setNome($nomerecebido){
        if (!empty($nomerecebido)){
            $this->nome = $nomerecebido;
        }
    }


    public function getNome(){
        return $this->nome;
    }

    public function setMatricula($matricularecebida){
        if (!empty($matricularecebida)){
            $this->matricula = $matricularecebida;
        }
    }

    public function getMatricula(){
        return $this->matricula;
    }

    public function setNotas($notarecebida1, $notarecebida2, $notarecebida3, $notarecebida4){
        if (!empty($notarecebida1) && !empty($notarecebida2) && !empty($notarecebida3) && !empty($notarecebida4)){
            $this->nota1 = $notarecebida1;
            $this->nota2 = $notarecebida2;
            $this->nota3 = $notarecebida3;
            $this->nota4 = $notarecebida4;
        }
    }

    public function calcularMedia(){
        $media = ($this->nota1 + $this->nota2 + $this->nota3 + $this->nota4) / 4;
        return $media;
    }

    public function getNotas(){
        return array($this->nota1, $this->nota2, $this->nota3, $this->nota4);
    }


}

  $aluno1 = new Aluno();
  $aluno1->setMatricula("12345");
  $aluno1->setNome("João");
  $aluno1->setNotas(8, 7, 9, 6);

    echo "Nome do aluno: " . $aluno1->getNome() . "\n";   
    echo "Notas do aluno: " . implode(", ", $aluno1->getNotas()) . "\n";
    echo "Matrícula do aluno: " . $aluno1->getMatricula() . "\n";
    echo "Média do aluno: " . $aluno1->calcularMedia() . "\n";