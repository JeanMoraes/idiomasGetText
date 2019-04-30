<?php 
    require_once("lib/streams.php");
    require_once("lib/gettext.php");

    $locle_lang = $_GET['lang'];
    $locale_file = new FileReader("locale/$locle_lang/LC_MESSAGES/messages.mo");
    $locale_fetch = new gettext_reader($locale_file);

    function trans($text){
        global $locale_fetch;
        
        return $locale_fetch->translate($text);
    }
    
?>

<a href="index.php?lang=pt_BR">BRASIL</a> | 
<a href="index.php?lang=en_US">EUA</a> | 
<a href="index.php?lang=fr_FR">FRANÇA</a> | 

<h1><?php echo trans("Meu Projeto") ?></h1>
<p><?php echo trans("teste de parágrafo") ?></p>
<p><?php echo trans("outra coisa") ?></p>