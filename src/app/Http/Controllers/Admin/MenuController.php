<?php

namespace App\Http\Controllers\Admin;

use Exception;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Services\MenuService;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Menu\CreateRequest;
use App\Http\Requests\Admin\Menu\DeleteRequest;
use App\Http\Requests\Admin\Menu\UpdateRequest;

class MenuController extends Controller
{
    protected $MenuService;
    public function __construct(
        MenuService $MenuService
    ) {
        $this->menuService = $MenuService;
    }

    public function index(Request $request)
    {
        $menus = $this->menuService->getAll();

        $viewData = [
            'menus' => $menus,
        ];

        return view('backend.menu.index', $viewData);
    }

    public function create()
    {
        $menus = $this->menuService->getAll();
        $viewData = [
            'menus' => $menus,
        ];
        return view('backend.menu.create', $viewData);
    }

    public function store(CreateRequest $request)
    {
        $data = $request->except('_token');
        try {
            DB::beginTransaction();
            $data['created_at'] = Carbon::now();
            $menu = $this->menuService->store($data);
            $menu->mn_slug = Str::slug($request->mn_name) . '-' . $menu->id;
            $menu->save();
            DB::commit();

            return redirect()->route('menu.index');
        } catch (Exception $e) {
            DB::rollBack();
            report($e);
        }
    }

    public function edit($id)
    {
        $menu = $this->menuService->findById($id);
        $menus = $this->menuService->getAll();
        $viewData = [
            'menu' => $menu,
            'menus' => $menus
        ];
        return view('backend.menu.update', $viewData);
    }

    public function update(UpdateRequest $request, $id)
    {
        try {
            DB::beginTransaction();

            $data = $request->except('_token',);
            $data['mn_slug']     = Str::slug($request->mn_name) . '-' . $request->id;
            $data['updated_at'] = Carbon::now();

            $this->menuService->updateById($id, $data);
            DB::commit();

            return redirect()->route('menu.index');
        } catch (Exception $e) {
            DB::rollBack();
            report($e);
        }
    }

    public function active($id)
    {
        $menu = $this->menuService->findById($id);
        $menu->mn_status = !$menu->mn_status;
        $menu->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        try {
            DB::beginTransaction();
            $this->menuService->deleteById($id);
            DB::commit();

            return redirect()->back();
        } catch (Exception $e) {
            DB::rollBack();
            report($e);
        }
    }
}
