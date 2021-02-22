<script src="modules/interface.js"></script>

<?php
        error_reporting(0);
        if($_GET['download'] == "true") {
            $file = fopen("saves/TwiCode.txt", "w");
            $txt = str_replace(',', "\n", $_GET['code']);
            fwrite($file, $txt);
            header("location: saves/download.php?path=TwiCode.txt&code=". $_GET['code']);
        }
    ?>

<html lang="en" class="landscape portrait version chrome"><head>
      <meta charset="UTF-8">
      <meta http-equiv="content-language" content="fr">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width,maximum-scale=1,user-scalable=0">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-status-bar-style" content="black">
      <meta name="author" content="TWIDEV">
      <meta name="robots" content="noodp, noydir, notranslate">
      <meta name="renderer" content="browser">
      <meta property="og:site_name" content="Le TwiCode est un langage de Programmation Open-source permettant de créer des jeux et des programmes en lignes facilement et simplement !">
      <meta name="twitter:card" content="summary">
      <meta name="twitter:site" content="@TwiDev5">
      <meta name="msapplication-TileColor" content="#1c4aee">
      <meta name="theme-color" content="#ffffff">
      <title>TwiCode - Langage de Programmation</title>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
      <script>window.ga = window.ga || function () {
         (ga.q = ga.q || []).push(arguments);
         };
         ga.l = +new Date;
         ga('create', 'UA-48104508-4', 'auto');
      </script><script async="" src="//www.google-analytics.com/analytics.js"></script><script>UPLOADCARE_MANUAL_START = true
         UPLOADCARE_PUBLIC_KEY = '2886b0908facbe7d4922'
      </script><script>window.$crisp=[];window.CRISP_WEBSITE_ID="11ac550c-68f2-45c6-b3c5-a55384bed312";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script><script src="https://client.crisp.chat/l.js" async=""></script><script src="https://client.crisp.chat/l.js" async=""></script><script>// (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
         //   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
         // (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
         //
         // ym(65534128, "init", {
         //   clickmap:true,
         //   trackLinks:true,
         //   accurateTrackBounce:true,
         //   webvisor:true
         // });
      </script>
      <noscript>
         <div><img src=https://mc.yandex.ru/watch/65534128 style="position:absolute; left:-9999px;" alt=""></div>
      </noscript>
      <style>body,
         button,
         html,
         input,
         select,
         textarea {
         font-family: -apple-system, BlinkMacSystemFont, roboto, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
         }
      </style>
      <link href="static/js/chunk-060e5fd6.097a8488.js" rel="prefetch">
      <link href="static/js/chunk-0b65ffb6.9731e1ce.js" rel="prefetch">
      <link href="static/js/chunk-2d0a3577.2aef559a.js" rel="prefetch">
      <link href="static/js/chunk-2d0a43df.1a0913d5.js" rel="prefetch">
      <link href="static/js/chunk-2d0aa90c.75b0508c.js" rel="prefetch">
      <link href="static/js/chunk-2d0aab07.01b8df2c.js" rel="prefetch">
      <link href="static/js/chunk-2d0abc00.854f3f45.js" rel="prefetch">
      <link href="static/js/chunk-2d0ae937.6e4e9eea.js" rel="prefetch">
      <link href="static/js/chunk-2d0aeb45.2c0dbdb5.js" rel="prefetch">
      <link href="static/js/chunk-2d0af08c.43f578f7.js" rel="prefetch">
      <link href="static/js/chunk-2d0afa49.deb7414a.js" rel="prefetch">
      <link href="static/js/chunk-2d0b6187.e5a42689.js" rel="prefetch">
      <link href="static/js/chunk-2d0ba136.f9c29f2a.js" rel="prefetch">
      <link href="static/js/chunk-2d0bcec1.c63999bd.js" rel="prefetch">
      <link href="static/js/chunk-2d0bdf38.be29a049.js" rel="prefetch">
      <link href="static/js/chunk-2d0c0494.ea5e0a74.js" rel="prefetch">
      <link href="static/js/chunk-2d0c0a09.c85b928c.js" rel="prefetch">
      <link href="static/js/chunk-2d0c4313.c7a52666.js" rel="prefetch">
      <link href="static/js/chunk-2d0c46d1.2c6eb0f4.js" rel="prefetch">
      <link href="static/js/chunk-2d0c512b.4e5dac86.js" rel="prefetch">
      <link href="static/js/chunk-2d0cf16e.e905a098.js" rel="prefetch">
      <link href="static/js/chunk-2d0d056d.933b3c05.js" rel="prefetch">
      <link href="static/js/chunk-2d0d0645.8a311bf6.js" rel="prefetch">
      <link href="static/js/chunk-2d0d2f22.1c27a16e.js" rel="prefetch">
      <link href="static/js/chunk-2d0d61fd.dc14912a.js" rel="prefetch">
      <link href="static/js/chunk-2d0d7e63.10b36f2d.js" rel="prefetch">
      <link href="static/js/chunk-2d0e1b57.9215a9b5.js" rel="prefetch">
      <link href="static/js/chunk-2d0e1fbe.6d5de965.js" rel="prefetch">
      <link href="static/js/chunk-2d0e22d6.3fe6fc4d.js" rel="prefetch">
      <link href="static/js/chunk-2d0e542a.3ff518ee.js" rel="prefetch">
      <link href="static/js/chunk-2d0e57ec.388e03c1.js" rel="prefetch">
      <link href="static/js/chunk-2d0e6553.80c57b4f.js" rel="prefetch">
      <link href="static/js/chunk-2d0e6c86.acc64a49.js" rel="prefetch">
      <link href="static/js/chunk-2d0ea098.4055bd7c.js" rel="prefetch">
      <link href="static/js/chunk-2d0f0a11.cbb7be65.js" rel="prefetch">
      <link href="static/js/chunk-2d208ac5.8e89f8d9.js" rel="prefetch">
      <link href="static/js/chunk-2d209408.1e2c6f67.js" rel="prefetch">
      <link href="static/js/chunk-2d20f745.ca8373c3.js" rel="prefetch">
      <link href="static/js/chunk-2d2138c7.aad1d2c6.js" rel="prefetch">
      <link href="static/js/chunk-2d216f3b.b998b9af.js" rel="prefetch">
      <link href="static/js/chunk-2d217e5b.1cce8a08.js" rel="prefetch">
      <link href="static/js/chunk-2d21dcd2.313c799c.js" rel="prefetch">
      <link href="static/js/chunk-2d2214b3.20a932aa.js" rel="prefetch">
      <link href="static/js/chunk-2d221799.38760bb9.js" rel="prefetch">
      <link href="static/js/chunk-2d221814.48f5698a.js" rel="prefetch">
      <link href="static/js/chunk-2d221a34.8bbd55d4.js" rel="prefetch">
      <link href="static/js/chunk-2d22502a.800a73cf.js" rel="prefetch">
      <link href="static/js/chunk-2d226775.0f71c6a3.js" rel="prefetch">
      <link href="static/js/chunk-2d229411.3ca1ff93.js" rel="prefetch">
      <link href="static/js/chunk-2d2295e9.1ac23672.js" rel="prefetch">
      <link href="static/js/chunk-2d22c171.bc92cffe.js" rel="prefetch">
      <link href="static/js/chunk-2d22c2b8.e2974aaf.js" rel="prefetch">
      <link href="static/js/chunk-2d2311f7.1ccb3d88.js" rel="prefetch">
      <link href="static/js/chunk-2d237ee7.66e2bb8b.js" rel="prefetch">
      <link href="static/js/chunk-2d238465.574592d3.js" rel="prefetch">
      <link href="static/js/chunk-30597b4a.8c0ad8c5.js" rel="prefetch">
      <link href="static/js/chunk-3bd95060.de38a726.js" rel="prefetch">
      <link href="static/js/chunk-52d8424c.ced91916.js" rel="prefetch">
      <link href="static/js/chunk-594d0369.b54d9f2c.js" rel="prefetch">
      <link href="static/js/chunk-6b08d13d.ae1a7017.js" rel="prefetch">
      <link href="static/js/chunk-b7a53346.0cd69e52.js" rel="prefetch">
      <link href="static/css/app.974097b5.css" rel="preload" as="style">
      <link href="static/css/chunk-vendors.1f3b6886.css" rel="preload" as="style">
      <link href="static/js/app.de189fc1.js" rel="preload" as="script">
      <link href="static/js/chunk-vendors.aa89ab4b.js" rel="preload" as="script">
      <link href="static/css/chunk-vendors.1f3b6886.css" rel="stylesheet">
      <link href="static/css/app.974097b5.css" rel="stylesheet">
      <link rel="prefetch" as="script" href="static/js/chunk-52d8424c.ced91916.js">
      <link rel="prefetch" as="script" href="static/js/chunk-060e5fd6.097a8488.js">
      <link rel="prefetch" as="script" href="static/js/chunk-3bd95060.de38a726.js">
      <link rel="prefetch" as="script" href="static/js/chunk-594d0369.b54d9f2c.js">
      <link rel="prefetch" as="script" href="static/js/chunk-b7a53346.0cd69e52.js">
      <script charset="utf-8" src="static/js/chunk-2d22502a.800a73cf.js"></script>
      <style type="text/css" media="screen" class="monaco-colors">.monaco-editor, .monaco-editor-background, .monaco-editor .inputarea.ime-input { background-color: #18222d; }
         .monaco-editor, .monaco-editor .inputarea.ime-input { color: #abb2bf; }
         .monaco-editor .margin { background-color: #18222d; }
         .monaco-editor .rangeHighlight { background-color: rgba(255, 255, 255, 0.04); }
         .monaco-editor .symbolHighlight { background-color: rgba(97, 153, 255, 0.18); }
         .vs-whitespace { color: #3b4048 !important; }
         .monaco-editor .line-numbers { color: #495162; }
         .monaco-editor .current-line ~ .line-numbers { color: #737984; }
         .monaco-editor .view-overlays .current-line { background-color: #2c313c; }
         .monaco-editor .margin-view-overlays .current-line-margin { background-color: #2c313c; border: none; }
         .monaco-editor .lines-content .cigr { box-shadow: 1px 0 0 0 #3b4048 inset; }
         .monaco-editor .lines-content .cigra { box-shadow: 1px 0 0 0 rgba(200, 200, 200, 0.35) inset; }
         .monaco-editor .minimap-slider, .monaco-editor .minimap-slider .minimap-slider-horizontal { background: rgba(78, 86, 102, 0.19); }
         .monaco-editor .minimap-slider:hover, .monaco-editor .minimap-slider:hover .minimap-slider-horizontal { background: rgba(90, 99, 117, 0.25); }
         .monaco-editor .minimap-slider.active, .monaco-editor .minimap-slider.active .minimap-slider-horizontal { background: rgba(116, 125, 145, 0.25); }
         .monaco-editor .minimap-shadow-visible { box-shadow: #000000 -6px 0 6px -6px inset; }
         .monaco-editor .view-ruler { box-shadow: 1px 0 0 0 rgba(171, 178, 191, 0.15) inset; }
         .monaco-editor .scroll-decoration { box-shadow: #000000 0 6px 6px -6px inset; }
         .monaco-editor .focused .selected-text { background-color: rgba(103, 118, 150, 0.38); }
         .monaco-editor .selected-text { background-color: #3a3d41; }
         .monaco-editor .cursor { background-color: #528bff; border-color: #528bff; color: rgba(255, 255, 255, 0.79); }
         .monaco-editor .squiggly-error { background: url("data:image/svg+xml,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%206%203'%20enable-background%3D'new%200%200%206%203'%20height%3D'3'%20width%3D'6'%3E%3Cg%20fill%3D'%23c24038'%3E%3Cpolygon%20points%3D'5.5%2C0%202.5%2C3%201.1%2C3%204.1%2C0'%2F%3E%3Cpolygon%20points%3D'4%2C0%206%2C2%206%2C0.6%205.4%2C0'%2F%3E%3Cpolygon%20points%3D'0%2C2%201%2C3%202.4%2C3%200%2C0.6'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E") repeat-x bottom left; }
         .monaco-editor .squiggly-warning { background: url("data:image/svg+xml,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%206%203'%20enable-background%3D'new%200%200%206%203'%20height%3D'3'%20width%3D'6'%3E%3Cg%20fill%3D'%23d19a66'%3E%3Cpolygon%20points%3D'5.5%2C0%202.5%2C3%201.1%2C3%204.1%2C0'%2F%3E%3Cpolygon%20points%3D'4%2C0%206%2C2%206%2C0.6%205.4%2C0'%2F%3E%3Cpolygon%20points%3D'0%2C2%201%2C3%202.4%2C3%200%2C0.6'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E") repeat-x bottom left; }
         .monaco-editor .squiggly-info { background: url("data:image/svg+xml,%3Csvg%20xmlns%3D'http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg'%20viewBox%3D'0%200%206%203'%20enable-background%3D'new%200%200%206%203'%20height%3D'3'%20width%3D'6'%3E%3Cg%20fill%3D'%2375beff'%3E%3Cpolygon%20points%3D'5.5%2C0%202.5%2C3%201.1%2C3%204.1%2C0'%2F%3E%3Cpolygon%20points%3D'4%2C0%206%2C2%206%2C0.6%205.4%2C0'%2F%3E%3Cpolygon%20points%3D'0%2C2%201%2C3%202.4%2C3%200%2C0.6'%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E") repeat-x bottom left; }
         .monaco-editor .squiggly-hint { background: url("data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20height%3D%223%22%20width%3D%2212%22%3E%3Cg%20fill%3D%22rgba(238%2C%20238%2C%20238%2C%200.7)%22%3E%3Ccircle%20cx%3D%221%22%20cy%3D%221%22%20r%3D%221%22%2F%3E%3Ccircle%20cx%3D%225%22%20cy%3D%221%22%20r%3D%221%22%2F%3E%3Ccircle%20cx%3D%229%22%20cy%3D%221%22%20r%3D%221%22%2F%3E%3C%2Fg%3E%3C%2Fsvg%3E") no-repeat bottom left; }
         .monaco-editor.showUnused .squiggly-inline-unnecessary { opacity: 0.667; }
         .monaco-editor .squiggly-inline-deprecated { text-decoration: line-through; text-decoration-color: #abb2bf}
         .monaco-diff-editor .diff-review-line-number { color: #495162; }
         .monaco-diff-editor .diff-review-shadow { box-shadow: #000000 0 -6px 6px -6px inset; }
         .monaco-editor .line-insert, .monaco-editor .char-insert { background-color: rgba(0, 128, 155, 0.2); }
         .monaco-diff-editor .line-insert, .monaco-diff-editor .char-insert { background-color: rgba(0, 128, 155, 0.2); }
         .monaco-editor .inline-added-margin-view-zone { background-color: rgba(0, 128, 155, 0.2); }
         .monaco-editor .line-delete, .monaco-editor .char-delete { background-color: rgba(255, 0, 0, 0.2); }
         .monaco-diff-editor .line-delete, .monaco-diff-editor .char-delete { background-color: rgba(255, 0, 0, 0.2); }
         .monaco-editor .inline-deleted-margin-view-zone { background-color: rgba(255, 0, 0, 0.2); }
         .monaco-diff-editor.side-by-side .editor.modified { box-shadow: -6px 0 5px -5px #000000; }
         .monaco-editor .bracket-match { background-color: #515a6b; }
         .monaco-editor .bracket-match { border: 1px solid #515a6b; }
         .monaco-editor .monaco-editor-overlaymessage .anchor { border-top-color: #007acc; }
         .monaco-editor .monaco-editor-overlaymessage .message { border: 1px solid #007acc; }
         .monaco-editor .monaco-editor-overlaymessage .message { background-color: #063b49; }
         .monaco-editor .contentWidgets .codicon-lightbulb {
         color: #ffcc00;
         }
         .monaco-editor .contentWidgets .codicon-lightbulb-autofix {
         color: #75beff;
         }
         .monaco-editor .codelens-decoration { color: #999999; }
         .monaco-editor .codelens-decoration .codicon { color: #999999; }
         .monaco-editor .codelens-decoration > a:hover { color: #4e94ce !important; }
         .monaco-editor .codelens-decoration > a:hover .codicon { color: #4e94ce !important; }
         .monaco-editor .findOptionsWidget { background-color: #21252b; }
         .monaco-editor .findOptionsWidget { color: #cccccc; }
         .monaco-editor .findOptionsWidget { box-shadow: 0 2px 8px #000000; }
         .monaco-editor .findMatch { background-color: rgba(97, 153, 255, 0.18); }
         .monaco-editor .currentFindMatch { background-color: #42557b; }
         .monaco-editor .findScope { background-color: rgba(58, 61, 65, 0.4); }
         .monaco-editor .find-widget { background-color: #21252b; }
         .monaco-editor .find-widget { box-shadow: 0 2px 8px #000000; }
         .monaco-editor .currentFindMatch { border: 2px solid #457dff; padding: 1px; box-sizing: border-box; }
         .monaco-editor .find-widget { color: #cccccc; }
         .monaco-editor .find-widget.no-results .matchesCount { color: #f48771; }
         .monaco-editor .find-widget .monaco-sash { background-color: #454545; width: 3px !important; margin-left: -4px;}
         .monaco-editor .find-widget .monaco-inputbox.synthetic-focus { outline-color: #464646; }
         .monaco-editor .folded-background { background-color: rgba(103, 118, 150, 0.11); }
         .monaco-editor .reference-zone-widget .ref-tree .referenceMatch .highlight { background-color: rgba(234, 92, 0, 0.3); }
         .monaco-editor .reference-zone-widget .preview .reference-decoration { background-color: #29244b; }
         .monaco-editor .reference-zone-widget .ref-tree { background-color: #22262b; }
         .monaco-editor .reference-zone-widget .ref-tree { color: #bbbbbb; }
         .monaco-editor .reference-zone-widget .ref-tree .reference-file { color: #ffffff; }
         .monaco-editor .reference-zone-widget .ref-tree .monaco-list:focus .monaco-list-rows > .monaco-list-row.selected:not(.highlighted) { background-color: rgba(51, 153, 255, 0.2); }
         .monaco-editor .reference-zone-widget .ref-tree .monaco-list:focus .monaco-list-rows > .monaco-list-row.selected:not(.highlighted) { color: #ffffff !important; }
         .monaco-editor .reference-zone-widget .preview .monaco-editor .monaco-editor-background,.monaco-editor .reference-zone-widget .preview .monaco-editor .inputarea.ime-input {  background-color: #1b1d23;}
         .monaco-editor .reference-zone-widget .preview .monaco-editor .margin { background-color: #1b1d23;}
         .monaco-editor .goto-definition-link { color: #4e94ce !important; }
         .monaco-editor .zone-widget .codicon-error,
         .markers-panel .marker-icon.codicon-error,
         .extensions-viewlet > .extensions .codicon-error,
         .monaco-dialog-box .dialog-message-row .codicon-error {
         color: #c24038;
         }
         .monaco-editor .zone-widget .codicon-warning,
         .markers-panel .marker-icon.codicon-warning,
         .extensions-viewlet > .extensions .codicon-warning,
         .extension-editor .codicon-warning,
         .monaco-dialog-box .dialog-message-row .codicon-warning {
         color: #d19a66;
         }
         .monaco-editor .zone-widget .codicon-info,
         .markers-panel .marker-icon.codicon-info,
         .extensions-viewlet > .extensions .codicon-info,
         .extension-editor .codicon-info,
         .monaco-dialog-box .dialog-message-row .codicon-info {
         color: #75beff;
         }
         .monaco-editor .marker-widget a { color: #61afef; }
         .monaco-editor .marker-widget a.code-link span:hover { color: #61afef; }
         .monaco-editor-hover .hover-contents a.code-link span:hover { color: #61afef; }
         .monaco-editor .hoverHighlight { background-color: rgba(38, 79, 120, 0.25); }
         .monaco-editor .monaco-editor-hover { background-color: #21252b; }
         .monaco-editor .monaco-editor-hover { border: 1px solid #181a1f; }
         .monaco-editor .monaco-editor-hover .hover-row:not(:first-child):not(:empty) { border-top: 1px solid rgba(24, 26, 31, 0.5); }
         .monaco-editor .monaco-editor-hover hr { border-top: 1px solid rgba(24, 26, 31, 0.5); }
         .monaco-editor .monaco-editor-hover hr { border-bottom: 0px solid rgba(24, 26, 31, 0.5); }
         .monaco-editor .monaco-editor-hover a { color: #61afef; }
         .monaco-editor .monaco-editor-hover { color: #cccccc; }
         .monaco-editor .monaco-editor-hover .hover-row .actions { background-color: #282c34; }
         .monaco-editor .monaco-editor-hover code { background-color: rgba(10, 10, 10, 0.4); }
         .monaco-editor.vs .valueSetReplacement { outline: solid 2px #515a6b; }
         .monaco-editor .detected-link-active { color: #4e94ce !important; }
         .monaco-editor .parameter-hints-widget { border: 1px solid #181a1f; }
         .monaco-editor .parameter-hints-widget.multiple .body { border-left: 1px solid rgba(24, 26, 31, 0.5); }
         .monaco-editor .parameter-hints-widget .signature.has-docs { border-bottom: 1px solid rgba(24, 26, 31, 0.5); }
         .monaco-editor .parameter-hints-widget { background-color: #21252b; }
         .monaco-editor .parameter-hints-widget a { color: #61afef; }
         .monaco-editor .parameter-hints-widget { color: #cccccc; }
         .monaco-editor .parameter-hints-widget code { background-color: rgba(10, 10, 10, 0.4); }
         .monaco-editor .snippet-placeholder { background-color: rgba(124, 124, 124, 0.3); outline-color: transparent; }
         .monaco-editor .finish-snippet-placeholder { background-color: transparent; outline-color: #525252; }
         .codicon-symbol-array { color: #cccccc !important; }
         .codicon-symbol-boolean { color: #cccccc !important; }
         .codicon-symbol-class { color: #ee9d28 !important; }
         .codicon-symbol-method { color: #b180d7 !important; }
         .codicon-symbol-color { color: #cccccc !important; }
         .codicon-symbol-constant { color: #cccccc !important; }
         .codicon-symbol-constructor { color: #b180d7 !important; }
         .codicon-symbol-value,.codicon-symbol-enum { color: #ee9d28 !important; }
         .codicon-symbol-enum-member { color: #75beff !important; }
         .codicon-symbol-event { color: #ee9d28 !important; }
         .codicon-symbol-field { color: #75beff !important; }
         .codicon-symbol-file { color: #cccccc !important; }
         .codicon-symbol-folder { color: #cccccc !important; }
         .codicon-symbol-function { color: #b180d7 !important; }
         .codicon-symbol-interface { color: #75beff !important; }
         .codicon-symbol-key { color: #cccccc !important; }
         .codicon-symbol-keyword { color: #cccccc !important; }
         .codicon-symbol-module { color: #cccccc !important; }
         .codicon-symbol-namespace { color: #cccccc !important; }
         .codicon-symbol-null { color: #cccccc !important; }
         .codicon-symbol-number { color: #cccccc !important; }
         .codicon-symbol-object { color: #cccccc !important; }
         .codicon-symbol-operator { color: #cccccc !important; }
         .codicon-symbol-package { color: #cccccc !important; }
         .codicon-symbol-property { color: #cccccc !important; }
         .codicon-symbol-reference { color: #cccccc !important; }
         .codicon-symbol-snippet { color: #cccccc !important; }
         .codicon-symbol-string { color: #cccccc !important; }
         .codicon-symbol-struct { color: #cccccc !important; }
         .codicon-symbol-text { color: #cccccc !important; }
         .codicon-symbol-type-parameter { color: #cccccc !important; }
         .codicon-symbol-unit { color: #cccccc !important; }
         .codicon-symbol-variable { color: #75beff !important; }
         .monaco-editor .suggest-widget .monaco-list .monaco-list-row .monaco-highlighted-label .highlight { color: #c5c5c5; }
         .monaco-editor .suggest-widget { color: #abb2bf; }
         .monaco-editor .suggest-widget a { color: #61afef; }
         .monaco-editor .suggest-widget code { background-color: rgba(10, 10, 10, 0.4); }
         .monaco-editor .focused .selectionHighlight { background-color: rgba(255, 255, 255, 0.06); }
         .monaco-editor .selectionHighlight { background-color: rgba(255, 255, 255, 0.03); }
         .monaco-editor .wordHighlight { background-color: rgba(210, 224, 255, 0.18); }
         .monaco-editor .wordHighlightStrong { background-color: rgba(171, 178, 191, 0.15); }
         .monaco-editor .selectionHighlight { border: 1px solid #dddddd; box-sizing: border-box; }
         .monaco-editor .wordHighlight { border: 1px solid #7f848e; box-sizing: border-box; }
         .monaco-editor .wordHighlightStrong { border: 1px solid #7f848e; box-sizing: border-box; }
         .monaco-editor .accessibilityHelpWidget { background-color: #21252b; }
         .monaco-editor .accessibilityHelpWidget { color: #cccccc; }
         .monaco-editor .accessibilityHelpWidget { box-shadow: 0 2px 8px #000000; }
         .monaco-editor .tokens-inspect-widget { border: 1px solid #181a1f; }
         .monaco-editor .tokens-inspect-widget .tokens-inspect-separator { background-color: #181a1f; }
         .monaco-editor .tokens-inspect-widget { background-color: #21252b; }
         .monaco-editor .tokens-inspect-widget { color: #cccccc; }
         .mtk1 { color: #abb2bf; }
         .mtk2 { color: #1e1e1e; }
         .mtk3 { color: #61afef; }
         .mtk4 { color: #cc6666; }
         .mtk5 { color: #9cdcfe; }
         .mtk6 { color: #ce9178; }
         .mtk7 { color: #d4d4d4; }
         .mtk8 { color: #b5cea8; }
         .mtk9 { color: #e06c75; }
         .mtk10 { color: #7f848e; }
         .mtk11 { color: #98c379; }
         .mtk12 { color: #608b4e; }
         .mtk13 { color: #5c6370; }
         .mtk14 { color: #569cd6; }
         .mtk15 { color: #d19a66; }
         .mtk16 { color: #56b6c2; }
         .mtk17 { color: #ffffff; }
         .mtk18 { color: #c678dd; }
         .mtk19 { color: #dcdcdc; }
         .mtk20 { color: #808080; }
         .mtk21 { color: #e5c07b; }
         .mtk22 { color: #f44747; }
         .mtk23 { color: #c586c0; }
         .mtk24 { color: #a79873; }
         .mtk25 { color: #dd6a6f; }
         .mtk26 { color: #5bb498; }
         .mtk27 { color: #909090; }
         .mtk28 { color: #778899; }
         .mtk29 { color: #ff00ff; }
         .mtk30 { color: #b46695; }
         .mtk31 { color: #ff0000; }
         .mtk32 { color: #4f76ac; }
         .mtk33 { color: #3dc9b0; }
         .mtk34 { color: #74b0df; }
         .mtk35 { color: #4864aa; }
         .mtki { font-style: italic; }
         .mtkb { font-weight: bold; }
         .mtku { text-decoration: underline; text-underline-position: under; }
      </style>
      <style type="text/css" media="screen">
         .monaco-editor .codelens-decoration.ee1f61 { height: 24px; line-height: 22px; font-size: 14px; padding-right: 7px;}
         .monaco-editor .codelens-decoration.ee1f61 > a > .codicon { line-height: 22px; font-size: 14px; }
      </style>
      <script charset="utf-8" src="static/js/chunk-30597b4a.8c0ad8c5.js"></script><script charset="utf-8" src="static/js/chunk-0b65ffb6.9731e1ce.js"></script>
      <link href="https://client.relay.crisp.chat" rel="dns-prefetch" crossorigin="">
      <link href="https://client.crisp.chat" rel="preconnect" crossorigin="">
      <script src="https://client.crisp.chatstatic/javascripts/client.js?207c042" type="text/javascript" async=""></script>
      <link href="https://client.crisp.chatstatic/stylesheets/client_default.css?207c042" type="text/css" rel="stylesheet">
   <link href="https://client.relay.crisp.chat" rel="dns-prefetch" crossorigin=""><link href="https://client.crisp.chat" rel="preconnect" crossorigin=""><script src="https://client.crisp.chat/static/javascripts/client.js?207c042" type="text/javascript" async=""></script><link href="https://client.crisp.chat/static/stylesheets/client_default.css?207c042" type="text/css" rel="stylesheet"><link href="https://client.relay.crisp.chat" rel="dns-prefetch" crossorigin=""><link href="https://client.crisp.chat" rel="preconnect" crossorigin=""><script src="https://client.crisp.chat/static/javascripts/client.js?207c042" type="text/javascript" async=""></script><link href="https://client.crisp.chat/static/stylesheets/client_default.css?207c042" type="text/css" rel="stylesheet"></head>
   <body style="width: 100%;height: 100%;position:relative;" class="theme-blue" id="body">
      <noscript><strong>We're sorry but frontend doesn't work properly without JavaScript enabled. Please enable it to continue.</strong></noscript>
      <div id="app" class="playcode"><div class="view">
            <div class="editor">
               <!---->
               <div class="editor-body-wrapper">
                  <div data-v-60470b17="" class="mobile-nav">
                     <!---->
                     <div data-v-60470b17="" class="mobile-nav__menu-btn">
                        <svg data-v-60470b17="" xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--menu">
                           <!---->
                           <use xlink:href="static/img/icons.1f3525a5.svg#menu" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                        </svg>
                     </div>
                     <div data-v-60470b17="" class="mobile-nav__nav w-100 pr-3">
                        <div data-v-e492426c="" data-v-60470b17="" class="nav m-0 min-w-100 w-100">
                           <div data-v-e492426c="" class="nav-main">
                              <div data-v-e492426c="" class="d-flex justify-content-start align-items-center">
                                 <div data-v-e492426c="" class="nav-item">
                                    <button data-v-e492426c="" type="button" class="el-button nav-btn--projects el-button--default el-button--mini is-plain">
                                       <!----><!---->
                                       <span>
                                          <svg data-v-e492426c="" xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--tile">
                                             <!---->
                                             <use xlink:href="static/img/icons.1f3525a5.svg#tile" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                          </svg>
                                       </span>
                                    </button>
                                 </div>
                                 <div data-v-e492426c="" class="nav-item">
                                    <span data-v-e492426c="">
                                       <div role="tooltip" id="el-popover-1495" aria-hidden="true" class="el-popover el-popper bg-bg-2" tabindex="0" style="display: none;">
                                          <!---->
                                          <div data-v-e492426c="" class="file-menu">
                                             <span data-v-e492426c="">
                                                <div role="tooltip" id="el-popover-9298" aria-hidden="true" class="el-popover el-popper" tabindex="0" style="display: none;">
                                                   <!---->
                                                   <div data-v-e492426c="">
                                                      <button data-v-e492426c="" type="button" class="el-button file-menu-item m-0 el-button--default is-plain">
                                                         <!----><!----><span> Empty </span>
                                                      </button>
                                                      <button data-v-e492426c="" type="button" class="el-button file-menu-item m-0 el-button--default is-plain">
                                                         <!----><!----><span> Intro </span>
                                                      </button>
                                                      <div data-v-e492426c="" class="px-2">
                                                         <hr data-v-e492426c="" class="m-0 bg-bg-2">
                                                      </div>
                                                      <button data-v-e492426c="" type="button" class="el-button file-menu-item m-0 el-button--default is-plain">
                                                         <!----><!----><span> Typescript </span>
                                                      </button>
                                                      <button data-v-e492426c="" type="button" class="el-button file-menu-item m-0 el-button--default is-plain">
                                                         <!----><!----><span> React </span>
                                                      </button>
                                                      <button data-v-e492426c="" type="button" class="el-button file-menu-item m-0 el-button--default is-plain">
                                                         <!----><!----><span> Vue </span>
                                                      </button>
                                                      <button data-v-e492426c="" type="button" class="el-button file-menu-item m-0 el-button--default is-plain">
                                                         <!----><!----><span> Canvas </span>
                                                      </button>
                                                      <button data-v-e492426c="" type="button" class="el-button file-menu-item m-0 el-button--default is-plain">
                                                         <!----><!----><span> Image </span>
                                                      </button>
                                                      <button data-v-e492426c="" type="button" class="el-button file-menu-item m-0 el-button--default is-plain">
                                                         <!----><!----><span> JSON </span>
                                                      </button>
                                                      <button data-v-e492426c="" type="button" class="el-button file-menu-item m-0 el-button--default is-plain">
                                                         <!----><!----><span> Pixi.js </span>
                                                      </button>
                                                      <button data-v-e492426c="" type="button" class="el-button file-menu-item m-0 el-button--default is-plain">
                                                         <!----><!----><span> THREE.js </span>
                                                      </button>
                                                   </div>
                                                </div>
                                                <button data-v-e492426c="" type="button" class="el-button file-menu-item m-0 el-button--default is-plain el-popover__reference" aria-describedby="el-popover-9298" tabindex="0">
                                                   <!----><!----><span> New </span>
                                                </button>
                                             </span>
                                             <div data-v-e492426c="" class="px-2">
                                                <hr data-v-e492426c="" class="m-0 bg-bg-1">
                                             </div>
                                             <button data-v-e492426c="" disabled="disabled" type="button" class="el-button file-menu-item m-0 el-button--default is-disabled is-plain">
                                                <!----><!----><span> Make a copy </span>
                                             </button>
                                             <button data-v-e492426c="" disabled="disabled" type="button" class="el-button file-menu-item item--danger m-0 el-button--default is-disabled is-plain">
                                                <!----><!----><span> Delete </span>
                                             </button>
                                             <button data-v-e492426c="" disabled="disabled" type="button" class="el-button file-menu-item m-0 el-button--default is-disabled is-plain">
                                                <!----><!----><span> Save </span>
                                             </button>
                                             <span data-v-e492426c="">
                                                <div role="tooltip" id="el-popover-4610" aria-hidden="true" class="el-popover el-popper" tabindex="0" style="display: none;">
                                                   <!---->
                                                  
                                                </div>
                                                <button data-v-e492426c="" disabled="disabled" type="button" class="el-button file-menu-item m-0 el-button--default is-disabled is-plain el-popover__reference" aria-describedby="el-popover-4610" tabindex="0">
                                                   <!----><!----><span> Share </span>
                                                </button>
                                             </span>
                                             <div data-v-e492426c="" class="pl-3 pr-1_5 d-flex justify-content-between align-content-center" style="padding-top: 3px; padding-bottom: 4px;">
                                                <div data-v-e492426c="" class="font-size-14 cursor-default text-text-3"> Public </div>
                                                <div data-v-e492426c="" role="switch" aria-disabled="true" class="el-switch is-disabled">
                                                   <input type="checkbox" name="" true-value="PUBLIC" false-value="PRIVATE" disabled="disabled" class="el-switch__input"><!----><span class="el-switch__core" style="width: 31px;"></span><!---->
                                                </div>
                                             </div>
                                             <div data-v-e492426c="" class="px-2">
                                                <hr data-v-e492426c="" class="m-0 bg-bg-1">
                                             </div>
                                             <div data-v-e492426c="">
                                                <div data-v-e492426c="" class="project-url">
                                                   <div class="py-1_5 px-3 text-text-2 font-size-12 cursor-default"> https://code.twidev.fr </div>
                                                   <span>
                                                      <div role="tooltip" id="el-popover-4530" aria-hidden="true" class="el-popover el-popper" tabindex="0" style="width: 200px; display: none;">
                                                         <!---->
                                                      </div>
                                                      <div class="px-2 pb-3 d-flex justify-content-between el-popover__reference" aria-describedby="el-popover-4530" tabindex="0">
                                                         <div class="project-url-input el-input is-disabled">
                                                            <!----><input type="text" disabled="disabled" autocomplete="off" placeholder="URL name" class="el-input__inner"><!----><!----><!----><!---->
                                                         </div>
                                                         <!---->
                                                      </div>
                                                   </span>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <button data-v-e492426c="" type="button" class="el-button nav-btn--file el-button--default el-button--mini is-plain el-popover__reference" aria-describedby="el-popover-1495" tabindex="0">
                                          <!----><!---->
                                          <span>
                                             Project 
                                             <svg data-v-e492426c="" xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--arrow-right">
                                                <!---->
                                                <use xlink:href="static/img/icons.1f3525a5.svg#arrow-right" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                             </svg>
                                          </span>
                                       </button>
                                    </span>
                                 </div>
                              </div>
                              <div data-v-e492426c="" class="nav-second w-100 pr-2">
                                 <div data-v-6655b282="" data-v-e492426c="" class="title-cnt project-title">
                                    <div data-v-6655b282="" class="title __disabled">
                                       <div data-v-6655b282="" class="title__val">Untitled</div>
                                       <!---->
                                    </div>
                                    <!---->
                                 </div>
                                 <!---->
                              </div>
                              <div data-v-e492426c="" class="d-flex justify-content-flex-end align-items-center">
                                 <div data-v-e492426c="" class="nav-item">
                                    <button data-v-e492426c="" type="button" class="el-button nav-btn--run el-button--default el-button--mini is-plain">
                                       <!----><!---->
                                       <span>
                                          <svg data-v-e492426c="" xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--earth">
                                             <!---->
                                             <use xlink:href="static/img/icons.1f3525a5.svg#earth" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                          </svg>
                                       </span>
                                    </button>
                                 </div>
                                 <div data-v-e492426c="" class="nav-item">
                                    <button data-v-e492426c="" type="button" class="el-button nav-btn--console el-button--default el-button--mini is-plain">
                                       <!----><!---->
                                       <span>
                                          <svg data-v-e492426c="" xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--console">
                                             <!---->
                                             <use xlink:href="static/img/icons.1f3525a5.svg#console" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                          </svg>
                                       </span>
                                    </button>
                                 </div>
                              </div>
                           </div>
                           <!---->
                        </div>
                     </div>
                  </div>
                  <div class="editor-body">
                    
                     <div data-v-a85c2460="" class="content-wrapper">
                        <div data-v-a85c2460="" class="pl-layout">
                           <div data-v-3c3b1274="" data-component-id="c" data-tabs-count="3" class="pl-panel" style="left: 0%; top: 0%; width: 100%; height: calc(68.7853% - 3px);">
                              <div data-v-3c3b1274="" class="pl-panel-inner">
                                 <div data-v-3c3b1274="" class="pl-panel-tabs">
                                    <!--<div data-v-3c3b1274="" data-id="d" class="pl-panel-tab" style="transform: translate(0px, 0px); width: 115.896px; height: 34px;">
                                       <div data-v-3c3b1274="" class="pl-panel-tab-title"><span data-v-3c3b1274="">index.html</span></div>
                                       <div data-v-3c3b1274="" class="pl-panel-tab-close">
                                          <svg data-v-3c3b1274="" xmlns="http://www.w3.org/2000/svg" class="pl-panel-close-ic svg-icon svg-icon--close">
                                             
                                             <use xlink:href="static/img/icons.1f3525a5.svg#close" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                          </svg>
                                       </div>
                                    </div>
                                    <div data-v-3c3b1274="" data-id="a" class="pl-panel-tab" style="transform: translate(115.896px, 0px); width: 98.5254px; height: 34px;">
                                       <div data-v-3c3b1274="" class="pl-panel-tab-title"><span data-v-3c3b1274="">style.css</span></div>
                                       <div data-v-3c3b1274="" class="pl-panel-tab-close">
                                          <svg data-v-3c3b1274="" xmlns="http://www.w3.org/2000/svg" class="pl-panel-close-ic svg-icon svg-icon--close">
                                    
                                             <use xlink:href="static/img/icons.1f3525a5.svg#close" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                          </svg>
                                       </div>
                                    </div>-->
                                    <div data-v-3c3b1274="" data-id="c" class="pl-panel-tab active" style="transform: translate(0px, 0px); width: 115.896px; height: 34px;">
                                       <div data-v-3c3b1274="" class="pl-panel-tab-title"><span data-v-3c3b1274="">script.twi</span></div>
                                       <div data-v-3c3b1274="" class="pl-panel-tab-close">
                                          <svg data-v-3c3b1274="" xmlns="http://www.w3.org/2000/svg" class="pl-panel-close-ic svg-icon svg-icon--close">
                                             <!---->
                                             <use xlink:href="static/img/icons.1f3525a5.svg#close" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                          </svg>
                                       </div>
                                    </div>
                                 </div>
                                 <div data-v-3c3b1274="" class="pl-panel-content">
                                    <div data-v-3c3b1274="" class="file">
                                       <div class="pl-tools">
                                          <div class="pl-tool-format mr-1">
                                             <button onclick="download()" type="button" class="el-button el-tooltip item el-button--default el-button--mini is-plain" aria-describedby="el-tooltip-1683" tabindex="0">
                                                <!----><!---->
                                                <span>
                                                   <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--document">
                                                      <!---->
                                                      <use xlink:href="static/img/icons.1f3525a5.svg#document" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                                   </svg>
                                                </span>
                                             </button>
                                          </div>
                                          <div class="tool-mode el-dropdown">
                                             <button type="button" class="el-button el-button--default el-button--mini is-plain el-dropdown-selfdefine" aria-haspopup="list" aria-controls="dropdown-menu-4408" role="button" tabindex="0">
                                                <!----><!----><span>TWI</span>
                                             </button>
                                             
                                          </div>
                                       </div>
                                       <div class="editor-wrap">
                                          <div class="editor-cnt is-line-numbers scrollbar-x-hidden scrollbar-y-hidden">
                                                <textarea id="code" style="margin: 0; padding: 0; background-color: #18222d; color: white; border: none; height: 100%; font-size: 15px; letter-spacing: 0.06em; " spellcheck="false"><?php	if($_GET['code'] != null) {
		$code = str_replace('	', "", $_GET['code']);
		$code = str_replace(',', '&#13;&#10;', $code);
		echo $code;
	}?></textarea>
                                             <!---->
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <script type="text/javascript">
                           	document.getElementById('code').addEventListener('keydown', function(e) {
  if (e.key == 'Tab') {
    e.preventDefault();
    var start = this.selectionStart;
    var end = this.selectionEnd;

    // set textarea value to: text before caret + tab + text after caret
    this.value = this.value.substring(0, start) +
      "\t" + this.value.substring(end);

    // put caret at right position again
    this.selectionStart =
      this.selectionEnd = start + 1;
  }
});
                           </script>
                           <!----><!---->
                           <div class="pl-splitter pl-splitter-horizontal" style="left: 0%; top: calc(68.7853% - 3px); width: 100%; height: 6px;">
                              <!---->
                           </div>
                           <div data-v-3c3b1274="" data-component-id="console" data-tabs-count="1" class="pl-panel" style="left: 0%; top: calc(68.7853% + 3px); width: 100%; height: calc(31.2147% - 3px);">
                              <div data-v-3c3b1274="" class="pl-panel-inner">
                                 <div data-v-3c3b1274="" class="pl-panel-tabs">
                                    <div data-v-3c3b1274="" data-id="console" class="pl-panel-tab active" style="transform: translate(0px, 0px); width: 97.0352px; height: 34px;">
                                       <div data-v-3c3b1274="" class="pl-panel-tab-title"><span data-v-3c3b1274="">Console</span></div>
                                       <div data-v-3c3b1274="" class="pl-panel-tab-close">
                                          <svg data-v-3c3b1274="" xmlns="http://www.w3.org/2000/svg" class="pl-panel-close-ic svg-icon svg-icon--close">
                                             <!---->
                                             <use xlink:href="static/img/icons.1f3525a5.svg#close" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                          </svg>
                                       </div>
                                    </div>
                                 </div>

                                 <div data-v-3c3b1274="" class="pl-panel-content">

                                    <div data-v-3c3b1274="" class="console">
                                       <div class="pl-tools">

                                          <div class="pl-tool-live-view" style="margin-right: 10px;">
                                             <!--<button type="button" class="el-button el-button--primary el-button--mini is-plain">
                                               <span> LIVE </span>
                                             </button>-->
                                              <button onclick="stop();" type="button" class="el-button el-button--danger el-button--mini is-plain">
                                                <!----><!----><span> STOP </span>
                                             </button>

                                             <div class="el-dialog__wrapper" style="display: none;">
                                                <div role="dialog" aria-modal="true" aria-label="dialog" class="el-dialog live-limit-popup" style="margin-top: 15vh;">
                                                   <div class="el-dialog__header">
                                                      <span class="el-dialog__title"></span><!---->
                                                   </div>

                                                   <!----><!---->
                                                </div>
                                             </div>
                                          </div>
                                          <div class="pl-tool-reload" style="margin-right: 2px;">
                                             <button onclick="compile()" type="button" class="el-button el-button--default el-button--mini is-plain">
                                                <!----><!---->
                                                <span>
                                                   <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--run">
                                                      <!---->
                                                      <use xlink:href="static/img/icons.1f3525a5.svg#run" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                                   </svg>
                                                </span>
                                             </button>
                                          </div>
                                          <span class="pl-tool-menu">
                                             <div role="tooltip" id="el-popover-8471" aria-hidden="true" class="el-popover el-popper" tabindex="0" style="display: none;">
                                                <!---->
                                                <div class="pt-3 pb-1">
                                                   <div class="px-3 d-flex align-items-center justify-content-between">
                                                      <div class="mr-5 font-size-14 text-nowrap cursor-default"> Reload Delay </div>
                                                      <div class="el-input-px-1 el-input-text-right appearance-none el-input el-input--mini" style="width: 31px;">
                                                         <!----><input type="number" autocomplete="off" step="0.1" max="10" min="0" class="el-input__inner"><!----><!----><!----><!---->
                                                      </div>
                                                   </div>
                                                   <div class="mt-3 px-3 d-flex align-items-center justify-content-between">
                                                      <div class="mr-5 font-size-14 text-nowrap cursor-default"> Auto Clear </div>
                                                      <div role="switch" aria-checked="true" class="el-switch is-checked">
                                                         <input type="checkbox" name="" true-value="true" class="el-switch__input"><!----><span class="el-switch__core" style="width: 31px;"></span><!---->
                                                      </div>
                                                   </div>
                                                   <div class="mt-3 px-3 d-flex align-items-center justify-content-between">
                                                      <div class="mr-5 font-size-14 text-nowrap cursor-default"> Object Viewer </div>
                                                      <div role="switch" aria-checked="true" class="el-switch is-checked">
                                                         <input type="checkbox" name="" true-value="true" class="el-switch__input"><!----><span class="el-switch__core" style="width: 31px;"></span><!---->
                                                      </div>
                                                   </div>
                                                   <div class="mt-3 px-3 d-flex align-items-center justify-content-between">
                                                      <div class="mr-5 font-size-14 text-nowrap cursor-default"> Auto Scroll to Down </div>
                                                      <div role="switch" aria-checked="true" class="el-switch is-checked">
                                                         <input type="checkbox" name="" true-value="true" class="el-switch__input"><!----><span class="el-switch__core" style="width: 31px;"></span><!---->
                                                      </div>
                                                   </div>
                                                   <div class="my-3 px-3 d-flex align-items-center justify-content-between">
                                                      <div class="mr-5 font-size-14 text-nowrap cursor-default"> Loop Protection </div>
                                                      <div role="switch" aria-checked="true" class="el-switch is-checked">
                                                         <input type="checkbox" name="" true-value="true" class="el-switch__input"><!----><span class="el-switch__core" style="width: 31px;"></span><!---->
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <button type="button" class="el-button el-button--default el-button--mini is-plain el-popover__reference" aria-describedby="el-popover-8471" tabindex="0">
                                                <!----><!---->
                                                <span>
                                                   <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon svg-icon--more">
                                                      <!---->
                                                      <use xlink:href="static/img/icons.1f3525a5.svg#more" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                                   </svg>
                                                </span>
                                             </button>
                                          </span>
                                       </div>
                                       <div class="console_wrap">
                                          <div class="console_cnt">
                                             <div class="h-100 w-100 el-scrollbar">
                                                <div class="el-scrollbar__wrap--hidden-default w-100 el-scrollbar__wrap" style="margin-bottom: -17px; margin-right: -17px;">
                                                   <div class="el-scrollbar__view h-100 w-100">
                                                      <div class="console_rows">
                                                         <div id="console" class="console_rows_i __error"></div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="el-scrollbar__bar is-horizontal">
                                                   <div class="el-scrollbar__thumb" style="transform: translateX(0%);"></div>
                                                </div>
                                                <div class="el-scrollbar__bar is-vertical">
                                                   <div class="el-scrollbar__thumb" style="transform: translateY(0%);"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="console_iframe-cnt"><iframe width="100%" height="100%" style="width: 100%; height: 100%; transform: scale(1); transform-origin: 0px 0px;"></iframe></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!----><!----><!---->
                        </div>
                     </div>
                  </div>
                  <div class="el-dialog__wrapper" style="display: none;">
                     <div role="dialog" aria-modal="true" aria-label="dialog" class="el-dialog hotkeys-popup" style="margin-top: 15vh;">
                        <div class="el-dialog__header"><span></span><button type="button" aria-label="Close" class="el-dialog__headerbtn"><i class="el-dialog__close el-icon el-icon-close"></i></button></div>
                        <!----><!---->
                     </div>
                  </div>
               </div>
            </div>
            <div class="nested-view" style="display: none;">
               <!---->
            </div>
         </div>
         <div class="feedback">
            <div class="feedback__label"><span>?</span></div>
         </div>
         <div>
            <div class="el-dialog__wrapper" style="display: none;">
               <div role="dialog" aria-modal="true" aria-label="dialog" class="el-dialog settings-popup" style="margin-top: 15vh;">
                  <div class="el-dialog__header"><span></span><button type="button" aria-label="Close" class="el-dialog__headerbtn"><i class="el-dialog__close el-icon el-icon-close"></i></button></div>
                  <!----><!---->
               </div>
            </div>
         </div>
         <div>
            <div class="el-dialog__wrapper" style="display: none;">
               <div role="dialog" aria-modal="true" aria-label="dialog" class="el-dialog welcome-popup" style="margin-top: 15vh;">
                  <div class="el-dialog__header">
                     <span></span><!---->
                  </div>
                  <!----><!---->
               </div>
            </div>
         </div>
      </div>
      <script src="static/js/chunk-vendors.aa89ab4b.js"></script><script src="static/js/app.de189fc1.js"></script>
      <div class="monaco-aria-container">
         <div class="monaco-alert" role="alert" aria-atomic="true"></div>
         <div class="monaco-status" role="status" aria-atomic="true"></div>
      </div>
      <div class="crisp-client">
         <div class="cc-l3zb">
            <div class="cc-lcor">
               <style type="text/css">.crisp-client .cc-kv6t .cc-6zjc,
                  .crisp-client .cc-kv6t .cc-1mk2:hover {
                  color: #ffffff !important;
                  }
                  .crisp-client .cc-kv6t .cc-10m9,
                  .crisp-client .cc-kv6t .cc-17tf:hover {
                  color: #0d1319 !important;
                  }
                  .crisp-client .cc-kv6t .cc-dkda,
                  .crisp-client .cc-kv6t .cc-r4ie:hover {
                  color: #17212c !important;
                  }
                  .crisp-client .cc-kv6t .cc-jq4y,
                  .crisp-client .cc-kv6t .cc-5lan:hover {
                  color: #213040 !important;
                  }
                  .crisp-client .cc-kv6t .cc-k5w4 {
                  background-color: #ffffff !important;
                  }
                  .crisp-client .cc-kv6t .cc-5ekd {
                  background-color: #0d1319 !important;
                  }
                  .crisp-client .cc-kv6t .cc-16jc {
                  background-color: #1c2836 !important;
                  }
                  .crisp-client .cc-kv6t .cc-1ada,
                  .crisp-client .cc-kv6t .cc-ew5j:before,
                  .crisp-client .cc-kv6t .cc-ew5j:after {
                  background-color: #213040 !important;
                  }
                  .crisp-client .cc-kv6t .cc-y5jx {
                  background-color: #EFF5FE !important;
                  }
                  .crisp-client .cc-kv6t .cc-y6ot,
                  .crisp-client .cc-kv6t .cc-183m:hover {
                  background-color: #F5F8FB !important;
                  }
                  .crisp-client .cc-kv6t .cc-1ybb {
                  background-image: linear-gradient(125deg, #213040 -10%, #0d1319 100%) !important;
                  }
                  .crisp-client .cc-kv6t .cc-ofgq,
                  .crisp-client .cc-kv6t .cc-fg2d:hover {
                  border-color: #ffffff !important;
                  }
                  .crisp-client .cc-kv6t .cc-2ydi {
                  border-color: rgba(13, 19, 25, 0.175) !important;
                  }
                  .crisp-client .cc-kv6t .cc-1aev,
                  .crisp-client .cc-kv6t .cc-2hzo:hover,
                  .crisp-client .cc-kv6t .cc-18sf:before,
                  .crisp-client .cc-kv6t .cc-18sf:after {
                  border-color: #213040 !important;
                  }
                  .crisp-client .cc-kv6t .cc-1nph {
                  border-color: rgba(33, 48, 64, 0.15) !important;
                  }
                  .crisp-client .cc-kv6t .cc-1o96 {
                  border-top-color: #213040 !important;
                  }
                  .crisp-client .cc-kv6t .cc-ve3u,
                  .crisp-client .cc-kv6t .cc-1nmg:hover {
                  border-color: #EFF5FE !important;
                  }
                  .crisp-client .cc-kv6t .cc-clw4::placeholder {
                  color: #293c50 !important;
                  }
                  .crisp-client .cc-kv6t .cc-2n8m::placeholder {
                  color: #293c50 !important;
                  }
                  .crisp-client .cc-kv6t .cc-3x4f,
                  .crisp-client .cc-kv6t .cc-1afs:hover,
                  .crisp-client .cc-kv6t .cc-3x4f:hover,
                  .crisp-client .cc-kv6t .cc-1afs:active,
                  .crisp-client .cc-kv6t .cc-3x4f:active,
                  .crisp-client .cc-kv6t .cc-1c1d:hover .cc-1f87,
                  .crisp-client .cc-kv6t .cc-1c1d .cc-1f87:active {
                  background: #0d1319 !important;
                  }
                  .crisp-client .cc-kv6t .cc-4xbu,
                  .crisp-client .cc-kv6t .cc-caj5:hover {
                  background: #17212c !important;
                  }
                  .crisp-client .cc-kv6t .cc-4xbu:hover,
                  .crisp-client .cc-kv6t .cc-caj5:active {
                  background: #121a23 !important;
                  }
                  .crisp-client .cc-kv6t .cc-4xbu:active {
                  background: #0d1319 !important;
                  }
                  .crisp-client .cc-kv6t .cc-g73w:hover .cc-199t {
                  background: #17212c !important;
                  }
                  .crisp-client .cc-kv6t .cc-g73w .cc-199t:active {
                  background: #121a23 !important;
                  }
                  .crisp-client .cc-kv6t .cc-vuur,
                  .crisp-client .cc-kv6t .cc-7rgf[data-active="true"] {
                  background: #213040 !important;
                  }
                  .crisp-client .cc-kv6t .cc-vuur:hover,
                  .crisp-client .cc-kv6t .cc-7rgf[data-active="true"]:active {
                  background: #1c2836 !important;
                  }
                  .crisp-client .cc-kv6t .cc-vuur:active {
                  background: #17212c !important;
                  }
                  .crisp-client .cc-kv6t .cc-1gmp::selection,
                  .crisp-client .cc-kv6t .cc-1gmp *::selection {
                  color: #191919 !important;
                  background-color: #2c4056 !important;
                  }
               </style>
            </div>
            <div class="cc-1kny">
               <style type="text/css">.crisp-client .cc-kv6t {
                  z-index: 1000000;
                  }
               </style>
            </div>
            <div class="cc-1wmh">
               <style type="text/css">.crisp-client .cc-kv6t[data-full-view="false"][data-position-reverse="false"] .cc-1xry .cc-unoo,
                  .crisp-client .cc-kv6t[data-full-view="false"][data-position-reverse="false"] .cc-1xry .cc-ge4v {
                  margin-right: -10px !important;
                  }
                  .crisp-client .cc-kv6t[data-full-view="false"][data-position-reverse="false"] .cc-1xry .cc-unoo .cc-1c9v .cc-1bue {
                  margin-right: -10px !important;
                  }
                  .crisp-client .cc-kv6t[data-full-view="false"][data-position-reverse="true"] .cc-1xry .cc-unoo,
                  .crisp-client .cc-kv6t[data-full-view="false"][data-position-reverse="true"] .cc-1xry .cc-ge4v {
                  margin-left: -10px !important;
                  }
                  .crisp-client .cc-kv6t[data-full-view="false"][data-position-reverse="true"] .cc-1xry .cc-unoo .cc-1c9v .cc-1bue {
                  margin-left: -10px !important;
                  }
               </style>
               <style type="text/css">.crisp-client .cc-kv6t[data-full-view="false"] .cc-1xry .cc-unoo,
                  .crisp-client .cc-kv6t[data-full-view="false"] .cc-1xry .cc-ge4v {
                  margin-bottom: -15px !important;
                  }
                  .crisp-client .cc-kv6t[data-full-view="false"] .cc-1xry .cc-unoo .cc-1c9v .cc-1bue {
                  margin-bottom: -15px !important;
                  }
               </style>
            </div>
         </div>
         
      </div>
      <div role="tooltip" id="el-tooltip-1683" aria-hidden="true" class="el-tooltip__popper is-dark" style="transform-origin: center top; z-index: 2001; display: none;">
         Format Document (Ctrl/Cmd + Shift + L)
         <div x-arrow="" class="popper__arrow" style="left: 183.75px;"></div>
      </div>
   
<div class="crisp-client"><div class="cc-l3zb"><div class="cc-lcor"><style type="text/css">.crisp-client .cc-kv6t .cc-6zjc,
.crisp-client .cc-kv6t .cc-1mk2:hover {
  color: #ffffff !important;
}

.crisp-client .cc-kv6t .cc-10m9,
.crisp-client .cc-kv6t .cc-17tf:hover {
  color: #0d1319 !important;
}

.crisp-client .cc-kv6t .cc-dkda,
.crisp-client .cc-kv6t .cc-r4ie:hover {
  color: #17212c !important;
}

.crisp-client .cc-kv6t .cc-jq4y,
.crisp-client .cc-kv6t .cc-5lan:hover {
  color: #213040 !important;
}

.crisp-client .cc-kv6t .cc-k5w4 {
  background-color: #ffffff !important;
}

.crisp-client .cc-kv6t .cc-5ekd {
  background-color: #0d1319 !important;
}

.crisp-client .cc-kv6t .cc-16jc {
  background-color: #1c2836 !important;
}

.crisp-client .cc-kv6t .cc-1ada,
.crisp-client .cc-kv6t .cc-ew5j:before,
.crisp-client .cc-kv6t .cc-ew5j:after {
  background-color: #213040 !important;
}

.crisp-client .cc-kv6t .cc-y5jx {
  background-color: #EFF5FE !important;
}

.crisp-client .cc-kv6t .cc-y6ot,
.crisp-client .cc-kv6t .cc-183m:hover {
  background-color: #F5F8FB !important;
}

.crisp-client .cc-kv6t .cc-1ybb {
  background-image: linear-gradient(125deg, #213040 -10%, #0d1319 100%) !important;
}

.crisp-client .cc-kv6t .cc-ofgq,
.crisp-client .cc-kv6t .cc-fg2d:hover {
  border-color: #ffffff !important;
}

.crisp-client .cc-kv6t .cc-2ydi {
  border-color: rgba(13, 19, 25, 0.175) !important;
}

.crisp-client .cc-kv6t .cc-1aev,
.crisp-client .cc-kv6t .cc-2hzo:hover,
.crisp-client .cc-kv6t .cc-18sf:before,
.crisp-client .cc-kv6t .cc-18sf:after {
  border-color: #213040 !important;
}

.crisp-client .cc-kv6t .cc-1nph {
  border-color: rgba(33, 48, 64, 0.15) !important;
}

.crisp-client .cc-kv6t .cc-1o96 {
  border-top-color: #213040 !important;
}

.crisp-client .cc-kv6t .cc-ve3u,
.crisp-client .cc-kv6t .cc-1nmg:hover {
  border-color: #EFF5FE !important;
}

.crisp-client .cc-kv6t .cc-clw4::placeholder {
  color: #293c50 !important;
}

.crisp-client .cc-kv6t .cc-2n8m::placeholder {
  color: #293c50 !important;
}

.crisp-client .cc-kv6t .cc-3x4f,
.crisp-client .cc-kv6t .cc-1afs:hover,
.crisp-client .cc-kv6t .cc-3x4f:hover,
.crisp-client .cc-kv6t .cc-1afs:active,
.crisp-client .cc-kv6t .cc-3x4f:active,
.crisp-client .cc-kv6t .cc-1c1d:hover .cc-1f87,
.crisp-client .cc-kv6t .cc-1c1d .cc-1f87:active {
  background: #0d1319 !important;
}

.crisp-client .cc-kv6t .cc-4xbu,
.crisp-client .cc-kv6t .cc-caj5:hover {
  background: #17212c !important;
}

.crisp-client .cc-kv6t .cc-4xbu:hover,
.crisp-client .cc-kv6t .cc-caj5:active {
  background: #121a23 !important;
}

.crisp-client .cc-kv6t .cc-4xbu:active {
  background: #0d1319 !important;
}

.crisp-client .cc-kv6t .cc-g73w:hover .cc-199t {
  background: #17212c !important;
}

.crisp-client .cc-kv6t .cc-g73w .cc-199t:active {
  background: #121a23 !important;
}

.crisp-client .cc-kv6t .cc-vuur,
.crisp-client .cc-kv6t .cc-7rgf[data-active="true"] {
  background: #213040 !important;
}

.crisp-client .cc-kv6t .cc-vuur:hover,
.crisp-client .cc-kv6t .cc-7rgf[data-active="true"]:active {
  background: #1c2836 !important;
}

.crisp-client .cc-kv6t .cc-vuur:active {
  background: #17212c !important;
}

.crisp-client .cc-kv6t .cc-1gmp::selection,
.crisp-client .cc-kv6t .cc-1gmp *::selection {
  color: #191919 !important;
  background-color: #2c4056 !important;
}</style></div><div class="cc-1kny"><style type="text/css">.crisp-client .cc-kv6t {
  z-index: 1000000;
}
</style></div><div class="cc-1wmh"><style type="text/css">.crisp-client .cc-kv6t[data-full-view="false"][data-position-reverse="false"] .cc-1xry .cc-unoo,
.crisp-client .cc-kv6t[data-full-view="false"][data-position-reverse="false"] .cc-1xry .cc-ge4v {
  margin-right: -10px !important;
}

.crisp-client .cc-kv6t[data-full-view="false"][data-position-reverse="false"] .cc-1xry .cc-unoo .cc-1c9v .cc-1bue {
  margin-right: -10px !important;
}

.crisp-client .cc-kv6t[data-full-view="false"][data-position-reverse="true"] .cc-1xry .cc-unoo,
.crisp-client .cc-kv6t[data-full-view="false"][data-position-reverse="true"] .cc-1xry .cc-ge4v {
  margin-left: -10px !important;
}

.crisp-client .cc-kv6t[data-full-view="false"][data-position-reverse="true"] .cc-1xry .cc-unoo .cc-1c9v .cc-1bue {
  margin-left: -10px !important;
}
</style><style type="text/css">.crisp-client .cc-kv6t[data-full-view="false"] .cc-1xry .cc-unoo,
.crisp-client .cc-kv6t[data-full-view="false"] .cc-1xry .cc-ge4v {
  margin-bottom: -15px !important;
}

.crisp-client .cc-kv6t[data-full-view="false"] .cc-1xry .cc-unoo .cc-1c9v .cc-1bue {
  margin-bottom: -15px !important;
}
</style></div></div></body></html>
<script type="text/javascript">
   


var out = document.getElementById("console");

    function share() {
      var sharecontent = "";

      var sharecode = document.getElementById("code").value;

      sharecontent = sharecode.split("\n");


      document.getElementById("share").innerHTML = "<a href='https://code.twidev.fr/?code=" + sharecontent + "' target='blank_'>Share your code : https://code.twidev.fr/?code=" + sharecontent + "</a>";
   }

   function stop() {
        clearInterval();
        clearTimeout();

        loops.splice(0,loops.length);
        conditons.splice(0,loops.length);
        functions.clear();
        variables.clear();

        clearConsole();
   }

   function getShare() {
      var sharecontent = "";

      var sharecode = document.getElementById("code").value;

      sharecontent = sharecode.split("\n");

      window.location.href = "?code=" + sharecontent;
   }

    function download() {
        var sharecontent = "";

        var sharecode = document.getElementById("code").value;

        sharecontent = sharecode.split("\n");

        window.location.href = "?download=true&code=" + sharecontent;
    }

    function appendLog(log) {
        out.innerHTML += log + "<br/>";
    }

    function isLetter(str) {
        return str.match(/[a-z]/i);
    }

    function isLetterOrNumber(str) {
        return str.match(/[a-z]/i) || str.match(/[1-9]/i);
    }

    function split(str) {
        var array = [];
        var iterator = "", isInQuote = false, hasBlocker = false, end = false, putQuote = false, argLevel = 0;

        for(var i = 0; i < str.length; i++) {
            var char = str.charAt(i);

            if(char == " ") {
                if(!isInQuote) {
                    if(!end) {
                        end = true;
                    }else{
                        iterator += char;
                    }
                }else{
                    iterator += char;
                }
            }else if(char == "=" && !isInQuote) {
                var thechar = iterator.charAt(iterator.length - 1);
                if(isLetterOrNumber(thechar) || thechar == '"') {
                    if(iterator != "") {
                        array.push(iterator);
                    }
                    array.push(char);
                    iterator = "";
                    end = false;
                } else {
                    iterator += char;
                    array.push(iterator);
                    iterator = "";
                    end = false;
                }
            }else if(char =="," && !isInQuote) {
                hasBlocker = true;
                iterator += char;
            }else if(char == "+" && !isInQuote) {
                hasBlocker = true;
                iterator += char;
            }else if(char == "*" && !isInQuote) {
                hasBlocker = true;
                iterator += char;
            }else if(char == "-" && !isInQuote) {
                hasBlocker = true;
                iterator += char;
            }else if(char == "(" && !isInQuote) {
                argLevel++;
                iterator += char;
            }else if(char == ")" && !isInQuote) {
                argLevel--;
                iterator += char;
            }else if(char == '"') {
                if(argLevel == 0 && !isInQuote && !hasBlocker) {
                    if(iterator != "")
                        array.push(iterator);
                    iterator = char;
                    end = false;  
                }else{
                    iterator += char;
                }
            }else{
                if(end) {
                    if(!hasBlocker) {
                        if(iterator != "")
                            array.push(iterator);
                        iterator = char;
                        end = false;
                    }else{
                        iterator += char;
                    }
                }else{
                    iterator += char;
                }
            }
        }

        if(iterator != "")
            array.push(iterator);
        return array;
    }

    function resplit(string, maxLevel) {
        var str = string.toString();

        if(str.charAt(0) == "(" && str.charAt(str.length - 1) == ")") {
            str = str.slice(1, str.length);
            str = str.slice(0, str.length - 1);
        }

        var array = [];
        var iterator = "", level = 0, quote = false;

        for(var i = 0; i < str.length; i++) {
            var char = str.charAt(i);

            if(char == "(") {
                if(level < maxLevel && !quote) {
                    if(iterator != "")
                        array.push(iterator);
                    array.push(char);
                    iterator = "";
                }else{
                    iterator += char;
                }
                
                level++;
            }else if(char == ")") {
                level--;

                if(level < maxLevel && !quote) {
                    if(iterator != "")
                        array.push(iterator);
                    array.push(char);
                    iterator = "";
                }else {
                    iterator += char;
                }
            }else if(char == "=") {
                if(level < maxLevel && !quote) {
                    var thechar = iterator.charAt(iterator.length - 1);

                    if(isLetterOrNumber(thechar) || thechar == '"') {
                        if(iterator != "") {
                            array.push(iterator);
                        }
                        iterator = char;
                    }else{
                        iterator += char;
                        array.push(iterator);
                        iterator = "";
                    }
                }else{
                    iterator += char;
                }
            }else if(char == "+") {
                if(level < maxLevel && !quote) {
                    if(iterator != "")
                        array.push(iterator);
                    array.push(char);
                    iterator = "";
                }else{
                    iterator += char;
                }
            }else if(char == "*") {
                if(level < maxLevel && !quote) {
                    if(iterator != "")
                        array.push(iterator);
                    array.push(char);
                    iterator = "";
                }else{
                    iterator += char;
                }
            }else if(char == "-") {
                if(level < maxLevel && !quote) {
                    if(iterator != "")
                        array.push(iterator);
                    array.push(char);
                    iterator = "";
                }else{
                    iterator += char;
                }
            }else if(char == "/") {
                if(level < maxLevel && !quote) {
                    if(iterator != "")
                        array.push(iterator);
                    array.push(char);
                    iterator = "";
                }else{
                    iterator += char;
                }
            }else if(char == "!") {
                if(level < maxLevel && !quote) {
                    if(iterator != "")
                        array.push(iterator);
                    
                    if(str.charAt(i+1) != "=") {
                        array.push(char);
                        iterator = "";
                    }else{
                        iterator = char;
                    }
                }else{
                    iterator+= char;
                }
            }else if(char == "&") {
                if(level < maxLevel && !quote) {
                    if(iterator != "" && iterator != "&")
                        array.push(iterator);
                    
                    if(str.charAt(i+1) != "&") {
                        iterator += char;
                        array.push(iterator);
                        iterator = "";
                    }else{
                        iterator = char;
                    }
                }else{
                    iterator += char;
                }
            }else if(char == " ") {
                if(level < maxLevel && !quote) {
                    if(iterator != "")
                        array.push(iterator);
                    iterator = "";

                }else{
                    iterator += " ";
                }
            }else if(char == '"') {
                quote = !quote;
                iterator += '"';
            }else{
                iterator += char;
            }
        }
        array.push(iterator);

        return array;
    }

    function Node(p) {
        this.parent = p;
        this.children = [];
        this.buddy = null;
        this.variables = new Object;
        this.condition = null;
        this.repeat = false;
        this.args = [];
        this.interval = null;
        this.name = "";

        this.childFromName = function(str) {
            for(var i = 0; i < this.children.length; i++) {
                if(this.children[i].name == str)
                    return this.children[i];
            }
        };

        this.clear = function() {
            this.parent = null;
            this.children.length = 0;
            this.variables = new Object;
            this.condition = null;
            this.interval = null;
            this.repeat = false;
            this.name = "";
        };

        this.setupVariables = function() {
            if(this.parent == null)
                return;
            
            for(var i in this.parent.variables) {
                this.variables[i] = this.parent.variables[i];
            }
        };

    }

    function Instruction(t, a, p) {
        this.type = t;
        this.args = a;
        this.node = p;
    }

    var root = new Node(null);

    function getValueString(str) {
        var mySubString = str.substring(
            str.lastIndexOf('("') + 2, 
            str.lastIndexOf('")')
        );
        return mySubString.replaceAll(",", " ");
    }

    function getValueArgs(str) {
        var mySubString = str.substring(
            str.lastIndexOf('(') + 1, 
            str.lastIndexOf(')')
        );

        return mySubString.replaceAll(",", " ");
    }


    function getValueContent(str) {
        var mySubString = str.substring(
            str.lastIndexOf('"') + 3, 
            str.lastIndexOf('"')
        );

        return mySubString;
    }
    
    
    var functions = new Map();
    var loops = new Array();
    var conditons = new Array();
    var variables = new Map();

    function clearConsole() {
        out.innerHTML = "";
    }

    function action(content) {
        
            if(content == "") {
                return;
            }

            fun = content.replaceAll(" ", "");

            var words = split(fun);

            var words_space = split(content);

            var workingNode = root;

            var args = words.toString().split(".");
            var args_space = words_space.toString().split(".");

            if(words[0].replaceAll(/\s/g, '').startsWith("console")) {

                if(args.length < 2) return;

                if(args[1].startsWith("info")) {
                    var result = getValueString(args_space[1]);

                    var va = result.split(" ");

                    for(var va_i = 0; va_i < va.length; va_i++) {
                        if(variables.has(va[va_i].replaceAll("$", "")) && va[va_i].startsWith("$")) {
                            result = result.replaceAll(va[va_i], variables.get(va[va_i].replaceAll("$", "")));
                        }
                    }

                    appendLog(result);
                }
            }else if(content.replaceAll(/\s/g, '').startsWith("background")) {
   

                if(args[1].startsWith("setColor")) {   
                    var color = getValueString(args_space[1]);
                
    
                    if(color.startsWith("secret")) {
                        appendLog("SECRET COLOR");
                      

                        bg();

                    }else if(color.startsWith("reset")) {

                        document.getElementById("code").style.background = "#18222d";

                    }else{
                        document.getElementById("code").style.background = color;

                    
                    }

                }
                
            }else if(content.replaceAll(/\s/g, '').startsWith("new") || content.replaceAll(/\s/g, '').startsWith("set")) {

                var name = words[0].replaceAll("new", "");
                var contentIn = '';

                for(var i = 3; i < words_space.length; i++) {
                	if(i == (words_space.length - 2)) {
                		contentIn += words_space[i];
                	}else{
						contentIn += (words_space[i] + ' ');	
                	}
                }

                contentIn = contentIn.substring(0, (contentIn.length - 1));

                if(contentIn.replaceAll('"', '').startsWith("prompt")) {
                    if(!content.includes('"')) {
                            contentIn = prompt();
                        }else{
                            contentIn = prompt(getValueString(content));
                    }
                }

                variables.set(name.replaceAll(/\s/g, ''), contentIn.replaceAll('"', ''));
            }else{

                var isFunction = false;

                functions.forEach(function(value, key) {
                    if(!value.children.includes(content) && content != "end") {
                        if(functions.has(content.replaceAll("()", "").replaceAll(/\s/g, ''))) {
                            isFunction = true;
                        }
                    }
                });

                if(isFunction) {
                    for(var f = 0; f < functions.get(content.replaceAll("()", "").replaceAll(/\s/g, '')).children.length; f++) {
                        action(functions.get(content.replaceAll("()", "").replaceAll(/\s/g, '')).children[f]);
                        return;
                    }
                }



            }
    }

    function compile() {
        root.clear();

        functions.clear();

        var code = document.getElementById("code").value;

        var lines = code.split("\n");

        var workingNode = root;

        for(var i = 0; i < lines.length; i++) {
            var line = lines[i];

            if(line == "")
                continue;

            var words = split(line);

            var args = words.toString().split(".");

            if(words[0].startsWith("function")) {
                var name = getValueArgs(args[0]);

                var node = new Node(root);

                node.name = name;

                var search = true;

                for(var l = (i+1); l < lines.length; l++) {
                    if(lines[l] == "end") {
                        search = false;
                    }else if(search) {
                        node.children.push(lines[l]);
                    }
                }

                functions.set(name, node);

                continue;
            }else if(words[0].startsWith("if")) {
                var parameters = getValueArgs(line);

                var argsif = parameters.split(" ");

                var comparable = argsif[0];

                var compare_type = argsif[1];

                var comparer = argsif[2];

				if(variables.has(comparable) ) {
					comparable = variables.get(comparable);
                }

                if(variables.has(comparer) ) {
					comparer = variables.get(comparer);
                }

                if(compare_type == "=") {
                	if(comparable == comparer.replaceAll('"', '')) {
						var condition = new Node();
                		search = true;

                		for(var l = (i+1); l < lines.length; l++) {
                   			 if(lines[l] == "end") {
                       			search = false;
                    		 }else if(search) {
                        		condition.children.push(lines[l]);
                   			 }
                   		}

                   		conditons.push(condition);

						for(var f = 0; f < condition.children.length; f++) {
                        	action(condition.children[f]);
                    	}
                   	}
                }

            }else if(words[0].startsWith("loop")) {
                var time = getValueArgs(args[0]);

                var loop = new Node();

                search = true;

                for(var l = (i+1); l < lines.length; l++) {
                    if(lines[l] == "end") {
                        search = false;
                    }else if(search) {
                        loop.children.push(lines[l]);
                    }
                }

                loops.push(loop);
                
                loop.interval = setInterval(() => {
                    for(var f = 0; f < loop.children.length; f++) {
                        if(!loops.includes(loop)) {
                            clearInterval(loop.interval);
                            return;
                        }
                        action(loop.children[f]);
                    }
                }, time);

                continue;
            
            }else if(words[0].startsWith("wait")) {
                var time = getValueArgs(args[0]);

                var loop = new Node();

                search = true;

                for(var l = (i+1); l < lines.length; l++) {
                    if(lines[l] == "end") {
                        search = false;
                    }else if(search) {
                        loop.children.push(lines[l]);
                    }
                }

                loops.push(loop);
                
                setTimeout(() => {
                    for(var f = 0; f < loop.children.length; f++) {
                        action(loop.children[f]);
                    }
                    loops.splice(loop);
                }, time);
            }else{

                var isFunction = false;

                functions.forEach(function(value, key) {
                    if(!value.children.includes(line) && line != "end") {
                        if(functions.has(line.replaceAll("()", ""))) {
                            isFunction = true;
                        }
                    }
                });

                if(isFunction) {
                    for(var f = 0; f < functions.get(line.replaceAll("()", "")).children.length; f++) {
                        action(functions.get(line.replaceAll("()", "")).children[f]);
                    }
                }else{
                    search = true;

                    for(var l = (i + 1); l < lines.length; l++) {
                        if(lines[l] == "end") {
                            for(var h = i; h >= 0; h--) {
                                if(lines[h] != undefined && lines[h].startsWith("function")) {
                                    search = false;
                                }
                            }
                        }
                    }

                    for(var l = (i + 1); l < lines.length; l++) {
                        if(lines[l] == "end") {
                            for(var h = i; h >= 0; h--) {
                                if(lines[h] != undefined && lines[h].startsWith("loop")) {
                                    search = false;
                                }
                            }
                        }
                    }

                    for(var l = (i + 1); l < lines.length; l++) {
                        if(lines[l] == "end") {
                            for(var h = i; h >= 0; h--) {
                                if(lines[h] != undefined && lines[h].startsWith("wait")) {
                                    search = false;
                                }
                            }
                        }
                    }

					for(var l = (i + 1); l < lines.length; l++) {
                        if(lines[l] == "end") {
                            for(var h = i; h >= 0; h--) {
                                if(lines[h] != undefined && lines[h].startsWith("if")) {
                                    search = false;
                                }
                            }
                        }
                    }

                    if(search == true) {
                        action(line);
                    }
                }
                continue;

            }

        }
    
}


</script>