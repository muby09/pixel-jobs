<x-layout>
    <x-page-heading>Add a New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="Web Developer" />
        <x-forms.input label="Salary" name="salary" placeholder="$70,000" />
        <x-forms.input label="Location" name="location" placeholder="Kaduna" />

        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://acme.com/jobs/ceo-wanted" />
        <x-forms.checkbox label="Feature (Costs Extra)" name="feature" placeholder="Kaduna" />

        <x-forms.divider />

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="Laracast, Video, Edu" />

        <x-forms.button class="">Publish</x-forms.button>
    </x-forms.form>
</x-layout>
