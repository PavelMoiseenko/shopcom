<h1>Вы вошли в личный кабинет редактора новостей</h1> 

<div class="row">
    <div class="col-md-2">
      <form action='/' method='POST'>
          <button type="submit" class="btn btn-primary btn-lg btn-block">Выход</button>
      </form><br>
      
    </div>
    <div class="col-md-10">
      <form action='/news/add' method='POST'>       
        <button type="submit" class="btn btn-success btn-lg btn-block">Добавить новость</button>
      </form><br>
      <form action='/news/deleteNews' method='POST'>       
        <button type="submit" class="btn btn-danger btn-lg btn-block">Удалить новость</button>
      </form>

    </div>
    
  </div>