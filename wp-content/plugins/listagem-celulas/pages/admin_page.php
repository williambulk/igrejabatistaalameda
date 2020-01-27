<div style="margin-left: -20px;">
    <div style="margin-left: 20px;">
        <h1>Gerenciar Células</h1>
        <div class="downloadBtnWrapper">
            <button id="downloadBackupBtn">Download Backup das Células</button>
        </div>
        <div class="btn" id="addBtn">
            <div class="gradientOverlay"></div>
            <div class="btnWrapper">
                <span>Adicionar Nova Célula</span>
            </div>
        </div>
        <div class="searchbar" onkeyup="searchCelula()">
            <input type="text" id="searchbar" placeholder="Digite o n° da célula">
            <span class="dashicons dashicons-search"></span>
        </div>
    </div>

    <div id="addCelulaWrapper" style="display: none;">
        <?php require_once plugin_dir_path(__FILE__ ) . 'add_page.php';?>
    </div>

    <div style="margin: 20px; box-shadow: 0px 2px 5px #ddd; border-radius: 10px;">
        <table class="tableCelulas" cellpadding="15" cellspacing="0">
        <thead>
            <tr>
                <th>Editar</th>
                <th>Apagar</th>
                <th>Nome do Líder</th>
                <th>Número da Célula</th>
                <th>Telefone</th>
                <th>Bairro</th>
                <th>Dia</th>
                <th>Horário</th>
                <th>Juventude</th>
            </tr>
        </thead>
        <tbody>
        <?php
        global $wpdb;

        $results = $wpdb->get_results( 'SELECT * FROM lc_celulas');

        foreach($results as $result){
            ?>
            <tr class="celulaTr" data-search="<?php echo $result->numeroCelula ?>">
                <td><div class="editBtn iconChange"><span class="dashicons dashicons-edit icon-default"></span><span class="dashicons dashicons-yes icon-hover"></span></div></td>
                <td><div class="deleteBtn deleteActive iconChange" data-id-celula="<?php echo $result->numeroCelula ?>"><span class="dashicons dashicons-trash icon-default"></span><span class="dashicons dashicons-no icon-hover"></span></div></td>
                <td class="editData"><span><?php echo $result->liderCelula ?></span></td>
                <td class="editData"><span><?php echo $result->numeroCelula ?></span></td>
                <td class="editData"><span><?php echo $result->telefone ?></span></td>
                <td class="editData"><span><?php echo $result->bairro ?></span></td>
                <td class="editData"><span><?php echo $result->diaCelula ?></span></td>
                <td class="editData"><span><?php echo $result->horaCelula ?></span></td>
                <td class="editData"><span><?php echo ($result->juventude) ? 'Sim' : 'Não' ?></span></td>
            </tr>
            <?php
        }

        ?>
        </tbody>
    </table></div>
</div>