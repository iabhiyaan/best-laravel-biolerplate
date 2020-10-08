@extends('admin.layouts.app')

@section('page_title', 'Dashboard')

@push('styles')
<style>
    .form-group label {
        text-transform: capitalize;
    }
</style>
@endpush

@section('content')

<div class="page-content fade-in-up">
    <form method="post" action="{{ route('setting.update', $detail->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        @include('admin.layouts._partials.messages.info')
        <div class="row">
            <div class="col-md-6">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">SEO Details</div>
                    </div>
                    <div class="ibox-body">

                        <div class="form-group">
                            <label>Page Title</label>
                            <input class="form-control" type="text" name="page_title" value="{{$detail->page_title}}"
                                placeholder="Enter Page Title">
                        </div>

                        <div class="form-group">
                            <label>Meta Title</label>
                            <input class="form-control" type="text" name="meta_title" value="{{$detail->meta_title}}"
                                placeholder="Enter Meta Title">
                        </div>

                        <div class="form-group">
                            <label>Meta Description</label>
                            <input class="form-control" type="text" value="{{$detail->meta_description}}"
                                name="meta_description" placeholder="Enter Meta Description">
                        </div>

                        <div class="form-group">
                            <label>Keywords</label>
                            <input class="form-control" type="text" value="{{$detail->keyword}}" name="keyword"
                                placeholder="Enter Keywords">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Social Media Links</div>

                    </div>
                    <div class="ibox-body">
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label>Facebook Link</label>
                                <input class="form-control" type="text" value="{{$detail->facebook}}" name="facebook"
                                    placeholder="Enter facebook link">
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Twitter Link</label>
                                <input class="form-control" type="text" value="{{$detail->twitter}}" name="twitter"
                                    placeholder="Enter twitter link">
                            </div>

                            <div class="col-sm-12 form-group">
                                <label>instagram Link</label>
                                <input class="form-control" type="text" value="{{$detail->instagram}}" name="instagram"
                                    placeholder="Enter instagram link">
                            </div>

                            <div class="col-sm-12 form-group">
                                <label>whatsapp Link</label>
                                <input class="form-control" type="text" value="{{$detail->whatsapp}}" name="whatsapp"
                                    placeholder="Enter whatsapp Link">
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Site Setting</div>
                    </div>
                    <div class="ibox-body" style="">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>Site Name</label>
                                <input class="form-control" type="text" name="site_name" value="{{$detail->site_name}}"
                                    placeholder="Enter Site name">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Address</label>
                                <input class="form-control" type="text" value="{{$detail->address}}" name="address"
                                    placeholder="Enter Address">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Email</label>
                                <input class="form-control" type="text" value="{{$detail->email}}" name="email"
                                    placeholder="Enter Email Address">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Mobile</label>
                                <input class="form-control" type="text" value="{{$detail->mobile}}" name="mobile"
                                    placeholder="Enter Mobile">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Banner slogan 1</label>
                                <input name="banner_slogan_1" placeholder="Enter banner slogan1" class="form-control"
                                    value="{{$detail->banner_slogan_1}}" />
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Banner slogan 2</label>
                                <input name="banner_slogan_2" placeholder="Enter banner slogan2" class="form-control"
                                    value="{{$detail->banner_slogan_2}}" />
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Banner description</label>
                                <textarea name="banner_description"
                                    class="form-control">{{ $detail->banner_description }}</textarea>
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>Home page about description</label>
                                <textarea name="about_description"
                                    class="form-control">{{ $detail->about_description }}</textarea>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Google Map</label>
                                <input type="text" name="googlemap" placeholder="Enter Google Map Link"
                                    value="{{$detail->googlemap}}" class="form-control">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>About us video link </label>
                                <input type="text" name="about_us_videoLink" placeholder="Enter video link"
                                    value="{{$detail->about_us_videoLink}}" class="form-control">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>middlesection slogan 1</label>
                                <input name="middlesection_slogan_1" placeholder="Enter middlesection slogan1"
                                    class="form-control" value="{{$detail->middlesection_slogan_1}}" />
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>middlesection slogan 2</label>
                                <input name="middlesection_slogan_2" placeholder="Enter middlesection slogan2"
                                    class="form-control" value="{{$detail->middlesection_slogan_2}}" />
                            </div>
                            <div class="col-sm-12 form-group">
                                <label>middlesection description</label>
                                <textarea name="middlesection_description"
                                    class="form-control">{{ $detail->middlesection_description }}</textarea>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Logo</label>
                                <input type="file" id="fileUpload" name="logo" value="{{$detail->logo}}"
                                    class="form-control">
                                <div id="wrapper" class="mt-2">
                                    <div id="image-holder">
                                        @if($detail->logo)
                                        <img src="{{asset('images/main/'.$detail->logo)}}" alt="" class="thumb-image"
                                            height="120px" width="120px">
                                        @endif

                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-sm-6 form-group">
                                <label>Banner image</label>
                                <input type="file" id="fileUpload2" name="banner_image"
                                    value="{{$detail->banner_image}}" class="form-control">
                            <div id="wrapper" class="mt-2">
                                <div id="image-holder2">
                                    @if($detail->banner_image)
                                    <img src="{{asset('images/main/'.$detail->banner_image)}}" alt=""
                                        class="thumb-image" height="120px" width="120px">
                                    @endif
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="col-sm-6 form-group">
                                <label>Middle Section Image</label>
                                <input type="file" id="fileUpload3" name="middlesection_image"
                                    value="{{$detail->middlesection_image}}" class="form-control">
                        <div id="wrapper" class="mt-2">
                            <div id="image-holder3">
                                @if($detail->middlesection_image)
                                <img src="{{asset('images/main/'.$detail->middlesection_image)}}" alt=""
                                    class="thumb-image" height="120px" width="120px">
                                @endif

                            </div>
                        </div>
                    </div> --}}
                    <div class="col-sm-6 form-group">
                        <label>Footer Logo</label>
                        <input type="file" id="fileUpload4" name="footer_logo" value="{{$detail->footer_logo}}"
                            class="form-control">
                        <div id="wrapper" class="mt-2">
                            <div id="image-holder4">
                                @if($detail->footer_logo)
                                <img src="{{asset('images/main/'.$detail->footer_logo)}}" alt="" class="thumb-image"
                                    height="120px" width="120px">
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 form-group">
                        <label>Footer description</label>
                        <textarea name="footer_description"
                            class="form-control">{{ $detail->footer_description }}</textarea>
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>appstore link</label>
                        <input type="text" name="appstore_link" placeholder="Enter appstore link"
                            value="{{$detail->appstore_link}}" class="form-control">
                    </div>
                    <div class="col-sm-6 form-group">
                        <label>playstore link</label>
                        <input type="text" name="playstore_link" placeholder="Enter playstore link"
                            value="{{$detail->playstore_link}}" class="form-control">
                    </div>

                </div>
            </div>
        </div>
