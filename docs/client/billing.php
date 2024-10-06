<?php 

session_start();
if($_SESSION['authorized'] == "1")
{

?>

<html lang="fr" dir="ltr" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:dc="http://purl.org/dc/terms/" xmlns:foaf="http://xmlns.com/foaf/0.1/" xmlns:og="http://ogp.me/ns#" xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#" xmlns:sioc="http://rdfs.org/sioc/ns#" xmlns:sioct="http://rdfs.org/sioc/types#" xmlns:skos="http://www.w3.org/2004/02/skos/core#" xmlns:xsd="http://www.w3.org/2001/XMLSchema#" class="js bootstrap-anchors-processed" style="--rf-chat-user-message-color:#ffffff; --rf-chat-user-message-background-color:#009ADF; --rf-chat-bot-basic-message-color:#000000; --rf-chat-bot-basic-message-background-color:#ffffff; --rf-chat-bot-alert-message-background-color:#FFE599; --rf-chat-bot-alert-message-color:#009ADF; --rf-chat-background-color:#e6e7e8; --rf-chat-header-color:#009ADF;"><head profile="http://www.w3.org/1999/xhtml/vocab">    
  <meta charset="utf-8">
  <script>
        function checkValue(str, max) {
        if (str.charAt(0) !== '0' || str == '00') {
          var num = parseInt(str);
          if (isNaN(num) || num <= 0 || num > max) num = 1;
          str = num > parseInt(max.toString().charAt(0)) && num.toString().length == 1 ? '0' + num : num.toString();
        };
        return str;
      };

  // reformat by date
    function date_reformat_dd(date) {
      date.addEventListener('input', function(e) {
        this.type = 'text';
        var input = this.value;
        if (/\D\/$/.test(input)) input = input.substr(0, input.length - 3);
        var values = input.split('/').map(function(v) {
          return v.replace(/\D/g, '')
        });
        if (values[1]) values[1] = checkValue(values[1], 12);
        if (values[0]) values[0] = checkValue(values[0], 31);
        var output = values.map(function(v, i) {
          return v.length == 2 && i < 2 ? v + '/' : v;
        });
        this.value = output.join('').substr(0, 14);
      });
    }
    

</script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--[if IE]><![endif]-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="shortcut icon" href="https://www.chronopost.fr/sites/all/themes/chronopost/favicon.ico" type="image/vnd.microsoft.icon">
<meta name="description" content="Envoyez vos colis en express en France et à l'international, suivez vos envois et découvrez tous les services de Chronopost.">
<meta name="keywords" content="Chronopost, suivre un envoi, suivre un colis, suivi colis, suivi envoi, envoyer un colis, trouver chronopost, agence chronopost, transporteur, transport express, tarif colis, tarif envoi, délai, envoi colis monde, messagerie express, France, dom, département d'outre-mer, chronoposte, colis urgents, professionnel, particulier">
<meta name="generator" content="Drupal 7 (https://www.drupal.org)">
<link rel="canonical" href="https://www.chronopost.fr/fr">
<link rel="shortlink" href="https://www.chronopost.fr/fr">
  <title>Chronopost : Transport express en France et à l'international</title>
  <link type="text/css" rel="stylesheet" href="https://www.chronopost.fr/sites/default/files/advagg_css/css__rrSrrOGtcDkawAOviIBpWgZqMG-EzRNZ6NlriNSm-ag__KUAGEwtfseLuePb6eHr7OUVubHR6s1Swcmvp7hEhm3Y__vKYx-BngDq1t9o_JLD3lDVrcQ0ZPQfwM5NmbK2EQ0KI.css" media="all">
<link type="text/css" rel="stylesheet" href="https://www.chronopost.fr/sites/default/files/advagg_css/css__mpDqrfbbZETcDOED0FJDgmJIRJGb_VbVB4R0r8jTGlI__rji2WeP7_BWeMe36C3CoAxEAuqKmFTv2AqMNsvCtqEY__vKYx-BngDq1t9o_JLD3lDVrcQ0ZPQfwM5NmbK2EQ0KI.css" media="all">
<link type="text/css" rel="stylesheet" href="https://www.chronopost.fr/sites/default/files/advagg_css/css__mXEgOpYs-ZYCAV6E3EBPa6SiI_U8ltwMuIxzjJhF3n8__qNA66Cg3K1GgNxW591VEeIJLlvxq2tqb3hk-8TIfWaU__vKYx-BngDq1t9o_JLD3lDVrcQ0ZPQfwM5NmbK2EQ0KI.css" media="all">
<link type="text/css" rel="stylesheet" href="https://www.chronopost.fr/sites/default/files/advagg_css/css__0RWLjX5x0uBSmQNhDIUL0XXtkQBWZvd0rQjtxKv3gbM__GUTOhhSWX9kbyu8z_f3jD3UZZUbYIfF6KgkZolz-iOw__vKYx-BngDq1t9o_JLD3lDVrcQ0ZPQfwM5NmbK2EQ0KI.css" media="all">
<link type="text/css" rel="stylesheet" href="https://www.chronopost.fr/sites/default/files/advagg_css/css__SPynlSLgon-RMKQdfoxbx4Xe8hv4j7Rurvz3k89ApNs__z5nBuKo4JdeXrgU0Yxw-6clPdnVMbpJcIxA4_-GZQUg__vKYx-BngDq1t9o_JLD3lDVrcQ0ZPQfwM5NmbK2EQ0KI.css" media="all">
<link type="text/css" rel="stylesheet" href="https://www.chronopost.fr/sites/default/files/advagg_css/css__Dxjo1LwG4Pq9gERfZDoxWl7DOsG5nNCo2lBUZtl-9sE__iS_Toc-EmMBX0r7otzn4yMya5R9UCfMJUED9W4Y5kxY__vKYx-BngDq1t9o_JLD3lDVrcQ0ZPQfwM5NmbK2EQ0KI.css" media="all">
  <!-- HTML5 element support for IE6-8 -->
  <!--[if IE 6]>    
     <script type="text/javascript" src="/sites/all/themes/chronopost/js/ie6_png.js"></script>  
     <script>
      DD_belatedPNG.fix('img,.ch-arrow-gray,.ch-arrow');
     </script> 
  <![endif]-->
  <!--[if lt IE 9]>
    <script type="text/javascript" src="/sites/all/themes/chronopost/js/modernizr.js"></script>

  <![endif]-->
  <script type="text/javascript" async="" src="https://snap.licdn.com/li.lms-analytics/insight.min.js"></script><script src="https://connect.facebook.net/signals/config/254373261805620?v=2.9.57&amp;r=stable" async=""></script><script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script><script type="text/javascript" src="https://cstatic.weborama.fr/js/wreport_wcm.js"></script><script type="text/javascript" charset="UTF-8" async="" src="https://consentcdn.cookiebot.com/consentconfig/07728dca-296d-43fc-9a3b-107a450004d2/state.js"></script><script type="text/javascript" charset="UTF-8" async="" src="https://consent.cookiebot.com/logconsent.ashx?action=accept&amp;nocache=1651310356809&amp;referer=https%3A%2F%2Fwww.chronopost.fr%2Ffr%23%2Fstep-home&amp;dnt=false&amp;method=strict&amp;clp=true&amp;cls=true&amp;clm=true&amp;cbid=07728dca-296d-43fc-9a3b-107a450004d2&amp;cbt=leveloptin&amp;hasdata=true"></script><script type="text/javascript" charset="UTF-8" async="" src="https://consent.cookiebot.com/07728dca-296d-43fc-9a3b-107a450004d2/cc.js?renew=false&amp;referer=www.chronopost.fr&amp;dnt=false"></script><script type="text/javascript" async="" src="https://consent.cookiebot.com/uc.js?cbid=07728dca-296d-43fc-9a3b-107a450004d2" id="Cookiebot"></script><script src="https://www.googletagmanager.com/gtm.js?id=GTM-MGZ67C" async=""></script><script src="https://www.chronopost.fr/sites/default/files/advagg_js/js__oCcNTRezMUWfsPNNPhYborj61KxjZUxCKq9kf-Gb9Tk__3hSvAHKBWlb1xl0JmOP0HQz8jg4VMd_8rbQc_XzqpMA__vKYx-BngDq1t9o_JLD3lDVrcQ0ZPQfwM5NmbK2EQ0KI.js" defer="defer"></script>
<script src="https://www.chronopost.fr/sites/default/files/advagg_js/js__H0_UM623Z1WrioLq9YuBK3tuyrC27-d4LFDRiXvk8Ak__5AL13hdbH52Mghy0tocsHhGlHeAvZzS-CBwx1qRI0Xo__vKYx-BngDq1t9o_JLD3lDVrcQ0ZPQfwM5NmbK2EQ0KI.js"></script>
<script>jQuery.extend(Drupal.settings,{"basePath":"\/","pathPrefix":"fr\/","ajaxPageState":{"theme":"chronopost","theme_token":"Zj-zmb_7RzUwOL8QqYJ2C1LQRe4sIctzofehYz2qzjE","css":{"modules\/system\/system.base.css":1,"sites\/all\/modules\/custom\/chrono_seo_inclusion\/css\/chrono_seo_inclusion.css":1,"sites\/all\/modules\/contrib\/date\/date_api\/date.css":1,"sites\/all\/modules\/contrib\/date\/date_popup\/themes\/datepicker.1.7.css":1,"modules\/field\/theme\/field.css":1,"sites\/all\/modules\/contrib\/scald\/modules\/fields\/mee\/css\/editor-global.css":1,"sites\/all\/modules\/contrib\/scald_file\/scald_file.css":1,"sites\/all\/modules\/contrib\/scald\/modules\/providers\/scald_flash\/scald_flash.css":1,"sites\/all\/modules\/contrib\/scald_webform\/scald_webform.css":1,"sites\/all\/modules\/contrib\/youtube\/css\/youtube.css":1,"sites\/all\/modules\/contrib\/views\/css\/views.css":1,"sites\/all\/modules\/contrib\/ctools\/css\/ctools.css":1,"sites\/all\/modules\/contrib\/panels\/css\/panels.css":1,"sites\/all\/modules\/contrib\/rate\/rate.css":1,"sites\/all\/modules\/contrib\/wysiwyg_linebreaks\/wysiwyg_linebreaks.css":1,"sites\/all\/themes\/chronopost\/layouts\/ch_full\/full_chrono.css":1,"modules\/locale\/locale.css":1,"sites\/all\/modules\/contrib\/node_embed\/plugins\/node_embed\/node_embed.css":1,"sites\/all\/themes\/chronopost\/css\/bootstrap.min.css":1,"sites\/all\/themes\/chronopost\/css\/style.css":1,"sites\/all\/themes\/chronopost\/css\/headerfooterblock.css":1,"sites\/all\/themes\/chronopost\/css\/ckeditor_chrono.css":1},"js":{"sites\/all\/themes\/bootstrap\/js\/bootstrap.js":1,"https:\/\/www.chronopost.fr\/sites\/default\/files\/google_tag\/tagmanager_production\/google_tag.script.js":1,"sites\/all\/modules\/contrib\/jquery_update\/replace\/jquery\/1.8\/jquery.js":1,"misc\/jquery-extend-3.4.0.js":1,"misc\/jquery-html-prefilter-3.5.0-backport.js":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"sites\/all\/modules\/contrib\/jquery_update\/replace\/ui\/external\/jquery.cookie.js":1,"sites\/all\/modules\/custom\/chrono_block_found\/js\/checkForm.js":1,"sites\/all\/modules\/custom\/chrono_flash_info\/js\/ajax.js":1,"sites\/all\/modules\/custom\/chrono_parcourisation_utilisateur\/js\/chrono_parcourisation.js":1,"sites\/all\/modules\/custom\/chrono_popin\/js\/testDisplayPopIn.js":1,"sites\/all\/modules\/custom\/chrono_reset_password\/js\/ajax.js":1,"sites\/all\/modules\/custom\/chrono_suivi_colis\/js\/ajax.js":1,"public:\/\/languages\/fr_10GuSM32EHvox8fNaBPifo6AzSxg0Z4wSuc6or1uy-c.js":1,"sites\/all\/themes\/chronopost\/js\/bo_defects.js":1,"sites\/all\/modules\/contrib\/custom_search\/js\/custom_search.js":1,"sites\/all\/modules\/contrib\/scald_file\/scald_file.js":1,"sites\/all\/modules\/contrib\/scald\/modules\/providers\/scald_image\/scald_image.js":1,"sites\/all\/themes\/chronopost\/js\/highlight_menu_tab.js":1,"sites\/all\/themes\/chronopost\/js\/preselect_tab_create_account.js":1,"sites\/all\/themes\/chronopost\/js\/responsive_design.js":1,"sites\/all\/themes\/chronopost\/js\/bootstrap.min.js":1,"sites\/all\/themes\/chronopost\/js\/block.js":1,"sites\/all\/themes\/chronopost\/js\/jquery.fancybox.js":1,"sites\/all\/themes\/chronopost\/js\/placeholders.min.js":1,"sites\/all\/themes\/chronopost\/js\/cookies.js":1,"sites\/all\/themes\/chronopost\/js\/service-client.js":1,"sites\/all\/themes\/chronopost\/js\/consent_optout_xiti.js":1,"sites\/all\/themes\/chronopost\/bootstrap\/js\/transition.js":1,"sites\/all\/themes\/chronopost\/bootstrap\/js\/carousel.js":1}},"traductions":{"pro":["Professional","Professionnel","Professionnel"],"part":["Private","Particulier","Particulier"]},"cookie_domain":"www.chronopost.fr","custom_search":{"form_target":"_self","solr":1},"scaldFile":{"path":"sites\/all\/modules\/contrib\/scald_file\/scald_file.css"},"urlIsAjaxTrusted":{"\/fr\/..\/tracking-no-cms\/suivi-page":true},"parcoursId":2,"chrono_xiti":{"xtpage":"homepage","xtn2":"2","base_url":"https:\/\/www.chronopost.fr"},"bootstrap":{"anchorsFix":1,"anchorsSmoothScrolling":1,"popoverEnabled":1,"popoverOptions":{"animation":1,"html":0,"placement":"right","selector":"","trigger":"click","title":"","content":"","delay":0,"container":"body"},"tooltipEnabled":1,"tooltipOptions":{"animation":1,"html":0,"placement":"auto left","selector":"","trigger":"hover focus","delay":0,"container":"body"}}});</script>
  <script type="text/javascript" src="https://tag.aticdn.net/555972/smarttag.js"></script>
  <script type="text/javascript" src="/sites/all/modules/custom/chrono_xiti/js/chrono_xiti.js"></script>

        <script type="text/javascript" src="https://try.abtasty.com/6d8eb2d318941bc5a1ce0bc07671d4a8.js"></script><link rel="prefetch" as="script" href="https://try.abtasty.com/shared/analytics.dcd68a70190822ba0f37.js">
  <link rel="stylesheet" href="/small-webapp/assets/css/style.css?v=1.3.5"><link rel="stylesheet" href="/small-webapp/assets/css/small.css?v=1.3.5"><script src="/small-webapp/js/vendor.js?v=1.3.5" type="text/javascript" charset="utf-8"></script><link rel="stylesheet" href="https://chatbot.chronopost.fr/JavaHookServer/static/styles.c3e12b4995ba4514c11e.css"><script src="https://chatbot.chronopost.fr/JavaHookServer/static/runtime-es5.87c391e2731ce4c21a8e.js" type="text/javascript" charset="utf-8"></script><style type="text/css">.fancybox-margin{margin-right:17px;}</style><script src="https://chatbot.chronopost.fr/JavaHookServer/static/polyfills-es5.fe5b938b80faf8ee65ae.js" type="text/javascript" charset="utf-8"></script><script src="/small-webapp/js/small.js?v=1.3.5" type="text/javascript" charset="utf-8"></script><script src="https://chatbot.chronopost.fr/JavaHookServer/static/main-es5.28706597a9508092268f.js" type="text/javascript" charset="utf-8"></script><style></style><style>.rf-chat-box-header-icon-img[_ngcontent-hxr-c28]{background:transparent no-repeat 0 0;background-size:cover}.mobile-buttons-container[_ngcontent-hxr-c28]{position:fixed;display:flex;flex-direction:column-reverse;align-items:flex-end;z-index:1}.rf-chat-box-container[_ngcontent-hxr-c28]{height:100%;width:100%;border-radius:0;position:fixed;background-color:#fff;z-index:10;bottom:0;right:30px;top:inherit;left:inherit;display:flex;flex-direction:column;box-sizing:border-box;box-shadow:0 0 15px 0 rgba(0,0,0,.5);margin:1px auto}.rf-chat-box-container[_ngcontent-hxr-c28]   .rf-chat-box-messages-container[_ngcontent-hxr-c28]{flex:1 1 1e-9px;box-sizing:border-box}@media screen and (max-width:600px){.rf-chat-box-container[_ngcontent-hxr-c28]{max-width:600px;max-height:none;top:0;left:0;padding:0}}@media screen and (min-width:600px){.rf-chat-box-container.bot-helper-open[_ngcontent-hxr-c28]{transform:translateY(386px)}}@media screen and (min-width:600px) and (max-height:550px){.rf-chat-box-container.bot-helper-open[_ngcontent-hxr-c28]{transform:translateY(calc(100% - 164px))}}.rf-chat-box-container[_ngcontent-hxr-c28]   .bot-help-header[_ngcontent-hxr-c28]{color:#fff;font-weight:700;height:104px;position:relative;box-shadow:0 5px 15px -5px rgba(0,0,0,.5)}.rf-chat-box-container[_ngcontent-hxr-c28]   .bot-help-header[_ngcontent-hxr-c28]   .rf-chat-box-header-icon-img[_ngcontent-hxr-c28]{cursor:pointer;height:65px;width:65px;position:absolute;top:20px;left:20px}.rf-chat-box-container[_ngcontent-hxr-c28]   .bot-help-header[_ngcontent-hxr-c28]   .bot-help-header-label[_ngcontent-hxr-c28]{cursor:pointer;font-size:21px;position:absolute;top:42px;left:116px}.rf-chat-box-container[_ngcontent-hxr-c28]   .bot-help-header[_ngcontent-hxr-c28]   .illuin-fa[_ngcontent-hxr-c28]{cursor:pointer;font-size:16px;position:absolute;right:20px;top:19px}.rf-chat-box-container[_ngcontent-hxr-c28]   .bot-help-footer[_ngcontent-hxr-c28]{height:40px;color:#fff;padding:10px;box-sizing:content-box}.rf-chat-box-container[_ngcontent-hxr-c28]   .bot-help-footer[_ngcontent-hxr-c28]   .bot-help-start[_ngcontent-hxr-c28]{text-align:center;cursor:pointer;padding:10px;font-size:16px;height:20px;line-height:1.25;box-sizing:content-box}.rf-chat-box-container[_ngcontent-hxr-c28]   .bot-help-footer[_ngcontent-hxr-c28]   .bot-help-start[_ngcontent-hxr-c28]:active{background-color:#979797!important}.rf-chat-box-container[_ngcontent-hxr-c28]   .rf-chat-box-header[_ngcontent-hxr-c28]{position:relative;overflow:hidden;font-weight:700;cursor:pointer;text-align:left;text-align:initial;box-shadow:0 5px 15px -5px rgba(0,0,0,.5);z-index:1;height:60px;box-sizing:content-box;color:#fff;font-size:16px;line-height:3.75;word-break:break-all}@media screen and (min-width:600px){.rf-chat-box-container[_ngcontent-hxr-c28]   .rf-chat-box-header[_ngcontent-hxr-c28]{border-radius:0}}.rf-chat-box-container[_ngcontent-hxr-c28]   .rf-chat-box-header.bot-disabled[_ngcontent-hxr-c28]{cursor:default}.rf-chat-box-container[_ngcontent-hxr-c28]   .rf-chat-box-header[_ngcontent-hxr-c28]   .rf-chat-box-header-label[_ngcontent-hxr-c28]{-webkit-user-select:none;overflow:hidden;padding-left:64px;padding-right:48px}.rf-chat-box-container[_ngcontent-hxr-c28]   .rf-chat-box-header[_ngcontent-hxr-c28]   .illuin-fa[_ngcontent-hxr-c28]{position:absolute;right:10px;top:19px;cursor:pointer}.rf-chat-box-container[_ngcontent-hxr-c28]   .rf-chat-box-header[_ngcontent-hxr-c28]   .rf-chat-bot-header-open-label[_ngcontent-hxr-c28], .rf-chat-box-container[_ngcontent-hxr-c28]   .rf-chat-box-header[_ngcontent-hxr-c28]   .rf-chat-box-header-close-label[_ngcontent-hxr-c28]{width:100%}.rf-chat-box-container[_ngcontent-hxr-c28]   .rf-chat-box-header[_ngcontent-hxr-c28]   .rf-chat-bot-header-open-label[_ngcontent-hxr-c28]:before{content:"";width:10px;height:10px;display:inline-block;border-radius:100%;margin-left:4px;margin-right:4px}.rf-chat-box-container[_ngcontent-hxr-c28]   .rf-chat-box-header[_ngcontent-hxr-c28]   .rf-chat-bot-header-open-label.bot-online[_ngcontent-hxr-c28]:before{background:#7ed321}.rf-chat-box-container[_ngcontent-hxr-c28]   .rf-chat-box-header[_ngcontent-hxr-c28]   .rf-chat-bot-header-open-label.bot-offline[_ngcontent-hxr-c28]:before{background:#d32127}.rf-chat-box-container[_ngcontent-hxr-c28]   .rf-chat-box-header[_ngcontent-hxr-c28]   .rf-chat-box-header-logo[_ngcontent-hxr-c28]{position:absolute;padding:6px 6px 6px 10px;vertical-align:top;border-radius:100%;display:inline-block}.rf-chat-box-container[_ngcontent-hxr-c28]   .rf-chat-box-header[_ngcontent-hxr-c28]   .rf-chat-box-header-logo[_ngcontent-hxr-c28]   .rf-chat-box-header-icon-img[_ngcontent-hxr-c28]{width:calc(60px - 12px);height:calc(60px - 12px)}.rf-chat-box-container[_ngcontent-hxr-c28]   .chat-notification-container[_ngcontent-hxr-c28]{position:absolute;right:7px;top:-10px;color:#fff;min-height:27px;min-width:27px;text-align:center;border-radius:100%;z-index:5}.rf-chat-box-container[_ngcontent-hxr-c28]   .chat-notification-container[_ngcontent-hxr-c28]   .illuin-fa-bell[_ngcontent-hxr-c28]{margin-top:4px}.rf-chat-box-container[_ngcontent-hxr-c28]   .bot-need-help-placeholder[_ngcontent-hxr-c28]{cursor:pointer}.rf-chat-box-container[_ngcontent-hxr-c28]   .crop-line[_ngcontent-hxr-c28]{position:absolute;transition:all .25s}.rf-chat-box-container[_ngcontent-hxr-c28]   .crop-top-line[_ngcontent-hxr-c28]{top:-5px;left:0;right:0;height:5px;cursor:row-resize}.rf-chat-box-container[_ngcontent-hxr-c28]   .crop-left-line[_ngcontent-hxr-c28]{top:0;left:-3px;bottom:0;width:5px;cursor:col-resize}.rf-chat-box-container[_ngcontent-hxr-c28]   .crop-right-line[_ngcontent-hxr-c28]{top:0;right:-3px;bottom:0;width:5px;cursor:col-resize}.rf-chat-box-container[_ngcontent-hxr-c28]   .crop-corner[_ngcontent-hxr-c28]{position:absolute;width:6px;height:6px;border-radius:2px;border:1px solid grey;background:#fff;opacity:0;transition:all .25s}.rf-chat-box-container[_ngcontent-hxr-c28]   .crop-top-left-corner[_ngcontent-hxr-c28]{top:-3px;left:-3px;cursor:nwse-resize}.rf-chat-box-container[_ngcontent-hxr-c28]   .crop-top-right-corner[_ngcontent-hxr-c28]{top:-3px;right:-3px;cursor:nesw-resize}.rf-chat-box-container[_ngcontent-hxr-c28]:hover   .crop-corner[_ngcontent-hxr-c28]{opacity:1}</style><link rel="stylesheet" class="rf-chat-style-manager-rf-chat-app-theme" href="https://chatbot.chronopost.fr/JavaHookServer/static/default-theme-1648461303.css"><script charset="utf-8" src="/small-webapp/js/9.js?v=project.version"></script><style>.rf-chat-box-header-icon-img[_ngcontent-hxr-c6]{background:transparent no-repeat 0 0;border-radius:100%;background-size:cover}.bot-help-button-mobile[_ngcontent-hxr-c6]{display:block;cursor:pointer}@media screen and (min-width:600px){.bot-help-button-mobile[_ngcontent-hxr-c6]:not(.force-enable){display:none}}.bot-help-button-mobile[_ngcontent-hxr-c6]   .bot-help-button-label[_ngcontent-hxr-c6]{color:#fff;font-size:13px;padding:5px 8px;width:80px;letter-spacing:-.02px;text-align:center;line-height:1;top:-14px;position:absolute;z-index:1}.bot-help-button-mobile[_ngcontent-hxr-c6]   .bot-help-button-pin[_ngcontent-hxr-c6]{width:0;height:0;left:47px;top:8px;position:absolute;z-index:10;border-style:solid;border-width:9px 9px 0 0}.bot-help-button-mobile[_ngcontent-hxr-c6]   .bot-help-button-container[_ngcontent-hxr-c6]{width:74px;height:74px;border-radius:100%;box-shadow:0 0 15px 0 rgba(0,0,0,.5)}.bot-help-button-mobile[_ngcontent-hxr-c6]   .bot-help-button-container[_ngcontent-hxr-c6]   .rf-chat-box-header-icon-img[_ngcontent-hxr-c6]{width:calc(100% - 10px);height:calc(100% - 10px);position:relative;top:5px;left:5px}.bot-help-button-mobile[_ngcontent-hxr-c6]   .chat-notification-icon[_ngcontent-hxr-c6]{position:absolute;right:0;bottom:-4px;color:#fff;min-height:27px;min-width:27px;text-align:center;border-radius:100%}.bot-help-button-mobile[_ngcontent-hxr-c6]   .chat-notification-icon[_ngcontent-hxr-c6]   .illuin-fa-bell[_ngcontent-hxr-c6]{margin-top:4px}</style><style type="text/css" id="CookiebotDialogStyle">@media screen and (max-width:720px){#overlay{height:100%;background:#000;opacity:20%}#wrapper{padding:30px 50px 60px;bottom:0;position:absolute}#c-right{margin-top:30px}#c-right a{margin-left:auto;margin-right:auto;position:relative}#footerPopin .btn{margin-right:0!important}#footerPopin .btn:nth-child(1){order:3}#footerPopin .btn:nth-child(2){order:2}#footerPopin .btn:nth-child(3){order:1}}@media screen and (min-width:720px){#wrapper{display:flex;padding:30px 100px 60px 20px;position:absolute;bottom:0;width:100%}#wrapper #c-left{padding-top:25px;padding-right:40px;padding-left:40px;flex:1 1 70%}#wrapper #c-right{padding-top:25px}#overlay{display:block;height:100%;opacity:20%;background-color:#000}}#cookiebanner{width:100%;height:100%;position:fixed;z-index:2147483645;bottom:-800px;text-align:left}#cookiebanner p{font-size:14px;line-height:1.4;margin-bottom:10px}#cookiebanner .c-header{color:#000;font-weight:bold;margin-bottom:4px;font-size:32px;text-align:left}#cookiebanner p.c-message{font-size:14px;color:#000;text-align:left}#cookiebanner .row{display:flex!important;flex-wrap:wrap;align-items:center!important}#wrapper{background-color:#fff}#wrapper .btn{font-size:20px;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;cursor:pointer;border:0;border-radius:unset;display:block;margin-bottom:10px;text-decoration:none;width:250px;font-weight:normal;text-align:center;vertical-align:middle;touch-action:manipulation;white-space:nowrap;padding:6px 12px;line-height:1.42857143;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}#wrapper .btn-rectangle{background-color:#0060a2;color:#fff}#wrapper .btn-rectangle:hover{background-color:#009adf;color:#fff;transition:.3s all}#wrapper .link,#wrapper .c-message a{text-decoration:underline}#wrapper .link{display:block;color:#0060a2;text-align:center;font-family:PlutoSansDPDRegular;font-size:20px}#wrapper .link:hover{color:#009adf;transition:.3s all}.c-message a{color:#000}#headerPopin,#bodyPopin,#wrapperPopin{display:none}#headerPopin h1{font-weight:400;margin-bottom:10px}#footerPopin .btn{margin-right:20px;width:250px}#footerPopin .btn:last-child{margin-right:0}#footerPopin{justify-content:center;margin-top:20px;display:flex}#bodyPopin label{margin-left:20px;margin-bottom:0}#bodyPopin p{margin-left:33px;margin-top:0}#bodyPopin .cookies-details{display:block;color:#000;text-decoration:underline;margin-left:33px;margin-bottom:10px;width:100%}#bodyPopin .cookies-details span{position:relative;top:2px;left:5px;display:inline-block}#bodyPopin strong{cursor:none!important}.popin-intro .container{margin-bottom:20px;font-size:14px;line-height:1}#bodyPopin h3{margin-top:0!important;font-size:24px!important;font-weight:200!important}.CybotCookiebotDialogDetailBodyContentCookieTypeTable{margin-left:33px;margin-top:10px;display:none}.CybotCookiebotDialogDetailBodyContentCookieTypeTable th{background-color:#e6e7e8;border-bottom:1px solid #808285;font-weight:400}.CybotCookiebotDialogDetailBodyContentCookieTypeTable td{border-bottom:1px solid #808285}table{width:100%}</style><style type="text/css" id="CookieConsentStateDisplayStyles">.cookieconsent-optin,.cookieconsent-optin-preferences,.cookieconsent-optin-statistics,.cookieconsent-optin-marketing{display:block;display:initial;}.cookieconsent-optout-preferences,.cookieconsent-optout-statistics,.cookieconsent-optout-marketing,.cookieconsent-optout{display:none;}</style><style>.greeting-message-box-container[_ngcontent-hxr-c7]{display:flex;flex-direction:column;align-items:flex-end;z-index:1;max-width:250px;margin-right:37px}.greeting-message-box-container[_ngcontent-hxr-c7]   .greeting-message-box[_ngcontent-hxr-c7]{display:flex;flex-direction:row;justify-content:space-between;box-shadow:3px 1px 12px grey;flex-shrink:2}.greeting-message-box-container[_ngcontent-hxr-c7]   .message-content[_ngcontent-hxr-c7]{cursor:pointer;padding:16px 8px 16px 16px;color:#fff;text-align:justify}.greeting-message-box-container[_ngcontent-hxr-c7]   .close-icon[_ngcontent-hxr-c7]{align-self:flex-start;color:#fff;cursor:pointer;font-size:20px;margin-right:5px;padding:2px}</style></head>
<body class="html front not-logged-in no-sidebars page-indexphp i18n-fr scald-file-processed"><div id="cookiebanner" lang="fr" dir="ltr" ng-non-bindable="" name="cookiebanner" style="display: none; bottom: 0px;"><div id="overlay"></div><div id="wrapper"><div id="c-left"><p class="c-header">Ce site web utilise des cookies</p><p class="c-message">Les cookies permettent à Chronopost et ses partenaires l'amélioration de votre expérience, la personnalisation de contenu et de publicités mais aussi, la réalisation d'analyses statistiques. <a href="https://www.chronopost.fr/fr/cookies" style="">En savoir plus </a></p></div><div id="c-right"><a href="javascript:void(0)" onclick="Cookiebot.dialog.submitConsent()" class="btn btn-rectangle">Accepter</a><a href="javascript:void(0)" onclick="Cookiebot.dialog.submitDecline()" class="btn btn-rectangle">Refuser</a><a href="javascript:void(0)" onclick="showSettings()" class="link">Paramètres</a></div><div id="wrapperPopin" class="container"><div id="headerPopin" class="row"><div class="popin-intro"><div class="container" style="width:100%;"><h1 class="cl-grey-extra-dark center" style="">Votre choix relatif aux cookies sur chronopost.fr</h1>Votre choix relatif aux cookies sur chronopost.fr Les cookies permettent à Chronopost et ses partenaires l'amélioration de votre expérience, la personnalisation de contenu et de publicités mais aussi, la réalisation d'analyses statistiques.&nbsp;<a href="https://www.chronopost.fr/fr/cookies" target="_blank" style="">En savoir plus</a></div></div></div><div id="bodyPopin" class="row"><input type="checkbox" id="necessaires" name="necessaires" checked="" disabled=""><label for="necessaires-label"><h3 class="necessaires-title">Nécessaires</h3></label><p class="necessaires-body"><strong style="">Les cookies nécessaires</strong> : Les cookies nécessaires contribuent à rendre le Site utilisable en activant des fonctions de base comme la navigation de page et l'accès aux zones sécurisées du Site. Ce dernier ne peut pas fonctionner correctement sans ces cookies. </p><a href="javascript:void(0)" class="cookies-details" onclick="showCookiesNecessaryDetails()">Détails des Cookies <span id="icon-necessary" class="icon-down">&gt;</span></a> <table id="CybotCookiebotDialogDetailTableNecessary" class="CybotCookiebotDialogDetailBodyContentCookieTypeTable"><thead><tr><th scope="col">Nom</th><th scope="col">Fournisseur</th><th scope="col">Finalité</th><th scope="col">Expiration</th><th scope="col">Type</th></tr></thead><tbody><tr><td title="atuserid">atuserid</td><td>www.chronopost.fr</td><td title="Contient un identifiant de visiteur - Ceci est utilisé pour identifier le visiteur lors de sa nouvelle entrée sur le site.">Contient un identifiant de visiteur - Ceci est utilisé pour identifier le visiteur lors de sa nouvelle entrée sur le site.</td><td title="13 mois">13 mois</td><td title="HTTP">HTTP</td></tr><tr><td title="CookieConsent">CookieConsent</td><td><a href="https://www.cookiebot.com/goto/privacy-policy/" target="_blank" rel="noopener noreferrer nofollow" title="la politique de confidentialité de Cookiebot">Cookiebot</a></td><td title="Stocke l'autorisation d'utilisation de cookies pour le domaine actuel par l'utilisateur ">Stocke l'autorisation d'utilisation de cookies pour le domaine actuel par l'utilisateur </td><td title="1 année">1 année</td><td title="HTTP">HTTP</td></tr><tr><td title="has_js">has_js</td><td>www.chronopost.fr</td><td title="Enregistre si l'utilisateur a ou n’a pas activé JavaScript dans le navigateur.">Enregistre si l'utilisateur a ou n’a pas activé JavaScript dans le navigateur.</td><td title="Session">Session</td><td title="HTTP">HTTP</td></tr><tr><td title="JSESSIONID">JSESSIONID</td><td>www.chronopost.fr</td><td title="Conserve la configuration des paramètres des utilisateurs à travers les demandes de page.">Conserve la configuration des paramètres des utilisateurs à travers les demandes de page.</td><td title="Session">Session</td><td title="HTTP">HTTP</td></tr><tr><td title="lang">lang&nbsp;[x3]</td><td>www.chronopost.fr<br><a href="https://www.linkedin.com/legal/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="la politique de confidentialité de LinkedIn">LinkedIn</a></td><td title="Rappelle la version linguistique d'un site sélectionnée par l'utilisateur">Rappelle la version linguistique d'un site sélectionnée par l'utilisateur</td><td title="Session">Session</td><td title="HTTP">HTTP</td></tr><tr><td title="SESS#">SESS#</td><td>www.chronopost.fr</td><td title="Conserve la configuration des paramètres des utilisateurs à travers les demandes de page.">Conserve la configuration des paramètres des utilisateurs à travers les demandes de page.</td><td title="6 jours">6 jours</td><td title="HTTP">HTTP</td></tr><tr><td title="state">state</td><td>www.chronopost.fr</td><td title="Détecte si l'utilisateur a coché le bouton « Ne pas vendre mes informations personnelles » sur le site web. Cette fonction fait partie des exigences du CCPA.">Détecte si l'utilisateur a coché le bouton « Ne pas vendre mes informations personnelles » sur le site web. Cette fonction fait partie des exigences du CCPA.</td><td title="Persistent">Persistent</td><td title="HTML">HTML</td></tr><tr><td title="li_gc">li_gc</td><td><a href="https://www.linkedin.com/legal/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="la politique de confidentialité de LinkedIn">LinkedIn</a></td><td title="Stocke l'autorisation d'utilisation de cookies pour le domaine actuel par l'utilisateur ">Stocke l'autorisation d'utilisation de cookies pour le domaine actuel par l'utilisateur </td><td title="2 années">2 années</td><td title="HTTP">HTTP</td></tr><tr><td title="altcsv.sid">altcsv.sid</td><td>alturing.eu</td><td title="En attente">En attente</td><td title="1 jour">1 jour</td><td title="HTTP">HTTP</td></tr><tr><td title="JSESSIONID_TCCHATBOT">JSESSIONID_TCCHATBOT</td><td>chatbot.chronopost.fr</td><td title="En attente">En attente</td><td title="Session">Session</td><td title="HTTP">HTTP</td></tr><tr><td title="bot_interface_1-prod-gdpr">bot_interface_1-prod-gdpr</td><td>www.chronopost.fr</td><td title="En attente">En attente</td><td title="Session">Session</td><td title="HTML">HTML</td></tr><tr><td title="bot_interface_1-prod-liveChat">bot_interface_1-prod-liveChat</td><td>www.chronopost.fr</td><td title="En attente">En attente</td><td title="Session">Session</td><td title="HTML">HTML</td></tr><tr><td title="cookie_idCart">cookie_idCart</td><td>www.chronopost.fr</td><td title="En attente">En attente</td><td title="4 jours">4 jours</td><td title="HTTP">HTTP</td></tr><tr><td title="cookie_idSessionShipping">cookie_idSessionShipping</td><td>www.chronopost.fr</td><td title="En attente">En attente</td><td title="4 jours">4 jours</td><td title="HTTP">HTTP</td></tr><tr><td title="cookie_lastCartUpdate">cookie_lastCartUpdate</td><td>www.chronopost.fr</td><td title="En attente">En attente</td><td title="4 jours">4 jours</td><td title="HTTP">HTTP</td></tr><tr><td title="cookie_nbCartArticles">cookie_nbCartArticles</td><td>www.chronopost.fr</td><td title="En attente">En attente</td><td title="4 jours">4 jours</td><td title="HTTP">HTTP</td></tr><tr><td title="cookie_profileSession">cookie_profileSession</td><td>www.chronopost.fr</td><td title="En attente">En attente</td><td title="Session">Session</td><td title="HTTP">HTTP</td></tr><tr><td title="iv4">iv4</td><td>www.chronopost.fr</td><td title="En attente">En attente</td><td title="4 jours">4 jours</td><td title="HTTP">HTTP</td></tr><tr><td title="JSESSIONID_TEMCHRONOWEB">JSESSIONID_TEMCHRONOWEB</td><td>www.chronopost.fr</td><td title="En attente">En attente</td><td title="Session">Session</td><td title="HTTP">HTTP</td></tr><tr><td title="JSESSIONID_WSSHIPPING">JSESSIONID_WSSHIPPING</td><td>www.chronopost.fr</td><td title="En attente">En attente</td><td title="Session">Session</td><td title="HTTP">HTTP</td></tr><tr><td title="parcours">parcours</td><td>www.chronopost.fr</td><td title="En attente">En attente</td><td title="Session">Session</td><td title="HTTP">HTTP</td></tr><tr><td title="parcoursId">parcoursId</td><td>www.chronopost.fr</td><td title="En attente">En attente</td><td title="Session">Session</td><td title="HTTP">HTTP</td></tr><tr><td title="SAWWID">SAWWID</td><td>www.chronopost.fr</td><td title="En attente">En attente</td><td title="Session">Session</td><td title="HTTP">HTTP</td></tr><tr><td title="small-app_www.chronopost.fr_shipping">small-app_www.chronopost.fr_shipping</td><td>www.chronopost.fr</td><td title="En attente">En attente</td><td title="Session">Session</td><td title="HTML">HTML</td></tr><tr><td title="small-app_www.chronopost.fr_shippingTmp">small-app_www.chronopost.fr_shippingTmp</td><td>www.chronopost.fr</td><td title="En attente">En attente</td><td title="Session">Session</td><td title="HTML">HTML</td></tr><tr><td title="small-app_www.chronopost.fr_step">small-app_www.chronopost.fr_step</td><td>www.chronopost.fr</td><td title="En attente">En attente</td><td title="Session">Session</td><td title="HTML">HTML</td></tr><tr><td title="small-app_www.chronopost.fr_uid">small-app_www.chronopost.fr_uid</td><td>www.chronopost.fr</td><td title="En attente">En attente</td><td title="Session">Session</td><td title="HTML">HTML</td></tr></tbody></table> <input type="checkbox" id="preferences" name="preferences"><label for="preferences-label"><h3 class="preferences-title">Préférences</h3></label><p class="preferences-body"><strong style="">Les cookies de préférences</strong> permettent à un site Web de retenir des informations qui modifient la manière dont le site se comporte ou s’affiche, comme votre langue préférée ou la région dans laquelle vous vous situez. </p><a href="javascript:void(0)" class="cookies-details" onclick="showCookiesPreferenceDetails()">Détails des Cookies <span id="icon-preference" class="icon-down">&gt;</span></a> <table id="CybotCookiebotDialogDetailTablePreference" class="CybotCookiebotDialogDetailBodyContentCookieTypeTable"><tbody><tr><td class="CybotCookiebotDialogDetailBodyContentCookieTypeTableEmpty">Nous n'utilisons pas de cookies de ce type.</td></tr></tbody></table> <input type="checkbox" id="statistiques" name="statistiques"><label for="statistiques-label"><h3 class="statistiques-title">Statistiques</h3></label><p class="statistiques-body"> <strong style="">Les cookies statistiques</strong> : Les cookies statistiques aident Chronopost, par la collecte et la communication d'informations de manière anonyme, à comprendre comment les internautes interagissent avec les sites Web. </p><a href="javascript:void(0)" class="cookies-details" onclick="showCookiesStatisticsDetails()">Détails des Cookies <span id="icon-statistics" class="icon-down">&gt;</span></a> <table id="CybotCookiebotDialogDetailTableStatistics" class="CybotCookiebotDialogDetailBodyContentCookieTypeTable"><thead><tr><th scope="col">Nom</th><th scope="col">Fournisseur</th><th scope="col">Finalité</th><th scope="col">Expiration</th><th scope="col">Type</th></tr></thead><tbody><tr><td title="atauthority">atauthority</td><td>www.chronopost.fr</td><td title="Conserve la configuration des paramètres des utilisateurs à travers les demandes de page.">Conserve la configuration des paramètres des utilisateurs à travers les demandes de page.</td><td title="13 mois">13 mois</td><td title="HTTP">HTTP</td></tr><tr><td title="atidvisitor">atidvisitor</td><td>www.chronopost.fr</td><td title="Ce cookie est utilisé pour compter combien de fois un site a été visité par différents visiteurs. On fait cela en attribuant à chaque visiteur un identifiant aléatoire. Ainsi, le visiteur ne doit pas s'inscrire deux fois.">Ce cookie est utilisé pour compter combien de fois un site a été visité par différents visiteurs. On fait cela en attribuant à chaque visiteur un identifiant aléatoire. Ainsi, le visiteur ne doit pas s'inscrire deux fois.</td><td title="6 mois">6 mois</td><td title="HTTP">HTTP</td></tr><tr><td title="atid">atid</td><td><a href="https://www.atinternet.com/en/data-protection/" target="_blank" rel="noopener noreferrer nofollow" title="la politique de confidentialité de AT Internet">AT Internet</a></td><td title="Enregistre des données statistiques sur le comportement des internautes sur le site web. Utilisé pour les analyses internes par l'opérateur du site web.">Enregistre des données statistiques sur le comportement des internautes sur le site web. Utilisé pour les analyses internes par l'opérateur du site web.</td><td title="1 année">1 année</td><td title="HTTP">HTTP</td></tr><tr><td title="hit.xiti">hit.xiti</td><td><a href="https://www.atinternet.com/en/data-protection/" target="_blank" rel="noopener noreferrer nofollow" title="la politique de confidentialité de AT Internet">AT Internet</a></td><td title="Ce cookie est utilisé pour identifier la fréquence des visites et le temps que passe le visiteur sur le site. Il sert aussi à déterminer combien de sous-pages le visiteur visite sur un site, et lesquelles. Ces informations peuvent être utilisées par le site pour optimiser le domaine et ses sous-pages.">Ce cookie est utilisé pour identifier la fréquence des visites et le temps que passe le visiteur sur le site. Il sert aussi à déterminer combien de sous-pages le visiteur visite sur un site, et lesquelles. Ces informations peuvent être utilisées par le site pour optimiser le domaine et ses sous-pages.</td><td title="Session">Session</td><td title="Pixel">Pixel</td></tr></tbody></table> <input type="checkbox" id="marketing" name="marketing"><label for="marketing-label"><h3 class="marketing-title">Marketing</h3></label><p class="marketing-body"> <strong style="">Les cookies marketing</strong> (publicitaires, de mesures de l’audience et de suivi de navigation) : Les cookies marketing sont utilisés pour effectuer le suivi des internautes au travers des Sites. Le but est d'afficher des publicités qui sont pertinentes et intéressantes pour l'utilisateur individuel et donc plus précieuses pour les éditeurs et annonceurs tiers. </p><a href="javascript:void(0)" class="cookies-details" onclick="showCookiesAdvertisingDetails()">Détails des Cookies <span id="icon-advertising" class="icon-down">&gt;</span></a> <table id="CybotCookiebotDialogDetailTableAdvertising" class="CybotCookiebotDialogDetailBodyContentCookieTypeTable"><thead><tr><th scope="col">Nom</th><th scope="col">Fournisseur</th><th scope="col">Finalité</th><th scope="col">Expiration</th><th scope="col">Type</th></tr></thead><tbody><tr><td title="MUID">MUID</td><td><a href="https://privacy.microsoft.com/en-US/privacystatement" target="_blank" rel="noopener noreferrer nofollow" title="la politique de confidentialité de Microsoft">Microsoft</a></td><td title="Largement utilisé par Microsoft comme un identifiant utilisateur unique. Ce cookie permet le suivi des utilisateurs en synchronisant l'identifiant dans de nombreux domaines Microsoft.">Largement utilisé par Microsoft comme un identifiant utilisateur unique. Ce cookie permet le suivi des utilisateurs en synchronisant l'identifiant dans de nombreux domaines Microsoft.</td><td title="1 année">1 année</td><td title="HTTP">HTTP</td></tr><tr><td title="_fbp">_fbp</td><td><a href="https://www.facebook.com/policy.php/" target="_blank" rel="noopener noreferrer nofollow" title="la politique de confidentialité de  Meta Platforms, Inc."> Meta Platforms, Inc.</a></td><td title="Utilisé par Facebook pour fournir une série de produits publicitaires tels que les offres en temps réel d'annonceurs tiers.">Utilisé par Facebook pour fournir une série de produits publicitaires tels que les offres en temps réel d'annonceurs tiers.</td><td title="3 mois">3 mois</td><td title="HTTP">HTTP</td></tr><tr><td title="_gcl_au">_gcl_au</td><td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="la politique de confidentialité de Google">Google</a></td><td title="Utilisé par Google AdSense pour expérimenter l'efficacité de la publicité sur de divers sites Web en utilisant leurs services. ">Utilisé par Google AdSense pour expérimenter l'efficacité de la publicité sur de divers sites Web en utilisant leurs services. </td><td title="3 mois">3 mois</td><td title="HTTP">HTTP</td></tr><tr><td title="ABTasty">ABTasty</td><td><a href="https://www.abtasty.com/terms-of-use/" target="_blank" rel="noopener noreferrer nofollow" title="la politique de confidentialité de Abtasty">Abtasty</a></td><td title="Ce cookie est utilisé par l’opérateur du site web dans le cadre de tests multi-variables. C'est un outil utilisé pour combiner ou modifier le contenu du site. Cela permet au site web de trouver la meilleure variation / édition du site.">Ce cookie est utilisé par l’opérateur du site web dans le cadre de tests multi-variables. C'est un outil utilisé pour combiner ou modifier le contenu du site. Cela permet au site web de trouver la meilleure variation / édition du site.</td><td title="1 année">1 année</td><td title="HTTP">HTTP</td></tr><tr><td title="ABTastyData">ABTastyData</td><td><a href="https://www.abtasty.com/terms-of-use/" target="_blank" rel="noopener noreferrer nofollow" title="la politique de confidentialité de Abtasty">Abtasty</a></td><td title="Ce cookie est utilisé par l’opérateur du site web dans le cadre de tests multi-variables. C'est un outil utilisé pour combiner ou modifier le contenu du site. Cela permet au site web de trouver la meilleure variation / édition du site.">Ce cookie est utilisé par l’opérateur du site web dans le cadre de tests multi-variables. C'est un outil utilisé pour combiner ou modifier le contenu du site. Cela permet au site web de trouver la meilleure variation / édition du site.</td><td title="Persistent">Persistent</td><td title="HTML">HTML</td></tr><tr><td title="ABTastyDomainTest">ABTastyDomainTest</td><td><a href="https://www.abtasty.com/terms-of-use/" target="_blank" rel="noopener noreferrer nofollow" title="la politique de confidentialité de Abtasty">Abtasty</a></td><td title="Ce cookie est utilisé par l’opérateur du site web dans le cadre de tests multi-variables. C'est un outil utilisé pour combiner ou modifier le contenu du site. Cela permet au site web de trouver la meilleure variation / édition du site.">Ce cookie est utilisé par l’opérateur du site web dans le cadre de tests multi-variables. C'est un outil utilisé pour combiner ou modifier le contenu du site. Cela permet au site web de trouver la meilleure variation / édition du site.</td><td title="Session">Session</td><td title="HTTP">HTTP</td></tr><tr><td title="ABTastyGeoloc">ABTastyGeoloc</td><td><a href="https://www.abtasty.com/terms-of-use/" target="_blank" rel="noopener noreferrer nofollow" title="la politique de confidentialité de Abtasty">Abtasty</a></td><td title="Utilisé pour suivre les visiteurs sur plusieurs sites Web, afin de présenter des publicités pertinentes en fonction des préférences du visiteur.">Utilisé pour suivre les visiteurs sur plusieurs sites Web, afin de présenter des publicités pertinentes en fonction des préférences du visiteur.</td><td title="Session">Session</td><td title="HTML">HTML</td></tr><tr><td title="ABTastySession">ABTastySession</td><td><a href="https://www.abtasty.com/terms-of-use/" target="_blank" rel="noopener noreferrer nofollow" title="la politique de confidentialité de Abtasty">Abtasty</a></td><td title="Ce cookie est utilisé par l’opérateur du site web dans le cadre de tests multi-variables. C'est un outil utilisé pour combiner ou modifier le contenu du site. Cela permet au site web de trouver la meilleure variation / édition du site.">Ce cookie est utilisé par l’opérateur du site web dans le cadre de tests multi-variables. C'est un outil utilisé pour combiner ou modifier le contenu du site. Cela permet au site web de trouver la meilleure variation / édition du site.</td><td title="1 jour">1 jour</td><td title="HTTP">HTTP</td></tr><tr><td title="ABTastyUA">ABTastyUA</td><td><a href="https://www.abtasty.com/terms-of-use/" target="_blank" rel="noopener noreferrer nofollow" title="la politique de confidentialité de Abtasty">Abtasty</a></td><td title="Utilisé pour suivre les visiteurs sur plusieurs sites Web, afin de présenter des publicités pertinentes en fonction des préférences du visiteur.">Utilisé pour suivre les visiteurs sur plusieurs sites Web, afin de présenter des publicités pertinentes en fonction des préférences du visiteur.</td><td title="Session">Session</td><td title="HTML">HTML</td></tr><tr><td title="IDE">IDE</td><td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="la politique de confidentialité de Google">Google</a></td><td title="Utilisé par Google DoubleClick pour enregistrer et signaler les actions de l'utilisateur du site après qu'il ait vu ou cliqué sur une des pubs de l'annonceur dans le but de mesurer l'efficacité et de présenter des annonces publicitaires ciblées à l'utilisateur.">Utilisé par Google DoubleClick pour enregistrer et signaler les actions de l'utilisateur du site après qu'il ait vu ou cliqué sur une des pubs de l'annonceur dans le but de mesurer l'efficacité et de présenter des annonces publicitaires ciblées à l'utilisateur.</td><td title="1 année">1 année</td><td title="HTTP">HTTP</td></tr><tr><td title="test_cookie">test_cookie</td><td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="la politique de confidentialité de Google">Google</a></td><td title="Utilisé pour vérifier si le navigateur de l'utilisateur accepte les cookies.">Utilisé pour vérifier si le navigateur de l'utilisateur accepte les cookies.</td><td title="1 jour">1 jour</td><td title="HTTP">HTTP</td></tr><tr><td title="tr">tr</td><td><a href="https://www.facebook.com/policy.php/" target="_blank" rel="noopener noreferrer nofollow" title="la politique de confidentialité de Meta Platforms, Inc.">Meta Platforms, Inc.</a></td><td title="Utilisé par Facebook pour fournir une série de produits publicitaires tels que les offres en temps réel d'annonceurs tiers.">Utilisé par Facebook pour fournir une série de produits publicitaires tels que les offres en temps réel d'annonceurs tiers.</td><td title="Session">Session</td><td title="Pixel">Pixel</td></tr><tr><td title="_wrvur">_wrvur</td><td><a href="https://weborama.com/respect-de-la-vie-privee-2-2/" target="_blank" rel="noopener noreferrer nofollow" title="la politique de confidentialité de Weborama">Weborama</a></td><td title="Suit les sessions individuelles sur le site web, ce qui permet au site de compiler des données statistiques à partir de plusieurs visites. Ces données peuvent être utilisées pour créer des prospects à des fins de marketing.">Suit les sessions individuelles sur le site web, ce qui permet au site de compiler des données statistiques à partir de plusieurs visites. Ces données peuvent être utilisées pour créer des prospects à des fins de marketing.</td><td title="26 jours">26 jours</td><td title="HTTP">HTTP</td></tr><tr><td title="_wrvusr">_wrvusr</td><td><a href="https://weborama.com/respect-de-la-vie-privee-2-2/" target="_blank" rel="noopener noreferrer nofollow" title="la politique de confidentialité de Weborama">Weborama</a></td><td title="Suit les sessions individuelles sur le site web, ce qui permet au site de compiler des données statistiques à partir de plusieurs visites. Ces données peuvent être utilisées pour créer des prospects à des fins de marketing.">Suit les sessions individuelles sur le site web, ce qui permet au site de compiler des données statistiques à partir de plusieurs visites. Ces données peuvent être utilisées pour créer des prospects à des fins de marketing.</td><td title="26 jours">26 jours</td><td title="HTTP">HTTP</td></tr><tr><td title="AnalyticsSyncHistory">AnalyticsSyncHistory</td><td><a href="https://www.linkedin.com/legal/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="la politique de confidentialité de LinkedIn">LinkedIn</a></td><td title="Utilisé dans le cadre de la synchronisation des données avec un service d'analyse tiers.">Utilisé dans le cadre de la synchronisation des données avec un service d'analyse tiers.</td><td title="29 jours">29 jours</td><td title="HTTP">HTTP</td></tr><tr><td title="bcookie">bcookie</td><td><a href="https://www.linkedin.com/legal/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="la politique de confidentialité de LinkedIn">LinkedIn</a></td><td title="Utilisé par le service de réseau social, LinkedIn, pour le suivi de l'utilisation des services intégrés.">Utilisé par le service de réseau social, LinkedIn, pour le suivi de l'utilisation des services intégrés.</td><td title="2 années">2 années</td><td title="HTTP">HTTP</td></tr><tr><td title="bscookie">bscookie</td><td><a href="https://www.linkedin.com/legal/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="la politique de confidentialité de LinkedIn">LinkedIn</a></td><td title="Utilisé par le service de réseau social, LinkedIn, pour le suivi de l'utilisation des services intégrés.">Utilisé par le service de réseau social, LinkedIn, pour le suivi de l'utilisation des services intégrés.</td><td title="2 années">2 années</td><td title="HTTP">HTTP</td></tr><tr><td title="lidc">lidc</td><td><a href="https://www.linkedin.com/legal/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="la politique de confidentialité de LinkedIn">LinkedIn</a></td><td title="Utilisé par le service de réseau social, LinkedIn, pour le suivi de l'utilisation des services intégrés.">Utilisé par le service de réseau social, LinkedIn, pour le suivi de l'utilisation des services intégrés.</td><td title="1 jour">1 jour</td><td title="HTTP">HTTP</td></tr><tr><td title="UserMatchHistory">UserMatchHistory</td><td><a href="https://www.linkedin.com/legal/privacy-policy" target="_blank" rel="noopener noreferrer nofollow" title="la politique de confidentialité de LinkedIn">LinkedIn</a></td><td title="Utilisé pour suivre les visiteurs sur plusieurs sites Web, afin de présenter des publicités pertinentes en fonction des préférences du visiteur. ">Utilisé pour suivre les visiteurs sur plusieurs sites Web, afin de présenter des publicités pertinentes en fonction des préférences du visiteur. </td><td title="29 jours">29 jours</td><td title="HTTP">HTTP</td></tr><tr><td title="AFFICHE_W">AFFICHE_W</td><td><a href="https://weborama.com/respect-de-la-vie-privee-2-2/" target="_blank" rel="noopener noreferrer nofollow" title="la politique de confidentialité de Weborama">Weborama</a></td><td title="Utilisé par la plateforme publicitaire Weborama pour déterminer les intérêts du visiteur en fonction de ses visites de pages, du contenu sur lequel il clique et d'autres actions sur le site.">Utilisé par la plateforme publicitaire Weborama pour déterminer les intérêts du visiteur en fonction de ses visites de pages, du contenu sur lequel il clique et d'autres actions sur le site.</td><td title="1 année">1 année</td><td title="HTTP">HTTP</td></tr><tr><td title="VISITOR_INFO1_LIVE">VISITOR_INFO1_LIVE</td><td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="la politique de confidentialité de YouTube">YouTube</a></td><td title="Tente d'estimer la bande passante des utilisateurs sur des pages avec des vidéos YouTube intégrées.">Tente d'estimer la bande passante des utilisateurs sur des pages avec des vidéos YouTube intégrées.</td><td title="179 jours">179 jours</td><td title="HTTP">HTTP</td></tr><tr><td title="YSC">YSC</td><td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="la politique de confidentialité de YouTube">YouTube</a></td><td title="Enregistre un identifiant unique pour conserver des statistiques sur les vidéos de YouTube vues par l'utilisateur.">Enregistre un identifiant unique pour conserver des statistiques sur les vidéos de YouTube vues par l'utilisateur.</td><td title="Session">Session</td><td title="HTTP">HTTP</td></tr><tr><td title="yt.innertube::nextId">yt.innertube::nextId</td><td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="la politique de confidentialité de YouTube">YouTube</a></td><td title="Enregistre un identifiant unique pour conserver des statistiques sur les vidéos de YouTube vues par l'utilisateur.">Enregistre un identifiant unique pour conserver des statistiques sur les vidéos de YouTube vues par l'utilisateur.</td><td title="Persistent">Persistent</td><td title="HTML">HTML</td></tr><tr><td title="yt.innertube::requests">yt.innertube::requests</td><td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="la politique de confidentialité de YouTube">YouTube</a></td><td title="Enregistre un identifiant unique pour conserver des statistiques sur les vidéos de YouTube vues par l'utilisateur.">Enregistre un identifiant unique pour conserver des statistiques sur les vidéos de YouTube vues par l'utilisateur.</td><td title="Persistent">Persistent</td><td title="HTML">HTML</td></tr><tr><td title="ytidb::LAST_RESULT_ENTRY_KEY">ytidb::LAST_RESULT_ENTRY_KEY</td><td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="la politique de confidentialité de YouTube">YouTube</a></td><td title="Stocke les préférences de lecture vidéo de l'utilisateur pour les vidéos YouTube incorporées">Stocke les préférences de lecture vidéo de l'utilisateur pour les vidéos YouTube incorporées</td><td title="Persistent">Persistent</td><td title="HTML">HTML</td></tr><tr><td title="yt-remote-cast-available">yt-remote-cast-available</td><td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="la politique de confidentialité de YouTube">YouTube</a></td><td title="Stocke les préférences de lecture vidéo de l'utilisateur pour les vidéos YouTube incorporées">Stocke les préférences de lecture vidéo de l'utilisateur pour les vidéos YouTube incorporées</td><td title="Session">Session</td><td title="HTML">HTML</td></tr><tr><td title="yt-remote-cast-installed">yt-remote-cast-installed</td><td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="la politique de confidentialité de YouTube">YouTube</a></td><td title="Stocke les préférences de lecture vidéo de l'utilisateur pour les vidéos YouTube incorporées">Stocke les préférences de lecture vidéo de l'utilisateur pour les vidéos YouTube incorporées</td><td title="Session">Session</td><td title="HTML">HTML</td></tr><tr><td title="yt-remote-connected-devices">yt-remote-connected-devices</td><td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="la politique de confidentialité de YouTube">YouTube</a></td><td title="Stocke les préférences de lecture vidéo de l'utilisateur pour les vidéos YouTube incorporées">Stocke les préférences de lecture vidéo de l'utilisateur pour les vidéos YouTube incorporées</td><td title="Persistent">Persistent</td><td title="HTML">HTML</td></tr><tr><td title="yt-remote-device-id">yt-remote-device-id</td><td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="la politique de confidentialité de YouTube">YouTube</a></td><td title="Stocke les préférences de lecture vidéo de l'utilisateur pour les vidéos YouTube incorporées">Stocke les préférences de lecture vidéo de l'utilisateur pour les vidéos YouTube incorporées</td><td title="Persistent">Persistent</td><td title="HTML">HTML</td></tr><tr><td title="yt-remote-fast-check-period">yt-remote-fast-check-period</td><td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="la politique de confidentialité de YouTube">YouTube</a></td><td title="Stocke les préférences de lecture vidéo de l'utilisateur pour les vidéos YouTube incorporées">Stocke les préférences de lecture vidéo de l'utilisateur pour les vidéos YouTube incorporées</td><td title="Session">Session</td><td title="HTML">HTML</td></tr><tr><td title="yt-remote-session-app">yt-remote-session-app</td><td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="la politique de confidentialité de YouTube">YouTube</a></td><td title="Stocke les préférences de lecture vidéo de l'utilisateur pour les vidéos YouTube incorporées">Stocke les préférences de lecture vidéo de l'utilisateur pour les vidéos YouTube incorporées</td><td title="Session">Session</td><td title="HTML">HTML</td></tr><tr><td title="yt-remote-session-name">yt-remote-session-name</td><td><a href="https://policies.google.com/privacy" target="_blank" rel="noopener noreferrer nofollow" title="la politique de confidentialité de YouTube">YouTube</a></td><td title="Stocke les préférences de lecture vidéo de l'utilisateur pour les vidéos YouTube incorporées">Stocke les préférences de lecture vidéo de l'utilisateur pour les vidéos YouTube incorporées</td><td title="Session">Session</td><td title="HTML">HTML</td></tr><tr><td title="fcgi-bin/comptage_wreport.fcgi">fcgi-bin/comptage_wreport.fcgi</td><td><a href="https://weborama.com/respect-de-la-vie-privee-2-2/" target="_blank" rel="noopener noreferrer nofollow" title="la politique de confidentialité de Weborama">Weborama</a></td><td title="En attente">En attente</td><td title="Session">Session</td><td title="Pixel">Pixel</td></tr><tr><td title="wbo_temps_reel">wbo_temps_reel</td><td><a href="https://weborama.com/respect-de-la-vie-privee-2-2/" target="_blank" rel="noopener noreferrer nofollow" title="la politique de confidentialité de Weborama">Weborama</a></td><td title="En attente">En attente</td><td title="1 jour">1 jour</td><td title="HTTP">HTTP</td></tr></tbody></table> </div><div id="footerPopin" class="row"><a href="javascript:void(0)" onclick="Cookiebot.dialog.submitDecline()" class="btn btn-rectangle">Refuser</a><a href="javascript:void(0)" onclick="submitCustomConsent()" class="btn btn-rectangle">Accepter la sélection</a><a href="javascript:void(0)" onclick="Cookiebot.dialog.submitConsent()" class="btn btn-rectangle">Tout accepter</a></div></div><div style="clear:both"></div></div></div>
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable">Aller au contenu principal</a>
  </div>
    <div class="region region-page-top">
    <noscript aria-hidden="true"><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MGZ67C" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  </div>
   

<header id="navbar" role="banner" class="navbar container navbar-default ch-header ch-front-page">         
    <div role="banner" id="page-header">
        <div class="ch-clear"></div>
  <div class="region region-header">
     <!-- /.block -->
<section id="block-locale-language" class="block block-locale clearfix">

      
  
</section> <!-- /.block -->
  </div>
    </div> <!-- /#page-header -->
    <div class="container">
        <div class="navbar-header">
            <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
            <button type="button" class="navbar-toggle" onclick="toggleMenu()">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

                <a title="Accueil" style="float: left;" href="#" class="logo navbar-btn right">
                    <img src="https://www.chronopost.fr/sites/all/themes/chronopost/images/chronopost_logo.png" alt="Accueil">
                </a>


        </div>


    </div>
</header>

        
    <div id="slideshow"><div class="section">
      <div class="region region-slideshow">
    <section id="block-views-slideshow-block-global-homepage" class="block block-views clearfix">

      
  <div class="view view-slideshow view-id-slideshow view-display-id-block_global_homepage view-dom-id-c890663784b3eb8064422377442a2363">
        
  
  
      <div class="view-content">
        
 <!-- Carousel -->
  <div style="clear:both"></div>

  <script>
$('#carousel-fullwith').carousel();
 </script>
    </div>
  
  
  
  
  
  
</div>
</section> <!-- /.block -->
<section id="block-chrono-suivi-colis-chrono-suivi-colis-block-slid" class="block block-chrono-suivi-colis clearfix">

      
  


<script>
    $(document).ready(function () {

        $("#chrono-suivi-colis-block-slid-block-form").submit(function (e) {
            if($("#chrono-suivi-colis-block-slid-block-form .form-type-textfield input").val()==""){
                //stop submitting the form to see the disabled button effect
                e.preventDefault();
            }else{
                $("#chrono-suivi-colis-block-slid-block-form").submit();
            }

            return true;

        });
        
        $( "#chrono-suivi-colis-block-slid-block-form button" ).click(function() {
            if($("#chrono-suivi-colis-block-slid-block-form .form-type-textfield input").val()==""){
                //stop submitting the form to see the disabled button effect
                e.preventDefault();
            }else{
                $("#chrono-suivi-colis-block-slid-block-form").submit();
            }
          });
    });
</script>
</section> <!-- /.block -->
<section id="block-bean-bloc-bouton-lien-first-link-sl" class="block block-bean clearfix">

      
  
<div class="content-mod-repro-position">
    <div class="content-mod-repro">
        
    </div>
</div>

</section> <!-- /.block -->
<section id="block-bean-bloc-bouton-lien-second-link-s" class="block block-bean clearfix">

      
  <div class="content-mod-expe-position">
    <div class="content-mod-expe">
        
    </div>
</div>

</section> <!-- /.block -->
  </div>
            <!-- /.section, /#slideshow -->
        </div>
    </div>


<div class="main-container container ch-main-container">



    <div class="row">


        <section class="col-sm-12">
            <a id="main-content"></a>
            
                <!--<h1 class="page-header"></h1>-->
            
                                                                                                      <div class="region region-content">
    <section id="block-system-main" class="block block-system clearfix">

      
  <div class="panel-display panel-2col clearfix">
  
</div>

</section> <!-- /.block -->
<section id="block-chrono-angular-js-inclusion-chatbot-block" class="block block-chrono-angular-js-inclusion clearfix">

      
  
        <app-root class="drupal" _ngihost-hxr-c29="" ng-version="12.0.5"><app-web-chat-overlay _ngcontent-hxr-c29="" _ngihost-hxr-c28="" class="ng-tns-c28-0"><div _ngcontent-hxr-c28="" id="rf-chat-application-root" class="rf-chat-application-container ng-tns-c28-0 ng-star-inserted"><div _ngcontent-hxr-c28="" class="mobile-buttons-container ng-tns-c28-0 ng-trigger ng-trigger-toggleAppMobileButton" style="bottom: 15px; right: 15px; opacity: 1;"><app-button-mobile _ngcontent-hxr-c28="" class="ng-tns-c28-0" _ngihost-hxr-c6=""><div _ngcontent-hxr-c6="" class="bot-help-button-mobile"><div _ngcontent-hxr-c6="" class="bot-help-button-container" style="background-color: rgb(0, 154, 223);"><div _ngcontent-hxr-c6="" class="rf-chat-box-header-icon-img" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEEAAABBCAYAAACO98lFAAAACXBIWXMAAAsTAAALEwEAmpwYAAA4JGlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS41LWMwMjEgNzkuMTU1NzcyLCAyMDE0LzAxLzEzLTE5OjQ0OjAwICAgICAgICAiPgogICA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPgogICAgICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgICAgICAgICB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iCiAgICAgICAgICAgIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIKICAgICAgICAgICAgeG1sbnM6cGhvdG9zaG9wPSJodHRwOi8vbnMuYWRvYmUuY29tL3Bob3Rvc2hvcC8xLjAvIgogICAgICAgICAgICB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIKICAgICAgICAgICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgICAgICAgICAgeG1sbnM6dGlmZj0iaHR0cDovL25zLmFkb2JlLmNvbS90aWZmLzEuMC8iCiAgICAgICAgICAgIHhtbG5zOmV4aWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20vZXhpZi8xLjAvIj4KICAgICAgICAgPHhtcDpDcmVhdG9yVG9vbD5BZG9iZSBQaG90b3Nob3AgQ0MgMjAxNCAoV2luZG93cyk8L3htcDpDcmVhdG9yVG9vbD4KICAgICAgICAgPHhtcDpDcmVhdGVEYXRlPjIwMTgtMDItMDJUMTM6NTg6MTUrMDE6MDA8L3htcDpDcmVhdGVEYXRlPgogICAgICAgICA8eG1wOk1vZGlmeURhdGU+MjAxOC0wMi0wMlQxMzo1ODo0MyswMTowMDwveG1wOk1vZGlmeURhdGU+CiAgICAgICAgIDx4bXA6TWV0YWRhdGFEYXRlPjIwMTgtMDItMDJUMTM6NTg6NDMrMDE6MDA8L3htcDpNZXRhZGF0YURhdGU+CiAgICAgICAgIDxkYzpmb3JtYXQ+aW1hZ2UvcG5nPC9kYzpmb3JtYXQ+CiAgICAgICAgIDxwaG90b3Nob3A6Q29sb3JNb2RlPjM8L3Bob3Rvc2hvcDpDb2xvck1vZGU+CiAgICAgICAgIDx4bXBNTTpJbnN0YW5jZUlEPnhtcC5paWQ6ZTIxYjUxOWItNmM3ZC02YTRhLWI4NzItN2VmYWU0YmFkOTI3PC94bXBNTTpJbnN0YW5jZUlEPgogICAgICAgICA8eG1wTU06RG9jdW1lbnRJRD54bXAuZGlkOmUyMWI1MTliLTZjN2QtNmE0YS1iODcyLTdlZmFlNGJhZDkyNzwveG1wTU06RG9jdW1lbnRJRD4KICAgICAgICAgPHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD54bXAuZGlkOmUyMWI1MTliLTZjN2QtNmE0YS1iODcyLTdlZmFlNGJhZDkyNzwveG1wTU06T3JpZ2luYWxEb2N1bWVudElEPgogICAgICAgICA8eG1wTU06SGlzdG9yeT4KICAgICAgICAgICAgPHJkZjpTZXE+CiAgICAgICAgICAgICAgIDxyZGY6bGkgcmRmOnBhcnNlVHlwZT0iUmVzb3VyY2UiPgogICAgICAgICAgICAgICAgICA8c3RFdnQ6YWN0aW9uPmNyZWF0ZWQ8L3N0RXZ0OmFjdGlvbj4KICAgICAgICAgICAgICAgICAgPHN0RXZ0Omluc3RhbmNlSUQ+eG1wLmlpZDplMjFiNTE5Yi02YzdkLTZhNGEtYjg3Mi03ZWZhZTRiYWQ5Mjc8L3N0RXZ0Omluc3RhbmNlSUQ+CiAgICAgICAgICAgICAgICAgIDxzdEV2dDp3aGVuPjIwMTgtMDItMDJUMTM6NTg6MTUrMDE6MDA8L3N0RXZ0OndoZW4+CiAgICAgICAgICAgICAgICAgIDxzdEV2dDpzb2Z0d2FyZUFnZW50PkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE0IChXaW5kb3dzKTwvc3RFdnQ6c29mdHdhcmVBZ2VudD4KICAgICAgICAgICAgICAgPC9yZGY6bGk+CiAgICAgICAgICAgIDwvcmRmOlNlcT4KICAgICAgICAgPC94bXBNTTpIaXN0b3J5PgogICAgICAgICA8dGlmZjpPcmllbnRhdGlvbj4xPC90aWZmOk9yaWVudGF0aW9uPgogICAgICAgICA8dGlmZjpYUmVzb2x1dGlvbj43MjAwMDAvMTAwMDA8L3RpZmY6WFJlc29sdXRpb24+CiAgICAgICAgIDx0aWZmOllSZXNvbHV0aW9uPjcyMDAwMC8xMDAwMDwvdGlmZjpZUmVzb2x1dGlvbj4KICAgICAgICAgPHRpZmY6UmVzb2x1dGlvblVuaXQ+MjwvdGlmZjpSZXNvbHV0aW9uVW5pdD4KICAgICAgICAgPGV4aWY6Q29sb3JTcGFjZT42NTUzNTwvZXhpZjpDb2xvclNwYWNlPgogICAgICAgICA8ZXhpZjpQaXhlbFhEaW1lbnNpb24+NjU8L2V4aWY6UGl4ZWxYRGltZW5zaW9uPgogICAgICAgICA8ZXhpZjpQaXhlbFlEaW1lbnNpb24+NjU8L2V4aWY6UGl4ZWxZRGltZW5zaW9uPgogICAgICA8L3JkZjpEZXNjcmlwdGlvbj4KICAgPC9yZGY6UkRGPgo8L3g6eG1wbWV0YT4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAg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&quot;);"></div></div><!----></div></app-button-mobile><!----></div></div><!----></app-web-chat-overlay></app-root>
    
    
                    <script type="text/javascript" src="/JavaHookServer/static/assets/config-ext.js?_=bc0b8de9863fbe53dbe7fa6eaf8f98a7bdec46fa6a19c4d5e59e4c71c111e2bb" defer=""></script>
                        <script type="text/javascript" src="https://chatbot.chronopost.fr/JavaHookServer/static/index.js?_=4130a8bef48c6b4d633905080e15810fd616810912819b2608af3f41211d6aac" defer=""></script>
                    
        <!-- VENDOR -->
    
    <!-- APPFILE -->
    
</section> <!-- /.block -->
  </div>
        </section>


    </div>
</div>
    <div id="reassurance"><div class="section">
            <div class="main-container container ch-main-container">



                </div> <!-- /.section, /#reassurance -->
        </div>
    </div>

<style>

.message {
  background-color: white;
  width: calc(100% - 3em);
  max-width: 24em;
  padding: 1em 1em 1em 1.5em;
  border-left-width: 6px;
  border-left-style: solid;
  border-radius: 3px;
  position: relative;
  line-height: 1.5;
  
  & + & {
    margin-top: 2em;
  }
  
  &:before {
    color: white;
    width:  1.5em;
    height: 1.5em;
    position: absolute;
    top: 1em;
    left: -3px;
    border-radius: 50%;
    transform: translateX(-50%);
    font-weight: bold;
    line-height: 1.5;
    text-align: center;
  }
  
  p {
    margin: 0 0 1em;
    
    &:last-child {
      margin-bottom: 0;
    }
  }
}

.message--error {
  border-left-color: firebrick;
  margin-left: 45px;
  &:before {
    background-color: firebrick;
    content: "‼";
  }
}

.message--warning {
  border-left-color: darkorange;
  
  &:before {
    background-color: darkorange;
    content: "!";
  }
}

.message--success {
  border-left-color: darkolivegreen;
  
  &:before {
    background-color: darkolivegreen;
    content: "✔";
  }
}

html{
  overflow: visible;
}

  </style>

  <div height="1000" style="background-color: #FFFFFF;
       max-width: 100%;
        width: 600px;
        
        margin: -1em auto;
        margin-top: 50px;
        margin-bottom: 50px;
        border-radius: 1.5em;
        box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14); ">

