<section class="projet" id="projet">
    <div class="container-fluid">
        <!-- Titre du blog et nom de l'auteur -->
        <div class="row">
            <div class="col-xs-12">
                <h1>Billet simple pour<br/>l'Alaska</h1>
                <h2><a href="/blogjf/Biographie" data-toggle="tooltip" title="Biographie de l'auteur">Un livre de Jean Forteroche</a></h2>
            </div>
        </div>
        <!-- Le projet -->
        <div class="row card-reverse">
            <div class="episode-head">
                <h2 class="text-center">Le projet</h2></div>
            <div class="episode-box">
                <p>
                    <?php echo $project->content ?>
                </p>
                <!-- Lire le livre -->
                <div class="text-right">
                    <a href="/blogjf" class="btn btn-small btn-primary btnlink">Accueil</a>
                </div>
            </div>
        </div>
    </div>
</section>