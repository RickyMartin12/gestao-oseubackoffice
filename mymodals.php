

<!--										Clientes  									-->

<!-- Modal Edit -->

    <div class="modal fade" id="clientes__modal" tabindex="-1" role="dialog" aria-labelledby="clientes">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" style="color:#fff!important;" id="clientes__modal__title"><span class="glyphicon glyphicon-edit" style="color: #5bc0de;"></span> Cliente Numero #<span class="servico_id"></span></h4>
                </div>
                
                
                <div class="modal-body">
                <div class="row">
                    <form id="edit_transfer_form" role="form">
                        <!-- Nome do Cliente -->
		              <div class='col-md-3 col-sm-6 col-xs-12'>
		                  <div class="form-group">
		                      <label class="control-label" title="O dia a que se realiza o serviço/transfers.(Visivel na aplicação)" >Data do Cliente <span class="w3-text-red">*</span></label>
		                      <div class='input-group date' id='data_cliente_edit'>
		                          <input type='text' readonly class="form-control" name="data_cl" id="data_cl_edit" placeholder="Data Serviço *"/>
		                          <span class="input-group-addon">
		                              <span class="glyphicon glyphicon-calendar"></span>
		                          </span>
		                      </div>
		                  </div>
		              </div>

		              <!-- Categoria -->
		              <div class='col-md-3 col-sm-6 col-xs-12'>
		                  <div class="form-group">
		                      <label class="control-label" title="Categoria da escolha do Cliente">Categoria</label>
		                      <div class="input-group" style='width:100%;'>
		                      <select class="form-control" name="categoria" id="cat_edit">
		                        
		                     </select>
		                    </div>
		                  </div>
		              </div>

              			<!-- Nome do Cliente -->

					    <div class='col-md-3 col-sm-6 col-xs-12'>
					        <div class="form-group">
					            <label class="control-label" title="Nome do Cliente">Nome da Empresa</label>
					            <div class="input-group" style='width:100%;'>
					            	<input style="border-radius: 4px;" type="text" class="form-control" name="cliente" id="cliente_edit" placeholder="Nome do Cliente">
					          	</div>
					        </div>
					    </div>

					    <!-- Numero de Contrinuinte -->

					    <div class='col-md-3 col-sm-6 col-xs-12'>
					        <div class="form-group">
					            <label class="control-label" title="Numero de Contribuinte">Numero de Contribuinte</label>
					            <div class="input-group" style='width:100%;'>
					            	<input style="border-radius: 4px;" type="text" class="form-control" name="nif" id="nif_edit" placeholder="Numero de Contribuinte">
					          	</div>
					        </div>
					    </div>

					    <!-- Responsável -->
					    <div class='col-md-3 col-sm-6 col-xs-12'>
					        <div class="form-group">
					            <label class="control-label" title="Responsavel">Nome do Cliente</label>
					            <div class="input-group" style='width:100%;'>
					            	<input style="border-radius: 4px;" type="text" class="form-control" name="responsavel" id="responsavel_edit" placeholder="Responsavel">
					          	</div>
					        </div>
					    </div>
					    <!-- Telemovel 1 -->
					    <div class='col-md-3 col-sm-6 col-xs-12'>
					        <div class="form-group">
					            <label class="control-label" title="Numero do 1º Telemovel">Telefone</label>
					            <div class="input-group" style='width:100%;'>
					            	<input style="border-radius: 4px;" type="text" class="form-control" name="tel1" id="tel1_edit" placeholder="Telemovel 1">
					          	</div>
					        </div>
					    </div>
					    <!-- Telemovel 2 -->
					    <div class='col-md-3 col-sm-6 col-xs-12'>
					        <div class="form-group">
					            <label class="control-label" title="Numero do 2º Telemovel">1º Contacto Telemóvel</label>
					            <div class="input-group" style='width:100%;'>
					            	<input style="border-radius: 4px;" type="text" class="form-control" name="tel2" id="tel2_edit" placeholder="Telemovel 2">
					          	</div>
					        </div>
					    </div>
					    <!-- Telemovel 3 -->
					    <div class='col-md-3 col-sm-6 col-xs-12'>
					        <div class="form-group">
					            <label class="control-label" title="Numero do 3º Telemovel">2º Contacto Telemóvel</label>
					            <div class="input-group" style='width:100%;'>
					            	<input style="border-radius: 4px;" type="text" class="form-control" name="tel3" id="tel3_edit" placeholder="Telemovel 3">
					          	</div>
					        </div>
					    </div>
					    <!-- Email -->
					    <div class='col-md-3 col-sm-6 col-xs-12'>
					        <div class="form-group">
					            <label class="control-label" title="Email do Cliente">Email</label>
					            <div class="input-group" style='width:100%;'>
					            	<input style="border-radius: 4px;" type="text" class="form-control" name="email" id="email_edit" placeholder="Endereço Electrónico">
					          	</div>
					        </div>
					    </div>
					    <!-- Email Secundario -->
					    <div class='col-md-3 col-sm-6 col-xs-12'>
					        <div class="form-group">
					            <label class="control-label" title="Email do Cliente Secundario">Email Secundario</label>
					            <div class="input-group" style='width:100%;'>
					            	<input style="border-radius: 4px;" type="text" class="form-control" name="email_secundario" id="email_secundario_edit" placeholder="Endereço Electrónico">
					          	</div>
					        </div>
					    </div>
					    <!-- Web Site -->
					    <div class='col-md-6 col-sm-6 col-xs-12'>
					        <div class="form-group">
					            <label class="control-label" title="Web Site">Web Site</label>
					            <div class="input-group" style='width:100%;'>
					            	<input style="border-radius: 4px;" type="text" class="form-control" name="dominio" id="dominio_edit" placeholder="Web Site">
					          	</div>
					        </div>
					   </div>

					   <!-- Perfil Cliente -->
					    <div class='col-xs-12'>
					        <div class="form-group">
					            <label class="control-label" title="Dominio">Perfil Cliente:</label>
					            <div class="input-group" style='width:100%;'>
					            	<textarea class="form-control" rows="5" id="perfil_edit" name="perfil"></textarea>
					          	</div>
					        </div>
					   </div>







                    </form>
                    </div>
                </div>
                <div class="modal-footer">
                	 <p style='text-align:center; margin:0;'><img src="css/logo-nav.png" class="logo-nav" style="width:120px;"></p>  
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancelar</font></button>
                    <button title="Guardar as alterações do serviço" type="button" class="btn btn-success" onclick="saveIt($('.servico_id').html())"> <span class="glyphicon glyphicon-save-file"></span><font class="hidden-xs"> Guardar</font></button>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Add Client -->

    <form class="modal fade" id="clientes__modal_add" tabindex="-1" role="dialog" aria-labelledby="clientes_add">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" style="color: #fff;"><span class="glyphicon glyphicon-plus"></span> Novo Cliente </h4>
                </div>
                        <div class="modal-body">
                    	<!-- Data -->
                       <div class="row">
                        <div class='col-md-3 col-sm-6 col-xs-12'>
                  <div class="form-group">
                      <label class="control-label" title="O dia a que se realiza o serviço/transfers.(Visivel na aplicação)" >Data do Cliente <span class="w3-text-red">*</span></label>
                      <div class='input-group date' id='data_cliente'>
                          <input type='text' readonly class="form-control" name="data_cl" id="data_cl" placeholder="Data Serviço *"/>
                          <span class="input-group-addon">
                              <span class="glyphicon glyphicon-calendar"></span>
                          </span>
                      </div>
                  </div>
              </div>
					    <!-- Categoria -->
					    <div class='col-md-3 col-sm-6 col-xs-12'>
					        <div class="form-group">
					            <label class="control-label" title="Categoria da escolha do Cliente">Categoria <span class="w3-text-red">*</span></label>
					            <div class="input-group" style='width:100%;'>
					            <select class="form-control" name="categoria" id="cat">
						            <option value='' selected>Escolha *</option>
						            <option value='Transfergest Light'>Transfergest Light</option>
						            <option value='Transfergest Pro'>Transfergest Pro</option>
						            <option value='Transfergest Pro Loja'>Transfergest Pro+Loja</option>
						            <option value='Web Design'>Web Design</option>
						            <option value='Design Gráfico'>Design Gráfico</option>
						         </select>
					          </div>
					        </div>
					    </div>
					    <!-- Nome do Cliente -->
					    <div class='col-md-3 col-sm-6 col-xs-12'>
					        <div class="form-group">
					            <label class="control-label" title="Nome do Cliente">Nome da Empresa <span class="w3-text-red">*</span></label>
					            <div class="input-group" style='width:100%;'>
					            	<input style="border-radius: 4px;" type="text" class="form-control" name="cliente" id="cliente" placeholder="Nome do Cliente">
					          	</div>
					        </div>
					    </div>
					    <!-- Numero do Contribuinte -->
					    <div class='col-md-3 col-sm-6 col-xs-12'>
					        <div class="form-group">
					            <label class="control-label" title="Numero de Contribuinte">Numero de Contribuinte <span class="w3-text-red">*</span></label>
					            <div class="input-group" style='width:100%;'>
					            	<input style="border-radius: 4px;" type="text" class="form-control" name="nif" id="nif" placeholder="Numero de Contribuinte">
					          	</div>
					        </div>
					    </div>
					    <!-- Responsável -->
					    <div class='col-md-3 col-sm-6 col-xs-12'>
					        <div class="form-group">
					            <label class="control-label" title="Responsavel">Nome do Cliente</label>
					            <div class="input-group" style='width:100%;'>
					            	<input style="border-radius: 4px;" type="text" class="form-control" name="responsavel" id="responsavel" placeholder="Responsavel">
					          	</div>
					        </div>
					    </div>
					    <!-- Telemovel 1 -->
					    <div class='col-md-3 col-sm-6 col-xs-12'>
					        <div class="form-group">
					            <label class="control-label" title="Numero do 1º Telemovel">Telefone</label>
					            <div class="input-group" style='width:100%;'>
					            	<input style="border-radius: 4px;" type="text" class="form-control" name="tel1" id="tel1" placeholder="Telemovel 1">
					          	</div>
					        </div>
					    </div>
					    <!-- Telemovel 2 -->
					    <div class='col-md-3 col-sm-6 col-xs-12'>
					        <div class="form-group">
					            <label class="control-label" title="Numero do 1º Telemovel">1º Contacto Telemovel</label>
					            <div class="input-group" style='width:100%;'>
					            	<input style="border-radius: 4px;" type="text" class="form-control" name="tel2" id="tel2" placeholder="Telemovel 2">
					          	</div>
					        </div>
					    </div>
					    <!-- Telemovel 3 -->
					    <div class='col-md-3 col-sm-6 col-xs-12'>
					        <div class="form-group">
					            <label class="control-label" title="Numero do 2º Telemovel">2º Contacto Telemovel</label>
					            <div class="input-group" style='width:100%;'>
					            	<input style="border-radius: 4px;" type="text" class="form-control" name="tel3" id="tel3" placeholder="Telemovel 3">
					          	</div>
					        </div>
					    </div>
					    <!-- Email -->
					    <div class='col-md-3 col-sm-6 col-xs-12'>
					        <div class="form-group">
					            <label class="control-label" title="Email do Cliente">Email</label>
					            <div class="input-group" style='width:100%;'>
					            	<input style="border-radius: 4px;" type="text" class="form-control" name="email" id="email" placeholder="Endereço Electrónico">
					          	</div>
					        </div>
					    </div>
					    <!-- Email -->
					    <div class='col-md-3 col-sm-6 col-xs-12'>
					        <div class="form-group">
					            <label class="control-label" title="Email do Cliente Secundário">Email Secundario</label>
					            <div class="input-group" style='width:100%;'>
					            	<input style="border-radius: 4px;" type="text" class="form-control" name="email_secundario" id="email_secundario" placeholder="Endereço Electrónico Secundario">
					          	</div>
					        </div>
					    </div>
					    <!-- Web Site -->
					    <div class='col-md-6 col-sm-6 col-xs-12'>
					        <div class="form-group">
					            <label class="control-label" title="Web Site">Web Site</label>
					            <div class="input-group" style='width:100%;'>
					            	<input style="border-radius: 4px;" type="text" class="form-control" name="dominio" id="dominio" placeholder="Web Site">
					          	</div>
					        </div>
					    </div>

					    <!-- Perfil Cliente -->
					    <div class='col-xs-12'>
					        <div class="form-group">
					            <label class="control-label" title="Dominio">Perfil Cliente:</label>
					            <div class="input-group" style='width:100%;'>
					            	<textarea class="form-control" rows="5" id="perfil" name="perfil"></textarea>
					          	</div>
					        </div>
					   </div>
					   </div>
                    
                    <br>
                    <br>
                </div>
                <div class="modal-footer">
                	 <p style='text-align:center; margin:0;'><img src="css/logo-nav.png" class="logo-nav" style="width:120px;"></p>  

                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancelar</font></button>
                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-save-file"></span> <font class="hidden-xs"> Guardar</font></button>
                </div>
            </div>
        </div>
    </form>


