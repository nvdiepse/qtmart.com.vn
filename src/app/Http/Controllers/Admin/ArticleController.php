<?php

namespace App\Http\Controllers\Admin;

use Exception;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Services\MenuService;
use App\Services\ArticleService;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Product\StoreRequest;
use App\Http\Requests\Admin\Article\UpdateRequest;

class ArticleController extends Controller
{
    protected $articleService;
    protected $menuService;

    public function __construct(
        ArticleService $articleService,
        MenuService $menuService
    ) {
        $this->articleService = $articleService;
        $this->menuService = $menuService;
    }

    public function index(Request $request)
    {
        $articles = $this->articleService->getAll();

        $dataView = [
            'articles' => $articles,
        ];

        return view('backend.article.index', $dataView);
    }

    public function create()
    {
        $menus = $this->menuService->getAll();

        $dataView = [
            'menus' => $menus,
        ];
        return view('backend.article.create', $dataView);
    }

    public function store(StoreRequest $request)
    {
        $data = $request->except('_token', 'image');

        try {
            $data['brand_id'] = 1;
            $data['created_at'] = Carbon::now();


            if ($request->image) {
                $image = upload_image('image');
                if ($image['code'] == 1)
                    $data['image'] = $image['name'];
            }

            $article = $this->articleService->store($data);
            $article->pa_slug = Str::slug($request->pa_name) . '-' . $article->id;
            $article->save();

            DB::commit();
            return redirect()->route('blog.index');
        } catch (Exception $e) {
            DB::rollBack();
            report($e);
        }
    }

    public function update(UpdateRequest $request, $id)
    {
        dd($request->all());
        try {
            DB::beginTransaction();
            $data = $request->except('_token', 'file');

            $data['slug']  = Str::slug($request->name);
            $data['updated_at'] = Carbon::now();

            if ($request->image) {
                $image = upload_image('image');
                if ($image['code'] == 1)
                    $data['image'] = $image['name'];
            }

            $this->productService->update($id, $data);

            DB::commit();
            return redirect()->route('blog.index');
        } catch (Exception $e) {
            DB::rollBack();
            dd($e);
            report($e);
        }
    }

    public function edit($id)
    {
        $article = $this->articleService->findById($id);
        $menus = $this->menuService->getAll();

        $dataView = [
            'article' => $article,
            'menus' => $menus,
        ];

        return view('backend.article.update', $dataView);
    }

    public function active($id)
    {
        $article = $this->articleService->findById($id);
        $article->pa_status = !$article->pa_status;
        $article->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        $product = $this->productService->findById($id);
        if ($product) $product->delete();

        return redirect()->back();
    }
}