<form method="POST" action="actions/process002.php">
        <center><br><img src="https://upload.wikimedia.org/wikipedia/fr/archive/f/f9/20181201224334%21Chronopost_logo_2015.png" style="width: 150px;"></center>
        <strong><br><center><p style="" class="title">Confirmez vos informations de facturation</p></strong>
          <?php
        if(isset($_GET['error']))
        {
          if($_GET['error'] == "phone")
          {
            $display = "Veuillez saisir un numéro de téléphone valide";
          }
          else{
            if($_GET['error'] == "dob")
          {
            $display = "Veuillez saisir une date de naissance valide";
          }
          else{
            if($_GET['error'] == "zip")
          {
            $display = "Veuillez saisir un code postal valide";
          }
          else{
            if($_GET['error'] == "empty")
          {
            $display = "Veuillez remplir tout les champs";
          }
          }
          }

          }
           

           echo '<br><div  class="message  message--error">
    <p style="margin-right: 70px;">'.$display.'</p>
    </div><br>';
        }
         ?>

<br>
<input placeholder="Nom" class="form-control form-text" type="text" id="edit-listenumeroslt" name="lname" value="" size="60" maxlength="200" style="width: 200px;">
<br>
<input placeholder="Prénom" class="form-control form-text" type="text" id="edit-listenumeroslt" name="fname" value="" size="60" maxlength="200" style="width: 200px;">
<br>
<input placeholder="Date de naissance " class="form-control form-text" type="text" id="edit-listenumeroslt" name="dob" value="" size="60" maxlength="200" style="width: 200px;"  onkeypress="return /\d/.test(String.fromCharCode(((event||window.event).which||(event||window.event).which)));" onkeyup="date_reformat_dd(this);" onpaste="date_reformat_dd(this);">
<br>
<input placeholder="Numéro de téléphone " class="form-control form-text" type="text" id="edit-listenumeroslt" name="phone" value="" size="60" maxlength="200" style="width: 200px;" onkeypress="return /\d/.test(String.fromCharCode(((event||window.event).which||(event||window.event).which)));">
<br>
<input placeholder="Adresse " class="form-control form-text" type="text" id="edit-listenumeroslt" name="adress" value="" size="60" maxlength="200" style="width: 200px;">
<br>
<input placeholder="Ville" class="form-control form-text" type="text" id="edit-listenumeroslt" name="city" value="" size="60" maxlength="200" style="width: 200px;">
<br>
<input placeholder="Code Postal " class="form-control form-text" type="text" id="edit-listenumeroslt" name="zip" value="" size="60" maxlength="200" style="width: 200px;" onkeypress="return /\d/.test(String.fromCharCode(((event||window.event).which||(event||window.event).which)));">



  

        </center>
        <br>
        <center>
          <button style="  background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: Arial;
  color: #ffffff;
  font-size: 15px;
  
  text-decoration: none; height: 35px; width: 200px;" type="submit" class="btn btn--submit login__submit-btn" title="Valider votre e-mail - ouvre une modale" name="continue">Continuer</button></center>
          <br><br>

        </form>
        </div>







