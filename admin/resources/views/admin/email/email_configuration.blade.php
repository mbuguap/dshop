@extends('admin.layouts.app')

@section('title')
Email Configurations
@endsection

@section('main')

<div class="row">
    <div class="col-lg-12 col-md-12 col-12">
        <!-- Page header -->
        <div class="mb-5">
            <h3 class="mb-0">Email Configurations</h3>
        </div>
    </div>
</div>

<div>
    <!-- row -->
    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{ route('admin.update.email.configuration') }}">
                @csrf


                <!-- card -->
                <div class="card mb-5">
                    <!-- card body -->
                    <div class="card-body">
                        <!-- form -->
                        <div class="row">


                            <div class="mb-4 col-sm-6">
                                <label class="form-label">MAIL MAILER </label>
                                <input type="text" name="mail_type" value="{{ $email->mail_type ?? '' }}"
                                    class="form-control" placeholder="SMTP etc." />
                            </div>

                            <div class="mb-4 col-sm-6">
                                <label class="form-label">MAIL HOST </label>
                                <input type="text" name="mail_host" value="{{ $email->mail_host ?? '' }}"
                                    class="form-control" placeholder="MAIL HOST" />
                            </div>

                            <div class="mb-4 col-sm-6">
                                <label class="form-label">EMAIL ADDRESS </label>
                                <input type="text" name="email" value="{{ $email->email ?? '' }}" class="form-control"
                                    placeholder="EMAIL ADDRESS" />
                            </div>

                            <div class="mb-4 col-sm-6">
                                <label class="form-label">MAIL USERNAME</label>
                                <input type="text" name="smtp_username" value="{{ $email->smtp_username ?? '' }}"
                                    class="form-control" placeholder="MAIL USERNAME" />
                            </div>

                            <div class="mb-4 col-sm-6">
                                <label class="form-label">MAIL PASSWORD</label>
                                <input type="text" name="smtp_password" value="{{ $email->smtp_password ?? '' }}"
                                    class="form-control" placeholder="MAIL PASSWORD" />
                            </div>

                            <div class="mb-4 col-sm-6">
                                <label class="form-label">MAIL PORT</label>
                                <input type="text" name="mail_port" value="{{ $email->mail_port ?? '' }}"
                                    class="form-control" placeholder="MAIL PORT" />
                            </div>

                            <div class="mb-4 col-sm-6">
                                <label class="form-label">MAIL ENCRYPTION</label>
                                <input type="text" name="mail_encryption" value="{{ $email->mail_encryption ?? '' }}"
                                    class="form-control" placeholder="TLS, SSL, etc" />
                            </div>






                        </div>


                    </div>
                </div>

                <div class="mt-4 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary me-2">Save</button>
                </div>


            </form>
        </div>

    </div>
</div>


@endsection