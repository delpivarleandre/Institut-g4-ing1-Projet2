<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">

    <title>Invoice</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <style>
        .text-right {
            text-align: right;
        }
    </style>

</head>
<body class="login-page" style="background: white">

<div>
    <div class="row">
        <div class="col-xs-7">
            <h4>De:</h4>
            <strong>Eco-services</strong><br>
            24 Avenue Joannes Masset <br>
            Lyon 9, 69009<br>
            E: eco.service.institut.g4@gmail.com <br>

            <br>
        </div>

        <div class="col-xs-4">
            <img src="https://lh4.googleusercontent.com/1IsRIpCsgl6hUnN2U1pj83Fvx7k3w7RuHZfhM6Ie-QVM2Cbr5jObQhpRvr5ZdM4oN1eBtf9jpODl-KyhQsktHoUfda12M16D5C4OHJIT" alt="logo">
        </div>
    </div>

    <div style="margin-bottom: 0px">&nbsp;</div>

    <div class="row">
        <div class="col-xs-6">
            <h4>A:</h4>
            <address>
                <strong>Baptiste Loubet</strong><br>
                <span>baptiste.loubet@outlook.com</span> <br>
                <span>0659596433</span><br>
                <span>103 Route de Genas, Villeurbanne 69100</span>
            </address>
        </div>

        <div class="col-xs-5">
            <table style="width: 100%">
                <tbody>
                <tr>
                    <th>Numéro de devis:</th>
                    <td class="text-right">{{$id}}</td>
                </tr>
                <tr>
                    <th> Date: </th>
                    <td class="text-right">{{ $date }}</td>
                </tr>
                </tbody>
            </table>

            <div style="margin-bottom: 0px">&nbsp;</div>

            <table style="width: 100%; margin-bottom: 20px">
                <tbody>
                <tr class="well" style="padding: 5px">
                    <th style="padding: 5px"><div> Commercial : </div></th>
                    <td style="padding: 5px" class="text-right"><strong> </strong></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <table class="table">
        <thead style="background: #F5F5F5;">
        <tr>
            <th>Liste des services</th>
            <th></th>
            <th class="text-right">Price</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><div><strong>Service</strong></div>
                <p>Description here. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt maiores placeat similique nisi. Nisi ratione, molestias exercitationem illo reiciendis cumque?</p></td>
            <td></td>
            <td class="text-right">$600</td>
        </tr>
        <tr>
            <td><div><strong>Service</strong></div>
                <p>Description here. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt maiores placeat similique nisi. Nisi ratione, molestias exercitationem illo reiciendis cumque?</p></td>
            <td></td>
            <td class="text-right">$600</td>
        </tr>
        </tbody>
    </table>

    <div class="row">
        <div class="col-xs-6"></div>
        <div class="col-xs-5">
            <table style="width: 100%">
                <tbody>
                <tr class="well" style="padding: 5px">
                    <th style="padding: 5px"><div> Balance Due (CAD) </div></th>
                    <td style="padding: 5px" class="text-right"><strong> $600 </strong></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div style="margin-bottom: 0px">&nbsp;</div>

</body>
</html>
