<?php

namespace Src\Controller;

use App\Repository\ArticleRepository;
use App\Service\View;
use App\Form\FormArticle;


class HomeController


{
    use View;

    private AbonneRepository $abonneRepository;

    public function __construct()
    {
        $this->abonneRepository = new AbonneRepository();
    }

    public function invoke(): string
    {
        return $this->render(
            SITE_NAME . ' - HomePage',
            'home.php',
            [
                'articles' => $this->articlesRepository->findAll(),
            ]
        );
    }
}