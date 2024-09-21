<section class="vh-100" data-bs-theme="">
    <?php echo get('message') ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 text-black pt-5 bg-gradient text-bg-tertiary">

                <div class="px-2 px-md-5 ms-xl-4 text-warning">
                    <i class="bi bi-journal-text fs-1"></i>
                    <span class="h1 fw-bold mb-0">Diário de Sucesso</span>
                </div>

                <div class="d-flex align-items-center px-2 px-md-5 ms-xl-4 mt-2 mt-md-5 pt-5 pt-xl-0 mt-xl-n5">

                    <form style="width: 23rem;" action="/pages/forms/login.php" method="POST">

                        <h3 class="fw-normal mb-3 pb-3 text-secondary" style="letter-spacing: 1px;">Entre na sua conta
                        </h3>

                        <div class="form-floating mb-4">
                            <input type="email" name="email" id="email" class="form-control form-control-lg"
                                placeholder="" value="israel@email.com"/>
                            <label class="form-label" for="email">Endereço de E-mail</label>
                        </div>

                        <div class="form-floating mb-4">
                            <input type="password" name="password" id="password" class="form-control form-control-lg"
                                placeholder="" value="1234" />
                            <label class="form-label" for="password">Senha</label>
                        </div>

                        <div class="pt-1 mb-4 d-grid">
                            <button class="btn btn-warning bg-gradient btn-lg" type="submit">Entrar</button>
                        </div>

                        <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Esqueceu a senha?</a></p>
                        <p>Não possui conta? <a href="?page=register" class="link-warning">Cadastre-se</a></p>

                    </form>

                </div>

            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
                <img src="https://images.unsplash.com/photo-1579017308347-e53e0d2fc5e9?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
            </div>
        </div>
    </div>
</section>