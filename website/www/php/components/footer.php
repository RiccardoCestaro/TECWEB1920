<?php require_once('backend/print_content.php'); ?>
<div id="footer" class="box full_column">
    <?php echo(Print_content::adminAreaForm()); ?>
    <div class="box footer_wrapper">
        <dl class="footer_column footer_element">
            <dt>Pasticceria Padovana</dt>
            <dt>Telefono:</dt>
            <dd>049-000000</dd>
            <dt>Indirizzo:</dt>
            <dd>
                <span aria-hidden="true">Via Trieste, 63 - 35121 Padova</span>
                <span class="hidden">Via Trieste numero 63, cap 35121, Padova</span>
            </dd>
        </dl>
        <dl class="footer_column footer_element">
            <dt>Orari</dt>
            <dt>
                <span aria-hidden="true">lunedì - venerdì:</span>
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
                <span aria-hidden="true">sabato - domenica:</span>
                <span class="hidden">Sabato e domenica aperti</span>  
            </dt>
            <dd>
                <span aria-hidden="true">7:00 - 12:30</span>
                <span class="hidden">Solo al mattino dalle 7 alle 12 e 30</span>
            </dd>
        </dl>
    </div>
    <p class="a_column footer_element" role="contentinfo">
        <img src="http://www.w3.org/Icons/valid-xhtml10" alt="Pagina validata secondo lo standard XHTML 1.0 Strict"/>
        Alberto Gobbo, Marco Dalla Libera, Riccardo Cestaro, Stefano Lazzaroni. <span xml:lang="en">All rights reserved.</span>
        <img src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Pagina valida secondo lo standard CSS"/>
    </p>
</div>