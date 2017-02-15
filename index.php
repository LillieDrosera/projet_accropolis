<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//localhost:35729/livereload.js"></script>

    <title>Accropolis | La chaîne de streaming citoyenne</title>
</head>



<body class="container-fluid">
    <main class="col-md-9">
        <section class="AC-firstmain row">
                <div class="AC-live col-md-12">
                    <h3 class="AC-donation pull-right">Je soutiens</h3>
                    <h3>Ne ratez aucun Live !</h3>
                    <p>Téléchargez votre extension sur</p>
                    <p><a class="AC-extend" href="#">Chrome</a>, <a  class="AC-extend" href="#">Firefox</a> ou <a class="AC-extend" href="#">Opéra</a></p>

                </div>
                <article class="col-md-12">
                    <h2 class="pull-left">Prochain Live 1:15:45 sec</h2>
                    <div class="AC-defileParent">
                            <span class="AC-defile" data-text="- Inscrivez-vous à notre Newsletter    -    Rejoignez-nous sur le chat    -    Donnez-nous votre avis sur le forum    -    Soutenez-nous dans nos projets">
                            -     Inscrivez-vous à notre Newsletter    -    Rejoignez-nous sur le chat    -    Donnez-nous votre avis sur le forum    -    Soutenez-nous dans nos projets
                            </span>
                    </div>
                    <figure class="row">
                        <figcaption>
                            <img width="100%" src="./assets/img/placeholderstream.jpg" alt="place holder">
                        </figcaption>
                    </figure>
                </article>
            </section>
        <section class="AC-main row">
            <aside class="AC-left col-md-3">
                <div class="AC-discord-title col-md-12">
                    <img class="col-md-2" src="./assets/img/DiscordLogo.svg" alt="Discord Logo">
                    <h3 class="col-md-10">Discord</h3>
                </div>
                <article class="col-md-12">
                    <p>3 user(s) online</p>
                    <p>Pierre</p>
                    <p>Paul</p>
                    <p>Jack</p>
                    <p>John</p>

                    <a href="#">Rejoindre le serveur</a>
                </article>
            </aside>
            <div class="AC-prognew col-md-9">
                <article class="col-md-12 AC-bnews">
                        <h3 class="pull-left">Breaking News</h3>
                        <div class="AC-defileParent">
                                <span class="AC-defile" data-text="- Penelope Gate : JFC annonce sa candidature - Lorem Ipsum - Ipsum Lorem - Ca win en Lan " >
                                        - Penelope Gate : JFC annonce sa candidature - Lorem Ipsum - Ipsum Lorem - Ca win en Lan
                                </span>
                        <p></p>
                </article>
                <article class="col-md-12 AC-prog">
                        <h3 class="pull-left">La Programmation</h3>
                </article>
                <article class="col-md-12 AC-prog-titre text-center">
                    <figure class="col-md-2">
                        <p>Lundi</p>
                    </figure>
                    <figure class="col-md-2">
                        <p>Mardi</p>
                    </figure>
                    <figure class="col-md-2">
                        <p>Mercredi</p>
                    </figure>
                    <figure class="col-md-2">
                        <p>Jeudi</p>
                    </figure>
                    <figure class="col-md-2">
                        <p>Vendredi</p>
                    </figure>
                </article>

        </section>
        <section class="AC-replay row">
            <article class="col-md-12">
                    <h2 class="pull-left">Les derniers Replay</h2>
                    <article class="AC-vidreplay col-md-12">
                    <?php for ($i=0;$i<9;$i++) : ?>
                        <div class="col-md-4">
                            <a href="#">
                                <img width="80%" src="./assets/img/placeholderstream.jpg" alt="">
                                <p class="AC-titre-replay">QAG Commentées !</p>
                                <p class="AC-date-replay">07/02/2017 - 18h</p>
                            </a>
                        </div>
                    <?php endfor; ?>
                    </article>

                        <nav class="AC-pagination row text-center">
                          <ul class="pagination justify-content-center">
                            <li class="page-item">
                              <a class="page-link" href="#" tabindex="-1"><i class="glyphicon glyphicon-chevron-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                            <li class="page-item"><a class="page-link" href="#">7</a></li>
                            <li class="page-item">
                              <a class="page-link" href="#"><i class="glyphicon glyphicon-chevron-right"></i></a>
                            </li>
                          </ul>
                        </nav>

            </article>

        </section>
    </main>
    <aside class="AC-Chat col-md-3">
        Chat twitch
    </aside>
</body>

</html>
