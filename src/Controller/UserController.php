<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

class UserController extends AbstractController
{
    #[Route('/register', name: 'app_user', methods: ['POST'])]
    public function index(Request $request, UserPasswordHasherInterface $hasher, EntityManagerInterface $manager): JsonResponse
    {
        $data = $request->getPayload();

        $user = new User();
        $user->setEmail($data->get('email'));
        $user->setName($data->get('name'));
        $user->setPassword($data->get('password'));

        $password = $hasher->hashPassword($user, $user->getPassword());

        $user->setPassword($password);

        $manager->persist($user);
        $manager->flush();


        return $this->json($user);
    }
}
