<?= $this->Html->css('login') ?>
<?= $this->Html->css(captcha_layout_stylesheet_url(), ['inline' => false]) ?>

<div class="container" >

    <div class="row"  >

        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">

            <?= $this->Flash->render('auth') ?>
            <?= $this->Form->create() ?>
            <fieldset>
                <?php
                // show error messages
                if (!empty($errors)) {
                    echo '<div class="cake-error"><ul>';
                    foreach ($errors as $e) {
                        echo '<li>' . reset($e) . '</li>';
                    }
                    echo '</ul></div>';
                }
                ?>
                <h3 style="text-align: left">Ingrese sus datos</h3>
                <hr class="colorgraph">
                <div class="form-group">
                    <?= $this->Form->input('username', ['class' => 'form-control input-md', 'placeholder' => 'Username', 'label' => false, 'required']) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->input('password', ['class' => 'form-control input-md', 'placeholder' => 'Contraseña', 'label' => false, 'required']) ?>
                </div>

                <div class="form-group">
                    <!-- show captcha image html -->
                    <?= captcha_image_html() ?>

                    <!-- Captcha code user input textbox -->
                    <?= $this->Form->input('CaptchaCode', [
                        'label' => 'Ingrese los caracteres de la imagen:',
                        'maxlength' => '10',
                        'id' => 'CaptchaCode','class' => 'form-control input-md','placeholder' => 'Ingrese su Captcha',
                    ]) ?>

                </div>

                <hr class="colorgraph">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <?= $this->Form->button('Acceder', ['class' => 'btn btn-lg btn-success btn-block']) ?>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <?= $this->Html->link('Registrarse', ['controller' => 'Technical', 'action' => 'add'], ['class' => 'btn btn-lg btn-primary btn-block']) ?>
                    </div>
                </div>

            </fieldset>
            <?= $this->Form->end() ?>
        </div>
    </div>

</div>