<?php

class Aluno {
    // Propriedades (variáveis)
    private $ra;
    private $nome;
    private $cpf;
    private $data_nascimento;
    private $email;
    private $telefone;
    private $senha;



    // Construtor da classe
    public function __construct($ra = null, $nome = null, $cpf = null, $data_nascimento = null, $email = null, $telefone = null, $senha = null) {
        $this->ra = $ra;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->data_nascimento = $data_nascimento;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->senha = $senha;
    }
    // Método para obter o nome do aluno
    public function getRa() {
        return $this->ra;
    }

    public function getNome() {
        return $this->nome;
    }

public function getCpf() {
    return $this->cpf;
}

    public function getData_nascimento() {
        return $this->data_nascimento;
    }

public function getEmail() {
    return $this->email;
}

    public function getTelefone() {
        return $this->telefone;
    }

public function getSenha() {
    return $this->senha;
}

    // Método para definir o nome do aluno
    public function setRA($ra) {
        $this->ra = $ra;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function setData_nascimento($data_nascimento) {
        $this->data_nascimento = $data_nascimento;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }


}