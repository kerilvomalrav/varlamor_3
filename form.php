<!DOCTYPE html>

<html lang="ru">

  <head>
    <title>Задание_3</title>
	<link rel="stylesheet" href="style.css">
	<meta charset="utf-8">
  </head>

  <body style="margin:0;" bgcolor=#2e2525>
        <h2 class="h1" ;="" id="form">Форма</h2>

   <form action="" method="POST">

              Имя:<br/>
              <input name="name"/>
			  <br/>
              E-mail:<br/>
              <input name="email"
                     type="email" />
					 <br/>
              Дата рождения:<br/>
              <input name="date"
                     type="date" />
          <br/>
          Пол:<br/>
              <input type="radio" checked="checked"
                     name="radio-group-1" value="Значение1" />
              Женский
              <input type="radio"
                     name="radio-group-1" value="Значение2" />
              Мужской<br/>
          Количество конечностей:<br/>
              <input type="radio" checked="checked"
                     name="radio-group-2" value="Значение1" />
              2(или меньше)
              <input type="radio"
                     name="radio-group-2" value="Значение2" />
              3-15
              <input type="radio"
                     name="radio-group-2" value="Значение3" />
              16(или больше)<br/>
              Сверхспособности:
              <br/>
              <select name="ultimate[]"
                      multiple="multiple">
                  <option value="Значение1"> Бессмертие</option>
                  <option value="Значение2">Прохождение сквозь стены</option>
                  <option value="Значение3" selected="selected">Левитация</option>
              </select><br/>
              Биография:<br/>
              <textarea name="bio"></textarea><br/>
          <br/>
          <input type="submit" value="Отправить" />
    </form><br/>
	<footer>
      <div class="container"><h2>(c)Варламов Кирилл 27/1</h2></div>
    </footer>
	<div class="mallbery-caa" style="z-index: 2147483647 !important; text-transform: none !important; position: fixed;"></div>
</body>
<div id="sm-wrapper"></div>
</html>