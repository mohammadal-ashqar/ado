@extends('admin.admin_master')
@section('title', 'الملف الشخصي')
@section('content')

    <x-page.title :route="route('admin.index')" title="الرئيسية" title_2="الملف الشخصي" />

    <div class="row">
        <div class="col-md-6 col-sm-auto">
            <div class="card  box-shadow-0">
                <div class="card-header">
                    <h4 class="card-title mb-1">تغيير البيانات الشخصية</h4>
                    <p class="mb-2"></p>
                </div>
                <div class="card-body pt-0">
                    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                        @csrf
                    </form>

                    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                        @csrf
                        @method('patch')

                        <div>
                            <x-input-label for="name" :value="__('الاسم')" />
                            <x-text-input id="name" name="name" type="text" class="form-control   mt-1 block w-full"
                                :value="old('name', Auth::user()->name)" required autofocus autocomplete="name" />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>

                        <div>
                            <x-input-label for="email" :value="__('الايميل')" class="mt-5"/>
                            <x-text-input id="email" name="email" type="email" class="form-control   mt-1 block w-full"
                                :value="old('email', Auth::user()->email)" required autocomplete="email" />
                            <x-input-error class="mt-2" :messages="$errors->get('email')" />

                            @if (Auth::user() instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !Auth::user()->hasVerifiedEmail())
                                <div>
                                    <p class="text-sm mt-2 text-gray-800">
                                        {{ __('Your email address is unverified.') }}

                                        <button form="send-verification"
                                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            {{ __('Click here to re-send the verification email.') }}
                                        </button>
                                    </p>

                                    @if (session('status') === 'verification-link-sent')
                                        <p class="mt-2 font-medium text-sm text-green-600">
                                            {{ __('A new verification link has been sent to your email address.') }}
                                        </p>
                                    @endif
                                </div>
                            @endif
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button class="mt-4 rounded-5 ">{{ __('حفظ') }}</x-primary-button>

                            @if (session('status') === 'profile-updated')
                                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-gray-600">{{ __('تم الحفظ.') }}</p>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card  box-shadow-0">
                <div class="card-header">
                    <h4 class="card-title mb-1">تغيير كلمة المرور</h4>
                    <p class="mb-2"></p>
                </div>
                <div class="card-body pt-0">
                    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                        @csrf
                        @method('put')

                        <div>
                            <x-input-label for="current_password" :value="__('كلمة المرور الحالية')" />
                            <x-text-input id="current_password" name="current_password" type="password"
                                class="form-control   mt-1 block w-full" autocomplete="current-password" />
                            <div class="text-danger">
                                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />

                            </div>
                        </div>

                        <div>
                            <x-input-label for="password" :value="__(' كلمة المرور الجديدة')" />
                            <x-text-input id="password" name="password" type="password"
                                class="form-control   mt-1 block w-full" autocomplete="new-password" />
                            <div class="text-danger">
                                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />

                            </div>
                        </div>

                        <div>
                            <x-input-label for="password_confirmation" :value="__('تاكيد كلمة المرور')" />
                            <x-text-input id="password_confirmation" name="password_confirmation" type="password"
                                class="form-control  mt-1 block w-full" autocomplete="new-password" />
                            <div class="text-danger">
                                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />

                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button class="rounded-1 mt-2">{{ __('حفظ') }}</x-primary-button>

                            @if (session('status') === 'password-updated')
                                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-gray-600">{{ __('تم الحفظ.') }}</p>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-3">حذف الحساب</h5>
                    <p class="card-text">
                        بمجرد حذف حسابك ، سيتم حذف جميع موارده وبياناته نهائيًا. قبل حذف حسابك ، يرجى تنزيل أي بيانات أو
                        معلومات ترغب في الاحتفاظ بها.</p>
                    <a href="javascript:void(0);" class="btn btn-danger" data-bs-target="#modaldemo1"
                        data-bs-toggle="modal">إحذف</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="modaldemo1" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">هل انت متأكد انك تريد حذف حسابك؟</h6><button aria-label="Close" class="close"
                        data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
                </div>
                <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                    @csrf
                    @method('delete')
                    <div class="modal-body">
                        <p>بمجرد حذف حسابك ، سيتم حذف جميع موارده وبياناته نهائيًا. الرجاء إدخال كلمة المرور الخاصة بك
                            لتأكيد رغبتك في حذف حسابك بشكل دائم.</p>

                        <x-input-label for="password" value="Password" class="sr-only" />

                        <x-text-input id="password" name="password" type="password"
                            class=" form-control form-control-lg

                           mt-1 block w-3/4" placeholder="Password" />

                        <div class="text-danger">
                            <x-input-error :messages="$errors->userDeletion->get('password')" class=" mt-2" />
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn ripple btn-danger" type="submit">حذف الحساب</button>
                        <button class="btn ripple btn-secondary" data-bs-dismiss="modal" type="button">تراجع</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    </div>
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->

@endsection
