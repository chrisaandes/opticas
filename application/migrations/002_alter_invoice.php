<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Alter_invoice extends CI_Migration {

	public function up() {
		$fields = array(
			'arm_modelo varchar(100) DEFAULT \'\' NOT NULL',
			'arm_color varchar(45) DEFAULT \'\' NOT NULL',
			'arm_tipo varchar(45) DEFAULT \'\' NOT NULL',
			'arm_tamanio varchar(45) DEFAULT \'\' NOT NULL',
			'arm_arocompleto varchar(45) DEFAULT \'\' NOT NULL',
			'hc_traum varchar(45) DEFAULT \'\' NOT NULL',
			'hc_motivo integer(5) DEFAULT 0 NOT NULL',
			'hc_otromot text DEFAULT \'\' NOT NULL',
			'hc_medicamentos text DEFAULT \'\' NOT NULL',
			'hc_alergias text DEFAULT \'\' NOT NULL',
			'salud_info text DEFAULT \'\' NOT NULL',
			'salud_resumen text DEFAULT \'\' NOT NULL',
			'ex_coverta  integer(9) DEFAULT 0 NOT NULL',
			'ex_covertu  integer(9) DEFAULT 0 NOT NULL',
			'ex_reflejoc text DEFAULT \'\' NOT NULL',
			'ex_ppc text DEFAULT \'\' NOT NULL',
			'ex_ppa text DEFAULT \'\' NOT NULL',
			'ex_puptam text DEFAULT \'\' NOT NULL',
			'ex_pupdir text DEFAULT \'\' NOT NULL',
			'ex_pupcons text DEFAULT \'\' NOT NULL',
			'ex_motiofi text DEFAULT \'\' NOT NULL',
			'ex_motiomov text DEFAULT \'\' NOT NULL',
			'ex_motioseg text DEFAULT \'\' NOT NULL',
			'ex_motiosaca text DEFAULT \'\' NOT NULL',
			'ex_confrontaciones text DEFAULT \'\' NOT NULL',
			'ex_visioncolor text DEFAULT \'\' NOT NULL',
			'ex_estereopsis text DEFAULT \'\' NOT NULL',
			'ex_camposc text DEFAULT \'\' NOT NULL',
			'ex_oftanex text DEFAULT \'\' NOT NULL',
			'ex_oftanexod text DEFAULT \'\' NOT NULL',
			'ex_oftanexoi text DEFAULT \'\' NOT NULL',
			're_queratod text DEFAULT \'\' NOT NULL',
			're_queratoi text DEFAULT \'\' NOT NULL',
			're_refiestaod text DEFAULT \'\' NOT NULL',
			're_refiestaoi text DEFAULT \'\' NOT NULL',
			're_refidinaod text DEFAULT \'\' NOT NULL',
			're_refidinaoi text DEFAULT \'\' NOT NULL',
			're_subjbricood text DEFAULT \'\' NOT NULL',
			're_subjbricooi text DEFAULT \'\' NOT NULL',
			're_subjcilod text DEFAULT \'\' NOT NULL',
			're_subjciloi text DEFAULT \'\' NOT NULL',
			're_subjadiod text DEFAULT \'\' NOT NULL',
			're_subjadioi text DEFAULT \'\' NOT NULL',
			're_subjmaxod text DEFAULT \'\' NOT NULL',
			're_subjmaxoi text DEFAULT \'\' NOT NULL',
			're_subjdip text DEFAULT \'\' NOT NULL',
			'presc_diag text DEFAULT \'\' NOT NULL',
			'presc_diagod text DEFAULT \'\' NOT NULL',
			'presc_diagoi text DEFAULT \'\' NOT NULL',
			'presc_diagodd text DEFAULT \'\' NOT NULL',
			'presc_tratamiento text DEFAULT \'\' NOT NULL',
			'presc_pronostico text DEFAULT \'\' NOT NULL',
			'presc_obser text DEFAULT \'\' NOT NULL',

		);

		$this->dbforge->add_column('invoice',$fields);

	}

	public function down() {

	}

}

/* End of file 003_create_session.php */
/* Location: ./application/migrations/003_create_session.php */
