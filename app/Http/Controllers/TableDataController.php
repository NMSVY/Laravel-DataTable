<?php

namespace App\Http\Controllers;

use App\Models\TableData;
use Illuminate\Http\Request;

class TableDataController extends Controller
{
    public function index()
    {
        $result['name']='';
        $result['email']='';
        $result['mobile']='';
        $result['id']=0;
        $result['data']=TableData::all();
        return view('index',$result);
    }
    public function manage_list(Request $request, $id='')
    {
        if($id>0)
        {

            $arr=TableData::where(['id'=>$id])->get()->first();
            $result['name']=$arr->name;
            $result['email']=$arr->email;
            $result['mobile']=$arr->mobile;
            $result['id']=$arr->id;
        }
        else
        {
            $result['name']='';
            $result['email']='';
            $result['mobile']='';
            $result['id']=0;
        }
        $result['data']=TableData::all();
        return view('index',$result);
    }

    public function DeleteList(Request $request,$id)
    {
        //$model=Category::where('cat_id',$id)->get()->first();
        $model=TableData::find($id);
        $model->delete();
        $request->session()->flash('message','List Item Deleted');
        return redirect('/');
    }
    public function Status(Request $request,$status,$id)
    {

       // $model=Category::where('cat_id',$id)->get()->first();
       $model=TableData::find($id);
        $model->status=$status;
        $model->save();
        $request->session()->flash('message','Status updated');
        return redirect('/');
    }

    public function  save_list(Request $request)
    {
        if($request->post('id')>0)
        {
            $request->validate([
                'name'=>'required',
                'email'=>'required|email',
                'mobile'=>'required|numeric',
              ]);
            $model=TableData::where(['id'=>$request->post('id')])->get()->first();
            $msg="Detail Updated";
        }
        else
        {
            $request->validate([
                'name'=>'required',
                'email'=>'required|email',
                'mobile'=>'required|numeric|unique:table_data,mobile',
              ]);
            $model=new TableData();
            $msg="Detail inserted";
        }



        $model->name=$request->post('name');
        $model->email=$request->post('email');
        $model->mobile=$request->post('mobile');
        $model->save();
        $request->session()->flash('message',$msg);
        return redirect('/');
    }

}
