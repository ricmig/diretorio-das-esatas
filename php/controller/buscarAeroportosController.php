<?php
$pegarAeroportos = [];
$filtroAeroporto = 0;
$selectAeroporto = 0;
$selectModalidade = 0;
$esatasBuscadasPorAeroporto = [];
$esatasBuscadasporModalidade = [];
$esatasModAero = [];
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
        
        function filtrarEsata($id_mod){

            try{
                global $conexao;
                global $esatasBuscadasporModalidade;
                
            $query = $conexao->prepare("SELECT id_atividade from atividade where atividades_tabela = :id_atividade");
        
            $query->execute([':id_atividade' => $id_mod]);
        
            $var4 = $query->fetchAll(PDO::FETCH_ASSOC);
            $id_atividade = $var4;                      
            
            } catch(PDOException $Exception){
                echo $Exception->getMessage();
            }
            
            foreach($id_atividade as $key => $value){
            $query = $conexao->prepare("SELECT * from esata where :id_esata = id_esata");
            $query->execute([':id_esata' => $value['id_atividade']]);
            $var5 = $query->fetch(PDO::FETCH_ASSOC);
            array_push($esatasBuscadasporModalidade, $var5);
            }
            return $esatasBuscadasporModalidade;
            }

           
            function filtrarAeroportoEsata($id_aeroporto, $id_mod){
            global $esatasModAero;   
                
                    foreach($id_aeroporto as $keyAero => $valueAero){
                        foreach($id_mod as $keyMod => $valueMod){
                            if($valueAero["id_esata"] == $valueMod["id_esata"]){
                                array_push($esatasModAero, $valueMod);                                                                                                                                                      
                            }
                    }
                    }
                    return $esatasModAero;
            }
















    
    
    pegarAeroportos();

    if(isset($_GET["aeroportoFiltro"]) && $_GET["aeroportoFiltro"] == "todas" && $_GET["modalidadeFiltro"] == 'todas'){
        $selectAeroporto = 0;
        $selectModalidade = 0;
        $filtroAeroporto = 0;
    }elseif(isset($_GET["aeroportoFiltro"]) && $_GET["modalidadeFiltro"] == 'todas'){
        pegarNomeAero($_GET["aeroportoFiltro"]);
        filtrarAeroportos($_GET["aeroportoFiltro"]);
        $selectAeroporto = 1;
        $filtroAeroporto = 1;
    } elseif(isset($_GET["aeroportoFiltro"]) && $_GET["aeroportoFiltro"] == 'todas' && $_GET["modalidadeFiltro"] != 'todas'){
        filtrarEsata($_GET['modalidadeFiltro']);
        $selectModalidade = 1;
        $filtroAeroporto = 2;
    } elseif (isset($_GET["aeroportoFiltro"]) && $_GET["aeroportoFiltro"] != 'todas' && $_GET["modalidadeFiltro"] != 'todas'){
        filtrarAeroportos($_GET["aeroportoFiltro"]);
        filtrarEsata($_GET["modalidadeFiltro"]);
        pegarNomeAero($_GET["aeroportoFiltro"]);
        filtrarAeroportoEsata($esatasBuscadasPorAeroporto, $esatasBuscadasporModalidade);    
        $filtroAeroporto = 3;
    }
    

?>