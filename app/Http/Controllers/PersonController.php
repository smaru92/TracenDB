<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    //index : 메인페이지
	public function index(Request $request)
	{
        $people = Person::get();
		return view('person.index', compact('people'));
	}

	//show : 상세보기
	public function show(Person $person)
	{
		return view('person.show', compact('person'));
	}

	//create : 등록페이지
	public function create()
	{
		$person = new Person();
		return view('person.create', compact('person'));
	}

	//store : 데이터 저장 처리
	public function store()
	{
		$person = Person::create($this->validatedData());
		return redirect('/person/');
	}

	//edit : 수정페이지
	public function edit(Person $person)
	{
		return view('person.edit', compact('person'));
	}

	//update : 데이터 수정처리
	public function update(Person $person)
	{
		$person->update($this->validatedData());
		return redirect('/person/');
	}

	//destroy : 데이터 삭제처리
	public function destroy(Person $person)
	{
        $person->delete();
		return redirect('/person/');
	}

	//입력받은 데이터 유효성 검사
	public function validatedData()
	{
        return request()->validate([
            'name_ko' => 'required',
            'name_jp' => 'required'
        ]);
	}
}
