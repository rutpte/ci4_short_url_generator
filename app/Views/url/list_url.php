<?php include "../app/Views/config_page.php";
// var_dump(ROOT_PROJ);
// var_dump(ROOT_PROJ);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Short url</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="https://getbootstrap.com/2.3.2/assets/css/bootstrap.css" rel="stylesheet">

      <style type="text/css">
      body {
        padding-top: 30px;
        padding-bottom: 40px;
        -webkit-text-size-adjust: none;
        margin-top: 0;
        padding: 0;
        font-family: Verdana, system-ui, Helvetica, sans-serif;
        line-height: 1.8em;
        color: #fff;
        text-align: left;
        min-width: 760px;
        background-color: #4a525a;
      }

    </style>
    <link href="https://getbootstrap.com/2.3.2/assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="https://getbootstrap.com/2.3.2/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="https://getbootstrap.com/2.3.2/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="https://getbootstrap.com/2.3.2/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="https://getbootstrap.com/2.3.2/assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="https://getbootstrap.com/2.3.2/assets/ico/favicon.pngxx">


    <script src="https://getbootstrap.com/2.3.2/assets/js/jquery.js"></script>
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <!-- <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button> -->
          <a class="brand" href=<?=ROOT_PROJ."/add_url"?>>Short url</a>
          <div class="nav">
            <ul class="nav">
            <li><a href=<?=ROOT_PROJ."/add_url"?>>Home</a></li>
              <li><a href=<?=ROOT_PROJ."/list_url"?>>list</a></li>

            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">

      <h1>Short URL Data.</h1>
      <p>Short URL is a url shortener to reduce a long link. Use our tool to shorten links and then share them.</p>
      <p><a class="btn btn-success" href=<?=ROOT_PROJ."/add_url"?>>Home &raquo;</a></p>
      <div class="row">
      <?php 
        if (!empty($url) && is_array($url)){
        foreach($url as $item){ 
       ?>
            <div class="span12 detail">
                <h2>Id : <?= $item['id']?></h2>
                <p>full url : <em><?= $item['ori_url']?></em> </p>
                <!-- <p>short url : <a disabled="disabled" class="link_to" href=<?//= $item['short_url']?>><?//= $item['short_url']?></a> </p> -->
                <p>short url : <a class="link_to"><?= $item['short_url']?></a> </p>
                <p>amount click : <em><?= $item['num_click']?></em> </p>
                <p>delete : <a class="del" href=<?=ROOT_PROJ."/del_url/". $item['id']?>>delete data.</a> </p>
                
                <img style="margin: 5px;"src="<?=ROOT_PROJ.'/'.$item['qrc_path']?>" />
                </br>
               <a class="btn" href="<?=$item['short_url'] ?>">View details &raquo;</a>
              <hr/>
            </div><!--/span-->

      <?php 
            }
        }
      ?>
      </div>
    </div> <!-- /container -->
    <!--javascript
    ================================================== -->

    <script>
        let btn_detail = jQuery('.detail a.btn');
        btn_detail.on('click', function(){
            jQuery(this).attr("disabled", true);
        });

        //------------------------------
        let link_detail = jQuery('.detail a.link_to');

        link_detail.hover(function() {
            // $(this).fadeOut( 100 );
            // $(this).fadeIn( 500 );
           
            $(this).css("cursor", "pointer");
            

        });
        link_detail.one('click',function () {
            let el_this =jQuery(this);
            let go_path = jQuery(this)[0].text;
            console.log(go_path);
            window.location = go_path;
        });

        // link_detail.on('mouseup', function(e,data){

            // jQuery(this).attr("disabled","disabled");
            // jQuery(this).prop("href","javascript:void(0)");
            //jQuery(this).hide();


            // let el_this =jQuery(this);
            // let go_path = jQuery(this).xxx;
            // console.log(go_path);
            // window.location = go_path;
            // jQuery(this).prop("href","javascript:void(0)");
        // });
        //btn_detail.attr("disabled", true);
    </script>
    
    <!-- ================================================== 
    Le javascript lib -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="https://getbootstrap.com/2.3.2/assets/js/bootstrap-transition.js"></script>
    <script src="https://getbootstrap.com/2.3.2/assets/js/bootstrap-alert.js"></script>
    <script src="https://getbootstrap.com/2.3.2/assets/js/bootstrap-modal.js"></script>
    <script src="https://getbootstrap.com/2.3.2/assets/js/bootstrap-dropdown.js"></script>
    <script src="https://getbootstrap.com/2.3.2/assets/js/bootstrap-scrollspy.js"></script>
    <script src="https://getbootstrap.com/2.3.2/assets/js/bootstrap-tab.js"></script>
    <script src="https://getbootstrap.com/2.3.2/assets/js/bootstrap-tooltip.js"></script>
    <script src="https://getbootstrap.com/2.3.2/assets/js/bootstrap-popover.js"></script>
    <script src="https://getbootstrap.com/2.3.2/assets/js/bootstrap-button.js"></script>
    <script src="https://getbootstrap.com/2.3.2/assets/js/bootstrap-collapse.js"></script>
    <script src="https://getbootstrap.com/2.3.2/assets/js/bootstrap-carousel.js"></script>
    <script src="https://getbootstrap.com/2.3.2/assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>



