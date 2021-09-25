<?php 
// Use HTTP Strict Transport Security to force client to use secure connections only
$use_sts = true;

// iis sets HTTPS to 'off' for non-SSL requests
if ($use_sts && isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
    header('Strict-Transport-Security: max-age=31536000');
} elseif ($use_sts) {
    header('Location: https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'], true, 301);
    // we are in cleartext at the moment, prevent further execution and output
    die();
}

include 'respostas.php'; 
?>
<html>
   <head>
     <title>Quiz - Inside A5 | Saiba o que o Inside A5 indica para tu ouvir:</title>
      <meta charset="UTF-8">
      <link rel="canonical" href="https://insidea5.com.br/quiz">
      <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
      <meta name="description" content="Nós do Inside A5 reservamos um espaço aqui no site para indicar bandas para você que está afim de descobrir ou redescobrir bandas, baseamos a nossa indicação em sua personalidade, bora participar?">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script>history.scrollRestoration = "manual"</script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css" crossorigin="anonymous">
      <meta property="og:locale" content="pt_BR">
      <meta property="og:type" content="website">
      <meta property="og:title" content="Quiz - Inside A5 | Saiba o que o Inside A5 indica para tu ouvir">
      <meta property="og:description" content="Nós do Inside A5 reservamos um espaço aqui no site para indicar bandas para você que está afim de descobrir ou redescobrir bandas, baseamos a nossa indicação em sua personalidade, bora participar?">
      <meta property="article:publisher" content="https://www.facebook.com/insidea5/">
      <meta property="og:image" content="https://insidea5.com.br/wp-content/uploads/2018/12/WhatsApp-Image-2018-12-18-at-15.41.31.jpeg">
      <meta property="og:image:width" content="1280">
      <meta property="og:image:height" content="852">
   </head>
   <body>
      <header class="banner" >
         <div class="content">
            <h1 id="title" class="text-center py-3">Teste de Personalidade Hardcore</h1>
            <a href="#quest" class="btn btn-primary text-center d-block mx-auto" style="max-width: 100%;min-width: 135px;width: max-content;">Começar</a>
         </div>
      </header>
      <form class="container" id="quest">
         <div class="vragen pt-sm-5">
            <h2>Nós do Inside A5 reservamos um espaço aqui no site para indicar bandas para você que está afim de descobrir ou redescobrir bandas, baseamos a nossa indicação em sua personalidade, bora participar?</h2>
            <p class="mt-3">Escolha entre as opções para que possamos começar!</p>
            <div class="form-group mt-5">
               <div class="row input-group mb-3">
                <img src="img/perg1.jpg">
               <label for="v2" class="col-12 control-label text-left text-left">1. A banda já está no palco e os primeiros acordes começam, qual a sua primeira reação?</label>
                  <div id="radioBtn" class="col-12 btn-group flex-wrap col-12 ">
                     <a class="btn btn-secondary btn-sm active" data-toggle="v2" data-title="s">Chego para o meio iniciando o mosh ou voando alto no *Stage Diving</a>
                     <a class="btn btn-secondary btn-sm notActive" data-toggle="v2" data-title="n">Já passo para o canto para poder ver a banda e o pessoal agitando</a>
                  </div>
                  <small class='col-12 text-left mt-3'>*Stage diving é o termo inglês para descrever o ato de pular de cima de um palco em direção ao público</small>
                  <input type="hidden" name="v2" id="v2" value="s">
               </div>

               <div class="row input-group mb-3">
                <img src="img/perg2.jpg">
               <label for="v1" class="col-12 control-label text-left text-left">2. Ao passar na parte onde fica as mesas/bancas de merch e *zines</label>
                  <div id="radioBtn" class="col-12 btn-group flex-wrap col-12 ">
                     <a class="col-xs-auto btn btn-secondary btn-sm active" data-toggle="v1" data-title="e">Penso em comprar camisetas, CDs ou discos do máximo de banda possíveis</a>
                     <a class="col-xs-auto btn btn-secondary btn-sm notActive" data-toggle="v1" data-title="i">Dou prioridade para os *zines ou materiais politicos</a>
                  </div>
                  <small class='col-12 text-left mt-3'>*Zine é uma redução da palavra fanzine, aquelas publicações independentes de cultura que trazem quadrinhos, arte, ilustração, música.</small>
                  <input type="hidden" name="v1" id="v1" value="e">
               </div>
               
               <div class="row input-group mb-3">
                <img src="img/perg3.jpg">
               <label for="v3" class="col-12 control-label text-left text-left">3. Ao conhecer uma nova banda, busco primeiro:</label>
                  <div id="radioBtn" class="col-12 btn-group flex-wrap col-12">
                     <a class="btn btn-secondary btn-sm active" data-toggle="v3" data-title="t">Análisar as letras em primeiro lugar</a>
                     <a class="btn btn-secondary btn-sm notActive" data-toggle="v3" data-title="f">Dou prioridade para a sonoridade</a>
                  </div>
                  <input type="hidden" name="v3" id="v3" value="t">
               </div>


               <div class="row input-group mb-3">
                <img src="img/perg4.jpg">
                  <label for="v4" class="col-12 control-label text-left text-left">4. Em suas seleções de músicas nas playlist, predomina:</label>
                  <div id="radioBtn" class="btn-group col-12 flex-wrap">
                     <a class="btn btn-secondary btn-sm active" data-toggle="v4" data-title="j">Bandas dos anos 80s, 90s. Relembrando os clássicos</a>
                     <a class="btn btn-secondary btn-sm notActive" data-toggle="v4" data-title="p">Misturo bandas novas e velhas</a>
                  </div>
                  <input type="hidden" name="v4" id="v4" value="j">
               </div>

               <div class="row input-group mb-3">
                <img src="img/perg5.jpg">
                  <label for="v5" class="col-12 control-label text-left text-left">5. De maneira geral, ao ir para os shows deixa na bolsa/mochila apenas:</label>
                  <div id="radioBtn" class="col-12 btn-group flex-wrap col-12">
                     <a class="btn btn-secondary btn-sm active" data-toggle="v5" data-title="e">Ela vai vázia, para dar espaço para novas camisetas e zines.</a>
                     <a class="btn btn-secondary btn-sm notActive" data-toggle="v5" data-title="i">Lotada de fitas, Adesivos, água e muitas canetas.</a>
                  </div>
                  <input type="hidden" name="v5" id="v5" value="e">
               </div>

               <div class="row input-group mb-3">
                <img src="img/perg6.jpg">
                  <label for="v6" class="col-12 control-label text-left">6. Escolha o grupo que se identificar em mais itens:</label>
                  <div id="radioBtn" class="col-12 btn-group flex-wrap col-12">
                     <a class="btn btn-secondary btn-sm active" data-toggle="v6" data-title="s"> Skatista, Punk, Ativista, Queer, Vegan.</a>
                     <a class="btn btn-secondary btn-sm notActive" data-toggle="v6" data-title="n"> Professor(a), Musicista, Design, Alternativo, Roqueiro.</a>
                  </div>
                  <input type="hidden" name="v6" id="v6" value="s">
               </div>

               <div class="row input-group mb-3">
                <img src="img/perg7.jpg">
                  <label for="v7" class="col-12 control-label text-left">7. Ao abrir o guarda-roupa, entre as camisetas é nitido ver:</label>
                  <div id="radioBtn" class="col-12 btn-group flex-wrap col-12">
                     <a class="btn btn-secondary btn-sm active" data-toggle="v7" data-title="t">Apenas camisetas de bandas</a>
                     <a class="btn btn-secondary btn-sm notActive" data-toggle="v7" data-title="f">Não há um padrão, vai desde marcas até merch de bandas</a>
                  </div>
                  <input type="hidden" name="v7" id="v7" value="t">
               </div>

               <div class="row input-group mb-3">
                <img src="img/perg8.jpg">
                  <label for="v8" class="control-label col-12 text-left">8. No momento em que o show toca aquela música especial, sou do tipo que:</label>
                  <div id="radioBtn" class="col-12 btn-group flex-wrap col-12">
                     <a class="btn btn-secondary btn-sm active" data-toggle="v8" data-title="j"> Chego mais perto para cantar junto</a>
                     <a class="btn btn-secondary btn-sm notActive" data-toggle="v8" data-title="p"> Mosh de maneira alucinante a música inteira</a>
                  </div>
                  <input type="hidden" name="v8" id="v8" value="j">
               </div>

               <div class="row input-group mb-3">
                <img src="img/perg9.jpg">
                  <label for="v9" class="col-12 control-label text-left">9. Em épocas sem shows na cidade, eu procuro:</label>
                  <div id="radioBtn" class="col-12 btn-group flex-wrap">              
                     <a class="btn btn-secondary btn-sm active" data-toggle="v9" data-title="e"> Comprar materiais das bandas online, ficar antenado na cena</a>
                     <a class="btn btn-secondary btn-sm notActive" data-toggle="v9" data-title="i"> Criar zines, novas artes, videos e ou uma nova banda</a>
                  </div>
                  <input type="hidden" name="v9" id="v9" value="e">
               </div>
               
               <div class="row input-group mb-3">
                <img src="img/perg10.jpg">
                  <label for="v10" class="col-12 control-label text-left">10. Trabalhado e ouvindo música, meu instinto é:</label>
                  <div id="radioBtn" class="col-12 btn-group flex-wrap">
                     <a class="btn btn-secondary btn-sm active" data-toggle="v10" data-title="s"> Começar a ficar agitado no trabalho, batucando e cantando baixinho</a>
                     <a class="btn btn-secondary btn-sm notActive" data-toggle="v10" data-title="n"> Só sigo quieto com a música na cabeça, como uma viagem.</a>
                  </div>
                  <input type="hidden" name="v10" id="v10" value="s">
               </div>
               
               <div class="row input-group mb-3">
                <img src="img/perg11.jpg">
                  <label for="v11" class="col-12 control-label text-left">11. Em épocas com muitos shows na cidade:</label>
                  <div id="radioBtn" class="col-12 btn-group flex-wrap">
                     <a class="btn btn-secondary btn-sm active" data-toggle="v11" data-title="t"> Vou nos que tem apenas coisas especiais ou das bandas que me atraem mais </a>
                     <a class="btn btn-secondary btn-sm notActive" data-toggle="v11" data-title="f"> Vou no máximo de shows que posso, sem hesitar </a>
                  </div>
                  <input type="hidden" name="v11" id="v11" value="t">
               </div>
               
               <div class="row input-group mb-3">
                <img src="img/perg12.jpg">
                  <label for="v12" class="col-12 control-label text-left">12. Nas rodas de conversa com a galera que já é do role a tempos, eu:</label>
                  <div id="radioBtn" class="col-12 btn-group flex-wrap">
                     <a class="btn btn-secondary btn-sm active" data-toggle="v12" data-title="j"> Sou da pessoa curiosa para conhecer mais o role </a>
                     <a class="btn btn-secondary btn-sm notActive" data-toggle="v12" data-title="p"> Sou da pessoa que ensina as pessoas mais novas no role </a>
                  </div>
                  <input type="hidden" name="v12" id="v12" value="j">
               </div>

            </div>
            <button id="submit" class="btn btn-primary">Ver resultado</button>
         </div>
      </form>
      <div class="results">
         <div id="waarden">
            <h2 id ="res"></h2>
            <p id ="overzicht"></p>
         </div>
      </div>
      <footer>
         <center>
            <p style="font-size:12px;">Feito através da estrutura de código do Codepen AdK </p>
         </center>
      </footer>
   </body>
