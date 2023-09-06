@extends('layouts.main')
@section('content')
    <section class="breadcum-area breadcum-bg breadcum-bg2 section-padding"
        style="background-image:url({{ asset('data/19.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcum-title">
                        <h2 class="page-title">Employer Form</h2>
                        <ul class="page-list">
                            <li>
                                <a href="{{ route('home') }}">
                                    Home
                                </a> /
                                <span>Employer Form</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="section-why section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="why-left-content section-title">
                        <h4 class="s-title">
                            Apply for your company!
                        </h4>
                        <h2>Application Form</h2>
                        <p style="text-align: justify; color: black;">
                            Your dream candidate is just around the corner.
                            <br>
                            We are one of the best oversea employment agency in myanmar.
                        </p>
                        <br>
                        <div class="contact-form">
                            <form autocomplete="off" method="POST" action="{{ route('employer.store') }}" id="create-form">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-black">Company Name</label>
                                            <input autocomplete="off" type="text"
                                                class="form-control @error('company_name') is-invalid @enderror"
                                                placeholder="Company Name" name="company_name"
                                                value="{{ old('company_name') }}">
                                            @error('company_name')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-black">Type of Company</label>
                                            <input autocomplete="off" type="text"
                                                class="form-control @error('company_type') is-invalid @enderror"
                                                placeholder="Type Of Company" name="company_type"
                                                value="{{ old('company_type') }}">
                                            @error('company_type')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-black">Company Email
                                                Address</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                placeholder="Company Email Address" name="email"
                                                value="{{ old('email') }}">
                                            @error('email')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-black">Company Phone
                                                Number</label>
                                            <input autocomplete="off" type="text"
                                                class="form-control @error('phone') is-invalid @enderror"
                                                placeholder="Company Phone Number" name="phone"
                                                value="{{ old('phone') }}">
                                            @error('phone')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-black">Company Website</label>
                                            <input autocomplete="off" type="text"
                                                class="form-control @error('website') is-invalid @enderror"
                                                placeholder="Company Website" name="website" value="{{ old('website') }}">
                                            @error('website')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-md-12 col-sm-12 col-lg-12 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-black">Company Location</label>
                                            <input autocomplete="off" type="text"
                                                class="form-control @error('location') is-invalid @enderror"
                                                placeholder="Company Location" name="location"
                                                value="{{ old('location') }}">
                                            @error('location')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-black">Job Category</label>
                                            <input autocomplete="off" type="text"
                                                class="form-control @error('job_category') is-invalid @enderror"
                                                placeholder="Job Category" name="job_category"
                                                value="{{ old('job_category') }}">
                                            @error('job_category')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-sm-12 col-lg-6 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-black">Age Limit: 20-40</label>
                                            <input autocomplete="off" type="text"
                                                class="form-control @error('age_limit') is-invalid @enderror"
                                                placeholder="Age Limit: 20-40" name="age_limit"
                                                value="{{ old('age_limit') }}">
                                            @error('age_limit')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-xl-12 col-md-12 col-lg-12 col-sm-12 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-black">Educational
                                                Requirement</label>
                                            <textarea style="height: 100px;" class="form-control @error('educational_requirement') is-invalid @enderror"
                                                name="educational_requirement" placeholder="Educational Requirement">{{ old('educational_requirement') }}</textarea>
                                            @error('educational_requirement')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-lg-6 col-sm-6 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-black">
                                                Working Experience
                                            </label>
                                            <textarea style="height: 100px;" class="form-control @error('working_experience_requirement') is-invalid @enderror"
                                                name="working_experience_requirement" placeholder="Working Experience">{{ old('working_experience_requirement') }}</textarea>
                                            @error('working_experience_requirement')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-lg-6 col-sm-6 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-black">Other Additional
                                            </label>
                                            <textarea style="height: 100px;" class="form-control @error('other_additional_requirement') is-invalid @enderror"
                                                name="other_additional_requirement" placeholder="Other Additional ">{{ old('other_additional_requirement') }}</textarea>
                                            @error('other_additional_requirement')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-black">Estimate Salary
                                                Offer</label>
                                            <input autocomplete="off" type="text"
                                                class="form-control @error('estimate_salary_offer') is-invalid @enderror"
                                                placeholder="Estimate Salary " name="estimate_salary_offer"
                                                value="{{ old('estimate_salary_offer') }}">
                                            @error('estimate_salary_offer')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-black">Other Allowance</label>
                                            <input autocomplete="off" type="text"
                                                class="form-control @error('other_allowance') is-invalid @enderror"
                                                placeholder="Other Allowance" name="other_allowance"
                                                value="{{ old('other_allowance') }}">
                                            @error('other_allowance')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-black">
                                                Gender: M:10 / F:10
                                            </label>
                                            <input autocomplete="off" type="text"
                                                class="form-control @error('gender') is-invalid @enderror"
                                                placeholder="M:10 / F:10" name="gender" value="{{ old('gender') }}">
                                            @error('gender')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-xl-6 col-md-6 col-lg-6 col-sm-12 mb-4">
                                        <div class="form-group">
                                            <label for="nameInput" class="form-label text-black">Interview Type</label>
                                            <input autocomplete="off" type="text"
                                                class="form-control @error('interview_type') is-invalid @enderror"
                                                placeholder="Online" name="interview_type"
                                                value="{{ old('interview_type') }}">
                                            @error('interview_type')
                                                <div class="help-block with-errors text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12 py-1">
                                        <button type="submit" name="submit" class="button-2">
                                            <span>
                                                Apply Now
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="col-lg-12 col-md-12">
                        <div class="services-item">
                            <div class="icon">
                                <i class="icofont-file-text"></i>
                            </div>
                            <h2><a href="javascript::void(0)">Global Network</a></h2>
                            <p style="text-align: justify">
                                Emphasize your extensive network of connections with employers and
                                businesses worldwide, providing a wide range of job opportunities in various industries
                                and
                                locations.
                            </p>
                        </div>
                    </div>


                    <div class="col-lg-12 col-md-12 py-3">
                        <div class="services-item">
                            <div class="icon">
                                <i class="icofont-file-text"></i>
                            </div>
                            <h2><a href="javascript::void(0)">Success Stories </a></h2>
                            <p style="text-align: justify">
                                Share success stories and testimonials from satisfied
                                clients
                                and candidates, illustrating the positive outcomes of working with your agency.
                            </p>
                        </div>
                    </div>


                    <div class="col-lg-12 col-md-12 py-3">
                        <div class="services-item">
                            <div class="icon">
                                <i class="icofont-file-text"></i>
                            </div>
                            <h2><a href="javascript::void(0)">Comprehensive Services</a></h2>
                            <p style="text-align: justify">
                                Offer a full suite of services, including pre-screening
                                candidates,
                                visa assistance, travel arrangements, and ongoing support for both the employee and
                                employer.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
