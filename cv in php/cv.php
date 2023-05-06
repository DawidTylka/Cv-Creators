<!DOCTYPE html>
<?php session_start(); ?>
<html lang="pl">
  <head>
        <meta charset="utf-8" />
        <title>Rudy Book</title>
    <link rel="shortcut icon" href="">
        <meta name="author" content="ja pan zniszczenia" />
        <link href="style.css" rel="stylesheet" id="color-opt">
    
    
  </head>
<div>
      <main id="cv" style="background-color:<?php echo"$_POST[color]" ?>;">
      <div class="border"></div>
        <div id="gura">
        <div id="dane">
        <h2 id="kto"><?php echo"$_POST[imie] $_POST[nazwisko]"; ?></h2>
        <p id="cv_email">E-mail: <?php echo"$_POST[email]";  ?></p>
        <p id="cv_phone">Telefon: <?php echo"$_POST[phone]" ; ?></p>
        <p id="cv_date">Data urodzenia: <?php echo"$_POST[data]"; ?></p>
        <p id="cv_www">WWW: <?php echo"$_POST[url]"; ?></p>
        </div>
        <div style="min-height:100px;">
        <img id="profilowe" src=<?php echo"$_POST[file]"; ?> "/>
        
        </div>
        <div class="border"></div>
        <div id="srodek">
        
          <div id="works">
            <h2>Doświadczenie zawodowe</h2>
            <div id="cv_dos"><?php echo"$_POST[work]"; ?></div>
          </div>
          
          <div class="border_left">
            <div>
                <h2>Języki obce</h2>
              <ul id="cv_language">
                <?php 
                if(isset($_POST["ang"])){echo"<li>angielski</li>";}
                if(isset($_POST["niem"])){echo"<li>niemiecki</li>";}
                if(isset($_POST["szw"])){echo"<li>szwedzki</li>";}
                if(isset($_POST["hisz"])){echo"<li>hiszpaniski</li>";}
                ?>
              </ul>
            </div>
            
          </div>
          
        </div>
        <div class="border" style="margin-top:0px;"></div>
        <div id="zgoda">Wyrażam zgodę na przetwarzanie moich danych osobowych dla potrzeb niezbędnych do realizacji procesu rekrutacji zgodnie z Rozporządzeniem Parlamentu Europejskiego i Rady (UE) 2016/679 z dnia 27 kwietnia 2016 r. w sprawie ochrony osób fizycznych w związku z przetwarzaniem danych osobowych i w sprawie swobodnego przepływu takich danych oraz uchylenia dyrektywy 95/46/WE (RODO).</div>
        
      </main>
    </div>