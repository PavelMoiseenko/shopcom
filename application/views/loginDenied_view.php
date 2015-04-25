<form method="POST" action="/login">
	<h1>Форма авторизации</h1>
	<p>Введите вашу фамилию</p>
	<input type="text" name="login">
	<p>Введите ваш телефон</p>
	<input type="text" name="password"><br><br>
	<input type="submit" value="Войти" name="avt_ok">
	<input type="reset" value="Сброс">
	<a href='/login/registrForm'>Зарегистрируйтесь</a>
</form>
<h1 style="color:#FF0000">Вы ввели неверные регстрационные данные или не зарегистрированы</h1>
<p style="color:#FF0000">Чтобы зарегистрироваться: <a href='/login/registrForm'>РЕГИСТРАЦИЯ</a></p>
