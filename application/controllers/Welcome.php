<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	* Index Page for this controller.
	*
	* Maps to the following URL
	* 		http://example.com/index.php/welcome
	*	- or -
	* 		http://example.com/index.php/welcome/index
	*	- or -
	* Since this controller is set as the default controller in
	* config/routes.php, it's displayed at http://example.com/
	*
	* So any other public methods not prefixed with an underscore will
	* map to /index.php/welcome/<method_name>
	* @see https://codeigniter.com/user_guide/general/urls.html
	*/

	function __construct() {
		parent::__construct();
		$this->load->model("Invoice_m");

	}


	public function index()
	{
		$this->load->view('welcome_message');
	}




	public function add() {
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		if($_POST) {
			$rules = $this->rules();
			$this->form_validation->set_rules($rules);
			$this->form_validation->set_message('xss_clean', 'You need to select something');
			if ($this->form_validation->run() == FALSE) {
				echo validation_errors();
			}else {

				$this->Invoice_m->insert($_POST);
				echo 'ok';
			}
		}
	}

	protected function rules() {
		$rules = array(


			array(
				'field' => 'arm_modelo',
				'label' => 'Modelo',
				'rules' => 'trim'
			),
			array(
				'field' => 'arm_color',
				'label' => 'Color',
				'rules' => 'trim'
			),
			array(
				'field' => 'arm_tipo',
				'label' => 'Tipo',
				'rules' => 'trim'
			),
			array(
				'field' => 'hc_traum',
				'label' => 'Traumatismo, enfermedad o cirugía ocular',
				'rules' => 'trim'
			),
			array(
				'field' => 'hc_motivo',
				'label' => 'Motivo de la consulta',
				'rules' => 'trim'
			),
			array(
				'field' => 'hc_otromot',
				'label' => 'Motivo de la consulta (opcional)',
				'rules' => 'trim'
			),
			array(
				'field' => 'hc_medicamentos',
				'label' => 'Medicamentos que consume',
				'rules' => 'trim'
			),
			array(
				'field' => 'hc_alergias',
				'label' => 'Alergias',
				'rules' => 'trim'
			),
			array(
				'field' => 'salud_info',
				'label' => 'Salud general',
				'rules' => 'trim'
			),
			array(
				'field' => 'salud_resumen',
				'label' => 'Salud General, mas información',
				'rules' => 'trim'
			),
			array(
				'field' => 'ex_coverta',
				'label' => 'Cover Test: Unilateral (L)',
				'rules' => 'trim'
			),
			array(
				'field' => 'ex_covertu',
				'label' => 'Cover Test: Unilateral (C)',
				'rules' => 'trim'
			),
			array(
				'field' => 'ex_reflejoc',
				'label' => 'Reflejo Corneal',
				'rules' => 'trim'
			),
			array(
				'field' => 'ex_ppc',
				'label' => 'PPC',
				'rules' => 'trim'
			),
			array(
				'field' => 'ex_ppa',
				'label' => 'PPA',
				'rules' => 'trim'
			),
			array(
				'field' => 'ex_puptam',
				'label' => 'Pupilas: Tamaño',
				'rules' => 'trim'
			),
			array(
				'field' => 'ex_pupdir',
				'label' => 'Pupilas: Directo',
				'rules' => 'trim'
			),
			array(
				'field' => 'ex_pupcons',
				'label' => 'Pupilas: Consensual',
				'rules' => 'trim'
			),
			array(
				'field' => 'ex_motiofi',
				'label' => 'Motilidad Ocular: Fijación',
				'rules' => 'trim'
			),
			array(
				'field' => 'ex_motiomov',
				'label' => 'Motilidad Ocular: Mov. Oculares H',
				'rules' => 'trim'
			),
			array(
				'field' => 'ex_motioseg',
				'label' => 'Motilidad Ocular: Seguimientos',
				'rules' => 'trim'
			),
			array(
				'field' => 'ex_motiosaca',
				'label' => 'Motilidad Ocular: Sacádicos',
				'rules' => 'trim'
			),
			array(
				'field' => 'ex_confrontaciones',
				'label' => 'Confrontaciones',
				'rules' => 'trim'
			),
			array(
				'field' => 'ex_visioncolor',
				'label' => 'Visión de Color',
				'rules' => 'trim'
			),
			array(
				'field' => 'ex_estereopsis',
				'label' => 'Estereópsis',
				'rules' => 'trim'
			),
			array(
				'field' => 'ex_camposc',
				'label' => 'Campos Centrales',
				'rules' => 'trim'
			),
			array(
				'field' => 'ex_oftanex',
				'label' => 'Oftalmoscopía Anexos',
				'rules' => 'trim'
			),

			array(
				'field' => 'ex_oftanexod',
				'label' => 'Oftalmoscopía Anexos: OD',
				'rules' => 'trim'
			),
			array(
				'field' => 'ex_oftanexoi',
				'label' => 'Oftalmoscopía Anexos: OI',
				'rules' => 'trim'
			),
			array(
				'field' => 're_queratod',
				'label' => 'Queratometría OD',
				'rules' => 'trim'
			),
			array(
				'field' => 're_queratoi',
				'label' => 'Queratometría OI',
				'rules' => 'trim'
			),
			array(
				'field' => 're_refiestaod',
				'label' => 'Refinoscopía Estática OD',
				'rules' => 'trim'
			),
			array(
				'field' => 're_refiestaoi',
				'label' => 'Refinoscopía Estática OI',
				'rules' => 'trim'
			),
			array(
				'field' => 're_refidinaod',
				'label' => 'Refinoscopía Dinámica OD',
				'rules' => 'trim'
			),
			array(
				'field' => 're_refidinaoi',
				'label' => 'Refinoscopía Dinámica OI',
				'rules' => 'trim'
			),
			array(
				'field' => 're_subjbricood',
				'label' => 'Subjetivo: Bicromática OD',
				'rules' => 'trim'
			),
			array(
				'field' => 're_subjbricooi',
				'label' => 'Subjetivo: Cilindro Cruzado OI',
				'rules' => 'trim'
			),
			array(
				'field' => 're_subjcilod',
				'label' => 'Subjetivo: Cilindro Cruzado OD',
				'rules' => 'trim'
			),
			array(
				'field' => 're_subjciloi',
				'label' => 'Subjetivo: Adición OI',
				'rules' => 'trim'
			),
			array(
				'field' => 're_subjadiod',
				'label' => 'Subjetivo: Adición OD ',
				'rules' => 'trim'
			),
			array(
				'field' => 're_subjadiod',
				'label' => 'Subjetivo: Máximo Positivo OD',
				'rules' => 'trim'
			),
			array(
				'field' => 're_subjmaxod',
				'label' => 'Subjetivo: Máximo Positivo OI',
				'rules' => 'trim'
			),
			array(
				'field' => 're_subjmaxoi',
				'label' => 'Subjetivo: DIP (1) (2)',
				'rules' => 'trim'
			),
			array(
				'field' => 're_subjdip',
				'label' => 'Subjetivo: DIP (1) (2)',
				'rules' => 'trim'
			),
			array(
				'field' => 'presc_diag',
				'label' => 'Diagnóstico',
				'rules' => 'trim'
			),
			array(
				'field' => 'presc_diagod',
				'label' => 'Diagnóstico OD',
				'rules' => 'trim'
			),
			array(
				'field' => 'presc_diagoi',
				'label' => 'Diagnóstico OI',
				'rules' => 'trim'
			),
			array(
				'field' => 'presc_diagodd',
				'label' => 'Diagnóstico ADD',
				'rules' => 'trim'
			),
			array(
				'field' => 'presc_tratamiento',
				'label' => 'Tratamiento',
				'rules' => 'trim'
			),
			array(
				'field' => 'presc_pronostico',
				'label' => 'Pronostico',
				'rules' => 'trim'
			),
			array(
				'field' => 'presc_obser',
				'label' => 'Tratamiento y Observaciones',
				'rules' => 'trim'
			)
		);
		return $rules;
	}


}
