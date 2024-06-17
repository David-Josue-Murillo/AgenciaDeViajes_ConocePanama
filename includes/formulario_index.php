<form action="">
    <div class="d-flex justify-content-between mb-2">
        <div class="d-flex flex-column gap-1">
            <label for="nombre">Nombre</label>
            <input type="text" class="border border-2 border-success rounded px-2 py-1" name="nombre" placeholder="Escribe tu nombre">
        </div>
        <div class="d-flex flex-column gap-1">
            <label for="apellido">Apellido</label>
            <input type="text" class="border border-2 border-success rounded px-2 py-1" name="apellido" placeholder="Escribe tu apellido">
        </div>
    </div>

    <div class="d-flex justify-content-between mb-2">
        <div class="d-flex flex-column gap-1">
            <label for="email">Email</label>
            <input type="email" class="border border-2 border-success rounded px-2 py-1" name="email" placeholder="email@gmail.com">
        </div>
        <div class="d-flex flex-column gap-1">
            <label for="telefono">Telefono</label>
            <input type="tel" class="border border-2 border-success rounded px-2 py-1" name="telefono" placeholder="+507 6666-6666">
        </div>
    </div>

    <div class="d-flex flex-column mb-2">
        <label for="pasajeros">Número de pasajeros</label>
        <input type="number" class="border border-2 border-success rounded px-2 py-1" name="pasajeros">
    </div>

    <div class="d-flex flex-column mb-2">
        <label for="destino">Destino</label>
        <select name="destino" class="border border-2 border-success rounded px-2 py-1">
            <option value="Bocas del Toro">Bocas del Toro</option>
            <option value="Isla Contadora">Isla Contadora</option>
            <option value="Isla Taboga">Isla Taboga</option>
        </select>
    </div>

    <div class="d-flex flex-column mb-4">
        <label for="fecha">Fecha</label>
        <input type="date" class="border border-2 border-success rounded px-2 py-1" name="fecha">
    </div>

    <input type="submit" value="Solicitar" class="btn btn-success w-100">
</form>