;(function() {
  'use strict';


  $(activate);

  //setTimeout(activate, 100);

  


  function activate() {

    $('.nav-tabs-slider')
      .scrollingTabs({
        //widthMultiplier: 1,
        leftArrowContent: [
          '<div class="custom-arrow custom-arrow-left">',
          '  <i class="fa fa-long-arrow-left"></i>',
          //'    <use xlink:href="#icon-point-left"></use>',
          //'  </svg>'
          ,
          '</div>'
        ].join(''),
        rightArrowContent: [
          '<div class="custom-arrow custom-arrow-right">',
          '  <i class="fa fa-long-arrow-right"></i>',
          //'    <use xlink:href="#icon-point-right"></use>',
          //'  </svg>',s
          ,
          '</div>'
        ].join('')
      })
      .on('ready.scrtabs', function() {
        $('.tab-content').show();
      });

  }
}());
