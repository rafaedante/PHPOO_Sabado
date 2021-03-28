<?php

 $monto = $_GET["pagar"];
?>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
<title>My Shop</title>
	
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
	
<form id="card-form" >
	<div class="card">
	    <div class="card-header">
		<div class="row display-tr">
                    <h3 style="color: black" align="center">My Shop - </h3>
                    <h3>Total a Pagar $ <?php echo $monto   ?></h3>
            </div>
	</div>
	</div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <label>Nombre de Tarjeta</label>
                    <input value="Usuario" data-conekta="card[name]" class="form-control" name="name" id="name" type="text">	
                </div>
                 <div class="col-md-6">
                    <label>Tipo de Tarjeta</label>
                    <input value="Visa" data-conekta="card[name]" class="form-control" name="name" id="name" type="text">	
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label>Número de Tarjeta</label>
                    <input value="4242424242424242" data-conekta="card[number]" class="form-control" type="text" maxlength="16">	
                </div>
					
                <div class="col-md-6">
                    <label>CVC</label>
                    <input  value="399" data-conekta="card[name]" class="form-control" type="text" maxlength="4">
                </div>
					
                <div class="col-md-6">
                    <label>Fecha de expiración (MM/AA)</label>
                    <div>
                        <input style="width: 60px; display:inline-block; text-align: center" value="11" data-conekta="card[exp_month]" class="form-control" type="text" maxlength="2"><h4 style="width: 10px; display:inline-block">/</h4>	
                        <input style="width: 60px; display:inline-block; text-align: center" value="20" data-conekta="card[exp_year]" class="form-control" type="text" maxlength="2">
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <button class="btn btn-success btn-lg" type="submit">
                        <i class="fa fa-check-square"></i> PAGAR
                    </button>
                </div>
            </div>
        </div>        
</form>

</body>
</html>
