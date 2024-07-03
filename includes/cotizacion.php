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
                                        <select class="custom-select px-4" name="destino" style="height: 45px;" required>
                                            <option selected disabled>Destino</option>
                                            <?php
                                                $sql = "SELECT id_destino, nombre_destino FROM destinos";
                                                $result = $conexion->query($sql);
                                                if($result->num_rows > 0){
                                                    while($row = $result->fetch_assoc()){
                                                        echo '<option value="'.$row['id_destino'].'">'.$row['nombre_destino'].'</option>';
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
                                        <select class="custom-select px-4" name="cantidad_personas" style="height: 47px;" required>
                                            <option selected>Personas</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button class="info__btn" style="height: 47px; margin-top: -2px;" type="submit" name="submit_cotizacion">Cotizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Reserva - Fin -->