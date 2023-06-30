{{-- <html>
<head>
    <title>SIUP</title>
</head>
<style type="text/css">
    body{
        font-family: 'Roboto Condensed', sans-serif;
    }
    .m-0{
        margin: 0px;
    }
    .p-0{
        padding: 0px;
    }
    .pt-5{
        padding-top:5px;
    }
    .mt-10{
        margin-top:10px;
    }
    .text-center{
        text-align:center !important;
    }
    .w-100{
        width: 100%;
    }
    .w-50{
        width:50%;   
    }
    .w-70{
        width:70%;   
    }
    .w-85{
        width:85%;   
    }
    .w-30{
        width:30%;   
    }
    .w-15{
        width:15%;   
    }
    .logo img{
        width:45px;
        height:45px;
        padding-top:30px;
    }
    .logo span{
        margin-left:8px;
        top:19px;
        position: absolute;
        font-weight: bold;
        font-size:25px;
    }
    .gray-color{
        color:#5D5D5D;
    }
    .text-bold{
        font-weight: bold;
    }
    .border{
        border:1px solid black;
    }
    table tr,th,td{
        border: 1px solid #d2d2d2;
        border-collapse:collapse;
        padding:7px 8px;
    }
    table tr th{
        background: #F4F4F4;
        font-size:15px;
    }
    table tr td{
        font-size:13px;
    }
    table{
        border-collapse:collapse;
    }
    .box-text p{
        line-height:10px;
    }
    .float-left{
        float:left;
    }
    .total-part{
        font-size:16px;
        line-height:12px;
    }
    .total-right p{
        padding-right:20px;
    }
</style>
<body>
        <div class="head-title">
        <h1 class="text-center m-0 p-0">Resume</h1>
    </div>
    @foreach ($sp_mig_nomor_agenda_baru as $item)
    <div class="add-detail mt-10">
        <div class="w-50 float-left mt-10">
            <p class="m-0 pt-5 text-bold w-100">Nomor Agenda :  <span class="gray-color">{{ $item->nomor_agenda }}</span></p>
            <p class="m-0 pt-5 text-bold w-100">Nomor NIB : <span class="gray-color">{{ $item->nomor_nib }}</span></p>
            <p class="m-0 pt-5 text-bold w-100">Nama : <span class="gray-color">{{ $item->penyampai_permohonan }}</span></p>
        </div>
        <div style="clear: both;"></div>
    </div>
    @endforeach
    
</body>


</html> --}}

<html>
<head>
    <style>
    body {
        font-family: sans-serif;
        font-size: 10pt;
    }

    p {
        margin: 0pt;
    }

    table.items {
        border: 0.1mm solid #e7e7e7;
    }

    td {
        vertical-align: top;
    }

    .items td {
        border-left: 0.1mm solid #e7e7e7;
        border-right: 0.1mm solid #e7e7e7;
    }

    table thead td {
        text-align: center;
        border: 0.1mm solid #e7e7e7;
    }

    .items td.blanktotal {
        background-color: #EEEEEE;
        border: 0.1mm solid #e7e7e7;
        background-color: #FFFFFF;
        border: 0mm none #e7e7e7;
        border-top: 0.1mm solid #e7e7e7;
        border-right: 0.1mm solid #e7e7e7;
    }

    .items td.totals {
        text-align: right;
        border: 0.1mm solid #e7e7e7;
    }

    .items td.cost {
        text-align: "."center;
    }
    </style>
</head>

