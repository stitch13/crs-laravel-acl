<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Permission;
use Gate;

class PermissionController extends Controller {

    private $permission;

    public function __construct(Permission $permission) {
        $this->permission = $permission;

        if (Gate::denies('adm'))
            return abort('403', 'Não Autotizado !');
    }

    public function index() {

        $permissions = $this->permission->all();

        if (Gate::denies('adm'))
        //abort(403, 'Acesso não autorizado !');
            return redirect()->back();

        return view('painel.permissions.index', compact('permissions'));
    }

    public function roles($id) {
        $permission = $this->permission->find($id);

        $roles = $permission->roles()->get();

        return view('painel.permissions.roles', compact('permission', 'roles'));
    }

}
