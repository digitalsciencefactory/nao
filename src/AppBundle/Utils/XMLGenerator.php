<?php

/*
 * Traitement des données XML pour la GoogleMap
 */

namespace AppBundle\Utils;

class XMLGenerator
{

    private static $xmlFile = 'assets/fnat/xml/point.xml';

	/**
     * initialisation du fichier xml pour ne pas afficher de points avant toute requète
     */
    public static function initFile()
    {
        $domDocument = new \DOMDocument('1.0', "UTF-8");
        $domDocument->save(self::$xmlFile);
    }

    /**
     * Convertit un tableau au format XML
     * @param array $obsList
     * @param string $statut
     */
    public static function SqlToXml($obsList, $statut=null)
    {
        $domDocument = new \DOMDocument('1.0', "UTF-8");
        $markers = $domDocument->createElement('markers');
        $domDocument->appendChild($markers);

        if ($statut != null){
            foreach ($obsList as $observation){
                if ($observation->getStatut() == $statut){
                    $marker = $domDocument->createElement('marker');
                    $markers->appendChild($marker);
                    $marker->setAttribute("lat", $observation->getLatitude());
                    $marker->setAttribute("lng", $observation->getLongitude());
                }
            }
        } else {
            foreach ($obsList as $observation){
                $marker = $domDocument->createElement('marker');
                $markers->appendChild($marker);
                $marker->setAttribute("lat", $observation->getLatitude());
                $marker->setAttribute("lng", $observation->getLongitude());
            }

        }

        // Sauvegarder le document XML
        echo $domDocument->saveXML();
        $domDocument->save(self::$xmlFile);
    }
}