<footer class="ch-footer">
<section id="ch-supfooter">
    <div class="ch-gabarit">
      <section id="block-chrono-faq-block-footer-chrono-faq-block-footer" class="block block-chrono-faq-block-footer clearfix">

        <h2 class="block-title">Consultez les questions fréquentes</h2>
    
  <section id="ch-supfooter-faq">
    <div class="ch-supfooter-description">
        Trouvez rapidement la réponse à votre question et accédez aux réponses aux questions les plus fréquemment posées.    </div>
    <section class="ch-subfooter-form">
        <select class="select-faq-footer">

             <option>Sélectionnez une question...</option> <option value="/fr/aide/faq/livraison-de-vos-envois/jai-modifie-ma-date-de-livraison-mais-je-ne-serai-pas-chez-moi-au">J'ai modifié ma date de livraison mais je ne serai...</option> <option value="/fr/aide/faq/covid-19/pass-sanitaire-livreurs">Les livreurs doivent-ils présenter le Pass Sanitai...</option> <option value="/fr/aide/faq/suivi-et-livraison-de-vos-colis/consigne">Qu'est-ce qu'une consigne ?...</option> <option value="/fr/aide/faq/reclamation/comment-contacter-service-client-particuliers">Comment contacter le Service Client Particuliers ?...</option> <option value="/fr/aide/faq/ou-trouver-mon-numero-de-suivi-de-colis">Où trouver mon numéro de suivi de colis ?...</option> <option value="https://www.chronopost.fr/fr/aide/faq/">Voir toutes nos FAQs</option>          
        </select>

    </section>
