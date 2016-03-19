<?php

/**
 * Created by PhpStorm.
 * User: Georg Jaedicke
 * Date: 01.02.2016
 * Time: 21:26
 *
 * Ergänzt die Seite um das ausgewählte Parallax-Bild
 */
class ParallaxPage
{
    private $parallaxContainer = '<div class="parallax-window" data-parallax="scroll" data-image-src="###IMAGE###">';
    private $imageDefault = 'files/tsv/bg-full-page.jpg';

    public function addParallax2PageRegular($strContent, $strTemplate)
    {
        global $objPage;
        if ($objPage->tsvParallax == 1) {

            $GLOBALS['TL_JQUERY'][] = '<script src="/system/modules/tsv-parallax/assets/js/parallax.min.js"></script>';

            if ($objPage->parallaxImage) {
                // Bild aus dem Seitenlayout
                $objFile = \FilesModel::findByUuid($objPage->parallaxImage);
                if (is_file(TL_ROOT . '/' . $objFile->path)) {
                    $this->parallaxContainer = str_replace("###IMAGE###", $objFile->path, $this->parallaxContainer);
                }
            } else {
                // Standard-Bild
                $this->parallaxContainer = str_replace("###IMAGE###", $this->imageDefault, $this->parallaxContainer);
            }

            $containerStart = '<div class="container" id="container">';
            $footerStart = '<footer id="footer">';

            // Vor dem Container das Parallax-Bild einfügen
            $strContent = str_replace($containerStart, $this->parallaxContainer . $containerStart, $strContent);

            // Parallax-Container vor dem Footer wieder schließen
            $strContent = str_replace($footerStart, '</div>' . $footerStart, $strContent);
        }
        return $strContent;
    }
}