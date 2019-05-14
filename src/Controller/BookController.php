<?php

namespace App\Controller;

use App\Entity\Book;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;

class BookController extends AbstractController
{
    /**
     * @Route("/book", name="book")
     */
    public function index()
    {
        $entityManager = $this->getDoctrine()->getManager();

        $book = new Book();
        $book->setCategoryId(1);
        $book->setImage("https://images-na.ssl-images-amazon.com/images/I/51RIDXLnVAL._AC_UL160_.jpg");
        $book->setName("Michael Jackson Bio");
        $book->setPages(100);

        $entityManager->persist($book);

        $entityManager->flush();

        return new Response('Saved new book with id ' . $book->getId());
    }
}
