<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Redirect;
use Sentinel;
use Session;
use App\Product;
use App\ViewProduct;
use App\ViewService;
use App\ProductModule;
use App\Status;
use App\Contact;
use App\SendMail;

class FrontEndController extends Controller
{
    public function __construct()
    {
        $this->compact = ['active'];

        //Catalogs
        $this->catalog_country_id = DB::table('countries')->pluck('name', 'id');
        $this->catalog_state_id = DB::table('states')->pluck('name', 'id');
        $this->catalog_city_id = DB::table('cities')->pluck('name', 'id');
    }

    /*
     * Website
     */
    public function index(){
    	$active = 'index';

    	return view('index', compact($this->compact));
    }

    public function getContact(){
        $active = 'contact';

        return view('website.contact', compact($this->compact));
    }

    public function postContact(Request $request){
        $response_data = self::validateRecaptcha($request->{"g-recaptcha-response"});

        if( $response_data ) {
            $item = Contact::create($request->all());

            if($item){
                // Send mails.
                SendMail::createMailContact($request);
                SendMail::createMailContactAdmin($request);

                $resp = "
                    <p class='h2'>Muchas gracias por contactarnos.</p><br>
                    <p class='h3'>Pronto uno de nuestros ejecutivos se pondrá en contacto contigo.</p><br>
                ";

                Session::flash("thanks_ready",true);
                Session::put("response",$resp);

                return Redirect::to("thanks")->with($this->compact);
            } else {
                return Redirect::back()->with("error","Ocurrió un error, por favor intentalo nuevamente.");
            }
        } else {
            return Redirect::back()->with("error","Ocurrió un error, por favor intentalo nuevamente.");
        }
    }

    public function thanks($which) {
        $active = 'thanks';
        $response = Session::get("response");
        $view_title = "Gracias";

        if( $which=="contacto" )
            $view_title = "Gracias por contactarnos";

        #debug
        // $resp = "
        //     <p class='h2'>Muchas gracias por contactarnos.</p><br>
        //     <p class='h3'>Pronto uno de nuestros ejecutivos se pondrá en contacto contigo.</p><br>
        // ";
        // Session::put("response",$resp);
        // Session::flash("thanks_ready",true);

        if( Session::get("thanks_ready") )
            return view("thanks", compact($this->compact, "which", "view_title", "response"));
        else
            return Redirect::to("/")->with($this->compact);
    }

    public static function validateRecaptcha($g_r_response) {
        //web site secret key
        $secret = env("GRECAPTCHA_SECRET");
        //get verify response data
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $params = array( "secret"=>$secret, "response"=>$g_r_response );
        curl_setopt( $ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify" );
        curl_setopt( $ch, CURLOPT_POST, true );
        curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query($params) );
        $result = curl_exec( $ch );
        $response_data = json_decode( $result )->success;

        // Sólo para debug
        // $response_data = true;

        return $response_data;
    }
}
