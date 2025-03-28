<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">
    @php
    $setting = settings();
     @endphp
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title',  $setting->settings_site_title )</title>
    <meta name="verify-admitad" content="aadea8efcb" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset($setting->settings_favicon) }}">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/admin/images/favicon.png">
    <link href="{{ asset('panel/css/icon/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('panel/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <link href="{{ asset('panel/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('panel/css/bootstrap-tagsinput.css') }}" rel="stylesheet">
    <link href="{{ asset('panel/css/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('panel/css/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('panel/css/default.css') }}" rel="stylesheet">
    <link href="{{ asset('panel/css/default.date.css') }}" rel="stylesheet">
    <link href="{{ asset('panel/css/jquery.dataTables.min.css') }}" rel="stylesheet">
    <link href="{{ asset('panel/css/jqvmap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('panel/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('panel/css/summernote.css') }}" rel="stylesheet">
    <link href="{{ asset('panel/css/toastr.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jodit/3.18.5/jodit.min.css">
    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
    <!-- Scripts -->

</head>

<body data-typography="poppins" data-theme-version="light" data-layout="vertical" data-nav-headerbg="color_3"
    data-headerbg="color_1" data-sidebar-style="full" data-sibebarbg="color_3" data-sidebar-position="fixed"
    data-header-position="fixed" data-container="wide" direction="ltr" data-primary="color_1">

    <div id="preloader" style="display: none;">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>

    <div id="main-wrapper" class="show">

        @include('layouts.nave')
        @include('layouts.header')
        @include('layouts.sidebar')

        <div class="content-body " style="min-height: 788px;">
            @yield('content')
        </div>

        @include('layouts.footer')

        <div id="gallery" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content ">
                    <div class="modal-header">
                        <h4 class="modal-title">Gallery</h4>
                    </div>
                    <div class="modal-body">


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="folder-cont">
                                    <div class="folder" data-folder-id="*">
                                        <p><i class="icon-picture"></i> All Images</p>
                                    </div>

                                    <div class="folder" data-folder-id="0" data-folder-name="admin">
                                        <p><i class="fa fa-folder"></i> admin</p>
                                    </div>
                                    <div class="folder" data-folder-id="1" data-folder-name="1726117954">
                                        <p><i class="fa fa-folder"></i> 1726117954</p>
                                    </div>
                                    <div class="folder" data-folder-id="2" data-folder-name="1733813307">
                                        <p><i class="fa fa-folder"></i> 1733813307</p>
                                    </div>
                                    <div class="folder" data-folder-id="3" data-folder-name="category">
                                        <p><i class="fa fa-folder"></i> category</p>
                                    </div>
                                    <div class="folder" data-folder-id="4" data-folder-name="1741806478">
                                        <p><i class="fa fa-folder"></i> 1741806478</p>
                                    </div>
                                    <div class="folder" data-folder-id="5" data-folder-name="categorypage">
                                        <p><i class="fa fa-folder"></i> categorypage</p>
                                    </div>
                                    <div class="folder" data-folder-id="6" data-folder-name="homepage">
                                        <p><i class="fa fa-folder"></i> homepage</p>
                                    </div>
                                    <div class="folder" data-folder-id="7" data-folder-name="homepage_banner">
                                        <p><i class="fa fa-folder"></i> homepage_banner</p>
                                    </div>
                                    <div class="folder" data-folder-id="8" data-folder-name="page">
                                        <p><i class="fa fa-folder"></i> page</p>
                                    </div>
                                    <div class="folder" data-folder-id="9" data-folder-name="settings">
                                        <p><i class="fa fa-folder"></i> settings</p>
                                    </div>
                                    <div class="folder" data-folder-id="10" data-folder-name="slide">
                                        <p><i class="fa fa-folder"></i> slide</p>
                                    </div>
                                    <div class="folder" data-folder-id="11" data-folder-name="store">
                                        <p><i class="fa fa-folder"></i> store</p>
                                    </div>
                                    <div class="folder" data-folder-id="12" data-folder-name="1741806468">
                                        <p><i class="fa fa-folder"></i> 1741806468</p>
                                    </div>

                                </div>

                                <div class="sort">
                                    <span class="upload-gallery-btn" data-toggle="modal"
                                        data-target="#upload-gallery"><span class="fa fa-upload"></span> <small>
                                            Upload More</small></span>
                                    <span class="fa fa-th-large active"></span>
                                    <span class="fa fa-th"></span>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="image-container">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>


        <div id="upload-gallery" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content ">
                    <div class="modal-header">
                        <h4 class="modal-title">Gallery</h4>
                    </div>

                    <form action="https://retailescaper.com/admin/gallery/form" method="post"
                        enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="image-container">
                                        <input type="hidden" name="folder" id="folder_path">
                                        <input type="hidden" name="return_url"
                                            value="https://retailescaper.com/admin/dashboard">

                                        <div class="form-group">
                                            <label>Gallery Images <small class="text-danger">( Required )</small>
                                            </label>

                                            <div class="">
                                                <div class="input-group-btn multi-image-upload-main">
                                                    <div class="multi-image-upload">
                                                        <img
                                                            src="https://retailescaper.com/assets/admin/img/placeholder.png">
                                                        <div class="file-btn">
                                                            <input type="file" id="gallery_images"
                                                                name="gallery_images[]">
                                                            <label class="btn btn-info">Upload</label>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Upload</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
        <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
            style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
            <defs id="SvgjsDefs1002"></defs>
            <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
            <path id="SvgjsPath1004" d="M0 0 "></path>
        </svg>
        <script src="{{ asset('panel/js/vendor/global.min.js') }}"></script>
        <script src="{{ asset('panel/js/vendor/bootstrap-select.min.js') }}"></script>
        <script src="{{ asset('panel/js/vendor/Chart.bundle.min.js') }}"></script>
        <script src="{{ asset('panel/js/vendor/moment.js') }}"></script>
        <script src="{{ asset('panel/js/vendor/bootstrap-datetimepicker.min.js') }}"></script>
        <script src="{{ asset('panel/js/custom.min.js') }}"></script>
        <script src="{{ asset('panel/js/deznav-init.js') }}"></script>
        <script src="{{ asset('panel/js/apexchart.js') }}"></script>
        <script src="{{ asset('panel/js/vendor/jquery.peity.min.js') }}"></script>
        <script src="{{ asset('panel/js/dashboard-1.js') }}"></script>
        <script src="{{ asset('panel/js/vendor/picker.js') }}"></script>
        <script src="{{ asset('panel/js/vendor/picker.time.js') }}"></script>
        <script src="{{ asset('panel/js/vendor/picker.date.js') }}"></script>
        <script src="{{ asset('panel/js/vendor/bootstrap-tagsinput.min.js') }}"></script>
        <script src="{{ asset('panel/js/pickadate-init.js') }}"></script>
        <script src="{{ asset('panel/js/summernote-init.js') }}"></script>
        <script src="{{ asset('panel/js/vendor/summernote.min.js') }}"></script>
        <script src="{{ asset('panel/js/vendor/toastr.min.js') }}"></script>
        <script src="{{ asset('panel/js/toastr-init.js') }}"></script>
        <script src="{{ asset('panel/js/vendor/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('panel/js/datatables.init.js') }}"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jodit/3.18.5/jodit.min.js"></script>
        <script>
            Jodit.make('#page_content2');
        </script>


        <script>
            (function($) {
                "use strict"

                //date picker classic default
                $('.datepicker-default').pickadate({
                    formatSubmit: 'yyyy-mm-dd',
                    hiddenName: true
                })

            })(jQuery);
            $(document).ready(function() {
                $("#store_slug").on("keyup", function() {
                    var str = $(this).val();
                    //var slug_id = $(this).data('slug-id');
                    str = str.trim().replace(/\s+/g, '-').toLowerCase();
                    $("#store_slug").val(str);
                });
            });
        </script>



        <script>
            // GALLERY
            $('.folder').on('click', function() {
                var folder_path = $(this).data('folder-name');
                var folder_id = $(this).data('folder-id');

                $('.folder').removeClass('active');
                $(this).addClass('active');


                $.ajax({
                    url: 'https://retailescaper.com/admin/gallery/fetch',
                    type: 'post',
                    data: {
                        folder_path: folder_path,
                        folder_id: folder_id
                    },
                    success: function(response) {
                        $('#gallery  .image-container').html('');
                        $('#gallery .image-container').html(response);


                        $('#folder_path').val(folder_path);
                        $('.sort').hide();

                        if (folder_id == '*') {
                            $('.upload-gallery-btn').hide();
                            $('.sort').fadeIn();
                            $('body').find('.folder-image').fadeIn().css('display', 'flex');
                        } else {
                            $('.upload-gallery-btn').show();
                            $('body').find('.folder-image').each(function() {
                                if (folder_id == $(this).data('folder-id')) {
                                    $('.sort').fadeIn();
                                    $(this).fadeIn().css('display', 'flex');
                                }
                            })
                        }

                    }
                });


            });


            $('.sort .fa-th-large').on('click', function() {
                $('.sort .fa').removeClass('active');
                $(this).addClass('active');
                $('.image-container').removeClass('more');
            });


            $('.sort .fa-th').on('click', function() {
                $('.sort .fa').removeClass('active');
                $(this).addClass('active');
                $('.image-container').addClass('more');
            });

            $(function() {
                $('[data-toggle="tooltip"]').tooltip()
            });



            function copyToClipboard(element) {
                var $temp = $("<input>");
                $("body").append($temp);
                $temp.val($(element).text()).select();
                document.execCommand("copy");
                $temp.remove();
                $('#gallery').modal('hide');
            }


            var x = document.querySelectorAll(".folder-image p");
            var i;
            for (i = 0; i < x.length; i++) {
                // x[i].onclick = function() {
                //   document.execCommand("copy");
                // }

                // x[i].addEventListener("copy", function(event) {
                //   event.preventDefault();
                //   if (event.clipboardData) {
                //     event.clipboardData.setData("text/plain", x[i].textContent);
                //     console.log(event.clipboardData.getData("text"))
                //   }
                // });
            }


            $('.gallery-btn label').on('click', function() {
                $(this).siblings('input').addClass('active-galery-reciever');
            });


            $('#gallery').on('hidden.bs.modal', function() {
                $('input').removeClass('active-galery-reciever');
                $('input').removeClass('from-editor');
                $('input').removeAttr('data-id');
            });


            $('body').on('click', '.folder-image img', function() {
                if ($('#gallery').hasClass('from-editor')) {
                    var id = $('#gallery').attr('data-id');
                    var $node = $('<img src="' + $(this).attr('src') + '">');
                    editors[id].invoke('editor.insertNode', $node[0]);
                } else {
                    $('body').find('.active-galery-reciever').val($(this).attr('src'));
                    $('body').find('.active-galery-reciever').parents('.gallery-btn').siblings('img').attr('src', $(
                        this).attr('src'));
                    $('#gallery').modal('hide');
                }
            });


            $(".image-upload :file").on('change', function() {
                $(this).parents('.file-btn').siblings('.gallery-btn').children('input').val('');
            });



            $('.header').on('click', function() {
                $('#gallery').modal('show');
            });
        </script>
</body>

</html>
