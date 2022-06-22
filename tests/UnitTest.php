<?php

// class SampleTest extends \PHPUnit_Framework_TestCase
class SampleTest extends \PHPUnit\Framework\TestCase
{
    protected $user;

    public function setUp()
    {
        $this->user= new \App\Models\User;
    }

    /**
     * @test
     */
    public function that_we_can_get_the_first_name()
    {

        $this->user->setFirstName('kamal');

        $this->assertEquals($this->user->getFirstName(), 'kamal');
    }

    /**
     * @test
     */
    public function that_we_can_get_the_last_name()
    {

        $this->user->setLastName('kafi');

        $this->assertEquals($this->user->getLastName(), 'kafi');
    }

    /**
     * @test
     */
    public function that_we_can_get_the_full_name()
    {

        $this->user->setFirstName('kamal');
        $this->user->setLastName('kafi');

        $this->assertEquals($this->user->getFullName(), 'kamal kafi');
    }
    /**
     * @test
     */
    public function first_name_and_last_name_are_trimed()
    {

        $this->user->setFirstName(' kamal   ');
        $this->user->setLastName('    kafi ');

        $this->assertEquals($this->user->getFirstName(), 'kamal');
        $this->assertEquals($this->user->getLastName(), 'kafi');
    }

    /**
     * @test
     */
    public function email_adress_can_be_set()
    {

        $email = 'kamalkafi12@gmail.com';

        $this->user->setEmail($email);

        $this->assertEquals($this->user->getEmail(), $email);
    }

    /**
     * @test
     */
    public function email_variables_contains_correct_values()
    {

        $this->user->setFirstName('kamal');
        $this->user->setLastName('kafi');
        $this->user->setEmail('kamalkafi12@gmail.com');

        $emailVariables = $this->user->getEmailVariables();


        $this->assertArrayHasKey('full_name', $emailVariables);
        $this->assertArrayHasKey('Email', $emailVariables);
    }
}
