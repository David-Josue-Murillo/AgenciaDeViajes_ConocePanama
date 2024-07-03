<?php 
if(!isset($_SESSION)){
    session_start();    
}
?>.

<!-- Reserva - Inicio -->
<div class="container-fluid booking mt-5 pb-5">
    <div class="container pb-5">
        <div class="bg-light shadow" style="padding: 30px;">
            <div class="row align-items-center" style="min-height: 60px;">
                <form action="php/area_cotizacion.php" method="post" class="d-md-flex">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <select class="custom-select px-4" name="destino" id="destino" style="height: 45px;" required>
                                        <option selected disabled>Destino</option>
                                        <?php
                                            $sql = "SELECT id_paquete, nombre_paquete FROM paquetes";
                                            $result = $conexion->query($sql);
                                            if($result->num_rows > 0){
                                                while($row = $result->fetch_assoc()){
                                                    echo '<option value="'.$row['id_paquete'].'">'.$row['nombre_paquete'].'</option>';
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date py-1" id="date1" data-target-input="nearest">
                                        <input type="date" class="form-control" name="fecha_inicio" placeholder="Fecha de inicio" data-target="#date1" data-toggle="datetimepicker" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date py-1" id="date2" data-target-input="nearest">
                                        <input type="date" class="form-control" name="fecha_fin" placeholder="Fecha de fin" data-target="#date2" data-toggle="datetimepicker" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3 mb-md-0">
                                    <div class="date py-1" id="priceContainer" data-target-input="nearest">
                                        <input type="number" class="form-control" id="precioDestino" name="precio" data-target="#precio" data-toggle="datetimepicker" value="" required readonly/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <?php if(isset($_SESSION['id_usuario'])): ?>
                            <button class="info__btn" style="height: 47px; margin-top: -2px;" type="submit" name="submit_cotizacion">Reservar</button>
                        <?php else: ?>
                            <button class="info__btn" style="height: 47px; margin-top: -2px;" type="submit" name="submit_cotizacion">Cotizar</button>
                        <?php endif; ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    <!-- Reserva - Fin -->  