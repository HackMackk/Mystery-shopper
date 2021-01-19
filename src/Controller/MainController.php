<?php

namespace App\Controller;

use App\Entity\Buyer;
use App\Form\BuyerType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index(Request $request)
    {
        $buyer = new Buyer();

        $form = $this->createForm(BuyerType::class);   
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $buyer = $form->getData();

            $files = $request->files->get('buyer');
            foreach($files as $img => $value){
                $file = $form->get($img)->getData();
                if($file != null){
                    $fileName = uniqid().'.'.$file->guessExtension();
                    $file->move($this->getParameter('image_directory'), $fileName);
                    $buyer->$img = $fileName;
                }               
            }              

            $buyer->setCreateAtValue();
            $em = $this->getDoctrine()->getManager();
            $em->persist($buyer);
            $em->flush();

            $this->addFlash('success', 'Заявка отправлена');
            return $this->redirectToRoute('main');
        }     

        return $this->render('base.html.twig', [
            'controller_name' => 'MainController',
            'form' => $form->createView()
        ]);
    }
}
