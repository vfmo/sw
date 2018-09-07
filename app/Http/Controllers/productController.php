<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\catalogs   as catalogs;
use App\orders   as orders;


class productController extends Controller
{

    
    public function productMenu() {
        $catalog = catalogs::get()->toArray();
        return view('pages.productList', [ 'data' => $catalog ] );       
    }


    public function productForm() {
        return view('pages.productForm', [ 'data' => '' ] );       
    }

    public function productEditForm( Request $request, $id ) {
        $data = catalogs::where("id", $id)->first()->toArray();
        return view('pages.productForm', [ 'data' => $data ] );       
    }
    public function productViewForm( Request $request, $id ) {
        $data = catalogs::where("id", $id)->first()->toArray();
        return view('pages.productViewForm', [ 'data' => $data ] );       
    }

    public function addProduct( Request $request ) {
        $id = $request->id;
        if ( empty( $id ) ) {
            catalogs::create($request->all());
        } else {
            catalogs::where("id", $id)->update( $request->all() );
        }
        echo json_encode(array("id"=>"product_menu"));
    }

    public function deleteProduct( Request $request ) {
        catalogs::where('id', $request->get("id") )->delete();
    }

    public function orderMenu(Request $request) {
        $orders = orders::get()->toArray();
        return view('pages.orderList', [ 'data' => $orders ] );       
    }

    public function orderForm(Request $request) {
        $catalogs = catalogs::pluck('product_name','id');
        return view('pages.orderForm', [ 'catalogs' => $catalogs ] );       
    }


    public function addOrder( Request $request ) {

        $id = $request->id;
        if ( empty( $id ) ) {
            $res = orders::create($request->except('_token','country'));
        } else {
            $res = orders::where("id", $id)->update( $request->except('_token','country') );
        }
        echo json_encode(array("id"=>"product_order" ));
    }
                    
    public function orderViewDetail( Request $request, $id ) {
        $order = orders::where("id", $id)->with("catalogs")->first()->toArray();

        return view('pages.orderViewDetail', [ 'data' => $order ] );       
        
    }

    public function deleteOrder( Request $request ) {
        orders::where('id', $request->get("id") )->delete();
    }

}