</div>


<!-- Tipos de Conversão de PDF -->

<div id="pdf_conf" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><i class="fa fa-arrows-alt" aria-hidden="true"></i> Formato & Orientação:</span></h4>
      </div>
      <div class="modal-body">
      <div class="w3-row-padding">
      <div class="w3-col l6 s12">
        <label>Formato:</label>
          <select class="form-control" id="pagesize">
          <option value="a2">A2</option>
          <option value="a3">A3</option>
          <option value="a4">A4</option>
          </select>
      </div>

      <div class="w3-col l6 s12">
        <label>Orientação:</label>
          <select class="form-control" id="orientation">
            <option value="portrait">Vertical</option>
            <option value="landscape">Horizontal</option>
          </select>
      </div>
        </div>
      </div>

    <div class="modal-footer r">
    <p style='text-align:center; margin:0;'><img src="css/logo-nav.png" class="logo-nav" style="width:120px;"></p>  
      <button type="button" class="btn btn-default cancel-edit" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign"></span>
        <font class="hidden-xs"> Fechar</font>
      </button>
      <button type="button" class="btn btn-success" onclick="generatePdf($('#pagesize').val(),$('#orientation').val())">
<span class="glyphicon glyphicon-ok"></span>
        <font class="hidden-xs"> Confirmar</font>
      </button>
    </div>
  </div>
  </div>
</div>


<!--						End File Clientes Info   									-->


<!--                                  Agenda                                            -->

