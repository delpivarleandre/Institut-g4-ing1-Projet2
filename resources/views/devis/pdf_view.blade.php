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
        <td><b>Name</b></td>
        <td><b>Email</b></td>
        <td><b>Phone</b></td>     
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>
          {{$devi->name}}
        </td>
        <td>
          {{$devi->email}}
        </td>
        <td>
          {{$devi->phone}}
        </td>
      </tr>
      </tbody>
    </table>
  </body>
</html>