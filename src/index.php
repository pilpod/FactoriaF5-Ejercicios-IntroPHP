<?php include("includes/header.php") ?>
<?php include("datadb/data.php") ?>

    
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Intro PHP</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>

<section class="container" style="margin-bottom: 30px;">
    <p>
    1. Escribe una lista en un documento HTML usando un Array en PHP
    </p>
        
    <?php foreach ($marcas as $marca) { ?>
        <span><?= $marca . '<br>' ?></span>
    <?php } ?>

</section>

<section class="container" style="margin-bottom: 30px;">
    <p>
    2. Haz un formulario con un input de texto, un input de tipo “radio” y otro de tipo selector. Usa el Método POST y escribe en un documento HTML los datos enviados.
    </p>

    <form action="index.php" method="POST">
        <div class="form-group">
            <label for="text">Texto</label>
            <input type="text" name="text" class="form-control" id="text" placeholder="Escribe tu texto">
        </div>

        <div class="custom-control custom-radio">
            <input type="radio" id="customRadio1" name="plato" class="custom-control-input" value="Comer Pasta">
            <label class="custom-control-label" for="customRadio1">Opción 1: Comer Pasta</label>
        </div>
        <div class="custom-control custom-radio">
            <input type="radio" id="customRadio2" name="plato" class="custom-control-input" value="Comer Pasta">
            <label class="custom-control-label" for="customRadio2">Opción 2: Comer Patatas</label>
        </div>

        <select class="custom-select" name="size">
            <option selected>Selectiona tamaño del plato</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
        </select>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <table class="table table-dark">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Texto</th>
            <th scope="col">Plato</th>
            <th scope="col">Tamaño</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
                <td><?= $_POST['text'] ?></td>
                <td><?= $_POST['plato'] ?></td>
                <td><?= $_POST['size'] ?></td>
            </tr>
        </tbody>
    </table>

</section>

<section class="container">
    <p>
    3. Usa un array clave-valor para definir los datos de un usuario y escríbelos en una tabla en un documento HTML.
    </p>
</section>

<section class="container">
    <p>
    4. Usa una clase para definir una película. Crea varios objetos Película y dibujarlos en “cards” en un documento HTML.
    </p>
</section>






   
    


<?php include("includes/footer.php") ?>
