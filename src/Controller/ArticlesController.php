<?php

namespace App\Controller;

use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticlesController extends AbstractController
{
    #[Route('/articles', name: 'articles_list')]
    public function list(Connection $connection): Response
    {
        $articles = $connection->fetchAllAssociative("SELECT * FROM articles");
        return new Response(json_encode($articles));
    }
}