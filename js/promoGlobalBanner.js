// GLOBAL BANNER JAVASCRIPT CODE
function notnc(){
  var ctas = document.getElementById("promoCodeInputID").innerText;
  if(ctas === "HIDE T&CS"){
    jQuery("input.promoCodeInputClass").hide();
    jQuery(".tncPlacement").hide();
    document.getElementById("promoCodeInputID").innerText = "show t&cs";
  } else {
    jQuery("input.promoCodeInputClass").show();
    jQuery(".tncPlacement").show();
    document.getElementById("promoCodeInputID").innerText = "hide t&cs";
  }
}

var mobileCTAFlag;

function hideCTAS(){
  var ctas = document.getElementById("hideShowCTASButton").innerText;
  if(ctas === "HIDE CTAS"){
    jQuery(".linkGenerator").hide();
    document.getElementById("hideShowCTASButton").innerText = "SHOW CTAS";
    mobileCTAFlag = false;
  } else {
    jQuery(".linkGenerator").show();
    document.getElementById("hideShowCTASButton").innerText = "HIDE CTAS";
    mobileCTAFlag = true;
  }
}

function resetModal_globalBanner(){
  document.getElementById("promoForm_globalBanner").reset();
  document.getElementById("promoTemplateHTML_globalBanner").innerHTML = "";
  document.getElementById("promoCodeTemplate_globalBanner").value = "";
  document.getElementById("gb_cta_dropdown").unchecked;
  document.getElementById("gb_cta_halfwidth").unchecked;
  document.getElementById('hideOnHP').unchecked;

  jQuery("#promoCopied_globalBanner").css("visibility","hidden");
}

