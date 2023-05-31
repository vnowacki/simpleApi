<?php

namespace App\Controller;

use App\DTO\Article;
use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class ArticlesController extends AbstractController
{
    private $serializer;

    public function __construct() {
        $this->serializer = new Serializer(
            [new GetSetMethodNormalizer(), new ArrayDenormalizer(), new ObjectNormalizer()],
            [new JsonEncoder()]
        );
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
        $article_dbo = $connection->fetchOne("SELECT * FROM articles WHERE id = ?", [$id]);
        $article = $this->serializer->deserialize(json_encode($article_dbo), Article::class, 'json');

        $serializedData = $this->serializer->serialize($article, 'json');

        return new Response($serializedData, Response::HTTP_OK);
    }
}