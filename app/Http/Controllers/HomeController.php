<?php
/*
 * This file is part of Lizard.
 *
 * @author zqhong <i@zqhong.com>
 * @date 2016/9/9 8:08
 * @namespace Http\Controllers
 * @filename HomeController.php
 * @encoding UTF-8
 */

namespace Lizard\Http\Controllers;

use Lizard\Http\Requests;
use Lizard\Models\Thread;
use Lizard\Repositories\ThreadsRepository;
use Lizard\Models\User;

class HomeController extends Controller
{
    /**
     * @var ThreadsRepository
     */
    private $thread;

    /**
     * HomeController constructor.
     *
     * @param ThreadsRepository $thread
     */
    public function __construct(ThreadsRepository $thread)
    {
        $this->thread = $thread;
    }


    /**
     * @return mixed
     */
    public function index()
    {
        $threads = $this->thread->fetchThreads();
        return view('threads.index', compact('threads'));
    }
}
