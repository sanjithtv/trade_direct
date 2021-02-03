<?php
namespace App\Helpers\Trade;

use App\td_usergroups;
use App\td_users;
use App\td_usergroup_rights; 
use App\td_usergroup_users;
use App\td_permissions;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

 
class TradeAuth {


    public static function get_modules() {
        $modules = DB::table('td_permissions')->select(DB::raw('distinct module'))->where('id','>','0')->get();
         
        return $modules;
    }

    public static function get_module_permissions($module){
        if(self::check_module_exists($module)){
            $module_permissions = DB::table('td_permissions')->select('id','title','module','submodule','perms','type')->where('module',$module)->get();
            return $module_permissions;
        }
        return false;
    }

    public static function check_module_exists($module){
        $module_res = DB::table('td_permissions')->where('module',$module)->first();
        if($module_res->id){
            return true;
        }
        return false;
    }

    public static function get_all_permissions(){
        $modules = self::get_modules();
        foreach($modules as $module){
            $module_permissions = self::get_module_permissions($module->module);
            if($module_permissions){
                foreach ($module_permissions as $key => $permission) {
                    if($permission->submodule==""){
                        $permission_arr[$module->module][$permission->type] = $permission->id;
                    }else{
                        $permission_arr[$module->module]['submodule'][$permission->submodule][$permission->type] = $permission->id;
                    }
                }
            }
        }
        return $permission_arr;
    }

    public static function remove_role_permissions($role_id){
        if($role_id){
            $del_res = DB::table('td_usergroup_rights')->where('group_id',$role_id)->delete();
        }
        return true;
    }

    public static function auth_allows($module,$action,$submodule="",$redirect_to=""){
       // $user = Auth::id();
        $user = 1;
        if($user){
            $user_role = self::get_user_role($user);
            $role_permissions = self::get_role_permissions($user_role->group_id);
            $user_permissions = self::get_user_permissions($user);
            $user_role_permissions = array_merge($role_permissions, $user_permissions);

            if($module && $action){
                if($submodule!=""){
                    $module_res = DB::table('td_permissions')->select('id')->where([['module','=',$module],['type','=',$action],['submodule','=',$submodule]])->first();    
                }else{
                    $module_res = DB::table('td_permissions')->select('id')->where([['module','=',$module],['type','=',$action]])->first();
                }
                if($module_res){
                    if(in_array($module_res->id,$user_role_permissions)){
                        return true;
                    }
                }   
            }
        }
        if($redirect_to==1){
            abort(404);
        }
        return false;
    }

    public static function get_user_role($userid){
        if($userid){
            $user_role = DB::table('td_usergroups_users')->where('user_id',$userid)->first();
            return $user_role;
        }
        return false;
    }

    public static function get_role_permissions($role_id){
        $role_permission_arr = array();
        if($role_id){
            $role_permissions = DB::table('td_usergroup_rights')->select('group_id','permission_id')->where('group_id',$role_id)->get();
            if($role_permissions){
                foreach ($role_permissions as $key => $value) {
                    $role_permission_arr[] = $value->permission_id;
                }
            }
            return $role_permission_arr;
        }
        return false;
    }

    public static function get_user_permissions($userid){
        $user_permission_arr = array();
        if($userid){
            $user_permissions = DB::table('td_user_rights')->select('user_id','permission_id')->where('user_id',$userid)->get();
            if($user_permissions){
                foreach ($user_permissions as $key => $value) {
                    $user_permission_arr[] = $value->permission_id;
                }
            }
            return $user_permission_arr;
        }
        return false;
    }


}