</div>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-block btn-primary">Submit</button>
</div>
</form>
</div>

@endsection

@push('scripts')

<script>
    $(document).ready(function() {
        $("#fileUpload").on('change', function() {
            if (typeof(FileReader) != "undefined") {
                var image_holder = $("#image-holder");
                // $("#image-holder").siblings().remove();
                $("#image-holder").children().remove();
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("<img />", {
                        "src": e.target.result,
                        "class": "thumb-image",
                        "width": '50%'
                    }).appendTo(image_holder);
                }
                image_holder.show();
                reader.readAsDataURL($(this)[0].files[0]);
            } else {
                alert("This browser does not support FileReader.");
            }
        });

        $("#fileUpload1").on('change', function() {
            if (typeof(FileReader) != "undefined") {
                var image_holder = $("#image-holder1");
                // $("#image-holder").siblings().remove();
                $("#image-holder1").children().remove();
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("<img />", {
                        "src": e.target.result,
                        "class": "thumb-image",
                        "width": '50%'
                    }).appendTo(image_holder);
                }
                image_holder.show();
                reader.readAsDataURL($(this)[0].files[0]);
            } else {
                alert("This browser does not support FileReader.");
            }
        });

        $("#fileUpload2").on('change', function() {
            if (typeof(FileReader) != "undefined") {
                var image_holder = $("#image-holder2");
                // $("#image-holder").siblings().remove();
                $("#image-holder2").children().remove();
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("<img />", {
                        "src": e.target.result,
                        "class": "thumb-image",
                        "width": '50%'
                    }).appendTo(image_holder);
                }
                image_holder.show();
                reader.readAsDataURL($(this)[0].files[0]);
            } else {
                alert("This browser does not support FileReader.");
            }
        });
    });

    function fileUpload($selector, $imageHolder) {
        $($selector).on('change', function() {
            if (typeof(FileReader) != "undefined") {
                var image_holder = $($imageHolder);
                // $("#image-holder").siblings().remove();
                $($imageHolder).children().remove();
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("<img />", {
                        "src": e.target.result,
                        "class": "thumb-image",
                        "width": '50%'
                    }).appendTo(image_holder);
                }
                image_holder.show();
                reader.readAsDataURL($(this)[0].files[0]);
            } else {
                alert("This browser does not support FileReader.");
            }
        });
    }
    fileUpload('#fileUpload3', '#image-holder3');
    fileUpload('#fileUpload4', '#image-holder4');
    fileUpload('#fileUpload5', '#image-holder5');
    fileUpload('#fileUpload6', '#image-holder6');
    fileUpload('#fileUpload7', '#image-holder7');
    fileUpload('#fileUpload8', '#image-holder8');
    fileUpload('#fileUpload9', '#image-holder9');
