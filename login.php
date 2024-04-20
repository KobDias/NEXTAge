<div class="caixinha">
    <div class="container">
    <br> <br>
        <div class="row">
            <div class="col text-center alinharmos">
                <img src="./imgs/banners/Logo.png" class="pequenalogo" alt="">
                <p  class="font-weight-bold text-center">Não tem cadastro?</p>
                <p class="font-italic"><a href="index.php?p=15">Cadastro</a></p>
            </div>
            <div class="col">
                <form method="post" action="processlogin.php" id="Formularios belos"> 
                    <label for="email" class="form-label">Seu Email</label>
                    <div class="input-group mb-3">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Seu email" aria-label="Seu email" aria-describedby="basic-addon2" required>
                    <span class="input-group-text" id="basic-addon2">@gmail.com</span>
                    </div>

                    <label for="senha" class="form-label">Senha</label>
                    <div class="input-group mb-3">
                    <input type="password" class="form-control" id="senha" aria-label="senha" aria-describedby="basic-addon2" required>
                    </div>

                    <div class="input-group mb-3">
                    <input type="submit" class="form-control" value="Enviar" aria-describedby="basic-ddon2">
                    </div>
                    <p id="error-message" class="error-message"><?php echo isset($_SESSION['login_error']) ? $_SESSION['login_error'] : ''; ?></p>

                </form>
            </div>
        </div>
        <br> <br>
    </div>
</div>