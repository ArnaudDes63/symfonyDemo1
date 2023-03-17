<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Articles;
use App\Form\ArticleType;
use App\Form\CommentType;
use App\Repository\ArticlesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index(ArticlesRepository $repo): Response
    {
        // $repo = $this->getDoctrine()->getRepository(Articles::class);

        $articles = $repo->findAll();
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
            'articles' => $articles
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('blog/home.html.twig');
    }


    /**
     * @Route("/blog/new", name="blog_create")
     * @Route("/blog/{id}/edit", name="blog_edit" )
     */
    public function form(Articles $article = null,  Request $request, EntityManagerInterface $manager){
        
        if(!$article){
            $article = new Articles();
        }

        $form = $this->createForm(ArticleType::class, $article);

        // $form = $this->createFormBuilder($article)
        //              ->add('title')
        //              ->add('content')
        //              ->add('image')           
        //              ->getForm();

        $form->handleRequest($request);
        dump($article);


        if($form->isSubmitted() && $form->isValid()) {
            if(!$article->getId()){
                $article->setCreatedAt(new \DateTime());
            }

            $manager->persist($article);
            $manager->flush();

            return $this->redirectToRoute('blog_show', ['id' => $article->getId()]);
        }



        return $this->render('blog/create.html.twig', [
            'formArticle' => $form->createView(),
            'editMode' => $article->getId() !== null,            
        ]);
    }


    /**
     *@Route("/blog/{id}/comment", name="blog_create_comment")
     */
    
    public function CreateComment(Articles $article, Comment $comment = null,  Request $request, EntityManagerInterface $manager) {
        
        $comment = new Comment();

        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid() ) {

            $comment->setCreatedAt(new \DateTime())
                    ->setArticle($article);

            $manager->persist($comment);
            $manager->flush();

            return $this->redirectToRoute('blog_show', ['id' => $article->getId()]);

        }

        return $this->render('blog/blog_comment_create.html.twig', [
            'formComment' => $form->createView(),
            'editMode' => $comment->getId() !== null
        ]);

    }

    /**
     * @Route("/blog/{id}", name="blog_show")
     */
    public function show(Articles $article)
    {
        // $repo = $this->getDoctrine()->getRepository(Articles::class);

        // $article = $repo->find($id);
        
        return $this->render('blog/show.html.twig', [
            'article' => $article
        ]);
    }
}