// builds global banner
function promoGenerate_globalBanner(){

  // hide on homeage
  var hideOnHP;
  if (document.getElementById('hideOnHP').checked) {
       console.log("checked");
       hideOnHP = "jQuery( \".top-banner-wrapper .top-promo-banner\" ).remove();\n\tjQuery( \".bottom-banner-wrapper .top-promo-banner\" ).remove();";
   } else {
       hideOnHP = "";
   }

  // DESKTOP GLOBAL BANNER
  var gb_desktop_title = document.getElementById("gb_desktop_title");
  var gb_hexcode = document.getElementById("gb_hexcode");
  var gb_text_color = document.getElementById("gb_text_color");
  if(gb_text_color.value == ""){
    gb_text_color.value = "#FFF";
  }

  // linking direction
  var gb_link_mlink = document.getElementById("gb_link_mlink");
  var gb_link_clink = document.getElementById("gb_link_clink");

  // TNC MODAL
  var gb_modal = document.getElementById("gb_modal");

  // MOBILE GLOBAL BANNER
  var gb_mobile_image = document.getElementById("gb_mobile_image");
  var gb_mobile_image_link = document.getElementById("gb_mobile_image_link");
  var gb_mobile_image_alt = document.getElementById("gb_mobile_image_alt");

  // cta linking
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

  // cta style
  var gb_cta_dropdown = document.getElementById("gb_cta_dropdown");
  var gb_cta_halfwidth = document.getElementById("gb_cta_halfwidth");


  // mobile hover link style
  var gb_bottomLeft = document.getElementById("gb_bottomLeft");
  var gb_bottomRight = document.getElementById("gb_bottomRight");
  var gb_leftCenter = document.getElementById("gb_leftCenter");
  var tnc_trigger_mob_style;
  if(gb_bottomLeft.checked) {
    var style_A = "height: 38%;width: 39%;left: 8%;bottom: 0%;";
    tnc_trigger_mob_style = style_A;
  }else if(gb_bottomRight.checked) {
    var style_B = "height: 38%;width: 39%;right: 0%;bottom: 0%;";
    tnc_trigger_mob_style = style_B;
  }else if(gb_leftCenter.checked) {
    var style_C = "height: 38%;width: 39%;right: 0%;bottom: 31%;";
    tnc_trigger_mob_style = style_C;
  } else {
    var style_D = "";
    tnc_trigger_mob_style = style_D;
  }




  var mobileDropdownCTA;
  var mobileHalfwidthExposedCTA;
  var mobileCTA;
  var cta_dropdown_style;
  if(mobileCTAFlag = true){
    // mobile cta dropdown styles

    if(gb_cta_dropdown.checked) {

        cta_dropdown_style = "";

        mobileDropdownCTA = "<div class=\"mobileBannerCTA\">\n    <ul class=\"sds_tx_left mkt_gap_btn_dropdown_menu sds_font--primary sds_uppercase sds_inline\">\n        <li>\n            <input id=\"dropdown_promo_mob-banner\" name=\"menu\" type=\"checkbox\">\n            <label for=\"dropdown_promo_mob-banner\" class=\"sds_pd_left sds_color--b1 sds_letter-spacing--1-0 sds_line-height--1-0 sds_font-size--16 mkt_font-size--1-5vw-at-lg sds_relative sds_font--primary mkt_gap_btn_dropdown_full\">"+gb_link_title.value+"<\/label>\n            <ul class=\"sds_font--primary mkt_gap_btn_dropdown_submenu sds_font-size--15 mkt_font-size--1-5vw-at-lg sds_letter-spacing--0-5 sds_tx_left\">\n                <li><a class=\"sds_pd_left mkt_btn_underline sds_tx_left sds_font--primary mkt_hpDropDown_txtColor sds_uppercase\" href=\"$url(\'Search-Show\',\'cgid\',\'"+gb_link_w.value+"\',\'mlink\',\'"+gb_link_mlink.value+"\',\'clink\',\'"+gb_link_clink.value+"\')$\" onclick=\"sendToOmni(this,\'"+gb_link_mlink.value+"\');\">women<\/a><\/li>\n                <li><a class=\"sds_pd_left mkt_btn_underline sds_tx_left sds_font--primary mkt_hpDropDown_txtColor sds_uppercase\" href=\"$url(\'Search-Show\',\'cgid\',\'"+gb_link_gb.value+"\',\'mlink\',\'"+gb_link_mlink.value+"\',\'clink\',\'"+gb_link_clink.value+"\')$\" onclick=\"sendToOmni(this,\'"+gb_link_mlink.value+"\');\">gapbody<\/a><\/li>\n                <li><a class=\"sds_pd_left mkt_btn_underline sds_tx_left sds_font--primary mkt_hpDropDown_txtColor sds_uppercase\" href=\"$url(\'Search-Show\',\'cgid\',\'"+gb_link_gf.value+"\',\'mlink\',\'"+gb_link_mlink.value+"\',\'clink\',\'"+gb_link_clink.value+"\')$\" onclick=\"sendToOmni(this,\'"+gb_link_mlink.value+"\');\">gapfit<\/a><\/li>\n                <li><a class=\"sds_pd_left mkt_btn_underline sds_tx_left sds_font--primary mkt_hpDropDown_txtColor sds_uppercase\" href=\"$url(\'Search-Show\',\'cgid\',\'"+gb_link_mat.value+"\',\'mlink\',\'"+gb_link_mlink.value+"\',\'clink\',\'"+gb_link_clink.value+"\')$\" onclick=\"sendToOmni(this,\'"+gb_link_mlink.value+"\');\">maternity<\/a><\/li>\n                <li><a class=\"sds_pd_left mkt_btn_underline sds_tx_left sds_font--primary mkt_hpDropDown_txtColor sds_uppercase\" href=\"$url(\'Search-Show\',\'cgid\',\'"+gb_link_m.value+"\',\'mlink\',\'"+gb_link_mlink.value+"\',\'clink\',\'"+gb_link_clink.value+"\')$\" onclick=\"sendToOmni(this,\'"+gb_link_mlink.value+"\');\">men<\/a><\/li>\n                <li><a class=\"sds_pd_left mkt_btn_underline sds_tx_left sds_font--primary mkt_hpDropDown_txtColor sds_uppercase\" href=\"$url(\'Search-Show\',\'cgid\',\'"+gb_link_g.value+"\',\'mlink\',\'"+gb_link_mlink.value+"\',\'clink\',\'"+gb_link_clink.value+"\')$\" onclick=\"sendToOmni(this,\'"+gb_link_mlink.value+"\');\">girls<\/a><\/li>\n                <li><a class=\"sds_pd_left mkt_btn_underline sds_tx_left sds_font--primary mkt_hpDropDown_txtColor sds_uppercase\" href=\"$url(\'Search-Show\',\'cgid\',\'"+gb_link_b.value+"\',\'mlink\',\'"+gb_link_mlink.value+"\',\'clink\',\'"+gb_link_clink.value+"\')$\" onclick=\"sendToOmni(this,\'"+gb_link_mlink.value+"\');\">boys<\/a><\/li>\n                <li><a class=\"sds_pd_left mkt_btn_underline sds_tx_left sds_font--primary mkt_hpDropDown_txtColor sds_uppercase\" href=\"$url(\'Search-Show\',\'cgid\',\'"+gb_link_tg.value+"\',\'mlink\',\'"+gb_link_mlink.value+"\',\'clink\',\'"+gb_link_clink.value+"\')$\" onclick=\"sendToOmni(this,\'"+gb_link_mlink.value+"\');\">toddler girl<\/a><\/li>\n                <li><a class=\"sds_pd_left mkt_btn_underline sds_tx_left sds_font--primary mkt_hpDropDown_txtColor sds_uppercase\" href=\"$url(\'Search-Show\',\'cgid\',\'"+gb_link_tb.value+"\',\'mlink\',\'"+gb_link_mlink.value+"\',\'clink\',\'"+gb_link_clink.value+"\')$\" onclick=\"sendToOmni(this,\'"+gb_link_mlink.value+"\');\">toddler boy<\/a><\/li>\n                <li><a class=\"sds_pd_left mkt_btn_underline sds_tx_left sds_font--primary mkt_hpDropDown_txtColor sds_uppercase\" href=\"$url(\'Search-Show\',\'cgid\',\'"+gb_link_bg.value+"\',\'mlink\',\'"+gb_link_mlink.value+"\',\'clink\',\'"+gb_link_clink.value+"\')$\" onclick=\"sendToOmni(this,\'"+gb_link_mlink.value+"\');\">baby girl<\/a><\/li>\n                <li><a class=\"sds_pd_left mkt_btn_underline sds_tx_left sds_font--primary mkt_hpDropDown_txtColor sds_uppercase\" href=\"$url(\'Search-Show\',\'cgid\',\'"+gb_link_bb.value+"\',\'mlink\',\'"+gb_link_mlink.value+"\',\'clink\',\'"+gb_link_clink.value+"\')$\" onclick=\"sendToOmni(this,\'"+gb_link_mlink.value+"\');\">baby boy<\/a><\/li>\n            <\/ul>\n        <\/li>\n    <\/ul>\n<\/div>\n\n";

        mobileCTA = mobileDropdownCTA;

    } else if (gb_cta_halfwidth.checked) {

      cta_dropdown_style = "@media(max-width: 767px){.cta_wrapper .mkt_gap_sub a.sds_btn{width:49% !important;}.border_top_true{border-top:1px solid #ccc !important;}}";

      mobileHalfwidthExposedCTA = "  <div class=\"cta_wrapper sds_relative\">\n    <div class=\"mkt_gap_sub\">\n       <div class=\"mobileBannerCTA mkt_gap_full_cta_container mkt_gap_sub sds_uppercase\">\n<a class=\"sds_color--b1 sds_btn sds_btn--underline sds_letter-spacing--1-0 sds_line-height--1-0 sds_font--primary sds_btn--no-hover sds_font-size--16 mkt_font-size--1-5vw-at-lg mkt_font-size--16-at-xl sds_tx_left sds_full sds_sp_right_lg\" href=\"$url(\'Search-Show\',\'cgid\',\'"+gb_link_w.value+"\',\'mlink\',\'"+gb_link_mlink.value+"\',\'clink\',\'"+gb_link_clink.value+"\')$\" onclick=\"sendToOmni(this,\'"+gb_link_mlink.value+"\');\">women<\/a>\n<a class=\"border_top_true sds_color--b1 sds_btn sds_btn--underline sds_letter-spacing--1-0 sds_line-height--1-0 sds_font--primary  sds_btn--no-hover sds_font-size--16 mkt_font-size--1-5vw-at-lg mkt_font-size--16-at-xl sds_tx_left sds_full sds_sp_right_lg\" href=\"$url(\'Search-Show\',\'cgid\',\'"+gb_link_gb.value+"\',\'mlink\',\'"+gb_link_mlink.value+"\',\'clink\',\'"+gb_link_clink.value+"\')$\" onclick=\"sendToOmni(this,\'"+gb_link_mlink.value+"\');\">gapbody<\/a>\n<a class=\"sds_color--b1 sds_btn sds_btn--underline sds_letter-spacing--1-0 sds_line-height--1-0 sds_font--primary sds_btn--no-hover sds_font-size--16 mkt_font-size--1-5vw-at-lg mkt_font-size--16-at-xl sds_tx_left sds_full sds_sp_right_lg\" href=\"$url(\'Search-Show\',\'cgid\',\'"+gb_link_gf.value+"\',\'mlink\',\'"+gb_link_mlink.value+"\',\'clink\',\'"+gb_link_clink.value+"\')$\" onclick=\"sendToOmni(this,\'"+gb_link_mlink.value+"\');\">gapfit<\/a>\n<a class=\"sds_color--b1 sds_btn sds_btn--underline sds_letter-spacing--1-0 sds_line-height--1-0 sds_font--primary sds_btn--no-hover sds_font-size--16 mkt_font-size--1-5vw-at-lg mkt_font-size--16-at-xl sds_tx_left sds_full sds_sp_right_lg\" href=\"$url(\'Search-Show\',\'cgid\',\'"+gb_link_mat.value+"\',\'mlink\',\'"+gb_link_mlink.value+"\',\'clink\',\'"+gb_link_clink.value+"\')$\" onclick=\"sendToOmni(this,\'"+gb_link_mlink.value+"\');\">maternity<\/a>\n<a class=\"sds_color--b1 sds_btn sds_btn--underline sds_letter-spacing--1-0 sds_line-height--1-0 sds_font--primary sds_btn--no-hover sds_font-size--16 mkt_font-size--1-5vw-at-lg mkt_font-size--16-at-xl sds_tx_left sds_full sds_sp_right_lg\" href=\"$url(\'Search-Show\',\'cgid\',\'"+gb_link_m.value+"\',\'mlink\',\'"+gb_link_mlink.value+"\',\'clink\',\'"+gb_link_clink.value+"\')$\" onclick=\"sendToOmni(this,\'"+gb_link_mlink.value+"\');\">men<\/a>\n<a class=\"sds_color--b1 sds_btn sds_btn--underline sds_letter-spacing--1-0 sds_line-height--1-0 sds_font--primary sds_btn--no-hover sds_font-size--16 mkt_font-size--1-5vw-at-lg mkt_font-size--16-at-xl sds_tx_left sds_full sds_sp_right_lg\" href=\"$url(\'Search-Show\',\'cgid\',\'"+gb_link_g.value+"\',\'mlink\',\'"+gb_link_mlink.value+"\',\'clink\',\'"+gb_link_clink.value+"\')$\" onclick=\"sendToOmni(this,\'"+gb_link_mlink.value+"\');\">girls<\/a>\n<a class=\"sds_color--b1 sds_btn sds_btn--underline sds_letter-spacing--1-0 sds_line-height--1-0 sds_font--primary sds_btn--no-hover sds_font-size--16 mkt_font-size--1-5vw-at-lg mkt_font-size--16-at-xl sds_tx_left sds_full sds_sp_right_lg\" href=\"$url(\'Search-Show\',\'cgid\',\'"+gb_link_b.value+"\',\'mlink\',\'"+gb_link_mlink.value+"\',\'clink\',\'"+gb_link_clink.value+"\')$\" onclick=\"sendToOmni(this,\'"+gb_link_mlink.value+"\');\">boys<\/a>\n<a class=\"sds_color--b1 sds_btn sds_btn--underline sds_letter-spacing--1-0 sds_line-height--1-0 sds_font--primary sds_btn--no-hover sds_font-size--16 mkt_font-size--1-5vw-at-lg mkt_font-size--16-at-xl sds_tx_left sds_full sds_sp_right_lg\" href=\"$url(\'Search-Show\',\'cgid\',\'"+gb_link_tg.value+"\',\'mlink\',\'"+gb_link_mlink.value+"\',\'clink\',\'"+gb_link_clink.value+"\')$\" onclick=\"sendToOmni(this,\'"+gb_link_mlink.value+"\');\">toddler girl<\/a>\n<a class=\"sds_color--b1 sds_btn sds_btn--underline sds_letter-spacing--1-0 sds_line-height--1-0 sds_font--primary sds_btn--no-hover sds_font-size--16 mkt_font-size--1-5vw-at-lg mkt_font-size--16-at-xl sds_tx_left sds_full sds_sp_right_lg\" href=\"$url(\'Search-Show\',\'cgid\',\'"+gb_link_tb.value+"\',\'mlink\',\'"+gb_link_mlink.value+"\',\'clink\',\'"+gb_link_clink.value+"\')$\" onclick=\"sendToOmni(this,\'"+gb_link_mlink.value+"\');\">toddler boy<\/a>\n<a class=\"sds_color--b1 sds_btn sds_btn--underline sds_letter-spacing--1-0 sds_line-height--1-0 sds_font--primary sds_btn--no-hover sds_font-size--16 mkt_font-size--1-5vw-at-lg mkt_font-size--16-at-xl sds_tx_left sds_full sds_sp_right_lg\" href=\"$url(\'Search-Show\',\'cgid\',\'"+gb_link_bg.value+"\',\'mlink\',\'"+gb_link_mlink.value+"\',\'clink\',\'"+gb_link_clink.value+"\')$\" onclick=\"sendToOmni(this,\'"+gb_link_mlink.value+"\');\">baby girl<\/a>\n<a class=\"sds_color--b1 sds_btn sds_btn--underline sds_letter-spacing--1-0 sds_line-height--1-0 sds_font--primary sds_btn--no-hover sds_font-size--16 mkt_font-size--1-5vw-at-lg mkt_font-size--16-at-xl sds_tx_left sds_full sds_sp_right_lg\" href=\"$url(\'Search-Show\',\'cgid\',\'"+gb_link_bb.value+"\',\'mlink\',\'"+gb_link_mlink.value+"\',\'clink\',\'"+gb_link_clink.value+"\')$\" onclick=\"sendToOmni(this,\'"+gb_link_mlink.value+"\');\">baby boy<\/a>\n<\/div>\n<\/div>\n<\/div>";

      mobileCTA = mobileHalfwidthExposedCTA;

    } else {
      mobileCTA = "";
    }


  } else if (mobileCTAFlag = false){
    mobileCTA = "";
  }


  var globalBannerHTMLContent = "<style type=\"text\/css\">\n@media (min-width: 768px) {\n    .promo-details-link.sds_show-at-md {display: none;}\n    .wcd_promo_globalBanner {background-color: "+gb_hexcode.value+"; font-weight:100; color:"+gb_text_color.value+" !important;}\n    .top-promo-banner {background-color: "+gb_hexcode.value+";}\n    .mobileBannerContent {display: none;}\n    .top-promo-content {margin-top:1.24em}\n   .top-promo-banner .fa {color: "+gb_text_color.value+" !important;} \n    .cta_wrapper_promo_mob{text-align:center;}\n}\n.content-asset .global_banner_sfcc ul{line-height: normal;margin: 0;padding: 0;}\n.global_banner_sfcc ul.mkt_gap_btn_dropdown_submenu li a{font-size: 1em;}\n.top-promo-banner a {margin-left: 0 !important;}\n\n@media(max-width: 767px){\n    .mobileBannerContent {display: block;}\n    .top-promo-banner {background-color: transparent;}\n    .wcd_promo_globalBanner{display: none;}\n    .top-promo-banner .top-promo-show-content-icon {display: none;}\n    .top-promo-content {display: none;}\n    .mobileBannerCTA .sds_pd_left{padding-left:1em !important;}\n    .tnc_trigger_mob{"+tnc_trigger_mob_style+"}\n    .cta_wrapper_promo_mob .mkt_gap_sub a.sds_btn{\n        width:49% !important;\n    }\n    .cta_wrapper_promo_mob{margin-top:1em;}\n    .cta_wrapper_promo_mob a.sds_btn{font-size:16px;}\n    .border_top_true{\nborder-top:1px solid #ccc !important;\n    }\n    .top-promo-banner .global_banner_sfcc a{text-decoration: none !important;}\n    .global_banner_sfcc-20190104 ul.mkt_gap_btn_dropdown_menu ul {\n z-index: 501;\n}\n}\n"+cta_dropdown_style+"<\/style>\n<div class=\"global_banner_sfcc global-dialog\">\n\t<div class=\"mobileBannerContent sds_g-inner\">\n    <div class=\"sds_full\">\n      <a href=\"$url(\'Search-Show\',\'cgid\',\'"+gb_mobile_image_link.value+"\',\'mlink\',\'"+gb_link_mlink.value+"\',\'clink\',\'"+gb_link_clink.value+"\')$\" onclick=\"sendToOmni(this,\'"+gb_link_mlink.value+"\');\">\n<div class=\"sds_relative\">\n          <picture>\n            <img class=\"sds_full customImg\" alt=\""+gb_mobile_image_alt.value+"\" src=\" "+gb_mobile_image.value+"?$staticlink$\" \/>\n          <\/picture>\n          <a href=\"javascript:void(0);\" class=\"tnc_trigger_mob sds_absolute global-dialog-trigger\"><span class=\"sds_visually-hidden\">terms and conditions<\/span><\/a>\n<\/div>\n<\/a>\n<\/div>\n  <\/div>\n\n "+mobileCTA+" <div class=\"wcd_promo_globalBanner sds_font-size--14 sds_tx_center sds_uppercase\">\n  \t "+gb_desktop_title.value+" \n\t\t<span class=\"global-dialog-trigger sds_font-size--11 sds_sp_left_sm\"><u>T&amp;Cs<\/u><\/span>\n  <\/div>\n<\/div>\n<script>\n\ndocument.addEventListener(\"DOMContentLoaded\", function(){\n\tif (window.pageContext.ns === \"storefront\"){\n"+hideOnHP+"\n}\n  if (window.innerWidth <= 767 ){\njQuery( \".top-banner-wrapper .top-promo-banner\" ).remove();\n    jQuery( \".bottom-banner-wrapper .top-promo-trigger\" ).removeClass();\n }\n});\n<\/script>\n";

  document.getElementById("promoCodeTemplate_globalBanner").innerText = globalBannerHTMLContent;

  document.getElementById("promoTemplateHTML_globalBanner").innerHTML = "<div class=\"top-promo-banner\" role=\"banner\">\n  <div class=\"limit-width\">\n    <div class=\"top-promo-trigger top-promo-banner-content\" tabindex=\"0\">\n      <div class=\"top-promo-text-details\">\n        <div class=\"top-promo-text-detail-link\">\n          <span class=\"promo-details-text\">\n            <div class=\"content-asset\">\n\n\n"+globalBannerHTMLContent+"<\/div>\n          <\/span>\n        <\/div>\n        <div class=\"top-promo-show-content-icon sds_show-at-md\">\n          <i class=\"fa fa-plus\"><\/i>\n        <\/div>\n      <\/div>\n    <\/div>\n  <\/div>\n<\/div>";

  const globalBannerHTML = document.getElementById('promoCodeTemplate_globalBanner');
  globalBannerHTML.focus();
  globalBannerHTML.select();
  document.execCommand("copy");
  jQuery("#promoCopied_globalBanner").css('visibility','visible');
}
