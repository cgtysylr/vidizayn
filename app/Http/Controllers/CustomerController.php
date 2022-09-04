<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CustomerService;

class CustomerController extends Controller
{
    private $service;

    public function __construct() {
        $this->service = new CustomerService();
    }

    function index(){
        $customers = $this->service->list();

        return view('customers.index',compact('customers'));
    }
}
