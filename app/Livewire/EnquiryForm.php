<?php

namespace App\Livewire;

use App\Mail\EnquiryReceived;
use App\Models\Enquiry;
use App\Models\Vacancy;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class EnquiryForm extends Component
{
    use WithFileUploads;

    #[Validate('required|string|max:120')]
    public string $full_name = '';

    #[Validate('required|string|max:30')]
    public string $phone = '';

    #[Validate('required|email|max:150')]
    public string $email = '';

    #[Validate('nullable|string|max:100')]
    public string $country_interested = '';

    #[Validate('nullable|string|max:150')]
    public string $position_interested = '';

    #[Validate('nullable|string|max:2000')]
    public string $message = '';

    #[Validate('nullable|file|mimes:pdf,doc,docx|max:5120')]
    public $resume = null;

    // Optional: pre-fill when arriving from a specific vacancy's "Apply Now" button.
    public ?int $vacancy_id = null;

    public bool $submitted = false;

    public function mount(?int $vacancyId = null): void
    {
        if ($vacancyId) {
            $vacancy = Vacancy::find($vacancyId);
            if ($vacancy) {
                $this->vacancy_id = $vacancy->id;
                $this->country_interested = $vacancy->country;
                $this->position_interested = $vacancy->title;
            }
        }
    }

    public function submit(): void
    {
        $this->validate();

        $resumePath = $this->resume ? $this->resume->store('resumes', 'private') : null;

        $enquiry = Enquiry::create([
            'full_name' => $this->full_name,
            'phone' => $this->phone,
            'email' => $this->email,
            'country_interested' => $this->country_interested,
            'position_interested' => $this->position_interested,
            'message' => $this->message,
            'resume_path' => $resumePath,
            'vacancy_id' => $this->vacancy_id,
        ]);

        Mail::to(config('mail.enquiry_recipient', 'info@sameertoursandtravel.com'))
            ->send(new EnquiryReceived($enquiry));

        $this->reset(['full_name', 'phone', 'email', 'country_interested', 'position_interested', 'message', 'resume']);
        $this->submitted = true;
    }

    public function render()
    {
        return view('livewire.enquiry-form');
    }
}
