<?php
    /*
    Plugin Name: Listagem de Células
    Plugin URI: www.igrejabatistaalameda.com.br
    Version: 0.2
    Author: Gustavo Fylyk
    Description: Gerencia as células com seus devidos bairros para melhorar a apresentação no site.
    */

if(!defined('ABSPATH')){
    die;
}

defined ('ABSPATH') or die('Hey, você não deveria estar por aqui ê.e');

if( ! function_exists('add_action')){
    echo 'Hey, você não deveria estar por aqui ê.e';
    exit;
}


register_activation_hook( __FILE__, 'lc_install');
register_uninstall_hook( __FILE__, 'lc_uninstall');

function lc_install(){
    global $wpdb;

    $charset_collate = $wpdb->get_charset_collate();
    //$table_name = "lc_celulas";

    $sql = "CREATE TABLE lc_celulas (
    		numeroCelula MEDIUMINT(9) NOT NULL,
    		liderCelula VARCHAR(90) NOT NULL,
    		telefone VARCHAR(90) NOT NULL,
    		diaCelula VARCHAR(7) NOT NULL,
    		horaCelula VARCHAR(90) NOT NULL,
    		bairro VARCHAR(90) NOT NULL,
    		juventude BIT NOT NULL DEFAULT 0,
    		UNIQUE KEY id (numeroCelula),
    		PRIMARY KEY (numeroCelula)
    ) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );

    restoreBackup();
}

function restoreBackup(){
    	global $wpdb;

        //achar o backup mais recente
        $prefix = 'backup_celulas_';
        $biggestdate = 0;

        $files = array_diff(scandir(plugin_dir_path(__FILE__ ) . "backups/"), array('..', '.'));

        foreach ($files as $file){
	        if (substr($file, 0, strlen($prefix)) == $prefix) {
		        $file = substr($file, strlen($prefix),strlen($file)-strlen($prefix)-4);
	        }
	        $date = date_create_from_format('Y-m-d_H-i', $file);
	        if($date > $biggestdate){
	            $biggestdate = $date;
            }
        }

        $timestamp = date_format($biggestdate,'Y-m-d_H-i');
	    $filename = plugin_dir_path(__FILE__ ) . "backups/" . "backup_celulas_{$timestamp}.csv";


		if(filesize($filename) > 0)
		{
			$file = fopen($filename, "r");

            //constrói array com os dados
			while (($data = fgetcsv($file, 10000, ",")) !== FALSE)
			{
                $dados[] = $data;
			}

            //copia o primeiro item
            $colunas = $dados[0];
			//remove o primeiro item do array
            unset($dados[0]);

            $sql = "INSERT INTO lc_celulas (";
            $sql .= implode(', ', $colunas);
            $sql .= ") VALUES ";

			$values = array();
			$place_holders = array();

            foreach ($dados as $celula){
                foreach ($celula as $campo){
	                $values[] = $campo;
                }
	            $place_holders[] = "(%d, %s, %s, %s, %s, %s, %d)";
            }

			$sql .= implode(', ', $place_holders);
			$wpdb->query( $wpdb->prepare($sql, $values));

			fclose($file);
		}

}

function lc_uninstall(){
// drop a custom database table
	global $wpdb;
	$wpdb->query("DROP TABLE IF EXISTS lc_celulas");
}


add_action('admin_menu','lc_add_admin_page');

function lc_add_admin_page(){
    add_menu_page('Gerenciador de Células', 'Células','manage_options', 'lc_admin_page', 'lc_admin_page','dashicons-groups', 59);
	//add_submenu_page('lc_admin_page', 'Adicionar Nova Célula', 'Adicionar', 'manage_options', 'lc_add_celula', 'lc_add_celula_page');
}


function lc_admin_page(){

	wp_enqueue_style('lc_estilo_css', plugin_dir_url(__FILE__) . 'css/styles.css');
	wp_enqueue_script('lc_script_css', plugin_dir_url(__FILE__) . 'js/scripts.js', array('jquery'));

	if(isset($_POST['insertType']) AND $_POST['insertType'] == "delete"){
		global $wpdb;
		$wpdb->delete('lc_celulas', array("numeroCelula" => $_POST['numeroCelula']));
	}else{
		if( isset($_POST['numeroCelula']) )
		{
			$validado = lc_validacao_add($_POST);
		}
		if(!$validado AND isset($validado)){
			global $wpdb;
			$data = array(
				'numeroCelula' => $_POST['numeroCelula'],
				'liderCelula' => $_POST['liderCelula'],
				'telefone' => $_POST['telefone'],
				'diaCelula' => $_POST['diaCelula'],
				'horaCelula' => $_POST['horaCelula'],
				'bairro' => $_POST['bairro'],
                'juventude' => (isset($_POST['juventude'])) ? true : false
			);

			if($_POST['insertType'] == "add"){
				$wpdb->insert('lc_celulas', $data);
			}else if($_POST['insertType'] == "edit"){
				$wpdb->update('lc_celulas', $data, array("numeroCelula" => $_POST['numeroCelula']));
			}
		}
	}

	require_once plugin_dir_path(__FILE__ ) . 'pages/admin_page.php';
}

