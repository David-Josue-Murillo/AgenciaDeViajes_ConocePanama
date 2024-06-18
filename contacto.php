<?php
include_once 'includes/header.php';
?>

<main class="section__content__contacto section__contact">
    <section class="container-fluid section__contact__form">
        <div class="text-center">
            <h1 class="text-4xl text-prim">Contacto</h1>
            <p class="fs-5 text-second">Contacto para cualquier consulta</p>
        </div>

        <div class="d-flex justify-content-center bg-body-secondary border border-warning-subtle rounded px-4 py-4 w-100">
            <form action="" method="post" class="d-flex flex-column gap-3 w-100">
                <div class="d-flex justify-content-between w-100">
                    <input type="text" name="nombre" placeholder="Tu nombre" class="border border-2 border-success rounded px-2 py-2 contact__input">
                    <input type="email" name="email" placeholder="Tu email" class="border border-2 border-success rounded px-2 py-2 contact__input">
                </div>

                <div class="d-flex justify-content-between w-100">
                    <input type="text" name="asunto" placeholder="Asunto" class="border border-2 border-success rounded px-2 py-2 w-100">
                </div>

                <div class="d-flex justify-content-between w-100">
                    <textarea name="mensaje" placeholder="Mensaje" class="border border-2 border-success rounded px-2 py-2 contact__textarea"></textarea>
                </div>

                <input class="btn btn-success w-100 mt-2" type="submit" value="Enviar">
            </form>
        </div>
    </section>
</main>
</body>

</html>