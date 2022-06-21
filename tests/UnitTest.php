<?php

// class SampleTest extends \PHPUnit_Framework_TestCase
class SampleTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function that_we_can_get_the_first_name()
    {
        $user = new \App\Models\User;

        $user->setFirstName('kamal');

        $this->assertEquals($user->getFirstName(), 'kamal');
    }

    /**
     * @test
     */
    public function that_we_can_get_the_last_name()
    {
        $user = new \App\Models\User;

        $user->setLastName('kafi');

        $this->assertEquals($user->getLastName(), 'kafi');
    }

    /**
     * @test
     */
    public function that_we_can_get_the_full_name()
    {
        $user = new \App\Models\User;

        $user->setFirstName('kamal');
        $user->setLastName('kafi');

        $this->assertEquals($user->getFullName(), 'kamal kafi');
    }
    /**
     * @test
     */
    public function first_name_and_last_name_are_trimed()
    {
        $user = new \App\Models\User;

        $user->setFirstName(' kamal   ');
        $user->setLastName('    kafi ');

        $this->assertEquals($user->getFirstName(), 'kamal');
        $this->assertEquals($user->getLastName(), 'kafi');
    }
    
    /**
     * @test
     */
    public function email_adress_can_be_set()
    {
        $user = new \App\Models\User;

        $email = 'kamalkafi12@gmail.com';

        $user->setEmail($email);

        $this->assertEquals($user->getEmail(), $email);
    }

    /**
     * @test
     */
    public function email_variables_contains_correct_values()
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
