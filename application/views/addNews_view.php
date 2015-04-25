
  <div class="row">
    <div class="col-md-2">
      <form action='/' method='POST'>
          <button type="submit" class="btn btn-primary btn-lg btn-block">Выход</button>
        </form><br>
        
    </div>
    <div class="col-md-10">
        <form action="/news/addNews" method="POST" >
          <div class="form-group">
            <label for="title">Введите название новости</label>
            <input type="text" class="form-control" id="title" name="title">
          </div>
          <div class="form-group">
            <label for="content">Введите содержание новости</label>
            <textarea class="form-control" id="content" name="content" rows="10"></textarea>
          </div>
          <button type="submit" class="btn btn-default" name="ok">Добавить</button>
        </form>
      </div>
  </div>