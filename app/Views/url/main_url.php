<?php include "../app/Views/config_page.php";
//echo '<pre>';var_dump($_SERVER);exit;
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
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
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
    <script>
        function add_url(){
            // let files_form = new FormData(); // you can consider this as 'data bag'
            //files_form.append('uploadfile', $('#upload_doc_send')[0].files[0]); // append selected file to the bag named 'file'
            // files_form.append('q',"xxx");
            // files_form.append('project_id',xxx);
            let str_url = jQuery('#ori_url').val();
            if(str_url != ""){
                jQuery.ajax({
                    method: 'POST'
                    ,type: "POST"
                    // ,crossDomain: true
                    // ,dataType: 'json'
                    // ,crossOrigin: true
                    // ,async: true
                    // ,contentType: 'application/json'
                    // ,data: files_form
                    ,data: {
                        q	            : "add_url"
                        ,ori_url		: str_url
                    }
                    ,url: '<?=ROOT_PROJ."/add_url"?>'
                    ,success: function(response){
                        console.log(response);
                        window.location = '<?=ROOT_PROJ."/list_url"?>';
                    }
                    ,error: function (request, status, error) {
                        console.log("There was an error: ", request.responseText);
                    }
                });
            } else {
                alert('please fill out');
            }


        };
        //--------------------------------------------------
        // let btn_convert_url = jQuery('#btn_add_url');
        // btn_convert_url.on('click', function(){
        //     //jQuery(this).attr("disabled", true);
        //     jQuery(this).attr("disabled", true);
        // });

    </script>
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
           <!-- <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>  -->
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

      <h1>Short URL generator.</h1>
      <p>Short URL is a url shortener to reduce a long link. Use our tool to shorten links and then share them.</p>
      <!-- <form action=< //?=ROOT_PROJ."/add_url"?> method="post"> -->
      
        
        
        <input type="input" id = "ori_url" name="ori_url">

        <!-- <label for="detail">detail:</label>
        <input type="input" name="detail"> -->
        <br/>
        <br/>
        
        <!-- <input class="btn btn-large btn-success" type="submit" name="submit" value="convert url"> -->
        <button id="btn_add_url" class="btn btn-large btn-success" onclick="add_url()">convert url</button>
    
    </div> <!-- /container -->
    <script>
            //--------------------------------------------------
        let btn_convert_url = jQuery('#btn_add_url');
        btn_convert_url.on('click', function(){
            //jQuery(this).attr("disabled", true);
            //--jQuery(this).attr("disabled", true);
        });

    </script>
    <!-- Le javascript
    ================================================== -->
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



