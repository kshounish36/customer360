<?php

namespace App\Controller;

use App\Entity\CustomerVersions;
use App\Repository\CustomerVersionsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ApiController extends AbstractController
{
    public function __construct()
    {
//        $tokenVal = md5(1234);
//
//        if($tokenVal === $this->getBearerToken())
//        {
//            return TRUE;
//        }
//        else
//        {
//            header("HTTP/1.1 401 Unauthorized");
//            exit;
//        }
    }

    /**
     * @Route("/api", name="api")
     */
    public function index(CustomerVersionsRepository $customerVersionsRepository): Response
    {
        $post = $customerVersionsRepository->findAll();
        dump($this->getBearerToken()); die;

        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/PostController.php',
        ]);
    }

    public function getBearerToken()
    {
        $header     = apache_request_headers();
        $authHeader = '';
        if (isset($header['Authorization']))
        {
            $authHeader = trim($header["Authorization"]);
        }

        // HEADER: Get the access token from the header
        if (!empty($authHeader))
        {
            if (preg_match('/Bearer\s(\S+)/', $authHeader, $matches))
            {
                return $matches[1];
            }
        }
        return null;
    }
}
