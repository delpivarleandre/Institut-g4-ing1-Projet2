<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table class="table table-bordered">
    <thead>
      <tr>
        <td><b>Quantité</b></td>
        <td><b>Temps de location (en jour)</b></td>
        <td><b>Taille</b></td>     
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>
          {{$devi->qty}}
        </td>
        <td>
          {{$devi->time}}
        </td>
        <td>
          {{$devi->size}}
        </td>
      </tr>
      </tbody>
    </table>
  </body>
</html>