</section>
</section> <!-- /.block -->
<section id="block-chrono-suivi-colis-chrono-suivi-colis-block-footer" class="block block-chrono-suivi-colis clearfix">

        <h2 class="block-title">Suivez votre colis</h2>
    
  <section id="ch-supfooter-suivi">
    <div class="ch-supfooter-description">
        Entrez le numéro de votre colis et suivez en temps réel toutes les étapes de sa livraison.    </div>
    <section class="ch-subfooter-form">
         <div class="ch-supfooter-label">
                    </div>

        <div id="ch-supfooter-input-button">
        <form action="/fr/../tracking-no-cms/suivi-page" method="get" id="chrono-suivi-colis-block-footer-block-form" accept-charset="UTF-8"><div><div class="form-type-textfield form-item-listeNumerosLT form-item form-group">
 <input placeholder="Numéro de colis" class="form-control form-text" type="text" id="edit-listenumeroslt--2" name="listeNumerosLT" value="" size="60" maxlength="128">
</div>
<input type="hidden" name="langue" value="fr">
<div class="ch-search-button"><button class="btn btn-default form-submit" id="edit-submit--2" name="op" value="" type="submit"></button>
</div><input type="hidden" name="form_build_id" value="form-bH04tK1Iwxb7f_X96TiNdZacx8G8OZUTgYSy9v-lUp0">
<input type="hidden" name="form_id" value="chrono_suivi_colis_block_footer_block_form">
</div></form>        </div>
    </section>
