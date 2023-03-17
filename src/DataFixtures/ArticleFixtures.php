<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Articles;
use App\Entity\Category;
use App\Entity\Comment;


class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = \Faker\Factory::create('fr_FR');

        // Créer 3 categories fakées
        for ($i = 0; $i <= 3; $i++) {
            $category = new Category();
            $category->setTitle($faker->sentence())
                ->setDescription($faker->paragraph());

            $manager->persist($category);

            //créer entre 4 et 6 articles
            for ($j = 1; $j <= mt_rand(4, 6); $j++) {

                $article = new Articles();

                $content = '<p>' . join($faker->paragraphs(5), '</p><p>') . '</p>';

                $article->setTitle($faker->sentence)
                    ->setContent($content)
                    ->setImage($faker->imageUrl())
                    ->setCreatedAt($faker->dateTimeBetween('-6 months'))
                    ->setCategory($category);

                $manager->persist($article);

                //on donne des commentaire a l article
                for ($k = 1; $k <= mt_rand(4, 10); $k++) {
                    $comment = new Comment();

                    $content = '<p>' . join($faker->paragraphs(2), '</p><p>') . '</p>';

                    $days = (new \Datetime())->diff($article->getCreatedAt())->days;

                    $comment->setAuthor($faker->name)
                        ->setContent($content)
                        ->setCreatedAt($faker->dateTimeBetween('-' . $days . ' days'))
                        ->setArticle($article);

                    $manager->persist($comment);
                }
            }
        }


        $manager->flush();
    }
}