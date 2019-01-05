<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="http://sandbox.x7.org/jraxa/css/stitch.css" rel="stylesheet">
  <link href="http://sandbox.x7.org/jraxa/css/sfcc_gap_styles.css" rel="stylesheet">
  <link href="http://sandbox.x7.org/jraxa/style.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <style type="text/css">
  .vl {
    border-left: 1px solid #00000040;
    height: 300px;
    margin: 0 auto;
    margin-top: 4em;;
}
.modalPromoTemplate_modal .sds_g-1-2,
.modalPromoTemplate_disrupter .sds_g-1-2,
.modalPromoTemplate_globalBanner .sds_g-1-2{
  width:48%;
}

hr{
  height:7px !important;
}
.modalPromoTemplate_modal,
.modalPromoTemplate_disrupter,
.modalPromoTemplate_globalBanner{
  margin: 0 auto;
}
  </style>

  </head>
<body>


<!-- promo modal template -->
<div class="sds_g-inner modalPromoTemplate_modal sds_g-inner sds_sp sds_sp_top_xl" style="max-width: 1280px;margin:0 auto;">
  <div class="sds_grid-root">
    <div class="sds_g-1-2">
      <div class="sds_font--primary sds_uppercase sds_sp_top_xl sds_font-size--22"><strong>promo modal popup</strong></div>
      <form id="promoForm">
        <input class="form-control sds_sp_top_xl" id="id1_promoModal" type="text" placeholder="promo title (no caps)" title="please do not use all caps" />
        <input class="form-control sds_sp_top_xl" id="id2_promoModal" type="text" placeholder="promo code (no caps)" title="please do not use all caps" />
        <textarea class="form-control sds_sp_top_xl" id="id3_promoModal" type="text" rows="4" cols="50" placeholder="legal text"></textarea>
        <!-- <button class="alert alert-secondary sds_uppercase sds_sp_top_xl" onclick="addTextArea_promo">+</button> -->
      </form>
    </div>
    <div class="vl"></div>

  <div class="sds_g-1-2">
    <div class="">
    <!-- modal preview -->
    <div class="preview sds_font--primary sds_uppercase sds_sp_top_xl sds_font-size--22">
      <strong>modal code</strong>
    </div>
    <br />
    <!-- displays the code for the modal -->
  <textarea class="" id="promoCodeTemplate" rows="10" cols="50"></textarea>

  </div>
</div>

<div class="promoModalButtons" style="text-align:center; margin:0 auto;">
  <div class="sds-g-1-1">
    <button id="modalGenerator" data-clipboard-action="cut" data-clipboard-target="#promoCodeTemplate" class="alert alert-primary sds_uppercase sds_sp_top_xl" onclick="promoGenerate();document.getElementById('previewWrapper_promoModal_ID').scrollIntoView({behavior: 'smooth'});">
      generate & copy html
    </button>
    </div>
    <div class="sds_g-1-1">
      <span id="promoCopied" class="sds_sp_all sds_font-size--8 sds_font--primary sds_uppercase" style="visibility:hidden;">
        <i>
          copied!
        </i>
      </span>
    </div>
    <div class="sds-g-1-1">
    <button class="alert alert-secondary sds_uppercase sds_sp_top_xl" onclick="resetModal()">
     reset
   </button>
  </div>
</div>


</div>
<!-- end grid-root -->
<div class="previewWrapper_promoModal" id="previewWrapper_promoModal_ID">
<div class="sds_font--primary sds_uppercase sds_sp_all sds_font-size--22" style="text-align:center;"><strong>modal preview</strong></div>
  <div id="promoTemplateHTML" style="border: solid 1px #00000045;margin:0 auto; max-width: 560px!important;max-height: calc(100% - 40px)!important;height: auto!important;padding: 1em;"></div>
</div>

</div>

<script>
  // PROMO MODAL CODE

function resetModal(){
  document.getElementById("promoForm").reset();
  document.getElementById("promoTemplateHTML").innerHTML = "";
  document.getElementById("promoCodeTemplate").value = "";

}

