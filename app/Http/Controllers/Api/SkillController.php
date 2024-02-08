<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        return Skill::all();
    }
    public function store(Request $request)
    {
    return Skill::create($request->all());
    }
    public function edit(Skill $skill,Request $request)
    {
        return $skill->update($request->all());
    }
    public function detail(Skill $skill)
    {
        return $skill;
    }
}
