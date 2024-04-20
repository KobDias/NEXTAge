<div class="caixinha">
    <div class="container">
    <br> <br>
        <div class="row">
            <div class="col text-center alinharmos">
                <img src="./imgs/banners/Logo.png" class="pequenalogo" alt="">
                <p  class="font-weight-bold text-center">Já tem cadastro?</p>
                <p class="font-italic"><a href="index.php?p=4">Login</a></p>
            </div>
            <div class="col">
                <form method="/processcadastro.php" action="post" id="Formularios belos">
                    <label for="basic-url" class="form-label">Seu Nome</label>
                    <div class="input-group mb-3">
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Seu Nome" aria-label="Seu Nome" aria-describedby="basic-addon2" required>
                    </div>

                    <label for="basic-url" class="form-label">Seu Telefone</label>
                    <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon2">55+</span>
                    <input type="phone" id="fone" name="fone" class="form-control" placeholder="Telefone" aria-label="Telefome" aria-describedby="basic-addon2" required>
                    </div>

                    <label for="basic-url" class="form-label">Seu Email</label>
                    <div class="input-group mb-3">
                    <input type="email" id="email" name="email" class="form-control" placeholder="Seu email" aria-label="Seu email" aria-describedby="basic-addon2" required>
                    <span class="input-group-text" id="basic-addon2">@gmail.com</span>
                    </div>

                    <label for="basic-url" class="form-label">Senha</label>
                    <div class="input-group mb-3">
                    <input type="password" class="form-control" name="senha" id="senha" aria-label="senha" aria-describedby="basic-addon2" required>
                    </div>

                    <div class="input-group mb-3">
                    <input type="submit" class="form-control" value="Enviar" aria-describedby="basic-ddon2">
                    </div>
                    <p id="error-message" class="error-message"><?php echo isset($_SESSION['register_error']) ? $_SESSION['register_error'] : ''; ?></p>
                </form>
            </div>
        </div>
        <br> <br>
    </div>
</div>