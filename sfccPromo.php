<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link href="/jraxa/generator/css/stitch.css" rel="stylesheet">
  <link href="/jraxa/generator/css/sfcc_gap_styles.css" rel="stylesheet">
  <link href="/jraxa/generator/css/style.css" rel="stylesheet">
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

hr.sfcc_promo_template{
  height:7px !important;
}
.modalPromoTemplate_modal,
.modalPromoTemplate_disrupter,
.modalPromoTemplate_globalBanner{
  margin: 0 auto;
}
.modal-dialog{
  max-width: 900px;
}
  </style>

  </head>
<body>


<!-- promo modal template -->
<div class="sds_g-inner modalPromoTemplate_modal sds_g-inner sds_sp sds_sp_top_xl" style="max-width: 1280px;margin:0 auto;">
  <div class="sds_grid-root">
    <div class="sds_g-1-2">
      <div class="sds_sp_top_xl">
        <span class="sds_font--primary sds_uppercase sds_font-size--22"><strong>promo modal popup</strong></span>
        <a style="display:contents;" class="show_example_modal_link" data-toggle="modal" data-target="#promoModalExample">
          show example
        </a>
      </div>


      <form id="promoForm">
        <input class="form-control sds_sp_top_xl" id="id1_promoModal" type="text" placeholder="promo title (no caps)" title="please do not use all caps" />
        <input class="form-control sds_sp_top_xl" id="id2_promoModal" type="text" placeholder="promo code (no caps)" title="please do not use all caps" />
        <textarea class="form-control sds_sp_top_xl" id="id3_promoModal" type="text" rows="4" cols="50" placeholder="legal text"></textarea>
        <!-- <button class="alert alert-secondary sds_uppercase sds_sp_top_xl" onclick="addTextArea_promo">+</button> -->
      </form>
    </div>
    <div class="vl"></div>

  <div class="sds_g-1-2">
    <!-- modal preview -->
    <div class="preview sds_font--primary sds_uppercase sds_sp_top_xl sds_font-size--22">
      <strong>modal code</strong>
    </div>
    <br />
    <!-- displays the code for the modal -->
  <textarea class="" id="promoCodeTemplate" rows="10" cols="50"></textarea>
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



<div class="modal fade" id="promoModalExample" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button style="margin-left:0;" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div style="margin:0 auto;" class="modal-body">
        <img src="images/promoModalExample.png" /><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


</div>


<hr class="sds_sp_top_2xl sfcc_promo_template" />


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


<hr class="sds_sp_top_2xl sfcc_promo_template" />


<style>
.modalPromoTemplate_globalBanner a:hover{
  color: #007bff !important;
}
a.show_example_modal_link{
  float:right;
  cursor: pointer;
  color:#609 !important;
}
</style>

