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
