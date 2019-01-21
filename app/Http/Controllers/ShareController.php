<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\ShareController as BaseController;
use Illuminate\Support\Facades\DB;
use App\Share;

class ShareController extends Controller
{
    public $restful = true;
     
    public function index()
    {
         $shares = Share::paginate(10);

        return view('shares.blank', compact('shares'));
    }


    public function create()
    {
        return view('shares.create');
    }
    public function store(Request $request)
    {
     {
      $request->validate
      ([
        'share_name'=>'required',
        'share_price'=> 'required|integer',
        'share_qty' => 'required|integer'
      ]);
      $share = new Share
      ([ 
        'share_name' => $request->get('share_name'),
        'share_price'=> $request->get('share_price'),
        'share_qty'=> $request->get('share_qty')
      ]);
      $share->save();
      return redirect('/shares')->with('success', 'Stock has been added');
     }
    }

    public function edit($id)
    {
        $share = Share::find($id);

        return view('shares.edit', compact('share'));
    }
 

    public function destroy($id)
    {
        $share = Share::find($id);
        $share->delete();

     return redirect('/shares')->with('success', 'Stock has been deleted Successfully');
    }


    public function update(Request $request, $id)
    {
        $request->validate([
        'share_name'=>'required',
        'share_price'=> 'required|integer',
        'share_qty' => 'required|integer'
      ]);

      $share = Share::find($id);
      $share->share_name = $request->get('share_name');
      $share->share_price = $request->get('share_price');
      $share->share_qty = $request->get('share_qty');
      $share->save();

      return redirect('/shares')->with('success', 'Stock has been updated');
    }

    /*public function del($id)
    {
        $share = Share::find($id);
        $share->delete();

     return redirect('/shares')->with('success', 'Stock has been deleted Successfully');
    }
    */
}
