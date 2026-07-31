<x-mail::message>
# New Project Inquiry

You have received a new project inquiry from **{{ $data['name'] }}**.

**Email:** {{ $data['email'] }}  
**Company:** {{ $data['company'] ?: 'N/A' }}  
**Project Type:** {{ $data['type'] }}

### Message Details:
{{ $data['message'] }}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
