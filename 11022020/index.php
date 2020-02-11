<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php include (HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

<h1>Cadastro de Colaboradores</h1>

<?php if ($db) : ?>

<form name="formName" action="login.php" method="POST">
    <div class="row">
        <div class="col-xs-6 col-sm-3 col-md-2">
            Digite set Login <br>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-2">
            <input type="text" name="nomeDoUsuario" size="50" 
            maxlength="40" required="required"> <br>
        </div>
    </div>

    <div class="row">
        <div class="csl-xs-6 col-sm-3 col-md-2">
            Digite sua Senha <br>
        </div>
        <div class="col-xs-6 col-sm-3 col-md-2">
            <input type="text" name="senhaDoUsuario" size="50"
                maxlength="40" required="required" placeholder="Tipo 123"
                onkeypress="return blokletras(event)"> <br><br>
        </div>
    </div>
    <button type="submit" class="btn btn-primary" value="Login">Login</button>
</form>

<?php else : ?>
    <div class="alert alert-danger" role="aler">
    <p><strong>ERROR:</strong>Não foi possivel Conectar ao Banco de Dados!</p>
    </div>
<?php endif; ?>

<?php include (FOOTER_TEMPLATE); ?>