function promoGenerate() {
  var inpObj1 = document.getElementById("id1_promoModal");
  var inpObj2 = document.getElementById("id2_promoModal");
  var inpObj3 = document.getElementById("id3_promoModal");

  document.getElementById("promoCodeTemplate").innerText =
  "<style media=\'screen\'>\n@media (max-width:767px) {.ui-dialog {margin-top: 20%;}}\n<\/style>\n<div class=\'global-dialog-content\'>\n<p style=\'color: #ff9900; margin-top: 0px;\' class=\'sds_display-a sds_uppercase sds_font-size--22 sds_line-height--1-25\'>\n  <strong>\n "+ inpObj1.value +" \n  <\/strong>\n<\/p>\n<p class=\'sds_display-a sds_color--r1 sds_font-size--18 sds_uppercase sds_sp_top_sm sds_sp sds_line-height--1-25 sds_tx_left\'>\n  <strong>\n    "+ inpObj2.value +"\n  <\/strong>\n<\/p>\n<hr \/>\n<p class=\'sds_left sds_color--g2 sds_font-size--12 sds_sp\'>\n"+ inpObj3.value +"<\/p>\n<\/div>";

  document.getElementById("promoTemplateHTML").innerHTML =
  "<style media=\'screen\'>\n@media (max-width:767px) {.ui-dialog {margin-top: 20%;}}\n<\/style>\n<div class=\'global-dialog-content\'>\n<p style=\'color: #ff9900; margin-top: 0px;\' class=\'sds_display-a sds_uppercase sds_font-size--22 sds_line-height--1-25\'>\n  <strong>\n "+ inpObj1.value +" \n  <\/strong>\n<\/p>\n<p class=\'sds_display-a sds_color--r1 sds_font-size--18 sds_uppercase sds_sp_top_sm sds_sp sds_line-height--1-25 sds_tx_left\'>\n  <strong>\n    "+ inpObj2.value +"\n  <\/strong>\n<\/p>\n<hr \/>\n<p class=\'sds_left sds_color--g2 sds_font-size--12 sds_sp\'>\n"+ inpObj3.value +"<\/p>\n<\/div>";

  jQuery(".global-dialog-content").css('display','block');
  jQuery(".global-dialog-content").css('visibility','visible');
    const input = document.getElementById('promoCodeTemplate');
    input.focus();
    input.select();
    document.execCommand("copy");
    jQuery("#promoCopied").css('visibility','visible');

}

</script>




<hr class="sds_sp_top_2xl" />







<!-- disrupter template -->
<div class="sds_g-inner modalPromoTemplate_disrupter sds_sp sds_sp_top_xl" style="max-width: 1280px;margin:0 auto;">
  <div class="sds_grid-root">
    <div class="sds_g-1-2">
      <div class="sds_font--primary sds_uppercase sds_sp_top_xl sds_font-size--22"><strong>Disrupter</strong></div>
      <form id="promoForm_disrupter">
        <input class="form-control sds_sp_top_xl" id="id1_disrupter" type="text" placeholder="disrupter image path (?$staticlink$ not needed)" title="please do not use all caps" />
        <input class="form-control sds_sp_top_xl" id="id2_disrupter" type="text" placeholder="alt tag (required)" title="please do not use all caps" required/>
        <input class="form-control sds_sp_top_xl" id="id3_disrupter" type="text" placeholder="promo modal content asset ID" title="please do not use all caps" required/>
        <!-- <button class="alert alert-secondary sds_uppercase sds_sp_top_xl" onclick="addTextArea_promo">+</button> -->
      </form>
    </div>

    <div class="vl"></div>

  <div class="sds_g-1-2">
    <div class="">
    <!-- modal preview -->
    <div class="preview sds_font--primary sds_uppercase sds_sp_top_xl sds_font-size--22">
      <strong>Disrupter code</strong>
    </div>
    <br />
    <!-- displays the code for the modal -->
    <textarea class="" id="promoCodeTemplate_disrupter" rows="10" cols="50"></textarea>
  </div>
</div>

<div class="promoModalButtons" style="text-align:center; margin:0 auto;">
  <div class="sds-g-1-1">
    <button id="modalGenerator_distrupter" class="alert alert-primary sds_uppercase sds_sp_top_xl" onclick="promoGenerate_disrupter();document.getElementById('previewWrapper_disrupter_ID').scrollIntoView({behavior: 'smooth'});">
      generate & copy html
    </button>
  </div>
  <div class="sds_g-1-1">
    <span id="promoCopied_distrupter" class="sds_sp_all sds_font-size--8 sds_font--primary sds_uppercase" style="visibility:hidden;">
      <i>
        copied!
      </i>
    </span>
    </div>
  <div class="sds-g-1-1">
    <button class="alert alert-secondary sds_uppercase sds_sp_top_xl" onclick="resetModal_disrupter()">
     reset
   </button>
  </div>
