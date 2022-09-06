<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resume;
use App\Models\ResumeSection;
use App\Models\ResumeContent;
use App\Models\Log;

class ResumeController extends Controller
{
    protected $modelNameResume;
    protected $modelNameResumeSection;
    protected $modelNameResumeContent;
    protected $modelNameLog;
    protected $tableNameResume;
    protected $tableNameResumeSection;
    protected $tableNameResumeContent;

    /**
     * Instantiate the variables that will be used to get the model.
     * 
     * @return Collection
     */
    public function __construct()
    {
        $this->modelNameResume = new Resume();
        $this->modelNameResumeSection = new ResumeSection();
        $this->modelNameResumeContent = new ResumeContent();
        $this->modelNameLog = new Log();
        $this->tableNameResume = $this->modelNameResume->getTable();
        $this->tableNameResumeSection = $this->modelNameResumeSection->getTable();
        $this->tableNameResumeContent = $this->modelNameResumeContent->getTable();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.resume');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
