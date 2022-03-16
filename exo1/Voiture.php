<?php 

class Voiture{//cree une classe voiture
    private string $couleur;  //stocke la couleur
    private string $modele;   //   "   le modele
    private string $puissance;
    private string $nbporte;
    private string $carburant;
    private const HIGHSPEED = 300;//cree des constantes si on la met en public on peut la rappeler directement sans faire la fonction
    private const CAPACITY = "60 l";
    



    public static function  getVitesseMax() {//crée une fonction pour attibuer une couleur
        return self::HIGHSPEED;
    }

    public function setCouleur($couleur): void {//crée une fonction pour attibuer une couleur
        $this->couleur = $couleur;
    }

    public function getCouleur():string {//cree la fonction pour afficher la couleur
        return $this->couleur;
    }
    /* public function __construct($name, $modele, $puissance, $nbporte, $carburant){
        $this->$name =$name;
        $this->$modele =$modele;
        $this->$puissance =$puissance;
        $this->$nbporte =$nbporte;
        $this->$carburant =$carburant;

    }*///mais on garde les function set pour ceux que lon peut modifier et le get pour les afficher
    public function setModele($modele): void {//crée une fonction pour attibuer un modele
        $this->modele = $modele;
    }

    public function getModele():string {//cree la fonction pour afficher le modele
        return $this->modele;
    }
}  


class Velo{//cree une classe velo 
    private string $couleur;  //stocke la couleur
    private string $type;   //   "   le modele vtt etc
    private string $nbRoue;
    private bool $electrique;
    public static $nbVelo = 0;
    
 public function __construct( string $couleur, string $type, string $nbRoue, bool $electrique, $nbVelo){
        $this->couleur =$couleur;
        $this->type =$type;
        $this->nbRoue =$nbRoue;
        $this->electrique =$electrique;
        self::$nbVelo++;

    }

    public function setCouleur( string $couleur): void {//crée une fonction pour attribuer une couleur
        $this->couleur = $couleur;
    }

    public function getCouleur():string {//cree la fonction pour afficher la couleur
        return $this->couleur;
    }
    
    public function setType(string $type): void {//crée une fonction pour attribuer un type
        $this->type = $type;
    }

    public function getType():string {//cree la fonction pour afficher un type
        return $this->type;
    }
    public function setNbRoue(string $nbRoue): void {//crée une fonction pour attribuer un nb roue
        $this->nbRoue = $nbRoue;
    }

    public function getNbRoue():string {//cree la fonction pour afficher le nb roue
        return $this->nbRoue;
    }
    public function setElectrique( bool $electrique): void {//crée une fonction pour attribuer une assitance
        $this->electrique = $electrique;
    }

    public function getElectrique():bool {//cree la fonction pour afficher une assistance
        return $this->electrique;
    }
}