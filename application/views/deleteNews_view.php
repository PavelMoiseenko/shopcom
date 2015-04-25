<h1>УДАЛЕНИЕ НОВОСТЕЙ</h1>
<div class="row">
    <div class="col-md-2">
      <form action='/' method='POST'>
          <button type="submit" class="btn btn-primary btn-lg btn-block">ВЫХОД</button>
        </form><br>
    </div>
    <div class="col-md-10">
      <form method='POST' action='/news/deleteCheckNews'>
        <div class="form-group">
          <table class='table table-hover'>
          <?php           
            while($row = $data->fetch_assoc()){
                echo "<tr><td>$row[id]</td><td>$row[title]</td><td>$row[content]</td><td><input type='checkbox' name='check[]' value='$row[id]'></td></tr>";  
              }
           ?> 
          </table> 
        </div>
        <button type="submit" class="btn btn-info" name='delete' value='test'>Удалить</button>
      </form>
      
    </div>
  </div>



