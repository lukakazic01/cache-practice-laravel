<form method="POST" action="{{ route('login.store') }}" class="flex flex-col gap-6">
    @csrf
    <x-forms.field name="email" required>
        <x-forms.label>Email</x-forms.label>
        <x-forms.input type="email" :value="old('email', '')" />
        <x-forms.error-message />
    </x-forms.field>
    <x-forms.field name="password" required>
        <x-forms.label>Password</x-forms.label>
        <x-forms.input :value="old('password', '')" />
        <x-forms.error-message />
    </x-forms.field>
    <x-base.button type="submit">Submit</x-base.button>
</form>