<!-- global banner template -->
<div class="sds_g-inner modalPromoTemplate_globalBanner sds_sp sds_sp_top_xl" style="max-width: 1280px;margin:0 auto;">
  <div class="sds_grid-root">
    <div class="sds_g-1-2">
      <div class="sds_font--primary sds_uppercase sds_sp_top_xl sds_font-size--22"><strong>global banner</strong></div>
      <form id="promoForm_globalBanner">
        <div class="hideonhp sds_sp_top">
          <span class="sds_sp_right">Hide on Homepage</span><input id="hideOnHP" class="sds_sp_right_xl" type="checkbox" name="hideOnHP" value="hideonhp">
          <button id="promoCodeInputID" type="button" class="alert alert-secondary sds_uppercase sds_sp_top_xl sds_sp_right_xl" onclick="notnc();">hide t&cs</button>
          <button id="hideShowCTASButton" type="button" class="alert alert-secondary sds_uppercase sds_sp_top_xl" onclick="hideCTAS()">hide ctas</button>
        </div>
        <div class="sds_font--primary sds_sp_top_xl sds_uppercase sds_font-size--18"><strong>promo modal</strong></div>
        <input class="form-control promoCodeInputClass" id="gb_modal" type="text" placeholder="PROMO modal pop up content asset ID" optional />

        <br />

        <!-- desktop version -->
        <div class="sds_font--primary sds_uppercase sds_font-size--18"><strong>desktop</strong></div>

        <input class="form-control" id="gb_desktop_title" type="text" placeholder="DESKTOP banner title (no caps; surround promo with <b></b>)" title="please do not use all caps" />
        <a class="show_example_modal_link" data-toggle="modal" data-target="#bannerTitle">
          show example
        </a>

        <input class="form-control sds_sp_top_xl" id="gb_hexcode" type="text" placeholder="DESKTOP banner background color hex code (please include '#')" optional />

        <input class="form-control sds_sp_top_xl" id="gb_text_color" type="text" placeholder="DESKTOP banner title hex code (please include '#') - default white" optional />
        <a class="show_example_modal_link" data-toggle="modal" data-target="#bannerTextColor">
          show example
        </a>

        <br />



        <!-- mobile version -->
        <div class="sds_font--primary sds_uppercase sds_font-size--18"><strong>mobile</strong></div>

        <input class="form-control" id="gb_mobile_image" type="text" placeholder="MOBILE banner image path (?$staticlink$ not needed)" optional />
        <a class="show_example_modal_link" data-toggle="modal" data-target="#mobileImagePath">
          show example
        </a>
        <input class="form-control sds_sp_top_xl" id="gb_mobile_image_link" type="text" placeholder="MOBILE banner image LINK (leave empty if none)" optional />
        <input class="form-control sds_sp_top_xl" id="gb_mobile_image_alt" type="text" placeholder="MOBILE banner alt text" optional />
        <input class="form-control sds_sp_top_xl" id="gb_link_mlink" type="text" placeholder="mlink (TID)" optional />
        <input class="form-control sds_sp_top_xl" id="gb_link_clink" type="text" placeholder="clink (content asset id)" optional />


        <div class="linkGenerator" style="margin-top:9.2em;">

          <div class="sds_uppercase sds_font--primary sds_font-size--18 sds_sp_bottom"><strong>link generator</strong></div>
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
        <input style="transform: scale(1.2);" id="gb_bottomLeft" type="radio" name="mobile banner" value="bottomLeft">
      </div>
      <div class="sds_sp_2xl sds_tx_center" style="display:inline-block;">
        <img src="images/bottomRight.png" /><br>
        <input style="transform: scale(1.2);" id="gb_bottomRight" type="radio" name="mobile banner" value="bottomRightCorner">
      </div>
      <div class="sds_sp_2xl sds_tx_center" style="display:inline-block;">
        <img src="images/leftCenter.png" /><br>
        <input style="transform: scale(1.2);" id="gb_leftCenter" type="radio" name="mobile banner" value="centerRight">
      </div><br />

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
  <textarea class="" id="promoCodeTemplate_globalBanner" rows="15"></textarea>
</div>

</div>
<!-- end grid-root -->
<div class="previewWrapper_globalBanner">
<div class="sds_font--primary sds_uppercase sds_sp_all sds_font-size--22" style="text-align:center;"><strong>global banner preview</strong></div>
  <div id="promoTemplateHTML_globalBanner" style="border: solid 1px #00000045;margin:0 auto; max-width: none !important;max-height: calc(100% - 40px)!important;height: auto!important;padding: 1em;"></div>
</div>






<!-- Modal -->
<div class="modal fade" id="bannerTitle" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="margin: 0 auto;" class="modal-title" id="exampleModalLongTitle">ie. "extra 25% off sale styles. ends 5/1. code &lt;b&gt;extragap&lt;/b&gt;"</h5>
        <button style="margin-left:0;" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="images/globalBannerText.png" /><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="bannerTextColor" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="margin: 0 auto;" class="modal-title" id="exampleModalLongTitle">ie. "#962222"</h5>
        <button style="margin-left:0;" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div style="margin:0 auto;" class="modal-body">
        <img src="images/textColor.png" /><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="mobileImagePath" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="margin: 0 auto;" class="modal-title" id="exampleModalLongTitle">ie. "/Gap/2019/Promo/January/01.09%20Double%20Deal/010919_Reg_Sale_MOB_TTA_UK_V1/MOB_TTA_EU_UK_off.svg"</h5>
        <button style="margin-left:0;" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div style="margin:0 auto;" class="modal-body">
        <img src="images/mobileBanner.png" /><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

</div>


<script type="text/javascript" src="js/promoModal.js"></script>
<script type="text/javascript" src="js/promoDisrupter.js"></script>
<script type="text/javascript" src="js/promoGlobalBanner.js"></script>


</body>
</html>
