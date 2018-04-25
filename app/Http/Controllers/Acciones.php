<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use DB;
use Hash;
use Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;
use App\Mail\verifyEmail;
use App\Mail\recoveryEmail;
use App\Http\Controllers\Config;
use DateTime;
use Auth;
use Session;
use App\Http\Controllers\Controller;

class Acciones extends Controller
{
    //


//proyecto final mobiles--------------------------
//login and logout
public function logout_admin()
   {
        Auth::guard('web')->logout();
        return redirect('/login_admin');
   }
//clientes
public function showRegistrationForm()
    {
    if(Auth::guard('web')->user())
    {//if there is admin logged in
    $availableAdmins ['availableAdmins'] = DB::table('clientes')->get();  
    return View::make('personas')->with($availableAdmins);
    }//if there is no admin logged in
    return redirect('/login_admin');   
    }
public function create(Request $request)
    {
DB::table('clientes')->insert(
    ['nombre' => $request->input('nombre'), 
    'apellidos' => $request->input('apellidos'),
    'empresa' => $request->input('empresa')]
);
return redirect('/personas');      
    } 
public function DeletePersona($id)
{
DB::table('clientes')->where('Cliente_id', '=', $id)->delete();
return redirect('/personas');   
}
public function UpdatePersona(Request $request)
{
DB::table('clientes')
            ->where('Cliente_id', $request->input('clienteId'))
            ->update(array('nombre' => $request->input('nombre'),
            'apellidos' => $request->input('apellidos'),
            'empresa' => $request->input('empresa')));
return redirect('/personas');
//return view::make('admin-auth.avatar_categories_edit')->with('categs', $idtest);      
}       

//proyectos
public function showRegistrationFormproyectos()
    {
    if(Auth::guard('web')->user())
    {//if there is admin logged in
    $availableCategories ['availableCategories'] = DB::table('clientes')->get();       
    $availableAdmins ['availableAdmins'] = DB::table('proyectos')->get();  
    return View::make('proyectos')->with($availableAdmins)->with($availableCategories);
    }//if there is no admin logged in
    return redirect('/login_admin');   
    }
public function proyectos_create(Request $request)
    {
DB::table('proyectos')->insert(
    ['nombre' => $request->input('nombre'), 
    'descripcion' => $request->input('descripcion'),
    'costo' => $request->input('costo'),
    'status' => $request->input('status'),
    'empresa' => $request->input('empresa')]
);
return redirect('/proyectos');      
    } 
public function UpdateProyecto(Request $request)
{
DB::table('proyectos')
            ->where('Proyecto_id', $request->input('proyectoId'))
            ->update(array('nombre' => $request->input('nombre'),
            'costo' => $request->input('costo'),
            'descripcion' => $request->input('descripcion'),
            'status' => $request->input('status'),
            'empresa' => $request->input('empresa')));
return redirect('/proyectos');
//return view::make('admin-auth.avatar_categories_edit')->with('categs', $idtest);      
}     
public function DeleteProyecto($id)
{
DB::table('proyectos')->where('Proyecto_id', '=', $id)->delete();
return redirect('/proyectos');   
}
//reportes
public function showReportes()
    {
                


if(Auth::guard('web')->user())
{//if there is admin logged in
    $toTalPRoyects ['toTalPRoyects'] = DB::table('proyectos')->count();  
    $toTalPRoyectsActivos ['toTalPRoyectsActivos'] = DB::table('proyectos')->where('status', 'activo')->count(); 
    $toTalPRoyectsFinalizados ['toTalPRoyectsFinalizados'] = DB::table('proyectos')->where('status', 'finalizado')->count(); 
    $toTalPRoyectsCancelados ['toTalPRoyectsCancelados'] = DB::table('proyectos')->where('status', 'cancelado')->count(); 
    $toTalPRoyectsPendientes ['toTalPRoyectsPendientes'] = DB::table('proyectos')->where('status', 'pendiente')->count(); 

    $toTalClientes ['toTalClientes'] = DB::table('clientes')->count();  


    return View::make('reportes')
    ->with($toTalPRoyects)
    ->with($toTalPRoyectsActivos)
    ->with($toTalPRoyectsFinalizados)
    ->with($toTalClientes)
    ->with($toTalPRoyectsCancelados)
    ->with($toTalPRoyectsPendientes);
}//if there is no admin logged in
return redirect('/login_admin');   



    }

























}
