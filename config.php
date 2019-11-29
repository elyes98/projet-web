<?php
class config
{
  private static $instance = NULL;

  public static function getConnexion()
  {
    if (!isset(self::$instance)) {

      try {
        self::$instance = new PDO('mysql:host=localhost;dbname=goombas', 'root', '');
        self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //pour afficher les erreurs
      } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
      }
    }
    return self::$instance;
  }
}
?>