<?php

namespace App\Controller;

use App\DTO\Article;
use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class ArticlesController extends AbstractController
{
    public function __construct(public SerializerInterface $serializer) {
        $this->serializer = $serializer;
    }

    #[Route('/articles', name: 'api_articles_get_all', methods: ['GET'])]
    public function getAll(Connection $connection): Response
    {
        $articles_dbo = $connection->fetchAllAssociative("SELECT * FROM articles");
        $articles = $this->serializer->deserialize(json_encode($articles_dbo), 'App\DTO\Article[]', 'json');

        $serializedData = $this->serializer->serialize($articles, 'json');

        return new Response($serializedData, Response::HTTP_OK);
    }

    #[Route('/articles/{id}', name: 'api_articles_get_by_id', methods: ['GET'])]
    public function getOne(Connection $connection, int $id): Response
    {
        $article_dbo = $connection->fetchAllAssociative("SELECT * FROM articles WHERE id = ?", [$id]);
        $article = $this->serializer->deserialize(json_encode($article_dbo[0]), Article::class, 'json');

        $serializedData = $this->serializer->serialize($article, 'json');

        return new Response($serializedData, Response::HTTP_OK);
    }
}