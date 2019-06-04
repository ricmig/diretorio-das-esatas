<?php
$pegarAeroportos = [];
$filtroAeroporto = 0;
$esatasBuscadasPorAeroporto = [];
$nomeAero;

function pegarAeroportos(){
    try{
        global $conexao;
        global $pegarAeroportos;
        global $filtroAeroporto;
        
    $query = $conexao->prepare("SELECT * FROM aeroportos");

    $query->execute();

    $pegarAeroportos = $query->fetchAll(PDO::FETCH_ASSOC);
    return $pegarAeroportos;           

    } catch(PDOException $Exception){
        echo $Exception->getMessage();
    }
    }


    function pegarNomeAero($id_aeroporto){
                try{
            global $conexao;
            global $nomeAero;
            
        $query = $conexao->prepare("SELECT nome from aeroportos where id_aeroporto = :id_aeroporto");
    
        $query->execute([':id_aeroporto' => $id_aeroporto]);
    
        $var2 = $query->fetch(PDO::FETCH_ASSOC);
        $nomeAero = $var2["nome"];
        return $nomeAero;                    
    
        } catch(PDOException $Exception){
            echo $Exception->getMessage();
        }
    }
    
    function filtrarAeroportos($id_aeroporto){

        try{
            global $conexao;
            global $esatasBuscadasPorAeroporto;
            
        $query = $conexao->prepare("SELECT id_esata from esataaeroporto where id_aeroporto = :id_aeroporto");
    
        $query->execute([':id_aeroporto' => $id_aeroporto]);
    
        $var = $query->fetchAll(PDO::FETCH_ASSOC);
        $id_esataArray = $var;                    
    
        } catch(PDOException $Exception){
            echo $Exception->getMessage();
        }

        foreach($id_esataArray as $key => $value){
        $query = $conexao->prepare("SELECT * from esata where :id_esata = id_esata");
        $query->execute([':id_esata' => $value['id_esata']]);
        $var3 = $query->fetch(PDO::FETCH_ASSOC);
        array_push($esatasBuscadasPorAeroporto, $var3);
        }
        return $esatasBuscadasPorAeroporto;
        }

     
    
    
    pegarAeroportos();

    if(isset($_GET["aeroportoFiltro"])){
        pegarNomeAero($_GET["aeroportoFiltro"]);
        filtrarAeroportos($_GET["aeroportoFiltro"]);
        $filtroAeroporto = 1;
    }
    

?>