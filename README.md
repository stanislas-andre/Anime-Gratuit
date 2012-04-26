Anime-Gratuit
=============



GBO's comments:
===============

* Pas de header.inc.php :-P

* Pas de AnimeGratuit.class.php :-P x2

* Pas de conf/config.conf.php :-P x3

* Dans ton index.php tu fais "new AnimeGratuit();". C'est quoi AnimeGratuit ?

* Requètes: TOUJOURS echaper les valeurs non sûres dans les requetes (genre les valeur qu'arrive d'un formulaire). C'est valable sur toutes les requetes (même les SELECT) et on le fait au plus des requetes (avant le mysql_query, par exemple).

* Anime.class.php:
  - Méthode addEpisode qui sert à rien: tu crées une variable locale $episode qui disparaît à la fin de la méthode.
  - Evite de mettre des requetes SQL directement dans tes objets de données (ta Anime représente un Anime. T'as une classe AnimeManager: utilise là pour manipuler tes Animes, et entre les enregistrer) Ca crée beaucoup d'adhérence entre ton objet Anime & ton mode de persistence, alors qu'il ne faudrait pas.
  => Tu te fais une méthode saveAnime dans ton AnimeManager qui va prendre un Anime en parametre.
  => Ca te permettra accessoirement d'économiser une instance de ton SQLStore vu que tu l'as déjà dans ton AnimeManager

* AnimeManager.class.php:
  - Pourquoi charger tout le temps ta liste d'Anime dans le constructeur ? Dans l'absolu ce n'est pas utile.
  - Pourquoi avoir un accesseur pour ton SQLStore ? Tu n'as a priori pas besoin de l'exposer
  - Typiquement, dans ta méthode getAnAnime, pourquoi ne pas faire un SELECT WHERE Id = $id ? Ca t'évite de manipuler ta liste d'Anime complete

* SqlStore.class.php:
  - Pas de valeur par defaut pour connected
  - Comme je disais tu pourrais implémenter tes requètes ici unqiuement...