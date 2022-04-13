
<?php
class Funcionario{
    //atributos
    private $nome;
    private $cidade;
    private $salHora;
    private $horasTrab;
    private $salarioFinal;
    

    
    //gets e sets
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setCidade($cidade){
        $this->cidade = $cidade;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function setSalHora($salHora){
        $this->salHora = $salHora;
    }
    public function getSalHora(){
        return $this->salHora;
    }
    public function setHorasTrab($horasTrab){
        $this->horasTrab = $horasTrab;
    }
    public function getHorasTrab(){
        return $this->horasTrab;
    }

    //metodos
    public function calcularSalario(){
        $this->salarioFinal = (($this->horasTrab * $this->salHora)  * 30);
        return "Salário final: ". $this->salarioFinal;
    }
    public function mostrarDados(){
        return "<span style='color: #4f6d7a '><br>Nome: </span> " .$this->nome. "<span style='color: #4f6d7a '><br>Cidade: </span>" .$this->cidade. "<span style='color: #4f6d7a '><br>Salário/hora: </span>" .$this->salHora. "<span style='color: #4f6d7a '><br>Horas trabalhadas: </span>" .$this->horasTrab;
    }
    public function darAumento($aumento){
        $this->salHora+=$aumento;
        return  "salário aumentado com sucesso! : ". $this->salHora;
       
    }
}
?>