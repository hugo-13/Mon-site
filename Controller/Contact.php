<?php


// Permet d'avoir le fichier nommé contact un seul fois le rendre unique 
namespace Contact;

class Contact
{
    // Propriétées -> encapsulation (protéger les propriétées (utilisable uniquement ici))
    private $nom;
    private $email;
    private $pour;
    private $message;
    private $captcha;


    private $erreur_nom;
    private $erreur_pour;
    private $erreur_mail;
    private $erreur_message;
    private $erreur_envoie;
    private $erreur_captcha;
    private $erreur_fichier;



    public function contact()
    {



        // Message de si il n'y a aucune erreurs 
        $erreur_nom = "";
        $erreur_mail = "";
        $erreur_pour = "";
        $erreur_message = "";
        $erreur_captcha = "";



        // Récupération du bouton contact
        $reg_contact = filter_input(INPUT_POST, "reg_contact", FILTER_SANITIZE_FULL_SPECIAL_CHARS);


        if (isset($reg_contact)) {

            //  filtre nom 
            $nom = filter_input(INPUT_POST, "nom", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            //  filtre nom 
            $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            //  filtre nom 
            $telephone = filter_input(INPUT_POST, "telephone", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            //  filtre nom 
            $pour = filter_input(INPUT_POST, "pour", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            //  filtre nom 
            $message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_FULL_SPECIAL_CHARS);


            $this->nom = $nom;
            $this->email = $email;
            $this->telephone = $telephone;
            $this->pour = $pour;
            $this->message = $message;







            // Captcha**
            //  filtre nom 
            $this->captcha = filter_input(INPUT_POST, "captcha", FILTER_SANITIZE_FULL_SPECIAL_CHARS);


            if (isset($_SESSION['captcha'])) {
                if ($this->captcha != $_SESSION['captcha']) {

                    $erreur_captcha = "Captcha invalide *";
                    $erreurs = 1;
                }
            } else {
                $erreur_captcha = "Captcha invalide *";
                $erreurs = 1;
            }





            // verifier si les donné sont bien saisie 
            if (empty($this->nom) || strlen($this->nom) > 20) {

                // message d'erreur 
                $erreur_nom = "Nom invalide *";
                $erreurs = 1;
            }


            // On vérirife le type 
            if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {

                // Message erreur 
                $erreur_mail = "Email invalide *";
                $erreurs = 1;
            }


            // verifier si les donné sont bien saisie 
            if (empty($this->email) || strlen($this->email) > 50) {

                // message d'erreur 
                $erreur_mail = "Email invalide *";
                $erreurs = 1;
            }


            if (empty($this->message) || strlen($this->message) < 10) {
                $erreur_message = "Message manquant ou trop court *";
                $erreurs = 1;
            }

            if (empty($this->pour)) {
                $erreur_pour = "Objet Manquant *";
                $erreurs = 1;
            }






            $this->erreur_nom = $erreur_nom;
            $this->erreur_mail = $erreur_mail;
            $this->erreur_pour = $erreur_pour;
            $this->erreur_message = $erreur_message;


            $this->erreur_captcha = $erreur_captcha;



            // garder les saut de ligne 
            $this->message = nl2br($this->message);
            $this->message = stripslashes($this->message);

            // Si les données on bien été saisie 
            if (!isset($erreurs)) {



                // Envoie d'un mail 
                // Config smtp 
                // on enleve les balise html 
                $this->message = strip_tags($this->message);

                // Config du header 
                $headers = "MIME-Version: 1.0\r\n";
                $headers .= "From: " .  $this->email . "\r\n";
                $headers .= 'Content-Type:text/html; charset="utf-8"' . "\n";
                $headers .= 'Content-Transfer-Encoding: 8bit';

                $to = "hugo.seigle03@gmail.com";
                $subject = $this->pour;
                $message = "<br>Nouveaux message de : " . $this->email . " <br><br>Nom : " . $this->nom . "<br><br>Depuis la page contact de hugo-seigle<br><br>Objet : " . $this->pour . "<br><br>Message : <br>" . $this->message;


                // Si j'ai reçu le mail 
                if (mail($to, $subject, $message, $headers)) {

                    notif_contact();
                    // notif wiew 

                    // TRIGGER 
                    $regi =     $this->email . " à envoyé un message \n[DATE] : " . date("d/m/y H:i:s") . "\n";
                    historisation("log", "send_message", $regi);

                    // Si il y a un probleme quelconc 
                } else {
                    $erreur_envoie = "UNE ERREUR EST SURVENUE";
                    $this->erreur_envoie = $erreur_envoie;
                    // TRIGGER 
                    $regi =     $this->email . " à essayé d'envoyer un message à \n[NOM] : " . $this->nom . " \n[OBJET] : " . $this->pour . "\n[MESSAGE] : " . $this->message . "\n[DATE] : " . date("d/m/y H:i:s") . "\n";
                    historisation("log", "send_message", $regi);
                }
            } else {
                $erreur_envoie = "Veuillez saisir correctement les champs *";
                $this->erreur_envoie = $erreur_envoie;
            }
        }
    }

    // retourner les erreur 

    public function getErreurNom()
    {
        return $this->erreur_nom;
    }
    public function getErreurMail()
    {
        return $this->erreur_mail;
    }
    public function getErreurPour()
    {
        return $this->erreur_pour;
    }
    public function getErreurMessage()
    {
        return $this->erreur_message;
    }

    public function getErreurEnvoie()
    {
        return $this->erreur_envoie;
    }

    public function getErreurCaptcha()
    {
        return $this->erreur_captcha;
    }

}
