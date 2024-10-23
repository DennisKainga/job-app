<?php

namespace App\Livewire\Jobs;

use App\Models\job_form;
use Livewire\Component;

class Form extends Component
{

    public $job_title;
    public $job_description;
    public $job_nature;
    public $company_name;
    public $job_salary;
    public $job_category = [];

    protected $rules = [
        'job_title' => 'required|string|max:255',
        'job_description' => 'required|string',
        'job_nature' => 'required|string|max:255',
        'company_name' => 'required|string|max:255',
        'job_salary' => 'required|numeric',
        'job_category' => 'required|array',
    ];

    public function submit()
    {
        $this->validate();

        job_form::create([
            'job_title' => $this->job_title,
            'job_description' => $this->job_description,
            'job_nature' => $this->job_nature,
            'company_name' => $this->company_name,
            'job_salary' => $this->job_salary,
            'job_category' => json_encode($this->job_category),
        ]);

        session()->flash('message', 'Job created successfully!');

        // Refresh the page after successful submission
        return redirect()->to(request()->header('Referer'));
    }

    public function render()
    {
        return view('livewire.jobs.form');
    }
}
