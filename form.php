<!DOCTYPE html>

<html lang="ru">

  <head>
    <title>Задане_3</title>
	<link rel="stylesheet" href="style.css">
  </head>

  <body style="margin:0;" bgcolor=#2e2525>
        <h2 class="h1" ;="" id="form">Форма</h2>

   <form action="/" ;="" class="form" method="POST">

          <label>
              Имя:<br/>
              <input name="name"
                     value="" />
          </label><br/>
          <label>
              E-mail:<br/>
              <input name="email"
                     value=""
                     type="email" />
          </label><br/>
          <label>
              Дата рождения:<br/>
              <input name="date"
                     value=""
                     type="date" />
          </label><br/>
          Пол:<br/>
          <label>
              <input type="radio" checked="checked"
                     name="radio-group-1" value="Значение1" />
              Женский
          </label>
          <label>
              <input type="radio"
                     name="radio-group-1" value="Значение2" />
              Мужской
          </label><br/>
          Количество конечностей:<br/>
          <label>
              <input type="radio" checked="checked"
                     name="radio-group-2" value="Значение1" />
              2(или меньше)
          </label>
          <label>
              <input type="radio"
                     name="radio-group-2" value="Значение2" />
              3-15
          </label>
          <label>
              <input type="radio"
                     name="radio-group-2" value="Значение3" />
              16(или больше)
          </label><br/>
          <label>
              Сверхспособности:
              <br/>
              <select name="ultimate[]"
                      multiple="multiple">
                  <option value="Значение1"> Бессмертие</option>
                  <option value="Значение2">Прохождение сквозь стены</option>
                  <option value="Значение3" selected="selected">Левитация</option>
              </select>
          </label><br/>
          <label>
              Биография:<br/>
              <textarea name="bio"></textarea>
          </label><br/>
          <br/>
          <label>
              <input type="checkbox"
                     name="check-1" />
              С контрактом ознакомлен(а)
          </label><br/>
          <input type="submit" value="Отправить" />
    
      </label></form></ol></div>
    </div>
	<footer>
      <div class="container"><h2>(c)Варламов Кирилл 27/1</h2></div>
    </footer>
	<div class="mallbery-caa" style="z-index: 2147483647 !important; text-transform: none !important; position: fixed;"></div>
</body>
<div id="sm-wrapper"></div>
</html>