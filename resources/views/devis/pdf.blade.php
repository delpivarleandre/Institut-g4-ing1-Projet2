<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">

    <title>Devis</title>

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
                <strong>{{$name}}</strong><br>
                <span>{{$mail}}</span> <br>
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
            <th class="text-left">Options</th>
            <th class="text-center">Calcul</th>
            <th class="text-center">TVA</th>
            <th class="text-right">Prix</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td class="text-left"><div><strong>Temps de location </strong></div>
                <p>Vous louez ce service pour une durée de {{$jours}} jours.</p></td>
            <td class="text-center">{{$jours}} x 10 €</td>
            <td class="text-center">20%</td>
            <td class="text-right">{{$calcul_jours}} €</td>
        </tr>
        <tr>
            <td><div><strong>Taille</strong></div>
                <p>Vous avez chosit la taille.</p></td>
            <td class="text-center"></td>
            <td class="text-center">20%</td>
            <td class="text-right">30,00 €</td>
        </tr>
        <tr>
            <td><div><strong>Emplacement</strong></div>
                <p>Vous avez chosit l'emplacement.</p></td>
            <td class="text-center"></td>
            <td class="text-center">20%</td>
            <td class="text-right">30,00 €</td>
        </tr>
        
        </tbody>
    </table>

    <div class="row">
        <div class="col-xs-6"></div>
        <div class="col-xs-5">
            <table style="width: 100%">
                <tbody>
                <tr class="well" style="padding: 5px">
                    <th style="padding: 5px"><div> Total sans TVA</div></th>
                    <td style="padding: 5px" class="text-right"><strong>{{$price_service}} </strong></td>
                </tr>
                
                <tr class="well" style="padding: 5px; margin-top:10px;">
                    <th style="padding: 5px"><div> Total </div></th>
                    <td style="padding: 5px" class="text-right"><strong>{{$amount}} </strong></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div style="margin-bottom: 0px">&nbsp;</div>

</body>
</html>
