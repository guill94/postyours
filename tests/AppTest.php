<?php

namespace App\Tests;

use App\Entity\Images;
use App\Entity\User;
use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class AppTest extends WebTestCase {

    /*public function test () {
        $this->assertEquals(2, 1+1);
    }*/

    public function testAccountControllerRedirect () {
        $client = static::createClient();
        $client->request('GET', '/compte');
        $this->assertResponseRedirects('/connexion');
    }

    public function testImageControllerRedirectForNewImage () {
        $client = static::createClient();
        $client->request('GET', '/nouvelle/image');
        $this->assertResponseRedirects('/connexion');
    }

    public function testLoginControllerWrongCredentials () {
        $client = static::createClient();
        $crawler = $client->request('GET', '/connexion');
        $form = $crawler->selectButton('Se connecter')->form([
            'email' =>'guillaume.burgnies@hotmail.fr',
            'password' => '123',
        ]);
        $client->submit($form);
        $this->assertResponseRedirects('/connexion');
    }

    public function testLoginControllerGoodCredentials () {
        $client = static::createClient();
        $crawler = $client->request('GET', '/connexion');
        $form = $crawler->selectButton('Se connecter')->form([
            'email' =>'guillaume.burgnies@hotmail.fr',
            'password' => '123456',
        ]);
        $client->submit($form);
        $this->assertResponseRedirects('/compte');
    }

    public function testRegisterController () {
        $client = static::createClient();
        $crawler = $client->request('GET', '/inscription');
        $form = $crawler->selectButton('S\'inscrire')->form([
            'register[firstname]' =>'guillaume',
            'register[lastname]' => 'Burgnies',
            'register[email]' => 'guillaumeb@orange.fr',
            'register[password]' => '123456',
            'register[password][second]' => '123456',
        ]);
        $client->submit($form);
        //$this->assertResponseRedirects('/inscription');
        $this->assertSelectorExists(".invalid-feedback");
    }



    
}