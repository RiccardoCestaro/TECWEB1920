<?php
/*
 * Definisce metodi che elaborano parti di pagine
 */
class Print_content{

    public static function top($type){
        $content;
        if(!strcmp($type,"html5"))
            $content='<!DOCTYPE html>';
        else if(!strcmp($type,"xhtml+aria"))
            $content='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML + ARIA 1.0//EN""http://www.w3.org/WAI/ARIA/schemata/xhtml-aria-1.dtd">';
        else throw new Exception("Failed to load document schema");
        return $content."\r".'<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it">';   
    }

    public static function head($title){
        return str_replace("%",$title,file_get_contents("../html/components/head.html"));
    }

    public static function header($title){
        return str_replace("%",$title,file_get_contents("../html/components/header.html"));
    }

    public static function breadcrumb($page){
        return '<div id="breadcrumb" class="box a_column"><p>Ti trovi in: '.$page.'</p></div>';
    }

    public static function menu($page){
        $content='<div id="menu_container" class="thin_column">'."\r".'<div id="menu" class="mobile_hidden" role="navigation">'."\r".'<ul>
        '."\r".'<li class="hidden" role="tablist" aria-setsize="5" aria-posinset="1"><a href="#content" tabindex="1">Vai al contenuto</a></li>';
        if(!strcmp($page,"home.php")){
            $content=$content."\r".'<li xml:lang="en"><strong>Home</strong></li>'."\r".'
            <li role="tablist" aria-setsize="5" aria-posinset="2"><a href="prodotti.php?type=paste" tabindex="2">Paste</a></li>'."\r".'
            <li role="tablist" aria-setsize="5" aria-posinset="3"><a href="prodotti.php?type=torte" tabindex="3">Torte</a></li>'."\r".'
            <li role="tablist" aria-setsize="5" aria-posinset="4"><a href="storia.php" tabindex="4">Storia</a></li>'."\r".'
            <li role="tablist" aria-setsize="5" aria-posinset="5"><a href="contatti.php" tabindex="5">Contatti</a></li>';
        }else if(!strcmp($page,"storia.php")){
            $content=$content."\r".'<li role="tablist" aria-setsize="5" aria-posinset="2"><a href="home.php" xml:lang="en" tabindex="2">Home</a></li>'."\r".'
            <li role="tablist" aria-setsize="5" aria-posinset="3"><a href="prodotti.php?type=paste" tabindex="3">Paste</a></li>'."\r".'
            <li role="tablist" aria-setsize="5" aria-posinset="4"><a href="prodotti.php?type=torte" tabindex="4">Torte</a></li>'."\r".'
            <li><strong>Storia</strong></li>'."\r".'
            <li role="tablist" aria-setsize="5" aria-posinset="5"><a href="contatti.php" tabindex="5">Contatti</a></li>';
        }else if(!strcmp($page,"contatti.php")){
            $content=$content."\r".'<li role="tablist" aria-setsize="5" aria-posinset="2"><a href="home.php" xml:lang="en" tabindex="2">Home</a></li>'."\r".'
            <li role="tablist" aria-setsize="5" aria-posinset="3"><a href="prodotti.php?type=paste" tabindex="3">Paste</a></li>'."\r".'
            <li role="tablist" aria-setsize="5" aria-posinset="4"><a href="prodotti.php?type=torte" tabindex="4">Torte</a></li>'."\r".'
            <li role="tablist" aria-setsize="5" aria-posinset="5"><a href="storia.php" tabindex="5">Storia</a></li>'."\r".'
            <li><strong>Contatti</strong></li>';
        }else if(!strcmp($page,"prodotti.php?type=paste")){
            $content=$content."\r".'<li xml:lang="en" role="tablist" aria-setsize="5" aria-posinset="2"><a href="home.php" tabindex="2">Home</a></li>'."\r".'
            <li><strong>Paste</strong></dt>'."\r".'
            <li role="tablist" aria-setsize="5" aria-posinset="3"><a href="prodotti.php?type=torte" tabindex="3">Torte</a></li>'."\r".'
            <li role="tablist" aria-setsize="5" aria-posinset="4"><a href="storia.php" tabindex="4">Storia</a></li>'."\r".'
            <li role="tablist" aria-setsize="5" aria-posinset="5"><a href="contatti.php" tabindex="5">Contatti</a></li>';
        }else if(!strcmp($page,"prodotti.php?type=torte")){
            $content=$content."\r".'<li role="tablist" aria-setsize="5" aria-posinset="2"><a href="home.php" xml:lang="en" tabindex="2">Home</a></li>'."\r".'
            <li role="tablist" aria-setsize="5" aria-posinset="3"><a href="prodotti.php?type=paste" tabindex="3">Paste</a></li>'."\r".'
            <li><strong>Torte</strong></li>'."\r".'
            <li role="tablist" aria-setsize="5" aria-posinset="4"><a href="storia.php" tabindex="4">Storia</a></li>'."\r".'
            <li role="tablist" aria-setsize="5" aria-posinset="5"><a href="contatti.php" tabindex="5">Contatti</a></li>';
        }
        $content=$content."\r".'</ul>'."\r".'</div>'."\r".'<div id="menu_icon" onclick="toggleMenu(this)">'."\r".'<div class="bar1"></div>'."\r".'<div class="bar2"></div>'."\r".'<div class="bar3"></div>'."\r".'</div>'."\r".'</div>';
        return $content;
    }

    public static function login_form(){
        return file_get_contents("../html/components/login_form.html");
    }

    public static function news($page){
        $content = file_get_contents("../html/components/news.html");
        if(!strcmp($page,"contatti.php"))
            return '<div class="news_container">'."\r".'<p class="news_title">Sconti speciali a Natale!</p>'."\r".'<p class="news_content">Dal 15 dicembre al 15 gennaio, se prendi 2 torte la meno cara la paghi la metà</p>'."\r".'</div>'."\r".'';
        return $content;
    }

    public static function footer(){
        return file_get_contents("../html/components/footer.html");
    }


} 
?>