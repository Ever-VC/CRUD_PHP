<main>
    <section id="hero" class="blur-in-expand">
        <h1>EDITAR CLIENTE</h1>
        <article class="newUser-container">
        <div class="title">
            <h2>Actualizar registro</h2>
            <hr>
        </div>
            <form action="<?= BASE_DIR; ?>client/<?= $clients["id"]; ?>/update" method="post">
            
                <?php
                    echo
                    <<<OUTPUT
                        <div class="form-group">
                            <p>Nombres</p>
                            <input class="input" type="text" name="firstname" placeholder="Ingrese los nombres..." value="{$clients["firstname"]}">
                        </div>
                        <div class="form-group">
                            <p>Apellidos</p>
                            <input class="input" type="text" name="lastname" placeholder="Ingrese los apellidos..." value="{$clients["lastname"]}">
                        </div>
                        <div class="form-group">
                            <p>Fecha de nacimiento</p>
                            <input class="input" type="date" name="birth" placeholder="dd/mm/yyyy" value="{$clients["birth"]}">
                        </div>
                        <div class="form-group">
                            <p>Dirección de envío</p>
                            <input class="input" type="text" name="address" placeholder="Ingrese la dirección..." value="{$clients["address"]}">
                        </div>                            
                    OUTPUT;                    
                ?>
                <input class="btn" type="submit" value="Actualizar">
            </form>
        </article>
    </section>
</main>