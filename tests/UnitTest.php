<?php

// class SampleTest extends \PHPUnit_Framework_TestCase
class SampleTest extends \PHPUnit\Framework\TestCase
{
    public function testThatWeCanGetTheFirstName()
    {
        $user = new \App\Models\User;

        $user->setFirstName('kamal');

        $this->assertEquals($user->getFirstName(), 'kamal');
    }

    public function testThatWeCanGetTheLastName()
    {
        $user = new \App\Models\User;

        $user->setLastName('kafi');

        $this->assertEquals($user->getLastName(), 'kafi');
    }

    public function testThatWeCanGetTheFullName()
    {
        $user = new \App\Models\User;

        $user->setFirstName('kamal');
        $user->setLastName('kafi');

        $this->assertEquals($user->getFullName(), 'kamal kafi');
    }
    public function testFirstNameAndLastNameAreTrimed()
    {
        $user = new \App\Models\User;

        $user->setFirstName(' kamal   ');
        $user->setLastName('    kafi ');

        $this->assertEquals($user->getFirstName(), 'kamal');
        $this->assertEquals($user->getLastName(), 'kafi');
    }
    
    
    public function testEmailAdressCanBeSet()
    {
        $user = new \App\Models\User;

        $email = 'kamalkafi12@gmail.com';

        $user->setEmail($email);

        $this->assertEquals($user->getEmail(), $email);
    }

    public function testEmailVariablesContainsCorrectValues()
    {
        $user = new \App\Models\User;
        
        $user->setFirstName('kamal');
        $user->setLastName('kafi');
        $user->setEmail('kamalkafi12@gmail.com');

        $emailVariables = $user->getEmailVariables();


        $this->assertArrayHasKey('full_name',$emailVariables);
        $this->assertArrayHasKey('Email',$emailVariables);



    }
}