</div>


</div>
<!-- end grid-root -->
<div class="previewWrapper_disrupter" id="previewWrapper_disrupter_ID">
<div class="sds_font--primary sds_uppercase sds_sp_all sds_font-size--22" style="text-align:center;"><strong>disrupter preview</strong></div>
  <div id="promoTemplateHTML_disrupter" style="border: solid 1px #00000045;margin:0 auto; max-width: 560px!important;max-height: calc(100% - 40px)!important;height: auto!important;padding: 1em;"></div>
</div>

</div>

<script type="text/javascript">
  // DISRUPTER JAVASCRIPT CODE
  function resetModal_disrupter(){
    document.getElementById("promoForm_disrupter").reset();
    document.getElementById("promoTemplateHTML_disrupter").innerHTML = "";
    document.getElementById("promoCodeTemplate_disrupter").value = "";
    jQuery("#promoCopied_distrupter").css("visibility","hidden");

  }
  function promoGenerate_disrupter(){

    var imagePath = document.getElementById("id1_disrupter");
    var imagePathAlt = document.getElementById("id2_disrupter");
    var promoPopup = document.getElementById("id3_disrupter");

    document.getElementById("promoCodeTemplate_disrupter").innerText =
    '<style type=\"text\/css\">\n    \/* OVERRIDES *\/\n    .top-promo-banner .top-promo-content.active-promo{padding:0;}\n    \/* CUSTOM CODE - Need to templatize. *\/\n    .promoDefaultDisrupter .top-promo-content.active-promo {background-color: transparent;padding:10px;}\n    .promoDefaultDisrupter .tnc_disrupter{position: absolute;left:0%;bottom:0%;height:10%;width:100%;\/* background: red; *\/}\n    <\/style>\n\n    <!'+'-- GLOBAL DISRUPTOR CODE --'+'>\n    <div class=\"promoDefaultDisrupter global-dialog\">\n      <div class=\"sds_relative\">\n        <picture>\n          <img alt=\"'+imagePathAlt.value+'\" src=\"'+imagePath.value+'?$staticlink$\" \/>\n        <\/picture>\n        <a class=\"tnc_disrupter global-dialog-trigger\"><span class=\"sds_visually-hidden\">Terms and Conditions<\/span><\/a>\n        <!'+'-- pop up code --'+'>\n        $include(Page-Include,\'cid\', \''+promoPopup.value+'\')$\n      <\/div>\n    <\/div>\n\n    <script type=\"text\/javascript\">\n    document.addEventListener(\"DOMContentLoaded\", function(event) {\n      var $promoBanner = $(\'.top-banner-wrapper .top-promo-trigger\');\n      if($promoBanner.length > -1 && $promoBanner.find(\"div[data-enableAutoDistrupt]\").length > -1){\n        \/\/pull this from localStorage or a cookie\n        var hasBeenAutoDisrupted = sessionStorage.getItem(\"gapAutoDisrupted\") == \"true\";\n        if(!hasBeenAutoDisrupted && onAutoDisrupPage()){\n          setTimeout(function() { $promoBanner.click() } , 1000); \/\/delay trigger for the script to fully load\n          setTimeout(function() { $promoBanner.click() } , 7000); \/\/configurable duration from content asset\n          \/\/set the localStorage or cookie\n          sessionStorage.setItem(\"gapAutoDisrupted\",\"true\");\n        }\n      }\n      function onAutoDisrupPage(){\n        var allowedNS = [\"search\",\"product\",\"storefront\",\"content\"];\n        if(allowedNS.indexOf(window.pageContext.ns) > -1){\n          return true;\n        }\n        return false;\n      }\n    });\n    <\/script>';

    document.getElementById("promoTemplateHTML_disrupter").innerHTML =
    '<style type=\"text\/css\">\n    \/* OVERRIDES *\/\n    .top-promo-banner .top-promo-content.active-promo{padding:0;}\n    \/* CUSTOM CODE - Need to templatize. *\/\n    .promoDefaultDisrupter .top-promo-content.active-promo {background-color: transparent;padding:10px;}\n    .promoDefaultDisrupter .tnc_disrupter{position: absolute;left:0%;bottom:0%;height:10%;width:100%;\/* background: red; *\/}\n    <\/style>\n\n    <!'+'-- GLOBAL DISRUPTOR CODE --'+'>\n    <div class=\"promoDefaultDisrupter global-dialog\" style=\"margin:0 auto; text-align:center;\">\n      <div class=\"sds_relative\">\n        <picture>\n          <img alt=\"'+imagePathAlt.value+'\" src=\"https://staging-sfcc.gap.co.uk/on/demandware.static/-/Library-Sites-GapSharedLibrary/default/dwf873993a/'+imagePath.value+'?$staticlink$\" \/>\n        <\/picture>\n        <a class=\"tnc_disrupter global-dialog-trigger\"><span class=\"sds_visually-hidden\">Terms and Conditions<\/span><\/a>\n        <!'+'-- pop up code --'+'>\n        <br /> <br />$include(Page-Include,\'cid\', \''+promoPopup.value+'\')$\n      <\/div>\n    <\/div>\n\n    <script type=\"text\/javascript\">\n    document.addEventListener(\"DOMContentLoaded\", function(event) {\n      var $promoBanner = $(\'.top-banner-wrapper .top-promo-trigger\');\n      if($promoBanner.length > -1 && $promoBanner.find(\"div[data-enableAutoDistrupt]\").length > -1){\n        \/\/pull this from localStorage or a cookie\n        var hasBeenAutoDisrupted = sessionStorage.getItem(\"gapAutoDisrupted\") == \"true\";\n        if(!hasBeenAutoDisrupted && onAutoDisrupPage()){\n          setTimeout(function() { $promoBanner.click() } , 1000); \/\/delay trigger for the script to fully load\n          setTimeout(function() { $promoBanner.click() } , 7000); \/\/configurable duration from content asset\n          \/\/set the localStorage or cookie\n          sessionStorage.setItem(\"gapAutoDisrupted\",\"true\");\n        }\n      }\n      function onAutoDisrupPage(){\n        var allowedNS = [\"search\",\"product\",\"storefront\",\"content\"];\n        if(allowedNS.indexOf(window.pageContext.ns) > -1){\n          return true;\n        }\n        return false;\n      }\n    });\n    <\/script>';

    const disrupterHTML = document.getElementById('promoCodeTemplate_disrupter');
    disrupterHTML.focus();
    disrupterHTML.select();
    document.execCommand("copy");
    jQuery("#promoCopied_distrupter").css('visibility','visible');
  }


