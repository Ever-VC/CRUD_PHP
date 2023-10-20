<main>
    <section id="hero" class="blur-in-expand">
        <h1>CLIENTES</h1>
        <table class="table">
            <thead>
                <tr class="">
                    <th>Id</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Fecha Nacimiento</th>
                    <th>Dirección</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <?php 
            $id = 0;
            foreach($clients as $client): 
                $url = BASE_DIR . "client/{$client["id"]}";
                echo
                <<<OUTPUT
                        <tr>
                            <td>{$client["id"]}</td>
                            <td>{$client["firstname"]}</td>
                            <td>{$client["lastname"]}</td>
                            <td>{$client["birth"]}</td>
                            <td>{$client["address"]}</td>
                            <td class="btns">
                                <a href="{$url}/delete" title="Eliminar"><i class="fas fa-trash"></i></a>
                                <a href="{$url}/edit" title="Editar"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{$url}" title="Ver perfil"><i class="fa-solid fa-address-card"></i></a>
                            </td>
                        </tr>
                OUTPUT;
            endforeach; ?>
        </table>
    </section>
</main>