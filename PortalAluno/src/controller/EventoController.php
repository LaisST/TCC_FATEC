<?php
    require_once '../model/Evento.php';
    require_once '../dao/EventoDAO.php';
    require_once 'AlunoController.php';


class EventoController{

    private $eventoDAO;

    public function __construct(){
        $this->eventoDAO = new EventoDAO();
    }

    public function exibir_eventos(){
        $ra = unserialize($_SESSION['aluno'])->getRa();
        echo $this->eventoDAO->exibir_eventos($ra);
    }

    public function adicionar_evento(){
        $evento = New Evento();
        
        $ra = unserialize($_SESSION['aluno'])->getRa();

        $evento->setRa($ra);
        $evento->setStart($_POST['start']);
        $evento->setEnd($_POST['end']);
        $evento->setTitle($_POST['title']);
        $evento->setDescription($_POST['description']);
    
        
        $result = $this->eventoDAO->adicionar_evento($evento);

        

        if(!is_null($result)){
            echo "<script language='javascript' type='text/javascript'>
            alert('Evento cadastrado com sucesso!')
            window.location.href='../view/calendario_aluno.php'</script>";

        }else{

            echo "<script language='javascript' type='text/javascript'>
            alert('Evento não cadastrado! Tente novamente')
            window.location.href='../view/calendario_aluno.php'</script>";

        }
       

    }


}

if(isset($_GET['acao'])){

$acao = $_GET['acao'];
$eventoController = new EventoController();

switch($acao){
    case "exibir_eventos":
        $eventoController->exibir_eventos();
        break;

    case "adicionar_evento":
        $eventoController->adicionar_evento();
        break;
    }
}