<!-- Modal Edit -->

    <div class="modal fade" id="agenda__modal" tabindex="-1" role="dialog" aria-labelledby="ag">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" style="color:#fff!important;" id="clientes__modal__title"><span class="glyphicon glyphicon-edit" style="color: #5bc0de;"></span> Agenda Numero #<span class="servico_id"></span></h4>
                </div>
                <div class="modal-body">
                <div class="row">
                    <form id="edit_transfer_form" role="form">
                        <!-- Data da Agenda -->
                  <div class='col-md-4 col-sm-4 col-xs-12'>
                      <div class="form-group">
                          <label class="control-label" title="O dia a que se realiza o agenda de suporte dos clientes.(Visivel na aplicação)" >Data da Agenda <span class="w3-text-red">*</span></label>
                          <div class='input-group date' id='data_agenda_edit'>
                              <input type='text' readonly class="form-control" name="data_agenda" id="data_ag_edit" placeholder="Data Agenda *"/>
                              <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                              </span>
                          </div>
                      </div>
                  </div>

                  <!-- Nome da Empresa -->
                  <div class='col-md-4 col-sm-4 col-xs-12'>
                      <div class="form-group">
                          <label class="control-label" title="Nome da Empresa">Empresa</label>
                          <div class="input-group" style='width:100%;'>
                            <input readonly style="border-radius: 4px;" type="text" class="form-control" name="cliente" id="empresa_edit" placeholder="Nome da Empresa">
                        </div>
                      </div>
                  </div>

                <!-- Nome do Cliente -->

                <div class='col-md-4 col-sm-4 col-xs-12'>
                    <div class="form-group">
                        <label class="control-label" title="Nome do Cliente">Nome do Cliente</label>
                        <div class="input-group" style='width:100%;'>
                          <input style="border-radius: 4px;" type="text" class="form-control" id="cliente_agenda_edit" placeholder="Nome do Cliente">
                        </div>
                    </div>
                </div>

                <!-- Observacoes -->

                <div class='col-xs-12'>
                  <div class="form-group">
                      <label class="control-label" title="Dominio">Observacoes:</label>
                      <div class="input-group" style='width:100%;'>
                        <textarea class="form-control" rows="5" id="obs_suporte_edit" name="obs_suporte"></textarea>
                      </div>
                  </div>
             </div>

              <!-- Telemovel -->
              <div class='col-md-4 col-sm-4 col-xs-12'>
                  <div class="form-group">
                      <label class="control-label" title="Numero de Telefone">Telefone</label>
                      <div class="input-group" style='width:100%;'>
                        <input style="border-radius: 4px;" type="text" class="form-control" name="telefone" id="telefone_edit" placeholder="Telefone">
                      </div>
                  </div>
              </div>
              
              <!-- Numero de Contribuinte -->

              <div class='col-md-4 col-sm-4 col-xs-12'>
                  <div class="form-group">
                      <label class="control-label" title="Numero de Contribuinte">Numero de Contribuinte</label>
                      <div class="input-group" style='width:100%;'>
                        <input readonly style="border-radius: 4px;" type="text" class="form-control" name="nif" id="nif_agenda_edit" placeholder="NIF">
                      </div>
                  </div>
              </div>


              <!-- Estado do Suporte -->

              <div class='col-md-4 col-sm-4 col-xs-12'>
                  <div class="form-group">
                      <label class="control-label" title="Numero de Contribuinte">Estado da Agenda</label>
                      <div class="input-group" style='width:100%;'>
                        <select class="form-control" name="estado" id="estado_edit" onchange="selectEstado()">
                            
                        </select>
                      </div>
                  </div>
              </div>
                    </div>
                </div>
                <div class="modal-footer">
                	 <p style='text-align:center; margin:0;'><img src="css/logo-nav.png" class="logo-nav" style="width:120px;"></p>  
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancelar</font></button>
                    <button title="Guardar as alterações do serviço" type="button" class="btn btn-success" onclick="saveIt($('.servico_id').html())"> <span class="glyphicon glyphicon-save-file"></span><font class="hidden-xs"> Guardar</font></button>
                </div>
            </div>
        </div>

        </div>
        
        
        <div class="modal fade" id="visualize_bugs_agenda" tabindex="-1" role="dialog" aria-labelledby="ag">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" style="color:#fff!important;" id="clientes__modal__title"><span class="glyphicon glyphicon-edit" style="color: #5bc0de;"></span> Agenda de Visualização Bug #<span class="servico_id"></span></h4>
                </div>
                <div class="modal-body">
                <div class="row" id="bus_agenda">
                    </div>
                </div>
                <div class="modal-footer">
                   <p style='text-align:center; margin:0;'><img src="css/logo-nav.png" class="logo-nav" style="width:120px;"></p>  
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancelar</font></button>
                    
                </div>
            </div>
        </div>

        </div>


<!-- End Models Agenda -->


<!--                                  Bugs                                            -->

<!-- Edit Table Bugs -->

<div class="modal fade" id="edit_bug" tabindex="-1" role="dialog" aria-labelledby="relatorio_bugs">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" style="color:#fff!important;" id="clientes__modal__title"><span class="glyphicon glyphicon-edit" style="color: #5bc0de;"></span> Bug Numero #<span class="servico_id"></span></h4>
                </div>
                <div class="modal-body">
                <div class="row">
                    <form id="edit_transfer_form" role="form">
                        <!-- Data da Agenda -->
                        
                  <div class='col-md-4 col-sm-4 col-xs-12'>
                      <div class="form-group">
                          <label class="control-label" title="O dia a que se realiza o agenda de suporte dos clientes.(Visivel na aplicação)" >Data da Agenda <span class="w3-text-red">*</span></label>
                          <div class='input-group date' id='data_bug'>
                              <input type='text' readonly class="form-control" name="data_bug_edit" id="data_bug_edit" placeholder="Data Agenda *"/>
                              <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                              </span>
                          </div>
                      </div>
                  </div>

                  <!-- Nome da Empresa -->
                  <div class='col-md-4 col-sm-4 col-xs-12'>
                      <div class="form-group">
                          <label class="control-label" title="Nome da Empresa">Empresa</label>
                          <div class="input-group" style='width:100%;'>
                            <input readonly style="border-radius: 4px;" type="text" class="form-control" name="cliente" id="empresa_edit_bug" placeholder="Nome da Empresa">
                        </div>
                      </div>
                  </div>
              
              <!-- Numero de Contribuinte -->

              <div class='col-md-4 col-sm-4 col-xs-12'>
                  <div class="form-group">
                      <label class="control-label" title="Numero de Contribuinte">Numero de Contribuinte</label>
                      <div class="input-group" style='width:100%;'>
                        <input readonly style="border-radius: 4px;" type="text" class="form-control" name="nif" id="nif_bug_edit" placeholder="NIF">
                      </div>
                  </div>
              </div>

              <!-- Link do Bug -->

              <div class='col-md-4 col-sm-4 col-xs-12'>
                  <div class="form-group">
                      <label class="control-label" title="Link do Bug">Link do Bug</label>
                      <div class="input-group" style='width:100%;'>
                        <input style="border-radius: 4px;" type="text" class="form-control" name="link" id="link_bug_edit" placeholder="Link do Bug">
                      </div>
                  </div>
              </div>
              
              <!-- Estado do Bug -->

              <div class='col-md-4 col-sm-4 col-xs-12'>
                  <div class="form-group">
                      <label class="control-label" title="Numero de Contribuinte">Estado da Agenda</label>
                      <div class="input-group" style='width:100%;'>
                        <select class="form-control" name="estado" id="estado_edit_bug" onchange="selectEstadoBug()">
                            
                        </select>
                      </div>
                  </div>
              </div>

              <!-- Descricao do Bug -->

              <div class='col-md-12 col-sm-12 col-xs-12'>
                  <div class="form-group">
                      <label class="control-label" title="Descrição do Bug">Descrição do Bug</label>
                      <div class="input-group" style='width:100%;'>
                        <textarea class="form-control" rows="5" name="descricao" id="descricao_bug_edit" placeholder="Descrição do Bug">
                        </textarea>
                      </div>
                  </div>
              </div>
              
              <!-- Duração -->
              
              <div class='col-md-6 col-sm-6 col-xs-12'>
                  <div class="form-group">
                      <label class="control-label" title="Duração do Bug">Duração do Bug</label>
                      <div class="input-group" style='width:100%;'>
                        <input readonly style="border-radius: 4px;" type="text" class="form-control" name="duracao" id="duracao_edit" placeholder="Duracao do Bug">
                      </div>
                  </div>
              </div>
              
              <!-- Tipo de Priodade dos Bugs -->
              
              <div class='col-md-6 col-sm-6 col-xs-12'>
                  <div class="form-group">
                      <label class="control-label" title="Tipo de Prioridade dos Bugs">Tipo de Prioridade dos Bugs</label>
                      <div class="input-group" style='width:100%;'>
                        <select class="form-control" name="tipo_prioridade_bugs_edit" id="tipo_prioridade_bugs_edit">
                            
                        </select>
                      </div>
                  </div>
              </div>



              
                    </div>
                </div>
                <div class="modal-footer">
                     <p style='text-align:center; margin:0;'><img src="css/logo-nav.png" class="logo-nav" style="width:120px;"></p>  
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancelar</font></button>
                    <button title="Guardar as alterações do serviço" type="button" class="btn btn-success" onclick="saveIt($('.servico_id').html())"> <span class="glyphicon glyphicon-save-file"></span><font class="hidden-xs"> Guardar</font></button>
                </div>
            </div>
        </div>

        </div>

