<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\CommentService;
use Illuminate\Http\Request;
use League\Flysystem\Exception;

class CommentController extends Controller
{
    private $commentService;

    public function __construct(
        CommentService $commentService
    )
    {
        $this->commentService = $commentService;
    }

    public function store(Request $request)
    {
        try {

        } catch (Exception $ex) {

        }
    }

    public function approve($id)
    {
        try {

        } catch (Exception $e) {

        }
    }

    public function cancel($id)
    {
        try {

        } catch (Exception $e) {

        }
    }

    public function delete($id)
    {
        try {

        } catch (Exception $e) {

        }
    }
}
