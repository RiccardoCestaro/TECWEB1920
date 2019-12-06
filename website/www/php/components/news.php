<?php require_once('backend/print_news.php'); $print = new Print_news(); $print->print_news(); ?>
<div class="news_container">
    <a class="news_title" href="../php/contatti.php">
        Vieni a trovarci!
        <span id="maps_icon"></span> <!-- tag vuoto per l'icona -->
    </a>
    <dl class="news_content">
        <dt>
            <span aria-hidden="true">Lunedì - Venerdì:</span>
            <span class="hidden">Dal lunedì al venerdì aperti</span>
        </dt>
        <dd>
            <span aria-hidden="true">7:00 - 12:30</span>
            <span class="hidden">Al mattino dalle 7 e 30 alle 12 e 30</span>  
        </dd>
        <dd>
            <span aria-hidden="true">14:30 - 18:00</span>
            <span class="hidden">Al pomeriggio dalle 14 e 30 alle 18</span>
        </dd>
        <dt>
            <span aria-hidden="true">Sabato - Domenica:</span>
            <span class="hidden">Sabato e domenica aperti</span>  
        </dt>
        <dd>
            <span aria-hidden="true">7:00 - 12:30</span>
            <span class="hidden">Solo al mattino dalle 7 alle 12 e 30</span>
        </dd>
    </dl>
</div>