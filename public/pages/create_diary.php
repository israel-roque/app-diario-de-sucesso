<?php

if (isLogged()) {
    redirectToHome();
}

?>

<section class="">
    <h1 class="display-4 text-bg-warning bg-gradient text-center p-3">
        <i class="bi bi-pen-fill"></i>
        Escreva seu Diário
    </h1>
   
    <div id="app" class="container">
        <div class="row">
            <div class="col-md-6 order-md-2">
                <article class="card" v-if="content">
                    <div class="card-header">
                        <h2 class="card-title">{{ title }}</h2>
                    </div>
                    <div class="card-body">
                        <p class="card-text">{{ content }}</p>
                    </div>
                </article>
                <div v-else class="lead text-center">Comece a digitar que a mágica irá aparecer 😉</div>
            </div>
            <div class="col-md-6 mt-5 mt-md-0">
                <form class="container shadow p-4" action="/pages/forms/diary.php" method="POST">
                    <h4 class="mb-3 pb-3 border-bottom">E ai, <?= $_SESSION['name'] ?? ''?>! Me conta como foi seu dia?</h4>

                    <!-- UserId input hidden-->
                    <input type="hidden" name="user_id" value="<?= $_SESSION['user_id'] ?? ''?>">

                    <!-- Content input -->
                    <div class="mb-3 form-floating">
                        <textarea class="form-control" name="content" id="content" rows="6" placeholder="Digite aqui..."
                            style="height:200px;" v-on:input="showContent">
                        </textarea>
                        <label class="form-label" for="content">Detalhe tudo o que aconteceu hoje</label>
                    </div>

                    <!-- Title input -->
                    <div class="mb-3 form-floating">
                        <input class="form-control" type="text" name="title" id="title" placeholder="Digite um título"
                            v-on:input="showTitle" />
                        <label class="form-label" for="title">Título para descrever como foi seu dia</label>
                    </div>

                    <!-- Button submit -->
                    <div class="mb-3 d-grid">
                        <button type="submit" class="btn btn-lg btn-outline-warning">Criar Diário</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php echo get('message') ?>
    <!--fim app-->

    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <script>
    new Vue({
        el: "#app",
        data: {
            title: '',
            content: ''
        },
        methods: {
            showContent: function(event) {
                this.content = event.target.value
            },
            showTitle: function(event) {
                this.title = event.target.value
            }
        }
    });
    </script>
</section>