</script>







<hr class="sds_sp_top_2xl" />







<!-- global banner template -->
<div class="sds_g-inner modalPromoTemplate_globalBanner sds_sp sds_sp_top_xl" style="max-width: 1280px;margin:0 auto;">
  <div class="sds_grid-root">
    <div class="sds_g-1-2">
      <div class="sds_font--primary sds_uppercase sds_sp_top_xl sds_font-size--22"><strong>global banner</strong></div>
      <form id="promoForm_globalBanner">
        <div class="hideonhp sds_sp_top">
          <span class="sds_sp_right">Hide on Homepage</span><input style="transform: scale(1.5);" class="sds_sp_right_xl" type="checkbox" name="hideOnHP" value="hideonhp">
          <button id="promoCodeInputID" type="button" class="alert alert-secondary sds_uppercase sds_sp_top_xl sds_sp_right_xl" onclick="notnc();">hide t&cs</button>
          <button id="hideShowCTASButton" type="button" class="alert alert-secondary sds_uppercase sds_sp_top_xl" onclick="hideCTAS()">hide ctas</button>
        </div>

        <input class="form-control sds_sp_top_xl promoCodeInputClass" id="gb_modal" type="text" placeholder="PROMO modal pop up content asset ID" optional />
        <input class="form-control sds_sp_top_xl" id="gb_desktop_title" type="text" placeholder="DESKTOP banner title (no caps)" title="please do not use all caps" />
        <input class="form-control sds_sp_top_xl" id="gb_hexcode" type="text" placeholder="DESKTOP banner hex code (please include '#')" optional />
        <input class="form-control sds_sp_top_xl" id="gb_mobile_image" type="text" placeholder="MOBILE banner image path" optional />
        <input class="form-control sds_sp_top_xl" id="gb_mobile_image_alt" type="text" placeholder="MOBILE banner alt text" optional />


        <div class="linkGenerator sds_sp_all" style="margin-top:9.2em;">

          <div class="sds_uppercase sds_font--primary sds_font-size--20 sds_sp_bottom">link generator</div>
          <input class="form-control sds_sp_top_xl" id="gb_link_mlink" type="text" placeholder="mlink (TID)" optional />
          <input class="form-control sds_sp_top_xl" id="gb_link_clink" type="text" placeholder="clink (content asset id)" optional />
          <input class="form-control sds_sp_top_xl" id="gb_link_title" type="text" placeholder="cta title (ie. shop now)" optional />
          <input class="form-control sds_sp_top_xl" id="gb_link_w" type="text" placeholder="women (ie. 12345)" optional />
          <input class="form-control sds_sp_top_xl" id="gb_link_gb" type="text" placeholder="gapbody" optional />
          <input class="form-control sds_sp_top_xl" id="gb_link_gf" type="text" placeholder="gapfit" optional />
          <input class="form-control sds_sp_top_xl" id="gb_link_mat" type="text" placeholder="maternity" optional />
          <input class="form-control sds_sp_top_xl" id="gb_link_m" type="text" placeholder="men" optional />
          <input class="form-control sds_sp_top_xl" id="gb_link_g" type="text" placeholder="girls" optional />
          <input class="form-control sds_sp_top_xl" id="gb_link_b" type="text" placeholder="boys" optional />
          <input class="form-control sds_sp_top_xl" id="gb_link_tg" type="text" placeholder="toddler girl" optional />
          <input class="form-control sds_sp_top_xl" id="gb_link_tb" type="text" placeholder="toddler boy" optional />
          <input class="form-control sds_sp_top_xl" id="gb_link_bg" type="text" placeholder="baby girl" optional />
          <input class="form-control sds_sp_top_xl" id="gb_link_bb" type="text" placeholder="baby boy" optional />
          <input class="sds_sp_bottom sds_sp_right sds_sp_top" id="gb_cta_dropdown" style="transform: scale(1.2);" type="radio" name="gender" value="4"><span class="sds_sp_right_xl">dropdown</span>
          <input class="sds_sp_bottom sds_sp_right" id="gb_cta_halfwidth" style="transform: scale(1.2);" type="radio" name="gender" value="5"><span class="">half-width</span>

        </div>
      </form>
    </div>

    <div class="vl"></div>

  <div class="sds_g-1-2">
    <div class="tncPlacement sds_sp_top">
      <div class="sds_uppercase sds_font--primary sds_sp_all sds_font-size--20 sds_sp_bottom">tnc placement</div>
      <div class="sds_sp_2xl sds_tx_center" style="display:inline-block;">
        <img src="images/bottomLeft.png" /><br>
        <input style="transform: scale(1.2);" id="gb_bottomLeft" type="radio" name="mobile banner" value="1">
      </div>
      <div class="sds_sp_2xl sds_tx_center" style="display:inline-block;">
        <img src="images/bottomRight.png" /><br>
        <input style="transform: scale(1.2);" id="gb_bottomRight" type="radio" name="mobile banner" value="2">
      </div>
      <div class="sds_sp_2xl sds_tx_center" style="display:inline-block;">
        <img src="images/leftCenter.png" /><br>
        <input style="transform: scale(1.2);" id="gb_leftCenter" type="radio" name="mobile banner" value="3">
      </div><br />
      <div class="sds_sp_2xl sds_tx_center" style="display:inline-block;">
        <p class="sds_uppercase sds_font--primary sds_tx_center">
          no linking
        </p>
        <br>
        <input style="transform: scale(1.2);" id="gb_noLinking" type="radio" name="mobile banner" value="4">
      </div>
    </div>


