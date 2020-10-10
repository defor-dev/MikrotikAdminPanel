<?php include __DIR__ . '/../header.php'; ?>
    <div class="wrapper">
      <div class="wrap" id="create">
        <div class="create__cell-1">
          <h1>Регистрация абонента</h1>

          <?php $urlArray = explode("/", $_SERVER['QUERY_STRING']);
              $url = $urlArray[2]; ?>
          <?php if (!empty($error)): ?>
            <p class="error"><?= $error ?></p>
          <?php endif; ?>

          <div class="create__form">
            <form method="post" id="form">
              <input id="field_1" v-model="field_1" placeholder="Маска" type="text" name="mask" value="<?= $_POST['mask'] ?? '' ?>">
              <input id="field_2" v-model="field_2" placeholder="Адрес" type="text" name="fact_address" value="<?= $_POST['fact_address'] ?? '' ?>">
              <input id="field_3" v-model="field_3" placeholder="Имя" type="text" name="name" value="<?= $_POST['name'] ?? '' ?>">
              <input id="field_4" v-model="field_4" placeholder="IP" type="text" name="ip" value="<?= $_POST['ip'] ?? '' ?>">
              <input id="field_5" v-model="field_5" placeholder="Порт" type="text" name="port" value="<?= $_POST['port'] ?? '' ?>">
            </form>
          </div>
        </div>
        <div class="create__cell-2">
          <div class="admin__button create__button" :class="status">
            <a href="/MikrotikAdminPanel/checkvoid/form/<?php echo $url; ?>/create/">
              <div>
                <p>Зарегистрировать</p>
              </div>
            </a>
          </div>
          <div class="admin__button create__button">
            <a href="http://localhost/MikrotikAdminPanel/checkvoid/">
              <div class="admin__button-text">
                <p>Вернуться</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
<?php include __DIR__ . '/../footer.php'; ?>