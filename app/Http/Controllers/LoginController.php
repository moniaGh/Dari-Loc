<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Auth;

use Hash;

use Mail;

use App\Ad;

use App\Reset;

class LoginController extends Controller
{

    public function data () {

        $ariana = Ad::where('region','Ariana')->count();
        $beja = Ad::where('region','Béja')->count();
        $ben_arous = Ad::where('region','Ben Arous')->count();
        $bizerte = Ad::where('region','Bizerte')->count();
        $gabes = Ad::where('region','Gabès')->count();
        $gafsa = Ad::where('region','Gafsa')->count();
        $jendouba = Ad::where('region','Jendouba')->count();
        $kairouan = Ad::where('region','Kairouan')->count();
        $kasserine = Ad::where('region','Kasserine')->count();
        $kbili = Ad::where('region','Kébili')->count();
        $manouba = Ad::where('region','La Manouba')->count();
        $kef = Ad::where('region','Le Kef')->count();
        $mahdia = Ad::where('region','Mahdia')->count();
        $mednine = Ad::where('region','Médenine')->count();
        $monastir = Ad::where('region','Monastir')->count();
        $nabeul = Ad::where('region','Nabeul')->count();
        $sfax = Ad::where('region','Sfax')->count();
        $sidi_bouzid = Ad::where('region','Sidi Bouzid')->count();
        $siliana = Ad::where('region','Siliana')->count();
        $sousse = Ad::where('region','Sousse')->count();
        $tataouine = Ad::where('region','Tataouine')->count();
        $tozeur = Ad::where('region','Tozeur')->count();
        $tunis = Ad::where('region','Tunis')->count();
        $zaghouan = Ad::where('region','Zaghouan')->count();


        $a_vendre = Ad::where('transaction',1)->count();
        $a_louer = Ad::where('transaction', 0)->count();
        $recherche = Ad::where('transaction', 2)->count();

        $data = array('ariana'=>$ariana, 'beja'=>$beja, 'ben_arous'=>$ben_arous, 'bizerte'=>$bizerte, 'gabes'=>$gabes, 'gafsa'=>$gafsa, 'jendouba'=>$jendouba, 'kairouan'=>$kairouan, 'kasserine'=>$kasserine, 'kbili'=>$kbili, 'manouba'=>$manouba, 'kef'=>$kef, 'mahdia'=>$mahdia, 'mednine'=>$mednine, 'monastir'=>$monastir, 'nabeul'=>$nabeul, 'sfax'=>$sfax, 'sidi_bouzid'=>$sidi_bouzid, 'siliana'=>$siliana, 'sousse'=>$sousse, 'tataouine'=>$tataouine, 'tozeur'=>$tozeur, 'tunis'=>$tunis, 'zaghouan'=>$zaghouan,'a_louer'=>$a_louer,'a_vendre'=>$a_vendre,'recherche'=>$recherche);

        return $data;
    }
    public function register (Request $request) {

        $old_email = User::where('email', $request->email)->first();

    	$old_phone = User::where('phone', $request->phone)->first();
        $user = $request->all();
    	if($old_email) {

    		 session()->flash('error','Cet E-mail existe déjà !');

    	}else if($old_phone) {

             session()->flash('error','Ce téléphone existe déjà !');

        }else if($request->password != $request->confirmPassword) {

            session()->flash('warning','Les deux mots de passe ne sont pas compatibles');

        }
        else {

            $token = str_random(99);

	    	User::create([
	            'type' => $request->type,
	            'name' => $request->name,
                'phone' => $request->phone,
	            'email' => $request->email,
	            'region' => $request->region,
                'password' => bcrypt($request->password),
	            'activate' => 0,
                'confirmation_token' => $token,
	        ]);
	        session()->flash('success','Votre compte a été bien crée . Merci de vérifier votre mail pour activer votre compte .');

            Mail::send('emails.activateAccount', ['user'=>$user, 'token'=>$token], function ($m) use ($request) {

                $m->from('adam.alaouiti@gmail.com', 'DARI-LOC');

                $m->to($request->email)->subject('DARI-LOC | Activer votre compte');

            });



    	}

		return redirect()->back();
    }

    public function login (Request $request) {

    	if(Auth::attempt(['email'=>$request->input('email'),'password'=>$request->input('password')])){

	   	}else{
			session()->flash('error','Votre E-mail où Mot de passe est invalide');
		}
		return back();
    }

    public function logout () {
    	Auth::logout();
    	return redirect('/');
    }

    public function changeInfo (Request $request) {

        $user = User::find(auth()->user()->id);

        $user->name = $request->name;

        if($user->phone != $request->phone) {

            $user->phone = $request->phone;
        }

        if($user->email != $request->email) {

            $old_email_user = User::where('email', $request->email)->first();

            if($old_email_user) {

                session()->flash('error','Cet E-mail existe déjà !');

                return back();
            }

            $user->email = $request->email;

            Mail::send('emails.activateAccount', ['user'=>$user], function ($m) use ($request) {

                $m->from('adam.alaouiti@gmail.com', 'DARI-LOC');

                $m->to($request->email)->subject('DARI-LOC | Activer votre compte');

            });

            $user->activate = 0;
        }

        if($user->save()) {

            session()->flash('success','La modification a été effectuée avec succès.');

        }else {

            session()->flash('error','Erreur interne. Merci de réessayer plus tard !');
        }

        return back();
    }

