<form id="arabico_romano" method="get" action="">
    <div class="form-floating">
        <input type="number" class="form-control" id="arabicos" name="arabico" require value="<?php echo isset($_GET['arabico']) ? $_GET['arabico'] : 1; ?>" min="1" max="100" placeholder="Algarismo Arábico">
        <label for="arabicos">Algarismo Arábico</label>
    </div>
    <div class="form-floating">
        <input type="text" class="form-control" id="romanos" name="romano" require value="<?php echo isset($_GET['arabico']) ? $arabico : "I"; ?>" placeholder="Algarismo Romano">
        <label for="romanos" style="color: #0d6efd;">Algarismo Romano</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Converter</button>
</form>