</div>

<div class="sds_g-1-1 promoModalButtons" style="text-align:center; margin:0 auto;">
  <div class="sds-g-1-1">
    <button id="modalGenerator_global" class="alert alert-primary sds_uppercase sds_sp_top_xl" onclick="promoGenerate_globalBanner()">
      generate & copy html
    </button>
  </div>
  <div class="sds_g-1-1">
    <span id="promoCopied_globalBanner" class="sds_sp_all sds_font-size--8 sds_font--primary sds_uppercase" style="visibility:hidden;">
      <i>
        copied!
      </i>
    </span>
    </div>
  <div class="sds-g-1-1">
    <button class="alert alert-secondary sds_uppercase sds_sp_top_xl" onclick="resetModal_globalBanner()">
     reset
   </button>
  </div>
</div>

<div class="sds_g-1-1 HTMLCodePreview">
  <!-- modal preview -->
  <div class="preview sds_font--primary sds_uppercase sds_sp_top_xl sds_font-size--22">
    <strong>global banner code</strong>
  </div>
  <br />
  <!-- displays the code  -->
  <textarea class="" id="promoCodeTemplate_globalBanner" rows="20" cols="50"></textarea>
</div>

</div>
<!-- end grid-root -->
<div class="previewWrapper_globalBanner">
<div class="sds_font--primary sds_uppercase sds_sp_all sds_font-size--22" style="text-align:center;"><strong>global banner preview</strong></div>
  <div id="promoTemplateHTML_globalBanner" style="border: solid 1px #00000045;margin:0 auto; max-width: 560px!important;max-height: calc(100% - 40px)!important;height: auto!important;padding: 1em;"></div>
