<?php

/**
 * Objet Compte bancaire
 */
class Compte
{
    // Propriétés
    /**
     * Titulaire du compte
     *
     * @var string
     */
    public $titulaire;
    /**
     * Solde du compte
     *
     * @var float
     */
    public $solde;


    //Méthodes
    /**
     * Constructeur du compte bancaire
     *
     * @param string $nom Nom du titulaire
     * @param integer $montant Montant du solde 
     */
    public function __construct(string $nom, float $montant = 100)
    // $montant est facultatif , si aucun montant n'est spécifié le montant par défaut est de 100
    {
        //On attribue le nom à la propriété titulaire de l'instance créée  
        $this->titulaire = $nom;
        //On attribue le montant à la propriété solde de l'instance créée 
        $this->solde = $montant;
    }

    /**
     * Déposer de l'argent
     * 
     * @param float $montant Montant déposé
     * @return void
     */
    public function deposer(float $montant)
    {
        //On vérifie si le montant est positif
        if ($montant > 0) {
            $this->solde += $montant;
        }
    }

    /**
     * Retourne une chaine de caractère
     *
     * @return string
     */
    public function voirSolde()
    {
        return "Votre solde du compte est de $this->solde euros";
        // echo "Votre solde du compte est de $this->solde euros";
    }
    /**
     * retire un montant du solde du compte
     *
     * @param float $montant Montant à retirer
     * @return void
     */
    public function retirer(float $montant)
    {
        //on vérifie le montant et le solde
        if ($montant > 0 && $this->solde >= $montant) {
            $this->solde -= $montant;
        } else {
            echo "Montant invalide ou solde insuffisant ";
        }
    }
}