<body>
    <table width="100%" style="font-family: sans-serif;" cellpadding="10">
        <tr>
            <td width="100%" style="padding: 0px; text-align: center;">
              <a href="#" target="_blank"><img src="https://shezannj.com/wp-content/uploads/2019/01/dummy-logo-png-7.png" width="264" height="110" alt="Logo" align="center" border="0"></a>
            </td>
        </tr>
        <tr>
            <td width="100%" style="text-align: center; font-size: 20px; font-weight: bold; padding: 0px;">
              INVOICE
            </td>
        </tr>
        <tr>
          <td height="10" style="font-size: 0px; line-height: 10px; height: 10px; padding: 0px;">&nbsp;</td>
        </tr>
    </table>
    <table width="100%" style="font-family: sans-serif;" cellpadding="10">
        <tr>
            <td width="49%" style="border: 0.1mm solid #eee;">Name<br>Company Name<br>Area<br>Area 2<br>Kent<br>0123 6NN</td>
            <td width="2%">&nbsp;</td>
            <td width="49%" style="border: 0.1mm solid #eee; text-align: right;"><strong>Company Name Ltd</strong><br>00-00 ABC Aare<br>Country Name<br>123 456<br><br><strong>Telephone:</strong> +00 000 000 0000<br><a href="#" target="_blank" style="color: #000; text-decoration: none;">companyname.com</a><br><a href="#" target="_blank" style="color: #000; text-decoration: none;">companyname.com</a><br><a href="#" target="_blank" style="color: #000; text-decoration: none;">companyname.com</a><br><a href="#" target="_blank" style="color: #000; text-decoration: none;">companyname.com</a><br></td>
        </tr>
    </table>
    <br>
    <table width="100%" style="font-family: sans-serif; font-size: 14px;" >
        <tr>
            <td>
                <table width="60%" align="left" style="font-family: sans-serif; font-size: 14px;" >
                    <tr>
                        <td style="padding: 0px; line-height: 20px;">&nbsp;</td>
                    </tr>
                </table>
                <table width="40%" align="right" style="font-family: sans-serif; font-size: 14px;" >
                    <tr>
                        <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;"><strong>Booking Reference</strong></td>
                        <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;">XXXXXXXX</td>
                    </tr>
                    <tr>
                        <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;"><strong>Lead Passenger</strong></td>
                        <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;">Pessenger Name</td>
                    </tr>
                    <tr>
                        <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;"><strong>Invoice Date</strong></td>
                        <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;">XX/XX/XXXX</td>
                    </tr>
                    <tr>
                        <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;"><strong>Balance Due Date</strong></td>
                        <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;">XX/XX/XXXX</td>
                    </tr>
                    <tr>
                        <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;"><strong>Departure Date</strong></td>
                        <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;">XX/XX/XXXX</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <br>
    <table class="items" width="100%" style="font-size: 14px; border-collapse: collapse;" cellpadding="8">
        <thead>
            <tr>
                <td width="15%" style="text-align: left;"><strong>PAX</strong></td>
                <td width="45%" style="text-align: left;"><strong>Description</strong></td>
                <td width="20%" style="text-align: left;"><strong>Amount</strong></td>
                <td width="20%" style="text-align: left;"><strong>Total Trip Cost</strong></td>
            </tr>
        </thead>
        <tbody>
            <!-- ITEMS HERE -->
            <tr>
                <td style="padding: 0px 7px; line-height: 20px;"></td>
                <td style="padding: 0px 7px; line-height: 20px;">Split to Dubrovnik Luxury Cruise on Mama Marija</td>
                <td style="padding: 0px 7px; line-height: 20px;"></td>
                <td></td>
            </tr>
            <tr>
                <td style="padding: 0px 7px; line-height: 20px;">
                    <br>
                </td>
                <td style="padding: 0px 7px; line-height: 20px;">
                    <br>
                </td>
                <td style="padding: 0px 7px; line-height: 20px;">
                    <br>
                </td>
                <td style="padding: 0px 7px; line-height: 20px;">
                    <br>
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 7px; line-height: 20px;">2</td>
                <td style="padding: 0px 7px; line-height: 20px;">VIP cabin with Private Balcony</td>
                <td style="padding: 0px 7px; line-height: 20px;">£1,295.00</td>
                <td style="padding: 0px 7px; line-height: 20px;">£2,590.00</td>
            </tr>
            <tr>
                <td style="padding: 0px 7px; line-height: 20px;">2</td>
                <td style="padding: 0px 7px; line-height: 20px;">Lower deck cabin</td>
                <td style="padding: 0px 7px; line-height: 20px;">£000.00</td>
                <td style="padding: 0px 7px; line-height: 20px;">£000.00</td>
            </tr>
            <tr>
                <td style="padding: 0px 7px; line-height: 20px;">2</td>
                <td style="padding: 0px 7px; line-height: 20px;">EasyJet extra legroom seats</td>
                <td style="padding: 0px 7px; line-height: 20px;">£000.00</td>
                <td style="padding: 0px 7px; line-height: 20px;">£000.00</td>
            </tr>
        </tbody>
    </table>
    <br>
    <table width="100%" style="font-family: sans-serif; font-size: 14px;" >
        <tr>
            <td>
                <table width="60%" align="left" style="font-family: sans-serif; font-size: 14px;" >
                    <tr>
                        <td style="padding: 0px; line-height: 20px;">&nbsp;</td>
                    </tr>
                </table>
                <table width="40%" align="right" style="font-family: sans-serif; font-size: 14px;" >
                    <tr>
                        <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;"><strong>Total Amount</strong></td>
                        <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;">£000.00</td>
                    </tr>
                    <tr>
                        <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;"><strong>Deposit</strong></td>
                        <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;">£000.00</td>
                    </tr>
                    <tr>
                        <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;"><strong>Commission</strong></td>
                        <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;">£000.00</td>
                    </tr>
                    <tr>
                        <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;"><strong>Remaining Balance</strong></td>
                        <td style="border: 1px #eee solid; padding: 0px 8px; line-height: 20px;">Remaining Balance</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <br>
    <table width="100%" style="font-family: sans-serif; font-size: 14px;" >
        <br>
        <tr>
            <td>
                <table width="25%" align="left" style="font-family: sans-serif; font-size: 14px;" >
                    <tr>
                        <td style="padding: 0px; line-height: 20px;">
                            <img src="img/protected.png" alt="protected" style="display: block; margin: auto;">
                        </td>
                    </tr>
                </table>
                <table width="50%" align="left" style="font-family: sans-serif; font-size: 13px; text-align: center;" >
                    <tr>
                        <td style="padding: 0px; line-height: 20px;">
                            <strong>Company Name</strong>
                            <br>
                            ABC AREA
                            <br>
                            Tel: +00 000 000 0000 | Email: info@companyname.com
                            <br>
                            Company Registered in Country Name. Company Reg. 12121212.
                            <br>
                            VAT Registration No. 021021021 | ATOL No. 1234
                        </td>
                    </tr>
                </table>
                <table width="25%" align="right" style="font-family: sans-serif; font-size: 14px;" >
                    <tr>
                        <td style="padding: 0px; line-height: 20px;">
                            <img src="img/abtot.png" alt="abtot" style="display: block; margin: auto;">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <br>
    </table>
</body>
</html>