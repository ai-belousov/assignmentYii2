<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>

    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Чистка ковров!</title>

    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,300,500,700&amp;subset=latin,cyrillic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans&amp;subset=latin,cyrillic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">
<style type="text/css" data-ymaps="css-modules">.ymaps-2-1-78-node-size-parent-style{visibility:hidden!important;position:absolute;overflow:hidden;width:0;height:0;display:block;zoom:1!important}.ymaps-2-1-78-node-size-parent-pane-style{visibility:hidden!important;position:relative;overflow:visible;display:block;zoom:1!important}.ymaps-2-1-78-node-size-node-style,.ymaps-2-1-78-node-size-w3c-box-model-test{overflow:hidden!important;overflow-x:hidden!important;overflow-y:hidden!important}.ymaps-2-1-78-node-size-node-style{position:absolute!important;zoom:1!important;display:block!important}.ymaps-2-1-78-node-size-w3c-box-model-test{width:100px!important;border-left-width:10px!important}.ymaps-2-1-78-node-size-no-scrolls-test,.ymaps-2-1-78-node-size-paddings-test{display:block!important;overflow:hidden!important;overflow-x:hidden!important;overflow-y:hidden!important}.ymaps-2-1-78-node-size-paddings-test{border-width:0!important;width:0!important;height:0!important}.ymaps-2-1-78-node-size-no-scrolls-test{position:absolute!important;left:0!important;top:0!important;width:100px!important;height:100px!important;visibility:visible!important}.ymaps-2-1-78-node-size-scrolls-test{overflow:scroll!important;overflow-x:scroll!important;overflow-y:scroll!important}
/**/
.ymaps-2-1-78-islets_icon-with-caption__caption-block{position:absolute;top:-37px}.ymaps-2-1-78-islets_icon-with-caption__caption-block .ymaps-2-1-78-islets_icon-caption{padding-left:20px}
/**/
.ymaps-2-1-78-circle-icon-with-caption__caption-block{position:absolute;top:-13px}.ymaps-2-1-78-circle-icon-with-caption__caption-block .ymaps-2-1-78-islets_icon-caption{padding-left:16px}
/**/
.ymaps-2-1-78-islets_pictogram-icon-with-caption__caption-block{position:absolute;top:-50px}.ymaps-2-1-78-islets_pictogram-icon-with-caption__caption-block .ymaps-2-1-78-islets_icon-caption{padding-left:30px}
/**/
.ymaps-2-1-78-islets_pictogram-circle-icon-with-caption__caption-block{position:absolute;top:-13px}.ymaps-2-1-78-islets_pictogram-circle-icon-with-caption__caption-block .ymaps-2-1-78-islets_icon-caption{padding-left:24px}
/**/
.ymaps-2-1-78-placemark{position:absolute;z-index:1;right:2px;bottom:12px;height:28px;background-repeat:repeat-x;background-position:0 -60px;background-size:auto!important}.ymaps-2-1-78-placemark__content{position:relative;z-index:5;display:block;width:auto;height:27px;margin:0 -3px;text-align:center;white-space:nowrap;color:#000;font:13px Arial,sans-serif}.ymaps-2-1-78-placemark__content-inner{display:block;overflow:hidden;margin-top:6px;margin-left:5px;margin-right:5px;height:15px}.ymaps-2-1-78-placemark__content-inner>*{display:block}.ymaps-2-1-78-placemark_state_active .ymaps-2-1-78-placemark__content{margin-right:-9px}.ymaps-2-1-78-placemark__l{width:13px}.ymaps-2-1-78-placemark__l,.ymaps-2-1-78-placemark__r{position:absolute;z-index:4;display:block;height:27px}.ymaps-2-1-78-placemark__l{left:-13px;background-position:0 0}.ymaps-2-1-78-placemark__r{right:-14px;width:14px;background-position:-14px 0}.ymaps-2-1-78-placemark_state_active .ymaps-2-1-78-placemark__r{right:-26px;width:26px;height:41px;background-position:-80px 0}
/**/
/**/
.ymaps-2-1-78-placemark_type_blank{width:28px;background-position:0 0;background-repeat:no-repeat}.ymaps-2-1-78-placemark_type_blank.ymaps-2-1-78-placemark_state_active{background-image:none;width:0}.ymaps-2-1-78-placemark_type_blank .ymaps-2-1-78-placemark__content{position:absolute;top:0;z-index:6;margin:0!important;width:27px;background:0 0}.ymaps-2-1-78-placemark_type_blank.ymaps-2-1-78-placemark_state_active .ymaps-2-1-78-placemark__content{left:-8px}.ymaps-2-1-78-placemark_type_blank .ymaps-2-1-78-placemark__l,.ymaps-2-1-78-placemark_type_blank .ymaps-2-1-78-placemark__r{display:none}.ymaps-2-1-78-placemark_state_active.ymaps-2-1-78-placemark_type_blank .ymaps-2-1-78-placemark__r{display:block;background-position:-36px 0!important;right:-28px;width:36px}
/**/
</style><style type="text/css" data-ymaps="css-modules">.ymaps-2-1-78-islets_icon-caption{white-space:nowrap;font:13px/27px Arial,sans-serif;border-radius:5px;height:27px;text-overflow:ellipsis;overflow:hidden;background:rgba(255,255,255,.85);padding:0 8px 0 0;position:absolute;margin-top:-1px}
/**/
.ymaps-2-1-78-islets_dot-icon-with-caption__caption-block{position:absolute;top:-37px}.ymaps-2-1-78-islets_dot-icon-with-caption__caption-block .ymaps-2-1-78-islets_icon-caption{padding-left:20px}
/**/
.ymaps-2-1-78-islets_circle-dot-icon-with-caption__caption-block{position:absolute;top:-13px}.ymaps-2-1-78-islets_circle-dot-icon-with-caption__caption-block .ymaps-2-1-78-islets_icon-caption{padding-left:16px}
/**/
</style><style type="text/css" data-ymaps="css-modules">.ymaps-2-1-78-route-panel-button__button{display:block}.ymaps-2-1-78-route-panel-button__panel-icon{background-image:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNiIgaGVpZ2h0PSIyNiI+PGcgZmlsbD0iIzZCNkI2QiI+PHBhdGggZD0iTTEwIDE0aDQuNWEzLjUgMy41IDAgMCAwIDAtN0gxMHYyaDQuNWExLjUgMS41IDAgMSAxIDAgM0gxMHYyem0wIDAiLz48cGF0aCBkPSJNMTUgMTJoLTQuNWEzLjUgMy41IDAgMCAwIDAgN0gxNXYtMmgtNC41YTEuNSAxLjUgMCAxIDEgMC0zSDE1di0yem0wIDBNMTkgMjBhMiAyIDAgMSAwIDAtNCAyIDIgMCAwIDAgMCA0em0wLTFhMSAxIDAgMSAwIDAtMiAxIDEgMCAwIDAgMCAyem0wIDBNOSAxMGEyIDIgMCAxIDAgMC00IDIgMiAwIDAgMCAwIDR6bTAtMWExIDEgMCAxIDAgMC0yIDEgMSAwIDAgMCAwIDJ6bTAgMCIvPjxwYXRoIGQ9Ik0xMy41NyAyMC44bDIuODMtMi44Mi0uNzEtLjctMi44MyAyLjgyLjcuN3ptMS40MS0yLjgybC43LS43LTIuMTEtMi4xMy0uNy43IDIuMTEgMi4xM3ptMCAwIi8+PC9nPjwvc3ZnPg==)}
/**/
.ymaps-2-1-78-map{position:relative;z-index:0;display:block;margin:0!important;padding:0!important;text-align:left!important;text-decoration:none!important;color:#000;font-weight:400!important;font-style:normal!important;line-height:normal;-webkit-tap-highlight-color:rgba(0,0,0,0);-webkit-print-color-adjust:exact;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.ymaps-2-1-78-map-bg{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgAgMAAAAOFJJnAAAACVBMVEX6+vrn5+f09PSMzk0VAAAAGklEQVQY02MIYAADVoYECIOTYSQDWCDAgwUA204BfdYq8A4AAAAASUVORK5CYII=);background-size:16px 16px}.ymaps-2-1-78-map ymaps,.ymaps-2-1-78-map ymaps:after,.ymaps-2-1-78-map ymaps:before{box-sizing:content-box}.ymaps-2-1-78-map iframe{position:static;opacity:1;margin:0;outline:0;box-shadow:none;border:0;border-radius:0;background:0 0;padding:0;max-width:unset;max-height:unset;min-width:unset;min-height:unset;vertical-align:top;user-select:none;-ms-user-select:none;-moz-user-select:none;-webkit-user-select:none}a .ymaps-2-1-78-map{text-decoration:none!important;color:#000;font-style:normal!important}.ymaps-2-1-78-fullscreen{overflow:hidden!important}.ymaps-2-1-78-touch-action-none{touch-action:none}.ymaps-2-1-78-user-selection-none,.ymaps-2-1-78-user-selection-none *{-webkit-tap-highlight-color:rgba(0,0,0,0);-webkit-touch-callout:none;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.ymaps-2-1-78-display-none{display:none!important}.ymaps-2-1-78-visibility-hidden{visibility:hidden!important}ymaps,ymaps canvas,ymaps input,ymaps svg{max-width:none;max-height:none}.ymaps-2-1-78-graphics-SVG svg{all:unset;overflow:hidden}.ymaps-2-1-78-ground-pane{will-change:transform}.ymaps-2-1-78-areas-pane,.ymaps-2-1-78-balloon-pane,.ymaps-2-1-78-controls-pane,.ymaps-2-1-78-controls__bottom,.ymaps-2-1-78-controls__toolbar,.ymaps-2-1-78-events-pane,.ymaps-2-1-78-ground-pane,.ymaps-2-1-78-panel-pane,.ymaps-2-1-78-places-pane,.ymaps-2-1-78-ruler-balloon-pane,.ymaps-2-1-78-ruler-line-pane,.ymaps-2-1-78-searchpanel-pane{left:0}.ymaps-2-1-78-controls-pane *,.ymaps-2-1-78-searchpanel-pane *{text-align:left}@media print{.ymaps-2-1-78-patched-for-print{background:0 0!important;display:list-item!important;list-style-position:inside!important}}.ymaps-2-1-78-patched-for-print-preload .ymaps-2-1-78-patched-for-print{background:0 0!important;display:list-item!important;list-style-position:inside!important}.ymaps-2-1-78-svg-icon-content{letter-spacing:-.5px;margin-left:-.5px}
/**/
.ymaps-2-1-78-inner-panes,.ymaps-2-1-78-outer-panes{display:block;position:absolute;padding:0!important;margin:0!important}.ymaps-2-1-78-inner-panes{overflow:hidden;width:100%;height:100%}.ymaps-2-1-78-outer-panes{width:0;height:0}
/**/
.ymaps-2-1-78-controls__bottom,.ymaps-2-1-78-controls__toolbar{position:absolute;width:100%}.ymaps-2-1-78-controls__toolbar_left{float:left;height:0}.ymaps-2-1-78-controls__toolbar_right{float:right;height:0}.ymaps-2-1-78-controls__control_toolbar{display:inline-block;vertical-align:top}.ymaps-2-1-78-controls__control{display:block;position:absolute;vertical-align:top}.ymaps-2-1-78-controls__control_visibility_hidden{display:none}
/**/
.ymaps-2-1-78-control-popup__spinner{-webkit-animation-name:spinner;animation-name:spinner;-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite;-webkit-animation-timing-function:linear;animation-timing-function:linear;overflow:hidden;position:relative}.ymaps-2-1-78-control-popup__spinner__circle{overflow:hidden;position:absolute;left:50%;top:0;width:100%;height:100%}.ymaps-2-1-78-control-popup__spinner__circle:before{content:'';border-radius:100%;box-shadow:inset 0 0 0 2px #fc0;position:absolute;left:-50%;top:0;width:100%;height:100%}.ymaps-2-1-78-control-popup-parent{position:relative;display:block}.ymaps-2-1-78-control-popup{position:absolute;top:100%;display:none;margin-top:13px;white-space:normal;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.ymaps-2-1-78-control-popup.ymaps-2-1-78-control-popup{padding-bottom:0}.ymaps-2-1-78-control-popup.ymaps-2-1-78-control-popup_open{display:block}.ymaps-2-1-78-control-popup.ymaps-2-1-78-control-popup_fullscreen{width:100%;margin-top:0;padding:0}.ymaps-2-1-78-control-popup.ymaps-2-1-78-control-popup_static{position:static;margin-top:0}.ymaps-2-1-78-control-popup__tail{display:block;position:absolute;z-index:10;border-left:13.4px solid transparent;border-right:13.4px solid transparent;border-bottom:13.4px solid rgba(0,0,0,.15);top:-12.4px}.ymaps-2-1-78-control-popup__tail-front{display:block;position:absolute;border-left:13px solid transparent;border-right:13px solid transparent;border-bottom:13px solid #fff;left:-13px;top:1.4px}.ymaps-2-1-78-control-popup.ymaps-2-1-78-control-popup_fullscreen .ymaps-2-1-78-control-popup__tail,.ymaps-2-1-78-control-popup.ymaps-2-1-78-control-popup_static>.ymaps-2-1-78-control-popup__tail{display:none}.ymaps-2-1-78-control-popup__header{display:none;line-height:20px;padding:9px 10px 4px;border-bottom:1px solid rgba(0,0,0,.2)}.ymaps-2-1-78-control-popup__icon{width:26px;height:26px;display:inline-block;vertical-align:middle;position:relative;top:-2px;padding-right:4px}.ymaps-2-1-78-control-popup__title{font-family:sans-serif;font-size:15px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;cursor:default}.ymaps-2-1-78-control-popup.ymaps-2-1-78-control-popup_fullscreen .ymaps-2-1-78-control-popup__header,.ymaps-2-1-78-control-popup.ymaps-2-1-78-control-popup_show-header .ymaps-2-1-78-control-popup__header{display:block}.ymaps-2-1-78-control-popup__hide{box-sizing:border-box!important;border-width:1px;border-style:solid;border-radius:3px;background-clip:border-box;color:#000;vertical-align:middle;text-decoration:none;font-family:Arial,Helvetica,sans-serif;cursor:pointer;-webkit-transition:background-color .15s ease-out,border-color .15s ease-out,opacity .15s ease-out;transition:background-color .15s ease-out,border-color .15s ease-out,opacity .15s ease-out;display:inline-block;text-align:left;height:28px;background-color:#fff;border-color:rgba(0,0,0,.2);float:right;position:relative;top:-4px}a.ymaps-2-1-78-control-popup__hide,a.ymaps-2-1-78-control-popup__hide:active,a.ymaps-2-1-78-control-popup__hide:hover,a.ymaps-2-1-78-control-popup__hide:link,a.ymaps-2-1-78-control-popup__hide:visited{color:#000!important;text-decoration:none!important}.ymaps-2-1-78-control-popup__hide-text{display:inline-block;position:relative;border:none;text-decoration:none;white-space:nowrap;font-size:13px;line-height:26px;padding:0 12px}.ymaps-2-1-78-control-popup__hide:hover{border-color:rgba(0,0,0,.3)}.ymaps-2-1-78-control-popup__hide.ymaps-2-1-78-_pressed,.ymaps-2-1-78-control-popup__hide:active{background-color:#f3f1ed}.ymaps-2-1-78-control-popup__hide.ymaps-2-1-78-_disabled{cursor:default;background-color:#ebebeb}.ymaps-2-1-78-control-popup__hide.ymaps-2-1-78-_disabled .ymaps-2-1-78-control-popup__hide-text{opacity:.5}.ymaps-2-1-78-control-popup__hide-icon{display:block;width:26px;height:26px;background-repeat:no-repeat;background-image:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNiIgaGVpZ2h0PSIyNiI+PHBhdGggZmlsbD0iIzk5OSIgZmlsbC1ydWxlPSJldmVub2RkIiBkPSJNMTIgMTNsMS0xIDEgMSA1LjUgNSAxLjUtMS41LTctNi41LTEtMS0xIDEtNyA2LjVMNi41IDE4bDUuNS01em0wIDAiLz48L3N2Zz4=)}.ymaps-2-1-78-control-popup.ymaps-2-1-78-control-popup_static .ymaps-2-1-78-control-popup__hide{display:none}.ymaps-2-1-78-control-popup__content{display:block;overflow-x:hidden;min-width:40px;min-height:20px;background:#fff;-webkit-user-select:auto;-moz-user-select:auto;-ms-user-select:auto;user-select:auto}.ymaps-2-1-78-control-popup.ymaps-2-1-78-control-popup_fullscreen>.ymaps-2-1-78-control-popup__content{box-sizing:border-box;border:1px solid rgba(0,0,0,.2);border-bottom:0}.ymaps-2-1-78-control-popup__layout{display:block;overflow-y:auto}.ymaps-2-1-78-control-popup.ymaps-2-1-78-control-popup.ymaps-2-1-78-control-popup_content-loading .ymaps-2-1-78-control-popup__layout{display:block;overflow-y:visible;text-align:center;height:44px}.ymaps-2-1-78-control-popup__spinner{top:14px;left:6px;display:inline-block;width:16px;height:16px}@-webkit-keyframes spinner{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes spinner{0%{-webkit-transform:rotate(0deg);transform:rotate(0deg)}to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}.ymaps-2-1-78-control-popup{-webkit-animation:none .25s ease-out;animation:none .25s ease-out}@-webkit-keyframes control-popup-show-animation{0%{margin-top:0;opacity:0;-webkit-transform:scale(.1,.1);transform:scale(.1,.1)}to{margin-top:13px;opacity:1;-webkit-transform:scale(1,1);transform:scale(1,1)}}@keyframes control-popup-show-animation{0%{margin-top:0;opacity:0;-webkit-transform:scale(.1,.1);transform:scale(.1,.1)}to{margin-top:13px;opacity:1;-webkit-transform:scale(1,1);transform:scale(1,1)}}@-webkit-keyframes control-popup-hide-animation{0%{margin-top:13px;opacity:1}to{margin-top:0;opacity:0;-webkit-transform:scale(.1,.1);transform:scale(.1,.1)}}@keyframes control-popup-hide-animation{0%{margin-top:13px;opacity:1}to{margin-top:0;opacity:0;-webkit-transform:scale(.1,.1);transform:scale(.1,.1)}}@-webkit-keyframes control-popup-show-animation-fullscreen{0%{margin-top:-30px;opacity:0}to{margin-top:0;opacity:1}}@keyframes control-popup-show-animation-fullscreen{0%{margin-top:-30px;opacity:0}to{margin-top:0;opacity:1}}@-webkit-keyframes control-popup-hide-animation-fullscreen{0%{margin-top:0;opacity:1}to{margin-top:-30px;opacity:0}}@keyframes control-popup-hide-animation-fullscreen{0%{margin-top:0;opacity:1}to{margin-top:-30px;opacity:0}}
/**/
.ymaps-2-1-78-popup{display:none;position:absolute;z-index:32700;padding:1px}
/**/
.ymaps-2-1-78-popup_theme_ffffff{-webkit-box-shadow:inset 0 0 0 1px rgba(0,0,0,.15),0 8px 30px -5px rgba(0,0,0,.5);-moz-box-shadow:inset 1px 1px 10px #aaa;box-shadow:inset 0 0 0 1px rgba(0,0,0,.15),0 8px 30px -5px rgba(0,0,0,.5)}.ymaps-2-1-78-popup_theme_ffffff .ymaps-2-1-78-popup__content{background:#fff}.ymaps-2-1-78-popup_theme_ffffff .ymaps-2-1-78-popup__tail{background:rgba(0,0,0,.15);background:-webkit-linear-gradient(45deg,rgba(0,0,0,.15) 50%,rgba(0,0,0,0) 50%);background:-moz-linear-gradient(45deg,rgba(0,0,0,.15) 50%,rgba(0,0,0,0) 50%);background:-o-linear-gradient(45deg,rgba(0,0,0,.15) 50%,rgba(0,0,0,0) 50%)}.ymaps-2-1-78-popup_theme_ffffff .ymaps-2-1-78-popup__tail:after{background-color:#fff}
/**/
.ymaps-2-1-78-copyright{position:relative;z-index:1;display:block;height:20px;top:-25px;float:right;margin-right:3px;margin-left:10px}.ymaps-2-1-78-copyright_float_left{float:left}.ymaps-2-1-78-copyright_fog_yes{float:none}.ymaps-2-1-78-copyright__wrap{display:block;overflow:hidden}.ymaps-2-1-78-copyright__layout{position:relative;z-index:1;top:1px;display:table;float:right}.ymaps-2-1-78-copyright__content-cell,.ymaps-2-1-78-copyright__logo-cell{display:table-cell;vertical-align:top}.ymaps-2-1-78-copyright__logo-cell{padding-left:4px}.ymaps-2-1-78-copyright__content-cell{height:20px}.ymaps-2-1-78-copyright__content{display:inline-block;float:right;padding:0 4px 1px;white-space:nowrap;border-radius:3px;background-color:rgba(255,255,255,.75);font:11px/14px Verdana,Arial,sans-serif}.ymaps-2-1-78-copyright_fog_yes .ymaps-2-1-78-copyright__content{background-color:transparent}.ymaps-2-1-78-copyright_fog_yes .ymaps-2-1-78-copyright__wrap{margin-left:17px}.ymaps-2-1-78-copyright_fog_yes:after{position:absolute;z-index:-1;top:1px;right:50px;left:17px;height:15px;content:'';border-radius:0 3px 3px 0;background-color:rgba(255,255,255,.75)}.ymaps-2-1-78-copyright_logo_no.ymaps-2-1-78-copyright_fog_yes:after{right:0}.ymaps-2-1-78-copyright_logo_no .ymaps-2-1-78-copyright__logo-cell,.ymaps-2-1-78-copyright_providers_no .ymaps-2-1-78-copyright__text,.ymaps-2-1-78-copyright_ua_no .ymaps-2-1-78-copyright__agreement,.ymaps-2-1-78-copyright_ua_no.ymaps-2-1-78-copyright_providers_no .ymaps-2-1-78-copyright__content-cell{display:none}.ymaps-2-1-78-copyright__fog{position:absolute;z-index:2;top:1px;left:0;display:none;width:12px;height:15px;padding-left:5px;border-radius:3px 0 0 3px;background:rgba(255,255,255,.75);font:11px/14px Verdana,Arial,sans-serif}.ymaps-2-1-78-copyright_fog_yes .ymaps-2-1-78-copyright__fog{display:block}.ymaps-2-1-78-copyright__extend{margin-left:.4em}.ymaps-2-1-78-copyright__link{text-decoration:underline!important;color:#000!important}.ymaps-2-1-78-copyright__link:hover{color:#c00!important}
/**/
.ymaps-2-1-78-copyright__logo{display:block;width:46px;height:20px;position:relative;top:-2px;opacity:.7;background-position:0 100%;background-repeat:no-repeat;background-image:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9Ii4wMSAtMS4wMiA0NS45OSAyMC4wMiI+PHBhdGggZmlsbD0icmVkIiBkPSJNOC43NyAxSDYuNTJDNC4zIDEgMi40NCAyLjY3IDIuNDQgNS45NWMwIDEuOTcuOSAzLjQyIDIuNTIgNC4xNGwtMy4wMiA1LjQ4Yy0uMS4xOCAwIC4zMi4xNi4zMmgxLjRjLjEyIDAgLjItLjA0LjI0LS4xNGwyLjc0LTUuMzloLjk5djUuNGMwIC4wNS4wNi4xMy4xMy4xM2gxLjIzYy4xMiAwIC4xNi0uMDYuMTYtLjE2VjEuMmMwLS4xNC0uMDktLjItLjIyLS4yem0tMS4zIDguMWgtLjg0Yy0xLjMgMC0yLjU2LS45NS0yLjU2LTMuMzQgMC0yLjQ4IDEuMTgtMy41IDIuMzktMy41aDFWOS4xeiIvPjxwYXRoIGQ9Ik0xNi4xOCA1LjkzaC0xLjIyYy0uMSAwLS4xNi4wOC0uMTYuMTR2My44aC0yLjI3di0zLjhjMC0uMS0uMDQtLjE0LS4xNC0uMTRoLTEuMjJjLS4xIDAtLjE2LjA2LS4xNi4xNHY5LjY2YzAgLjEuMDQuMTYuMTQuMTZoMS4yNGMuMDggMCAuMTQtLjA2LjE0LS4xNnYtNC42aDIuMjd2NC42YzAgLjEuMDYuMTYuMTYuMTZoMS4yMmMuMSAwIC4xNC0uMDguMTQtLjE2VjYuMDdhLjEzLjEzIDAgMCAwLS4xNC0uMTR6bTI3LjkyIDkuMzNsLS4xNi0uNjgtLjEtLjA4Yy0uMSAwLS42My4yMi0xLjQuMjItMS41IDAtMi4yMi0xLjQ1LTIuMjItMy43NSAwLTIuMDMuNi00LjA0IDEuNjMtNC4wNC4yOCAwIC42Mi4wOCAxLjE1LjU4LjA2LjA2LjEuMDguMTUuMDguMDYgMCAuMTItLjA0LjE4LS4xNGwuNTMtLjg4LjA3LS4xOGMwLS4wOC0uMDgtLjE0LS4yLS4yYTMuNzkgMy43OSAwIDAgMC0xLjg0LS41Yy0xLjg1IDAtMy4zIDIuMjMtMy4zIDUuNzEgMCAzIDEuMzkgNC43MyAzLjM2IDQuNzMuODMgMCAxLjcyLS40IDIuMDctLjY1LjA4LS4wNi4xLS4xNC4wOC0uMjJ6bS04LjU3LTQuODNsMi4zNi00LjM2Yy4wNS0uMDYuMDItLjE0LS4wNS0uMTRoLTEuMTdjLS4zMyAwLS40NS4xMi0uNTcuMzhsLTEuNzcgMy43MmMtLjEuMjItLjIuMzYtLjMuNDJWNi4wN2MwLS4wOC0uMDQtLjE0LS4xMi0uMTRoLTEuMjhjLS4wNiAwLS4xMi4wNi0uMTIuMTR2OS42OGMwIC4wNi4wNC4xNC4xMi4xNGgxLjI4Yy4wOCAwIC4xMi0uMDYuMTItLjE0di00Ljk5Yy4wNi4wNC4xLjEuMTQuMThsMi4yNSA0LjY1Yy4xMS4yNC4zLjMuNTUuM2gxLjI2Yy4wOCAwIC4xLS4wOC4wNi0uMTRsLTIuNzYtNS4zM3ptLTExLjMgNC4yMWgtLjI0Yy0uMyAwLS4zNy0uMTItLjM3LS4zNnYtOC4yYzAtLjEtLjA0LS4xNS0uMTItLjE1aC0zLjk0Yy0uMSAwLS4xNi4wNi0uMTYuMTR2LjcyYzAgMi40LS4xNCA1LjUtMS40IDcuODVoLS40NGMtLjExIDAtLjE1LjA2LS4xNS4xNnYyLjljMCAuMS4wNy4xNC4xMy4xNGguOTVjLjIyIDAgLjMtLjE2LjMtLjNWMTUuOUgyM3YxLjgxYzAgLjA4LjA3LjE0LjE0LjE0aDFjLjEzIDAgLjI1LS4xLjI1LS4zVjE0LjhjMC0uMS0uMDYtLjE2LS4xNi0uMTZ6bS0yLjEzIDBoLTIuODZjMS0xLjczIDEuNC0zLjY4IDEuNTQtNi4wNi4wNC0uNTIuMDYtMS4wNS4wNi0xLjRoMS4yNnY3LjQ2em02LjE1LTguOTVjLTIuMTMgMC0zLjA4IDIuNy0zLjA4IDUuNjUgMCAzIDEuMzUgNC43OSAzLjMyIDQuNzkuOTYgMCAxLjgxLS4zOCAyLjI0LS42Ni4wOC0uMDQuMS0uMS4wOC0uMTdsLS4xNS0uNjhjLS4wMy0uMDgtLjA2LS4xMi0uMTYtLjEyLS4wOCAwLS42NS4yMi0xLjQ2LjIyLTEuNTIgMC0yLjIzLTEuMzMtMi4yMy0zLjA4di0uNDdzLjc3LjA5IDEuMjMuMDloMi44N3YtLjg0YzAtMy4wOC0xLjA4LTQuNzMtMi42Ni00Ljczem0tLjIxIDQuMzJjLS40NiAwLTEuMTcuMDgtMS4xNy4wOHMwLS4zLjA0LS42MmMuMTgtMS42OS42LTIuNTQgMS4yOC0yLjU0LjY0IDAgMS4wMy44NyAxLjEzIDIuNC4wMi4zMi4wMi42OC4wMi42OGgtMS4zeiIvPjwvc3ZnPg==)}.ymaps-2-1-78-copyright_color_white .ymaps-2-1-78-copyright__logo{opacity:.95;background-image:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9Ii4wMSAtMS4wMiA0NS45OSAyMC4wMiI+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTguNzcgMUg2LjUyQzQuMyAxIDIuNDMgMi42NyAyLjQzIDUuOTVjMCAxLjk3LjkxIDMuNDIgMi41MyA0LjE0bC0zLjAyIDUuNDhjLS4xLjE4IDAgLjMyLjE2LjMyaDEuNGMuMTIgMCAuMi0uMDQuMjQtLjE0bDIuNzQtNS4zOWguOTl2NS40YzAgLjA1LjA1LjEzLjEzLjEzaDEuMjNjLjEyIDAgLjE2LS4wNi4xNi0uMTZWMS4yYzAtLjE0LS4wOS0uMi0uMjItLjJ6bS0xLjMgOC4xaC0uODRjLTEuMyAwLTIuNTYtLjk1LTIuNTYtMy4zNCAwLTIuNDggMS4xOC0zLjUgMi4zOS0zLjVoMVY5LjF6bTguNzEtMy4xN2gtMS4yMmMtLjEgMC0uMTYuMDgtLjE2LjE0djMuOGgtMi4yN3YtMy44YzAtLjEtLjA0LS4xNC0uMTQtLjE0aC0xLjIyYy0uMSAwLS4xNi4wNi0uMTYuMTR2OS42NmMwIC4xLjA0LjE2LjE0LjE2aDEuMjRjLjA4IDAgLjE0LS4wNi4xNC0uMTZ2LTQuNmgyLjI3djQuNmMwIC4xLjA1LjE2LjE1LjE2aDEuMjNjLjEgMCAuMTMtLjA4LjEzLS4xNlY2LjA3YS4xMy4xMyAwIDAgMC0uMTMtLjE0em0yNy45MiA5LjMzbC0uMTYtLjY4LS4xLS4wOGMtLjEgMC0uNjMuMjItMS40LjIyLTEuNSAwLTIuMjItMS40NS0yLjIyLTMuNzUgMC0yLjAzLjYtNC4wNCAxLjYzLTQuMDQuMjggMCAuNjIuMDggMS4xNS41OC4wNi4wNi4xLjA4LjE1LjA4cy4xMi0uMDQuMTgtLjE0bC41My0uODguMDctLjE4YzAtLjA4LS4wOC0uMTQtLjItLjJhMy43OSAzLjc5IDAgMCAwLTEuODQtLjVjLTEuODUgMC0zLjMgMi4yMy0zLjMgNS43MSAwIDMgMS4zOSA0LjczIDMuMzYgNC43My44MyAwIDEuNzItLjQgMi4wNy0uNjUuMDgtLjA2LjEtLjE0LjA4LS4yMnptLTguNTctNC44M2wyLjM2LTQuMzZjLjA1LS4wNi4wMi0uMTQtLjA1LS4xNGgtMS4xN2MtLjMzIDAtLjQ1LjEyLS41Ny4zOGwtMS43NyAzLjcyYy0uMS4yMi0uMi4zNi0uMy40MlY2LjA3YzAtLjA4LS4wNC0uMTQtLjEyLS4xNGgtMS4yOGMtLjA2IDAtLjEyLjA2LS4xMi4xNHY5LjY4YzAgLjA2LjA0LjE0LjEyLjE0aDEuMjhjLjA4IDAgLjEyLS4wNi4xMi0uMTR2LTQuOTljLjA2LjA0LjEuMS4xNC4xOGwyLjI1IDQuNjVjLjEyLjI0LjMuMy41NS4zaDEuMjZjLjA4IDAgLjEtLjA4LjA2LS4xNGwtMi43Ni01LjMzem0tMTEuMyA0LjIxaC0uMjRjLS4zIDAtLjM4LS4xMi0uMzgtLjM2di04LjJjMC0uMS0uMDMtLjE1LS4xMS0uMTVoLTMuOTVjLS4xIDAtLjE2LjA2LS4xNi4xNHYuNzJjMCAyLjQtLjEzIDUuNS0xLjQgNy44NWgtLjQzYy0uMTIgMC0uMTYuMDYtLjE2LjE2djIuOWMwIC4xLjA4LjE0LjE0LjE0aC45NWMuMjEgMCAuMy0uMTYuMy0uM1YxNS45SDIzdjEuODFjMCAuMDguMDYuMTQuMTQuMTRoMWMuMTMgMCAuMjUtLjEuMjUtLjNWMTQuOGMwLS4xLS4wNi0uMTYtLjE2LS4xNnptLTIuMTMgMGgtMi44NmMxLTEuNzMgMS40LTMuNjggMS41NC02LjA2LjA0LS41Mi4wNi0xLjA1LjA2LTEuNGgxLjI2djcuNDZ6bTYuMTUtOC45NWMtMi4xMyAwLTMuMDggMi43LTMuMDggNS42NSAwIDMgMS4zNCA0Ljc5IDMuMzIgNC43OS45NiAwIDEuOC0uMzggMi4yNC0uNjYuMDgtLjA0LjEtLjEuMDgtLjE3bC0uMTYtLjY4Yy0uMDItLjA4LS4wNi0uMTItLjE1LS4xMi0uMDggMC0uNjUuMjItMS40Ni4yMi0xLjUyIDAtMi4yMy0xLjMzLTIuMjMtMy4wOHYtLjQ3cy43Ny4wOSAxLjIyLjA5aDIuODh2LS44NGMwLTMuMDgtMS4wOC00LjczLTIuNjYtNC43M3ptLS4yMSA0LjMyYy0uNDYgMC0xLjE3LjA4LTEuMTcuMDhzMC0uMy4wNC0uNjJjLjE4LTEuNjkuNi0yLjU0IDEuMjgtMi41NC42NCAwIDEuMDMuODcgMS4xMyAyLjQuMDIuMzIuMDIuNjguMDIuNjhoLTEuM3oiLz48L3N2Zz4=)}.ymaps-2-1-78-copyright .ymaps-2-1-78-copyright__logo:hover{opacity:1}.ymaps-2-1-78-copyright__logo_lang_en{background-image:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9Ii4wMSAtMS4wMiA0NS45OSAyMC4wMiI+PHBhdGggZD0iTTEyLjYzIDUuNzhjLS42MSAwLTEuNTMuMjMtMi4xMy41LS4xNy4wNy0uMjYuMTUtLjE1LjRsLjQzLjg3Yy4wMy4xLjEuMTMuMTUuMTNsLjE4LS4wNmMuNjEtLjQgMS4wNC0uNiAxLjQtLjYuNDYgMCAuNzYuMy45NC43NS4yLjQ0LjI2IDEuMDUuMjYgMS43M3YuMmEzLjQzIDMuNDMgMCAwIDAtMS4zOC0uMzZjLTEuNzUgMC0yLjcgMS42OC0yLjcgMy40NyAwIDEuOTYgMS4xMiAzLjM2IDIuNDQgMy4zNi43NSAwIDEuNDItLjQzIDEuODctLjk3bC4yNS42Yy4wNC4xMS4xLjEzLjIuMTNoLjcxYy4wNiAwIC4xMy0uMDQuMTMtLjE1VjEwLjJjMC0xLjM4LS4xLTIuNDMtLjQ1LTMuMTNhMi4yOSAyLjI5IDAgMCAwLTIuMTUtMS4yOXptMS4wOCA4LjU5Yy0uMzcuMzYtLjc3LjUzLTEuMTUuNTMtMS4wNiAwLTEuMy0xLjMtMS4zLTIuMTkgMC0xLjA1LjQtMi4xMyAxLjItMi4xMy40IDAgLjg2LjEgMS4yNS40M3YzLjM2em02LjgyLTguNDZjLS45NyAwLTEuOTYuNzItMS45Ni43MnYtLjQ3YzAtLjA4LS4wNy0uMTUtLjEzLS4xNWgtMS4yNWEuMTUuMTUgMCAwIDAtLjE0LjE1djkuNjJjMCAuMS4wMi4xNS4xNC4xNWgxLjI1Yy4wNiAwIC4xMy0uMDYuMTMtLjE1VjcuNTNzLjU3LS4zNSAxLjI5LS4zNWMuNjUgMCAxLjE3LjMzIDEuMTcgMXY3LjZjMCAuMS4wNy4xNS4xNy4xNWgxLjJjLjE0IDAgLjE1LS4wNi4xNS0uMTVWNy43NWMwLTEuMi0uNzMtMS44NC0yLjAyLTEuODR6bTkuNS00LjgzSDI4LjhjLS4xIDAtLjE0LjA3LS4xNC4xNHY0Ljg2Yy0uNS0uMi0uOTMtLjMtMS4yNS0uMy0yLjAyIDAtMy4zNiAxLjktMy4zNiA1LjU4IDAgMy4xNCAxLjMgNC44MyAzLjA2IDQuODNhMi43IDIuNyAwIDAgMCAxLjc1LS44bC4yNy40NGMuMDUuMDkuMDcuMS4xNy4xaC43NWMuMDggMCAuMTItLjA2LjEyLS4xNVYxLjIyYzAtLjEtLjA0LS4xNC0uMTItLjE0em0tMS4zOSAxMy41Yy0uMzIuMTctLjcuMzItMS4xLjMyLTEuMzMgMC0xLjg4LTEuNTctMS44OC0zLjg2IDAtMi4wMi41Ny00LjAxIDEuOC00LjAxLjM4IDAgLjc4LjE1IDEuMTguNDJ2Ny4xM3ptNi4wOC04LjhjLTIuMTIgMC0zLjA4IDIuNzEtMy4wOCA1LjYzIDAgMi45OCAxLjMzIDQuNzYgMy4zMiA0Ljc2Ljk1IDAgMS44LS4zNyAyLjI2LS42OC4wNi0uMDQuMDgtLjA2LjA2LS4xNWwtLjE1LS42OGMtLjAyLS4wOC0uMDUtLjEzLS4xNC0uMTMtLjEgMC0uNjguMjQtMS40OC4yNC0xLjUyIDAtMi4yMi0xLjM0LTIuMjItMy4wOXYtLjQ3cy43Ni4xIDEuMi4xaDIuOXYtLjgyYzAtMy4wOS0xLjEtNC43MS0yLjY3LTQuNzF6bS0uMjMgNC4yOWMtLjQ0IDAtMS4xNi4xLTEuMTYuMXMwLS4zLjA0LS42M2MuMjItMS42OS41OC0yLjUzIDEuMy0yLjUzLjYyIDAgMS4wMi44NyAxLjExIDIuMzkuMDIuMzIuMDIuNjcuMDIuNjdoLTEuM3ptOS4zNi00LjA2aC0xLjA3Yy0uMTMgMC0uMjEuMDctLjI0LjE3LS4wNS4xNS0uNTMgMS40LS43IDEuODlsLS41MiAxLjRoLS4wNGwtLjQyLTEuMTJhNjMuOSA2My45IDAgMCAwLS43OS0yLjEyYy0uMDMtLjEtLjEyLS4yMi0uMjUtLjIyaC0xLjJjLS4xNCAwLS4yLjE1LS4xNS4yNGwxLjkyIDQuNDQtMi4wNyA0Ljk3Yy0uMDcuMTQuMDIuMjcuMTUuMjdoMS4wM2MuMiAwIC4yNS0uMDguMzItLjI1bC43LTEuOS41Mi0xLjY3aC4wNGwuNSAxLjQyLjgzIDIuMmMuMDQuMTIuMTIuMi4yNi4yaDEuMTZjLjEyIDAgLjE5LS4xMy4xMi0uMjUtLjE1LS4yOC0xLjI0LTMuMDQtMi4wNC00LjgyTDQ0IDYuMjVjLjAyLS4xMS4wMi0uMjQtLjE1LS4yNHoiLz48cGF0aCBmaWxsPSJyZWQiIGQ9Ik0xMC45NS0uMjZoLTEuM2MtLjE0IDAtLjIuMDUtLjI0LjE4bC0yLjM5IDYuN2MtLjI4Ljc1LS42IDIuMDQtLjYgMi4wNGgtLjA4cy0uNTItMS41Mi0uNjUtMi4wMUM1LjUgNi4xIDMuODEgMS40NiAzLjc3IDEuM2MtLjAyLS4xMS0uMDktLjI0LS4yNi0uMjRIMi4yYy0uMiAwLS4yMi4xNy0uMTUuMy4yNS42NyAyLjU3IDYuNTggMy41IDguOTV2NS40M2MwIC4xLjA1LjE1LjE2LjE1aDEuMjRjLjA2IDAgLjEzLS4wNi4xMy0uMTV2LTUuMzljLjgyLTIuMyA0LTEwLjMyIDQuMDMtMTAuMzkuMDUtLjEyLjAyLS4yMi0uMTUtLjIyeiIvPjwvc3ZnPg==)}.ymaps-2-1-78-copyright_color_white .ymaps-2-1-78-copyright__logo_lang_en{background-image:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9Ii4wMSAtMS4wMiA0NS45OSAyMC4wMiI+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTEyLjYzIDUuNzhjLS42MSAwLTEuNTMuMjMtMi4xMy41LS4xNy4wNy0uMjYuMTUtLjE1LjRsLjQzLjg3Yy4wMy4xLjEuMTMuMTUuMTNsLjE4LS4wNmMuNjEtLjQgMS4wNC0uNiAxLjQtLjYuNDYgMCAuNzYuMy45NC43NS4yLjQ0LjI2IDEuMDUuMjYgMS43M3YuMmEzLjQzIDMuNDMgMCAwIDAtMS4zOC0uMzZjLTEuNzUgMC0yLjcgMS42OC0yLjcgMy40NyAwIDEuOTYgMS4xMiAzLjM2IDIuNDQgMy4zNi43NSAwIDEuNDItLjQzIDEuODctLjk3bC4yNS42Yy4wNC4xMS4xLjEzLjIuMTNoLjcxYy4wNiAwIC4xMy0uMDQuMTMtLjE1VjEwLjJjMC0xLjM4LS4xLTIuNDMtLjQ1LTMuMTNhMi4yOSAyLjI5IDAgMCAwLTIuMTUtMS4yOXptMS4wOCA4LjU5Yy0uMzcuMzYtLjc3LjUzLTEuMTUuNTMtMS4wNiAwLTEuMy0xLjMtMS4zLTIuMTkgMC0xLjA1LjQtMi4xMyAxLjItMi4xMy40IDAgLjg2LjEgMS4yNS40M3YzLjM2em02LjgyLTguNDZjLS45NyAwLTEuOTYuNzItMS45Ni43MnYtLjQ3YzAtLjA4LS4wNy0uMTUtLjEzLS4xNWgtMS4yNWEuMTUuMTUgMCAwIDAtLjE0LjE1djkuNjJjMCAuMS4wMi4xNS4xNC4xNWgxLjI1Yy4wNiAwIC4xMy0uMDYuMTMtLjE1VjcuNTNzLjU3LS4zNSAxLjI5LS4zNWMuNjUgMCAxLjE3LjMzIDEuMTcgMXY3LjZjMCAuMS4wNy4xNS4xNy4xNWgxLjJjLjE0IDAgLjE1LS4wNi4xNS0uMTVWNy43NWMwLTEuMi0uNzMtMS44NC0yLjAyLTEuODR6bTkuNS00LjgzSDI4LjhjLS4xIDAtLjE0LjA3LS4xNC4xNHY0Ljg2Yy0uNS0uMi0uOTMtLjMtMS4yNS0uMy0yLjAyIDAtMy4zNiAxLjktMy4zNiA1LjU4IDAgMy4xNCAxLjMgNC44MyAzLjA2IDQuODNhMi43IDIuNyAwIDAgMCAxLjc1LS44bC4yNy40NGMuMDUuMDkuMDcuMS4xNy4xaC43NWMuMDggMCAuMTItLjA2LjEyLS4xNVYxLjIyYzAtLjEtLjA0LS4xNC0uMTItLjE0em0tMS4zOSAxMy41Yy0uMzIuMTctLjcuMzItMS4xLjMyLTEuMzMgMC0xLjg4LTEuNTctMS44OC0zLjg2IDAtMi4wMi41Ny00LjAxIDEuOC00LjAxLjM4IDAgLjc4LjE1IDEuMTguNDJ2Ny4xM3ptNi4wOC04LjhjLTIuMTIgMC0zLjA4IDIuNzEtMy4wOCA1LjYzIDAgMi45OCAxLjMzIDQuNzYgMy4zMiA0Ljc2Ljk1IDAgMS44LS4zNyAyLjI2LS42OC4wNi0uMDQuMDgtLjA2LjA2LS4xNWwtLjE1LS42OGMtLjAyLS4wOC0uMDUtLjEzLS4xNC0uMTMtLjEgMC0uNjguMjQtMS40OC4yNC0xLjUyIDAtMi4yMi0xLjM0LTIuMjItMy4wOXYtLjQ3cy43Ni4xIDEuMi4xaDIuOXYtLjgyYzAtMy4wOS0xLjEtNC43MS0yLjY3LTQuNzF6bS0uMjMgNC4yOWMtLjQ0IDAtMS4xNi4xLTEuMTYuMXMwLS4zLjA0LS42M2MuMjItMS42OS41OC0yLjUzIDEuMy0yLjUzLjYyIDAgMS4wMi44NyAxLjExIDIuMzkuMDIuMzIuMDIuNjcuMDIuNjdoLTEuM3ptOS4zNi00LjA2aC0xLjA3Yy0uMTMgMC0uMjEuMDctLjI0LjE3LS4wNS4xNS0uNTMgMS40LS43IDEuODlsLS41MiAxLjRoLS4wNGwtLjQyLTEuMTJhNjMuOSA2My45IDAgMCAwLS43OS0yLjEyYy0uMDMtLjEtLjEyLS4yMi0uMjUtLjIyaC0xLjJjLS4xNCAwLS4yLjE1LS4xNS4yNGwxLjkyIDQuNDQtMi4wNyA0Ljk3Yy0uMDcuMTQuMDIuMjcuMTUuMjdoMS4wM2MuMiAwIC4yNS0uMDguMzItLjI1bC43LTEuOS41Mi0xLjY3aC4wNGwuNSAxLjQyLjgzIDIuMmMuMDQuMTIuMTIuMi4yNi4yaDEuMTZjLjEyIDAgLjE5LS4xMy4xMi0uMjUtLjE1LS4yOC0xLjI0LTMuMDQtMi4wNC00LjgyTDQ0IDYuMjVjLjAyLS4xMS4wMi0uMjQtLjE1LS4yNHpNMTAuOTUtLjI2aC0xLjNjLS4xNCAwLS4yLjA1LS4yNC4xOGwtMi4zOSA2LjdjLS4yOC43NS0uNiAyLjA0LS42IDIuMDRoLS4wOHMtLjUyLTEuNTItLjY1LTIuMDFDNS41IDYuMSAzLjgxIDEuNDYgMy43NyAxLjNjLS4wMi0uMTEtLjA5LS4yNC0uMjYtLjI0SDIuMmMtLjIgMC0uMjIuMTctLjE1LjMuMjUuNjcgMi41NyA2LjU4IDMuNSA4Ljk1djUuNDNjMCAuMS4wNS4xNS4xNi4xNWgxLjI0Yy4wNiAwIC4xMy0uMDYuMTMtLjE1di01LjM5Yy44Mi0yLjMgNC0xMC4zMiA0LjAzLTEwLjM5LjA1LS4xMi4wMi0uMjItLjE1LS4yMnoiLz48L3N2Zz4=)}
/**/
.ymaps-2-1-78-gotoymaps{display:inline-block;margin-left:8px;user-select:none;-ms-user-select:none;-moz-user-select:none;-webkit-user-select:none}.ymaps-2-1-78-gotoymaps__container{display:-webkit-box;-webkit-box-align:center;display:-webkit-flex;display:flex;border-radius:3px;background-color:#fff;cursor:pointer;overflow:hidden;white-space:nowrap;height:24px;box-shadow:0 1px 2px 1px rgba(0,0,0,.15),0 2px 5px -3px rgba(0,0,0,.15)}.ymaps-2-1-78-gotoymaps__pin{background:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNCIgaGVpZ2h0PSIxOCIgZmlsbD0ibm9uZSI+PHBhdGggZmlsbD0iI0Y0MyIgZD0iTTcgMGE3IDcgMCAwIDAtNC45NSAxMS45NWMxLjI3IDEuMjcgNC4yNSAzLjEgNC40MiA1LjAzLjAzLjI4LjI0LjUyLjUzLjUyLjI5IDAgLjUtLjI0LjUzLS41Mi4xNy0xLjkzIDMuMTUtMy43NiA0LjQyLTUuMDNBNyA3IDAgMCAwIDcgMHoiLz48cGF0aCBmaWxsPSIjZmZmIiBkPSJNNyA5LjQ1YTIuNDUgMi40NSAwIDEgMCAwLTQuOSAyLjQ1IDIuNDUgMCAwIDAgMCA0Ljl6Ii8+PC9zdmc+) no-repeat;width:14px;height:18px;margin:auto 6px}.ymaps-2-1-78-gotoymaps__text-container{margin-right:6px;font-family:Arial;font-size:12px;font-weight:400;font-style:normal;font-stretch:normal;line-height:normal;letter-spacing:normal;text-align:left;display:-webkit-box;display:-webkit-flex;display:flex}.ymaps-2-1-78-gotoymaps__text{margin:auto;height:24px;line-height:24px;white-space:nowrap;overflow:hidden}.ymaps-2-1-78-gototech{display:inline-block;margin:5px 8px 0;vertical-align:top;padding:0 4px 1px;white-space:nowrap;border-radius:3px;background-color:rgba(255,255,255,.7);font:12px/14px Verdana,Arial,sans-serif;text-decoration:underline!important;color:#000!important}.ymaps-2-1-78-gototech:hover{color:#c00!important}
/**/
.ymaps-2-1-78-map-copyrights-promo{position:absolute;bottom:0;left:0;height:32px}@media print{.ymaps-2-1-78-map-copyrights-promo{visibility:hidden}}
/**/
@media print{.ymaps-2-1-78-controls-pane{visibility:hidden}}
/**/
.ymaps-2-1-78-float-button{background-color:#fff;border-color:transparent;box-shadow:0 1px 2px 1px rgba(0,0,0,.15),0 2px 5px -3px rgba(0,0,0,.15);box-sizing:border-box!important;border-width:1px;border-style:solid;border-radius:3px;background-clip:border-box;color:#000;vertical-align:middle;text-decoration:none;font-family:Arial,Helvetica,sans-serif;cursor:pointer;-webkit-transition:background-color .15s ease-out,border-color .15s ease-out,opacity .15s ease-out;transition:background-color .15s ease-out,border-color .15s ease-out,opacity .15s ease-out;display:inline-block;text-align:left;height:28px}a.ymaps-2-1-78-float-button,a.ymaps-2-1-78-float-button:active,a.ymaps-2-1-78-float-button:hover,a.ymaps-2-1-78-float-button:link,a.ymaps-2-1-78-float-button:visited{color:#000!important;text-decoration:none!important}.ymaps-2-1-78-float-button-text{position:relative;border:none;text-decoration:none;white-space:nowrap;font-size:13px;line-height:26px;padding:0 12px}.ymaps-2-1-78-float-button.ymaps-2-1-78-_pressed,.ymaps-2-1-78-float-button:active{background-color:#f3f1ed}.ymaps-2-1-78-float-button.ymaps-2-1-78-_disabled{cursor:default;background-color:#ebebeb}.ymaps-2-1-78-float-button.ymaps-2-1-78-_disabled .ymaps-2-1-78-float-button-text{opacity:.5}.ymaps-2-1-78-float-button.ymaps-2-1-78-_checked{background-color:#ffeba0}.ymaps-2-1-78-float-button.ymaps-2-1-78-_checked.ymaps-2-1-78-_pressed,.ymaps-2-1-78-float-button.ymaps-2-1-78-_checked:active{background-color:#fee481}.ymaps-2-1-78-float-button.ymaps-2-1-78-_checked.ymaps-2-1-78-_disabled{background-color:#d9d9d9!important}.ymaps-2-1-78-float-button{position:relative;padding-left:26px;overflow:hidden}.ymaps-2-1-78-float-button.ymaps-2-1-78-_hidden-icon{padding-left:0}.ymaps-2-1-78-float-button-icon{position:absolute;left:0}.ymaps-2-1-78-float-button-text{display:block;overflow:hidden;text-overflow:ellipsis;padding-left:12px;padding-right:12px}.ymaps-2-1-78-float-button-icon+.ymaps-2-1-78-float-button-text{padding-left:4px}.ymaps-2-1-78-float-button.ymaps-2-1-78-_hidden-icon .ymaps-2-1-78-float-button-icon,.ymaps-2-1-78-float-button.ymaps-2-1-78-_hidden-text .ymaps-2-1-78-float-button-text{display:none}.ymaps-2-1-78-float-button.ymaps-2-1-78-_hidden-icon .ymaps-2-1-78-float-button-text{padding-left:12px}.ymaps-2-1-78-float-button.ymaps-2-1-78-_pin_left{border-top-right-radius:0!important;border-bottom-right-radius:0!important;position:relative;z-index:2}.ymaps-2-1-78-float-button.ymaps-2-1-78-_pin_left.ymaps-2-1-78-_checked,.ymaps-2-1-78-float-button.ymaps-2-1-78-_pin_right.ymaps-2-1-78-_checked{z-index:1}.ymaps-2-1-78-float-button.ymaps-2-1-78-_pin_right{border-top-left-radius:0!important;border-bottom-left-radius:0!important;position:relative;z-index:2}.ymaps-2-1-78-float-button-icon{display:inline-block;width:16px;height:16px;border:5px solid transparent;background-repeat:no-repeat;background-position:center;vertical-align:top}.ymaps-2-1-78-_disabled .ymaps-2-1-78-float-button-icon{opacity:.5}.ymaps-2-1-78-float-button-icon_icon_geolocation{background-image:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNiIgaGVpZ2h0PSIyNiI+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48cGF0aCBmaWxsPSIjNjY2IiBkPSJNMTIuMjMgMTMuMjdsLTguNDgtMS40MkwxOS4zIDYuMiIvPjxwYXRoIGZpbGw9IiMzMzMiIGQ9Ik0xMi4yMyAxMy4yN2wxLjQyIDguNDhMMTkuMyA2LjIiLz48L2c+PC9zdmc+)}.ymaps-2-1-78-float-button-icon_icon_ruler{background-image:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNiIgaGVpZ2h0PSIyNiI+PGcgZmlsbD0iIzY2NiIgZmlsbC1ydWxlPSJldmVub2RkIj48cGF0aCBkPSJNNiAxMWgxdjNINnpNOSAxMWgxdjNIOXpNMTIgMTFoMXYzaC0xek0xNSAxMWgxdjNoLTF6TTE4IDEyaDJ2MmgtMnoiLz48cGF0aCBkPSJNMyAxN2gyMHYtN0gzdjd6bTEtNnY1aDE4di01SDR6bTAgMCIvPjwvZz48L3N2Zz4=)}.ymaps-2-1-78-float-button-icon_icon_fold{background-image:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNiIgaGVpZ2h0PSIyNiI+PHBhdGggZmlsbD0iIzk5OSIgZmlsbC1ydWxlPSJldmVub2RkIiBkPSJNMTIgMTNsMS0xIDEgMSA1LjUgNSAxLjUtMS41LTctNi41LTEtMS0xIDEtNyA2LjVMNi41IDE4bDUuNS01em0wIDAiLz48L3N2Zz4=)}.ymaps-2-1-78-float-button-icon_icon_plus{background-image:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNiIgaGVpZ2h0PSIyNiI+PHBhdGggZmlsbD0iIzY2NiIgZmlsbC1ydWxlPSJldmVub2RkIiBkPSJNMTEgMTVINnYtNGg1VjZoNHY1aDV2NGgtNXY1aC00di01em0wIDAiLz48L3N2Zz4=)}.ymaps-2-1-78-float-button-icon_icon_minus{background-image:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNiIgaGVpZ2h0PSIyNiI+PHBhdGggZmlsbD0iIzY2NiIgZmlsbC1ydWxlPSJldmVub2RkIiBkPSJNNiAxMWgxNHY0SDZ6Ii8+PC9zdmc+)}.ymaps-2-1-78-float-button-icon_icon_layers{background-image:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNiIgaGVpZ2h0PSIyNiI+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48cGF0aCBmaWxsPSIjMzMzIiBkPSJNMjAgMTQuNWwzIDEuNS0xMCA1LTEwLTUgMy0xLjUgMS41Ljc1TDYgMTZsNyAzLjUgNy0zLjUtMS41LS43NSAxLjUtLjc1em0wIDAiLz48cGF0aCBmaWxsPSIjNEM0QzRDIiBkPSJNMjAgMTEuNWwzIDEuNS0xMCA1LTEwLTUgMy0xLjUgMS41Ljc1TDYgMTNsNyAzLjUgNy0zLjUtMS41LS43NSAxLjUtLjc1em0wIDAiLz48cGF0aCBmaWxsPSIjNjY2IiBkPSJNMTMgMTVsMTAtNS0xMC01LTEwIDUgMTAgNXptMC0xLjVsNy0zLjUtNy0zLjVMNiAxMGw3IDMuNXptMCAwIi8+PC9nPjwvc3ZnPg==)}.ymaps-2-1-78-float-button-icon_icon_expand{background-image:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNiIgaGVpZ2h0PSIyNiI+PGcgZmlsbD0iIzZCNkI2QiI+PHBhdGggZD0iTTE2LjE0IDcuODZMMTQuMjcgNkgyMHY1LjdsLTEuODMtMS44MkwxNS4wNCAxMyAxMyAxMC45OGwzLjEzLTMuMTN6bTAgME05Ljg2IDE4LjE0TDExLjczIDIwSDZ2LTUuN2wxLjgzIDEuODJMMTAuOTYgMTMgMTMgMTUuMDJsLTMuMTMgMy4xM3ptMCAwIi8+PC9nPjwvc3ZnPg==)}.ymaps-2-1-78-float-button-icon_icon_collapse{background-image:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNiIgaGVpZ2h0PSIyNiI+PGcgZmlsbD0iIzZCNkI2QiI+PHBhdGggZD0iTTguMTQgMTUuODZMNi4yNyAxNEgxMnY1LjdsLTEuODMtMS44My0zLjEzIDMuMTRMNSAxOC45OGwzLjEzLTMuMTN6bTAgME0xNy44NiAxMC4xNEwxOS43MyAxMkgxNFY2LjNsMS44MyAxLjgzIDMuMTMtMy4xNEwyMSA3LjAybC0zLjEzIDMuMTN6bTAgMCIvPjwvZz48L3N2Zz4=)}.ymaps-2-1-78-float-button-icon_icon_magnifier{background-image:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNiIgaGVpZ2h0PSIyNiI+PGcgZmlsbD0iIzY2NiIgZmlsbC1ydWxlPSJldmVub2RkIj48cGF0aCBkPSJNMTQuOTEgMTUuNjJhNiA2IDAgMSAwLTguNDgtOC40OCA2IDYgMCAwIDAgOC40OCA4LjQ4em0tMS43Ni0xLjc3QTMuNSAzLjUgMCAxIDAgOC4yIDguOWEzLjUgMy41IDAgMCAwIDQuOTUgNC45NXptMCAwIi8+PHBhdGggZD0iTTEzLjE1IDE1Ljk3bDIuMTItMi4xMiA0Ljk1IDQuOTUtMi4xMiAyLjEyeiIvPjwvZz48L3N2Zz4=)}.ymaps-2-1-78-float-button-icon_icon_routes{background-image:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNiIgaGVpZ2h0PSIyNiI+PGcgZmlsbD0iIzZCNkI2QiI+PHBhdGggZD0iTTEwIDE0aDQuNWEzLjUgMy41IDAgMCAwIDAtN0gxMHYyaDQuNWExLjUgMS41IDAgMSAxIDAgM0gxMHYyem0wIDAiLz48cGF0aCBkPSJNMTUgMTJoLTQuNWEzLjUgMy41IDAgMCAwIDAgN0gxNXYtMmgtNC41YTEuNSAxLjUgMCAxIDEgMC0zSDE1di0yem0wIDBNMTkgMjBhMiAyIDAgMSAwIDAtNCAyIDIgMCAwIDAgMCA0em0wLTFhMSAxIDAgMSAwIDAtMiAxIDEgMCAwIDAgMCAyem0wIDBNOSAxMGEyIDIgMCAxIDAgMC00IDIgMiAwIDAgMCAwIDR6bTAtMWExIDEgMCAxIDAgMC0yIDEgMSAwIDAgMCAwIDJ6bTAgMCIvPjxwYXRoIGQ9Ik0xMy41NyAyMC44bDIuODMtMi44Mi0uNzEtLjctMi44MyAyLjgyLjcuN3ptMS40MS0yLjgybC43LS43LTIuMTEtMi4xMy0uNy43IDIuMTEgMi4xM3ptMCAwIi8+PC9nPjwvc3ZnPg==)}
/**/
</style><style type="text/css" data-ymaps="css-modules">.ymaps-2-1-78-pie-chart,.ymaps-2-1-78-pie-chart-caption{position:absolute;display:block;font-family:Arial,sans;font-size:13px}.ymaps-2-1-78-pie-chart{text-align:center;background-size:100% 100%;overflow:visible;z-index:1}.ymaps-2-1-78-pie-chart-caption{-webkit-transform:translate(-50%,0);transform:translate(-50%,0);background-color:rgba(255,255,255,.8);border-radius:3px;padding:0 8px;line-height:24px;max-width:200px;box-sizing:border-box;text-overflow:ellipsis;overflow:hidden;white-space:nowrap;z-index:-1}.ymaps-2-1-78-pie-chart-content,.ymaps-2-1-78-pie-chart-icon{position:absolute;top:0;left:0;height:100%;width:100%}.ymaps-2-1-78-pie-chart-icon{z-index:0}.ymaps-2-1-78-pie-chart-content{z-index:1}
/**/
</style><style type="text/css" data-ymaps="css-modules">.ymaps-2-1-78-cluster-night-content{color:#fff}
/**/
</style><style type="text/css" data-ymaps="css-modules">.ymaps-2-1-78-default-cluster{position:absolute;text-align:center;font-family:Arial,Helvetica,sans-serif;font-size:13px}
/**/
</style><style type="text/css" data-ymaps="css-modules">.ymaps-2-1-78-traffic{box-shadow:0 1px 2px 1px rgba(0,0,0,.15),0 2px 5px -3px rgba(0,0,0,.15);border-radius:3px;position:relative;display:inline-block}.ymaps-2-1-78-traffic .ymaps-2-1-78-float-button{box-shadow:none!important;white-space:nowrap;text-align:left;overflow:hidden}.ymaps-2-1-78-traffic .ymaps-2-1-78-float-button.ymaps-2-1-78-_pin_right{overflow:visible}.ymaps-2-1-78-traffic .ymaps-2-1-78-float-button.ymaps-2-1-78-_pin_right:before{content:'';position:absolute;top:-1px;left:-1px;bottom:-1px;width:0;border-left:1px solid rgba(0,0,0,.15)}.ymaps-2-1-78-traffic-week-days{display:block}.ymaps-2-1-78-button_traffic_left_animation{-webkit-transition:width .3s ease-out;transition:width .3s ease-out}.ymaps-2-1-78-traffic__icon{display:inline-block;width:16px;height:16px;border:5px solid transparent;background-repeat:no-repeat;background-position:center;vertical-align:top}.ymaps-2-1-78-_disabled .ymaps-2-1-78-traffic__icon,.ymaps-2-1-78-traffic__slider-button.ymaps-2-1-78-_disabled .ymaps-2-1-78-traffic__slider-button-text{opacity:.5}.ymaps-2-1-78-traffic__icon_icon_settings{background-image:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMiIgaGVpZ2h0PSIxMyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxkZWZzPjxwYXRoIGlkPSJhIiBkPSJNMi45OCAyLjljLjQxLS4zNS44OS0uNjIgMS40MS0uODFMNC43OC41NWEuNzIuNzIgMCAwIDEgLjctLjU1aDEuMDRjLjMzIDAgLjYyLjIzLjcuNTVsLjM5IDEuNTRjLjUyLjE5IDEgLjQ3IDEuNDEuODFsMS41NC0uNDNhLjcuNyAwIDAgMSAuODIuMzNsLjUyLjlhLjcyLjcyIDAgMCAxLS4xMi44OGwtMS4xNCAxLjFhNC43MSA0LjcxIDAgMCAxIDAgMS42NGwxLjE0IDEuMWEuNzIuNzIgMCAwIDEgLjEyLjg4bC0uNTIuOWEuNzIuNzIgMCAwIDEtLjgyLjMzbC0xLjUzLS40M2MtLjQyLjM1LS45LjYyLTEuNDIuODFsLS4zOSAxLjU0YS43Mi43MiAwIDAgMS0uNy41NUg1LjQ4YS43Mi43MiAwIDAgMS0uNy0uNTVsLS4zOS0xLjU0Yy0uNTItLjE5LTEtLjQ2LTEuNDEtLjgxbC0xLjU0LjQzYS43Mi43MiAwIDAgMS0uODItLjMzTC4xIDkuM2EuNzIuNzIgMCAwIDEgLjEyLS44OGwxLjE1LTEuMWE0LjcxIDQuNzEgMCAwIDEgMC0xLjY0TC4yMiA0LjU4QS43Mi43MiAwIDAgMSAuMSAzLjdsLjUyLS45YS43Mi43MiAwIDAgMSAuODItLjMzbDEuNTMuNDN6TTYgOC4zYTEuOCAxLjggMCAxIDAgMC0zLjYgMS44IDEuOCAwIDAgMCAwIDMuNjJ6Ii8+PC9kZWZzPjx1c2UgZmlsbD0iIzY2NiIgZmlsbC1ydWxlPSJldmVub2RkIiB4bGluazpocmVmPSIjYSIvPjwvc3ZnPg==)}.ymaps-2-1-78-traffic__icon_icon_off{background-image:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxOCI+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48cGF0aCBmaWxsPSIjOTk5ODk4IiBkPSJNLjE3IDguMmMuMiAxLjA0IDEuMSAxLjY0IDIuOTQgMS42NCAxLS41OSAxLTYuMDYgMy44LTcuMjIuNC0uMTcuNzgtLjMgMS4xNy0uNDJhNyA3IDAgMCAwIC41LS4xNlM3Ljk3IDIgNy4yOCAyaC0uMThjLS42MiAwLS44LjA4LTEuNDUuMTVBNi40OCA2LjQ4IDAgMCAwIC40MyA2LjI3Yy0uMTIuMzYtLjIuNy0uMjUgMXYuOTJ6Ii8+PHBhdGggZmlsbD0iI2JmYmZiZiIgZD0iTTkuNTMgMTYuMDNhNy4wMSA3LjAxIDAgMSAwLTEuNDQgMGgxLjQ0eiIvPjxwYXRoIGZpbGw9IiMyNDI3MjYiIGQ9Ik03LjkzIDEuOTdsLjkuMDJhNy4wNiA3LjA2IDAgMCAxIDYuOTYgNy41OGMtMS4wMi0uMDgtMi40My0xLjQyLTIuNzYtMi41YTYuOTIgNi45MiAwIDAgMC02LjU1LTUuMDJjLjYtLjA2IDEuMDUtLjA4IDEuNDUtLjA4eiIvPjwvZz48L3N2Zz4=)}.ymaps-2-1-78-traffic__icon_icon_green{background-image:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxOCI+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48cGF0aCBmaWxsPSIjNjA3ZTQ5IiBkPSJNLjE3IDguMmMuMiAxLjA0IDEuMSAxLjY0IDIuOTQgMS42NCAxLS41OSAxLTYuMDYgMy44LTcuMjIuNC0uMTcuNzgtLjMgMS4xNy0uNDJhNyA3IDAgMCAwIC41LS4xNlM3Ljk3IDIgNy4yOCAyaC0uMThjLS42MiAwLS44LjA4LTEuNDUuMTVBNi40OCA2LjQ4IDAgMCAwIC40MyA2LjI3Yy0uMTIuMzYtLjIuNy0uMjUgMXYuOTJ6Ii8+PHBhdGggZmlsbD0iIzY5YzAzMCIgZD0iTTkuNTMgMTYuMDNhNy4wMSA3LjAxIDAgMSAwLTEuNDQgMGgxLjQ0eiIvPjxwYXRoIGZpbGw9IiMyNDI3MjYiIGQ9Ik03LjkzIDEuOTdsLjkuMDJhNy4wNiA3LjA2IDAgMCAxIDYuOTYgNy41OGMtMS4wMi0uMDgtMi40My0xLjQyLTIuNzYtMi41YTYuOTIgNi45MiAwIDAgMC02LjU1LTUuMDJjLjYtLjA2IDEuMDUtLjA4IDEuNDUtLjA4eiIvPjwvZz48L3N2Zz4=)}.ymaps-2-1-78-traffic__icon_icon_yellow{background-image:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxOCI+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48cGF0aCBmaWxsPSIjYmQ5YzRmIiBkPSJNLjE3IDguMmMuMiAxLjA0IDEuMSAxLjY0IDIuOTQgMS42NCAxLS41OSAxLTYuMDYgMy44LTcuMjIuNC0uMTcuNzgtLjMgMS4xNy0uNDJhNyA3IDAgMCAwIC41LS4xNlM3Ljk3IDIgNy4yOCAyaC0uMThjLS42MiAwLS44LjA4LTEuNDUuMTVBNi40OCA2LjQ4IDAgMCAwIC40MyA2LjI3Yy0uMTIuMzYtLjIuNy0uMjUgMXYuOTJ6Ii8+PHBhdGggZmlsbD0iI2ZmYzA0MiIgZD0iTTkuNTMgMTYuMDNhNy4wMSA3LjAxIDAgMSAwLTEuNDQgMGgxLjQ0eiIvPjxwYXRoIGZpbGw9IiMyNDI3MjYiIGQ9Ik03LjkzIDEuOTdsLjkuMDJhNy4wNiA3LjA2IDAgMCAxIDYuOTYgNy41OGMtMS4wMi0uMDgtMi40My0xLjQyLTIuNzYtMi41YTYuOTIgNi45MiAwIDAgMC02LjU1LTUuMDJjLjYtLjA2IDEuMDUtLjA4IDEuNDUtLjA4eiIvPjwvZz48L3N2Zz4=)}.ymaps-2-1-78-traffic__icon_icon_red{background-image:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNiIgaGVpZ2h0PSIxOCI+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48cGF0aCBmaWxsPSIjYTU0MzQwIiBkPSJNLjE3IDguMmMuMiAxLjA0IDEuMSAxLjY0IDIuOTQgMS42NCAxLS41OSAxLTYuMDYgMy44LTcuMjIuNC0uMTcuNzgtLjMgMS4xNy0uNDJhNyA3IDAgMCAwIC41LS4xNlM3Ljk3IDIgNy4yOCAyaC0uMThjLS42MiAwLS44LjA4LTEuNDUuMTVBNi40OCA2LjQ4IDAgMCAwIC40MyA2LjI3Yy0uMTIuMzYtLjIuNy0uMjUgMXYuOTJ6Ii8+PHBhdGggZmlsbD0iI2ZmNTg1OCIgZD0iTTkuNTMgMTYuMDNhNy4wMSA3LjAxIDAgMSAwLTEuNDQgMGgxLjQ0eiIvPjxwYXRoIGZpbGw9IiMyNDI3MjYiIGQ9Ik03LjkzIDEuOTdsLjkuMDJhNy4wNiA3LjA2IDAgMCAxIDYuOTYgNy41OGMtMS4wMi0uMDgtMi40My0xLjQyLTIuNzYtMi41YTYuOTIgNi45MiAwIDAgMC02LjU1LTUuMDJjLjYtLjA2IDEuMDUtLjA4IDEuNDUtLjA4eiIvPjwvZz48L3N2Zz4=)}.ymaps-2-1-78-traffic__panel{position:absolute;top:100%;right:-5px;display:block;margin-top:-9999px;white-space:normal;-webkit-transform:translate3d(0,0,0)}.ymaps-2-1-78-traffic_settings_pressed .ymaps-2-1-78-traffic__panel{display:block;margin-top:13px;-webkit-transform:translate3d(0,0,0)}.ymaps-2-1-78-traffic__tail{right:31px;display:block}.ymaps-2-1-78-traffic__panel-content{display:block;overflow-x:hidden;overflow-y:auto;min-width:40px;min-height:20px;padding:0 10px 10px;border-top:7px solid #fff;border-bottom:2px solid #fff;background:#fff}.ymaps-2-1-78-traffic__panel{-webkit-transition:width .3s ease-out;transition:width .3s ease-out}.ymaps-2-1-78-traffic__panel-show-animation{-webkit-animation:traffic__panel_show_animation_keyframe .25s ease-out;animation:traffic__panel_show_animation_keyframe .25s ease-out}.ymaps-2-1-78-traffic__panel-hide-animation{-webkit-animation:traffic__panel_hide_animation_keyframe .25s ease-out;animation:traffic__panel_hide_animation_keyframe .25s ease-out}@-webkit-keyframes traffic__panel_show_animation_keyframe{0%{margin-top:0;opacity:0;-webkit-transform:translate(42%,-60%) scale(.1,.1)}to{margin-top:13px;opacity:1;-webkit-transform:scale(1,1)}}@-webkit-keyframes traffic__panel_hide_animation_keyframe{0%{margin-top:13px;opacity:1}to{margin-top:0;opacity:0;-webkit-transform:translate(42%,-60%) scale(.1,.1)}}@-webkit-keyframes traffic__panel_show_animation_keyframe{0%{margin-top:0;opacity:0;-webkit-transform:translate(42%,-60%) scale(.1,.1);transform:translate(42%,-60%) scale(.1,.1)}to{margin-top:13px;opacity:1;-webkit-transform:scale(1,1);transform:scale(1,1)}}@keyframes traffic__panel_show_animation_keyframe{0%{margin-top:0;opacity:0;-webkit-transform:translate(42%,-60%) scale(.1,.1);transform:translate(42%,-60%) scale(.1,.1)}to{margin-top:13px;opacity:1;-webkit-transform:scale(1,1);transform:scale(1,1)}}@-webkit-keyframes traffic__panel_hide_animation_keyframe{0%{margin-top:13px;opacity:1}to{margin-top:0;opacity:0;-webkit-transform:translate(42%,-60%) scale(.1,.1);transform:translate(42%,-60%) scale(.1,.1)}}@keyframes traffic__panel_hide_animation_keyframe{0%{margin-top:13px;opacity:1}to{margin-top:0;opacity:0;-webkit-transform:translate(42%,-60%) scale(.1,.1);transform:translate(42%,-60%) scale(.1,.1)}}.ymaps-2-1-78-traffic__switcher{display:block;margin-bottom:8px;border-bottom:1px solid #e5e5e5;font:13px/20px Arial,Helvetica,sans-serif}.ymaps-2-1-78-traffic__switcher-item{position:relative;top:1px;display:inline-block;cursor:pointer;color:#000;border-bottom:3px solid transparent}.ymaps-2-1-78-traffic__switcher-item:hover{color:#c00}.ymaps-2-1-78-traffic__switcher-item.ymaps-2-1-78-traffic__switcher-item_selected_yes{cursor:default;color:#000;border-bottom-color:#000}.ymaps-2-1-78-traffic__switcher-item:not(:last-child){margin-right:18px}.ymaps-2-1-78-traffic__tabs{box-sizing:border-box!important;display:block;height:20px;margin-top:0;margin-right:-4px;margin-left:-4px;text-align:justify;line-height:20px}.ymaps-2-1-78-traffic__tabs-justifier{display:inline-block;width:100%}.ymaps-2-1-78-traffic__tab{font:11px/1 Verdana,sans-serif;color:#999;cursor:pointer}.ymaps-2-1-78-traffic__tab:hover{color:#c00}.ymaps-2-1-78-traffic__tab.ymaps-2-1-78-traffic__tab_selected_yes{cursor:default;color:#000}.ymaps-2-1-78-traffic__tab-text{padding:4px}.ymaps-2-1-78-traffic__checkbox-cell{display:block;margin-top:12px;font-size:13px}.ymaps-2-1-78-traffic__slider-button{box-sizing:border-box!important;border-width:1px;border-style:solid;border-radius:3px;background-clip:border-box;color:#000;vertical-align:middle;text-decoration:none;font-family:Arial,Helvetica,sans-serif;cursor:pointer;-webkit-transition:background-color .15s ease-out,border-color .15s ease-out,opacity .15s ease-out;transition:background-color .15s ease-out,border-color .15s ease-out,opacity .15s ease-out;display:inline-block;text-align:left;height:28px;background-color:#fff;border-color:rgba(0,0,0,.2)}a.ymaps-2-1-78-traffic__slider-button,a.ymaps-2-1-78-traffic__slider-button:active,a.ymaps-2-1-78-traffic__slider-button:hover,a.ymaps-2-1-78-traffic__slider-button:link,a.ymaps-2-1-78-traffic__slider-button:visited{color:#000!important;text-decoration:none!important}.ymaps-2-1-78-traffic__slider-button-text{position:relative;border:none;text-decoration:none;white-space:nowrap;font-size:13px;line-height:26px}.ymaps-2-1-78-traffic__slider-button:hover{border-color:rgba(0,0,0,.3)}.ymaps-2-1-78-traffic__slider-button.ymaps-2-1-78-_pressed,.ymaps-2-1-78-traffic__slider-button:active{background-color:#f3f1ed}.ymaps-2-1-78-traffic__slider-button.ymaps-2-1-78-_disabled{cursor:default;background-color:#ebebeb}.ymaps-2-1-78-traffic__slider{position:relative;display:block;margin-bottom:10px;-webkit-user-select:none}.ymaps-2-1-78-traffic__slider-scale{position:relative;display:block;height:16px;margin:4px 0}.ymaps-2-1-78-traffic__slider-body{position:relative;display:block;line-height:0}.ymaps-2-1-78-traffic__slider-track{position:absolute;top:50%;display:block;cursor:pointer;right:1px;left:1px;height:6px;margin-top:-3px;box-shadow:inset 0 0 0 1px rgba(0,0,0,.2);border-radius:3px;background-color:rgba(0,0,0,.05)}.ymaps-2-1-78-traffic__slider-button{position:relative}.ymaps-2-1-78-traffic__slider-button-text{display:inline-block;padding:0;width:46px;text-align:center}.ymaps-2-1-78-traffic__slider-label{position:absolute;color:#999;font:11px Verdana,sans-serif}.ymaps-2-1-78-traffic__slider-label_type_center{right:25%;left:25%;text-align:center}.ymaps-2-1-78-traffic__slider-label_type_right{right:0}.ymaps-2-1-78-traffic__hint{position:relative;display:block;margin-top:10px;padding:10px;background:#e5e5e5}.ymaps-2-1-78-traffic__hint-text{display:block;padding-right:10px;font:11px/16px Verdana,sans-serif}.ymaps-2-1-78-traffic__hint-close{position:absolute;top:3px;right:3px;display:block;width:13px;height:13px;cursor:pointer;background:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMCIgaGVpZ2h0PSIxMCI+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIiBzdHJva2U9IiMwMDAiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlLWxpbmVjYXA9InNxdWFyZSI+PHBhdGggZD0iTTEuNSAxLjVsNyA3TTguNSAxLjVsLTcgNyIvPjwvZz48L3N2Zz4=) center no-repeat;opacity:.3}.ymaps-2-1-78-traffic__hint-close:hover{opacity:1}.ymaps-2-1-78-traffic .ymaps-2-1-78-error-message{margin-top:16px;background-repeat:no-repeat;background-position:10px 2px}.ymaps-2-1-78-traffic__link{color:#04b;cursor:pointer}.ymaps-2-1-78-traffic__detailed-link a:hover,.ymaps-2-1-78-traffic__link:hover{color:#c00}.ymaps-2-1-78-traffic__detailed-link{margin-top:16px;display:block}.ymaps-2-1-78-traffic__detailed-link a{color:#04b;cursor:pointer;text-decoration:none;font-family:Arial,Helvetica,sans-serif;font-size:13px}
/**/
.ymaps-2-1-78-popup__content{position:relative;z-index:10;margin:0;padding:4px 8px;height:100%}
/**/
.ymaps-2-1-78-popup_visibility_visible{display:block}
/**/
.ymaps-2-1-78-popup_visibility_outside{display:block;top:-99999px;left:-99999px}
/**/
.ymaps-2-1-78-popup__under{position:absolute;top:0;left:0;z-index:-1;width:100%;height:100%;border:0;padding:0;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}
/**/
.ymaps-2-1-78-popup__under_color_white{background:#fff;opacity:.8}
/**/
.ymaps-2-1-78-popup__under_type_paranja{position:fixed;z-index:32000;top:0;left:0;opacity:.3;background:#000;padding:0}
/**/
.ymaps-2-1-78-popup__tail{font:0/0 a;position:absolute;z-index:9;display:block;width:17px;height:17px}.ymaps-2-1-78-popup__tail:after{content:'';position:absolute;width:17px;height:17px}.ymaps-2-1-78-popup_to_left .ymaps-2-1-78-popup__tail,.ymaps-2-1-78-popup_to_top .ymaps-2-1-78-popup__tail{-webkit-transform-origin:top left;-moz-transform-origin:top left;-ms-transform-origin:top left;-o-transform-origin:top left;transform-origin:top left}.ymaps-2-1-78-popup_to_top .ymaps-2-1-78-popup__tail{top:100%;-webkit-transform:rotate(-45deg);-moz-transform:rotate(-45deg);-ms-transform:rotate(-45deg);-o-transform:rotate(-45deg);transform:rotate(-45deg)}.ymaps-2-1-78-popup_to_left .ymaps-2-1-78-popup__tail{-webkit-transform:rotate(-135deg);-moz-transform:rotate(-135deg);-ms-transform:rotate(-135deg);-o-transform:rotate(-135deg);transform:rotate(-135deg);margin-top:24.04px;left:100%}.ymaps-2-1-78-popup_to_bottom .ymaps-2-1-78-popup__tail:after,.ymaps-2-1-78-popup_to_left .ymaps-2-1-78-popup__tail:after,.ymaps-2-1-78-popup_to_right .ymaps-2-1-78-popup__tail:after,.ymaps-2-1-78-popup_to_top .ymaps-2-1-78-popup__tail:after{left:1px;bottom:1px}.ymaps-2-1-78-popup_to_bottom .ymaps-2-1-78-popup__tail,.ymaps-2-1-78-popup_to_right .ymaps-2-1-78-popup__tail{-webkit-transform-origin:100% 100%;-moz-transform-origin:100% 100%;-ms-transform-origin:100% 100%;-o-transform-origin:100% 100%;transform-origin:100% 100%}.ymaps-2-1-78-popup_to_bottom .ymaps-2-1-78-popup__tail{margin-left:-17px;bottom:100%;-webkit-transform:rotate(135deg);-moz-transform:rotate(135deg);-ms-transform:rotate(135deg);-o-transform:rotate(135deg);transform:rotate(135deg)}.ymaps-2-1-78-popup_to_right .ymaps-2-1-78-popup__tail{-webkit-transform:rotate(45deg);-moz-transform:rotate(45deg);-ms-transform:rotate(45deg);-o-transform:rotate(45deg);transform:rotate(45deg);margin-top:7.04px;right:100%}
/**/
.ymaps-2-1-78-zoom{position:relative;display:block;padding:28px 0;width:28px;height:10px}.ymaps-2-1-78-zoom__button{position:absolute!important}.ymaps-2-1-78-zoom__plus{top:0}.ymaps-2-1-78-zoom__minus{bottom:0}.ymaps-2-1-78-zoom__scale{position:absolute;top:28px;bottom:28px;left:11px;width:4px;border-right:1px solid rgba(0,0,0,.2);border-left:1px solid rgba(0,0,0,.2);background:rgba(255,255,255,.4);box-shadow:1px 0 0 0 rgba(0,0,0,.15),-1px 0 0 0 rgba(0,0,0,.15)}.ymaps-2-1-78-zoom__runner{position:absolute;left:-12px;width:28px;height:15px!important;line-height:15px!important}.ymaps-2-1-78-zoom__runner__transition{-webkit-transition:top .3s;transition:top .3s}.ymaps-2-1-78-zoom .ymaps-2-1-78-float-button-icon_icon_runner{display:block;height:13px}.ymaps-2-1-78-zoom__runner .ymaps-2-1-78-zoom__icon{background-image:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMCIgaGVpZ2h0PSI1Ij48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGZpbGw9IiM2NjYiIGQ9Ik0wIDBoMXYxSDB6bTMgMGgxdjFIM3ptMyAwaDF2MUg2em0zIDBoMXYxSDl6TTAgM2gxdjFIMHptMyAwaDF2MUgzem0zIDBoMXYxSDZ6bTMgMGgxdjFIOXptMCAwIi8+PHBhdGggZmlsbD0iI0ZGRiIgZmlsbC1vcGFjaXR5PSIuNzUiIGQ9Ik0wIDFoMXYxSDB6bTMgMGgxdjFIM3ptMyAwaDF2MUg2em0zIDBoMXYxSDl6TTAgNGgxdjFIMHptMyAwaDF2MUgzem0zIDBoMXYxSDZ6bTMgMGgxdjFIOXptMCAwIi8+PC9nPjwvc3ZnPg==);background-repeat:no-repeat;background-position:center 5px;border-top:0;border-bottom:0}.ymaps-2-1-78-zoom__minus .ymaps-2-1-78-zoom__icon{background-image:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNiIgaGVpZ2h0PSIyNiI+PHBhdGggZmlsbD0iIzY2NiIgZmlsbC1ydWxlPSJldmVub2RkIiBkPSJNNiAxMWgxNHY0SDZ6Ii8+PC9zdmc+)}.ymaps-2-1-78-zoom__plus .ymaps-2-1-78-zoom__icon{background-image:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNiIgaGVpZ2h0PSIyNiI+PHBhdGggZmlsbD0iIzY2NiIgZmlsbC1ydWxlPSJldmVub2RkIiBkPSJNMTEgMTVINnYtNGg1VjZoNHY1aDV2NGgtNXY1aC00di01em0wIDAiLz48L3N2Zz4=)}
/**/
.ymaps-2-1-78-listbox__button{background-color:#fff;border-color:transparent;box-shadow:0 1px 2px 1px rgba(0,0,0,.15),0 2px 5px -3px rgba(0,0,0,.15)}.ymaps-2-1-78-listbox{position:relative;display:inline-block;height:28px;vertical-align:top;line-height:0}.ymaps-2-1-78-listbox__button{box-sizing:border-box!important;border-width:1px;border-style:solid;border-radius:3px;background-clip:border-box;color:#000;vertical-align:middle;text-decoration:none;font-family:Arial,Helvetica,sans-serif;cursor:pointer;-webkit-transition:background-color .15s ease-out,border-color .15s ease-out,opacity .15s ease-out;transition:background-color .15s ease-out,border-color .15s ease-out,opacity .15s ease-out;display:inline-block;text-align:left;height:28px;white-space:nowrap}a.ymaps-2-1-78-listbox__button,a.ymaps-2-1-78-listbox__button:active,a.ymaps-2-1-78-listbox__button:hover,a.ymaps-2-1-78-listbox__button:link,a.ymaps-2-1-78-listbox__button:visited{color:#000!important;text-decoration:none!important}.ymaps-2-1-78-listbox__button-text{display:inline-block;position:relative;border:none;text-decoration:none;white-space:nowrap;font-size:13px;line-height:26px}.ymaps-2-1-78-listbox__button.ymaps-2-1-78-_pressed,.ymaps-2-1-78-listbox__button:active{background-color:#f3f1ed}.ymaps-2-1-78-listbox__button.ymaps-2-1-78-_disabled{cursor:default;background-color:#ebebeb}.ymaps-2-1-78-_disabled .ymaps-2-1-78-listbox__button-icon,.ymaps-2-1-78-listbox__button.ymaps-2-1-78-_disabled .ymaps-2-1-78-listbox__button-text{opacity:.5}.ymaps-2-1-78-listbox__button-icon{display:inline-block;width:16px;height:16px;border:5px solid transparent;background-repeat:no-repeat;background-position:center;vertical-align:top}.ymaps-2-1-78-listbox__button-icon.ymaps-2-1-78-_icon_layers{background-image:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNiIgaGVpZ2h0PSIyNiI+PGcgZmlsbD0ibm9uZSIgZmlsbC1ydWxlPSJldmVub2RkIj48cGF0aCBmaWxsPSIjMzMzIiBkPSJNMjAgMTQuNWwzIDEuNS0xMCA1LTEwLTUgMy0xLjUgMS41Ljc1TDYgMTZsNyAzLjUgNy0zLjUtMS41LS43NSAxLjUtLjc1em0wIDAiLz48cGF0aCBmaWxsPSIjNEM0QzRDIiBkPSJNMjAgMTEuNWwzIDEuNS0xMCA1LTEwLTUgMy0xLjUgMS41Ljc1TDYgMTNsNyAzLjUgNy0zLjUtMS41LS43NSAxLjUtLjc1em0wIDAiLz48cGF0aCBmaWxsPSIjNjY2IiBkPSJNMTMgMTVsMTAtNS0xMC01LTEwIDUgMTAgNXptMC0xLjVsNy0zLjUtNy0zLjVMNiAxMGw3IDMuNXptMCAwIi8+PC9nPjwvc3ZnPg==)}.ymaps-2-1-78-listbox__button.ymaps-2-1-78-_hidden-icon .ymaps-2-1-78-listbox__button-icon,.ymaps-2-1-78-listbox__button.ymaps-2-1-78-_hidden-text .ymaps-2-1-78-listbox__button-text{display:none}.ymaps-2-1-78-listbox__button-text{padding:0 12px 0 4px}.ymaps-2-1-78-_hidden-icon .ymaps-2-1-78-listbox__button-text{padding-left:12px}.ymaps-2-1-78-_visible-arrow .ymaps-2-1-78-listbox__button-text{padding-right:23px}.ymaps-2-1-78-listbox__button-arrow{display:none;width:29px;height:28px;position:absolute;right:0;top:0;background:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMSIgaGVpZ2h0PSI2Ij48cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0xMC4zMSAwTDUuNSA0LjY3LjY5IDAgMCAuNjcgNS41IDYgMTEgLjY3eiIgY2xpcC1ydWxlPSJldmVub2RkIi8+PC9zdmc+) center no-repeat;-webkit-transition:-webkit-transform .15s ease-out;transition:transform .15s ease-out;transition:transform .15s ease-out,-webkit-transform .15s ease-out}.ymaps-2-1-78-_visible-arrow .ymaps-2-1-78-listbox__button-arrow{display:inline-block}.ymaps-2-1-78-listbox_opened_yes .ymaps-2-1-78-listbox__button-arrow{-webkit-transform:rotate(-180deg);transform:rotate(-180deg)}.ymaps-2-1-78-listbox__panel{position:relative;z-index:1000;display:block;float:left;margin-top:7px;padding:3px 0;background:#fff;border:1px solid #e5e5e5;box-shadow:0 10px 20px -5px rgba(0,0,0,.2)!important}.ymaps-2-1-78-listbox_align_right .ymaps-2-1-78-listbox__panel{float:right}.ymaps-2-1-78-listbox_opened_no .ymaps-2-1-78-listbox__panel{margin-top:-9999px;box-shadow:none}.ymaps-2-1-78-listbox__panel_animation_hide{-webkit-animation:listbox__panel-hide .25s ease 0 1;animation:listbox__panel-hide .25s ease 0 1}.ymaps-2-1-78-listbox__panel_animation_show{-webkit-animation:listbox__panel-show .25s ease 0 1 forwards;animation:listbox__panel-show .25s ease 0 1 forwards}.ymaps-2-1-78-hide-scroll ::-webkit-scrollbar,.ymaps-2-1-78-hide-scroll::-webkit-scrollbar{width:0}@-webkit-keyframes listbox__panel-show{0%{opacity:0}to{opacity:1}}@keyframes listbox__panel-show{0%{opacity:0}to{opacity:1}}@-webkit-keyframes listbox__panel-hide{0%{opacity:1;margin-top:0}to{opacity:0;margin-top:0}}@keyframes listbox__panel-hide{0%{opacity:1;margin-top:0}to{opacity:0;margin-top:0}}.ymaps-2-1-78-listbox__list{display:block;overflow:auto;overflow-x:hidden;font-family:Arial,sans-serif}.ymaps-2-1-78-listbox__list_scrollable_yes{overflow-y:scroll;-webkit-overflow-scrolling:touch}.ymaps-2-1-78-listbox__list-separator{display:block;font:0/0 a;width:100%;height:1px;background-color:#e5e5e5;border-top:4px solid #fff;border-bottom:4px solid #fff}.ymaps-2-1-78-listbox__list-item{display:block;white-space:nowrap;cursor:pointer;overflow:hidden}.ymaps-2-1-78-listbox__list-item_disabled_yes{color:#999;cursor:default}.ymaps-2-1-78-listbox__list-item-text{box-sizing:border-box!important;overflow:hidden;padding-right:13px;padding-left:30px;max-width:250px;text-overflow:ellipsis;font-size:13px;line-height:28px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;position:relative}.ymaps-2-1-78-listbox__list-item:hover{background-color:#ffeba0}.ymaps-2-1-78-listbox__list-item_disabled_yes:hover{background-color:transparent}.ymaps-2-1-78-listbox__list-item_selected_yes .ymaps-2-1-78-listbox__list-item-text:before{content:'';position:absolute;top:0;left:0;bottom:0;width:38px;background:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNSIgaGVpZ2h0PSIxNiI+PHBhdGggZD0iTTEzLjUxLjQ1TDUuNDcgMTIuNDhsLTMuNzYtNC4yTC42NyA5LjYxbDQuOTMgNS40NUwxNC43MiAxLjZ6Ii8+PC9zdmc+) 50% 50% no-repeat}.ymaps-2-1-78-listbox__list-item_selected_yes.ymaps-2-1-78-listbox__list-item_disabled_yes .ymaps-2-1-78-listbox__list-item-text:before{opacity:.6}
/**/
.ymaps-2-1-78-i-custom-scroll ::-webkit-scrollbar,.ymaps-2-1-78-i-custom-scroll::-webkit-scrollbar{width:17px;height:17px}.ymaps-2-1-78-i-custom-scroll ::-webkit-scrollbar-thumb,.ymaps-2-1-78-i-custom-scroll::-webkit-scrollbar-thumb{min-height:34px;min-width:34px;background-color:rgba(170,170,170,.5);background-clip:content-box;border:5px solid transparent}.ymaps-2-1-78-i-custom-scroll ::-webkit-scrollbar-thumb:hover,.ymaps-2-1-78-i-custom-scroll::-webkit-scrollbar-thumb:hover{background-color:rgba(170,170,170,.8)}.ymaps-2-1-78-i-custom-scroll ::-webkit-scrollbar-thumb:horizontal,.ymaps-2-1-78-i-custom-scroll::-webkit-scrollbar-thumb:horizontal{border-left-width:0;border-right-width:0}.ymaps-2-1-78-i-custom-scroll ::-webkit-scrollbar-thumb:vertical,.ymaps-2-1-78-i-custom-scroll::-webkit-scrollbar-thumb:vertical{border-top-width:0;border-bottom-width:0}
/**/
.ymaps-2-1-78-scaleline{position:relative;display:inline-block;overflow:visible;text-align:center;min-width:59px;top:13px}.ymaps-2-1-78-scaleline__label{position:relative;top:-6px;display:block;padding:0 4px;vertical-align:middle;white-space:nowrap;color:#000;border-radius:3px;font:11px/15px Verdana,Arial,sans-serif;background:rgba(255,255,255,.75)}.ymaps-2-1-78-scaleline__left,.ymaps-2-1-78-scaleline__right{display:table-cell;width:49%;vertical-align:top}.ymaps-2-1-78-scaleline__left-line,.ymaps-2-1-78-scaleline__right-line{display:block;height:1px;border-top:1px solid #fff;border-bottom:1px solid #fff;background:#000}.ymaps-2-1-78-scaleline__center{display:table-cell;height:1px}.ymaps-2-1-78-scaleline__left-border,.ymaps-2-1-78-scaleline__right-border{position:absolute;z-index:-1;top:-4px;width:1px;height:9px;border:1px solid #fff;background:#000}.ymaps-2-1-78-scaleline__left-border{left:-2px}.ymaps-2-1-78-scaleline__right-border{right:-2px}
/**/
</style><style type="text/css" data-ymaps="css-modules">.ymaps-2-1-78-check,.ymaps-2-1-78-check__box{color:#000;font-family:Arial,Helvetica,sans-serif;display:inline-block;cursor:pointer}.ymaps-2-1-78-check__box{box-sizing:border-box!important;border-width:1px;border-style:solid;border-radius:3px;background-clip:border-box;vertical-align:middle;text-decoration:none;-webkit-transition:background-color .15s ease-out,border-color .15s ease-out,opacity .15s ease-out;transition:background-color .15s ease-out,border-color .15s ease-out,opacity .15s ease-out;text-align:left;background-color:#fff;border-color:rgba(0,0,0,.2)}a.ymaps-2-1-78-check__box,a.ymaps-2-1-78-check__box:active,a.ymaps-2-1-78-check__box:hover,a.ymaps-2-1-78-check__box:link,a.ymaps-2-1-78-check__box:visited{color:#000!important;text-decoration:none!important}.ymaps-2-1-78-check__box:hover{border-color:rgba(0,0,0,.3)}.ymaps-2-1-78-check__box.ymaps-2-1-78-_pressed,.ymaps-2-1-78-check__box:active{background-color:#f3f1ed}.ymaps-2-1-78-check__box.ymaps-2-1-78-_disabled{cursor:default;background-color:#ebebeb}.ymaps-2-1-78-check{position:relative;padding-left:19px}.ymaps-2-1-78-check.ymaps-2-1-78-_disabled{cursor:default}.ymaps-2-1-78-check__control{position:absolute;left:-2px;top:-2px;opacity:0;z-index:-1}.ymaps-2-1-78-check__box{width:14px;height:14px;padding:0;position:absolute;left:0;font-size:0;line-height:0}.ymaps-2-1-78-check__box:after{content:'';position:absolute;left:0;bottom:2px;width:16px;height:16px}.ymaps-2-1-78-check__control:checked+.ymaps-2-1-78-check__box{background-color:#ffeba0}.ymaps-2-1-78-check__control:checked+.ymaps-2-1-78-check__box:after{background:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNSIgaGVpZ2h0PSIxNiI+PHBhdGggZD0iTTEzLjUxLjQ1TDUuNDcgMTIuNDhsLTMuNzYtNC4yTC42NyA5LjYxbDQuOTMgNS40NUwxNC43MiAxLjZ6Ii8+PC9zdmc+) no-repeat center}.ymaps-2-1-78-check__control:checked+.ymaps-2-1-78-check__box.ymaps-2-1-78-_pressed{background-color:#fee481}.ymaps-2-1-78-check__control:disabled+.ymaps-2-1-78-check__box,.ymaps-2-1-78-check__control:disabled~.ymaps-2-1-78-check__label-text{opacity:.5}.ymaps-2-1-78-check__control:checked:disabled+.ymaps-2-1-78-check__box{background-color:#d9d9d9!important}
/**/
</style><style type="text/css" data-ymaps="css-modules">.ymaps-2-1-78-error-message{display:table;margin:10px 0;padding:0 10px 0 45px;height:25px;background-position:10px 50%;background-repeat:no-repeat;color:#000;font:13px/1.2 Arial,sans-serif}.ymaps-2-1-78-error-message__msg{display:table-cell;vertical-align:middle}.ymaps-2-1-78-error-message{background-image:url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNSIgaGVpZ2h0PSIyNSI+PHBhdGggZmlsbD0iI0JFQkVCRSIgZD0iTTEyLjUgMjVhMTIuNSAxMi41IDAgMSAwIDAtMjUgMTIuNSAxMi41IDAgMCAwIDAgMjVzLTYuOSAwIDAgMHoiLz48cGF0aCBmaWxsPSIjRkZGIiBkPSJNMTIuNSAyMi4xMWE5LjUgOS41IDAgMSAwIDAtMTkgOS41IDkuNSAwIDAgMCAwIDE5YzAtLjAxLTUuMi0uMDEgMCAweiIvPjxlbGxpcHNlIGN4PSI4LjUiIGN5PSI5LjkiIGZpbGw9IiNCRUJFQkUiIHJ4PSIxLjUiIHJ5PSIxLjYiLz48ZWxsaXBzZSBjeD0iMTYuNSIgY3k9IjkuOSIgZmlsbD0iI0JFQkVCRSIgcng9IjEuNSIgcnk9IjEuNiIvPjxwYXRoIGZpbGw9IiNCRUJFQkUiIGQ9Ik0xMi41IDE0LjQ4YzMuMDQgMCA1LjUuNiA1LjUgMS40NCAwIC44LTIuNDYgMS40NC01LjUgMS40NFM3IDE2LjcyIDcgMTUuOTJjMC0uODIgMi41LTEuNDIgNS41LTEuNDR6Ii8+PC9zdmc+)}
/**/
</style><style type="text/css" data-ymaps="css-modules">.ymaps-2-1-78-pictogramCircleIconContent{display: block; background-size: contain; width: 22px; height: 22px; background-repeat: no-repeat; position: absolute; top: -11px; left: -11px;}
.ymaps_https___api_maps_yandex_ru_2_1_78_1545551896659islands_icon___1E98FF_34x41_1615731492510{display:block;background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACIAAAApCAYAAABQgPsBAAAF20lEQVRYR71Ya2wUVRg9l7Yr9LEpktSIId0WaKykaUMlPlKLhdhYQxslPFIrCfCDEhITRUx8JCLRqIkIP/yhNAgkQknBImIND1HASsVHEVpToAjdDalATWHttkvZneWaMzu3O2y7O9O19Uumndm597tnzve8V8BCpJQZAOYCKAYwFUAeAP7mA9AJ4C8ArQBOCCH4W0IiYs0yAFQDWDUKzXUAdicCaEQgUspKAGuNL8d3HmQcciOz8wYmXbyJ1IEgktJSEJo5Gf68e3GrwgXvvGydIQr/bxJCfD2KD8AwIFJKAnieSgjg9Wa4rg/AYaX0vjQE3n8C7vkRQPVCiE1W89T7u4BIKV8BQHNg9RG4DnZhil1Fatwzuej95Cm4jWea6SM7OoaAGOZYz0llDXjosheTlIJ0B1CTD8zPBvKnAE4H0BcAzvXqrGHXOaA/EFmuKAu+r57THZmywY6ZdCCGYx6gT0QzUZ0PvPFoePFYQlDvnQJ2n4uMMDFDn6mycmAFhJGxij6x8pAenrqsmwO8ONsOseExH58GNv4aGb/taXQaPlMnhGBExRRhsHGMI+Z8joIef9gxycQHpfZBqJGv/RBhhg78ywtoN96VxWOFQBiq681s0Cd+qolvjnhmemxXxGdMrKwTQhyPNY9A3gaw4NUTmLbnPLI4sLYw7BeJCv1ly9nw7CUPoufDubgCoEkIwbVGFAKh7WZXfYm8sz166saeKuCR+xOFAfx8FVhC1wdQmAXfgXAEnRZCxMzSBEL/yMjfhiJ/EEmc3L4iMbMo6Iyigu3hJ2bgjpU4w4wrhCiLx8hvfJm9RS9qunhqE2dDzczeEtHhqdWLIoQQD1sCGS9GjA+zBeT/8pFOIYRew0aScY+aihz0flqu1x72K6xlMYGMax7Z8DjcywvQa7QG9fGAMGTZO6Sbi91YZFYuemY5zky+B6Hm5uZVpaWlfwIIAtCMSypg41prlFmklNcmTJiwwgQgZLq/o0cU/xj1RmdlrKov9ar07na7N+bk5BzPyMjQfD4f2dCBFBcXa62trby/Y+5HngSwkQpqmjD9x25kKtpG249wnimj9i9atGh1Y2Mj24EhENH3Y96hKfCKje7u7voZM2bsHxwcHAIRzQxBjdSz6kWQClmR3z2FaeZuzU7OVWxIKQfKy8tfOnr0aL8yRww/Ccbq4mkmAkpXgNjFXzC6eFWTYoE6thTtuZkIdHV1NeTm5h5UZpg4caJmZsbpdGp9fX1k6pbVvoYJSGcnWswlwfxOlf1QKHQ9OTn5TcZCFBvmiCEIhrM3JhCl3IgoJj0WRV7p0S2lGpuVisCRJehg3mhqatpcWVl5kSBSUlK0YDCockfIxAxBMNkN95F4PiCl1Hvbd1owdWs7hnUsm+fh0sKZ8Pr9/j/S0tI+s/ILAFcNRoZvsCyAMEXnRW83OKfkAXh3LcAlOujixYs3NzY2epOTk0Oapg0x4XA4tEAgwOcBANcA3L4rs9qJBNVk37yNpKIdKDLPSU1BqKUG7TTJyZMnG0pKStri+AU37dej17T0EZOv6Alv30Vkvvw9ppsVqZzh8/k6nE7nF0lJSaFQKKSY0AxmyAJrzYgnBqMBMqzJJhgVJTRJRUXF1sOHD3PBIRAGMx5AbwX4+4gyGiBsh6ea9z65mbh1bCk6qLmurm77mjVrbkQx0a9pGvv5G1bmtwVESskDmgOXvXCUNaCASukX3yxEBxOXx+NpcblcbAfNOeICgPMqKsYKCFu8tTvaMWV9C1xUagpVz6xZs751u92qz/gHQAuAHqvFze/tMsKjhbmqKpuyp7+6unr/3r17Bw370wy/AzCdDdiDYxfI0N6Hp0TGhol+0VRbW0sGbgI4Ypyn2Vs5apQlECklTwfqW68hdd0JuPY9iwvMF21tbccLCwv/BtBsmCIhALYTmgLCRMZJBOHz+a44nc79AHiRkf8sloxwBbVRN1brXLZs2Vs7d+5kchozsQXEAKOfrwoh9F3bWMu/iR0fZw4gG1AAAAAASUVORK5CYII=);background-size:34px 41px;}</style></head>
<body style="">

<!--begin nav-->
<nav class="nav fix">
    <div class="wrap">
        <div class="logo l">
            <a href="index.html" class="logo__img">
                <img src="images/logo.png" alt="logo">
            </a>
        </div>
        <div class="slogan l">
            Химчистка <br>
            премиум <br>
            класса
        </div>
        <ul class="nav__menu l">
            <li class=""><a href="#header">Главная</a></li>
            <li class=""><a href="#vantage">Почему мы</a></li>
            <li class="active"><a href="#price">Цены</a></li>
            <li class=""><a href="#work">Как работаем</a></li>
            <li class=""><a href="#contacts">Контакты</a></li>
        </ul>
        <div class="tel l">
            <a href="+80000000000">8 (000) 000-00-00</a>
        </div>
        <a data-modal="#callback" data-h3="Заказ обратного звонка" class="call-btn btn__green open_modal r">заказать звонок</a>
        <div class="clf"></div>
    </div>
</nav>
<!--end nav-->
<!--begin header-->
<header data-section="header" class="header section">
    <div class="wrap">
        <div class="header__logo">
            <a href="index.html" class="header__logo-img">
                <img src="images/logo-h.png" alt="logo">
            </a>
        </div>
        <div class="header__title">
            <p>Ультрасовременная</p>
            <p class="header__title-lg"><span>ЧИСТКА КОВРОВ</span> В "ГОРОДЕ"</p>
        </div>
        <div class="header__des">
            <p>Стирка на специальном оборудовании</p>
        </div>
        <div class="header__link ">
            <div data-anim="fadeInDown" class="animated wr-link" style="visibility: hidden;">
                <a href="#stock"></a>
            </div>
        </div>
    </div>
</header>
<!--end header-->
<!--begin stock-->
<div data-section="stock" class="stock section">
    <div class="wrap">
        <div class="stock__info">
            <div class="description l">
                <div class="description__title">
                    <p class="description__title-main">Акция в честь открытия</p>
                    <p class="description__title-sale">Мы дарим скидку 30% на экохимчистку</p>
                </div>
                <div class="description__prev">
                    <p>Оставьте заявку <br>
                        на бесплатную консультацию <br>
                        и получите скидку 30%</p>
                </div>
            </div>
            <div class="when r">
                <div class="when__title">
                    <p>До конца акции осталось:</p>
                </div>
                <div class="when__timer">
                    <ul class="when__timer-value">
                      <li class="day">00</li>
                      <li class="hour">10</li>
                      <li class="min">32</li>
                      <li class="sec">46</li>
                    </ul>
                    <ul class="when__timer-des">
                      <li class="d">день</li>
                      <li class="h">часов</li>
                      <li class="m">минут</li>
                      <li class="s">секунд</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="stock__form">
            <form action="submit.php" method="post">
                <input type="hidden" class="hidden_title" name="dop" value="Получить скидку 30%">
                <input type="hidden" name="lend" value="Ковры">
                <input type="text" name="name" class="req" placeholder="Ваше имя">
                <input type="tel" name="telno" class="req" placeholder="Ваш телефон или e-mail">
                <button class="btn__green" type="submit">Получить скидку</button>
                <div class="success">Спасибо за вашу заявку</div>
            </form>
        </div>
    </div>
</div>
<!--end stock-->
<!--begin vantage-->
<div data-section="vantage" class="vantage section">
    <div class="wrap">
        <div class="prv">
            <p class="prv__title">Чистка ковров от "НАЗВАНИЕ ФИРМЫ" - <span>это</span></p>
        </div>
        <div class="vantage__list">
            <ul>
                <li class="animated" data-anim="fadeInLeft" style="visibility: hidden;">
                    <div class="ico vantage__list-ico1"></div>
                    <div class="text">
                        <p class="vantage__list-title">Гарантия сохранности</p>
                        <p class="vantage__list-des">Мы гарантируем сохранность изделия<br>
                            и, при необходимости, используем<br>
                            щадящие методы чистки</p>
                    </div>
                </li>
                <li class="animated" data-anim="fadeInRight" style="visibility: hidden;">
                    <div class="ico vantage__list-ico2"></div>
                    <div class="text">
                        <p class="vantage__list-title">Полная гигиеническая <br>
                            обработка</p>
                        <p class="vantage__list-des">Удаление загрязнений<br>
                            любой сложности,<br>
                            посторонних запахов, патогенных<br>
                            организмов с соблюдением всех<br>
                            стандартов безопасной чистки</p>
                    </div>
                </li>
            </ul>
            <ul>
                <li class="animated" data-anim="fadeInLeft" style="visibility: hidden;">
                    <div class="ico vantage__list-ico3"></div>
                    <div class="text">
                        <p class="vantage__list-title">Современные методы<br>
                            чистки</p>
                        <p class="vantage__list-des">У нас установлена автоматизированная<br>
                            поточная линия стирки и чистки ковров<br>
                            производства Испании</p>
                    </div>
                </li>
                <li class="animated" data-anim="fadeInRight" style="visibility: hidden;">
                    <div class="ico vantage__list-ico4"></div>
                    <div class="text">
                        <p class="vantage__list-title">Квалифицированные<br>
                            рабочие</p>
                        <p class="vantage__list-des">Опытные технологи подберут<br>
                            инивидуальный метод чистки<br>
                            для каждого изделия</p>
                    </div>
                </li>
            </ul>
            <ul>
                <li class="animated" data-anim="fadeInLeft" style="visibility: hidden;">
                    <div class="ico vantage__list-ico5"></div>
                    <div class="text">
                        <p class="vantage__list-title">Безопасные<br>
                            моющие средства</p>
                        <p class="vantage__list-des">Экологичные и гипоаллергенные<br>
                            моющие средства, безопасные<br>
                            для детей и домашних животных</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--end vantage-->
<!--begin video-->
<div class="video">
    <div class="wrap">
        <div class="prv">
            <p class="prv__title">Чистка ковров <span>своими глазами</span></p>
        </div>
        <div class="video__player">
         <iframe width="500" height="281" src="https://www.youtube.com/embed/SHoBXSTaHwI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
        </div>
    </div>
</div>
<!--end video-->
<!--begin price-->
<div data-section="price" class="price section">
    <div class="wrap">
        <div class="prv">
            <p class="prv__title">"Отмываем" <span>цены от предрассудков</span></p>
            <p class="prv__des">чистка в "НАЗВАНИЕ ФИРМЫ" - это практично и недорого</p>
        </div>
        <div class="price__list">
            <ul>
                <li class="animated zoomIn" data-anim="zoomIn" style="visibility: visible;">
                    <div class="wrap-box">
                        <p class="price__list-title">Шелковые ковры</p>

                        <p class="price__list-des">фабричные и ручной работы</p>

                        <div class="texture ttr1">
                            <div class="wrap-ttr">
                                <p class="texture__value">от <span>400</span> руб/кв.м</p>
                            </div>
                        </div>
                        <a data-modal="#callback" data-h3="заявка на чистку шелковых ковров" class="btn open_modal">Подробнее</a></div>
                </li>
                <li class="animated zoomIn" data-anim="zoomIn" style="visibility: visible;">
                    <div class="wrap-box">
                        <p class="price__list-title">Шерстяные ковры</p>

                        <p class="price__list-des">фабричные и ручной работы</p>

                        <div class="texture ttr2">
                            <div class="wrap-ttr">
                                <p class="texture__value">от <span>250</span> руб/кв.м</p>
                            </div>
                        </div>
                        <a data-modal="#callback" data-h3="заявка на чистку шерстяных ковров" class="btn open_modal">Подробнее</a></div>
                </li>
                <li class="animated zoomIn" data-anim="zoomIn" style="visibility: visible;">
                    <div class="wrap-box">
                        <p class="price__list-title">Синтетические ковры</p>

                        <p class="price__list-des">с высоким и низким ворсом</p>

                        <div class="texture ttr3">
                            <div class="wrap-ttr">
                                <p class="texture__value">от <span>200</span> руб/кв.м</p>
                            </div>
                        </div>
                        <a data-modal="#callback" data-h3="заявка на чистку синтетических ковров" class="btn open_modal">Подробнее</a></div>
                </li>
            </ul>
            <ul>
                <li class="animated zoomIn" data-anim="zoomIn" style="visibility: visible;">
                    <div class="wrap-box">
                        <p class="price__list-title">Шкуры</p>

                        <p class="price__list-des">натуральные и искусственные</p>

                        <div class="texture ttr4">
                            <div class="wrap-ttr">
                                <p class="texture__value">от <span>700</span> руб/кв.м</p>
                            </div>
                        </div>
                        <a data-modal="#callback" data-h3="заявка на чистку шкуры" class="btn open_modal">Подробнее</a></div>
                </li>
                <li class="animated zoomIn" data-anim="zoomIn" style="visibility: visible;">
                    <div class="wrap-box">
                        <p class="price__list-title">Ковролин</p>

                        <p class="price__list-des">и ковровые покрытия</p>

                        <div class="texture ttr5">
                            <div class="wrap-ttr">
                                <p class="texture__value">от <span>70</span> руб/кв.м</p>
                            </div>
                        </div>
                        <a data-modal="#callback" data-h3="заявка на чистку ковролина" class="btn open_modal">Подробнее</a></div>
                </li>
                <li class="last animated zoomIn" data-anim="zoomIn" style="visibility: visible;">
                    <div class="wrap-box">
                        <p class="price__list-title">Любые другие <br>
                            ковровые изделия</p>

                        <div class="texture ttr6">
                            <div class="ico">
                                <div class="arr-wrap">
                                    <div data-anim="bounceInDown" class="animated arr-down bounceInDown" style="visibility: visible;"></div>
                                </div>
                            </div>
                        </div>
                        <a target="_blank" href="price.pdf" class="btn">Скачайте прайс</a></div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--end price-->
<!--begin stock-->
<div class="stock stock-bg">
    <div class="wrap">
        <div class="stock__info">
            <div class="description l">
                <div class="description__title">
                    <p class="description__title-main">Акция в честь открытия</p>
                    <p class="description__title-sale">Мы дарим скидку 30% на экохимчистку</p>
                </div>
                <div class="description__prev">
                    <p>Оставьте заявку <br>
                        на бесплатную консультацию <br>
                        и получите скидку 30%</p>
                </div>
            </div>
            <div class="when r">
                <div class="when__title">
                    <p>До конца акции осталось:</p>
                </div>
                <div class="when__timer">
                    <ul class="when__timer-value">
                        <li class="day">00</li>
                        <li class="hour">10</li>
                        <li class="min">32</li>
                        <li class="sec">46</li>
                    </ul>
                    <ul class="when__timer-des">
                        <li class="d">день</li>
                        <li class="h">часов</li>
                        <li class="m">минут</li>
                        <li class="s">секунд</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="stock__form">
            <form action="submit.php" method="post">
                <input type="hidden" class="hidden_title" name="dop" value="Получить скидку 30%">
                <input type="hidden" name="lend" value="Ковры">
                <input type="text" name="name" class="req" placeholder="Ваше имя">
                <input type="tel" name="telno" class="req" placeholder="Ваш телефон или e-mail">
                <button class="btn__green" type="submit">Получить скидку</button>
                <div class="success">Спасибо за вашу заявку</div>
            </form>
        </div>
    </div>
</div>
<!--end stock-->
<!--begin work-->
<div data-section="work" class="work section">
    <div class="wrap">
        <div class="prv">
            <p class="prv__title">Как мы работаем</p>
        </div>
        <div class="work__list">
            <ul>
                <li class="animated fadeInUp" data-anim="fadeInUp" style="visibility: visible;">
                    <div class="dtc">
                        <div class="ico ico1"></div>
                        <p>Позвоните <a href="+80000000000" class="tel">+8 000 000-00-00</a> или <a data-modal="#callback" data-h3="Заявка на услуги" class="btn__green open_modal">Оставьте заявку</a></p>
                    </div>
                </li>
                <li class="animated fadeInUp" data-anim="fadeInUp" style="visibility: visible;">
                    <div class="dtc">
                        <div class="ico ico2"></div>
                        <p>Назначьте время приезда специалиста</p>
                    </div>
                </li>
                <li class="animated fadeInUp" data-anim="fadeInUp" style="visibility: visible;">
                    <div class="dtc">
                        <div class="ico ico3"></div>
                        <p>Эксперт осматривает ковер и оформляет договор на услуги</p>
                    </div>
                </li>
                <li class="animated fadeInUp" data-anim="fadeInUp" style="visibility: visible;">
                    <div class="dtc">
                        <div class="ico ico4"></div>
                        <p>Мы упаковывем ковер и забираем его на фабрику <br>
                            <span>или</span> производим чистку прямо на месте <a data-modal="#callback" data-h3="заявка на выездную чистку" class="btn open_modal">заказать выездную чистку</a></p>
                    </div>
                </li>
                <li class="animated fadeInUp" data-anim="fadeInUp" style="visibility: visible;">
                    <div class="dtc">
                        <div class="ico ico5"></div>
                        <p>Производим чистку ковра в течение 3-х дней</p>
                    </div>
                </li>
                <li class="animated fadeInUp" data-anim="fadeInUp" style="visibility: visible;">
                    <div class="dtc">
                        <div class="ico ico6"></div>
                        <p>Доставляем обратно чистый ковер на чистом автомобиле <br>
                            в специальной упаковке</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="work__car">
            <div data-anim="bounceInLeft" class="work__car-bg animated bounceInLeft" style="visibility: visible;"></div>
        </div>
    </div>
</div>
<!--end work-->
<!--begin additionally-->
<div class="additionally">
    <div class="wrap">
        <div class="prv">
            <p class="prv__title">Дополнительно можем предложить</p>
        </div>
        <div class="additionally__list">
            <ul>
                <li class="animated fadeInLeft" data-anim="fadeInLeft" style="visibility: visible;">
                    <div class="pic pic1"></div>
                    <p>Выездная химчистка<br>
                        мягкой и кожаной мебели</p>
                    <a data-modal="#callback" data-h3="Узнать подробности об услуге 'Выездная химчистка<br/>
                        мягкой и кожаной мебели'" class="btn__green open_modal">Подробнее</a></li>
                <li class="animated fadeInUp" data-anim="fadeInUp" style="visibility: visible;">
                    <div class="pic pic2"></div>
                    <p>Сухая химчистка<br>
                        салона автомобиля</p>
                    <a data-modal="#callback" data-h3="Узнать подробности об услуге 'Сухая химчистка<br/>
                        салона автомобиля'" class="btn__green open_modal">Подробнее</a></li>
                <li class="animated fadeInRight" data-anim="fadeInRight" style="visibility: visible;">
                    <div class="pic pic3"></div>
                    <p>Выездная химчистка <br>
                        штор и жалюзи</p>
                    <a data-modal="#callback" data-h3="Узнать подробности об услуге 'Выездная химчистка <br/>
                        штор и жалюзей'" class="btn__green open_modal">Подробнее</a></li>
            </ul>
        </div>
    </div>
</div>
<!--end additionally-->
<!--begin certificates-->
<div class="certificates">
    <div class="wrap">
        <div class="prv">
            <p class="prv__title">Сертификаты</p>
            <p class="prv__des">на оборудование и чистящие средства</p>
        </div>
        <div class="certificates__list">
            <ul>
                <li>
                    <div class="certificates__list-item"></div>
                    <p>Formula 801</p>
                </li>
                <li>
                    <div class="certificates__list-item"></div>
                    <p>Battistella</p>
                </li>
                <li>
                    <div class="certificates__list-item"></div>
                    <p>ГОСТ Р 51108-97</p>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--end certificates-->
<!--begin contacts-->
<div data-section="contacts" class="contacts section">
    <div class="wrap">
        <div class="prv">
            <p class="prv__title">Наши контакты</p>
        </div>
        <p class="contacts__address">Город, улица, дом, номер офиса</p>
        <p class="contacts__phone"><a href="+80000000000">8 (000) 000-00-00</a></p>
    </div>
</div>
<!--end contacts-->
<!--begin map-b-->
<div class="map-box">
    <ymaps id="ymaps1615731489841627838" style="display: block; width: 100%; height: 400px;"><ymaps class="ymaps-2-1-78-map" style="width: 1138px; height: 400px;"><ymaps class="ymaps-2-1-78-map ymaps-2-1-78-i-ua_js_yes ymaps-2-1-78-map-bg ymaps-2-1-78-islets_map-lang-ru" style="width: 1138px; height: 400px;"><ymaps class="ymaps-2-1-78-inner-panes"><ymaps class="ymaps-2-1-78-events-pane ymaps-2-1-78-user-selection-none" unselectable="on" style="height: 100%; width: 100%; top: 0px; left: 0px; position: absolute; z-index: 2500; cursor: url(&quot;https://api-maps.yandex.ru/2.1.78/build/release/images/cursor/grab.cur&quot;) 16 16, url(&quot;https://api-maps.yandex.ru/2.1.78/build/release/images/cursor/grab.cur&quot;), move;"></ymaps><ymaps class="ymaps-2-1-78-ground-pane" style="top: 0px; left: 0px; position: absolute; transform: translate3d(0px, 0px, 0px) scale(1, 1); z-index: 501;"><ymaps style="z-index: 150; position: absolute;"><canvas height="656" width="1394" style="position: absolute; width: 1394px; height: 656px; left: -128px; top: -128px;"></canvas></ymaps></ymaps><ymaps class="ymaps-2-1-78-copyrights-pane" style="height: 0px; inset: auto 0px 0px; position: absolute; z-index: 5002; margin-bottom: 0px;"><ymaps><ymaps class="ymaps-2-1-78-copyright ymaps-2-1-78-copyright_logo_no" style=""><ymaps class="ymaps-2-1-78-copyright__fog">…</ymaps><ymaps class="ymaps-2-1-78-copyright__wrap"><ymaps class="ymaps-2-1-78-copyright__layout"><ymaps class="ymaps-2-1-78-copyright__content-cell"><ymaps class="ymaps-2-1-78-copyright__content"><ymaps class="ymaps-2-1-78-copyright__text">© Яндекс</ymaps><ymaps class="ymaps-2-1-78-copyright__agreement">&nbsp;<a class="ymaps-2-1-78-copyright__link" target="_blank" href="https://yandex.ru/legal/maps_termsofuse/?lang=ru" rel="noopener">Условия использования</a></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-78-copyright__logo-cell"><a class="ymaps-2-1-78-copyright__logo" href="" target="_blank"></a></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-78-map-copyrights-promo"><ymaps><ymaps class="ymaps-2-1-78-gotoymaps" title="Открыть в Яндекс.Картах"><ymaps class="ymaps-2-1-78-gotoymaps__container"><ymaps class="ymaps-2-1-78-gotoymaps__pin"></ymaps><ymaps class="ymaps-2-1-78-gotoymaps__text-container"><ymaps class="ymaps-2-1-78-gotoymaps__text">Открыть в Яндекс.Картах</ymaps></ymaps></ymaps></ymaps><a class="ymaps-2-1-78-gototech" target="_blank" href="https://tech.yandex.ru/maps/mapsapi/?from=api-maps ">Создать свою карту</a></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-78-controls-pane" style="width: 100%; top: 0px; left: 0px; position: absolute; z-index: 4503;"><ymaps class="ymaps-2-1-78-controls__toolbar" style="margin-top: 10px;"><ymaps class="ymaps-2-1-78-controls__toolbar_left"><ymaps class="ymaps-2-1-78-controls__control_toolbar ymaps-2-1-78-user-selection-none" unselectable="on" style="margin-right: 0px; margin-left: 10px; position: inherit;"><ymaps><ymaps class="ymaps-2-1-78-float-button ymaps-2-1-78-_hidden-text" style="max-width: 90px" title="Определить ваше местоположение"><ymaps class="ymaps-2-1-78-float-button-icon ymaps-2-1-78-float-button-icon_icon_geolocation"></ymaps><ymaps class="ymaps-2-1-78-float-button-text"></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-78-controls__toolbar_right"><ymaps class="ymaps-2-1-78-controls__control_toolbar" style="margin-right: 10px; margin-left: 0px; position: inherit;"><ymaps><ymaps class="ymaps-2-1-78-traffic"><ymaps id="id_161573149138852987630" unselectable="on" class="ymaps-2-1-78-user-selection-none"><ymaps><ymaps class="ymaps-2-1-78-float-button ymaps-2-1-78-float-button_traffic_left" style=""><ymaps class="ymaps-2-1-78-traffic__icon ymaps-2-1-78-traffic__icon_icon_off ymaps-2-1-78-float-button-icon"></ymaps><ymaps class="ymaps-2-1-78-float-button-text"><ymaps>Пробки</ymaps></ymaps></ymaps></ymaps><ymaps></ymaps></ymaps><ymaps id="id_161573149138852987631"><ymaps><ymaps class="ymaps-2-1-78-traffic__panel ymaps-2-1-78-popup ymaps-2-1-78-popup_direction_down ymaps-2-1-78-popup_to_bottom ymaps-2-1-78-popup_theme_ffffff ymaps-2-1-78-user-selection-none" unselectable="on" style="width: 270px;"><ymaps class="ymaps-2-1-78-traffic__tail ymaps-2-1-78-popup__tail"></ymaps><ymaps class="ymaps-2-1-78-traffic__panel-content"><ymaps id="id_161573149138852987632"><ymaps><ymaps class="ymaps-2-1-78-traffic__switcher"><ymaps class="ymaps-2-1-78-traffic__switcher-item ymaps-2-1-78-traffic__switcher-item_data_actual ymaps-2-1-78-traffic__switcher-item_selected_yes">Сейчас</ymaps><ymaps class="ymaps-2-1-78-traffic__switcher-item ymaps-2-1-78-traffic__switcher-item_data_archive">Статистика</ymaps></ymaps></ymaps></ymaps><ymaps></ymaps><ymaps></ymaps><ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-78-controls__control_toolbar" style="margin-right: 10px; margin-left: 0px; position: inherit;"><ymaps><ymaps class="ymaps-2-1-78-listbox ymaps-2-1-78-listbox_opened_no ymaps-2-1-78-listbox_align_right" style="width: 87px;"><ymaps class="ymaps-2-1-78-listbox__button ymaps-2-1-78-_visible-arrow ymaps-2-1-78-user-selection-none" unselectable="on" title=""><ymaps class="ymaps-2-1-78-listbox__button-icon ymaps-2-1-78-_icon_layers"></ymaps><ymaps class="ymaps-2-1-78-listbox__button-text">Слои</ymaps><ymaps class="ymaps-2-1-78-listbox__button-arrow"></ymaps></ymaps><ymaps class="ymaps-2-1-78-listbox__panel ymaps-2-1-78-i-custom-scroll" style="transform: translate3d(0px, 0px, 0px) scale(1, 1);"><ymaps class="ymaps-2-1-78-listbox__list" style="max-height: 313px;"><ymaps><ymaps><ymaps id="id_161573149138852987620"><ymaps unselectable="on" class="ymaps-2-1-78-user-selection-none"><ymaps class="ymaps-2-1-78-listbox__list-item ymaps-2-1-78-listbox__list-item_selected_yes"><ymaps class="ymaps-2-1-78-listbox__list-item-text">Схема</ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps><ymaps><ymaps id="id_161573149138852987621"><ymaps unselectable="on" class="ymaps-2-1-78-user-selection-none"><ymaps class="ymaps-2-1-78-listbox__list-item ymaps-2-1-78-listbox__list-item_selected_no"><ymaps class="ymaps-2-1-78-listbox__list-item-text">Спутник</ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps><ymaps><ymaps id="id_161573149138852987622"><ymaps unselectable="on" class="ymaps-2-1-78-user-selection-none"><ymaps class="ymaps-2-1-78-listbox__list-item ymaps-2-1-78-listbox__list-item_selected_no"><ymaps class="ymaps-2-1-78-listbox__list-item-text">Гибрид</ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-78-controls__control_toolbar ymaps-2-1-78-user-selection-none" style="margin-right: 10px; margin-left: 0px; position: inherit;" unselectable="on"><ymaps><ymaps class="ymaps-2-1-78-float-button ymaps-2-1-78-_hidden-text" style="max-width: 28px" title=""><ymaps class="ymaps-2-1-78-float-button-icon ymaps-2-1-78-float-button-icon_icon_expand"></ymaps><ymaps class="ymaps-2-1-78-float-button-text"></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-78-controls__bottom" style="top: 400px;"><ymaps class="ymaps-2-1-78-controls__control" style="margin-right: 0px; margin-left: 0px; position: inherit; inset: auto 10px 30px auto;"><ymaps><ymaps style="display: block;"><ymaps style="display: inline-block; height: 100%; vertical-align: top;"><ymaps id="id_161573149138852987623"><ymaps><ymaps class="ymaps-2-1-78-scaleline" style="width: 74px;"><ymaps class="ymaps-2-1-78-scaleline__left"><ymaps class="ymaps-2-1-78-scaleline__left-border"></ymaps><ymaps class="ymaps-2-1-78-scaleline__left-line"></ymaps></ymaps><ymaps class="ymaps-2-1-78-scaleline__center"><ymaps class="ymaps-2-1-78-scaleline__label">400&nbsp;м</ymaps></ymaps><ymaps class="ymaps-2-1-78-scaleline__right"><ymaps class="ymaps-2-1-78-scaleline__right-border"></ymaps><ymaps class="ymaps-2-1-78-scaleline__right-line"></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps style="display: inline-block; width: 10px; height: 0"></ymaps><ymaps style="display: inline-block;"><ymaps id="id_161573149138852987624" unselectable="on" class="ymaps-2-1-78-user-selection-none"><ymaps><ymaps class="ymaps-2-1-78-float-button ymaps-2-1-78-_hidden-text" style="max-width: 28px" title="Измерение расстояний на карте"><ymaps class="ymaps-2-1-78-float-button-icon ymaps-2-1-78-float-button-icon_icon_ruler"></ymaps><ymaps class="ymaps-2-1-78-float-button-text"></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-78-controls__control" style="margin-right: 0px; margin-left: 0px; position: inherit; inset: 108px auto auto 10px;"><ymaps><ymaps class="ymaps-2-1-78-zoom" style="height: 150px"><ymaps class="ymaps-2-1-78-zoom__plus ymaps-2-1-78-zoom__button ymaps-2-1-78-float-button ymaps-2-1-78-user-selection-none" unselectable="on"><ymaps class="ymaps-2-1-78-zoom__icon ymaps-2-1-78-float-button-icon"></ymaps></ymaps><ymaps class="ymaps-2-1-78-zoom__minus ymaps-2-1-78-zoom__button ymaps-2-1-78-float-button ymaps-2-1-78-user-selection-none" unselectable="on"><ymaps class="ymaps-2-1-78-zoom__icon ymaps-2-1-78-float-button-icon"></ymaps></ymaps><ymaps class="ymaps-2-1-78-zoom__scale"><ymaps class="ymaps-2-1-78-zoom__runner ymaps-2-1-78-zoom__button ymaps-2-1-78-float-button ymaps-2-1-78-zoom__runner__transition ymaps-2-1-78-touch-action-none ymaps-2-1-78-user-selection-none" unselectable="on" style="top: 45px;"><ymaps class="ymaps-2-1-78-zoom__icon ymaps-2-1-78-float-button-icon ymaps-2-1-78-float-button-icon_icon_runner"></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps><ymaps class="ymaps-2-1-78-places-pane" style="top: 0px; left: 0px; position: absolute; transform: translate3d(0px, 0px, 0px) scale(1, 1); z-index: 2004;"><ymaps class="ymaps-2-1-78-placemark-overlay ymaps-2-1-78-user-selection-none" unselectable="on" style="z-index: 800000000; height: 0px; width: 0px; position: absolute; left: 578px; top: 204px;"><ymaps><ymaps class="ymaps-2-1-78-islets_icon-with-caption"><ymaps class="ymaps-2-1-78-islets_icon-with-caption__caption-block"><ymaps class="ymaps-2-1-78-islets_icon-caption" style="padding: 0px; max-width: 0px;"></ymaps></ymaps><ymaps id="id_161573149138852987635"><ymaps class="ymaps-2-1-78-svg-icon ymaps_https___api_maps_yandex_ru_2_1_78_1545551896659islands_icon___1E98FF_34x41_1615731492510" style="position: absolute; width: 34px; height: 41px; left: -11px; top: -38px;"><ymaps class="ymaps-2-1-78-svg-icon-content" style="font: 13px Arial, sans-serif; position: absolute; text-align: center;left: 5px;top: 6px;width: 16px;height: 16px;"><ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps></ymaps>
</div>
<!--end map-b-->
<!--begin questions-->
<div class="questions">
    <div class="wrap">
        <div class="prv">
            <p class="prv__title">Остались вопросы?</p>
        </div>
        <a data-modal="#callback" data-h3="Заявка на консультацию" class="questions__link open_modal">Задайте их менеджеру</a>
    </div>
</div>
<!--end questions-->

<!--begin footer-->
<footer class="footer">
    <div class="footer__top">
        <div class="wrap">
            <div class="logo l">
                <a href="index.html" class="logo__img">
                    <img src="images/logo.png" alt="logo">
                </a>
            </div>
            <div class="slogan l">
                Химчистка <br>
                премиум <br>
                класса
            </div>
            <a data-modal="#callback" data-h3="Заказ обратного звонка" class="call-btn btn__green open_modal r">заказать звонок</a>
            <div class="tel r">
                <a href="+80000000000">8 (000) 000-00-00</a>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="wrap">
            <p class="l">"НАЗВАНИЕ ФИРМЫ", 2018</p>
           
        </div>
    </div>
</footer>
<!--end footer-->

<!--begin modal-->
<div id="callback" class="modal_div" style="opacity: 0; top: 45%; display: none;">
<a class="modal_close"></a>
<p class="ttl">Оставить заявку</p>
<p class="change">и наш консультант свяжется с Вами</p>
<form action="submit.php" class="snt" method="post">
<input type="hidden" class="hidden_title" name="dop" value="заявка на чистку шелковых ковров">
<input type="hidden" name="lend" value="Ковры">
<input type="text" name="name" class="req" placeholder="Имя">
<input type="tel" name="telno" class="req" placeholder="Телефон">
    <button class="btn__green" type="submit">Отправить</button>
<div class="success">Спасибо за вашу заявку</div>
</form>
<span>Ваши контактные данные не будут переданы <br>
третьим лицам и будут использованы <br>
исключительно для связи с Вами</span>
</div>
<div id="overlay" style="display: none;"></div>
<!--end modal-->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/animate.js"></script>
<script src="js/app.js"></script>
<script src="http://api-maps.yandex.ru/2.0/?load=package.full&amp;lang=ru-RU" type="text/javascript"></script>
<script src="js/ya-map.js"></script>

</body></html>
<?php $this->endPage() ?>
