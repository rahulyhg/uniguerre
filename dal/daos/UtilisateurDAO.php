<?php

/**
 * Description of UtilisateurDao
 *
 * @author Alves
 */
class UtilisateurDAO {
    
    /**
     * Retourne la liste des joueurs du jeu
     * 
     * @return Utilisateur
     * @throws Exception
     */
    public static function selectUtilisateurs() {
        try {
            $SQLSelectUtilisateurs = new SQLSelectUtilisateurs();
            return $SQLSelectUtilisateurs->read();
        } catch (Exception $ex) {
            throw $ex;
        }
    }

    /**
     * Retourne un joueur à partir de son id
     * 
     * @param Integer $id
     * @return Utilisateur
     * @throws Exception
     */
    public static function selectUtilisateurParId($id) {
        try {
            $SQLSelectUtilisateurParId = new SQLSelectUtilisateurParId($id);
            return $SQLSelectUtilisateurParId->read();
        } catch (Exception $ex) {
            throw $ex;
        }
    }

    public static function insertUtilisateur(\Utilisateur $utilisateur) {
        try {
            $SQLInsertUtilisateur = new SQLInsertUtilisateur($utilisateur);
            return $SQLInsertUtilisateur->write();
        } catch (Exception $ex) {
            throw $ex;
        }
    }

    public static function selectVerifierIdentiteConnexion($identifiant, $motdepasse) {
        try {
            $SQLSelectVerifierIdentiteConnexion = new SQLSelectVerifierIdentiteConnexion($identifiant, $motdepasse);
            return $SQLSelectVerifierIdentiteConnexion->read();
        } catch (Exception $ex) {
            throw $ex;
        }
    }

    public static function selectCompterMemeNomUtilisateur($identifiant, $email) {
        try {
            $SQLSelectCompterMemeNomUtilisateur = new SQLSelectCompterMemeNomUtilisateur($identifiant, $email);
            return $SQLSelectCompterMemeNomUtilisateur->read();
        } catch (Exception $ex) {
            throw $ex;
        }
    }

}

?>
