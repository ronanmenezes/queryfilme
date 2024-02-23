<div class="card">
  <div class="card-header text-center">
    <h4>CLIENTES<h4>
  </div>
  <div class="card-body">

    
    <table class="table table-responsive table-hover" style='width:100%'>
      <thead>
        <tr>
          <th scope="col" width='3%'>CÓDIGO</th>
          <th scope="col" width='87%'>GÊNERO</th>
          <th scope="col" width='10%'>AÇÃO</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
       <?php 
       $gen = listarTabela ('idgenero,genero','genero','idgenero');
       if ($gen != 'Vazio') {
       foreach ($gen as $genitem) {
        $idgen = $genitem -> idgenero; 
        $generonome = $genitem -> genero;
        ?>
        <tr>
          <th scope="row"><?php echo $idgen?></th>
          <td><?php echo $generonome ?></td>
          <td>
          <div class="btn-group btn-group-sm" role="group" aria-label="Basic mixed styles example">

         <a class="btn btn-outline-danger" href='?menu=idcliente&id=<?php echo $id?>'>Excluir</a>
          <button type="button" class="btn btn-outline-primary">Alterar</button>
            
        </div>
        </td>
        </tr>
      <?php 
      }
       }
               ?>
      </tbody>
    </table>

</div>
</div>



<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-success " data-bs-toggle="modal" data-bs-target="#exampleModal">Cadastrar</button>

<!-- Modal -->
<form action='adm.php?menu=calca' method='post' name='frmcurso'>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro de Calça</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="mb-3 m-2 p-2">
          <label for="exampleInputText" class="form-label">Nome:</label>
          <input type="text" class="form-control" name="nomecalca" required>
        </div>
        <div class="mb-3 m-2 p-2">
          <label for="exampleInputText" class="form-label">Preço:</label>
          <input type="text" class="form-control" name="precocalca"  required>
        </div>
        <div class="mb-3 m-2 p-2">
          <label for="exampleInputText" class="form-label">Foto:</label>
          <input type="text" class="form-control" name="fotocalca" required>
        </div>
        <div class="mb-3 m-2 p-2">
          <label for="exampleInputText" class="form-label">ID:</label>
          <input type="number" class="form-control" name="id" required>
        </div>
        <div class="form-group mb-3 m-2 p-2">
          <label for="exampleForm">Situação:</label>
          <select class="form-control " name="ativo" id="ativo" required>
            <option disabled>Selecione uma situação</option>
            <option value='a'>Ativado</option>
            <option value='d'>Desativado</option>
          </select>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-outline-success">CADASTRAR</button>
        </div>
      </div>
    </div>
  </div>
</form>