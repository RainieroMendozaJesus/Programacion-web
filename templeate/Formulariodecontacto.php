<!-- Contact Section-->

<section class="container" style="padding: 100px;">
    <form method="POST" id="contactForm">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0" style="font-family: swiper-icons; padding-bottom: 25px;">Contáctanos</h2>
        <?php
            include "controlador/comentario_.php";
            include "connexion/connexion";
        ?>

        <!-- Campo de Correo Electrónico -->
        <div class="form-floating mb-3">
            <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" required />
            <label for="email">Correo Electrónico</label>
        </div>

        <!-- Campo de Nombre Completo -->
        <div class="form-floating mb-3">
            <input class="form-control" id="name" name="name" type="text" placeholder="Ingresa tu nombre completo..." required />
            <label for="name">Nombre Completo</label>
        </div>

        <!-- Campo de Asunto -->
        <div class="form-floating mb-3">
            <input class="form-control" id="subject" name="subject" type="text" placeholder="Ingresa el asunto..." required />
            <label for="subject">Asunto</label>
        </div>

        <!-- Campo de Comentario -->
        <div class="form-floating mb-3">
            <textarea class="form-control" id="comment" name="comment" placeholder="Ingresa tu comentario aquí..." style="height: 10rem" required></textarea>
            <label for="comment">Comentario</label>
        </div>

        <!-- Botón de Enviar -->
        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Enviar</button>
    </form>
</section>