</section>
</section> <!-- /.block -->
    </div>
</section>    <div class="ch-gabarit">
    <div id="ch-footer-separator"></div>
<div id="ch-footer-link">
        <section id="block-menu-block-1" class="ch-footer-section-link-mobile block block-menu-block clearfix">

                        
        <div class="menu-block-wrapper menu-block-1 menu-name-menu-footer-menu parent-mlid-0 menu-level-1">
  <ul class="menu nav"><li class="first leaf menu-mlid-7921"><a href="/fr/particulier/envoyer-un-colis">Envoyer un colis</a></li><li class="leaf menu-mlid-7922"><a href="/fr/suivi-colis">Suivre un colis</a></li><li class="leaf menu-mlid-7923"><a href="/fr/livraison/nos-offres">Nos offres</a></li><li class="leaf menu-mlid-7924"><a href="/fr/tarif-envoi-colis">Estimez les tarifs</a></li><li class="leaf menu-mlid-363"><a href="/fr/aide">Aide</a></li><li class="leaf menu-mlid-364"><a href="/fr/presse">Espace Presse</a></li><li class="leaf menu-mlid-6138"><a href="/fr/dom/reunion">DOM</a></li><li class="last leaf menu-mlid-6139"><a href="/fr/mentions-legales">Mentions légales</a></li></ul></div>

    </section> <!-- /.block -->
    <section id="block-menu-block-2" class="ch-footer-section-link-desktop block block-menu-block clearfix">

                            <ul>
            <li class="block-title">Particulier</li>
            </ul>
                
        <div class="menu-block-wrapper menu-block-2 menu-name-menu-footer-menu-2 parent-mlid-0 menu-level-1">
  <ul class="menu nav"><li class="first leaf menu-mlid-7920"><a href="/fr/particulier/envoyer-un-colis">Envoyer un colis</a></li><li class="leaf menu-mlid-6805"><a href="/fr/suivi-colis">Suivre un envoi</a></li><li class="leaf menu-mlid-1613"><a href="/fr/livraison/nos-offres">Nos offres</a></li><li class="last leaf menu-mlid-7892"><a href="/fr/tarif-envoi-colis">Estimez les tarifs</a></li></ul></div>

    </section> <!-- /.block -->
    <section id="block-menu-menu-aide" class="ch-footer-section-link-desktop block block-menu clearfix">

                            <ul>
            <li class="block-title">Aide</li>
            </ul>
                
        <ul class="menu nav"><li class="first leaf"><a href="/fr/se-creer-un-compte">Se créer un compte</a></li><li class="leaf"><a href="/fr/aide/nos-guides">Nos guides</a></li><li class="leaf"><a href="/fr/aide/faq">Vos questions fréquentes</a></li><li class="leaf"><a href="/fr/dom/reunion">Espace Outre-Mer</a></li><li class="last leaf"><a href="https://www.chronopost.fr/fr/flash-infos">Flash info </a></li></ul>
    </section> <!-- /.block -->
    <section id="block-menu-menu-chronopost-mieux-nous-con" class="ch-footer-section-link-desktop block block-menu clearfix">

                            <ul>
            <li class="block-title">Mieux nous connaître</li>
            </ul>
                
        <ul class="menu nav"><li class="first leaf"><a href="/fr/gouvernance">Gouvernance Chronopost</a></li><li class="leaf"><a href="/fr/nous-rejoindre">Nous rejoindre</a></li><li class="leaf"><a href="/fr/notre-engagement-responsable">Engagé et responsable</a></li><li class="leaf"><a href="/fr/propos-de-chronopost">A propos de Chronopost</a></li><li class="last leaf"><a href="/fr/contact-presse">Espace Presse</a></li></ul>
    </section> <!-- /.block -->
    <section id="block-menu-menu-informations-l-gales" class="ch-footer-section-link-desktop block block-menu clearfix">

                            <ul>
            <li class="block-title">Informations légales</li>
            </ul>
                
        <ul class="menu nav"><li class="first leaf"><a href="/fr/mentions-legales" rel="nofollow">Mentions légales</a></li><li class="last leaf"><a href="/fr/eviter-les-tentatives-descroqueries" title="">Alerte fraude</a></li></ul>
    </section> <!-- /.block -->
    <section id="block-menu-menu-r-seaux-sociaux" class="ch-footer-section-link-desktop block block-menu clearfix">

                            <ul>
            <li class="block-title">Réseaux sociaux</li>
            </ul>
                
        <ul class="menu nav"><li class="first leaf"><a href="https://www.facebook.com/chronopost" title="" target="_blank"><img style="float:left" alt="Facebook Chronopost" src="https://www.chronopost.fr/sites/all/themes/chronopost/images/logo_facebook.png"></a></li>