<!--  End Models Bugs -->



<!--                                  Sugestao                                            -->


<!-- Edit Table Sugestao -->

<div class="modal fade" id="edit_sugestao" tabindex="-1" role="dialog" aria-labelledby="relatorio_sugestao">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" style="color:#fff!important;" id="clientes__modal__title"><span class="glyphicon glyphicon-edit" style="color: #5bc0de;"></span> Sugestão Numero #<span class="servico_id"></span></h4>
                </div>
                <div class="modal-body">
                <div class="row">
                    <form id="edit_transfer_form" role="form">
                        <!-- Data da Agenda -->
                        
                  <div class='col-md-4 col-sm-4 col-xs-12'>
                      <div class="form-group">
                          <label class="control-label" title="O dia a que se realiza o agenda de suporte dos clientes.(Visivel na aplicação)" >Data da Agenda <span class="w3-text-red">*</span></label>
                          <div class='input-group date' id='data_sugestao'>
                              <input type='text' readonly class="form-control" name="data_sugestao_edit" id="data_sugestao_edit" placeholder="Data Agenda *"/>
                              <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                              </span>
                          </div>
                      </div>
                  </div>

                  <!-- Nome da Empresa -->
                  <div class='col-md-4 col-sm-4 col-xs-12'>
                      <div class="form-group">
                          <label class="control-label" title="Nome da Empresa">Empresa</label>
                          <div class="input-group" style='width:100%;'>
                            <input readonly style="border-radius: 4px;" type="text" class="form-control" name="cliente" id="empresa_edit_sugestao" placeholder="Nome da Empresa">
                        </div>
                      </div>
                  </div>
              
              <!-- Numero de Contribuinte -->

              <div class='col-md-4 col-sm-4 col-xs-12'>
                  <div class="form-group">
                      <label class="control-label" title="Numero de Contribuinte">Numero de Contribuinte</label>
                      <div class="input-group" style='width:100%;'>
                        <input readonly style="border-radius: 4px;" type="text" class="form-control" name="nif" id="nif_sugestao_edit" placeholder="NIF">
                      </div>
                  </div>
              </div>

              <!-- Link da Sugestao -->

              <div class='col-md-4 col-sm-4 col-xs-12'>
                  <div class="form-group">
                      <label class="control-label" title="Link da Sugestão">Link da Sugestão</label>
                      <div class="input-group" style='width:100%;'>
                        <input style="border-radius: 4px;" type="text" class="form-control" name="link" id="link_sugestao_edit" placeholder="Link de Sugestão">
                      </div>
                  </div>
              </div>
              
              <!-- Estado da Sugestao -->

              <div class='col-md-4 col-sm-4 col-xs-12'>
                  <div class="form-group">
                      <label class="control-label" title="Numero de Contribuinte">Estado da Agenda</label>
                      <div class="input-group" style='width:100%;'>
                        <select class="form-control" name="estado" id="estado_edit_sugestao" onchange="selectEstadoBug()">
                            
                        </select>
                      </div>
                  </div>
              </div>

              <!-- Descricao da Sugestao -->

              <div class='col-md-12 col-sm-12 col-xs-12'>
                  <div class="form-group">
                      <label class="control-label" title="Descricao da Sugestão">Descricao da Sugestão</label>
                      <div class="input-group" style='width:100%;'>
                        <textarea class="form-control" rows="5" name="descricao" id="descricao_sugestao_edit" placeholder="Descrição da Sugestão">
                        </textarea>
                      </div>
                  </div>
              </div>
              
              

                    <!-- Duração -->
              
                      <div class='col-md-6 col-sm-6 col-xs-12'>
                          <div class="form-group">
                              <label class="control-label" title="Duração da Sugestão">Duração da Sugestão</label>
                              <div class="input-group" style='width:100%;'>
                                <input readonly style="border-radius: 4px;" type="text" class="form-control" name="duracao_sugestao" id="duracao_sugestao_edit" placeholder="Duracao da Sugestão">
                              </div>
                          </div>
                      </div>
                      
					<!-- Tipo de Priodade das Sugestões -->
              
                      <div class='col-md-6 col-sm-6 col-xs-12'>
                          <div class="form-group">
                              <label class="control-label" title="Tipo de Prioridade das Sugestões">Tipo de Prioridade das Sugestões</label>
                              <div class="input-group" style='width:100%;'>
                                <select class="form-control" name="tipo_prioridade_sugestoes_edit" id="tipo_prioridade_sugestoes_edit">
                                    
                                </select>
                              </div>
                          </div>
                      </div>                      

              
                    </div>
                </div>
                <div class="modal-footer">
                     <p style='text-align:center; margin:0;'><img src="css/logo-nav.png" class="logo-nav" style="width:120px;"></p>  
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancelar</font></button>
                    <button title="Guardar as alterações do serviço" type="button" class="btn btn-success" onclick="saveIt($('.servico_id').html())"> <span class="glyphicon glyphicon-save-file"></span><font class="hidden-xs"> Guardar</font></button>
                </div>
            </div>
        </div>

        </div>
        
        
        <!--                                  Pedido de Orcamento                                            -->


        <!-- Edit Table Pedido de Orcamento -->
        
        <div class="modal fade" id="edit_pedido" tabindex="-1" role="dialog" aria-labelledby="relatorio_pedido">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" style="color:#fff!important;" id="clientes__modal__title"><span class="glyphicon glyphicon-edit" style="color: #5bc0de;"></span> Pedido Numero #<span class="servico_id"></span></h4>
                        </div>
                        <div class="modal-body">
                        <div class="row">
                            <form id="edit_transfer_form" role="form">
                                <!-- Data da Agenda -->
                                
                          <div class='col-md-4 col-sm-4 col-xs-12'>
                              <div class="form-group">
                                  <label class="control-label" title="O dia a que se realiza o agenda de suporte dos clientes.(Visivel na aplicação)" >Data da Agenda <span class="w3-text-red">*</span></label>
                                  <div class='input-group date' id='data_pedido'>
                                      <input type='text' readonly class="form-control" name="data_pedido_edit" id="data_pedido_edit" placeholder="Data Agenda *"/>
                                      <span class="input-group-addon">
                                          <span class="glyphicon glyphicon-calendar"></span>
                                      </span>
                                  </div>
                              </div>
                          </div>
        
                          <!-- Nome da Empresa -->
                          <div class='col-md-4 col-sm-4 col-xs-12'>
                              <div class="form-group">
                                  <label class="control-label" title="Nome da Empresa">Empresa</label>
                                  <div class="input-group" style='width:100%;'>
                                    <input readonly style="border-radius: 4px;" type="text" class="form-control" name="cliente" id="empresa_edit_pedido" placeholder="Nome da Empresa">
                                </div>
                              </div>
                          </div>
                      
                      <!-- Numero de Contribuinte -->
        
                      <div class='col-md-4 col-sm-4 col-xs-12'>
                          <div class="form-group">
                              <label class="control-label" title="Numero de Contribuinte">Numero de Contribuinte</label>
                              <div class="input-group" style='width:100%;'>
                                <input readonly style="border-radius: 4px;" type="text" class="form-control" name="nif" id="nif_pedido_edit" placeholder="NIF">
                              </div>
                          </div>
                      </div>
        
                      <!-- Link da Pedido de Orcamento -->
        
                      <div class='col-md-4 col-sm-4 col-xs-12'>
                          <div class="form-group">
                              <label class="control-label" title="Link do Pedido do Orcamento">Link do Pedido de Orcamento</label>
                              <div class="input-group" style='width:100%;'>
                                <input style="border-radius: 4px;" type="text" class="form-control" name="link" id="link_pedido_edit" placeholder="Link do Bug">
                              </div>
                          </div>
                      </div>
                      
                      <!-- Estado da Pedido de Orcamento -->
        
                      <div class='col-md-4 col-sm-4 col-xs-12'>
                          <div class="form-group">
                              <label class="control-label" title="Numero de Contribuinte">Estado da Agenda</label>
                              <div class="input-group" style='width:100%;'>
                                <select class="form-control" name="estado" id="estado_edit_pedido" onchange="selectEstadoBug()">
                                    
                                </select>
                              </div>
                          </div>
                      </div>
        
                      <!-- Descricao da Pedido de Orcamento -->
        
                      <div class='col-md-12 col-sm-12 col-xs-12'>
                          <div class="form-group">
                              <label class="control-label" title="Descricao do Pedido de Orcamento">Descricao do Pedido de Orcamento</label>
                              <div class="input-group" style='width:100%;'>
                                <textarea class="form-control" rows="5" name="descricao" id="descricao_pedido_edit" placeholder="Descrição do Pedido">
                                </textarea>
                              </div>
                          </div>
                      </div>
                      
                      
                      <!-- Duração -->
              
                      <div class='col-md-6 col-sm-6 col-xs-12'>
                          <div class="form-group">
                              <label class="control-label" title="Duração do Pedido">Duração do Pedido</label>
                              <div class="input-group" style='width:100%;'>
                                <input readonly style="border-radius: 4px;" type="text" class="form-control" name="duracao_pedido" id="duracao_pedido_edit" placeholder="Duracao do Pedido">
                              </div>
                          </div>
                      </div>
                      
                      <!-- Tipo de Priodade das Sugestões -->
              
                      <div class='col-md-6 col-sm-6 col-xs-12'>
                          <div class="form-group">
                              <label class="control-label" title="Tipo de Prioridade de Pedidos de Orcamentos">Tipo de Prioridade de Pedidos de Orcamentos</label>
                              <div class="input-group" style='width:100%;'>
                                <select class="form-control" name="tipo_prioridade_pedido_edit" id="tipo_prioridade_pedido_edit">
                                    
                                </select>
                              </div>
                          </div>
                      </div> 
        
        
                      
                            </div>
                        </div>
                        <div class="modal-footer">
                             <p style='text-align:center; margin:0;'><img src="css/logo-nav.png" class="logo-nav" style="width:120px;"></p>  
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancelar</font></button>
                            <button title="Guardar as alterações do serviço" type="button" class="btn btn-success" onclick="saveIt($('.servico_id').html())"> <span class="glyphicon glyphicon-save-file"></span><font class="hidden-xs"> Guardar</font></button>
                        </div>
                    </div>
                </div>
        
                </div>
        
        
        <!-- End Edit Table Pedido de Orcamento -->
        
        
        <!-- Edição de Assistencia Tecnica dos Clientes -->
        
        <div class="modal fade" id="edit_ass_tecnica" tabindex="-1" role="dialog" aria-labelledby="relatorio_pedido">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" style="color:#fff!important;" id="clientes__modal__title"><span class="glyphicon glyphicon-edit" style="color: #5bc0de;"></span> Numero da Assistencia Tecnica de Suporte #<span class="servico_id"></span></h4>
                        </div>
                        <div class="modal-body">
                        <div class="row">
                            <form id="edit_transfer_form" role="form">
                                
                                
                            <!-- NIF -->
                          <div class='col-md-6 col-sm-6 col-xs-12'>
                              <div class="form-group">
                                  <label class="control-label" title="NIF">NIF</label>
                                  <div class="input-group" style='width:100%;'>
                                    <input readonly style="border-radius: 4px;" type="text" class="form-control" id="nif_ass_edit" placeholder="NIF">
                                </div>
                              </div>
                          </div>

                          <!-- Empresa -->
                          <div class='col-md-6 col-sm-6 col-xs-12'>
                              <div class="form-group">
                                  <label class="control-label" title="Empresa">Empresa</label>
                                  <div class="input-group" style='width:100%;'>
                                    <input readonly style="border-radius: 4px;" type="text" class="form-control"  id="empresa_ass_edit" placeholder="Empresa">
                                </div>
                              </div>
                          </div>
                          
                          
                                <!-- Data do Suporte -->
                                
                          <div class='col-md-6 col-sm-6 col-xs-12'>
                              <div class="form-group">
                                  <label class="control-label" title="O dia a que se realiza o agenda de suporte dos clientes.(Visivel na aplicação)" >Data de Suporte <span class="w3-text-red">*</span></label>
                                  <div class='input-group date' id='data_suporte'>
                                      <input type='text' readonly class="form-control" name="data_suporte_edit" id="data_suporte_edit" placeholder="Data de Suporte *"/>
                                      <span class="input-group-addon">
                                          <span class="glyphicon glyphicon-calendar"></span>
                                      </span>
                                  </div>
                              </div>
                          </div>
        
                          <!-- Nome da Assistencia -->
                          <div class='col-md-6 col-sm-6 col-xs-12'>
                              <div class="form-group">
                                  <label class="control-label" title="Nome da Assistencia">Nome da Assistencia</label>
                                  <div class="input-group" style='width:100%;'>
                                    <input style="border-radius: 4px;" type="text" class="form-control" name="assistencia_tecnica_edit" id="assistencia_tecnica_edit" placeholder="Nome da Assistencia">
                                </div>
                              </div>
                          </div>
                      
                      <!-- Observações da Assistencia -->
        
                      <div class='col-md-12 col-sm-12 col-xs-12'>
                          <div class="form-group">
                              <label class="control-label" title="Observações da Assistencia">Observações da Assistencia</label>
                              <div class="input-group" style='width:100%;'>
                              	<textarea class="form-control" rows="5" name="observacoes_assistencia_edit" id="observacoes_assistencia_edit" placeholder="Descrição do Pedido">
                                </textarea>
                              </div>
                          </div>
                      </div>
        
                      <!-- Duração -->
              
                      <div class='col-md-6 col-sm-6 col-xs-12'>
                          <div class="form-group">
                              <label class="control-label" title="Duração do Suporte">Duração do Suporte</label>
                              <div class="input-group" style='width:100%;'>
                                <input readonly style="border-radius: 4px;" type="text" class="form-control" name="duracao" id="duracao_suporte_edit" placeholder="Duracao do Suporte">
                              </div>
                          </div>
                      </div>


                      <!-- Nome do Operador -->

                      <div class='col-md-6 col-sm-6 col-xs-12'>
                          <div class="form-group">
                              <label class="control-label" title="Nome do Operador">Nome do Operador</label>
                              <div class="input-group" style='width:100%;'>
                                <input style="border-radius: 4px;" type="text" class="form-control" name="nome_operador_edit" id="nome_operador_edit" placeholder="Nome do Operador">
                              </div>
                          </div>
                      </div>


                      <!-- Soluccionar o Problema -->

                      <div class='col-md-12 col-sm-12 col-xs-12'>
			                  <div class="form-group" >
			                          <label class="control-label" title="Soluccionar o Problemar?">Soluccionar o Problema?</label>
			                              <div class="col-md-5 col-sm-12 col-xs-12">
                                              <div class="form-group" style="margin-top: 20px;">
                                                <div class="input-group">
                                                <input type='checkbox' checked name='my-checkbox' data-size='mini' data-off-color='danger' data-on-color='success' data-off-text="Não" data-on-text="Sim" checked name='active_field_opt' id='active_field_opt'>
                                                <input type="hidden" id="active_field_option">
                                    
                                                </div>
                                                </div>
                                            </div>
			                   </div>
			            </div>

                      
                      

                      <!-- Proxima Data a Contactar -->

                      <div class='col-md-4 col-sm-4 col-xs-12'>
                              <div class="form-group">
                                  <label class="control-label" title="O dia a que se realiza o agenda de suporte dos clientes.(Visivel na aplicação)" >Proxima Data a Contactar <span class="w3-text-red">*</span></label>
                                  <div class='input-group date' id='proxima_data'>
                                      <input type='text' readonly class="form-control" name="proxima_data_edit" id="proxima_data_edit" placeholder="Data de Suporte *"/>
                                      <span class="input-group-addon">
                                          <span class="glyphicon glyphicon-calendar"></span>
                                      </span>
                                  </div>
                              </div>
                          </div>


                      <!-- Nome da Pessoa -->

                      <div class='col-md-4 col-sm-4 col-xs-12'>
                          <div class="form-group">
                              <label class="control-label" title="Nome da Pessoa">Nome da Pessoa</label>
                              <div class="input-group" style='width:100%;'>
                                <input style="border-radius: 4px;" type="text" class="form-control" name="nome_pessoa_edit" id="nome_pessoa_edit" placeholder="Nome da Pessoa">
                              </div>
                          </div>
                      </div>

                      <!-- Telefone -->

                      <div class='col-md-4 col-sm-4 col-xs-12'>
                          <div class="form-group">
                              <label class="control-label" title="Telefone">Telefone</label>
                              <div class="input-group" style='width:100%;'>
                                <input style="border-radius: 4px;" type="number" class="form-control" name="telefone_edit_ass" id="telefone_edit_ass" placeholder="Telefone">
                              </div>
                          </div>
                      </div>
                      
                      <!-- Observações -->
                      
                      <div class='col-xs-12'>
                  <div class="form-group">
                      <label class="control-label" title="Dominio">Observacoes:</label>
                      <div class="input-group" style='width:100%;'>
                        <textarea class="form-control" rows="5" id="obs_suporte_ass_edit" name="obs_suporte_edit"></textarea>
                      </div>
                  </div>
             </div>
                      


						<!-- Estado do Suporte -->
        
                      <div class='col-md-12 col-sm-12 col-xs-12'>
                          <div class="form-group">
                              <label class="control-label" title="Estado do Suporte">Estado do Suporte</label>
                              <div class="input-group" style='width:100%;'>
                                <select class="form-control" name="estado" id="estado_edit_suporte" onchange="selectEstadoBug()">
                                    
                                </select>
                              </div>
                          </div>
                      </div>

                      
                            </div>
                        </div>
                        <div class="modal-footer">
                             <p style='text-align:center; margin:0;'><img src="css/logo-nav.png" class="logo-nav" style="width:120px;"></p>  
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancelar</font></button>
                            <button title="Guardar as alterações do serviço" type="button" class="btn btn-success" onclick="saveIt($('.servico_id').html())"> <span class="glyphicon glyphicon-save-file"></span><font class="hidden-xs"> Guardar</font></button>
                        </div>
                    </div>
                </div>
        
                </div>
        
        <!-- End Edição de Assistencia Tecnica dos Clientes -->



        <!-- Edição de Bugs -->
        
        
    
