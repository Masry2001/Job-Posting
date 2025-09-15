<x-layout>
    <x-page-heading>Create a New Job</x-page-heading>

    <x-forms.form action="/jobs" method="POST">
        @csrf

        <x-forms.input label="Title" name="title" placeholder="CEO" />
        <x-forms.input label="Salary" name="salary" placeholder="100000" />
        <x-forms.input label="Location" name="location" placeholder="Remote" />

        <x-forms.select label="Schedule" name="schedule">
            <option>Full Time</option>
            <option>Part Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" aria-placeholder="https://example.com" />
        <x-forms.checkbox label="Featured (Extra Cost" name="featured" />

        <x-forms.divider />

        <x-forms.input label="Tags (Comma Separated)" name="tags" placeholder="laravel, api, backend" />

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>