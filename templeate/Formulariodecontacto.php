<!-- Contact Section-->

<section class="container" style="padding: 100px;">
    <form action="contacto.php" method="post" id="contactForm">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0" style="font-family: swiper-icons; padding-bottom: 25px;">Contáctanos</h2>

        <!-- Campo de Correo Electrónico -->
        <div class="form-floating mb-3">
            <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
            <label for="email">Correo Electrónico</label>
            <div class="invalid-feedback" data-sb-feedback="email:required">Se requiere un correo electrónico.</div>
            <div class="invalid-feedback" data-sb-feedback="email:email">Correo electrónico no válido.</div>
        </div>

        <!-- Campo de Nombre Completo -->
        <div class="form-floating mb-3">
            <input class="form-control" id="name" type="text" placeholder="Ingresa tu nombre completo..." data-sb-validations="required" />
            <label for="name">Nombre Completo</label>
            <div class="invalid-feedback" data-sb-feedback="name:required">Se requiere el nombre completo.</div>
        </div>

        <!-- Campo de Asunto -->
        <div class="form-floating mb-3">
            <input class="form-control" id="subject" type="text" placeholder="Ingresa el asunto..." data-sb-validations="required" />
            <label for="subject">Asunto</label>
            <div class="invalid-feedback" data-sb-feedback="subject:required">Se requiere un asunto.</div>
        </div>

        <!-- Campo de Comentario -->
        <div class="form-floating mb-3">
            <textarea class="form-control" id="comment" type="text" placeholder="Ingresa tu comentario aquí..." style="height: 10rem" data-sb-validations="required"></textarea>
            <label for="comment">Comentario</label>
            <div class="invalid-feedback" data-sb-feedback="comment:required">Se requiere un comentario.</div>
        </div>

        <!-- Botón de Enviar -->
        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Enviar">
        </div>
    </form>
</section>

