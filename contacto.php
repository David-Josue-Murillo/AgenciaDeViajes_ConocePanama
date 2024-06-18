<?php
include_once 'includes/header.php';
?>

<main class="section__content__contacto section__contact">
    <section class="container-fluid w-50">
        <div class="text-center">
            <h1 class="text-4xl text-prim">Contacto</h1>
            <p class="fs-5 text-second">Contacto para cualquier consulta</p>
        </div>

        <div class="d-flex justify-content-center bg-body-secondary border border-warning-subtle rounded px-3 py-3">
            <form action="">
                <div>
                    <input type="text" name="nombre" placeholder="Tu nombre">
                </div>

                <div>
                    <input type="email" name="email" placeholder="Tu email">
                </div>

                <div>
                    <input type="text" name="asunto" placeholder="Asunto">
                </div>

                <div>
                    <textarea name="mensaje" placeholder="Mensaje"></textarea>
                </div>

                <input type="submit" value="Enviar">
            </form>
        </div>
    </section>
</main>
</body>

</html>