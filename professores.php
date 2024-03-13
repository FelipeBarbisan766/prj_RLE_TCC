<?php require_once"head.html";
include('protect.php');
?>
<body>
<?php require_once"nav.html";?>

<!------------------------------------------------------------------------------------------------------------------------------------>

<!-- Button trigger modal -->
<div class="container">
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
        <form action="professores.php" method="POST">
        <div class="form-group row">
          <label for="txtprofnome" class="col-5 col-form-label">Digite o Nome</label> 
          <div class="col-8">
            <input id="txtprofnome" name="txtprofnome" type="text" class="form-control" required="required">
          </div>
        </div>
        <div class="form-group row">
          <label for="txtra" class="col-5 col-form-label">Digite o RA</label> 
          <div class="col-8">
            <input id="txtrm" name="txtrm" type="number" max="10" required="required" class="form-control">
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


<!-- modal -->
<!-- lista -->


   <!-- script php database -->
<?php
  #CREATE
  #....

  #READ(LISTA)
  #....

  #UPDATE
  #....

  #DELETE
  #....
?>

</body>
</html>