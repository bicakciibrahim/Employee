<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Kayıt olduğunuz için teşekkür ederiz! Başlamadan önce, size gönderdiğimiz bağlantıya tıklayarak e-posta adresinizi doğrular mısınız? Eğer e-postayı almadıysanız, size başka bir tane göndermekten memnuniyet duyarız.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
            {{ __('Kayıt sırasında verdiğiniz e-posta adresine yeni bir doğrulama bağlantısı gönderilmiştir.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Doğrulama E-postasını Yeniden Gönder') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                {{ __('Çıkış Yap') }}
            </button>
        </form>
    </div>
</x-guest-layout>
