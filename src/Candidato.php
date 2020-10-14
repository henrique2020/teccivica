<?php
$arquivo = file_get_contents('./arquivo.json');
$json = json_decode($arquivo);
$info = array();
$pvp = count($json);
$rep = count($json[0]);

/*foreach ($json as $js){
    $dados = array();
    $dados->link = $js[0];
    $dados->imagem = $js[1];
    $dados->nome = $js[2];
    $dados->nUrna = $js[3];
    $dados->partido = $js[4];
    $info[] = $dados;
}*/

class Candidato{
    private $link;
    private $imagem;
    private $nome;
    private $nUrna;
    private $partido;

    public function __construct($link = null, $imagem = null, $nome = null, $nUrna = null, $partido = null){
        $this->link = $link;
        $this->imagem = $imagem;
        $this->nome = $nome;
        $this->nUrna = $nUrna;
        $this->partido = $partido;
    }
    
    public static function info_candidatos(){
        $pvp = count($json);
        $info = array();
        for ($i=0; $i < $pvp; $i++) { 
            $dados = array();
            $dados->link = $json[$i][0];
            $dados->imagem = $json[$i][1];
            $dados->nome = $json[$i][2];
            $dados->nUrna = $json[$i][3];
            $dados->partido = $json[$i][4];
            $info[] = $dados;
        }
        
        print_r($info);
    }
}
?>