</html>

<script type="text/javascript">
$(document).ready(function(){
  //  $("#info").hide();
  //  $("#links").hide();
    $("#waarden").hide();
    //window.history.pushState({urlPath:'/personalitytest.html'}, "", "personalitytest.html");
});

$('#radioBtn a').on('click', function(){
    var sel = $(this).data('title');
    var tog = $(this).data('toggle');
    $('#'+tog).prop('value', sel);

    $('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]').removeClass('active').addClass('notActive');
    $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]').removeClass('notActive').addClass('active');
})

//Show more info about the test and references
    $("#moreInfo").click(function(){
      event.preventDefault();
         // $("#info").show();
          $('html, body').animate({ scrollTop: ($('#info').offset().top)}, 2000);
    });

    $("#refLinks").click(function(){
      event.preventDefault();
         // $("#links").show();
          $('html, body').animate({ scrollTop: ($('#links').offset().top)}, 2000);
    });

    $("#submit").click (function(){
      event.preventDefault();
      var I = 0, E=0, S=0, N=0, T=0, F=0, J=0, P=0;

     //Berekenen waarden van de verschillende types
       $('#v1').val() == "i" ? I++ : E ++;
       $('#v2').val() == "s" ? S++ : N ++;
       $('#v3').val() == "t" ? T++ : F ++;
       $('#v4').val() == "j" ? J++ : P ++;

       $('#v5').val() == "i" ? I++ : E ++;
       $('#v6').val() == "s" ? S++ : N ++;
       $('#v7').val() == "t" ? T++ : F ++;
       $('#v8').val() == "j" ? J++ : P ++;

       $('#v9').val() == "i" ? I++ : E ++;
       $('#v10').val() == "s" ? S++ : N ++;
       $('#v11').val() == "t" ? T++ : F ++;
       $('#v12').val() == "j" ? J++ : P ++;
      
    /*
         I - Crativa(o)
         E - Consumidor(a)
         S - Mosheira(o)/agitador(a)
         N - Apreciador(a) de shows
         T - Politica(o)
         F - Sentimental/Visual
         P - New School
         J - Old School
      */

          // De variabel oms bevat de omschrijving van elke type 
        var oms= { 
            ISTJ :"<?php echo $print['ISTJ'] ?>",
            ISFJ :"<?php echo $print['ISFJ'] ?>" ,
            INFJ :"<?php echo $print['INFJ'] ?>" ,
            INTJ :"<?php echo $print['INTJ'] ?>"  ,
            ISTP :"<?php echo $print['ISTP'] ?>"  ,
            ISFP :"<?php echo $print['ISFP'] ?> "  ,
            INFP :"<?php echo $print['INFP'] ?>"  ,
            INTP :"<?php echo $print['INTP'] ?>"  ,
            ESTP :"<?php echo $print['ESTP'] ?>"  ,
            ESFP :"<?php echo $print['ESFP'] ?>"  ,
            ENFP :"<?php echo $print['ENFP'] ?>"  ,
            ENTP :"<?php echo $print['ENTP'] ?>"  ,
            ESTJ :"<?php echo $print['ESTJ'] ?>"  ,
            ESFJ :"<?php echo $print['ESFJ'] ?>"  ,
            ENFJ :"<?php echo $print['ENFJ'] ?>"  ,
            ENTJ :"<?php echo $print['ENTJ'] ?>"
              };

      var  res =""; 
            res += (E > I )? "E" : "I";
            res += (S > N )? "S" : "N";
            res += (T > F )? "T" : "F";
            res += (P > J )? "P" : "J";
      
    //Variabel res bevat 1 van de 16 soorten personlijkheid 
      /*
            $("#res").text(res);
            $("#IE").text( "Introversion = "+ I*33.333 +"%  -- Extraversion = "+ E*33.333 +"% ");
            $("#SN").text( "Sensing      = "+ S*33.333 +"%  -- Intuition    = "+ N*33.333 +"% ");
            $("#TF").text( "Thinking     = "+ T*33.333 +"%  -- Feeling      = "+ F*33.333 +"% ");
            $("#JP").text( "Perceiving   = "+ P*33.333 +"%  -- Judging      = "+ J*33.333 +"% ");
       */
      
            $("#waarden").show();
            $("#overzicht").html(oms[res]); 
          $('html, body').animate({ scrollTop: ($('.results').offset().top)}, 2000);

    });
    </script>