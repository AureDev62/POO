<?php

/**
 * Objet Compte bancaire
 */
abstract class Compte
{
    // déclarer les propriétés comme privées dans une classe favorise l'encapsulation,
    //la protection des données, la réutilisabilité et la sécurité du code.
    //C'est une pratique recommandée pour concevoir des classes bien encapsulées et modulaires 
    //en programmation orientée objet

    //protected sont accessible à l'intérieur de la classe qui les a définies et à
    // l'intérieur des classes héritées

    // Propriétés
    /**
     * Titulaire du compte
     *
     * @var string
     */
    protected string $titulaire;
    /**
     * Solde du compte
     *
     * @var float
     */
    protected float $solde;

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
     * Méthode magique pour la conversion en chaînes de caractères
     *
     * @return string
     */
    public function __toString()
    {
        return "Vous visualisez le compte de {$this->titulaire}, le solde est de {$this->solde} euros";
    }

    //Accesseurs

    /**
     * Getter de Titulaire - Retourne la valeur du titulaire du compte
     *
     * @return string
     */
    public function getTitulaire(): string
    {
        return $this->titulaire;
    }

    /**
     * Modifie le nom du titulaire et retourne l'objet
     *
     * @param string $nom Nom du titulaire
     * @return Compte Compte bancaire
     */
    public function setTitulaire(string $nom): self
    {
        //On vérifie si on a un titulaire
        if ($nom != "") {
            $this->titulaire = $nom;
        }
        return $this;
    }

    /**
     * Retourne le solde du compte
     *
     * @return float Solde du compte
     */
    public function getSolde(): float
    {
        return $this->solde;
    }
    /**
     * Modifie le solde du compte
     *
     * @param float $montant Montant du solde
     * @return Compte Compte bancaire
     */
    public function setSolde(float $montant): self
    {
        if ($montant >= 0) {
            $this->solde = $montant;
        }
        return $this;
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
