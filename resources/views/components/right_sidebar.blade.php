 <!--Поисковик Start-->
<div class="col-lg-4 mt-5 mt-lg-0" xmlns="http://www.w3.org/1999/html">
    <div class="mb-5">
        <form action="">
            <div class="input-group">
                <input type="text" class="form-control form-control-lg" placeholder="Keyword">
                <div class="input-group-append">
                    <span class="input-group-text bg-transparent text-primary"><i class="fa fa-search"></i></span>
                </div>
            </div>
        </form>
    </div>
    <!--Поисковик End-->

    <!--Categories start-->

    <div class="mb-5">
        <h3 class="mb-4">Категории</h3>
        <ul class="list-group">

          "@foreach($category)

            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{$category}}
                <span class="badge badge-primary badge-pill"><?php //= $count ?><!----></span>
            </li>

            @endforeach

        </ul>
    </div>
    <!--categories end-->

    <!--Свежие посты начало-->

    <div class="mb-5">
        <h3 class="mb-4">Свежие посты</h3>

        <?php //foreach ($obj->dataProvider->articleProvider->getArticles() as $article) :
//            if ($article["url_key"] == "primary") continue;
            $title = $article["title"];
            $description = mb_substr($article["content"], 0, 70); ?>

        <div class="d-flex align-items-center border-bottom mb-3 pb-3">
            <img class="img-fluid" src="<?= $article["image"] ?>" style="width: 80px; height: 80px;" alt="">
            <div class="d-flex flex-column pl-3">
                <a class="text-dark mb-2" href="<?= $variableProvider->getVariable("URL_ARTICLE_VIEW") . $article["url_key"]; ?>"> <?= "<b>" . $title . "</b>" .  " " . $description . "..."; ?></a>
                <div class="d-flex">
                    <small class="mr-3"><i class="fa fa-user text-muted"></i> <?= $article["author"] ?></small>
                    <small class="mr-3"><i class="fa fa-folder text-muted"></i><?= $article["tag"] ?></small>
                    <small class="mr-3"><i class="fa fa-comments text-muted"></i> 3 </small>
                </div>
            </div>
        </div>

        <?php endforeach; ?>
        <div class="d-flex align-items-center border-bottom mb-3 pb-3">
            <a class=" font-weight-bold mb-2" href="<?=  $variableProvider->getVariable("URL_ARTICLES_VIEW"); ?>"> Читать все статьи</a>
        </div>

    </div>
        <!--Свежие посты конец-->


    <div class="mb-5">
        <img src="/assets/img/blog-2.jpg" alt="" class="img-fluid">
    </div>

    <!--Tags Start-->

    <div class="mb-5">
        <h3 class="mb-4">Теги</h3>
        <div class="d-flex flex-wrap m-n1">

            <?php foreach ($obj->dataProvider->getTags() as $tag) : ?>

            <a href="" class="btn btn-outline-primary m-1"><?= $tag ?></a>

            <?php endforeach; ?>
        </div>
    </div>

    <!--Tags End-->

    <div class="mb-5">
        <img src="https://flexi.de/ru/flexi-ru/wp-content/uploads/2021/06/blog-hero.jpg" alt="" class="img-fluid">
    </div>
    <div>
        <h3 class="mb-4 text-dark">Питомец — это не просто домашнее животное</h3>
        Другу, который дает нам так много, хочется отдать столько же. Именно поэтому в нашем блоге вы можете найти
        советы экспертов
        на любую тему о домашних животных, а также задать интересующие Вас вопросы в комментариях.
    </div>
</div>
