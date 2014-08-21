/**
 * *********************************************
 * Methods Summary: Global Parameters
 * *********************************************
 */
var pageToLoad = 2;
var postPerPage = 8;
var maxPage = 4;
/**
 * *********************************************
 * Methods Summary: Script for Main Navigation
 * Show and Hide the customize sub-menu for Main Navagation
 * *********************************************
 */
var setUpMainNavigation = function() {
    $mainNavLink = $('.main-nav li a');
    $mainNavLink.hover(function() {
        $subClassName = '.' + $(this).text().toLowerCase() + '-menu';
        $($subClassName).fadeIn('fast');
    }, function() {
        $subClassName = '.' + $(this).text().toLowerCase() + '-menu';
        $($subClassName).fadeOut('fast');
    });
};
/**
 * *********************************************
 * Methods Summary: Function to trigger Login Dialog
 * *********************************************
 */
var showLoginDialog = function() {
    $('.dialog-login').slideDown(250);
};
var hideLoginDialog = function() {
    $('.dialog-login').slideToggle(250);
};
/**
 * *********************************************
 * Methods Summary: Function to trigger Forgot Password
 * *********************************************
 */
var toggleForgotPassword = function() {
    $object = $('#lostpasswordform');
    $object.animate({
        left: parseInt($object.css('left')) === 0 ? $object.outerWidth() : 0
    });
};
/**
 * *********************************************
 * Methods Summary: Ajax Login Form
 * *********************************************
 */
