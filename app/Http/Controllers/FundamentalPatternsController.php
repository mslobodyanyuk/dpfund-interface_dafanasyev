<?php

namespace App\Http\Controllers;

use App\DesignPatterns\Fundamental\InterfacePattern\Classes\InterfacePattern;

class FundamentalPatternsController extends Controller
{
    public function InterfacePattern()
	{
		$description = InterfacePattern::getDescription();

		return view('dump', compact('description'));
	}
}
