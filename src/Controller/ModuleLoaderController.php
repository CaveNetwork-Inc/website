<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ModuleLoaderController extends Controller
{

    /**
     * @Route("/api/module", name="module")
     */
    public function index(Request $request)
    {
        $module_name = $request->query->get('module_name');
        $module = $this->getDoctrine()->getRepository('App:Module')->findOneByName($module_name);
        $context = [
            'controller_name' => 'MainController',
            $module->getName() => $this->get($module->getClass())->runModule()
        ];
        return $this->render($module->getTemplate(), $context);
    }
}
