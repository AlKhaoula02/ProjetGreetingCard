
    <?php

    $array = array("nom"=>"","email"=>"","message"=>"","nomError"=>"","emailError"=>"","messageError"=>"","success"=>false);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $array["nom"] = $_POST["nom"];
    $array["email"] = $_POST["email"];
    $array["message"] = $_POST["message"];
    $array["success"] = true;
    if(empty($array["nom"])) {
        $array["nomError"] = "required field ";
        $array["success"] = false;
    }
    if(empty($array["email"])) {
        $array["emailError"] = "required field ";
        $array["success"] = false;
    }

    if(empty($array["message"])) {
        $array["messageError"] = "required field ";
        $array["success"] = false;
    }
    if ($array["success"]) {
        sendingMail();
    }
    echo json_encode($array);
}









function sendingMail() {
    $passage_ligne = "\n";
    $nom = $_POST["nom"];
    $email=$_POST["email"];
    $message = $_POST["message"];
    $message_html = '<!doctype html>
    <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
    
    <head>
      <title> </title>
      <!--[if !mso]><!-- -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!--<![endif]-->
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <style type="text/css">
        #outlook a {
          padding: 0;
        }
    
        body {
          margin: 0;
          padding: 0;
          -webkit-text-size-adjust: 100%;
          -ms-text-size-adjust: 100%;
        }
    
        table,
        td {
          border-collapse: collapse;
          mso-table-lspace: 0pt;
          mso-table-rspace: 0pt;
        }
    
        img {
          border: 0;
          height: auto;
          line-height: 100%;
          outline: none;
          text-decoration: none;
          -ms-interpolation-mode: bicubic;
        }
    
        p {
          display: block;
          margin: 13px 0;
        }
      </style>
      <!--[if mso]>
            <xml>
            <o:OfficeDocumentSettings>
              <o:AllowPNG/>
              <o:PixelsPerInch>96</o:PixelsPerInch>
            </o:OfficeDocumentSettings>
            </xml>
            <![endif]-->
      <!--[if lte mso 11]>
            <style type="text/css">
              .mj-outlook-group-fix { width:100% !important; }
            </style>
            <![endif]-->
      <!--[if !mso]><!-->
      <link href="https://fonts.googleapis.com/css?family=Lato:300,400,500,700" rel="stylesheet" type="text/css">
      <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Lato:300,400,500,700);
      </style>
      <!--<![endif]-->
      <style type="text/css">
        @media only screen and (min-width:480px) {
          .mj-column-per-100 {
            width: 100% !important;
            max-width: 100%;
          }
        }
      </style>
      <style type="text/css">
        @media only screen and (max-width:480px) {
          table.mj-full-width-mobile {
            width: 100% !important;
          }
          td.mj-full-width-mobile {
            width: auto !important;
          }
        }
      </style>
    </head>
    
    <body style="background-color:#F4F4F4;">
      <div style="background-color:#F4F4F4;">
        <!--[if mso | IE]>
          <table
             align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600"
          >
            <tr>
              <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
          <![endif]-->
        <div style="background:#FFC847;background-color:#FFC847;margin:0px auto;max-width:600px;">
          <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#FFC847;background-color:#FFC847;width:100%;">
            <tbody>
              <tr>
                <td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;">
                  <!--[if mso | IE]>
                      <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                    
            <tr>
          
                <td
                   class="" style="vertical-align:top;width:600px;"
                >
              <![endif]-->
                  <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                    <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                      <tr>
                        <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                          <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
                            <tbody>
                              <tr>
                                <td style="width:128px;"> <img height="auto" src="https://image.flaticon.com/icons/png/512/146/146294.png" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;" width="128" /> </td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                      <tr>
                        <td align="center" style="font-size:0px;padding:0px 25px 0px 25px;word-break:break-word;">
                          <div style="font-family:Lato, sans-serif;font-size:14px;line-height:28px;text-align:center;color:#55575d;">You have received a greeting card from: <br>'.$nom.'</br> <br> '.$message.'<br>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </div>
                  <!--[if mso | IE]>
                </td>
              
            </tr>
          
                      </table>
                    <![endif]-->
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!--[if mso | IE]>
              </td>
            </tr>
          </table>
          
          <table
             align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600"
          >
            <tr>
              <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
          <![endif]-->
        <div style="background:#ffffff;background-color:#ffffff;margin:0px auto;max-width:600px;">
          <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%;">
            <tbody>
              <tr>
                <td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;">
                  <!--[if mso | IE]>
                      <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                    
            <tr>
          
                <td
                   class="" style="vertical-align:top;width:600px;"
                >
              <![endif]-->
                  <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                    <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%"> </table>
                  </div>
                  <!--[if mso | IE]>
                </td>
              
            </tr>
          
                      </table>
                    <![endif]-->
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!--[if mso | IE]>
              </td>
            </tr>
          </table>
          
          <table
             align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600"
          >
            <tr>
              <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
          <![endif]-->
        <div style="background:#ffffff;background-color:#ffffff;margin:0px auto;max-width:600px;">
          <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#ffffff;background-color:#ffffff;width:100%;">
            <tbody>
              <tr>
                <td style="direction:ltr;font-size:0px;padding:20px 0px 20px 0px;text-align:center;">
                  <!--[if mso | IE]>
                      <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                    
            <tr>
          
                <td
                   class="" style="vertical-align:top;width:600px;"
                >
              <![endif]-->
                  <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                    <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                      <tr>
                        <td align="center" style="font-size:0px;padding:0px 25px 0px 25px;word-break:break-word;">
                          <div style="font-family:Lato, sans-serif;font-size:17px;line-height:28px;text-align:center;color:#55575d;"><br>New dreams, new hopes, new experiences and new joys, I wish you all the best for this New Year to come in 2020! <br></br><br></br><br></br>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </div>
                  <!--[if mso | IE]>
                </td>
              
            </tr>
          
                      </table>
                    <![endif]-->
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!--[if mso | IE]>
              </td>
            </tr>
          </table>
          
          <table
             align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600"
          >
            <tr>
              <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
          <![endif]-->
        <div style="background:#FFC847;background-color:#FFC847;margin:0px auto;max-width:600px;">
          <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:#FFC847;background-color:#FFC847;width:100%;">
            <tbody>
              <tr>
                <td style="direction:ltr;font-size:0px;padding:20px 0;text-align:center;">
                  <!--[if mso | IE]>
                      <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                    
            <tr>
          
                <td
                   class="" style="vertical-align:top;width:600px;"
                >
              <![endif]-->
                  <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                    <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                      <tr>
                        <td align="center" style="font-size:0px;padding:10px 25px;word-break:break-word;">
                          <div style="font-family:Lato, sans-serif;font-size:13px;line-height:22px;text-align:center;color:#55575d;"><a style="color:#ffffff" href="https://khaoulaa.promo-31.codeur.online/greetingcards"><b>Get your card</b></a></div>
                        </td>
                      </tr>
                    </table>
                  </div>
                  <!--[if mso | IE]>
                </td>
              
            </tr>
          
                      </table>
                    <![endif]-->
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!--[if mso | IE]>
              </td>
            </tr>
          </table>
          
          <table
             align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600"
          >
            <tr>
              <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
          <![endif]-->
        <div style="margin:0px auto;max-width:600px;">
          <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
            <tbody>
              <tr>
                <td style="direction:ltr;font-size:0px;padding:20px 0px 20px 0px;text-align:center;">
                  <!--[if mso | IE]>
                      <table role="presentation" border="0" cellpadding="0" cellspacing="0">
                    
            <tr>
          
                <td
                   class="" style="vertical-align:top;width:600px;"
                >
              <![endif]-->
                  <div class="mj-column-per-100 mj-outlook-group-fix" style="font-size:0px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
                    <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
                      <tr>
                        <td align="center" style="font-size:0px;padding:0px 20px;word-break:break-word;">
                          <div style="font-family:Lato, sans-serif;font-size:13px;line-height:22px;text-align:center;color:#55575d;">By: Khaoula Alaoui</div>
                        </td>
                      </tr>
                    </table>
                  </div>
                  <!--[if mso | IE]>
                </td>
              
            </tr>
          
                      </table>
                    <![endif]-->
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!--[if mso | IE]>
              </td>
            </tr>
          </table>
          <![endif]-->
      </div>
    </body>
    
    </html>';
    
    //=====Création de la boundary.
    $boundary = "-----=" . md5(rand());
    $boundary_alt = "-----=" . md5(rand());
    //=====Définition du sujet.
    $subject = "You have received a greeting card";
    //=====Création du header de l'e-mail.
    $header = "From: mycard@greetingcard.com"  . $passage_ligne;
    $header .= "MIME-Version: 1.0" . $passage_ligne;
    $header .= "Content-Type: multipart/mixed;" . $passage_ligne . " boundary=\"$boundary\"" . $passage_ligne;
    //=====Création du message.
    $message = $passage_ligne . "--" . $boundary . $passage_ligne;
    $message .= "Content-Type: multipart/alternative;" . $passage_ligne . " boundary=\"$boundary_alt\"" . $passage_ligne;
    $message .= $passage_ligne . "--" . $boundary_alt . $passage_ligne;
    //=====Ajout du message au format texte.
    $message .= "Content-Type: text/plain; charset=\"UTF-8\"" . $passage_ligne;
    $message .= "Content-Transfer-Encoding: 8bit" . $passage_ligne;
    $message .= $passage_ligne . "--" . $boundary_alt . $passage_ligne;
    //=====Ajout du message au format HTML.
    $message .= "Content-Type: text/html; charset=\"UTF-8\"" . $passage_ligne;
    $message .= "Content-Transfer-Encoding: 8bit" . $passage_ligne;
    $message .= $passage_ligne . $message_html . $passage_ligne;
    //=====On ferme la boundary alternative.
    $message .= $passage_ligne . "--" . $boundary_alt . "--" . $passage_ligne;
    //==========
    $message .= $passage_ligne . "--" . $boundary . $passage_ligne;
    //=====Envoi de l'e-mail  
    mail($email, $subject, $message, $header);
}