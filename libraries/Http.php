<?php
// utilisation de tout protocole Http (redirection, session, param get/post)
class Http {
    /**
     * 5. Redirection vers la page d'accueil
     */
    public static function redirect(string $url): void
    {
        header("Location: $url");
        exit();
    }
}