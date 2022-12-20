$(function () {
  $('#formName').addClass('validate[required,maxSize[1000]]');
	$('#formTel').addClass('validate[required,custom[phone],maxSize[15]]');
	$('#formEmail').addClass('validate[required,custom[email]]');
  $('#formAddress').addClass('validate[required,maxSize[100]]');
  //$('#download-company, #inquiry-company').addClass('validate[maxSize[1000]]');
	$('#formInquiry').addClass('validate[maxSize[1000]]');
	$('#privacy input[type=checkbox]').addClass('validate[required[alertTextCheckboxe]]');
  $('#formPlan').addClass('validate[required]');
  $('#formSet').addClass('validate[required]');
  $('#formName2').addClass('validate[maxSize[1000]]');
  $('#formTel2').addClass('validate[custom[phone],maxSize[15]]');
  $('#formAddress2').addClass('validate[maxSize[100]]');
  /*
  $('#form-name').addClass('validate[required,maxSize[1000]]');
	$('#form-tel').addClass('validate[required,custom[phone],maxSize[15]]');
	$('#form-mail').addClass('validate[required,custom[email]]');
  $('#form-company').addClass('validate[maxSize[1000]]');
	$('#form-content').addClass('validate[maxSize[1000]]');
	$('input[type=checkbox]').addClass('validate[required]');
  */
  if ($('.wpcf7-form').length) {
    $("input"). keydown(function(e) {
      if ((e.which && e.which === 13) || (e.keyCode && e.keyCode === 13)) {
        return false;
      } else {
        return true;
      }
    });
    var privacyCheck = $('#privacy input[type=checkbox]');
    var submitBtn = $('#formSubmit');
    if (privacyCheck.length) {
      
      if (!(privacyCheck.prop('checked'))) {
        submitBtn.attr('disabled', true);
        submitBtn.parent().addClass('btnSubmit__disabled');
      }
      privacyCheck.on('change', function() {
        if ($(this).prop('checked')) {
          submitBtn.attr('disabled', false);
          submitBtn.parent().removeClass('btnSubmit__disabled');
        } else {
          submitBtn.attr('disabled', true);
          submitBtn.parent().addClass('btnSubmit__disabled');
        }
      });
    }
    /*
    submitBtn.on('click',function(){
      $('.contact_selectBtn').attr('disabled', true);
    });
  */
      /* validation engine */
      $('.wpcf7-form').validationEngine('attach', {
        promptPosition: 'topLeft',
        showArrowOnRadioAndCheckbox: true,
        focusFirstField: true,
        scroll: true,
        scrollOffset: 80,
        validateNonVisibleFields: true,
      });
      //$(".wpcf7-form").validationEngine('attach', {promptPosition:"topLeft",binded:false});
    }
    if ($(".wpcf7c-btn-back").length) {
      $(".wpcf7c-btn-back").on("click", function(){
        $('#contact_note').removeClass('is_confirm');
        return false;
      });
    }

    var hh = 0;
    var ww = $(window).width();
    var adjustpc =  0;
    var adjustsp =  0;
    var adjust =  ww > 768 ? adjustpc : adjustsp;
    var speed = 400; 
    $('a[href^="#"]').click(function(){
      var href= $(this).attr("href");                                 // アンカーの値取得
      var target = $(href == "#" || href === "" ? 'html' : href);     // 移動先を取得
      var position = target.offset().top - hh + adjust;               // 移動先を調整
      $('body,html').animate({scrollTop:position}, speed, 'swing');   // スムーススクロール
      return false;
    });
});
var wpcf7c_scroll = function(unit_tag) {
//戻るボタン禁止
jQuery(function($){

      // 今いるページを履歴に追加
    history.pushState(null, null, null);
    // ページ戻り時にも今いるページを履歴に追加
    $(window).on("popstate", function(){
        history.pushState(null, null, null);
    // 確認ダイヤログを表示。不要な場合は削除
        //alert('ブラウザの戻るボタンは使えません。\n編集しなおす場合は[戻って修正する]から戻ってください。');
    });

  });
  // エラーの時などにアンカーまでスクロール
  jQuery(jQuery.find("input[name=_wpcf7_unit_tag]")).each(function(){
    if(jQuery(this).val() == unit_tag) {
      var parent = jQuery(this).parents("form");
      var speed = 1000;
      
      var position = parent.offset().top - 100;
      if($(window).width() <= 768) {
        position = parent.offset().top - 100;
      }
      
      if(jQuery('.wpcf7c-anchor').length != 0) {
        position = jQuery('.wpcf7c-anchor').offset().top;
      }
      jQuery("html, body").animate({scrollTop:position}, speed, "swing");
    }
  });
}
document.addEventListener( 'wpcf7submit', function( event ) {
	switch ( event.detail.status ) {
		case 'wpcf7c_confirmed':
      var parentsEle = document.getElementById("contact_note");
      parentsEle.classList.add('is_confirm');
		break;
	}
}, false );
document.addEventListener( 'wpcf7mailsent', function( event ) {
  location = '/solusana_thanks';
}, false );