</script>



@endpush

{{--
<div class="row">
    <div class="col-md-12">
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">Inner page banner images</div>
            </div>
            <div class="ibox-body" style="">
                <div class="row">

                    <div class="col-sm-6 form-group">
                        <label>blog banner image</label>
                        <input type="file" id="fileUpload5" name="blog_banner_image"
                            value="{{$detail->blog_banner_image}}" class="form-control">
<div id="wrapper" class="mt-2">
    <div id="image-holder5">
        @if($detail->blog_banner_image)
        <img src="{{asset('images/main/'.$detail->blog_banner_image)}}" alt="" class="thumb-image" height="120px"
            width="120px">
        @endif

    </div>
</div>
</div>
<div class="col-sm-6 form-group">
    <label>Team Banner image</label>
    <input type="file" id="fileUpload6" name="team_banner_image" value="{{$detail->team_banner_image}}"
        class="form-control">
    <div id="wrapper" class="mt-2">
        <div id="image-holder6">
            @if($detail->team_banner_image)
            <img src="{{asset('images/main/'.$detail->team_banner_image)}}" alt="" class="thumb-image" height="120px"
                width="120px">
            @endif
        </div>
    </div>
</div>
<div class="col-sm-6 form-group">
    <label>Image gallery banner Image</label>
    <input type="file" id="fileUpload7" name="imagegallery_banner_image" value="{{$detail->imagegallery_banner_image}}"
        class="form-control">
    <div id="wrapper" class="mt-2">
        <div id="image-holder7">
            @if($detail->imagegallery_banner_image)
            <img src="{{asset('images/main/'.$detail->imagegallery_banner_image)}}" alt="" class="thumb-image"
                height="120px" width="120px">
            @endif

        </div>
    </div>
</div>
<div class="col-sm-6 form-group">
    <label>Video gallery banner image</label>
    <input type="file" id="fileUpload8" name="videogallery_banner_image" value="{{$detail->videogallery_banner_image}}"
        class="form-control">
    <div id="wrapper" class="mt-2">
        <div id="image-holder8">
            @if($detail->videogallery_banner_image)
            <img src="{{asset('images/main/'.$detail->videogallery_banner_image)}}" alt="" class="thumb-image"
                height="120px" width="120px">
            @endif

        </div>
    </div>
</div>
<div class="col-sm-6 form-group">
    <label>Contact us banner image</label>
    <input type="file" id="fileUpload9" name="contactus_banner_image" value="{{$detail->contactus_banner_image}}"
        class="form-control">
    <div id="wrapper" class="mt-2">
        <div id="image-holder9">
            @if($detail->contactus_banner_image)
            <img src="{{asset('images/main/'.$detail->contactus_banner_image)}}" alt="" class="thumb-image"
                height="120px" width="120px">
            @endif

        </div>
    </div>
</div>

</div>
</div>
</div>
</div>
</div> --}}