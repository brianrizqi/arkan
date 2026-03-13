<x-mail::message>
# {{ $application->career ? 'New Job Application' : 'New Speculative Application' }}

A new application has been submitted{{ $application->career ? " for the position: **{$application->career->title}**" : " (Speculative)" }}.

**Applicant Details:**
- **Name:** {{ $application->first_name }} {{ $application->last_name }}
- **Email:** {{ $application->email }}
- **Phone:** {{ $application->phone ?? 'N/A' }}
- **LinkedIn:** {{ $application->linkedin_url ?? 'N/A' }}
- **Portfolio:** {{ $application->portfolio_url ?? 'N/A' }}

**Cover Letter:**
{{ $application->cover_letter ?? 'No cover letter provided.' }}

The applicant's CV is attached to this email.

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
