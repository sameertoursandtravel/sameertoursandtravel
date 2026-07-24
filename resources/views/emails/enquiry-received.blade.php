@component('mail::message')
# New Website Enquiry

A new enquiry has been submitted on sameertoursandtravel.com.

| Field | Detail |
|---|---|
| Name | {{ $enquiry->full_name }} |
| Phone | {{ $enquiry->phone }} |
| Email | {{ $enquiry->email }} |
| Country Interested | {{ $enquiry->country_interested ?: '—' }} |
| Position Interested | {{ $enquiry->position_interested ?: '—' }} |

**Message:**
{{ $enquiry->message ?: 'No message provided.' }}

@if($enquiry->resume_path)
A resume was attached to this enquiry (see storage/app/private/{{ $enquiry->resume_path }}).
@endif

Thanks,<br>
Sameer Tours & Travels Website
@endcomponent
