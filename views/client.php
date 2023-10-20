<main>
    <section id="hero" class="blur-in-expand">
        <h1>PERFIL DEL CLIENTE</h1>
        <section class="user-container">
            <article class="user-image">
                <img src="<?= BASE_DIR; ?>imgs/user-profile.png" alt="">
            </article>
            <article class="user-data">
                <div class="user-personal-data">
                    <h2>Datos personales:</h2>
                    <?php 
                        echo
                        <<<OUTPUT
                            <p>Nombres: {$clients["firstname"]}</p>
                            <p>Apellidos: {$clients["lastname"]}</p>
                            <p>Fecha de nacimiento: {$clients["birth"]}</p>
                            <p>Dirección: {$clients["address"]}</p>
                        OUTPUT;
                    ?>
                </div>
            </article>
        </section>
    </section>
</main>