<!-- Edit Table Bugs -->

<div class="modal fade" id="edit_ass_bug" tabindex="-1" role="dialog" aria-labelledby="relatorio_bugs">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" style="color:#fff!important;" id="clientes__modal__title"><span class="glyphicon glyphicon-edit" style="color: #5bc0de;"></span> Bug Numero #<span class="servico_id"></span></h4>
                </div>
                <div class="modal-body">
                <div class="row">
                    <form id="edit_transfer_form" role="form">
                        <!-- Data da Agenda -->
                        
                  <div class='col-md-4 col-sm-4 col-xs-12'>
                      <div class="form-group">
                          <label class="control-label" title="O dia a que se realiza o agenda de suporte dos clientes.(Visivel na aplicação)" >Data da Agenda <span class="w3-text-red">*</span></label>
                          <div class='input-group date' id='data_bug_ass'>
                              <input type='text' readonly class="form-control" name="data_bug_ass_edit" id="data_bug_ass_edit" placeholder="Data Agenda *"/>
                              <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                              </span>
                          </div>
                      </div>
                  </div>

                  <!-- Nome da Empresa -->
                  <div class='col-md-4 col-sm-4 col-xs-12'>
                      <div class="form-group">
                          <label class="control-label" title="Nome da Empresa">Empresa</label>
                          <div class="input-group" style='width:100%;'>
                            <input readonly style="border-radius: 4px;" type="text" class="form-control" name="cliente" id="empresa_edit_bug_ass" placeholder="Nome da Empresa">
                        </div>
                      </div>
                  </div>
              
              <!-- Numero de Contribuinte -->

              <div class='col-md-4 col-sm-4 col-xs-12'>
                  <div class="form-group">
                      <label class="control-label" title="Numero de Contribuinte">Numero de Contribuinte</label>
                      <div class="input-group" style='width:100%;'>
                        <input readonly style="border-radius: 4px;" type="text" class="form-control" name="nif" id="nif_bug_edit_ass" placeholder="NIF">
                      </div>
                  </div>
              </div>

              <!-- Link do Bug -->

              <div class='col-md-4 col-sm-4 col-xs-12'>
                  <div class="form-group">
                      <label class="control-label" title="Link do Bug">Link do Bug</label>
                      <div class="input-group" style='width:100%;'>
                        <input style="border-radius: 4px;" type="text" class="form-control" name="link" id="link_bug_edit_ass" placeholder="Link do Bug">
                      </div>
                  </div>
              </div>
              
              <!-- Estado do Bug -->

              <div class='col-md-4 col-sm-4 col-xs-12'>
                  <div class="form-group">
                      <label class="control-label" title="Numero de Contribuinte">Estado da Agenda</label>
                      <div class="input-group" style='width:100%;'>
                        <select class="form-control" name="estado1" id="estado_edit_bug_assistence" onchange="selectEstadoBug2()">
                            
                        </select>
                      </div>
                  </div>
              </div>

              <!-- Descricao do Bug -->

              <div class='col-md-12 col-sm-12 col-xs-12'>
                  <div class="form-group">
                      <label class="control-label" title="Descricao do Bug">Descricao do Bug</label>
                      <div class="input-group" style='width:100%;'>
                        <textarea class="form-control" rows="5" name="descricao" id="descricao_bug_edit_ass" placeholder="Descrição do Bug">
                        </textarea>
                      </div>
                  </div>
              </div>
              
              <!-- Duração -->
              
              <div class='col-md-6 col-sm-6 col-xs-12'>
                  <div class="form-group">
                      <label class="control-label" title="Duração do Bug">Duração do Bug</label>
                      <div class="input-group" style='width:100%;'>
                        <input readonly style="border-radius: 4px;" type="text" class="form-control" name="duracao" id="duracao_edit_ass" placeholder="Duracao do Bug">
                      </div>
                  </div>
              </div>
              
              <!-- Tipo de Priodade de Bugs -->
              
                      <div class='col-md-6 col-sm-6 col-xs-12'>
                          <div class="form-group">
                              <label class="control-label" title="Tipo de Prioridade dos Bugs na assistencia">Tipo de Prioridade dos Bugs na assistencia</label>
                              <div class="input-group" style='width:100%;'>
                                <select class="form-control" name="tipo_prioridade_bug_edit_ass" id="tipo_prioridade_bug_edit_ass">
                                    
                                </select>
                              </div>
                          </div>
                      </div>


              
                    </div>
                </div>
                <div class="modal-footer">
                     <p style='text-align:center; margin:0;'><img src="css/logo-nav.png" class="logo-nav" style="width:120px;"></p>  
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancelar</font></button>
                    <button title="Guardar as alterações do serviço" type="button" class="btn btn-success" onclick="saveIt_Bugs_Ass($('.servico_id').html())"> <span class="glyphicon glyphicon-save-file"></span><font class="hidden-xs"> Guardar</font></button>
                </div>
            </div>
        </div>

        </div>

        <!--  End Models Bugs -->
        
        <!-- Edição de Sugestoes -->
        
        <!-- Edit Table Sugestao -->

        <div class="modal fade" id="edit_sugestao_ass" tabindex="-1" role="dialog" aria-labelledby="relatorio_sugestao">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" style="color:#fff!important;" id="clientes__modal__title"><span class="glyphicon glyphicon-edit" style="color: #5bc0de;"></span> Sugestão da Assistencia Numero #<span class="servico_id"></span></h4>
                </div>
                <div class="modal-body">
                <div class="row">
                    <form id="edit_transfer_form" role="form">
                        <!-- Data da Agenda -->
                        
                  <div class='col-md-4 col-sm-4 col-xs-12'>
                      <div class="form-group">
                          <label class="control-label" title="O dia a que se realiza o agenda de suporte dos clientes.(Visivel na aplicação)" >Data da Agenda <span class="w3-text-red">*</span></label>
                          <div class='input-group date' id='data_sugestao_ass'>
                              <input type='text' readonly class="form-control" name="data_sugestao_edit_ass" id="data_sugestao_edit_ass" placeholder="Data Agenda *"/>
                              <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                              </span>
                          </div>
                      </div>
                  </div>

                  <!-- Nome da Empresa -->
                  <div class='col-md-4 col-sm-4 col-xs-12'>
                      <div class="form-group">
                          <label class="control-label" title="Nome da Empresa">Empresa</label>
                          <div class="input-group" style='width:100%;'>
                            <input readonly style="border-radius: 4px;" type="text" class="form-control" name="cliente" id="empresa_edit_sugestao_ass" placeholder="Nome da Empresa">
                        </div>
                      </div>
                  </div>
              
              <!-- Numero de Contribuinte -->

              <div class='col-md-4 col-sm-4 col-xs-12'>
                  <div class="form-group">
                      <label class="control-label" title="Numero de Contribuinte">Numero de Contribuinte</label>
                      <div class="input-group" style='width:100%;'>
                        <input readonly style="border-radius: 4px;" type="text" class="form-control" name="nif" id="nif_sugestao_edit_ass" placeholder="NIF">
                      </div>
                  </div>
              </div>

              <!-- Link da Sugestao -->

              <div class='col-md-4 col-sm-4 col-xs-12'>
                  <div class="form-group">
                      <label class="control-label" title="Link da Sugestão">Link da Sugestão</label>
                      <div class="input-group" style='width:100%;'>
                        <input style="border-radius: 4px;" type="text" class="form-control" name="link" id="link_sugestao_edit_ass" placeholder="Link de Sugestão">
                      </div>
                  </div>
              </div>
              
              <!-- Estado da Sugestao -->

              <div class='col-md-4 col-sm-4 col-xs-12'>
                  <div class="form-group">
                      <label class="control-label" title="Numero de Contribuinte">Estado da Agenda</label>
                      <div class="input-group" style='width:100%;'>
                        <select class="form-control" name="estado" id="estado_edit_sugestao_ass" onchange="selectEstadoBug3()">
                            
                        </select>
                      </div>
                  </div>
              </div>

              <!-- Descricao da Sugestao -->

              <div class='col-md-12 col-sm-12 col-xs-12'>
                  <div class="form-group">
                      <label class="control-label" title="Descricao da Sugestão">Descricao da Sugestão</label>
                      <div class="input-group" style='width:100%;'>
                        <textarea class="form-control" rows="5" name="descricao" id="descricao_sugestao_edit_ass" placeholder="Descrição da Sugestão">
                        </textarea>
                      </div>
                  </div>
              </div>
              
              

                    <!-- Duração -->
              
                      <div class='col-md-6 col-sm-6 col-xs-12'>
                          <div class="form-group">
                              <label class="control-label" title="Duração da Sugestão">Duração da Sugestão</label>
                              <div class="input-group" style='width:100%;'>
                                <input readonly style="border-radius: 4px;" type="text" class="form-control" name="duracao_sugestao" id="duracao_sugestao_edit_ass" placeholder="Duracao da Sugestão">
                              </div>
                          </div>
                      </div>
                      
                      <!-- Tipo de Priodade de Sugestões -->
              
                      <div class='col-md-6 col-sm-6 col-xs-12'>
                          <div class="form-group">
                              <label class="control-label" title="Tipo de Prioridade das Sugestões na assistencia">Tipo de Prioridade das Sugestões na assistencia</label>
                              <div class="input-group" style='width:100%;'>
                                <select class="form-control" name="tipo_prioridade_sugestoes_edit_ass" id="tipo_prioridade_sugestoes_edit_ass">
                                    
                                </select>
                              </div>
                          </div>
                      </div>

              
                    </div>
                </div>
                <div class="modal-footer">
                     <p style='text-align:center; margin:0;'><img src="css/logo-nav.png" class="logo-nav" style="width:120px;"></p>  
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancelar</font></button>
                    <button title="Guardar as alterações do serviço" type="button" class="btn btn-success" onclick="saveIt_Sugestao_Ass($('.servico_id').html())"> <span class="glyphicon glyphicon-save-file"></span><font class="hidden-xs"> Guardar</font></button>
                </div>
            </div>
        </div>

        </div>
        
        <!-- End Edit Table Sugestao -->

        <!-- Edição do Pedido de Orcamento de Assistencia -->
        
        <!-- Edit Table Pedido de Orcamento -->
        
        <div class="modal fade" id="edit_pedido_ass" tabindex="-1" role="dialog" aria-labelledby="relatorio_pedido">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" style="color:#fff!important;" id="clientes__modal__title"><span class="glyphicon glyphicon-edit" style="color: #5bc0de;"></span> Pedido da Assistencia Numero #<span class="servico_id"></span></h4>
                        </div>
                        <div class="modal-body">
                        <div class="row">
                            <form id="edit_transfer_form" role="form">
                                <!-- Data da Agenda -->
                                
                          <div class='col-md-4 col-sm-4 col-xs-12'>
                              <div class="form-group">
                                  <label class="control-label" title="O dia a que se realiza o agenda de suporte dos clientes.(Visivel na aplicação)" >Data da Agenda <span class="w3-text-red">*</span></label>
                                  <div class='input-group date' id='data_pedido_ass'>
                                      <input type='text' readonly class="form-control" name="data_pedido_edit_ass" id="data_pedido_edit_ass" placeholder="Data Agenda *"/>
                                      <span class="input-group-addon">
                                          <span class="glyphicon glyphicon-calendar"></span>
                                      </span>
                                  </div>
                              </div>
                          </div>
        
                          <!-- Nome da Empresa -->
                          <div class='col-md-4 col-sm-4 col-xs-12'>
                              <div class="form-group">
                                  <label class="control-label" title="Nome da Empresa">Empresa</label>
                                  <div class="input-group" style='width:100%;'>
                                    <input readonly style="border-radius: 4px;" type="text" class="form-control" name="cliente" id="empresa_edit_pedido_ass" placeholder="Nome da Empresa">
                                </div>
                              </div>
                          </div>
                      
                      <!-- Numero de Contribuinte -->
        
                      <div class='col-md-4 col-sm-4 col-xs-12'>
                          <div class="form-group">
                              <label class="control-label" title="Numero de Contribuinte">Numero de Contribuinte</label>
                              <div class="input-group" style='width:100%;'>
                                <input readonly style="border-radius: 4px;" type="text" class="form-control" name="nif" id="nif_pedido_edit_ass" placeholder="NIF">
                              </div>
                          </div>
                      </div>
        
                      <!-- Link da Pedido de Orcamento -->
        
                      <div class='col-md-4 col-sm-4 col-xs-12'>
                          <div class="form-group">
                              <label class="control-label" title="Link do Pedido do Orcamento">Link do Pedido de Orcamento</label>
                              <div class="input-group" style='width:100%;'>
                                <input style="border-radius: 4px;" type="text" class="form-control" name="link" id="link_pedido_edit_ass" placeholder="Link do Bug">
                              </div>
                          </div>
                      </div>
                      
                      <!-- Estado da Pedido de Orcamento -->
        
                      <div class='col-md-4 col-sm-4 col-xs-12'>
                          <div class="form-group">
                              <label class="control-label" title="Numero de Contribuinte">Estado da Agenda</label>
                              <div class="input-group" style='width:100%;'>
                                <select class="form-control" name="estado" id="estado_edit_pedido_ass" onchange="selectEstadoBug4()">
                                    
                                </select>
                              </div>
                          </div>
                      </div>
        
                      <!-- Descricao da Pedido de Orcamento -->
        
                      <div class='col-md-12 col-sm-12 col-xs-12'>
                          <div class="form-group">
                              <label class="control-label" title="Descricao do Pedido de Orcamento">Descricao do Pedido de Orcamento</label>
                              <div class="input-group" style='width:100%;'>
                                <textarea class="form-control" rows="5" name="descricao" id="descricao_pedido_edit_ass" placeholder="Descrição do Pedido">
                                </textarea>
                              </div>
                          </div>
                      </div>
                      
                      
                      <!-- Duração -->
              
                      <div class='col-md-6 col-sm-6 col-xs-12'>
                          <div class="form-group">
                              <label class="control-label" title="Duração do Pedido">Duração do Pedido</label>
                              <div class="input-group" style='width:100%;'>
                                <input readonly style="border-radius: 4px;" type="text" class="form-control" name="duracao_pedido" id="duracao_pedido_edit_ass" placeholder="Duracao do Pedido">
                              </div>
                          </div>
                      </div>
                      
                      <!-- Tipo de Priodade dos Pedidos -->
              
                      <div class='col-md-6 col-sm-6 col-xs-12'>
                          <div class="form-group">
                              <label class="control-label" title="Tipo de Prioridade dos Pedidos de Orcamentos na assistencia">Tipo de Prioridade dos Pedidos de Orcamentos na assistencia</label>
                              <div class="input-group" style='width:100%;'>
                                <select class="form-control" name="tipo_prioridade_pedido_edit_ass" id="tipo_prioridade_pedido_edit_ass">
                                    
                                </select>
                              </div>
                          </div>
                      </div>
        
        
                      
                            </div>
                        </div>
                        <div class="modal-footer">
                             <p style='text-align:center; margin:0;'><img src="css/logo-nav.png" class="logo-nav" style="width:120px;"></p>  
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle" aria-hidden="true"> </i><font class="hidden-xs"> Cancelar</font></button>
                            <button title="Guardar as alterações do serviço" type="button" class="btn btn-success" onclick="saveIt_Pedido_Ass($('.servico_id').html())"> <span class="glyphicon glyphicon-save-file"></span><font class="hidden-xs"> Guardar</font></button>
                        </div>
                    </div>
                </div>
        
                </div>
        
        
        <!-- End Edit Table Pedido de Orcamento -->




