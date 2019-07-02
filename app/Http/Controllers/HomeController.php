<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ad;

use App\Ville;

use Auth;

use File;

use Counter;

class HomeController extends Controller
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


	public function index () {

    	$data = $this->data();

    	 return view('content.index')->with($data);
	}

    public function category (Request $request) {

    	if($request->isMethod('post')) {

    		$ads = Ad::where('region', $request->region)->orderBy('created_at', 'desc')->paginate(9);

    	}else if (($term = $request->get('term'))) {

          $ads = Ad::where('region', 'like', '%' . $term . '%')->orderBy("price", "desc")->orderBy('created_at', 'desc')->paginate(9);

          if ($ads->isEmpty()) {

            $ads = Ad::where('city', 'like', '%' . $term . '%')->orderBy("price", "desc")->orderBy('created_at', 'desc')->paginate(9);

            if ($ads->isEmpty()) {

              $ads = Ad::where('price','like', '%' . $term . '%')->orderBy("price", "desc")->orderBy('created_at', 'desc')->paginate(9);

              if ($ads->isEmpty()) {

	              $ads = Ad::where('title','like', '%' . $term . '%')->orderBy("price", "desc")->orderBy('created_at', 'desc')->paginate(9);

	            }

            }

          }

    	}else {

    		$ads = Ad::orderBy('created_at', 'desc')->paginate(9);
    	}

    	$data = $this->data();

    	$nameCategory = "Toutes les catégories";

    	 return view('content.category', compact('ads','nameCategory'))->with($data);
    }

    public function aLouer () {

    	$ads = Ad::where('transaction',0)->orderBy('created_at', 'desc')->paginate(9);

    	$data = $this->data();

    	$nameCategory = "À louer";

    	 return view('content.category', compact('ads','nameCategory'))->with($data);
    }

    public function aVendre () {

    	$ads = Ad::where('transaction',1)->orderBy('created_at', 'desc')->paginate(9);

    	$data = $this->data();

    	$nameCategory = "À vendre";

    	return view('content.category', compact('ads','nameCategory'))->with($data);
    }


    public function recherche () {

    	$ads = Ad::where('transaction',2)->orderBy('created_at', 'desc')->paginate(9);

    	$data = $this->data();

    	$nameCategory = "Recherche quelqu'un";

    	return view('content.category', compact('ads','nameCategory'))->with($data);
    }

    public function single($id, $title) {

    	$ad = Ad::where('id',$id)->first();

    	$data = $this->data();

    	$nameCategory = $title;

    	if ($ad->transaction == 0) {

    		$transaction = 'À louer';
    		$href ="/a-louer";

    	}else if ($ad->transaction == 1) {

    		$transaction = 'À vendre';
    		$href ="/a-vendre";

    	}else {
    		$href ="rechercher-quelqu-un";
    		$transaction = "Recherche quelqu'un";
    	}

    	Counter::showAndCount('page'.$id);

    	return view('content.single',compact('ad','nameCategory','transaction','href'))->with($data);
    }

    public function ville($ville) {

    	$ads = Ad::where('region',$ville)->paginate(9);

    	$data = $this->data();

    	$nameCategory = $ville;

    	return view('content.category', compact('ads','nameCategory'))->with($data);
    }

    public function account () {

    	$data = $this->data();

    	$ads = Ad::where('userId',auth()->user()->id)->orderBy('created_at', 'desc')->get();

    	return view('content.account',compact('ads'))->with($data);
    }

    public function deleteAd ($id) {

    	$ad = Ad::find($id);

    	File::deleteDirectory(public_path('ads/'.$ad->folder));

    	if($ad->delete()) {

    		session()->flash('success','Une annonce a été supprimée avec succès');

    	}else {

    		session()->flash('error','Erreur interne. Merci de réessayer plus tard !');
    	}

    	return back();
    }

	public function new () {

		$data = $this->data();

		return view('content.new')->with($data);
	}

	public function getCity ($name) {

		return Ville::where('governorate',$name)->get();
	}


	public function addNewAd(Request $request) {

		if($request->isMethod('post')) {

			$newAd = new Ad;

			$newAd->userId = Auth::user()->id;
			$newAd->transaction = $request->transaction;
			$newAd->title = $request->titre;
			$newAd->category = $request->categorie;
			$newAd->region = $request->emplacement;
			$newAd->city = $request->ville;
			$newAd->area = $request->surface;
			$newAd->numberLiveRoom = $request->nbr_salle;
			$newAd->numberBedRoom = $request->nbr_chambre;
			$newAd->numberBathRoom = $request->nbr_salle_bain;
			$newAd->address = $request->adresse;
			$newAd->price = $request->prix;
			$newAd->typeDate = $request->typeDate;
			$newAd->pubDescription = $request->description;
			$newAd->phone = $request->phone;
			$newAd->meuble = $request->meuble;
			$newAd->internet = $request->internet;
			$newAd->gas_a_ville = $request->gas_a_ville;
			$newAd->climatisation = $request->climatisation;
			$newAd->balcon = $request->balcon;
			$newAd->cable_TV = $request->cable_TV;
			$newAd->nettoyage_apres_la_sortie = $request->nettoyage_apres_la_sortie;
			$newAd->cafetiere = $request->cafetiere;
			$newAd->ordinateur = $request->ordinateur;
			$newAd->presse_agrumes = $request->presse_agrumes;
			$newAd->ascenseur = $request->ascenseur;
			$newAd->four_micro_onde = $request->four_micro_onde;
			$newAd->four = $request->four;
			$newAd->radio = $request->radio;
			$newAd->terrasse_sur_le_toit = $request->terrasse_sur_le_toit;
			$newAd->autorisation_de_fumer = $request->autorisation_de_fumer;
			$newAd->terrasse = $request->terrasse;
			$newAd->grille_pain = $request->grille_pain;
			$newAd->parking = $request->parking;
			$newAd->offre_etudiants = $request->offre_etudiants;
			$newAd->offre_etrangaires = $request->offre_etrangaires;
			$newAd->offre_famille = $request->offre_famille;
			$newAd->offre_hommes = $request->offre_hommes;
			$newAd->offre_femmes = $request->offre_femmes;
			$newAd->offre_couples = $request->offre_couples;
			$newAd->offre_pour_tous = $request->offre_pour_tous;

			$folderName = date('Y-m-d-H-i-s')."-".Auth::user()->id;

			$newAd->folder = $folderName;

			$path = public_path().'/ads/' . $folderName;

			File::makeDirectory($path,0777, true, true);

			if($request->hasFile('files'))
			{
				$files = $request->file('files');

				$files_len = count($files);

				for ($i=0; $i < $files_len ; $i++) { 

					$image_ext = $files[$i]->getClientOriginalExtension();

					$new_image_name = rand(111111,999999).".".$image_ext;

					$files[$i]->move($path, $new_image_name);

					$j=$i+1;

					$img = 'picture0'.$j;

					$newAd->$img = $folderName."/".$new_image_name;
				}
			}else {

				$newAd->picture01 = 'house.jpg';
			}

			if($newAd->save()) {

	    		session()->flash('success','Une annonce a été publiée avec succès');

	    	}else {

	    		session()->flash('error','Erreur interne. Merci de réessayer plus tard !');
	    	}

			return redirect('compte/annonces');
		}

		$data = $this->data();

	    return view('content.new-step1')->with($data);

	}

	public function getAdsOrder ($etat) {

		if($etat == "plus-recent-annonces") {

			$ads = Ad::orderBy('created_at', 'desc')->paginate(9);

			$nameCategory = "Le plus récent";

		}else if($etat == "prix-le-plus-bas") {

			$ads = Ad::orderBy('price')->paginate(9);

			$nameCategory = "Prix le plus bas";

		}else if ($etat == "prix-le-plus-eleve") {

			$ads = Ad::orderBy('price', 'desc')->paginate(9);

			$nameCategory = "Prix le plus élevé";
		} 
		else {

    		$ads = Ad::orderBy('created_at', 'desc')->paginate(9);

    		$nameCategory = "Toutes les catégories";
    	}

    	$data = $this->data();

    	return view('content.category', compact('ads','nameCategory'))->with($data);
	}

	public function myAds () {

    	$data = $this->data();

    	$ads = Ad::where('userId',auth()->user()->id)->orderBy('created_at', 'desc')->get();

    	return view('content.ads',compact('ads'))->with($data);
	}

	public function modifymyAds ($id) {

		$data = $this->data();

		$ad = Ad::find($id);

		return view('content.modify',compact('ad'))->with($data);
	}

	public function help() {

		$data = $this->data();

		return view('content.aide')->with($data);
	}

	public function conditions () {

		$data = $this->data();

		return view('content.conditions')->with($data);
	}

	public function contact () {

		$data = $this->data();

		return view('content.contact-us')->with($data);
	}

	public function who () {

		$data = $this->data();

		return view('content.who-we-are')->with($data);
	}
}
