
<!-- Section: Design Block -->
<section data-bs-theme="dark">
    <?php echo get('message') ?>
    <!-- Jumbotron -->
    <div class="py-md-4 px-md-4 text-center text-lg-start text-bg-dark bg-gradient vh-100" style="background-color: hsl(0, 0%, 96%)">
        <div class="container">
            <div class="row gx-lg-5 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h1 class="my-5 display-3 fw-bold ls-tight">
                        O Segredo dos Vencedores: <br />
                        <span class="text-warning">Um Diário Pessoal!🌟</span>
                    </h1>
                    <p style="color: hsl(217, 10%, 50.8%)">
                        Sabia que as pessoas mais strong do mundo utilizam diários para
                        organizar seus <strong>pensamentos e metas?</strong>
                        Ao documentar suas experiências diárias, você não apenas registra sua
                        vida, mas também <strong>aprende</strong> com ela, identificando padrões
                        e <strong>estratégias</strong> que funcionam.
                        Visualize-se <strong>alcançando</strong> seus
                        <strong>objetivos</strong> com mais <strong>facilidade</strong>,
                        motivado por suas próprias reflexões.
                        Dê o primeiro passo <strong>rumo ao sucesso!</strong>
                    </p>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="card">
                        <div class="card-body py-5 px-md-5">
                            <form action="/pages/forms/register.php" method="POST">
                                <!-- Name input -->
                                <div class="form-floating mb-4">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="" />
                                    <label class="form-label" for="name">Nome completo</label>
                                </div>

                                <!-- Email input -->
                                <div class="form-floating mb-4">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="" />
                                    <label class="form-label" for="email">Endereço de E-mail</label>
                                </div>

                                <!-- Password input -->
                                <div class="form-floating mb-4">
                                    <input type="password" id="password" name="password" class="form-control" placeholder="" />
                                    <label class="form-label" for="password">Senha</label>
                                </div>

                                <!-- Checkbox -->
                                <div class="form-check d-flex justify-content-center mb-4">
                                    <input class="form-check-input me-2" type="checkbox" name="accepted" id="newsletter"
                                        checked />
                                    <label class="form-check-label" for="newsletter">
                                        Inscreva-me na newsletter extraordinária
                                    </label>
                                </div>

                                <!-- Submit button -->
                                <button type="submit" class="btn btn-warning btn-block mb-4">
                                    Criar minha conta
                                </button>

                                <!-- Register buttons -->
                                <div class="text-center">
                                    <p>Já é cadastrado? <a href="/" class="text-warning">Faça Login</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->