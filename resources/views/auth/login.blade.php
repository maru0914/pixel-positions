<x-layout>
    <x-page-heading>Register</x-page-heading>

    <x-forms.form method="POST" actions="/login">
        <x-forms.input label="Email" name="email" type="email"/>
        <x-forms.input label="Password" name="password" type="password"/>

        <x-forms.button>Log In</x-forms.button>
    </x-forms.form>
</x-layout>
