<?php

namespace App\Tests;

use App\Entity\Images;
use App\Entity\User;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class EntityTest extends KernelTestCase {

    public function getUserEntity () : User
    {
        return (new User())
        ->setEmail("johndoe@gmail.com")
        ->setPassword("P@assword1")
        ->setFirstname('john')
        ->setLastname('Doe')
        ->setVerified(false)
        ->setCreatedAt(new DateTimeImmutable())
        ->setToken('6+2565+56gvxrg6g52xt6b5gx');
        ;
    }
    public function assertHasErrorsUser (User $user, int $number = 0) {
        self::bootKernel();
        $error = self::getContainer()->get('validator')->validate($user);
        $this->assertCount($number, $error);

    }

    public function testUserEntity () {
        $user = $this->getUserEntity();
        $this->assertHasErrorsUser($user, 0);
    }

    public function testUserEntityWrongEmailType () {
        $user = $this->getUserEntity()->setEmail('email.fr');
        $this->assertHasErrorsUser($user, 1);
    }

    public function testUserEntityWrongPasswordType () {
        $user = $this->getUserEntity()->setPassword('password');
        $this->assertHasErrorsUser($user, 1);
    }


}