<?php

include_once("database.php"); 

$ID = $_GET['id'];
//MySqli Select Query
$sql = "SELECT * FROM os WHERE excluido=0 and id=$ID";
$results= mysqli_query($conn, $sql);
while($row = $results->fetch_object()) {


	print '  <div class="row">
                <div class="form-group col-md-6">
                  <label for="orgao">Orgão</label>
                  <input type="text" class="form-control" name="orgao" id="orgao" value="'.$row->orgao.'"  required="">
                </div>

                 <div class="form-group col-md-6">
                  <label for="solicitante">Nome do Solicitante</label>
                  <input type="text" class="form-control" name="solicitante" value="'.$row->solicitante.'" id="solicitante" required="" >
                </div>
              </div>

              <div class="row">
                <div class="form-group col-md-3">
                  <label for="cep">CEP</label>
                  <input type="text" class="form-control" name="cep" id="cep" value="'.$row->cep.'" required="">
                </div>

                <div class="form-group col-md-6">
                  <label for="rua">Rua</label>
                  <input type="text" class="form-control" name="rua" id="rua" value="'.$row->rua.'">
                </div>
                <div class="form-group col-md-3">
                  <label for="numero">Número</label>
                  <input type="text" class="form-control" name="numero" id="numero" value="'.$row->numero.'">
                </div>
              </div>

              <div class="row"> 
               <div class="form-group col-md-4">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" name="bairro" id="bairro" value="'.$row->bairro.'">
              </div>
              <div class="form-group col-md-4">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" name="cidade" id="cidade" value="'.$row->cidade.'">
              </div>
              <div class="form-group col-md-4">
                <label for="estado">Estado</label>
                <input type="text" class="form-control" name="estado" id="estado" value="'.$row->estado.'">
              </div>
            </div>

            <div class="row"> 
             <div class="form-group col-md-4">
              <label for="tipo">Técnico</label>
              <select class="form-control" name="tecnico" id="tecnico">';
              ?>
              <option value="Aarao Campinho Ferreira"<?php if ($row->tecnico ==  "Aarao Campinho Ferreira") { echo "selected";} ?>>Aarao Campinho Ferreira</option>
                <option value="Adriano de Moura Vieira"<?php if ($row->tecnico ==  "Adriano de Moura Vieira") { echo "selected";} ?>>Adriano de Moura Vieira</option>
                <option value="Antonio Emidio dos Santos Junior"<?php if ($row->tecnico ==  "Antonio Emidio dos Santos Junior") { echo "selected";} ?>>Antonio Emidio dos Santos Junior</option>
                <option value="Cassio Fernando Macedo da Silva"<?php if ($row->tecnico ==  "Cassio Fernando Macedo da Silva") { echo "selected";} ?>>Cassio Fernando Macedo da Silva</option>
                <option value="Denis Henrique G. de Souza"<?php if ($row->tecnico ==  "Denis Henrique G. de Souza") { echo "selected";} ?>>Denis Henrique G. de Souza</option>
                <option value="Durval Luiz de Franca Filho"<?php if ($row->tecnico ==  "Durval Luiz de Franca Filho") { echo "selected";} ?>>Durval Luiz de Franca Filho</option>
                <option value="Guilherme Armeston de Paula Assuncao"<?php if ($row->tecnico ==  "Guilherme Armeston de Paula Assuncao") { echo "selected";} ?>>Guilherme Armeston de Paula Assunção</option>
                <option value="Henrique Felix da Silva"<?php if ($row->tecnico ==  "Henrique Felix da Silva") { echo "selected";} ?>>Henrique Félix da Silva</option>
                <option value="Jean Jose Ferreira Dornelas"<?php if ($row->tecnico ==  "Jean Jose Ferreira Dornelas") { echo "selected";} ?>>Jean Jose Ferreira Dornelas</option>
                <option value="Joao Paulo Santos Mendes"<?php if ($row->tecnico ==  "Joao Paulo Santos Mendes") { echo "selected";} ?>>Joao Paulo Santos Mendes</option>
                <option value="John Allyson Lopes de Lima"<?php if ($row->tecnico ==  "John Allyson Lopes de Lima") { echo "selected";} ?>>John Allyson Lopes de Lima</option>
                <option value="Joilson Guimarães de Almeida Júnior"<?php if ($row->tecnico ==  "Joilson Guimaraes de Almeida Junior") { echo "selected";} ?>>Joilson Guimaraes de Almeida Junior</option>
                <option value="Jony Viana de Souza"<?php if ($row->tecnico ==  "Jony Viana de Souza") { echo "selected";} ?>>Jony Viana de Souza</option>
                <option value="Julio Cesar Lins Costa"<?php if ($row->tecnico ==  "Marcos Nunes Moreira") { echo "selected";} ?>>Julio Cesar Lins Costa</option>
                <option value="Marcos Nunes Moreira">Marcos Nunes Moreira</option>
                <option value="Mauricio Ferreira Chaves Junior"<?php if ($row->tecnico ==  "Mauricio Ferreira Chaves Junior") { echo "selected";} ?>>Mauricio Ferreira Chaves Junior</option>
                <option value="Paulo Sergio da Fonseca Silva"<?php if ($row->tecnico ==  "Paulo Sergio da Fonseca Silva") { echo "selected";} ?>>Paulo Sergio da Fonseca Silva</option>
                <option value="Pedro Veras Belmino Lins"<?php if ($row->tecnico ==  "Pedro Veras Belmino Lins") { echo "selected";} ?>>Pedro Veras Belmino Lins</option>
                <option value="Thiago Henrique de Souza"<?php if ($row->tecnico ==  "Thiago Henrique de Souza") { echo "selected";} ?>>Thiago Henrique de Souza</option>
                <option value="Vinicius Barbosa Alencar e Sa"<?php if ($row->tecnico ==  "Vinicius Barbosa Alencar e Sa") { echo "selected";} ?>>Vinicius Barbosa Alencar e Sa</option>
                <?php
              print'</select>
           </div>

           <div class="form-group col-md-4">
            <label for="datasolicitacao">Data Solicitação</label>
            <input type="date" class="form-control" name="datasolicitacao" id="datasolicitacao" value="'.$row->datasolicitacao.'">
          </div>
          <div class="form-group col-md-4">
            <label for="nchamado">Número de chamado</label>
            <input type="number" class="form-control" name="nchamado" id="nchamado" value="'.$row->nchamado.'">
          </div>
        </div>

        <div class="row">
          <div class="form-group col-md-6">
            <label for="nome">Nome da peça defeituosa</label>
            <input type="text" id="nome" name="nome" class="form-control" value="'.$row->nome.'" required="">
          </div>
          <div class="form-group col-md-6">
            <label for="tipo">Tipo</label>
            <select class="form-control" name="tipo" id="tipo">';
             ?>

        <option value="Disco Rigido" <?php if ($row->tipo ==  "Disco Rigido") { echo "selected";} ?>>Disco Rigido </option>
        <option value="Fonte" <?php if ($row->tipo ==  "Fonte") { echo "selected";} ?>> Fonte </option>
        <option value="Estabilizador" <?php if ($row->tipo ==  "Estabilizador") { echo "selected";} ?>> Estabilizador </option>
        <option value="Impressora" <?php if ($row->tipo ==  "Impressora") { echo "selected";} ?>> Impressora </option>
        <option value="Memoria RAM" <?php if ($row->tipo ==  "Memoria RAM") { echo "selected";} ?>> Memoria RAM </option>
        <option value="Monitor" <?php if ($row->tipo ==  "Monitor") { echo "selected";} ?>> Monitor </option>
        <option value="Mouse" <?php if ($row->tipo ==  "Mouse") { echo "selected";} ?>> Mouse </option>
        <option value="Placa de Video" <?php if ($row->tipo ==  "Placa de Video") { echo "selected";} ?>> Placa de Vídeo </option>
        <option value="Placa Mae" <?php if ($row->tipo ==  "Placa Mae") { echo "selected";} ?>> Placa Mae </option>
        <option value="Placa Wireless" <?php if ($row->tipo ==  "Placa Wireless") { echo "selected";} ?>>Placa Wireless </option>
        <option value="Processador" <?php if ($row->tipo ==  "Processador") { echo "selected";} ?>> Processador </option>
        <option value="Switch" <?php if ($row->tipo ==  "Switch") { echo "selected";} ?>> Switch </option>
        <option value="Tablets" <?php if ($row->tipo ==  "Tablets") { echo "selected";} ?>> Tablets </option>
        <option value="Teclado" <?php if ($row->tipo ==  "Teclado") { echo "selected";} ?>>Teclado</option>

<?php

   print'</select>
         </div>
       </div>

       <div class="row">
        <div class="form-group col-md-6">
          <label for="marca">Marca</label>
          <input type="text" class="form-control" id="marca" name="marca" value="'.$row->marca.'" required="">
        </div>

        <div class="form-group col-md-6">
          <label for="modelo">Modelo</label>
          <input type="text" class="form-control" id="modelo" name="modelo" value="'.$row->modelo.'" required="">
        </div>
      </div>

      <div class="row">
        <div class="form-group col-md-4">
          <label for="fabricante">Fabricante</label>
          <input type="text" class="form-control" id="fabricante" name="fabricante" value="'.$row->fabricante.'" required="">
        </div>
        <div class="form-group col-md-4">
          <label for="numeroserie">Número Série</label>
          <input type="text" class="form-control" id="numeroserie" name="numeroserie" value="'.$row->numeroserie.'" required="">
        </div>

        <div class="form-group col-md-4">
          <label for="fileToUpload">Foto da peça defeituosa</label>
          <input class="form-control" id="upload" name="upload" type="file" value="'.$row->img_antiga.'" multiple="multiple" />                       
        </div>
        <div class="form-group col-md-6">
           <input type="number" name="idpeca" value="'.$row->id.'" style="display: none;">
           </div>

      </div>';
}
  ?>
