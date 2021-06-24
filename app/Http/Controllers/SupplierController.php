<?php

namespace App\Http\Controllers;
use App\AddSupplier;
use App\Requests;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;
use Symfony\Component\Console\Input\Input;
use File;


class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $requests = Requests::all();
        return view('dash.qualified_supplier', ['requests'=>$requests]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('dash.add_qualified_supplier');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {


        $sup = new Requests();    /*AddSupplier ki jaga modal ana hai*/
        $sup->name = request('name'); /*request name jo hai yeah view ka form ka hai*/
        $sup->company_name = request('company_name');
        $sup->email = request('email');
        $sup->phone = request('phone');
        $sup->quantity = request('quantity');
        $sup->desired_amount = request('desired_amount');
        $sup->status = request('status');


       if ($sup->save()) {
            return redirect('suppliers')->with('success', 'SUPPLIER RECORD SAVED SUCCESSFULLY...!' );
        }

        return back()->withInput();
    }




    /**
     * Display the specified resource.
     * @return Response
     */
    public function show()
    {
        $reqs = Requests::paginate(5);
        return view('dash.pending_qualified_suppliers', ['requests' => $reqs]);

    }

    public function showDashboard(){
        return view('supplier.supplier_dashboard');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param Requests $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $reqs = Requests::find($id);
        $requests = Requests::where('id','=',$reqs->id)->get();
        return view('dash.edit_qualified_supplier', ['requests'=>$requests]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Requests $reqs
     * @return Application|RedirectResponse|Redirector
     */
    public function update(Request $request,Requests $reqs)
    {
        $reqs->name       = $request->name;
        $reqs->company_name = $request->company_name;
        $reqs->email = $request->email;
        $reqs->quantity       = $request->quantity;
        $reqs->phone       = $request->phone;
        $reqs->reason = $request->reason;
        $reqs->status       = $request->status;


        if ($reqs->save()) {
            return redirect('suppliers')->with('success', 'Supplier RECORD SAVED SUCCESSFULLY...!' );
        }

        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Requests $reqs
     * @return Response
     */
    public function destroy($id)
    {
        $reqs = Requests::find($id);
        if ($reqs->delete())
        {
            return redirect('suppliers')->with('success', 'Supplier Record Has Been Deleted...!');
        }
    }

    public function changeStatus(Request $request){
        $reqs = Requests::find($request->id);
        $reqs->status = $request->status;
        $reqs->save();
        return response()->json(['success'=>'Status changed successfully']);
    }
    public function downloadFile($id){
        $dl=Requests::find($id);
        $download_path = ('public/upload/' . $dl->filename );
        return response()->download($download_path);
    }
}
