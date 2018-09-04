<!DOCTYPE html>
<html lang="ru">
  <head>
    <? include ('tpl/head.tpl') ?>
  </head>
  <body class="path-contacts">
    <? include ('tpl/header.tpl') ?>
    <div class="contacts-page">
      <div class="contacts-page-left">
        <div class="contacts-page-left-content">
          <div class="section-title">
            Контакты
          </div>
          <div class="contacts-row">
            <div class="contacts-col contacts-col--full">
              <div class="contacts-page-label">
                Адрес
              </div>
              <div class="contacts-page-value">
                г. Вологда, ул. Чехова,д. 10, офис 14
              </div>
            </div>
            <div class="contacts-col">
              <div class="contacts-page-label">
                Офис
              </div>
              <div class="contacts-page-value">
                <a href="tel:+7 (8172) 72 06 53">
                  +7 (8172) 72 06 53
                </a>
              </div>
            </div>
            <div class="contacts-col">
              <div class="contacts-page-label">
                Телефон
              </div>
              <div class="contacts-page-value">
                <a href="tel:+7 (921) 716 06 73">
                  +7 (921) 716 06 73
                </a>
              </div>
            </div>
            <div class="contacts-col contacts-col--full">
              <div class="contacts-page-label">
                Часы работы
              </div>
              <div class="contacts-page-value">
                Понедальник - Пятница: 09.00 — 18.00
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="contacts-page-right">
        <div class="contacts-page-right-content">
          <div class="section-title">
            Связаться с нами
          </div>
          <form action="?" class="form contacts-page-form">
            <div class="contacts-page-form-row">
              <div class="form-item">
                <input type="text" class="form-field" name="name" placeholder="Ваше имя" />
              </div>
              <div class="form-item">
                <input type="text" class="form-field" name="phone" placeholder="Ваш телефон" />
              </div>
              <div class="form-action">
                <button type="submit" class="btn btn--arrow-submit"></button>
              </div>
            </div>
            <div class="form-description">
              Отправляя запрос, вы даете согласие на <a href="">обработку персональных данных</a>
            </div>
          </form>
        </div>
      </div>
    </div>
    <? include ('tpl/front-map.tpl') ?>
    <? include ('tpl/footer.tpl') ?>
    <? include ('tpl/scripts.tpl') ?>
  </body>
</html>
