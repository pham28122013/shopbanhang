<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Show the profile for the given admin.
     *
     * @return View
     */
    public function index()
    {
        return view('admin.dashboards.index');
    }

    /**
     * Show the list highlightlist.
     *
     * @return View
     */
    public function highlightlist()
    {
        return view('admin.dashboards.product-highlights.list');
    }

     /**
     *  Show the create highlightlist.
     *
     * @return View
     */
    public function highlightadd()
    {
        return view('admin.dashboards.product-highlights.add');
    }

    /**
     *  Show the store highlightstore.
     *
     * @return View
     */
    public function highlightstore(Request $request)
    {
        $product_highlights = new product_highlights();
        $product_highlights->txtName = $request->txtName;
        $product_highlights->txtPrice = $request->txtPrice;
        $product_highlights->txtSale = $request->txtSale;
        $product_highlights->image = $request->image;
        $product_highlights->save();
        return redirect()->route('admin.dashboards.product-highlights.list');
    }

     /**
     *  Show the edit highlightlist.
     *
     * @return View
     */
    public function highlightedit($id)
    {   
        $product_highlights = product_highlights::find($id);
        return view('admin.dashboards.product-highlights.edit');
    }

    /**
     *  Show the update highlightstore.
     *
     * @return View
     */
    public function highlightupdate(Request $request, $id)
    {
        $product_highlights = product_highlights::find($id);
        $product_highlights->txtName = $request->txtName;
        $product_highlights->txtPrice = $request->txtPrice;
        $product_highlights->txtSale = $request->txtSale;
        $product_highlights->save();
        return redirect()->route('admin.dashboards.product-highlights.list');
    }

     /**
     *  Delete highlight.
     *
     * @return View
     */
    public function highlightdelete($id)
    {   
        $product_highlights = product_highlights::find($id);
        $product_highlights->delete();
        return redirect()->route('admin.dashboards.product-highlights.list');
    }
}
