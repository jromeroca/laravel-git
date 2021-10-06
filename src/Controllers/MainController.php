<?php

namespace Jromero\LaravelGit\Controllers;

use App\Http\Controllers\Controller;
use CzProject\GitPhp\Git;
use Illuminate\Http\Request;

class MainController extends Controller
{
    protected $repo;

    public function __construct(Git $git) {
        $this->repo = $git->open('');
    }


    public function index(Request $request) {
        $branches = $this->repo->getLocalBranches();
        $selected_branch = $this->repo->getCurrentBranchName();
        return view('laravel-git-view::list',compact('branches','selected_branch'));
    }

    public function setBranch($branch) {
        $this->repo->checkout($branch);
        return redirect("/laravel-git/main");
    }
}
