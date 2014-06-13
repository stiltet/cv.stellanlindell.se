<?php
$page = $_GET['page'];
$lang  = $_GET['lang'];

if(empty($lang))
  $lang = "se";

if(empty($page))
  $page = "CV";

$location = "pdf/".$page."_".$lang.".pdf";
?>
<html style="margin:0px; overflow:hidden;">
  <head>
    <title><?php echo $page; ?> - Stellan Lindell</title>
    <link rel="stylesheet" type="text/css" href="css/desktop.css" media="screen and (min-width: 481px)" />
    <link rel="stylesheet" type="text/css" href="css/desktop.css" media="only screen and (max-width: 480px)" />
    <!--[if IE]>
      <link rel="stylesheet" type="text/css" href="css/desktop.css" media="all" />
    <![endif]-->
    <?php
      // Checks if host server is online or not.
      if(checkdnsrr("googleapis.com", "ANY")) { 
    ?> 
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
    <?php } else { ?>
    <script src="js/jquery/jquery-1.9.1.min.js"></script>
    <script src="js/jquery/jquery-ui.min.js"></script>
    <?php } ?>
    <script src="js/UIModule.js"></script>
    <script src="js/Controller.js"></script>
    <meta charset="windows-1252" />
    <meta name="viewport" content="user-scalable=no, width=device-width" />
    <meta name="robots" content="all">
    <meta name="description" content="<?php echo $page; ?> - Stellan Lindell" />
    <meta name="keywords" content="" />
    <meta name="author" content="Stellan Lindell" />
    <script type="text/javascript" src="js/pdfobject.js"></script>
    <script type="text/javascript">
      window.onload = function () {
        var myPDF = new PDFObject(  {
          url: "<?php echo $location; ?>",
          pdfOpenParams:  {
            navpanes: 0,
            zoom: "100%"
          }
        }).embed("pdf");
      };
    </script>
    <!-- Google Translate script (Intyg) -->
    <script>
      function googleSectionalElementInit() {
        new google.translate.SectionalElement({
          ectionalNodeClassName: 'goog-trans-section',
          controlNodeClassName: 'goog-trans-control',
          background: 'transparent'
        }, 'google_sectional_element');
      }
    </script>
    <script src="//translate.google.com/translate_a/element.js?cb=googleSectionalElementInit&ug=section&hl=sv"></script>
    <?php
      require_once 'analyticstracking.php';
    ?>
  </head>
  <?
  /*echo "<pre>";
  $userAgent  =  $_SERVER["HTTP_USER_AGENT"];
  if($userAgent  =  strpos())
  $browser    =  get_browser(null, true);
  print_r($browser);
  echo "</pre>";*/
  ?>
  <body style="background:#565656; margin:0px; overflow:hidden;">
     <div id="header" style="height:30px; padding-top:20px;">
      <div id="menu" style="float:left; text-align:center; width:400px; margin-left:300px;">
        <?php if (($lang === "uk") || ($lang === "us")) { ?>
          <a href="<?php echo "?page="."CV&lang=".$lang; ?>">
            CV
          </a>
          <span class="tab" style="padding-left:50px;"></span>
          <a href="<?php echo "?page="."Personligt brev&lang=".$lang; ?>">
            Cover Letter<span style="margin-left:28px;"></span>
          </a>
          <a href="<?php echo "?page="."Intyg&lang=".$lang; ?>">
            Intyg<span style="margin-left:28px;"></span>
          </a>
        <?php } else { ?>
          <a href="<?php echo "?page="."CV&lang=".$lang; ?>">
            CV
          </a>
          <span class="tab" style="padding-left:50px;"></span>
          <a href="<?php echo "?page="."Personligt brev&lang=".$lang; ?>">
            Personligt Brev
          </a>
          <span class="tab" style="padding-left:50px;"></span>
          <a href="<?php echo "?page="."Intyg&lang=".$lang; ?>">
            Intyg
          </a>
        <?php } ?>
      </div>
      <div id="download" style="float:left; text-align:center; margin-left:290px;">
        <a href="<?php echo $location; ?>">
          <?php if($lang == 'uk' || $lang == 'us') { ?>
          Download PDF-file
          <?php } else { ?>
          Ladda Ner PDF-filen
          <?php } ?>
        </a>
      </div>
      <div id="lang" style="float:right; text-align:center; width:200px; margin-right:480px;">
          <a href="?page=<?php echo $page; ?>&lang=se">
            <img src="pics/se.png" width="25px" border="0px">
          </a>
          <a href="?page=<?php echo $page; ?>&lang=uk">
            <img src="pics/uk.png" width="25px" border="0px">
          </a>
      </div>
    </div>
    <?php if (!($page == 'Intyg'))  { ?>
    <div id="pdf" style="height:94%;">
      <div style="width: 100%; text-align: center;">
        <div style="width:600px; text-align:center; margin:auto;">
        <?php if (($lang === "uk") || ($lang === "us")) { ?>
          <p>
            It seems you do not have support for displaying PDF files in your browser.<br/>
            Please download Adobe Reader or <a href="http://cv.stellanlindell.se/<?php echo $location; ?>">click here</a> to download this document.<br/>
            Thanks for your understanding.
          </p>
        <?php } else { ?>
          <p>
            Det verkar som om du inte har stöd för att visa PDF-filer i din webbläsare.<br/>
            Vänligen ladda ner Adobe Reader eller <a href="http://cv.stellanlindell.se/<?php echo $location; ?>">klicka här</a> för att ladda ner detta dokument.<br/>
            Tack för visad förståelse.
          </p>
        <?php } ?>
          <div style="text-align: center;"><img src="pics/download_adobe_reader.jpg" alt="Get Adobe Reader" border="0px" /></div>
        </div>
      </div>
    </div>
    <?php } else  { ?>
    <div id="intyg" style="height: 95%;">
      <div id="mainMenu" style="padding-left:75px;">

      </div>
    </div>
    <?php } ?>
  </body>
</html>