<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
	//index : 메인페이지
	public function index(Request $request)
	{
        $skills = Skill::get();
		return view('skill.index', compact('skills'));
	}

	//show : 상세보기
	public function show(Skill $skill)
	{
		return view('skill.show', compact('skill'));
	}

	//create : 등록페이지
	public function create()
	{
		$skill = new Skill();
		return view('skill.create', compact('skill'));
	}

	//store : 데이터 저장 처리
	public function store()
	{
		$skill = Skill::create($this->validatedData());
		return redirect('/skill/');
	}

	//edit : 수정페이지
	public function edit(Skill $skill)
	{
		return view('skill.edit', compact('skill'));
	}

	//update : 데이터 수정처리
	public function update(Skill $skill)
	{
		$skill->update($this->validatedData());
		return redirect('/skill/');
	}

	//destroy : 데이터 삭제처리
	public function destroy(Skill $skill)
	{
        $skill->delete();
		return redirect('/skill/');
	}

	//입력받은 데이터 유효성 검사
	public function validatedData()
	{
        return request()->validate([
            'name_ko' => 'required',
            'name_jp' => 'required',
            'category' => 'required',
            'point' => 'required',
            'content' => 'required'
        ]);
	}
}