</div>

</div>

<script type="text/javascript">

  // GLOBAL BANNER JAVASCRIPT CODE

  function notnc(){
    var ctas = document.getElementById("promoCodeInputID").innerText;
    if(ctas === "HIDE T&CS"){
      jQuery("input.promoCodeInputClass").hide();
      document.getElementById("promoCodeInputID").innerText = "show t&cs";
    } else {
      jQuery("input.promoCodeInputClass").show();
      document.getElementById("promoCodeInputID").innerText = "hide t&cs";
    }
  }

  function hideCTAS(){
    var ctas = document.getElementById("hideShowCTASButton").innerText;
    if(ctas === "HIDE CTAS"){
      jQuery(".linkGenerator").hide();
      document.getElementById("hideShowCTASButton").innerText = "SHOW CTAS";
    } else {
      jQuery(".linkGenerator").show();
      document.getElementById("hideShowCTASButton").innerText = "HIDE CTAS";
    }
  }

  function resetModal_globalBanner(){
    document.getElementById("promoForm_globalBanner").reset();
    document.getElementById("promoTemplateHTML_globalBanner").innerHTML = "";
    document.getElementById("promoCodeTemplate_globalBanner").value = "";
    jQuery("#promoCopied_globalBanner").css("visibility","hidden");
  }




  function promoGenerate_globalBanner(){
    var gb_desktop_title = document.getElementById("gb_desktop_title");
    var gb_hexcode = document.getElementById("gb_hexcode");
    var gb_modal = document.getElementById("gb_modal");
    var gb_mobile_image = document.getElementById("gb_mobile_image");
    var gb_mobile_image_alt = document.getElementById("gb_mobile_image_alt");

    var gb_link_mlink = document.getElementById("gb_link_mlink");
    var gb_link_clink = document.getElementById("gb_link_clink");
    var gb_link_title = document.getElementById("gb_link_title");
    var gb_link_w = document.getElementById("gb_link_w");
    var gb_link_gb = document.getElementById("gb_link_gb");
    var gb_link_gf = document.getElementById("gb_link_gf");
    var gb_link_mat = document.getElementById("gb_link_mat");
    var gb_link_m = document.getElementById("gb_link_m");
    var gb_link_g = document.getElementById("gb_link_g");
    var gb_link_b = document.getElementById("gb_link_b");
    var gb_link_tg = document.getElementById("gb_link_tg");
    var gb_link_tb = document.getElementById("gb_link_tb");
    var gb_link_bg = document.getElementById("gb_link_bg");
    var gb_link_bb = document.getElementById("gb_link_bb");
    var gb_cta_dropdown = document.getElementById("gb_cta_dropdown");
    var gb_cta_halfwidth = document.getElementById("gb_cta_halfwidth");

    var gb_bottomLeft = document.getElementById("gb_bottomLeft");
    var gb_bottomRight = document.getElementById("gb_bottomRight");
    var gb_leftCenter = document.getElementById("gb_leftCenter");
    var gb_noLinking = document.getElementById("gb_noLinking");


    if(gb_bottomLeft.checked) {
      console.log(gb_bottomLeft.value);

    }else if(gb_bottomRight.checked) {
      console.log(gb_bottomRight.value);

    }else if(gb_leftCenter.checked) {
      console.log(gb_leftCenter.value);

    }else if(gb_noLinking.checked) {
      console.log(gb_noLinking.value);

    } else {
      console.log("eyy");
    }



    document.getElementById("promoCodeTemplate_globalBanner").innerText = "";
    document.getElementById("promoTemplateHTML_globalBanner").innerHTML = "";

    const disrupterHTML = document.getElementById('promoCodeTemplate_globalBanner');
    disrupterHTML.focus();
    disrupterHTML.select();
    document.execCommand("copy");
    jQuery("#promoCopied_globalBanner").css('visibility','visible');
  }


</script>


</body>
</html>