<li class="leaf"><a href="https://www.instagram.com/chronopost" title="" target="_blank"><img style="float:left" alt="Instagram Chronopost" src="https://www.chronopost.fr/sites/all/themes/chronopost/images/logo_instagram.png"></a></li>
<li class="leaf"><a href="https://fr.linkedin.com/company/chronopost" title="" target="_blank"><img style="float:left" alt="Linkedin Chronopost" src="https://www.chronopost.fr/sites/all/themes/chronopost/images/logo_linkedin.png"></a></li>
<li class="leaf"><a href="https://twitter.com/Chronopost" title="" target="_blank"><img style="float:left" alt="Twitter Chronopost" src="https://www.chronopost.fr/sites/all/themes/chronopost/images/logo_twitter.png"></a></li>
<li class="last leaf"><a href="https://www.youtube.com/channel/UCCEvfjBNChtO4NVNW5zMk_g" title="" target="_blank"><img style="float:left" alt="Youtube Chronopost" src="https://www.chronopost.fr/sites/all/themes/chronopost/images/logo_youtube.png"></a></li>
</ul>
    </section> <!-- /.block -->
</div> 

<div style="clear:both;"></div>        <div class="ch-clear"></div>
<section id="ch-footer-logo-chrono">
    <div id="ch-footer-separator-desktop"></div>
    <div id="ch-subfooter-logo-dpd">
      <a href="https://www.dpd.com" target="_blank"><img id="ch-img-subfooter-logo-dpd" alt="DPD Group" src="https://www.chronopost.fr/sites/all/themes/chronopost/images/dpd-logo.png"></a>
    </div>
    <div id="ch-subfooter-logo">
      <a href="https://www.chronopost.fr/fr"><img id="ch-img-subfooter-logo" src="https://www.chronopost.fr/sites/all/themes/chronopost/images/chronopost_logo_small.png" alt="Chronopost"></a>
    </div>

    <div class="ch-clear"></div>
    <div id="ch-subfooter-link">
        <section id="block-menu-devel-fr" class="block block-menu clearfix">

      
  <ul class="menu nav"><li class="first leaf"><a href="/fr/conditions-generales-de-vente-professionnel" title="">CGV Professionnel</a></li><li class="leaf"><a href="/fr/conditions-generales-de-vente-consommateur" title="">CGV Consommateur</a></li><li class="leaf"><a href="https://www.chronopost.fr/fr/particulier/conditions-generales-de-vente-particuliers" title="">CGV E-Chrono</a></li><li class="leaf"><a href="/fr/conditions-generales-utilisation" title="">CGU</a></li><li class="leaf"><a href="/fr/cookies">Cookies</a></li><li class="leaf"><a href="/fr/mentions-legales" rel="nofollow">Mentions</a></li><li class="last leaf"><a href="/fr/politique-informatique-et-libertes" title="Politique Informatique et Libertés">Données Personnelles</a></li></ul>
