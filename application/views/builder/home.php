<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Smart Media</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="<?= $builderAssets; ?>bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="<?= $builderAssets; ?>css/flat-ui.css" rel="stylesheet">
    
    <link href="<?= $builderAssets; ?>css/style.css" rel="stylesheet">
    
    <link href="<?= $builderAssets; ?>css/spectrum.css" rel="stylesheet">
    <link href="<?= $builderAssets; ?>css/chosen.css" rel="stylesheet">
    
    <link rel="shortcut icon" href="images/favicon.png"> 
    
    <!-- Font Awesome -->
    <link href="<?= $builderAssets; ?>css/font-awesome.css" rel="stylesheet">
    
    <link href="<?= $builderAssets; ?>js/redactor/redactor.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
    <div class="menu" id="menu">
    
      <div class="main" id="main">
                    
        <h3>Blocks</h3>
        
        <ul id="elements">
          <li><a href="#" id="all">All Blocks</a></li>
        </ul>
        
      <a href="#" class="toggle"><span class="list-icon"><i></i><i></i><i></i></span></a>
      
        <hr>
        
        <h3>Pages</h3>
        
        <ul id="pages">
          <li style="display: none;" id="newPageLI">
            <input type="text" value="index" name="page">
            <span class="pageButtons">
              <a href="" class="fileEdit"><span class="fui-new"></span></a>
              <a href="" class="fileDel"><span class="fui-cross"></span></a>
              <a class="btn btn-xs btn-primary fileSave" href="#"><span class="fui-check"></span></a>
            </span>
          </li>
          <li class="active">
            <a href="#page1">index</a>
            <span class="pageButtons">
              <a href="" class="fileEdit"><span class="fui-new"></span></a>
              <a class="btn btn-xs btn-primary fileSave" href="#"><span class="fui-check"></span></a>
            </span>
          </li>
        </ul>
    
        <div class="sideButtons clearfix">
          <a href="#" class="btn btn-success btn-sm btn-left" id="addPage">Add</a>
          <a href="#exportModal" data-toggle="modal" class="btn btn-primary btn-sm disabled actionButtons btn-right">Export</a>
        </div>
    
      </div><!-- /.main -->
    
      <div class="second" id="second">
      
        <ul id="elements">
        
        </ul>
  
      </div><!-- /.secondSide -->
    
    </div><!-- /.menu -->
  
    <div class="container">
      
      <header class="clearfix" data-spy="affix" data-offset-top="60" data-offset-bottom="200">
      
        <a href="#" id="clearScreen" class="btn btn-danger pull-right disabled actionButtons"><span class="fui-trash"></span>Hapus halaman</a>
      
      <a href="#previewModal" id="preview" data-toggle="modal" class="btn btn-primary pull-right disabled actionButtons" style="display: none"><span class="fui-window"></span> Lihat Halaman</a>
    
        <!-- <a href="#exportModal" id="exportPage" data-toggle="modal" class="btn btn-primary pull-right disabled actionButtons"><span class="fui-export"></span> Export</a> -->
      
      <a href="#" id="savePage" class="btn btn-primary pull-right disabled actionButtons"><span class="fui-check"></span> <span class="bLabel">Tidak ada perubahan!</span></a>

      <a href="/link/to/my/website" class="btn btn-primary pull-right actionButtons" target="_blank"><span class="fa fa-link"></span>&nbsp; Lihat Website</a>

      <a href="<?= base_url(); ?>member" class="btn btn-primary pull-right actionButtons"><span class="fa fa-dashboard"></span>&nbsp; Dashboard</a>
      
        <div class="modes">
        
          <b>Building mode:</b>
          <label class="radio primary first">
            <input type="radio" name="mode" id="modeBlock" value="block" data-toggle="radio" disabled="" checked="">
              Elements
          </label>
          <label class="radio primary first">
            <input type="radio" name="mode" id="modeContent" value="content" data-toggle="radio" disabled="">
              Content
          </label>
          <label class="radio primary first">
            <input type="radio" name="mode" id="modeStyle" value="styling" data-toggle="radio" disabled="">
              Details
          </label>
        
        </div>
      
      </header>
      
      <div class="screen" id="screen">
        
        <div class="toolbar">
        
          <div class="buttons clearfix">
            <span class="left"></span>
            <span class="left"></span>
            <span class="left"></span>
          </div>
          
          <div class="title" id="pageTitle">
            <span><span>index</span>.html</span>
          </div>
          
        </div>
        
        <div id="frameWrapper" class="frameWrapper empty">
          <div id="pageList">
            <ul style="display: block;" id="page1"></ul>
          </div>
          <div class="start" id="start">
            <span>Bangun halaman keren dengan menyeret element di kiri ke kanvas!</span>
          </div>
        </div>
      
      </div><!-- /.screen -->
      
    </div><!-- /.container -->
    
    <div id="styleEditor" class="styleEditor">
    
      <a href="#" class="close"><span class="fui-cross-inverted"></span></a>
      
      <h3><span class="fui-new"></span> Detail Editor</h3>
      
      <ul class="breadcrumb">
        <li>Editing:</li>
      <li class="active" id="editingElement">p</li>
    </ul>
    
    <ul class="nav nav-tabs" id="detailTabs">
      <li class="active"><a href="#tab1"><span class="fui-new"></span> Style</a></li>
        <li style="display: none;"><a href="#link_Tab" id="link_Link"><span class="fui-clip"></span> Link</a></li>
        <li style="display: none;"><a href="#image_Tab" id="img_Link"><span class="fui-image"></span> Image</a></li>
        <li style="display: none;"><a href="#icon_Tab" id="icon_Link"><span class="fa fa-flag"></span> Icons</a></li>
        <li style="display: none;"><a href="#video_Tab" id="video_Link"><span class="fa fa-youtube-play"></span> Video</a></li>
    </ul><!-- /tabs -->
      
      <div class="tab-content">
      
        <div class="tab-pane active" id="tab1">
        
        <form class="" role="form" id="stylingForm">
        
          <div id="styleElements">
        
              <div class="form-group clearfix" style="display: none;" id="styleElTemplate">
                <label for="" class="control-label"></label>
                  <input type="text" class="form-control input-sm" id="" placeholder="">
              </div>
            
            </div>
          
        </form>
        
      </div>
      
      <!-- /tabs -->
      <div class="tab-pane link_Tab" id="link_Tab">
          
          <select id="internalLinksDropdown">
            <option value="#">Choose a page</option>
            <option value="index.html">index</option>
          </select>
          
          <p class="text-center or">
            <span>OR</span>
          </p>
          
          <select id="pageLinksDropdown">
            <option value="#">Choose a block (one page sites)</option>
          </select>
          
          <p class="text-center or">
            <span>OR</span>
          </p>
          
          <input type="text" class="form-control" id="internalLinksCustom" placeholder="http://somewhere.com/somepage" value="">
          
      </div>
      
      <!-- /tabs -->
      <div class="tab-pane imageFileTab" id="image_Tab">
          
          <label>Enter image path:</label>
          
          <input type="text" class="form-control" id="imageURL" placeholder="Enter an image URL" value="">
          
          <p class="text-center or">
            <span>OR</span>
          </p>
          
          <form id="imageUploadForm" action="iupload.php">
          
            <label>Upload image:</label>
          
            <div class="form-group">
                <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" style="width: 100%; height: 150px;"></div>
                <div class="buttons">
                  <span class="btn btn-primary btn-sm  btn-file">
                    <span class="fileinput-new" data-trigger="fileinput" ><span class="fui-image"></span>&nbsp;&nbsp;Select image</span>
                    <span class="fileinput-exists"><span class="fui-gear"></span>&nbsp;&nbsp;Change</span>
                    <input type="file" name="imageFileField" id="imageFileField">
                  </span>
                  <a href="#" class="btn btn-default btn-sm  fileinput-exists" data-dismiss="fileinput"><span class="fui-trash"></span>&nbsp;&nbsp;Remove</a>
                </div>
              </div>
            </div>
          
          </form>
          
      </div><!-- /.tab-pane -->
      
      <!-- /tabs -->
      <div class="tab-pane iconTab" id="icon_Tab">
      
        <label>Choose an icon below: </label>

        <select id="icons" data-placeholder="Your Favorite Types of Bear">
          <option value="fa-adjust">&#xf042; fa-adjust</option>
          <option value="fa-adn">&#xf170; fa-adn</option>
          <option value="fa-align-center">&#xf037; fa-align-center</option>
          <option value="fa-align-justify">&#xf039; fa-align-justify</option>
          <option value="fa-align-left">&#xf036; fa-align-left</option>
          <option value="fa-align-right">&#xf038; fa-align-right</option>
          <option value="fa-ambulance">&#xf0f9; fa-ambulance</option>
          <option value="fa-anchor">&#xf13d; fa-anchor</option>
          <option value="fa-android">&#xf17b; fa-android</option>
          <option value="fa-angle-double-down">&#xf103; fa-angle-double-down</option>
          <option value="fa-angle-double-left">&#xf100; fa-angle-double-left</option>
          <option value="fa-angle-double-right">&#xf101; fa-angle-double-right</option>
          <option value="fa-angle-double-up">&#xf102; fa-angle-double-up</option>
          <option value="fa-angle-down">&#xf107; fa-angle-down</option>
          <option value="fa-angle-left">&#xf104; fa-angle-left</option>
          <option value="fa-angle-right">&#xf105; fa-angle-right</option>
          <option value="fa-angle-up">&#xf106; fa-angle-up</option>
          <option value="fa-apple">&#xf179; fa-apple</option>
          <option value="fa-archive">&#xf187; fa-archive</option>
          <option value="fa-arrow-circle-down">&#xf0ab; fa-arrow-circle-down</option>
          <option value="fa-arrow-circle-left">&#xf0a8; fa-arrow-circle-left</option>
          <option value="fa-arrow-circle-o-down">&#xf01a; fa-arrow-circle-o-down</option>
          <option value="fa-arrow-circle-o-left">&#xf190; fa-arrow-circle-o-left</option>
          <option value="fa-arrow-circle-o-right">&#xf18e; fa-arrow-circle-o-right</option>
          <option value="fa-arrow-circle-o-up">&#xf01b; fa-arrow-circle-o-up</option>
          <option value="fa-arrow-circle-right">&#xf0a9; fa-arrow-circle-right</option>
          <option value="fa-arrow-circle-up">&#xf0aa; fa-arrow-circle-up</option>
          <option value="fa-arrow-down">&#xf063; fa-arrow-down</option>
          <option value="fa-arrow-left">&#xf060; fa-arrow-left</option>
          <option value="fa-arrow-right">&#xf061; fa-arrow-right</option>
          <option value="fa-arrow-up">&#xf062; fa-arrow-up</option>
          <option value="fa-arrows">&#xf047; fa-arrows</option>
          <option value="fa-arrows-alt">&#xf0b2; fa-arrows-alt</option>
          <option value="fa-arrows-h">&#xf07e; fa-arrows-h</option>
          <option value="fa-arrows-v">&#xf07d; fa-arrows-v</option>
          <option value="fa-asterisk">&#xf069; fa-asterisk</option>
          <option value="fa-backward">&#xf04a; fa-backward</option>
          <option value="fa-ban">&#xf05e; fa-ban</option>
          <option value="fa-bar-chart-o">&#xf080; fa-bar-chart-o</option>
          <option value="fa-barcode">&#xf02a; fa-barcode</option>
          <option value="fa-bars">&#xf0c9; fa-bars</option>
          <option value="fa-beer">&#xf0fc; fa-beer</option>
          <option value="fa-bell">&#xf0f3; fa-bell</option>
          <option value="fa-bell-o">&#xf0a2; fa-bell-o</option>
          <option value="fa-bitbucket">&#xf171; fa-bitbucket</option>
          <option value="fa-bitbucket-square">&#xf172; fa-bitbucket-square</option>
          <option value="fa-bold">&#xf032; fa-bold</option>
          <option value="fa-bolt">&#xf0e7; fa-bolt</option>
          <option value="fa-book">&#xf02d; fa-book</option>
          <option value="fa-bookmark">&#xf02e; fa-bookmark</option>
          <option value="fa-bookmark-o">&#xf097; fa-bookmark-o</option>
          <option value="fa-briefcase">&#xf0b1; fa-briefcase</option>
          <option value="fa-btc">&#xf15a; fa-btc</option>
          <option value="fa-bug">&#xf188; fa-bug</option>
          <option value="fa-building-o">&#xf0f7; fa-building-o</option>
          <option value="fa-bullhorn">&#xf0a1; fa-bullhorn</option>
          <option value="fa-bullseye">&#xf140; fa-bullseye</option>
          <option value="fa-calendar">&#xf073; fa-calendar</option>
          <option value="fa-calendar-o">&#xf133; fa-calendar-o</option>
          <option value="fa-camera">&#xf030; fa-camera</option>
          <option value="fa-camera-retro">&#xf083; fa-camera-retro</option>
          <option value="fa-caret-down">&#xf0d7; fa-caret-down</option>
          <option value="fa-caret-left">&#xf0d9; fa-caret-left</option>
          <option value="fa-caret-right">&#xf0da; fa-caret-right</option>
          <option value="fa-caret-square-o-down">&#xf150; fa-caret-square-o-down</option>
          <option value="fa-caret-square-o-left">&#xf191; fa-caret-square-o-left</option>
          <option value="fa-caret-square-o-right">&#xf152; fa-caret-square-o-right</option>
          <option value="fa-caret-square-o-up">&#xf151; fa-caret-square-o-up</option>
          <option value="fa-caret-up">&#xf0d8; fa-caret-up</option>
          <option value="fa-certificate">&#xf0a3; fa-certificate</option>
          <option value="fa-chain-broken">&#xf127; fa-chain-broken</option>
          <option value="fa-check">&#xf00c; fa-check</option>
          <option value="fa-check-circle">&#xf058; fa-check-circle</option>
          <option value="fa-check-circle-o">&#xf05d; fa-check-circle-o</option>
          <option value="fa-check-square">&#xf14a; fa-check-square</option>
          <option value="fa-check-square-o">&#xf046; fa-check-square-o</option>
          <option value="fa-chevron-circle-down">&#xf13a; fa-chevron-circle-down</option>
          <option value="fa-chevron-circle-left">&#xf137; fa-chevron-circle-left</option>
          <option value="fa-chevron-circle-right">&#xf138; fa-chevron-circle-right</option>
          <option value="fa-chevron-circle-up">&#xf139; fa-chevron-circle-up</option>
          <option value="fa-chevron-down">&#xf078; fa-chevron-down</option>
          <option value="fa-chevron-left">&#xf053; fa-chevron-left</option>
          <option value="fa-chevron-right">&#xf054; fa-chevron-right</option>
          <option value="fa-chevron-up">&#xf077; fa-chevron-up</option>
          <option value="fa-circle-o">&#xf10c; fa-circle-o</option>
          <option value="fa-clipboard">&#xf0ea; fa-clipboard</option>
          <option value="fa-clock-o">&#xf017; fa-clock-o</option>
          <option value="fa-cloud">&#xf0c2; fa-cloud</option>
          <option value="fa-cloud-download">&#xf0ed; fa-cloud-download</option>
          <option value="fa-cloud-upload">&#xf0ee; fa-cloud-upload</option>
          <option value="fa-code">&#xf121; fa-code</option>
          <option value="fa-code-fork">&#xf126; fa-code-fork</option>
          <option value="fa-coffee">&#xf0f4; fa-coffee</option>
          <option value="fa-cog">&#xf013; fa-cog</option>
          <option value="fa-cogs">&#xf085; fa-cogs</option>
          <option value="fa-columns">&#xf0db; fa-columns</option>
          <option value="fa-comment">&#xf075; fa-comment</option>
          <option value="fa-comment-o">&#xf0e5; fa-comment-o</option>
          <option value="fa-comments">&#xf086; fa-comments</option>
          <option value="fa-comments-o">&#xf0e6; fa-comments-o</option>
          <option value="fa-compass">&#xf14e; fa-compass</option>
          <option value="fa-compress">&#xf066; fa-compress</option>
          <option value="fa-credit-card">&#xf09d; fa-credit-card</option>
          <option value="fa-crop">&#xf125; fa-crop</option>
          <option value="fa-crosshairs">&#xf05b; fa-crosshairs</option>
          <option value="fa-css3">&#xf13c; fa-css3</option>
          <option value="fa-cutlery">&#xf0f5; fa-cutlery</option>
          <option value="fa-desktop">&#xf108; fa-desktop</option>
          <option value="fa-dot-circle-o">&#xf192; fa-dot-circle-o</option>
          <option value="fa-download">&#xf019; fa-download</option>
          <option value="fa-dribbble">&#xf17d; fa-dribbble</option>
          <option value="fa-dropbox">&#xf16b; fa-dropbox</option>
          <option value="fa-eject">&#xf052; fa-eject</option>
          <option value="fa-ellipsis-h">&#xf141; fa-ellipsis-h</option>
          <option value="fa-ellipsis-v">&#xf142; fa-ellipsis-v</option>
          <option value="fa-envelope">&#xf0e0; fa-envelope</option>
          <option value="fa-envelope-o">&#xf003; fa-envelope-o</option>
          <option value="fa-eraser">&#xf12d; fa-eraser</option>
          <option value="fa-eur">&#xf153; fa-eur</option>
          <option value="fa-exchange">&#xf0ec; fa-exchange</option>
          <option value="fa-exclamation">&#xf12a; fa-exclamation</option>
          <option value="fa-exclamation-circle">&#xf06a; fa-exclamation-circle</option>
          <option value="fa-exclamation-triangle">&#xf071; fa-exclamation-triangle</option>
          <option value="fa-expand">&#xf065; fa-expand</option>
          <option value="fa-external-link">&#xf08e; fa-external-link</option>
          <option value="fa-external-link-square">&#xf14c; fa-external-link-square</option>
          <option value="fa-eye">&#xf06e; fa-eye</option>
          <option value="fa-eye-slash">&#xf070; fa-eye-slash</option>
          <option value="fa-facebook">&#xf09a; fa-facebook</option>
          <option value="fa-facebook-square">&#xf082; fa-facebook-square</option>
          <option value="fa-fast-backward">&#xf049; fa-fast-backward</option>
          <option value="fa-fast-forward">&#xf050; fa-fast-forward</option>
          <option value="fa-female">&#xf182; fa-female</option>
          <option value="fa-fighter-jet">&#xf0fb; fa-fighter-jet</option>
          <option value="fa-file">&#xf15b; fa-file</option>
          <option value="fa-file-o">&#xf016; fa-file-o</option>
          <option value="fa-file-text">&#xf15c; fa-file-text</option>
          <option value="fa-file-text-o">&#xf0f6; fa-file-text-o</option>
          <option value="fa-files-o">&#xf0c5; fa-files-o</option>
          <option value="fa-film">&#xf008; fa-film</option>
          <option value="fa-filter">&#xf0b0; fa-filter</option>
          <option value="fa-fire">&#xf06d; fa-fire</option>
          <option value="fa-fire-extinguisher">&#xf134; fa-fire-extinguisher</option>
          <option value="fa-flag">&#xf024; fa-flag</option>
          <option value="fa-flag-checkered">&#xf11e; fa-flag-checkered</option>
          <option value="fa-flag-o">&#xf11d; fa-flag-o</option>
          <option value="fa-flask">&#xf0c3; fa-flask</option>
          <option value="fa-flickr">&#xf16e; fa-flickr</option>
          <option value="fa-floppy-o">&#xf0c7; fa-floppy-o</option>
          <option value="fa-folder">&#xf07b; fa-folder</option>
          <option value="fa-folder-o">&#xf114; fa-folder-o</option>
          <option value="fa-folder-open">&#xf07c; fa-folder-open</option>
          <option value="fa-folder-open-o">&#xf115; fa-folder-open-o</option>
          <option value="fa-font">&#xf031; fa-font</option>
          <option value="fa-forward">&#xf04e; fa-forward</option>
          <option value="fa-foursquare">&#xf180; fa-foursquare</option>
          <option value="fa-frown-o">&#xf119; fa-frown-o</option>
          <option value="fa-gamepad">&#xf11b; fa-gamepad</option>
          <option value="fa-gavel">&#xf0e3; fa-gavel</option>
          <option value="fa-gbp">&#xf154; fa-gbp</option>
          <option value="fa-gift">&#xf06b; fa-gift</option>
          <option value="fa-github">&#xf09b; fa-github</option>
          <option value="fa-github-alt">&#xf113; fa-github-alt</option>
          <option value="fa-github-square">&#xf092; fa-github-square</option>
          <option value="fa-gittip">&#xf184; fa-gittip</option>
          <option value="fa-glass">&#xf000; fa-glass</option>
          <option value="fa-globe">&#xf0ac; fa-globe</option>
          <option value="fa-google-plus">&#xf0d5; fa-google-plus</option>
          <option value="fa-google-plus-square">&#xf0d4; fa-google-plus-square</option>
          <option value="fa-h-square">&#xf0fd; fa-h-square</option>
          <option value="fa-hand-o-down">&#xf0a7; fa-hand-o-down</option>
          <option value="fa-hand-o-left">&#xf0a5; fa-hand-o-left</option>
          <option value="fa-hand-o-right">&#xf0a4; fa-hand-o-right</option>
          <option value="fa-hand-o-up">&#xf0a6; fa-hand-o-up</option>
          <option value="fa-hdd-o">&#xf0a0; fa-hdd-o</option>
          <option value="fa-headphones">&#xf025; fa-headphones</option>
          <option value="fa-heart">&#xf004; fa-heart</option>
          <option value="fa-heart-o">&#xf08a; fa-heart-o</option>
          <option value="fa-home">&#xf015; fa-home</option>
          <option value="fa-hospital-o">&#xf0f8; fa-hospital-o</option>
          <option value="fa-html5">&#xf13b; fa-html5</option>
          <option value="fa-inbox">&#xf01c; fa-inbox</option>
          <option value="fa-indent">&#xf03c; fa-indent</option>
          <option value="fa-info">&#xf129; fa-info</option>
          <option value="fa-info-circle">&#xf05a; fa-info-circle</option>
          <option value="fa-inr">&#xf156; fa-inr</option>
          <option value="fa-instagram">&#xf16d; fa-instagram</option>
          <option value="fa-italic">&#xf033; fa-italic</option>
          <option value="fa-jpy">&#xf157; fa-jpy</option>
          <option value="fa-key">&#xf084; fa-key</option>
          <option value="fa-keyboard-o">&#xf11c; fa-keyboard-o</option>
          <option value="fa-krw">&#xf159; fa-krw</option>
          <option value="fa-laptop">&#xf109; fa-laptop</option>
          <option value="fa-leaf">&#xf06c; fa-leaf</option>
          <option value="fa-lemon-o">&#xf094; fa-lemon-o</option>
          <option value="fa-level-down">&#xf149; fa-level-down</option>
          <option value="fa-level-up">&#xf148; fa-level-up</option>
          <option value="fa-lightbulb-o">&#xf0eb; fa-lightbulb-o</option>
          <option value="fa-link">&#xf0c1; fa-link</option>
          <option value="fa-linkedin">&#xf0e1; fa-linkedin</option>
          <option value="fa-linkedin-square">&#xf08c; fa-linkedin-square</option>
          <option value="fa-linux">&#xf17c; fa-linux</option>
          <option value="fa-list">&#xf03a; fa-list</option>
          <option value="fa-list-alt">&#xf022; fa-list-alt</option>
          <option value="fa-list-ol">&#xf0cb; fa-list-ol</option>
          <option value="fa-list-ul">&#xf0ca; fa-list-ul</option>
          <option value="fa-location-arrow">&#xf124; fa-location-arrow</option>
          <option value="fa-lock">&#xf023; lock</option>
          <option value="fa-long-arrow-down">&#xf175; fa-long-arrow-down</option>
          <option value="fa-long-arrow-left">&#xf177; fa-long-arrow-left</option>
          <option value="fa-long-arrow-right">&#xf178; fa-long-arrow-right</option>
          <option value="fa-long-arrow-up">&#xf176; fa-long-arrow-up</option>
          <option value="fa-magic">&#xf0d0; fa-magic</option>
          <option value="fa-magnet">&#xf076; fa-magnet</option>
          <option value="fa-mail-reply-all">&#xf122; fa-mail-reply-all</option>
          <option value="fa-male">&#xf183; fa-male</option>
          <option value="fa-map-marker">&#xf041; fa-map-marker</option>
          <option value="fa-maxcdn">&#xf136; fa-maxcdn</option>
          <option value="fa-medkit">&#xf0fa; fa-medkit</option>
          <option value="fa-meh-o">&#xf11a; fa-meh-o</option>
          <option value="fa-microphone">&#xf130; fa-microphone</option>
          <option value="fa-microphone-slash">&#xf131; fa-microphone-slash</option>
          <option value="fa-minus">&#xf068; fa-minus</option>
          <option value="fa-minus-circle">&#xf056; fa-minus-circle</option>
          <option value="fa-minus-square">&#xf146; fa-minus-square</option>
          <option value="fa-minus-square-o">&#xf147; fa-minus-square-o</option>
          <option value="fa-mobile">&#xf10b; fa-mobile</option>
          <option value="fa-money">&#xf0d6; fa-money</option>
          <option value="fa-moon-o">&#xf186; fa-moon-o</option>
          <option value="fa-music">&#xf001; fa-music</option>
          <option value="fa-outdent">&#xf03b; fa-outdent</option>
          <option value="fa-pagelines">&#xf18c; fa-pagelines</option>
          <option value="fa-paperclip">&#xf0c6; fa-paperclip</option>
          <option value="fa-pause">&#xf04c; fa-pause</option>
          <option value="fa-pencil">&#xf040; fa-pencil</option>
          <option value="fa-pencil-square">&#xf14b; fa-pencil-square</option>
          <option value="fa-pencil-square-o">&#xf044; fa-pencil-square-o</option>
          <option value="fa-phone">&#xf095; fa-phone</option>
          <option value="fa-phone-square">&#xf098; fa-phone-square</option>
          <option value="fa-picture-o">&#xf03e; fa-picture-o</option>
          <option value="fa-pinterest">&#xf0d2; fa-pinterest</option>
          <option value="fa-pinterest-square">&#xf0d3; fa-pinterest-square</option>
          <option value="fa-plane">&#xf072; fa-plane</option>
          <option value="fa-play">&#xf04b; fa-play</option>
          <option value="fa-play-circle">&#xf144; fa-play-circle</option>
          <option value="fa-play-circle-o">&#xf01d; fa-play-circle-o</option>
          <option value="fa-plus">&#xf067; fa-plus</option>
          <option value="fa-plus-circle">&#xf055; fa-plus-circle</option>
          <option value="fa-plus-square">&#xf0fe; fa-plus-square</option>
          <option value="fa-plus-square-o">&#xf196; fa-plus-square-o</option>
          <option value="fa-power-off">&#xf011; fa-power-off</option>
          <option value="fa-print">&#xf02f; fa-print</option>
          <option value="fa-puzzle-piece">&#xf12e; fa-puzzle-piece</option>
          <option value="fa-qrcode">&#xf029; fa-qrcode</option>
          <option value="fa-question">&#xf128; fa-question</option>
          <option value="fa-question-circle">&#xf059; fa-question-circle</option>
          <option value="fa-quote-left">&#xf10d; fa-quote-left</option>
          <option value="fa-quote-right">&#xf10e; fa-quote-right</option>
          <option value="fa-random">&#xf074; fa-random</option>
          <option value="fa-refresh">&#xf021; fa-refresh</option>
          <option value="fa-renren">&#xf18b; fa-renren</option>
          <option value="fa-repeat">&#xf01e; fa-repeat</option>
          <option value="fa-reply">&#xf112; fa-reply</option>
          <option value="fa-reply-all">&#xf122; fa-reply-all</option>
          <option value="fa-retweet">&#xf079; fa-retweet</option>
          <option value="fa-road">&#xf018; fa-road</option>
          <option value="fa-rocket">&#xf135; fa-rocket</option>
          <option value="fa-rss">&#xf09e; fa-rss</option>
          <option value="fa-rss-square">&#xf143; fa-rss-square</option>
          <option value="fa-rub">&#xf158; fa-rub</option>
          <option value="fa-scissors">&#xf0c4; fa-scissors</option>
          <option value="fa-search">&#xf002; fa-search</option>
          <option value="fa-search-minus">&#xf010; fa-search-minus</option>
          <option value="fa-search-plus">&#xf00e; fa-search-plus</option>
          <option value="fa-share">&#xf064; fa-share</option>
          <option value="fa-share-square">&#xf14d; fa-share-square</option>
          <option value="fa-share-square-o">&#xf045; fa-share-square-o</option>
          <option value="fa-shield">&#xf132; fa-shield</option>
          <option value="fa-shopping-cart">&#xf07a; fa-shopping-cart</option>
          <option value="fa-sign-in">&#xf090; fa-sign-in</option>
          <option value="fa-sign-out">&#xf08b; fa-sign-out</option>
          <option value="fa-signal">&#xf012; fa-signal</option>
          <option value="fa-sitemap">&#xf0e8; fa-sitemap</option>
          <option value="fa-skype">&#xf17e; fa-skype</option>
          <option value="fa-smile-o">&#xf118; fa-smile-o</option>
          <option value="fa-sort">&#xf0dc; fa-sort</option>
          <option value="fa-sort-alpha-asc">&#xf15d; fa-sort-alpha-asc</option>
          <option value="fa-sort-alpha-desc">&#xf15e; fa-sort-alpha-desc</option>
          <option value="fa-sort-amount-asc">&#xf160; fa-sort-amount-asc</option>
          <option value="fa-sort-amount-desc">&#xf161; fa-sort-amount-desc</option>
          <option value="fa-sort-asc">&#xf0dd; fa-sort-asc</option>
          <option value="fa-sort-desc">&#xf0de; fa-sort-desc</option>
          <option value="fa-sort-numeric-asc">&#xf162; fa-sort-numeric-asc</option>
          <option value="fa-sort-numeric-desc">&#xf163; fa-sort-numeric-desc</option>
          <option value="fa-spinner">&#xf110; fa-spinner</option>
          <option value="fa-square">&#xf0c8; fa-square</option>
          <option value="fa-square-o">&#xf096; fa-square-o</option>
          <option value="fa-stack-exchange">&#xf18d; fa-stack-exchange</option>
          <option value="fa-stack-overflow">&#xf16c; fa-stack-overflow</option>
          <option value="fa-star">&#xf005; fa-star</option>
          <option value="fa-star-half">&#xf089; fa-star-half</option>
          <option value="fa-star-half-o">&#xf123; fa-star-half-o</option>
          <option value="fa-star-o">&#xf006; fa-star-o</option>
          <option value="fa-step-backward">&#xf048; fa-step-backward</option>
          <option value="fa-step-forward">&#xf051; fa-step-forward</option>
          <option value="fa-stethoscope">&#xf0f1; fa-stethoscope</option>
          <option value="fa-stop">&#xf04d; fa-stop</option>
          <option value="fa-strikethrough">&#xf0cc; fa-strikethrough</option>
          <option value="fa-subscript">&#xf12c; fa-subscript</option>
          <option value="fa-suitcase">&#xf0f2; fa-suitcase</option>
          <option value="fa-sun-o">&#xf185; fa-sun-o</option>
          <option value="fa-superscript">&#xf12b; fa-superscript</option>
          <option value="fa-table">&#xf0ce; fa-table</option>
          <option value="fa-tablet">&#xf10a; fa-tablet</option>
          <option value="fa-tachometer">&#xf0e4; fa-tachometer</option>
          <option value="fa-tag">&#xf02b; fa-tag</option>
          <option value="fa-tags">&#xf02c; fa-tags</option>
          <option value="fa-tasks">&#xf0ae; fa-tasks</option>
          <option value="fa-terminal">&#xf120; fa-terminal</option>
          <option value="fa-text-height">&#xf034; fa-text-height</option>
          <option value="fa-text-width">&#xf035; fa-text-width</option>
          <option value="fa-th">&#xf00a; fa-th</option>
          <option value="fa-th-large">&#xf009; fa-th-large</option>
          <option value="fa-th-list">&#xf00b; fa-th-list</option>
          <option value="fa-thumb-tack">&#xf08d; fa-thumb-tack</option>
          <option value="fa-thumbs-down">&#xf165; fa-thumbs-down</option>
          <option value="fa-thumbs-o-down">&#xf088; fa-thumbs-o-down</option>
          <option value="fa-thumbs-o-up">&#xf087; fa-thumbs-o-up</option>
          <option value="fa-thumbs-up">&#xf164; fa-thumbs-up</option>
          <option value="fa-ticket">&#xf145; fa-ticket</option>
          <option value="fa-times">&#xf00d; fa-times</option>
          <option value="fa-times-circle">&#xf057; fa-times-circle</option>
          <option value="fa-times-circle-o">&#xf05c; fa-times-circle-o</option>
          <option value="fa-tint">&#xf043; fa-tint</option>
          <option value="fa-trash-o">&#xf014; fa-trash-o</option>
          <option value="fa-trello">&#xf181; fa-trello</option>
          <option value="fa-trophy">&#xf091; fa-trophy</option>
          <option value="fa-truck">&#xf0d1; fa-truck</option>
          <option value="fa-try">&#xf195; fa-try</option>
          <option value="fa-tumblr">&#xf173; fa-tumblr</option>
          <option value="fa-tumblr-square">&#xf174; fa-tumblr-square</option>
          <option value="fa-twitter">&#xf099; fa-twitter</option>
          <option value="fa-twitter-square">&#xf081; fa-twitter-square</option>
          <option value="fa-umbrella">&#xf0e9; fa-umbrella</option>
          <option value="fa-underline">&#xf0cd; fa-underline</option>
          <option value="fa-undo">&#xf0e2; fa-undo</option>
          <option value="fa-unlock">&#xf09c; fa-unlock</option>
          <option value="fa-unlock-alt">&#xf13e; fa-unlock-alt</option>
          <option value="fa-upload">&#xf093; fa-upload</option>
          <option value="fa-usd">&#xf155; fa-usd</option>
          <option value="fa-user">&#xf007; fa-user</option>
          <option value="fa-user-md">&#xf0f0; fa-user-md</option>
          <option value="fa-users">&#xf0c0; fa-users</option>
          <option value="fa-video-camera">&#xf03d; fa-video-camera</option>
          <option value="fa-vimeo-square">&#xf194; fa-vimeo-square</option>
          <option value="fa-vk">&#xf189; fa-vk</option>
          <option value="fa-volume-down">&#xf027; fa-volume-down</option>
          <option value="fa-volume-off">&#xf026; fa-volume-off</option>
          <option value="fa-volume-up">&#xf028; fa-volume-up</option>
          <option value="fa-weibo">&#xf18a; fa-weibo</option>
          <option value="fa-wheelchair">&#xf193; fa-wheelchair</option>
          <option value="fa-windows">&#xf17a; fa-windows</option>
          <option value="fa-wrench">&#xf0ad; fa-wrench</option>
          <option value="fa-xing">&#xf168; fa-xing</option>
          <option value="fa-xing-square">&#xf169; fa-xing-square</option>
          <option value="fa-youtube">&#xf167; fa-youtube</option>
          <option value="fa-youtube-play">&#xf16a; fa-youtube-play</option>
          <option value="fa-youtube-square">&#xf166; fa-youtube-square</option>       
        </select>
        
      </div><!-- /.tab-pane -->
      
      <!-- /tabs -->
        <div class="tab-pane videoTab" id="video_Tab">
              
            <label>Youtube video ID:</label>
              
            <input type="text" class="form-control margin-bottom-20" id="youtubeID" placeholder="Enter a Youtube video ID" value="">
              
            <p class="text-center or">
              <span>OR</span>
            </p>
              
            <label>Vimeo video ID:</label>
              
            <input type="text" class="form-control margin-bottom-20" id="vimeoID" placeholder="Enter a Vimeo video ID" value="">
              
        </div><!-- /.tab-pane -->
      
      </div> <!-- /tab-content -->
      
      <div class="alert alert-success" style="display: none;" id="detailsAppliedMessage">
      <button class="close fui-cross" type="button" id="detailsAppliedMessageHide"></button>
      The changes were applied successfully!
      </div>
            
      <div class="margin-bottom-5">
        <button type="button" class="btn btn-primary  btn-sm btn-block" id="saveStyling"><span class="fui-check-inverted"></span> Apply Changes</button>
      </div>
      
      <div class="sideButtons clearfix">
        <button type="button" class="btn btn-inverse  btn-xs" id="cloneElementButton"><span class="fui-windows"></span> Clone</button>
        <button type="button" class="btn btn-warning  btn-xs" id="resetStyleButton"><i class="fa fa-refresh"></i> Reset</button>
        <button type="button" class="btn btn-danger  btn-xs" id="removeElementButton"><span class="fui-cross-inverted"></span> Remove</button>
      </div>
      
      <!--<p class="text-center or">
        <span>OR</span>
      </p>
      
      <button type="button" class="btn btn-default  btn-block btn-sm" id="closeStyling"><span class="fui-cross-inverted"></span> Close Editor</button>-->
          
    </div><!-- /.styleEditor -->
    
    <div id="hidden">
      <iframe src="<?= $builderAssets; ?>elements/skeleton.html" id="skeleton"></iframe>
    </div>

  <!-- modals -->
  
  <!-- export HTML popup -->
  <div class="modal fade" id="exportModal" tabindex="-1" role="dialog" aria-hidden="true">
  
    <!-- 
    
    NOTE: 
    The export PHP files can be hosted on any server supporting PHP, so these files can be hosted on a different location as the BUILDER (this might be easier for your end customers, so they won't have to worry about hosting PHP files)
    
    -->
  
    <form action="save.php" target="_blank" id="markupForm" method="post" class="form-horizontal">
    
    <input type="hidden" name="markup" value="" id="markupField">
    
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel"><span class="fui-export"></span> Export Your Markup</h4>
            </div>
            <div class="modal-body">
              
              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Doc type</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="doctype" id="doctype" placeholder="Doc type" value="<!DOCTYPE html>">
                  </div>
              </div>
              
            </div><!-- /.modal-body -->
            <div class="modal-footer">
              <button type="button" class="btn btn-default " data-dismiss="modal" id="exportCancel">Cancel & Close</button>
              <button type="submit" class="btn btn-primary " id="exportSubmit">Export Now</button>
            </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
      
      </form>
      
  </div><!-- /.modal -->
  
  
  <!-- export HTML popup -->
  <div class="modal fade" id="previewModal" tabindex="-1" role="dialog" aria-hidden="true">
  
    <form action="<?= base_url(); ?>web-builder/preview" target="_blank" id="markupPreviewForm" method="post" class="form-horizontal">
    
    <input type="hidden" name="markup" value="" id="markupField">
    
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
              <h4 class="modal-title" id="myModalLabel"><span class="fui-window"></span> Preview Page</h4>
            </div>
            <div class="modal-body">
              
              <p>
            <b>Please note:</b> you can only preview a single page; links to other pages won't work. When you make changes to your page, reloading the preview won't work, instead you'll have to use the "Preview" button again.
          </p>
              
            </div><!-- /.modal-body -->
            <div class="modal-footer">
              <button type="button" class="btn btn-default " data-dismiss="modal" id="previewCancel">Cancel & Close</button>
              <button type="submit" class="btn btn-primary " id="showPreview">Show Preview</button>
            </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
      
      </form>
      
  </div><!-- /.modal -->
  
  
  <!-- delete single block popup -->
  <div class="modal fade small-modal" id="deleteBlock" tabindex="-1" role="dialog" aria-hidden="true">
          
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
            
              Are you sure you want to delete this block?
              
            </div><!-- /.modal-body -->
            <div class="modal-footer">
              <button type="button" class="btn btn-default " data-dismiss="modal">Cancel & Close</button>
              <button type="button" class="btn btn-primary " id="deleteBlockConfirm">Delete</button>
            </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
            
  </div><!-- /.modal -->
  
  
  <!-- reset block popup -->
  <div class="modal fade small-modal" id="resetBlock" tabindex="-1" role="dialog" aria-hidden="true">
          
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
            
              <p>
                Are you sure you want to reset this block?
              </p>
              <p>
                All changes made to the content will be destroyed.
              </p>
              
            </div><!-- /.modal-body -->
            <div class="modal-footer">
              <button type="button" class="btn btn-default " data-dismiss="modal">Cancel & Close</button>
              <button type="button" class="btn btn-primary " id="resetBlockConfirm">Reset</button>
            </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
            
  </div><!-- /.modal -->
  
  
  <!-- delete all blocks popup -->
  <div class="modal fade small-modal" id="deleteAll" tabindex="-1" role="dialog" aria-hidden="true">
          
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
            
              Are you sure you want to remove this page?
              
            </div><!-- /.modal-body -->
            <div class="modal-footer">
              <button type="button" class="btn btn-default " data-dismiss="modal">Cancel & Close</button>
              <button type="button" class="btn btn-primary " id="deleteAllConfirm">Delete</button>
            </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
            
  </div><!-- /.modal -->
  
  <!-- delete page popup -->
  <div class="modal fade small-modal" id="deletePage" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
            
              Are you sure you want to delete this entire page?
              
            </div><!-- /.modal-body -->
            <div class="modal-footer">
              <button type="button" class="btn btn-default " data-dismiss="modal" id="deletePageCancel">Cancel & Close</button>
              <button type="button" class="btn btn-primary " id="deletePageConfirm">Delete</button>
            </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
            
  </div><!-- /.modal -->
  
  <!-- delete elemnent popup -->
  <div class="modal fade small-modal" id="deleteElement" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
            
              Are you sure you want to delete this element? Once deleted, it can not be restored.
              
            </div><!-- /.modal-body -->
            <div class="modal-footer">
              <button type="button" class="btn btn-default " data-dismiss="modal" id="deletePageCancel">Cancel & Close</button>
              <button type="button" class="btn btn-primary " id="deleteElementConfirm">Delete</button>
            </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
            
  </div><!-- /.modal -->
  
  <!-- edit content popup -->
  <div class="modal fade" id="editContentModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
            
              <textarea id="contentToEdit"></textarea>
              
            </div><!-- /.modal-body -->
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel & Close</button>
              <button type="button" class="btn btn-primary" id="updateContentInFrameSubmit">Save Content</button>
            </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
            
  </div><!-- /.modal -->
  
  <div id="loader">
    <span>
      <img src="<?= $builderAssets; ?>images/loading.gif" alt="Loading...">
      Loading builder elements...
    </span>
  </div>
  
  <div class="sandboxes" id="sandboxes" style="display: none"></div>

    <!-- Load JS here for greater good =============================-->
    <script src="<?= $builderAssets; ?>js/jquery-1.8.3.min.js"></script>
    <script src="<?= $builderAssets; ?>js/jquery-ui.min.js"></script>
    <script src="<?= $builderAssets; ?>js/jquery.ui.touch-punch.min.js"></script>
    <script src="<?= $builderAssets; ?>js/bootstrap.min.js"></script>
    <script src="<?= $builderAssets; ?>js/bootstrap-select.js"></script>
    <script src="<?= $builderAssets; ?>js/bootstrap-switch.js"></script>
    <script src="<?= $builderAssets; ?>js/flatui-checkbox.js"></script>
    <script src="<?= $builderAssets; ?>js/flatui-radio.js"></script>
    <script src="<?= $builderAssets; ?>js/jquery.tagsinput.js"></script>
    <script src="<?= $builderAssets; ?>js/flatui-fileinput.js"></script>
    <script src="<?= $builderAssets; ?>js/jquery.placeholder.js"></script>
    <script src="<?= $builderAssets; ?>js/jquery.zoomer.js"></script>
    <script src="<?= $builderAssets; ?>js/application.js"></script>
    <script src="<?= $builderAssets; ?>js/spectrum.js"></script>
    <script src="<?= $builderAssets; ?>js/chosen.jquery.min.js"></script>
    <script src="<?= $builderAssets; ?>js/redactor/redactor.min.js"></script>
    <script src="<?= $builderAssets; ?>js/redactor/table.js"></script>
    <script src="<?= $builderAssets; ?>js/redactor/bufferButtons.js"></script>
    <script src="<?= $builderAssets; ?>js/src-min-noconflict/ace.js"></script>
    <script src="<?= base_url(); ?>builder/elements.json"></script>
    <script src="<?= $builderAssets; ?>js/builder.js"></script>
    <script>
    
    $(function(){
    
      var ua = window.navigator.userAgent;
      var msie = ua.indexOf("MSIE ");
      
      /*if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
          
        $('.modes #modeContent').parent().hide();
          
      } else {
          
        $('.modes #modeContent').parent().show();
        
      }*/
      
      
      
      
    })    
    
    </script>
  </body>
</html>