var submitAjaxLogin = function(e) {
    e.preventDefault();
    var $form = $(this);
    var $data = $form.serialize();
    $.ajax({
        url: getBasedUrl() + '/user/post?action=login',
        type: 'POST',
        data: $data,
        success: function(msg) {
            var invalidUsername = /invalidusername/g;
            var notYetActivate = /notyetactivate/g;
            var invalidPassword = /invalidpassword/g;
            var userRole = /iamadministrator/g;
            if (invalidUsername.test(msg)) {
                $('#message').html('You have entered invalid username');
            } else if (notYetActivate.test(msg)) {
                $('#message').html('You have not yet activate this account');
            } else if (invalidPassword.test(msg)) {
                $('#message').html('You have entered wrong password');
            } else if (userRole.test(msg)) {
                window.location = getBasedUrl() + '/dashboard';
            } else {
                window.location.reload();
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            $('#message').html(textStatus + errorThrown + jqXHR);
        }
    });
};
/**
 * *********************************************
 * Methods Summary: Ajax Forgot Password
 * *********************************************
 */
var submitAjaxLostpassword = function(e) {
    e.preventDefault();
    var $form = $(this);
    var $data = $form.serialize();
    $.ajax({
        url: getBasedUrl() + '/user/post?action=login',
        type: 'POST',
        data: $data,
        success: function(data, textStatus, jqXHR) {
            var $validate = /success/g;
            if (!$validate.test(data)) {
                $('#lostpasswordMessage').html('You have entered an invalid Email');
            } else {
                $('#lostpasswordMessage').html('Please Check your email for your password');
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            $('#lostpasswordMessage').html('Please Check for email. (TODO)');
        }
    });
};
/**
 * *********************************************
 * Methods Summary: Ajax Load More Post
 * *********************************************
 */
var loadMorePost = function() {
    $.ajax({
        url: getBasedUrl() + '/user/post?action=loadmore&pageToLoad=' + pageToLoad + '&postPerPage=' + postPerPage,
        type: 'GET',
        success: function(data, textStatus, jqXHR) {
            if ((pageToLoad === maxPage) || data === '') {
                $('#bt-loadmore').hide();
                $('#grid-container').append('NOMORE POST');
                if (data === '') {
                    return;
                }
            }

            $('#grid-container').waterfall('append', $(data));
            pageToLoad++;
        }, error: function(jqXHR, textStatus, errorThrown) {
            $('#grid-container').append(textStatus + jqXHR + errorThrown);
        }
    });
};
/**
 * *********************************************
 * Methods Summary: Waterfall Grid
 * *********************************************
 */
var autoGrid = function() {
    $("#grid-container").waterfall({
        itemCls: 'item',
        maxCol: 2,
        checkImagesLoaded: false,
        isAnimated: true,
        dataType: 'html',
        maxPage: 1,
        path: function(page) {
            return getBasedUrl() + '/user/post/?action=loadmore&pageToLoad=' + page + '&postPerPage=' + postPerPage;
        }
    });
};
/**
 * *********************************************
 * Methods Summary: Implement Placeholder to work on IE
 * *********************************************
 */

var setupPlaceholder = function() {
    $('input, textarea').placeholder();
};
/**
 * *********************************************
 * Methods Summary: Input Validation
 * *********************************************
 */
//TODO
/**
 * *********************************************
 * Methods Summary: `Related Content Slider
 * *********************************************
 */
var loadRelatedContentSlider = function() {
    $('.related-item-list').bxSlider({
        minSlides: 2,
        maxSlides: 4,
        slideWidth: 187.5,
        infiniteLoop: false,
        slideMargin: 5
    });
};
var loadMainSlider = function() {
    $('.main-slider').bxSlider({
        infiniteLoop: true
    });
};
var loadGallerySlider = function() {
    $('.gallery-slider').bxSlider({
        pagerCustom: '#gallery-pager'
    });
};
var setupGalleryPaging = function() {
    var currentUrl = document.URL.slice(0, -1);
    var totalPage = $('#gallery-pager a').size() - 1;
    var currentPage = 0;
    var hashKey = null;

    $('#gallery-pager a').click(function() {
        currentPage = $(this).attr('data-slide-index');
        hashKey = $(this).attr('href');
        window.history.replaceState("", "", currentUrl + hashKey);
    });
    $('.gallery-banner-wrapper .bx-next').click(function() {
        if (currentPage !== totalPage) {
            currentPage++;
        } else {
            currentPage = 0;
        }
        $currentPageTag = $('#gallery-pager a').eq(currentPage);
        $('#gallery-pager a').removeClass('active');
        $currentPageTag.addClass('active');
        hashKey = $currentPageTag.attr('href');
        window.history.replaceState("", "", currentUrl + hashKey);

    });
    $('.gallery-banner-wrapper .bx-prev').click(function() {
        if (currentPage !== 0) {
            currentPage--;
        } else {
            currentPage = totalPage;
        }
        $currentPageTag = $('#gallery-pager a').eq(currentPage);
        $('#gallery-pager a').removeClass('active');
        $currentPageTag.addClass('active');
        hashKey = $currentPageTag.attr('href');
        window.history.replaceState("", "", currentUrl + hashKey);

    });
};

var loadAllSlider = function() {
    loadRelatedContentSlider();
    loadMainSlider();
    loadGallerySlider();
    setupGalleryPaging();
};
/**
 * *********************************************
 * Methods Summary: Show Hide Tabs
 * *********************************************
 */
var triggerPostTab = function() {
    //Fadeout All tabs.
    $('.tab-content > div').fadeOut(100);
    //Get the First Link and First Tab Content
    $firstLink = $('.tab-navigation li a')[0];
    $firstTab = $('.tab-content > div')[0];
    //Selected Link and Show Content for first tab
    $($firstLink).addClass('selected');
    $($firstTab).fadeIn(100);
    $('.tab-navigation li a').click(function() {
        //Remove All Selected Class and add to the seleceted one
        $('.tab-navigation li a').removeClass('selected');
        $(this).addClass('selected');
        //Get the Content Tabs According to the Link Click.
        $tabContentClass = $(this).attr('href').replace('#', '.').replace('-tab', '-content');
        //Fadeout All Content Tabs and FadeIn for Selected Content.
        $('.tab-content > div').fadeOut(100);
        $($tabContentClass).fadeIn(500);
    });
};
/**
 * *********************************************
 * Methods Summary: Get Based Url
 * *********************************************
 */
var getBasedUrl = function() {
    var $checkOrigin = /localhost/g;
    var $url = window.location.origin;
    if ($checkOrigin.test(window.location.origin)) {
        $url = 'http://localhost/all4women';
    }

    return $url;
};
/**
 * *********************************************
 * Methods Summary: Function to Load onload
 * *********************************************
 */
$(document).ready(function() {

    setUpMainNavigation();
    loadAllSlider();
    triggerPostTab();
    autoGrid();
    setupPlaceholder();
    $('#loginform').submit(submitAjaxLogin);
    $('#bt-login').click(showLoginDialog);
    $('#bt-login-close').click(hideLoginDialog);
    $('.bt-lostpassword').click(toggleForgotPassword);
    $('#lostpasswordform').submit(submitAjaxLostpassword);
    $('#bt-loadmore').click(loadMorePost);

});

