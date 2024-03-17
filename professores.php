<?php require_once"head.html";
include('protect.php');
?>
<body>
<?php require_once"nav.html";?>

<!------------------------------------------------------------------------------------------------------------------------------------>

<!-- Button trigger modal -->
<div class="container"> 
  <h2>Professores</h2>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Cadastrar</button>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar Professor</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- form cadastro -->
        <form action="Add.php" method="POST">
        <div class="form-group row">
          <label for="txtprofnome" class="col-5 col-form-label">Digite o Nome</label> 
          <div class="col-8">
            <input id="txtprofnome" name="txtprofnome" type="text" class="form-control" required="required">
          </div>
        </div>
        <div class="form-group row">
          <label for="txtra" class="col-5 col-form-label">Digite o RM</label> 
          <div class="col-8">
            <input id="txtrm" name="txtrm" type="number" required="required" class="form-control" max="99999" min="0">
          </div>
        </div> 
        <div class="form-group row">
          <div class="offset-5 col-8">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-success">Cadastrar</button>
          </div>
        </div>
      </form>
      <!-- form cadastro -->
      </div>
    </div>
  </div>
</div>
<div class="container">

  <table class="table">
    <tbody>
      <tr>
        <th scope="row">RM</th>
        <th scope="row">NOME</th>
        <th scope="row">AÇÕES</th>        
      </tr>
    <?php
    include('Conexao.php');
    $search = mysqli_query($conexao,"Select * from professores");
    while ($result = mysqli_fetch_array($search)){
      ?>
        
        <tr>
          <td><?php echo $result['rm']; ?></td>
          <td><?php echo $result['nome']; ?></td>
          <td>
            <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editEmployeeModal">Editar</a>
            <a href="delete.php?rm=<?php echo $result['rm'];?>"class="btn btn-danger">Excluir</a>
          </td>
        </tr>

        
        

<!-- ---------------------------------------Modal de Update---------------------------------------------------------------------------- -->

<!-- Update Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="update.php">
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input type="text" name="txtnome" class="form-control" value="<?php echo $result['nome']; ?>" required>
					</div>
					<div class="form-group">
						<label>RM</label>
						<input type="text" name="txtrm" class="form-control" value="<?php echo $result['rm']; ?>" required>
					</div>
				</div>
				<div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
					<input type="submit" name="submit" class="btn btn-primary" value="Save">
				</div>
			</form>
		</div>
	</div>
</div> 
        <?php  
      }
      ?>


    <!-- ---------------------------------------Modal de Delete---------------------------------------------------------------------------- -->
    <!-- <div class="modal fade" id="delModal" tabindex="-1" aria-labelledby="DeleteModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="DeleteModalLabel">Deseja excluir ? </h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="form-group row">
              <div class="offset-5 col-8">
              <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Não</button>
              <a class="btn btn-danger" href="delete.php?rm=<?php $result['rm'];?>" role="button">Sim</a>
              </div>
            </div>
            </form>
          </div>
          </div>
      </div>
    </div> -->
    
  </body>
  </html>