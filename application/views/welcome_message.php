<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

	<div class="row">
		<div class="col-xs-12">
			<form action="welcome/add" class="form-horizontal" role="form" method="post" accept-charset="utf-8">

				<div class="panel panel-default">
					<div class="panel-body">

						<legend>ARMAZON</legend>
						<div class="form-group">
							<div class="col-sm-6">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for="inputModelo" class="col-sm-4 control-label">MODELO</label>
											<div class="col-sm-8">
												<input type="text" name="arm_modelo" id="inputModelo" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label for="inputColor" class="col-sm-4 control-label">COLOR</label>
											<div class="col-sm-8">
												<input type="text" name="arm_color" id="inputColor" class="form-control">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for="inputTipo" class="col-sm-4 control-label">TIPO</label>
											<div class="col-sm-8">
												<input type="text" name="arm_tipo" id="inputTipo" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label for="inputTamaño" class="col-sm-4 control-label">TAMAÑO</label>
											<div class="col-sm-8">
												<input type="text" name="arm_tamanio" id="inputTamaño" class="form-control">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for="inputArocompleto" class="col-sm-4 control-label">ARO COMPLETO</label>
											<div class="col-sm-8">
												<input type="text" name="arm_arocompleto" id="inputArocompleto" class="form-control">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>



						<legend>HISTORIA CLINICA</legend>
						<div class="form-group">
							<div class="col-sm-12">
								<div class="row">
									<div class="col-sm-4">
										<div class="form-group">
											<label for="inputModelo" class="col-sm-4 control-label">TRAUMATISMO, ENFERMEDAD O CIRUGÍA OCULAR</label>
											<div class="col-sm-8">
												<input type="text" name="hc_traum" id="inputModelo" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<label for="inputColor" class="col-sm-4 control-label">MOTIVO DE LA CONSULTA</label>
											<div class="col-sm-8">
												<input type="text" name="hc_motivo" id="inputColor" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<label for="inputColor" class="col-sm-4 control-label">OTRO MOTIVO DE LA CONSULTA(EN CASO DE QUE LO HAYA)</label>
											<div class="col-sm-8">
												<input type="text" name="hc_otromot" id="inputColor" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label for="inputColor" class="col-sm-4 control-label">MEDICAMENTOS QUE CONSUME</label>
											<div class="col-sm-8">

												<textarea class="form-control" name="hc_medicamentos"></textarea>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label for="inputColor" class="col-sm-4 control-label">ALERGIAS</label>
											<div class="col-sm-8">

												<textarea class="form-control" name="hc_alergias"></textarea>
											</div>
										</div>
									</div>

									<div class="col-sm-6">
										<div class="form-group">
											<label for="inputColor" class="col-sm-4 control-label">SALUD GENERAL, MAS INFORMACIÓN</label>
											<div class="col-sm-8">

												<textarea class="form-control" name="salud_info"></textarea>
											</div>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="inputColor" class="col-sm-4 control-label">RESUMEN DE INTERROGATORIO(OBSERVACIONES)</label>
											<div class="col-sm-8">

												<textarea class="form-control" name="salud_resumen"></textarea>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<legend>EXAMENES PRELIMINARES</legend>
						<div class="form-group">
							<div class="col-sm-12">
								<div class="row">
									<div class="col-sm-3">
										<div class="form-group">
											<label for="inputModelo" class="col-sm-4 control-label">COVER TEST ALTERNANTE</label>
											<div class="col-sm-8">
												<input type="text" name="salud_resumen" id="inputModelo" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label for="inputModelo" class="col-sm-4 control-label">COVER TEST UNILATERAL</label>
											<div class="col-sm-8">
												<input type="text" name="ex_covertu" id="inputModelo" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label for="inputModelo" class="col-sm-4 control-label">REFLEJO CORNEAL</label>
											<div class="col-sm-8">
												<input type="text" name="ex_reflejoc" id="inputModelo" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label for="inputModelo" class="col-sm-4 control-label">PPC</label>
											<div class="col-sm-8">
												<input type="text" name="ex_ppc" id="inputModelo" class="form-control">
											</div>
										</div>
									</div>
								</div>
								<div class="row">

									<!--DIVIDER-->

									<div class="col-sm-3">
										<div class="form-group">
											<label for="inputModelo" class="col-sm-4 control-label">PPA</label>
											<div class="col-sm-8">
												<input type="text" name="ex_ppa" id="inputModelo" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label for="inputModelo" class="col-sm-4 control-label">PUPILAS: TAMAÑO</label>
											<div class="col-sm-8">
												<input type="text" name="ex_puptam" id="inputModelo" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label for="inputModelo" class="col-sm-4 control-label">PUPILAS: DIRECTO</label>
											<div class="col-sm-8">
												<input type="text" name="ex_pupdir" id="inputModelo" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label for="inputModelo" class="col-sm-4 control-label">PUPILAS: CONSENSUAL</label>
											<div class="col-sm-8">
												<input type="text" name="ex_pupcons" id="inputModelo" class="form-control">
											</div>
										</div>
									</div>
								</div>
								<div class="row">


									<!--DIVIDER-->

									<div class="col-sm-3">
										<div class="form-group">
											<label for="inputModelo" class="col-sm-4 control-label">MOTILIDAD OCULAR: FIJACIÓN</label>
											<div class="col-sm-8">
												<input type="text" name="ex_motiofi" id="inputModelo" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label for="inputModelo" class="col-sm-4 control-label">MOTILIDAD OCULAR: MOV. OCULARES H</label>
											<div class="col-sm-8">
												<input type="text" name="ex_motiomov" id="inputModelo" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label for="inputModelo" class="col-sm-4 control-label">MOTILIDAD OCULAR: SEGUIMIENTOS</label>
											<div class="col-sm-8">
												<input type="text" name="ex_motioseg" id="inputModelo" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label for="inputModelo" class="col-sm-4 control-label">MOTILIDAD OCULAR: SACÁDICOS</label>
											<div class="col-sm-8">
												<input type="text" name="ex_motiosaca" id="inputModelo" class="form-control">
											</div>
										</div>
									</div>
								</div>
								<div class="row">


									<!--DIVIDER-->

									<div class="col-sm-3">
										<div class="form-group">
											<label for="inputModelo" class="col-sm-4 control-label">CONFRONTACIONES</label>
											<div class="col-sm-8">
												<input type="text" name="ex_confrontaciones" id="inputModelo" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label for="inputModelo" class="col-sm-4 control-label">VISIÓN DE COLOR</label>
											<div class="col-sm-8">
												<input type="text" name="ex_visioncolor" id="inputModelo" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label for="inputModelo" class="col-sm-4 control-label">ESTEREÓPSIS</label>
											<div class="col-sm-8">
												<input type="text" name="ex_estereopsis" id="inputModelo" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label for="inputModelo" class="col-sm-4 control-label">CAMPOS CENTRALES</label>
											<div class="col-sm-8">
												<input type="text" name="ex_camposc" id="inputModelo" class="form-control">
											</div>
										</div>
									</div>
								</div>
								<div class="row">


									<!--DIVIDER-->

									<div class="col-sm-3">
										<div class="form-group">
											<label for="inputModelo" class="col-sm-4 control-label">OFTALMOSCOPÍA ANEXOS</label>
											<div class="col-sm-8">
												<input type="text" name="ex_oftanex" id="inputModelo" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label for="inputModelo" class="col-sm-4 control-label">OFTALMOSCOPÍA ANEXOS: OD</label>
											<div class="col-sm-8">
												<input type="text" name="ex_oftanexod" id="inputModelo" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label for="inputModelo" class="col-sm-4 control-label">OFTALMOSCOPÍA ANEXOS: OI</label>
											<div class="col-sm-8">
												<input type="text" name="ex_oftanexoi" id="inputModelo" class="form-control">
											</div>
										</div>
									</div>

								</div>
							</div>

						</div>
						<legend>REFRACCIÓN</legend>
						<div class="form-group">
							<div class="col-sm-12">
								<div class="row">


									<!--DIVIDER-->

									<div class="col-sm-3">
										<div class="form-group">
											<label for="inputModelo" class="col-sm-4 control-label">QUERATOMETRÍA OD</label>
											<div class="col-sm-8">
												<input type="text" name="re_queratod" id="inputModelo" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label for="inputModelo" class="col-sm-4 control-label">QUERATOMETRÍA OI</label>
											<div class="col-sm-8">
												<input type="text" name="re_queratoi" id="inputModelo" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label for="inputModelo" class="col-sm-4 control-label">REFINOSCOPÍA ESTATICA OD</label>
											<div class="col-sm-8">
												<input type="text" name="re_refiestaod" id="inputModelo" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label for="inputModelo" class="col-sm-4 control-label">REFINOSCOPÍA ESTATICA OI</label>
											<div class="col-sm-8">
												<input type="text" name="re_refiestaoi" id="inputModelo" class="form-control">
											</div>
										</div>
									</div>
								</div>
								<div class="row">


									<!--DIVIDER-->

									<div class="col-sm-3">
										<div class="form-group">
											<label for="inputModelo" class="col-sm-4 control-label">REFINOSCOPÍA DINAMICA OD</label>
											<div class="col-sm-8">
												<input type="text" name="re_refidinaod" id="inputModelo" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label for="inputModelo" class="col-sm-4 control-label">REFINOSCOPÍA DINAMICA OI</label>
											<div class="col-sm-8">
												<input type="text" name="re_refidinaoi" id="inputModelo" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label for="inputModelo" class="col-sm-4 control-label">SUBJETIVO BRICROMÁTICA OD</label>
											<div class="col-sm-8">
												<input type="text" name="re_subjbricood" id="inputModelo" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label for="inputModelo" class="col-sm-4 control-label">SUBJETIVO BRICROMÁTICA OI</label>
											<div class="col-sm-8">
												<input type="text" name="re_subjbricooi" id="inputModelo" class="form-control">
											</div>
										</div>
									</div>
								</div>
								<div class="row">


									<!--DIVIDER-->

									<div class="col-sm-3">
										<div class="form-group">
											<label for="inputModelo" class="col-sm-4 control-label">SUBJETIVO: CILINDRO CRUZADO OD</label>
											<div class="col-sm-8">
												<input type="text" name="re_subjcilod" id="inputModelo" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label for="inputModelo" class="col-sm-4 control-label">SUBJETIVO: CILINDRO CRUZADO OI</label>
											<div class="col-sm-8">
												<input type="text" name="re_subjciloi" id="inputModelo" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label for="inputModelo" class="col-sm-4 control-label">SUBJETIVO: ADICIÓN OD</label>
											<div class="col-sm-8">
												<input type="text" name="re_subjadiod" id="inputModelo" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label for="inputModelo" class="col-sm-4 control-label">SUBJETIVO: ADICIÓN OI</label>
											<div class="col-sm-8">
												<input type="text" name="re_subjadioi" id="inputModelo" class="form-control">
											</div>
										</div>
									</div>
								</div>


								<div class="row">


									<!--DIVIDER-->

									<div class="col-sm-3">
										<div class="form-group">
											<label for="inputModelo" class="col-sm-4 control-label">SUBJETIVO: MÁXIMO POSITIVO OD</label>
											<div class="col-sm-8">
												<input type="text" name="re_subjmaxod" id="inputModelo" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label for="inputModelo" class="col-sm-4 control-label">SUBJETIVO: MÁXIMO POSITIVO OI</label>
											<div class="col-sm-8">
												<input type="text" name="re_subjmaxoi" id="inputModelo" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="form-group">
											<label for="inputModelo" class="col-sm-4 control-label">SUBJETIVO: DIP</label>
											<div class="col-sm-8">
												<input type="text" name="re_subjdip" id="inputModelo" class="form-control">
											</div>
										</div>
									</div>

								</div>

							</div>
						</div>

						<legend>PRESCRIPCION</legend>
						<div class="form-group">
							<div class="col-sm-6">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for="inputModelo" class="col-sm-4 control-label">DIAGNÓSTICO</label>
											<div class="col-sm-8">
												<input type="text" name="presc_diag" id="inputModelo" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label for="inputColor" class="col-sm-4 control-label">DIAGNÓSTICO OD</label>
											<div class="col-sm-8">
												<input type="text" name="presc_diagod" id="inputColor" class="form-control">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for="inputTipo" class="col-sm-4 control-label">DIAGNÓSTICO OI</label>
											<div class="col-sm-8">
												<input type="text" name="presc_diagoi" id="inputTipo" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label for="inputTamaño" class="col-sm-4 control-label">DIAGNÓSTICO ADD</label>
											<div class="col-sm-8">
												<input type="text" name="presc_diagodd" id="inputTamaño" class="form-control">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for="inputArocompleto" class="col-sm-4 control-label">TRATAMIENTO</label>
											<div class="col-sm-8">
												<input type="text" name="presc_tratamiento" id="inputArocompleto" class="form-control">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for="inputArocompleto" class="col-sm-4 control-label">PRONOSTICO</label>
											<div class="col-sm-8">
												<input type="text" name="presc_pronostico" id="inputArocompleto" class="form-control">
											</div>
										</div>
									</div>
								</div>
							</div>


							<div class="col-sm-12">
								<div class="form-group">
									<label for="inputColor" class="col-sm-4 control-label">TRATAMIENTO Y OBSERVACIONES</label>
									<div class="col-sm-8">

										<textarea class="form-control" name="presc_obser"></textarea>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

				<button>Enviar</button>

			</div>
		</div>
	</form>
</div>
</div>

</body>
</html>
