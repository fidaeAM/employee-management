<?php

namespace Tests\Unit;

use App\Models\Employee;
use Tests\TestCase;

class AdminTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }
/*

    public function test_it_store_admin_test(){

       $response =  $this->post('/admin/register',[


            'name'=>'huusus',
             'email'=>'huusus@gmail.com',
             'password'=>'huusus123456789',
             'password_confirmation'=>'huusus123456789'
        ]);

        $response->assertRedirect('/admin');
    }
    */

    public function test_login_user(){

        $response = $this->post('/admin',[

            'email'=>'fd@gmail.com',
            'password'=>'12345678'
        ]);

        $response->assertRedirect('/admin');
    }


    public function test_count_employee_numbers(){

         $this->assertCount(7,Employee::all());

     //  $this->assertTrue('true');
    }


    public function test_login_test_not_null_parameters(){


       // $this->withoutExceptionHandling();

        $response = $this->post('/admin',[

            'email'=>' ',
            'password'=>' '
        ]);

        $response->assertSessionHasErrors(['email','password']);
    }
}
