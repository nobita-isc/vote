<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\VoteResult;
use App\Idea;

class VoteController extends Controller
{
	public function getIndex()
	{
		$all_results = VoteResult::all();
		$ocs = 0;
		$pam = 0;
		$rc = 0;
		$clt = 0;
		$vt = 0;
		$clc = 0;
		$htp = 0;
		foreach($all_results as $result) {
			$ocs += $result['ocs'];
			$pam += $result['pam'];
			$rc += $result['rc'];
			$clt += $result['clt'];
			$vt += $result['vt'];
			$clc += $result['clc'];
			$htp += $result['htp'];
		}
		$ocs_name = Idea::where('code_name', 'ocs')->first()->name;
		$pam_name = Idea::where('code_name', 'pam')->first()->name;
		$rc_name = Idea::where('code_name', 'rc')->first()->name;
		$clt_name = Idea::where('code_name', 'clt')->first()->name;
		$vt_name = Idea::where('code_name', 'vt')->first()->name;
		$clc_name = Idea::where('code_name', 'clc')->first()->name;
		$htp_name = Idea::where('code_name', 'htp')->first()->name;
		$results = array(
				['name' => $ocs_name, 'score' => $ocs],
				['name' => $pam_name, 'score' => $pam],
				['name' => $rc_name, 'score' => $rc],
				['name' => $clt_name, 'score' => $clt],
				['name' => $vt_name, 'score' => $vt],
				['name' => $clc_name, 'score' => $clc],
				['name' => $htp_name, 'score' => $htp]
			);

		return view('leader', array('results' => $results));
	}

    public function postIndex(Request $request)
    {
        $this->validate($request, [
	        'name' => 'required',
	        'email' => 'required',

	        'ocs_1' => 'required',
	        'ocs_2' => 'required',
	        'ocs_3' => 'required',
	        'ocs_4' => 'required',

	        'pam_1' => 'required',
	        'pam_2' => 'required',
	        'pam_3' => 'required',
	        'pam_4' => 'required',
	        
	        'rc_1' => 'required',
	        'rc_2' => 'required',
	        'rc_3' => 'required',
	        'rc_4' => 'required',

	        'clt_1' => 'required',
	        'clt_2' => 'required',
	        'clt_3' => 'required',
	        'clt_4' => 'required',

	        'vt_1' => 'required',
	        'vt_2' => 'required',
	        'vt_3' => 'required',
	        'vt_4' => 'required',

	        'clc_1' => 'required',
	        'clc_2' => 'required',
	        'clc_3' => 'required',
	        'clc_4' => 'required',

	        'htp_1' => 'required',
	        'htp_2' => 'required',
	        'htp_3' => 'required',
	        'htp_4' => 'required',
	    ]);

	    $ocs = $request['ocs_1'] * 3 + $request['ocs_2'] * 2 + $request['ocs_3'] + $request['ocs_4'];
	    $pam = $request['pam_1'] * 3 + $request['pam_2'] * 2 + $request['pam_3'] + $request['pam_4'];
	    $rc = $request['rc_1'] * 3 + $request['rc_2'] * 2 + $request['rc_3'] + $request['rc_4'];
	    $clt = $request['clt_1'] * 3 + $request['clt_2'] * 2 + $request['clt_3'] + $request['clt_4'];
	    $vt = $request['vt_1'] * 3 + $request['vt_2'] * 2 + $request['vt_3'] + $request['vt_4'];
	    $clc = $request['clc_1'] * 3 + $request['clc_2'] * 2 + $request['clc_3'] + $request['clc_4'];
	    $htp = $request['htp_1'] * 3 + $request['htp_2'] * 2 + $request['htp_3'] + $request['htp_4'];

	    VoteResult::create([
	    	'name' => $request['name'],
	    	'email' => $request['email'],
	    	'ocs' => $ocs,
	    	'pam' => $pam,
	    	'rc' => $rc,
	    	'clt' => $clt,
	    	'vt' => $vt,
	    	'clc' => $clc,
	    	'htp' => $htp
	    ]);

	    // if validation OK
	    return view('vote', ['success' => 'Your vote has been accepted by server. Thank you for voting!!']);
    }
}