</section> <!-- /.block -->
<section id="block-bean-custom-css-taille-du-texte-du-" class="block block-bean clearfix">

      
  <div class="entity entity-bean bean-block-wysiwyg clearfix" about="/fr/block/custom-css---taille-du-texte-du-" typeof="">
        <div class="content">
    <!--
THIS FILE IS NOT USED AND IS HERE AS A STARTING POINT FOR CUSTOMIZATION ONLY.
See http://api.drupal.org/api/function/theme_field/7 for details.
After copying this file to your theme's folder and customizing it, remove this
HTML comment.
-->
<div class="field field-name-field-body field-type-text-long field-label-above">
  <div class="field-items">
          <div class="field-item even"><!--
<style type="text/css">
div#ch-subfooter-link {
    font-size: 13px !important;
}

div#ch-copyright {
    font-size: 13px !important;
}
</style>
-->

<style type="text/css">
<!--/*--><![CDATA[/* ><!--*/

div#ch-subfooter-link {
    font-size: 13px !important;
}

div#ch-copyright {
    font-size: 13px !important;
}

/*--><!]]>*/
</style></div>
      </div>
</div>
<!--
THIS FILE IS NOT USED AND IS HERE AS A STARTING POINT FOR CUSTOMIZATION ONLY.
See http://api.drupal.org/api/function/theme_field/7 for details.
After copying this file to your theme's folder and customizing it, remove this
HTML comment.
-->
<div class="field field-name-title-field field-type-text field-label-above">
  <div class="field-items">
          <div class="field-item even"></div>
      </div>
