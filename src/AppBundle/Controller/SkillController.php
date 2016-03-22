<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Skill;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class SkillController extends Controller
{
    /**
     * @Route("/skill/", name="user_skill")
     */
    public function indexAction(Request $request)
    {
        return $this->render('userspace/index.html.twig', array('user' => $this->getUser()));
    }


    /**
     * @Route("/skill/add", name="user_skill_add")
     */
    public function addAction(Request $request)
    {
        $skill = new Skill();

        $em = $this->getDoctrine()->getManager();
        $skill->setUser($this->getUser());
        $form = $this->createForm(new Skill(), $skill);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em->persist($skill);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Competence cree.');

            return $this->redirect($this->generateUrl('skill'));
        }

        return $this->render('add.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/skill/edit/{id}", name="user_skill_edit")
     */
    public function editAction(Request $request, $id)
    {
        $skill = new Skill();

        $em = $this->getDoctrine()->getManager();
        $form = $this->editForm($skill);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em->persist($skill);
            $em->flush();

            $request->getSession()->getFlashBag()->edit('notice', 'Competence enregistree.');

            return $this->redirect($this->generateUrl('skill'));
        }

        return $this->render('edit.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/skill/delete/{id}", name="user_skill_delete")
     */
    public function deleteAction(Request $request, $id)
    {
        $skill = new Skill();
        $em = $this->getDoctrine()->getManager();
        $form = $this->deleteForm($skill);
        $em->delete($skill);
        $em->flush();
    }
}
