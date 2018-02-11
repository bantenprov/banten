<?php namespace Bantenprov\Banten\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\Banten\Facades\Banten;
use Bantenprov\Banten\Models\BantenModel;

/**
 * The BantenController class.
 *
 * @package Bantenprov\Banten
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class BantenController extends Controller
{
    public function demo()
    {
        return Banten::welcome();
    }
}
