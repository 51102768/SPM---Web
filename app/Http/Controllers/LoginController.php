<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Extend\LegacyLoginAdapter;
use App\Extend\Legacy;
use App\Extend\FacebookLoginAdapter;
use App\Extend\Facebook;

use Auth;
use Socialize;

class LoginController extends Controller {

	public function loginLegacy(Request $request){
		$legacyLogin = new LegacyLoginAdapter(new Legacy());

		if($legacyLogin->validate($request->input('email'),$request->input('password'))){
			$legacyLogin->login($request->input('email'),$request->input('password'));
			return redirect()->back()->with('message','Chúc mừng bạn đã đăng nhập thành công');
		}
		else{
			return redirect()->back()->with('message','Email hoặc mật khẩu sai!')->with('loginfailed',true);
		}
	}

	public function signout(){
        Auth::logout();
        return redirect('/')->with('message','Bạn đã đăng xuất thành công');
    }

    public function loginFacebook(){
    	return Socialize::with('facebook')->redirect();
    }

    public function loginFacebookCallback(){
    	try {
            $user = Socialize::with('facebook')->user();
        } catch (Exception $e) {
            return redirect('auth/facebook');
        }

        $facebookLogin = new FacebookLoginAdapter(new Facebook());
        $authUser = $facebookLogin->findOrCreate($user);
        $facebookLogin->login($authUser->email);

        return redirect()->to("/")->with("message",'Chúc mừng bạn đã đăng nhập thành công');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}




}
