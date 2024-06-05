<?php

namespace App\Http\Controllers;

use App\Models\Ahtes;
use App\Notifications\AhtesNotification;
use Paystack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class PaymentController extends Controller
{
    
    public function ahteStore(Request $request){
        $request->validate([ 
            'fname'=>['nullable', 'string'],
            'lname'=>['nullable', 'string'],
            'email'=>['nullable', 'string'],
            'phone'=>['nullable', 'string'],
            'organization'=>['nullable', 'string'],
            'position'=>['nullable', 'string'],
            'language'=>['nullable', 'string'],
            'interpreter'=>['nullable', 'string'],
            'hotel'=>['nullable', 'string'],
            'visa'=>['nullable', 'string'],
            'source'=>['nullable', 'string'],
            'package'=>['nullable', 'string'],
            'exhibition'=>['nullable', 'string'],
            'pavilion'=>['nullable', 'string'],
        ]);
        
        $ahtes = new Ahtes;
        $ahtes->fname = $request->fname;
        $ahtes->lname = $request->lname;
        $ahtes->email = $request->email;
        $ahtes->phone = $request->phone;
        $ahtes->organization = $request->organization;
        $ahtes->position = $request->position;
        $ahtes->language = $request->language;
        $ahtes->interpreter = $request->interpreter;
        $ahtes->hotel = $request->hotel;
        $ahtes->visa = $request->visa;
        $ahtes->source = $request->source;
        $ahtes->package = $request->package;
        $ahtes->exhibition = $request->exhibition;
        $ahtes->pavilion = $request->pavilion;
        $ahtes->register_as = $request->register_as;
        // check if the user with this email already exists then retrun back with error
        // if not then create the user 
        if(Ahtes::where('email', $request->email)->exists()) {
            Alert::error('A registered user with this email already exists');
            return back();
        }
        
        if($ahtes->save()){
            $ahtes->notify(new AhtesNotification($ahtes));
        }
        Alert::success('Registration successful');
        return back();
        // return $this->initialize($request);   
    }

    private function initialize(Request $request){
        try {
            $totalPrice = 0;
            if ($request->filled('package')) {
                switch ($request->package) {
                    case 'gold':
                        $totalPrice += 5000000;
                        break;
                    case 'silver':
                        $totalPrice += 3000000;
                        break;
                    case 'pearl':
                        $totalPrice += 1500000;
                        break;
                    default:
                        // Handle default case if needed
                }
            }
    
            if ($request->filled('exhibition')) {
                switch ($request->exhibition) {
                    case '1. 12 X 2 Metres':
                        $totalPrice += 2500000;
                        break;
                    case '2. 9 X 2 Metres':
                        $totalPrice += 1760000;
                        break;
                    case '3. 6 X 2 Metres':
                        $totalPrice += 1375000;
                        break;
                    case '4. 3 X 2 Metres':
                        $totalPrice += 1045000;
                        break;
                    default:
                        // Handle default case if needed
                }
            }
    
            if ($request->filled('pavilion')) {
                switch ($request->pavilion) {
                    case 'Inside Back Cover':
                        $totalPrice += 2000000;
                        break;
                    case 'Inside Front Cover':
                        $totalPrice += 3120000;
                        break;
                    case 'Outside Back Cover':
                        $totalPrice += 5920000;
                        break;
                    default:
                        // Handle default case if needed
                }
            }
    
            $paymentData = [
                'email' => $request->input('email'),
                'first_name' => $request->input('fname'),
                'amount' => $totalPrice,
                'reference' => $request->input('reference'),
                'currency' => 'NGN',
                'customer' => [
                    'first_name' => $request->input('fname')
                ],
            ];
    
            return Paystack::getAuthorizationUrl($paymentData)->redirectNow();
    
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return back()->with('error', 'The paystack token has expired. Please refresh the page and try again.');
        }
    }
    


    public function handleGatewayCallback()
    {
        try {
            $paymentDetails = Paystack::getPaymentData();
            dd($paymentDetails);
            if ($paymentDetails['status'] === true) {
                $order = Ahtes::find($paymentDetails['data']['metadata']['order_id']);
                $order->status = '1';
                $order->save();
                    return redirect()->route('payment-invoice')->with('success', 'Payment successful');
            } else {
                return back()->with('error', 'Payment failed');
            }
        }catch(\Exception $e) {
            Log::error($e->getMessage());
            return back()->with('error ', 'The paystack token has expired. Please refresh the page and try again.');
        }    
    }


    public function checkout(){
        return view('frontend.order');
    }

}
