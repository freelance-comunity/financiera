<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Skyline Invoice Email</title>
  <style type="text/css">
    @import url(http://fonts.googleapis.com/css?family=Lato:400);

    /* Take care of image borders and formatting */

    img {
      max-width: 600px;
      outline: none;
      text-decoration: none;
      -ms-interpolation-mode: bicubic;
    }

    a {
      text-decoration: none;
      border: 0;
      outline: none;
    }

    a img {
      border: none;
    }

    /* General styling */

    td, h1, h2, h3  {
      font-family: Helvetica, Arial, sans-serif;
      font-weight: 400;
    }

    body {
      -webkit-font-smoothing:antialiased;
      -webkit-text-size-adjust:none;
      width: 100%;
      height: 100%;
      color: #37302d;
      background: #ffffff;
    }

    table {
      border-collapse: collapse !important;
    }


    h1, h2, h3 {
      padding: 0;
      margin: 0;
      color: #ffffff;
      font-weight: 400;
    }

    h3 {
      color: #21c5ba;
      font-size: 24px;
    }

    .important-font {
      color: #21BEB4;
      font-weight: bold;
    }

    .hide {
      display: none !important;
    }

    .force-full-width {
      width: 100% !important;
    }
  </style>

  <style type="text/css" media="screen">
    @media screen {
     /* Thanks Outlook 2013! http://goo.gl/XLxpyl*/
     td, h1, h2, h3 {
      font-family: 'Lato', 'Helvetica Neue', 'Arial', 'sans-serif' !important;
    }
  }
</style>

<style type="text/css" media="only screen and (max-width: 480px)">
  /* Mobile styles */
  @media only screen and (max-width: 480px) {
    table[class="w320"] {
      width: 320px !important;
    }

    table[class="w300"] {
      width: 300px !important;
    }

    table[class="w290"] {
      width: 290px !important;
    }

    td[class="w320"] {
      width: 320px !important;
    }

    td[class="mobile-center"] {
      text-align: center !important;
    }

    td[class="mobile-padding"] {
      padding-left: 20px !important;
      padding-right: 20px !important;
      padding-bottom: 20px !important;
    }

    td[class="mobile-block"] {
      display: block !important;
      width: 100% !important;
      text-align: left !important;
      padding-bottom: 20px !important;
    }

    td[class="mobile-border"] {
      border: 0 !important;
    }

    td[class*="reveal"] {
      display: block !important;
    }
  }
  .demo {
    border:1px solid #008040;
    border-collapse:collapse;
    padding:5px;
  }
  .demo th {
    border:1px solid #008040;
    padding:5px;
    background:#F0FAE7;
  }
  .demo td {
    border:1px solid #008040;
    padding:5px;
  }
</style>
</head>
<body class="body" style="padding:0; margin:0; display:block; background:#ffffff; -webkit-text-size-adjust:none" bgcolor="#ffffff">
  <table align="center" cellpadding="0" cellspacing="0" width="100%" height="100%" >
    <tr>
      <td align="center" valign="top" bgcolor="#ffffff"  width="100%">

        <table cellspacing="0" cellpadding="0" width="100%">
          <tr>
            <td style="border-bottom: 3px solid #0DB559;" width="100%">
              <center>
                <table cellspacing="0" cellpadding="0" width="500" class="w320">
                  <tr>
                    <td valign="top" style="padding:10px 0; text-align:left;" class="mobile-center">
                      <img src="{{asset('img/pdf/logo_sc.png')}}">
                    </td>
                  </tr>
                </table>
              </center>
            </td>
          </tr>
          <tr>
            <td background="https://www.filepicker.io/api/file/kmlo6MonRpWsVuuM47EG" bgcolor="#8b8284" valign="top" style="background: url(https://www.filepicker.io/api/file/kmlo6MonRpWsVuuM47EG) no-repeat center; background-color: #8b8284; background-position: center;">
          <!--[if gte mso 9]>
          <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="mso-width-percent:1000;height:303px;">
            <v:fill type="tile" src="https://www.filepicker.io/api/file/kmlo6MonRpWsVuuM47EG" color="#8b8284" />
            <v:textbox inset="0,0,0,0">
            <![endif]-->
            <div>
              <center>
                <table cellspacing="0" cellpadding="0" width="530" height="303" class="w320">
                  <tr>
                    <td valign="middle" style="vertical-align:middle; padding-right: 15px; padding-left: 15px; text-align:left;" height="303">

                      <table cellspacing="0" cellpadding="0" width="100%">
                        <tr>
                          <td>
                            <h1>RESUMEN DE PAGOS ATRASADOS</h1><br>
                            <h2>{{ Date::now()->format('l j F Y') }}</h2>
                            <br>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </center>
            </div>
          <!--[if gte mso 9]>
            </v:textbox>
          </v:rect>
          <![endif]-->
        </td>
      </tr>
      <tr>
        <td valign="top">

          <center>

          </td>
        </tr>
      </table>
      <table class="demo">
        <caption>Clientes Morosos</caption>
        <thead>
          <tr>
            <th>NO. PAGO</th>
            <th>ACREDITADO</th>
            <th>MONTO</th>
            <th>RECARGO</th>
            <th>TOTAL</th>
            <th>FECHA</th>
          </tr>
        </thead>
        <tbody>
          @php
          $date_now = Carbon\Carbon::now()->toDateString();
          $payments = App\Models\Payments::where('payment_date', $date_now)->where('status', 'Atrasado')->get();
          @endphp
          @foreach ($payments as $payment)
          @php
          $credit = App\Models\Credits::find($payment->debt->credits_id);
          @endphp
          <tr>
            <td>&nbsp;{{$payment->number}} de {{$credit->term}}</td>
            <td>&nbsp;{{$credit->accredited->name}} {{$credit->accredited->last_name}}</td>
            <td>&nbsp;${{number_format($payment->ammount)}}</td>
            <td>&nbsp; ${{$payment->surcharge}}</td>
            <td>&nbsp; ${{$payment->total}}</td>
            <td>&nbsp;{{$payment->payment_date}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </center>
  </td>
</tr>
<tr>
  <td style="background-color:#c2c2c2;">
    <center>
      <table cellspacing="0" cellpadding="0" width="500" class="w320">
        <tr>
          <td>
            <table cellspacing="0" cellpadding="30" width="100%">
              <tr>
                <td style="text-align:center;">
                  <a href="#">
                    <img width="61" height="51" src="https://www.filepicker.io/api/file/vkoOlof0QX6YCDF9cCFV" alt="twitter" />
                  </a>
                  <a href="#">
                    <img width="61" height="51" src="https://www.filepicker.io/api/file/fZaNDx7cSPaE23OX2LbB" alt="google plus" />
                  </a>
                  <a href="#">
                    <img width="61" height="51" src="https://www.filepicker.io/api/file/b3iHzECrTvCPEAcpRKPp" alt="facebook" />
                  </a>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <tr>
          <td>
            <center>
              <table style="margin:0 auto;" cellspacing="0" cellpadding="5" width="100%">
                <tr>
                  <td style="text-align:center; margin:0 auto;" width="100%">
                   <a href="#" style="text-align:center;">
                     <img style="margin:0 auto;" width="123" height="24" src="https://www.filepicker.io/api/file/u7CkMXcOSlG8TMbr3LnG" alt="logo link" />
                   </a>
                 </td>
               </tr>
             </table>
           </center>
         </td>
       </tr>
     </table>
   </center>
 </td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>