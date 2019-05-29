<head>
    <meta charset="utf-8">
    <title>Registro en Auroria</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/carrito.css">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crete+Round|Josefin+Sans|Montserrat+Alternates" rel="stylesheet">
</head>
<div class="container">
<?php require "components/navbar_perfil.php"; ?>
<br>
<br>
<br>
<br>
  <table id="cart" class="table table-hover table-condensed">
    <thead>
      <tr>
        <th style="width:50%">Producto</th>
        <th style="width:10%">Precio</th>
        <th style="width:8%">Cantidad</th>
        <th style="width:22%" class="text-center">Subtotal</th>
        <th style="width:10%"></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td data-th="Product">
          <div class="row">
            <div class="col-sm-2 hidden-xs"><img src="" alt="..." class="img-responsive" /></div>
            <div class="col-sm-10">
              <h4 class="nomargin">Producto 1</h4>
              <p>Lorem ipsum dolor sit amet.</p>
            </div>
          </div>
        </td>
        <td data-th="Price">$100.-</td>
        <td data-th="Quantity">
          <input type="number" class="form-control text-center" value="1">
        </td>
        <td data-th="Subtotal" class="text-center">100.-</td>
        <td class="actions" data-th="">
          <button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
          <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
        </td>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continuar Compra</a></td>
        <td colspan="2" class="hidden-xs"></td>
        <td class="hidden-xs text-center"><strong>Total $100.-</strong></td>
        <td><a href="#" class="btn btn-success btn-block">Comprar <i class="fa fa-angle-right"></i></a></td>
      </tr>
    </tfoot>
  </table>
</div>