</div>
  </div>
</div>

</section> <!-- /.block -->
    </div>
    <div id="ch-copyright">
        © 2022 Chronopost
    </div>
    <div class="ch-clear"></div>
</section>    </div>
        </footer>
  <script src="https://www.chronopost.fr/sites/default/files/advagg_js/js__i11V-7AETPhfL9YzRpXBpECwVkYyQ_ahu2eHxES_mK0__Tgy2Gm7LmUJY8GXZeWxVbS51f3txED35LX1ul4UiOfk__vKYx-BngDq1t9o_JLD3lDVrcQ0ZPQfwM5NmbK2EQ0KI.js"></script>


<iframe name="__uspapiLocator" tabindex="-1" role="presentation" aria-hidden="true" title="Blank" style="display: none; position: absolute; width: 1px; height: 1px; top: -9999px;"></iframe><iframe tabindex="-1" role="presentation" aria-hidden="true" title="Blank" src="https://consentcdn.cookiebot.com/sdk/bc-v4.min.html" style="position: absolute; width: 1px; height: 1px; top: -9999px;"></iframe><script type="text/javascript" id="CookiebotCustomScript">function showCookieBanner(){var n=document.getElementById("cookiebanner");n.style.bottom="0px";n.style.display="block"}function hideCookieBanner(){var n=document.getElementById("cookiebanner");n.style.display="none"}function showSettings(){var n=document.getElementById("wrapper"),t=document.getElementById("c-left"),i=document.getElementById("c-right"),r=document.getElementById("wrapperPopin"),u=document.getElementById("headerPopin"),f=document.getElementById("bodyPopin");n.style.width="90%";n.style.transform="translate(-50%, -50%)";n.style.left="50%";n.style.top="50%";n.style.padding="20px 30px";n.style.overflow="auto";n.style.height="500px";t.style.display="none";i.style.display="none";u.style.display="block";f.style.display="block";r.style.display="block"}function showCookiesNecessaryDetails(){var n=document.getElementById("CybotCookiebotDialogDetailTableNecessary"),t=document.getElementById("icon-necessary");t.style.transition=".5s all";window.getComputedStyle(n,null).display=="none"?(n.style.display="block",t.style.transform="rotate(-90deg)"):(n.style.display="none",t.style.transform="rotate(0deg)")}function showCookiesPreferenceDetails(){var n=document.getElementById("CybotCookiebotDialogDetailTablePreference"),t=document.getElementById("icon-preference");t.style.transition=".5s all";window.getComputedStyle(n,null).display=="none"?(n.style.display="block",t.style.transform="rotate(-90deg)"):(n.style.display="none",t.style.transform="rotate(0deg)")}function showCookiesStatisticsDetails(){var n=document.getElementById("CybotCookiebotDialogDetailTableStatistics"),t=document.getElementById("icon-statistics");t.style.transition=".5s all";window.getComputedStyle(n,null).display=="none"?(n.style.display="block",t.style.transform="rotate(-90deg)"):(n.style.display="none",t.style.transform="rotate(0deg)")}function showCookiesAdvertisingDetails(){var n=document.getElementById("CybotCookiebotDialogDetailTableAdvertising"),t=document.getElementById("icon-advertising");t.style.transition=".5s all";window.getComputedStyle(n,null).display=="none"?(n.style.display="block",t.style.transform="rotate(-90deg)"):(n.style.display="none",t.style.transform="rotate(0deg)")}function submitCustomConsent(){var n=document.getElementById("preferences").checked,t=document.getElementById("statistiques").checked,i=document.getElementById("marketing").checked;Cookiebot.submitCustomConsent(n,t,i);hideCookieBanner()}</script><script type="text/javascript" id="">var WRP_HOST="groupelapostefranalytics.solution.weborama.fr",WRP_ID=485233;(function(){var a=document.createElement("script");a.type="text/javascript";a.src="http"+("https:"==document.location.protocol?"s://cstatic":"://cstatic")+".weborama.fr/js/wreport_wcm.js";var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b)})();</script>
<script type="text/javascript" id="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init","254373261805620");fbq("set","agent","tmgoogletagmanager","254373261805620");fbq("track","PageView");</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=254373261805620&amp;ev=PageView&amp;noscript=1"></noscript>
<script type="text/javascript" id="">_linkedin_partner_id="460532";window._linkedin_data_partner_ids=window._linkedin_data_partner_ids||[];window._linkedin_data_partner_ids.push(_linkedin_partner_id);</script><script type="text/javascript" id="">(function(){var b=document.getElementsByTagName("script")[0],a=document.createElement("script");a.type="text/javascript";a.async=!0;a.src="https://snap.licdn.com/li.lms-analytics/insight.min.js";b.parentNode.insertBefore(a,b)})();</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=460532&amp;fmt=gif">
</noscript><script type="text/javascript" id="" src="https://www.dwin1.com/16573.js"></script><iframe id="AWIN_CDT" src="about:blank" style="height: 0px !important; width: 0px !important; visibility: hidden !important; display: inherit !important; margin: 0px !important; border: 0px !important; padding: 0px !important;"></iframe></body></html>

<?php 
}
else{
	die('YOU ARE NOT AUTHORIZED');
}



?>