function lc_validacao_add(array $post) {
	$erro = false;
	if ( ! isset( $post['numeroCelula'] ) OR empty( $post['numeroCelula'] ) ){
		echo 'Número de Célula Incorreto' . '<br>';
		$erro = true;
	}
	if ( ! isset( $post['liderCelula'] ) OR empty( $post['liderCelula'] ) ){
		echo 'Líder de Célula Incorreto' . '<br>';
		$erro = true;
	}
	if ( ! isset( $post['telefone'] ) OR empty( $post['telefone'] ) ){
		echo 'Telefone Incorreto' . '<br>';
		$erro = true;
	}
	if ( ! isset( $post['diaCelula'] ) OR empty( $post['diaCelula'] ) ){
		echo 'Dia da Célula Incorreto' . '<br>';
		$erro = true;
	}
	if ( ! isset( $post['horaCelula'] ) OR empty( $post['horaCelula'] ) ){
		echo 'Horário da Célula Incorreto' . '<br>';
		$erro = true;
	}
	if ( ! isset( $post['bairro'] ) OR empty( $post['bairro'] ) ){
		echo 'Bairro da Célula Incorreto';
		$erro = true;
	}

	return $erro;
}

add_shortcode("lista_celulas", "lc_listar_celulas");

function lc_listar_celulas(){
	global $wpdb;

	$celulas_info = $wpdb->get_results("SELECT * from lc_celulas  ORDER BY `bairro` ASC, `juventude` ASC, `liderCelula` ASC", "ARRAY_A");

	$celulas = group_by("bairro",$celulas_info);
	?>
    <div style="text-align: left !important;">
    <?php

	foreach ($celulas as $bairro => $celulas_bairro){
		?>
		<div style="padding: 10px; background-color: lightseagreen; color: white; width: fit-content; border-radius: 3px;"> <?php echo $bairro ?> </div>
		<div>
			<?php

			foreach ($celulas_bairro as $celula){
				echo "<p>";
                echo $celula["juventude"] ? "<b>JUVENTUDE: </b>" : "";
				echo "{$celula["liderCelula"]} - {$celula["telefone"]} - {$celula["diaCelula"]} - {$celula["horaCelula"]} - (N° {$celula["numeroCelula"]}) </p>";
			}

			?>
		</div>
		<?php
	}
	echo "</div>";

}

function group_by($key, $array) {
	$result = array();

	foreach($array as $val) {
		if(array_key_exists($key, $val)){
			$result[$val[$key]][] = $val;
		}else{
			$result[""][] = $val;
		}
	}

	function compareASCII($a, $b) { //função para chamar para que os bairros com acento sejam considerados sem para ordenar alfabeticamente
		$at = iconv('UTF-8', 'ASCII//TRANSLIT', $a);
		$bt = iconv('UTF-8', 'ASCII//TRANSLIT', $b);
		return strcmp($at, $bt);
	}

	uksort($result, 'compareASCII');

	return $result;
}


//AJAX pro download do backup
add_action('wp_ajax_csv', 'csv_pull');

function csv_pull() {
	/*ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);*/

	//$filename = ABSPATH.'segnalazioni.csv';

	global $wpdb;

	$results = $wpdb->get_results("SELECT * FROM  lc_celulas",ARRAY_A);

	if (empty($results)) {
		return;
	}

	$csv_output = '"'.implode('","',array_keys($results[0])).'"';

	foreach ($results as $row) {
		$csv_output .= "\r\n".'"'.implode('","',$row).'"';
	}

	$filename = "backup_celulas_".date("Y-m-d_H-i",time()).".csv";
	$filepath = plugin_dir_path(__FILE__ ) . "backups/" . $filename;
    $fileurl = plugin_dir_url(__FILE__) . "backups/" . $filename;
	file_put_contents( $filepath, $csv_output);

	echo $fileurl;

	die();
}

?>