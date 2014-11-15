<?php
/**
 * Created by PhpStorm.
 * User: Louis
 * Date: 05/11/14
 * Time: 18:12
 */

include "header.php";?>
<section>
    <div class="row">
    <div id="container-login" class="login">
        <form class="login-form">
            <h4 class="center">Se connecter</h4>
            <label for="name">Mail :</label>
            <input type="name">
            <label for="username">Mot de passe :</label>
            <p><a href="#">Mot de passe oublié ?</a>
                <input type="password">
            <div id="lower">
                <label class="check" for="checkbox">Maintenir la connexion</label>
                <div class="onoffswitch">
                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                    <label class="onoffswitch-label" for="myonoffswitch">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                    </label>
                </div>
                <input type="submit" value="Login">
            </div>
        </form>
    </div>
    </div>
</section>
<?php include "footer.php"?>