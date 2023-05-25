<?php

namespace App\Controller;


use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController
{

    #[Route('/product', name: 'app_product')]
    public function index(Request $request, ManagerRegistry $doctirine)
    {
        $entityManager = $doctirine->getManager();
        $products = [];
        $products = $doctirine->getRepository(Product::class)->findAll();
        return $this->render('product/index.html.twig', ['products' => $products]);
    }
    /**
     * @Route("/product/{id}", name="product_show")
     */
    public function show($id, ManagerRegistry $doctirine)
    {
        $entityManager = $doctirine->getManager();
        $product = $doctirine->getRepository(Product::class)->find($id);
        return $this->render(
            'product/show.html.twig',
            array('article' => $product)
        );
    }
}