    public function changePassword (Request $request) {

        if($request->nouveau_motpasse != $request->confirmer_motpasse) {

            session()->flash('warning','Les deux mots de passe ne sont pas compatibles');

        }elseif (! Hash::check($request->ancien_motpasse, auth()->user()->password)) {

            session()->flash('error','Ancien mot de passe est invalide !');

        }else {

            $user = User::find(auth()->user()->id);

            $password = Hash::make($request->nouveau_motpasse);

            $user->password = $password;

            if($user->save()) {

                session()->flash('success','La modification a été effectuée avec succès');

            }else {

                session()->flash('error','Erreur interne. Merci de réessayer plus tard !');
            }
        }

        return back();
    }

    public function reset (Request $request) {

        if($request->isMethod('post')) {

            $user = User::where('email',$request->email)->first();

            if($user) {

                if($user->activate == 0 ) {

                    session()->flash('error',"Votre compte n'est pas encore activé !");

                    return redirect('/confirmation-mail');

                }else {

                    $token_for_reset = str_random(99);

                    $reset = new Reset ;

                    $reset->token = $token_for_reset;

                    $reset->email = $request->email;

                    if($reset->save()) {

                        Mail::send('emails.resetMail', ['user'=>$user,'token_for_reset'=>$token_for_reset], function ($m) use ($request) {

                            $m->from('adam.alaouiti@gmail.com', 'DARI-LOC');

                            $m->to($request->email)->subject('DARI-LOC | Reinisialisation mot de passe');

                        });

                        session()->flash('success',"Merci de vérifier votre email pour réinitialiser votre mot de passe.");
                    }
                }
            }else {

                session()->flash('error','Adresse E-mail non valide !');
            }

            return redirect('/');
        }
    }

    public function confirmationMail (Request $request) {

        $user = User::where('email', $request->email)->first();

        if($user) {

            Mail::send('emails.activateAccount', ['token'=>$user->confirmation_token], function ($m) use ($request, $user) {

                $m->from('adam.alaouiti@gmail.com', 'DARI-LOC');

                $m->to($request->email)->subject('Activer votre compte');

            });

            session()->flash('success',"Mail d'activation a été envoyé !");

        }else {

            session()->flash('error','Erreur interne. Merci de réessayer plus tard !');
        }

        return back();
    }

    public function confirmationMailBlade (Request $request) {

        if($request->isMethod('post')) {

            $user = User::where('email', $request->email)->first();

            if($user) {

                Mail::send('emails.activateAccount', ['token'=>$user->confirmation_token], function ($m) use ($request) {

                    $m->from('adam.alaouiti@gmail.com', 'DARI-LOC');

                    $m->to($request->email)->subject('DARI-LOC | Activer votre compte');

                });

                session()->flash('success',"Mail d'activation a été envoyé !");

            }else {

                session()->flash('error',"Erreur interne. Merci de réessayer plus tard !");
            }
        }

        $data = $this->data();

        return  view('content.confirmation')->with($data);
    }

    public function activatePerMail (Request $request) {

        $user = User::where('email', $request->email)->first();

        if($user) {

            $user->activate = 1;

            if($user->save())  {

               session()->flash('success',"Votre compte a été bien activé !");

            }else {

                session()->flash('error',"Votre compte n'est pas encore activé !");
            }

        }else {

            session()->flash('error',"Votre compte n'est pas encore activé !");
        }

        return redirect('/');
    }

    public function resetLastStep (Request $request ,$token) {

        if($request->isMethod('post')) {

            if($request->password != $request->confPassword) {

                session()->flash('warning','Les deux mots de passe ne sont pas compatibles');

                return back();

            }else {

                $user_email = Reset::where('token',$token)->first();

                $user = User::where('email',$user_email->email)->first();

                $password = Hash::make($request->password);

                $user->password = $password;

                if($user->save()) {

                    session()->flash('success','Votre mot de passe a été réinitialisé avec succès. Vous pouvez connecter.');

                    return redirect('/');

                }else {

                    session()->flash('error','Erreur interne. Merci de réessayer plus tard !');

                    return back();
                }
            }
        }else {

            $request = Reset::where('token',$token)->first();

            if($request) {

                $data = $this->data();

                return view('content.reset',compact('token'))->with($data);

            }else {

                session()->flash('error','Votre demande a été réfusée !');

                return redirect('/');
            }
        }
    }

    public function confirmAccount ($token) {

        $user = User::where('confirmation_token',$token)->first();

        if($user) {

            $user->activate = 1;

            if($user->save()) {

                session()->flash('success','Votre compte a été bien activé.');
            }

        }else {

             session()->flash('error',"Erreur interne. Merci de réessayer plus tard !");
        }

        return redirect('/');
    }
}
